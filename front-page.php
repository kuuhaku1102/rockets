<?php get_header(); ?>

<main id="content">

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg">
            <svg class="hero-svg" viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="bg-grad" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color:#050E1F;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#0B1C3E;stop-opacity:1" />
                    </linearGradient>
                    <filter id="glow">
                        <feGaussianBlur stdDeviation="2.5" result="coloredBlur"/>
                        <feMerge>
                            <feMergeNode in="coloredBlur"/>
                            <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                    </filter>
                </defs>
                
                <!-- Dark Background -->
                <rect width="100%" height="100%" fill="url(#bg-grad)" />
                
                <!-- Digital Grid (Perspective) -->
                <g class="digital-grid" stroke="rgba(0, 212, 255, 0.1)" stroke-width="1">
                    <line x1="0" y1="1080" x2="1920" y2="1080" />
                    <line x1="0" y1="900" x2="1920" y2="900" />
                    <line x1="0" y1="750" x2="1920" y2="750" />
                    <line x1="0" y1="630" x2="1920" y2="630" />
                    <line x1="0" y1="530" x2="1920" y2="530" />
                    
                    <line x1="960" y1="530" x2="0" y2="1080" />
                    <line x1="960" y1="530" x2="300" y2="1080" />
                    <line x1="960" y1="530" x2="600" y2="1080" />
                    <line x1="960" y1="530" x2="960" y2="1080" />
                    <line x1="960" y1="530" x2="1320" y2="1080" />
                    <line x1="960" y1="530" x2="1620" y2="1080" />
                    <line x1="960" y1="530" x2="1920" y2="1080" />
                </g>

                <!-- Ascending Data Streams (Animated) -->
                <g class="data-streams" filter="url(#glow)">
                    <rect class="stream s1" x="200" y="1080" width="2" height="100" fill="#00D4FF" opacity="0.5" />
                    <rect class="stream s2" x="500" y="1080" width="3" height="150" fill="#00D4FF" opacity="0.3" />
                    <rect class="stream s3" x="960" y="1080" width="4" height="200" fill="#fff" opacity="0.6" />
                    <rect class="stream s4" x="1400" y="1080" width="2" height="120" fill="#00D4FF" opacity="0.4" />
                    <rect class="stream s5" x="1700" y="1080" width="3" height="180" fill="#00D4FF" opacity="0.5" />
                    <rect class="stream s6" x="350" y="1080" width="1" height="80" fill="#fff" opacity="0.3" />
                    <rect class="stream s7" x="1100" y="1080" width="1" height="250" fill="#00D4FF" opacity="0.2" />
                </g>
                
                <!-- Floating Particles -->
                <g class="particles">
                    <circle class="particle p1" cx="300" cy="800" r="3" fill="#00D4FF" />
                    <circle class="particle p2" cx="1600" cy="700" r="4" fill="#fff" />
                    <circle class="particle p3" cx="800" cy="900" r="2" fill="#00D4FF" />
                    <circle class="particle p4" cx="1200" cy="600" r="3" fill="#00D4FF" />
                </g>
            </svg>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Innovating the Future<br>from Akihabara</h1>
            <p class="hero-subtitle">株式会社秋葉原Rocketsは、Web制作から投資まで、<br>多角的なアプローチでビジネスを加速させます。</p>
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary">お問い合わせ</a>
        </div>
    </section>

    <!-- Intro Sections with Links -->
    <section class="section-padding" style="background: #fff;">
        <div class="container" style="text-align: center;">
            <div class="section-title reveal">
                <h2>Our Business</h2>
                <p>事業内容</p>
            </div>
            
            <div class="services-grid">
                 <!-- Preview of services (3 items) -->
                <div class="service-card reveal">
                     <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=2070&auto=format&fit=crop" alt="Antiques">
                     </div>
                     <div class="service-content">
                        <div class="service-icon"><i class="fas fa-box-open"></i></div>
                        <h3>古物営業</h3>
                        <p>安全確実なリユース事業。</p>
                     </div>
                </div>
                <div class="service-card reveal">
                     <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=2064&auto=format&fit=crop" alt="Web Production">
                     </div>
                     <div class="service-content">
                        <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                        <h3>Web制作・運営</h3>
                        <p>クリエイティブなWeb構築。</p>
                     </div>
                </div>
                <div class="service-card reveal">
                     <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1579532537598-459ecdaf39cc?q=80&w=2070&auto=format&fit=crop" alt="Investment">
                     </div>
                     <div class="service-content">
                        <div class="service-icon"><i class="fas fa-hand-holding-dollar"></i></div>
                        <h3>投資事業</h3>
                        <p>未来への投資。</p>
                     </div>
                </div>
            </div>

            <div class="reveal" style="margin-top: 40px;">
                <a href="<?php echo home_url('/service/'); ?>" class="btn btn-secondary" style="border-color: var(--primary-color); color: var(--primary-color);">事業内容一覧を見る</a>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background: var(--bg-light);">
        <div class="container">
            <div class="about-grid">
                <div class="about-text reveal">
                    <h2>About Us</h2>
                    <p>秋葉原から世界へ。テクノロジーとクリエイティブの融合。</p>
                    <p>常に新しい価値を創造し、「ロケット」のように垂直立ち上げで成長を支援します。</p>
                    <a href="<?php echo home_url('/about/'); ?>" class="btn btn-primary" style="margin-top: 20px;">私たちについて</a>
                </div>
                <div class="about-image reveal">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop" style="border-radius: 10px;" alt="Office">
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
