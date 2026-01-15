<?php
if (!defined('ABSPATH')) exit;

add_action('init', function () {
  register_post_type('service', [
    'labels' => [
      'name' => 'Services',
      'singular_name' => 'Service',
    ],
    'public' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-hammer',
    'supports' => ['title', 'editor'],
  ]);
});
