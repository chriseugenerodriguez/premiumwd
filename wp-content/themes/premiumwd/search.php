<?php get_header(); ?>

<section class="container">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
    <?php query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged, 's'=>get_search_query(), 'post_type'=>'post' )); ?>
    <?php if ($wp_query->have_posts()) : ?>
	<h3 class="post-title pad text-center">
			<i class="fa fa-search"></i>
			<?php //$search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?> 
      <?php echo $wp_query->post_count; ?>
			<?php _e('Results'); ?> <?php _e('for'); ?> <span>"<?php echo get_search_query(); ?>"</span>
		</h3>
  <div class="twelve columns">
    
    <div class="content">
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>        
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
    </div>
  </div>

     <?php echo pagination(); ?>
   <?php else: ?>
    <h3 class="post-title pad">      
      <i class="fa fa-exclamation-circle"></i>
      <?php _e('No Result Found'); ?> <?php _e('for'); ?> <span>"<?php echo get_search_query(); ?>"</span>
            <?php echo get_search_form(); ?>
    </h3>
    <?php endif; ?>
 </section>

<?php get_footer(); ?>