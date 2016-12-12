<?php

    function p2h_add_scripts() {

        $js_file = 'main.min.js';
        $js_url = JS_PATH . '/' . $js_file;

        // Register the js
        // wp_register_script( $handle_name, $src, $deps, $ver, $in_footer );
        wp_register_script('fwp_js', $js_url, array('jquery'), NULL, true);
        wp_register_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), NULL, true);

        // Load all defaults
        wp_enqueue_script('slick');
        wp_enqueue_script('fwp_js');

        global $wp_query;

    }

    add_action( 'wp_enqueue_scripts', 'p2h_add_scripts' );

?>