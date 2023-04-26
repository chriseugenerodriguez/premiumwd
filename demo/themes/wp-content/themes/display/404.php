<?php /* Template Name: 404 Page */ ?>
<?php get_header(); ?>

<div class="wrapper">
<div class="page-title clearfix">
  <div class="container">
    <h1>
      <?php _e('404', 'Display') ?>
    </h1>
  </div>
</div>
<div class="container">
  <section class="twelve columns center">
    <div class="icon-exclamation"> <i class="fa fa-exclamation-circle"></i></div>
    <div id="error-message">
      <?php _e('Nothing Found', 'Display') ?>
    </div>
    <p>
      <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Display' ); ?>
    </p>
    <?php get_search_form(); ?>
  </section>
</div>
</div>
</div>
<?php get_footer(); ?>
