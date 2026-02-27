jQuery(document).ready(function($) {
    // Header Scroll Effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.site-header').addClass('scrolled');
        } else {
            $('.site-header').removeClass('scrolled');
        }
    });

    // Mobile Menu Toggle
    $('.menu-toggle').click(function() {
        $('.main-nav').toggleClass('active');
        $(this).find('i').toggleClass('fa-bars fa-times');
    });

    // Smooth Scroll for Anchors
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80 // Offset for fixed header
            }, 1000);
            
            // Close mobile menu if open
            if ($('.main-nav').hasClass('active')) {
                $('.main-nav').removeClass('active');
                $('.menu-toggle i').removeClass('fa-times').addClass('fa-bars');
            }
        }
    });

    // Scroll Reveal Animation (Intersection Observer)
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); // Add class to trigger CSS transition
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    $('.reveal').each(function() {
        observer.observe(this);
    });
});
