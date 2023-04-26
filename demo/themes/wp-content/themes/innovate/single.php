<?php /* The Template for displaying all single posts. */ ?>

<?php get_header(); ?>

	<?php $post_formatt = get_post_format(); switch($post_formatt){ case 'gallery': ?>
    <!-- FLEXSLIDER CODE -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
    <!-- FLEXSLIDER END -->
	<?php break; case 'audio': ?>
        <!-- JPLAYER CODE -->

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jplayer.min.js"></script>
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jplayer.css" rel="stylesheet" />
        <script type="text/javascript">
        jQuery(document).ready(function(){
        jQuery("#jquery_jplayer_1").jPlayer({
        ready: function () {
        jQuery(this).jPlayer("setMedia", {
        mp3: "<?php echo get_post_meta(get_the_ID(),"_format_audio_embed",true); ?>",
        });
        },
        swfPath: "<?php echo get_template_directory_uri(); ?>/swf",
        supplied: "mp3"
         });
		//jQuery.noConflict();
   		 });
        </script>
    <?php break ;} ?>

<!-- JPLAYER END -->

    <!-- FANCYBOX CODE -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancybox-init.js" type="text/javascript"></script>
	
    <!-- FANCYBOX END -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mosaic.1.0.1.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mosaic.css" type="text/css" media="screen" />
    <script type="text/javascript">  
    jQuery(function($){
    $('.circle').mosaic({
    opacity		:	0.8			
    });
    });
    </script>




		<div id="container">
			<div id="content" role="main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
<div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1><?php the_breadcrumb(); ?> </div>
</div>
    
    <div id="entry-content">
    <div class="entry-content clearfix">
    <div id="main-single">
    <div class="entry-meta">
        <span><em class="icon-calendar"></em><?php the_time('F jS, Y'); ?> </span>
        <span><em class="icon-user"></em>By <?php the_author(); ?> </span>
        <span><em class="icon-home"></em>In <?php the_category(', '); ?>  </span>
        <span><em class="icon-comment"></em><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></span>
        <span><em class="icon-tags"></em><?php the_tags('Tags: ', ', ', '<br />'); ?></span>
    </div><!-- .entry-meta -->
    <?php $post_formatt = get_post_format();
    switch($post_formatt){
    case 'video': ?><p><?php echo get_post_meta(get_the_ID(),'_format_video_embed',true);?></p>
    <?php break; case 'quote': ?>
    <p><h4 class="blog-1-quote-title"><a href="<?php echo get_post_meta(get_the_ID(),'_format_quote_source_url',true);?>"><?php echo get_post_meta(get_the_ID(),'_format_quote_source_name',true);?></a></h4></p>
    </div><!-- end of #post-<?php the_ID(); ?> -->
    <?php  break; case 'audio' :?>
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
    <?php break ; case 'aside' : ?>
    <?php break; case 'gallery':?> 
    <p><?php echo do_shortcode('[gallery]'); ?></p>
    <?php break ;default : ?>
    <div class="mosaic-block circle blog-1-style-thumb">
		<a class="mosaic-overlay" id="single_3" href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); echo $src[0]; ?>" ></a>
		<div class="mosaic-backdrop "><?php echo the_post_thumbnail('blog-style'); ?></div>
        </div>
    <?php break ;} ?>
                        
    <?php if (get_option('premiumwd_blog_social_top', 'true') == 'true') echo stripslashes(get_template_part ('share')); ?>
                        
    <div class="post-content">
    
	

 <?php endwhile; ?> 
       
	<?php the_content(); ?>
    </div>
    
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'innovate' ), 'after' => '</div>' ) ); ?>
                                         
    <?php if (get_option('premiumwd_blog_social_bottom', 'true') == 'true') echo stripslashes(get_template_part ('share')); ?> 
     
    <?php if (get_option('premiumwd_blog_bio', 'true') == 'true') echo stripslashes(get_template_part ('bio')); ?>
    
    <?php if (get_option('premiumwd_blog_related_posts', 'true') == 'true') echo stripslashes(get_template_part ('related-posts')); ?>
      
      <?php if (get_option('premiumwd_blog_pagnation') == 'true'): ?>
      <nav id="pagination">
		<ul><li><div class="nav-previous"><?php previous_post_link('%link','&larr; %title');  ?></div></li><li><div class="nav-next"><?php next_post_link('%link','%title &rarr;') ?></div></li></ul>
		<div class="clearfix"></div>
	</nav>              
    <?php endif; ?>       
                    
    <?php if (get_option('premiumwd_blog_comments', 'true') == 'true') echo stripslashes(comments_template( '', true )); ?>
    </div><!-- #content-## --> 
    
 <aside id="secondary"><div id="sidebar"><?php dynamic_sidebar( 'main-widget-area' ); ?></div></aside>
               
    </div><!-- .entry-content -->

			</div><!-- #content -->
            
	

 
    	
<?php get_footer(); ?>
