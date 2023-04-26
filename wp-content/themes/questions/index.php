<?php get_header(); ?>

<div class="container">
    <?php if ( have_posts() ) : ?>
    <div class="content">
      <?php while ( have_posts() ): the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <!--/.pad-->
  
</div>
<!--/.content-->

<?php get_footer(); ?>
