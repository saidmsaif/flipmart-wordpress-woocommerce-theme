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