<?php
if (!defined('ABSPATH')) exit;

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/security.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/inc/cpt-services.php';
require get_template_directory() . '/inc/cpt-testimonials.php';




add_filter('wp_lazy_loading_enabled', '__return_true');


 
  
  
  
