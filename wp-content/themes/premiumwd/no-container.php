<?php /* Template Name: No Container */ ?>
<?php get_header(); ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="no-container">
    <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>