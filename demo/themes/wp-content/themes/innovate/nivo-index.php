<?php /* Template Name: Nivo Slider */ ?>
<?php get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('#slider').nivoSlider({
        effect: '<?php echo get_option('premiumwd_animation_effect'); ?>', // Specify sets like: 'fold,fade,sliceDown'
        slices: <?php echo get_option('premiumwd_slider_slices'); ?>, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: <?php echo get_option('premiumwd_slider_animation_speed'); ?>, // Slide transition speed
        pauseTime: <?php echo get_option('premiumwd_slider_pause_interval'); ?>, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: false, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav: true, // Use left & right arrows
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        captionOpacity: 0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>


<div id="nivo-full" style="background:#<?php echo get_option('slider_background_color'); ?>">
<div class="slider">
            <div id="slider" class="nivoSlider">
    <img src="<?php echo get_template_directory_uri(); ?>/images/1.JPG"  />
    <img src="<?php echo get_template_directory_uri(); ?>/images/2.JPG"  />
                      </div>
            </div>
            </div>
            
<div  id="container">
			<div class="clearfix" id="content" role="main"> 
            <div id="box">
            <div class="box"> 
   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
                        <?php endwhile; // end of the loop. ?>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>