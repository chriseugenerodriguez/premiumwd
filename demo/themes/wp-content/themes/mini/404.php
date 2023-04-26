<?php get_header(); ?>

<section class="grey-section largepadding">
			<div class="container">
				<div class="topheader text-center">
  <h1><?php _e('404', 'Mini') ?></h1>
  </div>
  </div>
  </section>

<?php while ( have_posts() ): the_post(); ?>
<section class="white-section">  
  <div class="container">
<div class="content text-center">    
<div class="icon-exclamation"> <i class="fa fa-exclamation-circle"></i></div>
<h3><?php _e('Nothing Found', 'Mini') ?></h3>
<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Mini' ); ?></p>
<?php get_search_form(); ?>
<?php endwhile; ?>
</section>

<!--/.content-->

<?php get_footer(); ?>
