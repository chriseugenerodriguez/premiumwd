<?php get_header(); ?>
<section class="grey-section largepadding">
			<div class="container">
				<div class="topheader text-center">
       <?php get_template_part('includes/inc/page-title'); ?>
           </div>
  </div>
  </section>
<section class="white-section jquery <?php if(get_option('premiumwd_blog_sidebar') == 'true') { ?>nopadding<?php } ?>"> 

    <div class="container">
 <div class="blog <?php if(get_option('premiumwd_blog_sidebar') == 'true') { ?>nine<?php } else { ?>twelve <?php } ?> columns"> 
      <?php if ( !have_posts() ) : ?>
      <div class="entry"><p><?php _e( 'Sorry, no posts matched your criteria. Try again with some other terms.', 'anew' ); ?></p></div>
      <!--/.entry-->
      <?php endif; ?>
 <div class="content">
      <?php if ( have_posts() ) : while ( have_posts() ): the_post()?>
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
      <?php endif; ?>

    <?php echo pagination(); ?> 
</div>
</div>
  
  <?php if(get_option('premiumwd_blog_sidebar') == 'true'): ?>  
	<aside class="three columns clearfix"> <div id="sidebar"> <?php dynamic_sidebar( 'Blog Widget Area' ); ?> </div> </aside>
	<?php endif; ?> 
   </section>


<?php get_footer(); ?>
