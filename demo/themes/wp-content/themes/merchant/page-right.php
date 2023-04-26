<?php /* Template Name: Page Right Sidebar */ ?>
<?php get_header(); ?>

<div class="container pad">
  <section class="nine columns">
    <div class="content">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class('group'); ?>>
        <h1>
          <?php the_title(); ?>
        </h1>
            <div class="entry container">
              <?php the_content(); ?>
        </div>
      </article>
      <?php endwhile; ?>
    </div>
  </section>
<aside class="three columns clearfix">
  <div id="sidebar">
    <?php dynamic_sidebar( 'Page Widget Area' ); ?>
  </div>
</aside>
</div>
<?php get_footer(); ?>
