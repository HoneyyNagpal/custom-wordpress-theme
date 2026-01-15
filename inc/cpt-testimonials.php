<?php
if (!defined('ABSPATH')) exit;

add_action('init', function () {
  register_post_type('testimonial', [
    'labels' => [
      'name' => 'Testimonials',
      'singular_name' => 'Testimonial',
    ],
    'public' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-format-quote',
    'supports' => ['title', 'editor'],
  ]);
});
