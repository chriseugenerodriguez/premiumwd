<?php get_header(); ?>

<div class="content-wrapper">
<div class="page-title clearfix">
  <div class="container text-center">
    <h1><?php _e('404', 'ellion') ?></h1>
  </div>
</div>
<?php while ( have_posts() ): the_post(); ?>
  <div class="container littlepadding">
<div class="content text-center">    
<div class="icon-exclamation"> <i class="fa fa-exclamation-circle"></i></div>
<h3><?php _e('Nothing Found', 'Mini') ?></h3>
<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Mini' ); ?></p>
<?php get_search_form(); ?>
<?php endwhile; ?>
</div>
</div>
</div>
<?php get_footer(); ?>
