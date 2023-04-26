<?php get_header(); ?>

<section class="container">
  <div class="nine columns">
    <?php if ( have_posts() ) : ?>
    <div class="content">
      <?php while ( have_posts() ): the_post(); ?>
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
    </div>
    <?php echo pagination(); ?>
    <?php endif; ?>
  </div>
  <!--/.pad-->

    <aside class="three columns clearfix">
      <div id="sidebar">
        <?php dynamic_sidebar( 'Blog Widget Area' ); ?>
      </div>
    </aside>
</section>
<!--/.content-->

<?php get_footer(); ?>
