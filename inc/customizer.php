<?php
function customtheme_customize_register($wp_customize) {

  if (!$wp_customize->get_section('colors')) {
    $wp_customize->add_section('colors', [
      'title' => 'Colors',
      'priority' => 30,
    ]);
  }

  $wp_customize->add_setting('site_primary_color', [
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
  ]);

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'site_primary_color',
      [
        'label' => 'Primary Color',
        'section' => 'colors',
      ]
    )
  );
}
add_action('customize_register', 'customtheme_customize_register');
