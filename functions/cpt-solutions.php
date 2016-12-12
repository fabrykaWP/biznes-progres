<?php

// Register the post types on init
add_action('init', 'cpt_solutions', 0);

// Function to register a post type (the proper way)
function cpt_solutions() {
    register_post_type('solution', array(
        'labels' => array(
            'name' => __('Rozwiązania'),
            'singular_name' => __('Rozwiązanie'),
            'add_new' => _x('Dodaj nowe', 'Discuss item'),
            'add_new_item' => __('Dodaj nowe rozwiązanie'),
        ),
        'public' => true,
        'has_archive' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'rewrite' => array(
            "slug" => 'solution'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));
}

