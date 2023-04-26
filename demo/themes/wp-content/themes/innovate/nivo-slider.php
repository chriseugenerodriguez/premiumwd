<?php if (get_option('premiumwd_code_nivo_slider') == 'true'): ?>

<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.nivo.slider.js"></script>

<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/nivo-slider.css" type="text/css" media="screen" />



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

        directionNav: <?php echo get_option('premiumwd_slider_direction_show'); ?>, // Next & Prev navigation

        directionNavHide: false, // Only show on hover

        controlNav: <?php echo get_option('premiumwd_slider_navigation_show'); ?>, // 1,2,3... navigation

        controlNavThumbs: false, // Use thumbnails for Control Nav

        controlNavThumbsFromRel: false, // Use image rel for thumbs

        controlNavThumbsSearch: '.jpg', // Replace this with...

        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src

        keyboardNav: true, // Use left & right arrows

        pauseOnHover: <?php echo get_option('premiumwd_slider_pause_hover_show'); ?>, // Stop animation while hovering

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

<?php if (get_option('premiumwd_nivo_slider_image1')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link1'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image1'); ?>"  /></a><?php endif; ?>

<?php if (get_option('premiumwd_nivo_slider_image2')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link2'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image2'); ?>"  /></a><?php endif; ?>

<?php if (get_option('premiumwd_nivo_slider_image3')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link3'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image3'); ?>"  /></a><?php endif; ?>

<?php if (get_option('premiumwd_nivo_slider_image4')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link4'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image4'); ?>"  /></a><?php endif; ?>

<?php if (get_option('premiumwd_nivo_slider_image5')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link5'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image5'); ?>"  /></a><?php endif; ?>

<?php if (get_option('premiumwd_nivo_slider_image6')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link6'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image6'); ?>"  /></a><?php endif; ?>

<?php if (get_option('premiumwd_nivo_slider_image7')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link7'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image7'); ?>"  /></a><?php endif; ?>

<?php if (get_option('premiumwd_nivo_slider_image8')) : ?><a href="<?php echo get_option('premiumwd_nivo_slider_link8'); ?>"><img src="<?php echo get_option('premiumwd_nivo_slider_image8'); ?>"  /></a><?php endif; ?>  

            </div>

            </div>

            </div>

            

			<?php endif; ?>