<?php
if (!defined('ABSPATH')) exit;

/**
 * Excerpt length
 */
function customtheme_excerpt_length($length) {
  return 20;
}
add_filter('excerpt_length', 'customtheme_excerpt_length');
