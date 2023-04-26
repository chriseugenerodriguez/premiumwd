<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mosaic.1.0.1.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mosaic.css" type="text/css" media="screen" />

<script type="text/javascript">  
			jQuery(function($){
				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});
		    });
		</script>

<div id="related-projects">
<div class="columns"><h3 class="margin">Related Works</h3></div>

<ul id="relatedprojects">
<?php

//Get array of terms
$terms = get_the_terms( $post->ID , 'tagportfolio', 'string');
//Pluck out the IDs to get an array of IDS
$term_ids = wp_list_pluck($terms,'term_id');

//Query posts with tax_query. Choose in 'IN' if want to query posts with any of the terms
//Chose 'AND' if you want to query for posts with all terms
  $second_query = new WP_Query( array(
      'post_type' => 'project',
      'tax_query' => array(
                    array(
                        'taxonomy' => 'tagportfolio',
                        'field' => 'id',
                        'terms' => $term_ids,
                        'operator'=> 'IN' //Or 'AND' or 'NOT IN'
                     )),
      'posts_per_page' => 6,
      'ignore_sticky_posts' => 1,
      'orderby' => 'rand',
      'post__not_in'=>array($post->ID)
   ) );

//Loop through posts and display...
    if($second_query->have_posts()) {
     while ($second_query->have_posts() ) : $second_query->the_post(); ?>
     
           <?php if (has_post_thumbnail()) { ?>
       
         
	<?php if (get_option('premiumwd_width') == '960px') : ?>  
    <li class="related-projects"><div class="relatedthumb related-projects-960 mosaic-block circle">
    <a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
	<div class="mosaic-backdrop"> 
	<?php echo the_post_thumbnail('related-projects-960', array('title' => "")); ?></a><?php endif; ?>

    <?php if (get_option('premiumwd_width') == '1040px') : ?> 
	<li class=" related-projects"><div class="relatedthumb related-projects-1040 mosaic-block circle">
    <a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
	<div class="mosaic-backdrop"> 
	<?php echo the_post_thumbnail('related-projects-1040', array('title' => "")); ?></a><?php endif; ?>
    
    <?php if (get_option('premiumwd_width') == '1120px') : ?> 
	<li class="related-projects"><div class="relatedthumb related-projects-1120 mosaic-block circle">
    <a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
	<div class="mosaic-backdrop "> 
	<?php echo the_post_thumbnail('related-projects-1120', array('title' => "")); ?></a><?php endif; ?>
    </div></div>
    </li> 

            <?php } ?>
       
   <?php endwhile; wp_reset_query();
   }
?>
</ul>
</div>
