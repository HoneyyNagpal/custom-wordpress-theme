<?php get_header(); ?>

<main>
<h1><?php the_archive_title(); ?></h1>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">View</a>
    </article>
<?php
    endwhile;
endif;
?>
</main>

<?php get_footer(); ?>
