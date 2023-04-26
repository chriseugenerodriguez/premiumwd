<?php /* Template Name: Page No Sidebar */ ?>
<?php get_header(); ?>

<div class="container">
  <?php while ( have_posts() ): the_post(); ?>
  <article <?php post_class('group'); ?>>
    <h1 class="post-title pad">
      <?php the_title(); ?>
    </h1>
    <div class="entry container">
      <?php the_content(); ?>
    </div>
    <!--/.entry--> 
  </article>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
