<?php /* Template Name: Blank */ ?>
<?php get_header(); ?>
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class('group'); ?>>
              <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    <!--/.content-->
<?php get_footer(); ?>
