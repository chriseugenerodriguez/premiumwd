<?php /* Template Name: No Title */ ?>
<?php get_header(); ?>

<div id="container" class="container">
  <section class="fluid-container">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </section>
</div>
<?php get_footer(); ?>