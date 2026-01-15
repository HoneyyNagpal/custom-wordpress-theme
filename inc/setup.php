<?php
function customtheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form','comment-form','comment-list']);
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');


    register_nav_menus([
        'primary' => __('Primary Menu', 'customtheme'),
    ]);
}
add_action('after_setup_theme', 'customtheme_setup');
