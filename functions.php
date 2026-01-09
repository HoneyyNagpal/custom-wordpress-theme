<?php

// Theme setup
function cwt_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'cwt_theme_setup');

// Custom Post Type: Articles
function cwt_register_post_type() {
    register_post_type('article', array(
        'labels' => array(
            'name' => __('Articles'),
            'singular_name' => __('Article')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'cwt_register_post_type');

// REST API Endpoint
add_action('rest_api_init', function () {
    register_rest_route('cwt/v1', '/articles', array(
        'methods' => 'GET',
        'callback' => 'cwt_get_articles',
    ));
});

function cwt_get_articles() {
    return get_posts(array(
        'post_type' => 'article',
        'numberposts' => 10
    ));
}
