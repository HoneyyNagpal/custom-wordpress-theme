<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-inner">

    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <nav class="site-nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
        ]);
      ?>
    </nav>

  </div>
</header>


