<?php /* Template Name: Blog Masonry */ ?>
<?php get_header(); ?>
<div id="content" class="container">
	<div class="twelve columns">
    <article id="post-area" class="col masonry isotope" >
    <?php global $wp_query; global $post; ?>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
    <?php  $blog = new WP_Query(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged )); ?>
    <?php if ($blog->have_posts()) : ?>
    <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
    <?php get_template_part('post'); ?>
    <?php endwhile; $wp_query = $blog; ?>
    <?php endif; ?>
  </article>
  <div id="pagination">
    <?php if (get_next_posts_link()) { ?>
    <div class="load_more_button_holder"> <span class="button" rel="<?php echo $wp_query->max_num_pages; ?>"><?php echo get_next_posts_link(__('Show more')); ?></span> </div>
    <?php } ?>
  </div>
  </div>
  <!--/.pad--> 
<!--/.content-->
</div>
<?php get_footer(); ?>
