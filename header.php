<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
    <style>
      /* Quick inline styles for hero animation consistency */
      .hero {
          background-size: cover;
          background-position: center;
          /* Fallback if image fails */
          background: linear-gradient(135deg, #0B1C3E 0%, #112240 100%);
      }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="logo-icon"><i class="fas fa-rocket" style="color: white; padding: 7px;"></i></span>
                <span>Akihabara Rockets</span>
            </a>
        </div>

        <button class="menu-toggle" aria-label="Toggle Navigation">
            <i class="fas fa-bars"></i>
        </button>

        <nav class="main-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => false,
            ) );
            ?>
            <!-- Fallback static menu for dev/preview content -->
            <?php if ( ! has_nav_menu( 'primary' ) ) : ?>
            <ul>
                <li><a href="<?php echo home_url('/about/'); ?>">About</a></li>
                <li><a href="<?php echo home_url('/service/'); ?>">Services</a></li>
                <li><a href="<?php echo home_url('/cases/'); ?>">Cases</a></li>
                <li><a href="<?php echo home_url('/company/'); ?>">Company</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
            </ul>
            <?php endif; ?>
        </nav>
    </div>
</header>
