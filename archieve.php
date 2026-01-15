<?php get_header(); ?>

<main>
  <h1><?php the_archive_title(); ?></h1>

  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      get_template_part('template-parts/content/content', 'post');
    endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>

