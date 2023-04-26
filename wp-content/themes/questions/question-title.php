<?php /* Template Name: Questions w/ Title*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="columns nine">
    <section id="content" class="border">
      <div class="page-title clearfix">
        <h1><?php the_title(); ?></h1>
      </div>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </section>
  </div>
  <div class="columns three">
    <aside class="sidebar">
      <?php dynamic_sidebar( 'Questions' ); ?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
