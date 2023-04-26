<?php get_header(); ?>

<div class="container">
  <section class="nine columns">
    <div class=" content">
      <?php get_template_part('includes/inc/page-title'); ?>
      <?php if ( !have_posts() ) : ?>
      <div class="entry">
        <p>
          <?php _e( 'Sorry, no posts matched your criteria. Try again with some other terms.', 'anew' ); ?>
        </p>
      </div>
      <!--/.entry-->
      <?php endif; ?>
      <?php if ( have_posts() ) : while ( have_posts() ): the_post()?>
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!--/.pad--> 
    <?php echo pagination(); ?> </section>
  <!--/.content-->
  
  <aside class="three columns clearfix">
    <div id="sidebar">
      <?php dynamic_sidebar( 'Blog Widget Area' ); ?>
    </div>
  </aside>
</div>
<?php get_footer(); ?>
