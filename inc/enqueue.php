<?php
function customtheme_assets() {

  wp_enqueue_style(
    'customtheme-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    wp_get_theme()->get('Version')
  );

  $color = get_theme_mod('site_primary_color', '#000000');
  wp_add_inline_style(
    'customtheme-main',
    ":root{--primary-color:{$color};}"
  );
}
add_action('wp_enqueue_scripts', 'customtheme_assets');



