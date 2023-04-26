<?php get_header(); ?>
<div class="container">
    <div class="content pad">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class('group'); ?>>
              <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    </div> </div>
<?php get_footer(); ?>