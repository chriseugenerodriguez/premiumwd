<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>

<div class="wrapper">
<div class="page-title clearfix">
  <div class="container">
  <h1> <?php printf( __( 'Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?> </h1>
  </div>
</div>
<div id="wrap">
<div id="content" class="clearfix">
  <section id="post-area">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php echo get_template_part('includes/blog/blog-format', 'structure');?>
      <?php endwhile; else:?>
      <p class="center">
        <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Display' ); ?>
      </p>
      <?php get_search_form(); ?>
        <?php endif; ?>
        <?php echo pagination(); ?>
      
      <!-- Margin --> 
    </section>
  </div>
  <!-- #wrap --> 
</div>
<!-- .container -->

<?php get_footer(); ?>
