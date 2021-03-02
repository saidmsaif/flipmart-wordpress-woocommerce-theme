<?php
    function flipmart_theme_Setup() {
        // Add Theme Supports
        load_theme_textdomain('flipmart');
        add_theme_support('title-tag');
        add_theme_support('description');
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-logo' );
    }
    add_action('after_setup_theme', 'flipmart_theme_Setup');

    function flipmart_assets_enqueue() {
        // Stylesheet Enqueue
        wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(  ) );
        wp_enqueue_style( 'flipmart-main-stylesheet', get_template_directory_uri(  ).'/assets/css/main.css' );
        wp_enqueue_style( 'flipmart-blue-stylesheet', get_template_directory_uri(  ).'/assets/css/blue.css' );
        wp_enqueue_style( 'flipmart-owl-carousel-stylesheet', get_template_directory_uri(  ).'/assets/css/owl.carousel.css' );
        wp_enqueue_style( 'flipmart-owl-transitions-stylesheet', get_template_directory_uri(  ).'/assets/css/owl.transitions.css' );
        wp_enqueue_style( 'flipmart-animate-stylesheet', get_template_directory_uri(  ).'/assets/css/animate.min.css' );
        wp_enqueue_style( 'flipmart-rateit-stylesheet', get_template_directory_uri(  ).'/assets/css/rateit.css' );
        wp_enqueue_style( 'flipmart-bootstrap-select-stylesheet', get_template_directory_uri(  ).'/assets/css/bootstrap-select.min.css' );
        wp_enqueue_style( 'flipmart-font-awesome-stylesheet', get_template_directory_uri(  ).'/assets/css/font-awesome.css' );
    }
    add_action( 'wp_enqueue_scripts', 'flipmart_assets_enqueue' );