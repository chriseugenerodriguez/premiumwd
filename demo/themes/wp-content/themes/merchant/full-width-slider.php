<?php /* Template Name: Full Width w/ Slider */ ?>
<?php get_header(); ?>
<div class="slider-container">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class('group'); ?>>
              <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    <!--/.content-->
</div>
<?php get_footer(); ?>
