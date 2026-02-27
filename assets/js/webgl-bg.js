// webgl-bg.js
document.addEventListener("DOMContentLoaded", () => {
    // 1. Setup Three.js Scene
    const canvas = document.querySelector('#bg-canvas');
    if (!canvas) return;

    const scene = new THREE.Scene();

    // Add Fog (Dark Red/Black like villain hideout)
    scene.fog = new THREE.FogExp2(0x0a0002, 0.001);

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 2000);
    camera.position.z = 40;
    camera.position.y = 10;
    camera.rotation.x = -0.2;

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true,
        antialias: true
    });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth, window.innerHeight);

    // 2. Objects in Scene

    // Digital Terrain (Wireframe Grid)
    const geometry = new THREE.PlaneGeometry(200, 200, 60, 60);
    // Displace vertices to make terrain
    const pos = geometry.attributes.position;
    for (let i = 0; i < pos.count; i++) {
        const z = Math.random() * 3;
        pos.setZ(i, z);
    }
    geometry.computeVertexNormals();

    const material = new THREE.MeshBasicMaterial({
        color: 0xff0033, // Team Rocket Red
        wireframe: true,
        transparent: true,
        opacity: 0.2
    });

    const terrain = new THREE.Mesh(geometry, material);
    terrain.rotation.x = -Math.PI / 2;
    terrain.position.y = -10;
    scene.add(terrain);

    // Flowing Particles (Data stream / energy)
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 800;
    const posArray = new Float32Array(particlesCount * 3);

    for (let i = 0; i < particlesCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 150;
    }

    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
    const particleMaterial = new THREE.PointsMaterial({
        size: 0.6,
        color: 0xffffff, // White
        transparent: true,
        opacity: 0.7,
        blending: THREE.AdditiveBlending
    });

    const particlesBox = new THREE.Points(particlesGeometry, particleMaterial);
    scene.add(particlesBox);

    // 3. Mouse Interaction & Responsive
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;

    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;

    document.addEventListener('mousemove', (event) => {
        mouseX = (event.clientX - windowHalfX);
        mouseY = (event.clientY - windowHalfY);
    });

    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

    // 4. GSAP Scroll Animations
    gsap.registerPlugin(ScrollTrigger);

    // Animate camera on scroll
    gsap.to(camera.position, {
        y: -10,
        z: 20,
        scrollTrigger: {
            trigger: "body",
            start: "top top",
            end: "bottom bottom",
            scrub: 1
        }
    });

    gsap.to(terrain.rotation, {
        z: Math.PI / 4,
        scrollTrigger: {
            trigger: "body",
            start: "top top",
            end: "bottom bottom",
            scrub: 2
        }
    });

    // Animate HTML UI Elements with ScrollTrigger
    const reveals = document.querySelectorAll('.reveal');
    reveals.forEach(el => {
        gsap.fromTo(el,
            { opacity: 0, y: 50 },
            {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 85%",
                }
            }
        );
    });

    // SVG R Logo drawing animation (Team Rocket style)
    const rPath = document.querySelector('.draw-r-path');
    const rBg = document.querySelector('#rocket-r-bg');
    if (rPath && rBg) {
        const rLen = rPath.getTotalLength();
        rPath.style.strokeDasharray = rLen;
        rPath.style.strokeDashoffset = rLen;

        // Appear the SVG box first
        gsap.to(rBg, { opacity: 0.15, duration: 1, ease: "power2.out" });

        // Draw the red stroke
        gsap.to(rPath, {
            strokeDashoffset: 0,
            duration: 2.5,
            ease: "power2.inOut",
            delay: 0.5,
            onComplete: () => {
                // Heartbeat / evil pulse effect
                gsap.to(rBg, {
                    filter: "drop-shadow(0 0 50px #ff0033)",
                    opacity: 0.25,
                    duration: 1.5,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
            }
        });
    }

    // SVG Line drawing animation
    const svgLines = document.querySelectorAll('.svg-line path');
    svgLines.forEach(path => {
        const length = path.getTotalLength();
        path.style.strokeDasharray = length;
        path.style.strokeDashoffset = length;

        gsap.to(path, {
            strokeDashoffset: 0,
            duration: 2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: path,
                start: "top 80%",
            }
        });
    });

    // 5. Render Loop
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);

        const elapsedTime = clock.getElapsedTime();

        // Parallax Mouse Effect
        targetX = mouseX * 0.001;
        targetY = mouseY * 0.001;

        particlesBox.rotation.y += 0.05 * (targetX - particlesBox.rotation.y);
        particlesBox.rotation.x += 0.05 * (targetY - particlesBox.rotation.x);

        // Auto rotate slightly
        terrain.position.z = (elapsedTime * 2) % 10; // Endless moving forward effect
        particlesBox.rotation.y += 0.001;

        renderer.render(scene, camera);
    }
    animate();
});
