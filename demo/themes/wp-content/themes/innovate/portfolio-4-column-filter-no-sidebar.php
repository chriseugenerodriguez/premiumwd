<?php /* Template Name: Portfolio 4 Columns */ ?>

<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/showcase.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/mosaic.1.0.1.js"></script>
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/mosaic.css" type="text/css" media="screen" />

<script type="text/javascript">  
			jQuery(function($){
				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});
		    });
		</script>

<div id="container">
			<div id="content" role="main">

 <div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1><?php  
        $terms = get_terms("tagportfolio");  
        $count = count($terms);  
        echo '<div id="portfolio-filter"><a id="sort-portfolio" href="#">Sort Portfolio <em class="icon-th"></em></a><ul>';  
        echo '<li><a href="#all" title="">All</a></li>';  
            if ( $count > 0 )  
            {     
                foreach ( $terms as $term ) {  
                    $termname = strtolower($term->name);  
                    $termname = str_replace(' ', '-', $termname);  
                    echo '<li><a href="#'.$termname.'" title="" rel="'.$termname.'">'.$term->name.'</a></li>';  
                }  
            }  
        echo "</ul></div>";  
    ?>  </div></div>
    <div id="entry-content">
<div class="entry-content-4 clearfix">

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array('post_type' => 'project', 'posts_per_page' => get_option('premiumwd_portfolio_perpage') , 'paged'=>$paged  )); $count =0; ?>

<ul id="portfolio-list">
<?php if ( $wp_query ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>                        
<?php  $terms = get_the_terms( $post->ID, 'tagportfolio' );  if ( $terms && ! is_wp_error( $terms ) ) : $links = array(); foreach ( $terms as $term )   {   $links[] = $term->name;  }  $links = str_replace(' ', '-', $links);   $tax = join( " ", $links );  else : $tax = '';  endif;  ?>  
                                       
<?php if (get_option('premiumwd_width') == '960px') : ?>        
<li class="portfolio-item thumb-4-column portfolio-4-column-960 <?php echo strtolower($tax); ?> all">
<div class="thumb-4-column-960 mosaic-block circle">
<a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
<div class="mosaic-backdrop"><?php the_post_thumbnail('portfolio-4-column-960'); ?></div>
</div>
<div class="item-description">
<a href="<?php echo get_permalink(); ?>"><h5><?php the_title();?></h5>
<p><?php echo $term->name ?></p></a>
</div>
</li>
<?php endif; ?>  	
            
<?php if (get_option('premiumwd_width') == '1040px') : ?>        
<li class="portfolio-item thumb-4-column portfolio-4-column-1040 <?php echo strtolower($tax); ?> all">
<div class="thumb-4-column-1040 mosaic-block circle">
<a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
<div class="mosaic-backdrop"><?php the_post_thumbnail('portfolio-4-column-1040'); ?></div>
</div>
<div class="item-description">
<a href="<?php echo get_permalink(); ?>"><h5><?php the_title();?></h5>
<p><?php echo $term->name ?></p></a>
</div>
</li>
<?php endif; ?>  
	  
<?php if (get_option('premiumwd_width') == '1120px') : ?>        
<li class="portfolio-item thumb-4-column portfolio-4-column-1120 <?php echo strtolower($tax); ?> all">
<div class="thumb-4-column-1120 mosaic-block circle">
<a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
<div class="mosaic-backdrop"><?php the_post_thumbnail('portfolio-4-column-1120'); ?></div>
</div>
<div class="item-description">
<a href="<?php echo get_permalink(); ?>"><h5><?php the_title();?></h5>
<p><?php echo $term->name ?></p></a>
</div>
</li>
<?php endif; ?>  
                           
<?php endwhile; else: ?>
<li class="error-not-found">Sorry, no portfolio entries yet.</li>					
<?php endif; ?>
			
</ul>
<div class="clearboth"></div>


<script>
jQuery(document).ready(function() {	
jQuery("#portfolio-list").filterable();
});
</script>
            
         
<?php pagination(); ?>

	
  
    </div>         
	</div>  
	
<?php get_footer(); ?>