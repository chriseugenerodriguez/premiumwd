<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<div class="wrapper">
  <div id="wrap">
    <div id="content" class="clearfix">
      <section id="post-area" class="col masonry isotope" >
        <?php global $wp_query; global $post; ?>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        <?php  query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged )); ?>
        <?php if ($wp_query->have_posts()) : ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <?php echo get_template_part('includes/blog/blog-format', 'structure');?>
        <?php endwhile; ?>
        <?php endif; ?>
        <div id="pagination">
          <?php if (get_next_posts_link()) { ?>
          <div class="load_more_button_holder"> <span class="portfolio-button" rel="<?php echo $wp_query->max_num_pages; ?>"><?php echo get_next_posts_link(__('Show more')); ?></span> </div>
          <?php } ?>
        </div>
      </section>
    </div>
    <!-- .container --> 
  </div>
  <!-- #wrap --> 
</div>
</div>
<?php get_footer(); ?>
