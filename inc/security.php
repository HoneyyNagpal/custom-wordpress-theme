<?php
// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Hide WordPress version
remove_action('wp_head', 'wp_generator');

// Remove emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove embeds
remove_action('wp_head', 'wp_oembed_add_host_js');
