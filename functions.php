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
        wp_enqueue_style( 'bootstrap-stylesheet', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'flipmart-main-stylesheet', get_template_directory_uri(  ).'/assets/css/main.css' );
        wp_enqueue_style( 'flipmart-blue-stylesheet', get_template_directory_uri(  ).'/assets/css/blue.css' );
        wp_enqueue_style( 'flipmart-owl-carousel-stylesheet', get_template_directory_uri(  ).'/assets/css/owl.carousel.css' );
        wp_enqueue_style( 'flipmart-owl-transitions-stylesheet', get_template_directory_uri(  ).'/assets/css/owl.transitions.css' );
        wp_enqueue_style( 'flipmart-animate-stylesheet', get_template_directory_uri(  ).'/assets/css/animate.min.css' );
        wp_enqueue_style( 'flipmart-rateit-stylesheet', get_template_directory_uri(  ).'/assets/css/rateit.css' );
        wp_enqueue_style( 'flipmart-bootstrap-select-stylesheet', get_template_directory_uri(  ).'/assets/css/bootstrap-select.min.css' );
        wp_enqueue_style( 'flipmart-font-awesome-stylesheet', get_template_directory_uri(  ).'/assets/css/font-awesome.css' );

        // Script Enqueue
        wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', array('jquery'), time(), true );
        wp_enqueue_script( 'bootstrap-hover-dropdown-js', get_template_directory_uri(  ).'/assets/js/bootstrap-hover-dropdown.min.js', null, time(), true );
        wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri(  ).'/assets/js/owl.carousel.min.js',  null, time(), true  );
        wp_enqueue_script( 'echo-js', get_template_directory_uri(  ).'/assets/js/echo.min.js',  null, time(), true  );
        wp_enqueue_script( 'easing-js', get_template_directory_uri(  ).'/assets/js/jquery.easing-1.3.min.js', array('jquery'), time(), true );
        wp_enqueue_script( 'bootstrap-slider-js', get_template_directory_uri(  ).'/assets/js/bootstrap-slider.min.js', null, time(), true );
        wp_enqueue_script( 'rateit-js', get_template_directory_uri(  ).'/assets/js/jquery.rateit.min.js', array('jquery'), time(), true );
        wp_enqueue_script( 'lightbox-js', get_template_directory_uri(  ).'/assets/js/lightbox.min.js', null, time(), true );
        wp_enqueue_script( 'bootstrap-select-js', get_template_directory_uri(  ).'/assets/js/bootstrap-select.min.js', null, time(), true );
        wp_enqueue_script( 'wow-js', get_template_directory_uri(  ).'/assets/js/wow.min.js', null, time(), true );
        wp_enqueue_script( 'scripts-js', get_template_directory_uri(  ).'/assets/js/scripts.js', null, time(), true );
    }
    add_action( 'wp_enqueue_scripts', 'flipmart_assets_enqueue' );