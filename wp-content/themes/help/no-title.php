<?php /* Template Name: No Title */ ?>
<?php get_header(); ?>

<div id="container">
  <div id="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</div>
<?php get_footer(); ?>
