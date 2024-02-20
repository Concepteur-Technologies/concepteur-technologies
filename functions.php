<?php
/**
 * Do not change anything until you know what you're doing
 */


 function enqueue_custom_styles() {
    wp_enqueue_style( 'vendors', get_template_directory_uri() . '/assets/css/vendors.min.css' );
    wp_enqueue_style( 'icon', get_template_directory_uri() . '/assets/css/icon.min.css' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'data-analysis', get_template_directory_uri() . '/assets/css/data-analysis.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );