<?php get_header(); ?>

<main class="front-page">

  <!-- INTRO -->
  <section class="intro">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </section>

  <!-- FEATURES -->
  <section class="features">
    <h2>What I Do</h2>
    <div class="features-grid">
      <div class="feature">Custom WordPress Themes</div>
      <div class="feature">Performance Optimization</div>
      <div class="feature">Clean UI & UX</div>
    </div>
  </section>

  <!-- LATEST POSTS -->
  <section class="latest-posts">
    <h2>Latest Posts</h2>

    <?php
    $query = new WP_Query(['posts_per_page' => 3]);
    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
        get_template_part('template-parts/content/content', 'post');
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </section>


  <section class="services">
  <h2>Services</h2>

  <?php
  $services = new WP_Query(['post_type' => 'service', 'posts_per_page' => 3]);
  if ($services->have_posts()) :
    while ($services->have_posts()) : $services->the_post();
      echo '<div class="service-item">';
      the_title('<h3>','</h3>');
      the_content();
      echo '</div>';
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</section>


<section class="testimonials">
  <h2>Testimonials</h2>

  <?php
  $t = new WP_Query(['post_type' => 'testimonial', 'posts_per_page' => 2]);
  if ($t->have_posts()) :
    while ($t->have_posts()) : $t->the_post();
      echo '<blockquote class="testimonial">';
      the_content();
      the_title('<cite>— ','</cite>');
      echo '</blockquote>';
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</section>


  <!-- CTA -->
  <section class="cta">
    <h2>Let’s Work Together</h2>
    <p>Get in touch to build something great.</p>
  </section>

</main>

<?php get_footer(); ?>
