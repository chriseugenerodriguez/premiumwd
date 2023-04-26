<?php get_header(); ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bjqs-1.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
   jQuery(window).load(function() {
         jQuery('.blog-2-slider').bjqs({

width : 660,
height : 300,
animtype : 'slide', 
animduration : 450, 
animspeed : 4000, 
automatic : false,
showcontrols : true, 
centercontrols : false, 
nexttext : 'Next', 
prevtext : 'Prev',
showmarkers : false, 
centermarkers : false, 
keyboardnav : true, 
hoverpause : true, 
usecaptions : true, 
randomstart : true, 
responsive : true 
});
     });
</script>
<script type="text/javascript">  
			jQuery(function($){
				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});
		    
			 jQuery(".blog-2-slider").hover(
      function() { $(".blog-2-slider ul li a.circle").show(); },
      function() { $(".blog-2-slider ul li a.circle").hide(); }
 );});
		</script>
        
<?php get_header(); ?>

<?php  function exclude_header_cats() {
     $all_categories = get_categories(array('hide_empty' => 1));
     $cat_list = array();
     $exclude = "";

     $i = 0;
     foreach ($all_categories as $cat) {
         $cat_list[$i] = "premiumwd_cat_header" . $cat->cat_ID;
		 
         $cat_atts = get_cat_name($cat->cat_ID);

         if (get_option($cat_list[$i], 'false') == 'false')
             $exclude .= "-" . $cat->cat_ID . ",";
         $i++;
     }

     return $exclude;
 } ?>

<!-- Margin -->

<div id="container">
			
<!-- Blog Container-->

<div id="content" role="main">

				<div id="entry-title"><h1 class="entry-title"><?php
					printf( __( 'Tag Archives: %s', 'innovate' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1></div>

<div id="entry-content">
<div class="entry-content clearfix">
<div id="main-column"> 

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
<?php if ($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<?php $post_formatt = get_post_format();
 switch($post_formatt){
	
		case 'video': ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="blog-2-video"><?php echo get_post_meta(get_the_ID(),'_format_video_embed',true);?></div>
        <div class="post-icon"><em class="icon-play"></em></div>
        <div class="post-content">
		<h3 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
        </div><!-- end of .post-main -->        
		</div><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break; case 'quote': ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="post-icon"><em class="icon-retweet"></em></div>
        <div class="post-content">
        <p><?php the_content(); ?></p>    
 		<p>Source: <a href="<?php echo get_post_meta(get_the_ID(),'_format_quote_source_url',true);?>"><?php echo get_post_meta(get_the_ID(),'_format_quote_source_name',true);?></a></p>
		</div>
        </div><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php  break; case 'audio' :?>
    	<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="blog-2-iframe"><?php echo get_post_meta(get_the_ID(),'_format_audio_embed',true);?></div>
		<div class="post-icon"><em class="icon-music"></em></div>

		<div class="post-content">
		<h3 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
        </div><!-- end of .post-main -->        
        </div><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break; case 'image' :?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="mosaic-block circle blog-2-style-thumb">
		<a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
		<div class="mosaic-backdrop "><?php the_post_thumbnail('blog-2-style'); ?></div>
		</div>
        <div class="post-icon"><em class="icon-picture"></em></div>
 		<div class="post-content">
		<h3 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        </div>
		</div><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break ; case 'link': ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		<div class="post-icon"><em class="icon-plus"></em></div>
        <div class="post-content">
        <h3 class="blog-2-header"><a href="http://<?php echo get_post_meta(get_the_ID(),'_format_link_url',true); ?>"><?php the_title(); ?></a></h3>
        </div>
        </div><!-- end of #post-<?php the_ID(); ?> -->
    
   		<?php break ; case 'aside' : ?>
   		<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>  
        <div class="post-icon"><em class="icon-file"></em></div>           
        <div class="post-content">
		<h3 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
        </div>
        </div><!-- end of .post-main -->
        </div><!-- end of #post-<?php the_ID(); ?> -->              
		
		
	 <?php break; case 'gallery':?> 
     <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
     <div class="blog-2-slider">
             <ul class="bjqs">
             <?php $image_url = gallery_first_image(); if($image_url) { foreach($image_url as $i) :?>
             <?php if(trim($i)!=""){ } else{ continue; } ?>
             <li>
             <a class="circle" href="<?php echo get_permalink(); ?>"></a>
             <img src="<?php echo $i; ?>" alt="<?php the_title();?>" />
             </li>
             <?php endforeach;?>
             <?php }?>
             </ul>
        </div>
        <div class="post-icon"><em class="icon-camera"></em></div>     
        <div class="post-content">
		<h3 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
        </div>
        </div><!-- end of #post-<?php the_ID(); ?> -->      
		
		<?php break ;default : ?>
 		<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="mosaic-block circle blog-2-style-thumb">
		<a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
		<div class="mosaic-backdrop "><?php the_post_thumbnail('blog-2-style'); ?></div>
		</div>
        <div class="post-icon"><em class="icon-file"></em></div> 
 		<div class="post-content">
		<h3 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta --> 
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
		 </div><!-- end of .post-main -->
         </div><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break ;} ?>
    	<?php endwhile; else:?> 
    	<?php endif; ?>
        
<?php pagination(); ?>
</div>
<!-- Margin -->
        
                
                <div id="secondary" ><?php dynamic_sidebar( 'Page Widget Area' ); ?></div>	
			</div><!-- #content -->
            
		</div><!-- #container -->
        
        <?php get_footer(); ?>