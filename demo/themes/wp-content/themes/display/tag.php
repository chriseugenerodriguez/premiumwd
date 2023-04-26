<?php get_header(); ?>

<div class="wrapper">
  <div class="page-title clearfix">
    <div class="container">
      <div class="twelve columns clearfix">
        <h1><?php printf( __( 'Tag: %s', 'innovate' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
      </div>
    </div>
  </div>
  <div id="content" class="clearfix">
    <section id="post-area" class="col masonry isotope" >
      <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
      <?php if ($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
      <?php echo get_template_part('includes/blog/blog-format', 'structure');?>
      <?php endwhile; else:?>
      <?php endif; ?>
    </section>
    <!-- Margin --> 
    
  </div>
</div>
</div>
<?php get_footer(); ?>
