<?php
    add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );
    function my_plugin_assets() {
        wp_enqueue_script('newsletter', get_stylesheet_directory_uri() . '/resources/scripts/newsletter.js', array(), '1.0.0');
        wp_enqueue_script('splide_gallery', get_stylesheet_directory_uri() . '/resources/scripts/splide_gallery.js', array(), '1.0.0');
    }