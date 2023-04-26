<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancybox-init.js" type="text/javascript"></script>

			<div id="container">
			<div id="content" role="main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
   <div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php the_title(); ?> / <span id="sub-title"><?php { $subtitle = get_post_meta ($post->ID, 'sub-heading', $single = true);  if($subtitle !== '') echo $subtitle;} ?></span></h1>	

 <?php if (get_option('premiumwd_portfolio_pagnation', 'true') == 'true'): ?>            
<div id="portfolio-navi">
<ul>
<li><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'innovate' ) . '</span> Previous' ); ?></li>
<li><a href="/<?php echo (get_option('premiumwd_portfolio_url')); ?>"><em class="icon-th"></em></a></li>
<li><?php next_post_link( '%link', 'Next <span class="meta-nav">' . _x( '&rarr;',  'innovate' ) . '</span>' ); ?></li>
</ul>
</div>
<?php endif; ?>
</div>
    </div>
    <div id="entry-content">
    <div class="entry-content clearfix">
    
    <div id="post-column">
                        
   
                        
    <div class="post-content"><?php the_content(); ?></div>
    
    
    </div><!-- #content-## --> 
    <div id="portfolio-single"><a id="single_3" href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 800,500 ), false, '' ); echo $src[0]; ?>" ><?php  the_post_thumbnail('portfolio-single', array('title' => "", 'alt' => "")); ?></a></div>
	
    </div><!-- #content -->    
	<?php if (get_option('premiumwd_portfolio_comments', 'true') == 'true'): ?> <div class="project-respond"> <?php echo stripslashes(comments_template( '', true )); ?></div> <?php endif; ?>
	<?php if (get_option('premiumwd_portfolio_related_projects', 'true') == 'true') echo stripslashes(get_template_part ('related-projects')); ?>	
    
               
    </div><!-- .entry-content -->
      
   
    <?php endwhile; // end of the loop. ?>
</div>
		    
		</div><!-- #container -->

		<?php get_footer(); ?>