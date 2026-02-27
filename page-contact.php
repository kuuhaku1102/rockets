<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<main id="content">
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-bg">
            <img src="https://images.unsplash.com/photo-1596524430615-b46476ddc820?q=80&w=2070&auto=format&fit=crop" alt="Contact Header">
        </div>
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Contact Us</h1>
            <p>お問い合わせ</p>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-section section-padding">
        <div class="container" style="max-width: 800px;">
            <p style="margin-bottom: 40px; text-align: center;">
                お仕事のご依頼、・ご相談、採用に関するお問い合わせなど、<br>
                お気軽にお問い合わせください。
            </p>
            
            <div class="contact-form-wrapper" style="background: #f8fafc; padding: 40px; border-radius: 10px;">
                <!-- Standard WP Contact Form Shortcode Placeholder -->
                <!-- Use a plugin like CF7 or similar -->
                <p>[Contact Form Placeholder - Install Contact Form 7]</p>
                <div class="contact-buttons" style="margin-top: 30px; text-align: center;">
                     <a href="mailto:info@akihabararockets.co.jp" class="btn btn-primary"><i class="fas fa-envelope"></i> メールで問い合わせる</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
