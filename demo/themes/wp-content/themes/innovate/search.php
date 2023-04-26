<?php get_header(); ?>

<!-- FANCYBOX START -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mosaic.1.0.1.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mosaic.css" type="text/css" media="screen" />
    <script type="text/javascript">  
    jQuery(function($){
    $('.circle').mosaic({
    opacity		:	0.8			
    });
    });
    </script>
    <!-- FANCYBOX END -->

   

    



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
<div id="entry-title">
<div class="entry-title">
<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'innovate' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>
</div>

<div id="entry-content">
<div class="entry-content clearfix">
<div id="main-column"> 

<?php $show_category = trim(exclude_header_cats(),","); 
 $temp = $wp_query; global $wp_query; global $post; ?>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
<?php $show_category = trim(exclude_header_cats(),","); query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged, 'cat'=>$show_category )); ?>
<?php if ($wp_query->have_posts()) : ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<?php $post_formatt = get_post_format();
 switch($post_formatt){
	
		case 'video': ?>
        <aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="blog-2-video"><?php echo get_post_meta(get_the_ID(),'_format_video_embed',true);?></div>
        <div class="post-icon"><em class="icon-play"></em></div>
        <div class="post-content">
		<h2 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
                <a class="button black small" href="<?php echo get_permalink( $post->ID ); ?>">Read more</a>
        </div><!-- end of .post-main -->        
		</aside><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break; case 'quote': ?>
		<aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="post-icon"><em class="icon-retweet"></em></div>
        <div class="post-content">
        <div class="blog-1-quote"><?php the_content(); ?></div>    
 		<h4 class="blog-1-quote-title"><a href="<?php echo get_post_meta(get_the_ID(),'_format_quote_source_url',true);?>"><?php echo get_post_meta(get_the_ID(),'_format_quote_source_name',true);?></a></h4>
		</div>
        </aside><!-- end of #post-<?php the_ID(); ?> -->
		
			<?php  break; case 'audio' :?>
            <!-- JPLAYER CODE -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jplayer.min.js"></script>
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jplayer.css" rel="stylesheet" />
    <script type="text/javascript">
    jQuery(document).ready(function($) {
    $("#jquery_jplayer_1").jPlayer({
    ready: function () {
    $(this).jPlayer("setMedia", {
    mp3: "<?php echo get_post_meta(get_the_ID(),"_format_audio_embed",true); ?>",
    });
    },
    swfPath: "<?php echo get_template_directory_uri(); ?>/swf",
    supplied: "mp3"
    });
		//jQuery.noConflict();
    });
    </script>
    <!-- JPLAYER END -->
    	<aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="blog-2-iframe"> 
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio">
        <div class="jp-type-single">
        <div class="jp-gui jp-interface">
        <ul class="jp-controls">
        <li><a href="javascript:;" class="jp-play" tabindex="1"><i class="icon-play"></i></a></li>
        <li><a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon-pause"></i></a></li>
        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon-volume-up"></i></a></li>
        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon-volume-off"></i></a></li>
        </ul>
        <div class="jp-progress">
        <div class="jp-seek-bar">
        <div class="jp-play-bar"></div>
        </div>
        </div>
        <div class="jp-volume-bar">
        <div class="jp-volume-bar-value"></div>
        </div>
        <div class="jp-time-holder">
        <div class="jp-current-time"></div>
        </div>
        </div>
        <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
        </div>
        </div>
        </div>
		<div class="post-icon"><em class="icon-music"></em></div>
		<div class="post-content">
		<h2 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
                <a class="button black small" href="<?php echo get_permalink( $post->ID ); ?>">Read more</a>
        </div><!-- end of .post-main -->        
        </aside><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break; case 'image' :?>
        <aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="mosaic-block circle blog-2-style-thumb">
		<a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
		<div class="mosaic-backdrop "><?php the_post_thumbnail('blog-style'); ?></div>
		</div>
        <div class="post-icon"><em class="icon-picture"></em></div>
 		<div class="post-content">
		<h2 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
                <a class="button black small" href="<?php echo get_permalink( $post->ID ); ?>">Read more</a>
        </div><!-- end of .post-main -->        
        </aside><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break ; case 'link': ?>
        <aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		<div class="post-icon"><em class="icon-plus"></em></div>
        <div class="post-content">
        <h3 class="blog-2-header"><a href="http://<?php echo get_post_meta(get_the_ID(),'_format_link_url',true); ?>"><?php the_title(); ?></a></h3>
        </div>
        </aside><!-- end of #post-<?php the_ID(); ?> -->
    
   		<?php break ; case 'aside' : ?>
   		<aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>  
        <div class="post-icon"><em class="icon-file"></em></div>           
        <div class="post-content">
		<h2 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
                <a class="button black small" href="<?php echo get_permalink( $post->ID ); ?>">Read more</a>
        </div><!-- end of .post-main -->        
        </aside><!-- end of #post-<?php the_ID(); ?> --> 
		
		
	 <?php break; case 'gallery':?> 
      <!-- FLEXSLIDER CODE -->
	<script type="text/javascript">
    jQuery(window).load(function() {
    jQuery(".flexslider").flexslider({
    animation: "slide",
    animationLoop: true,
    slideshowSpeed: 7000,      
    animationSpeed: 600,
    directionNav: true, 
    controlNav: true
    });
    });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
    <!-- FLEXSLIDER END -->
   
     <aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
     <div class="blog-2-slider">
      		<div class="flexslider">
     		<ul class="slides">
             <?php $image_url = gallery_first_image(); if($image_url) { foreach($image_url as $i) :?>
             <?php if(trim($i)!=""){ } else{ continue; } ?>
             <li>
             <a href="<?php echo get_permalink(); ?>">
             <img height="340" width="660" src="<?php echo $i; ?>" alt="<?php the_title();?>" /></a>
             </li>
             <?php endforeach;?>
             <?php }?>
             </ul>
             </div>
        </div>
        <div class="post-icon"><em class="icon-camera"></em></div>     
        <div class="post-content">
		<h2 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta -->
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
                <a class="button black small" href="<?php echo get_permalink( $post->ID ); ?>">Read more</a>
        </div>
        </aside><!-- end of #post-<?php the_ID(); ?> -->      
		
		<?php break ;default : ?>
 		<aside id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="mosaic-block circle blog-2-style-thumb">
		<a class="mosaic-overlay" href="<?php echo get_permalink(); ?>"></a>
		<div class="mosaic-backdrop "><?php echo the_post_thumbnail('blog-style'); ?></div>
		</div>
        <div class="post-icon"><em class="icon-file"></em></div> 
 		<div class="post-content">
		<h2 class="blog-2-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
		<div class="blog-2-details">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        </div><!-- end of .blog-meta --> 
        <div class="blog-2-excerpt">
         <p><?php echo excerpt(40); ?></p>
        </div>
                <a class="button black small" href="<?php echo get_permalink( $post->ID ); ?>">Read more</a>
		 </div><!-- end of .post-main -->
         </aside><!-- end of #post-<?php the_ID(); ?> -->
		
		<?php break ;} ?>
    	<?php endwhile; else:?> 
    	<?php endif; ?>
        
<?php pagination(); ?>
</section>
<!-- Margin -->

<aside id="secondary"><div id="sidebar"><?php dynamic_sidebar( 'Blog Widget Area' ); ?></div></aside>


       </div> 
	</div>
	<?php get_footer(); ?>

