<?php
/**
 * Akihabara Rockets Theme Functions
 */

function akihabara_rockets_scripts() {
    // Styles
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Sora:wght@400;600;700&display=swap', array(), null );
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_style( 'tcg-theme-style', get_template_directory_uri() . '/assets/css/tcg-theme.css', array('main-style'), '1.0.0' );
    
    // Scripts
    // Enqueue FontAwesome for icons (using CDN for simplicity)
    wp_enqueue_script( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js', array(), '6.4.0', true );
    
    // Main Custom JS
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'akihabara_rockets_scripts' );

function akihabara_rockets_setup() {
    // Add dynamic title tag support
    add_theme_support( 'title-tag' );
    
    // Add post thumbnail support
    add_theme_support( 'post-thumbnails' );
    
    // Register Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'akihabara-rockets' ),
        'footer'  => __( 'Footer Menu', 'akihabara-rockets' ),
    ) );
}
add_action( 'after_setup_theme', 'akihabara_rockets_setup' );
