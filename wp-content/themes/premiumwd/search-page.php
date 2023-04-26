<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<?php

global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
  foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
  } // foreach
} //if

echo "get_search_query : ".get_search_query();
exit();
$query = apply_filters( 'get_search_query', get_query_var( 's' ) );
 
    if ( $escaped )
        $query = esc_attr( $query );


//echo " Search query : ".$query;
//echo " Search query : ".get_search_query();
?>

<section class="container">
	<h3 class="post-title pad">
			<?php if ( have_posts() ): ?><i class="fa fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fa fa-exclamation-circle"></i><?php endif; ?>
			<?php 
      $search = new WP_Query($search_query);
      global $wp_query;
      $total_results = $wp_query->found_posts;
      $search_count = 0; 
      //$search = new WP_Query("s=$s & showposts=-1"); 
      if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?> 
			<?php _e('Results'); ?> <?php _e('for'); ?> <span>"<?php echo get_search_query(); ?>"</span>
            <?php echo get_search_form(); ?>
		</h3>
  <div class="twelve columns">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
    <?php query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged)); ?>
    <?php if ($wp_query->have_posts()) : ?>
    <div class="content">
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>
     <?php echo pagination(); ?>
    <?php endif; ?>
 

<?php get_footer(); ?>