                                
<section id="blog-similar-posts" class="clearfix">
<h4>Related Articles</h4>
<ul>
<?php    $orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args=array(
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=> 4, // Number of related posts that will be shown.
	'caller_get_posts'=>1
	); 
      
    $my_query = new wp_query($args); 
    if( $my_query->have_posts() ) {  while ($my_query->have_posts()) { $my_query->the_post();  
    ?>  
    <li> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	<?php the_post_thumbnail('related_posts', array('title' => "", 'alt' => "")); ?></a>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a>
    </li> 
	<?php }  
    ?>  
       
<?
}
echo '</ul></section>';
}
$post = $orig_post;
wp_reset_query(); ?>
                            