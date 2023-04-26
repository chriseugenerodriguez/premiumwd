<?php 
/*
Template Name: My Account
*/
get_header(); ?>
<div class="title"><h2><?php the_title(); ?></h2></div>
<div id="container">
  <section id="content">
 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </section>
</div>
<!--/.content-->

<?php get_footer(); ?>
