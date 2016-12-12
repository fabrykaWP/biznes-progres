<?php

  function p2h_add_styles() {

    $css_file = (WP_DEBUG) ? 'main.css' : 'main.min.css';
    $css_url = CSS_PATH . '/' . $css_file;

    wp_register_style('fwp_css', $css_url, null, null);
    
    // Load the fabrykaWP DEV template CSS
    wp_enqueue_style('fwp_css');

    // Load the difulte WordPress style.css
    wp_enqueue_style( 'wp_css', get_stylesheet_uri() );

  }

  add_action( 'wp_enqueue_scripts', 'p2h_add_styles' );

?>