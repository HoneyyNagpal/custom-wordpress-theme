<article>

  <?php
  if (has_post_thumbnail()) {
    the_post_thumbnail('large', ['loading' => 'lazy']);
  }
  ?>

  <h2><?php the_title(); ?></h2>

  <div>
    <?php the_excerpt(); ?>
  </div>

</article>

