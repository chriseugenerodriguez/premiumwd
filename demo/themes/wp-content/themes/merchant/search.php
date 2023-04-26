<?php get_header(); ?>
<div class="container padding-top">
  <section class="nine columns">
    <div class="post content">
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
    <?php
    if(isset($_GET['post_type'])) {
        $type = $_GET['post_type'];
        if($type == 'product') {?>
			<?php get_template_part('post-product'); ?>			
        <?php    
        } else {?>
			<?php get_template_part('post'); ?>
        <?php }
    }
    ?>
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
