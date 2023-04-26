<?php $meta = get_post_custom($post->ID); ?>
<?php if ( has_post_format( 'audio' ) ): // Audio ?>
<?php $formats = array();
		foreach ( explode('|','mp3|ogg') as $format ) {
			if ( isset($meta['_audio_'.$format.'_url']) ) {
				$format = ($format=='ogg')?'oga':$format;
				// Change mp3 to m4a if necessary
				if ( $format == 'mp3' ) {
					if ( strstr($meta['_audio_mp3_url'][0],'.m4a') ) {
						$format = 'm4a';
					}
				}
				$formats[] = $format;
			}
		}
	?>
<div class="post-format">
  <div class="image-container">
    <?php if ( has_post_thumbnail() ) { ?>	
				<?php the_post_thumbnail(); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if ( isset($caption) && $caption ) echo '<div class="image-caption">'.$caption.'</div>';
			} ?>
  </div>
  <?php echo do_shortcode(get_post_meta(get_the_ID(),'_format_audio_embed',true));?>
</div>
<?php endif; ?><?php if ( has_post_format( 'gallery' ) ): // Gallery ?>
<div class="post-format">
  <?php $images = alx_post_images();  if ( !empty($images) ): ?>
  <script type="text/javascript">
			// Check if first slider image is loaded, and load flexslider on document ready
			jQuery(document).ready(function(){
						jQuery('#owl-<?php echo the_ID(); ?>').owlCarousel({
							nav: true,
							items: 1,
							dots: false,
							loop: false,
							autoplay: false
						});
			});
		</script>
    <div class="owl-carousel" id="owl-<?php the_ID(); ?>">
        <?php foreach ( $images as $image ): ?>
        <div>
          <?php $imageid = wp_get_attachment_image_src($image->ID,'large'); ?>
          <img src="<?php echo $imageid[0]; ?>" alt="<?php echo $image->post_title; ?>">
          <?php if ( $image->post_excerpt ): ?>
          <div class="image-caption"><?php echo $image->post_excerpt; ?></div>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</div>
<?php endif; ?>
<?php if ( has_post_format( 'image' ) ): // Image ?>
<div class="post-format">
  <div class="image-container">
       <?php if ( has_post_thumbnail() ) { ?>	
     		<a href="<?php the_permalink(); ?>" rel="bookmark" >
				<?php the_post_thumbnail(); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if ( isset($caption) && $caption ) echo '<div class="image-caption">'.$caption.'</div>';
			} ?></a>
  </div>
</div>
<?php endif; ?>
<?php if ( has_post_format( 'video' ) ): // Video ?>
<div class="post-format">
<?php echo get_post_meta(get_the_ID(),'_format_video_embed',true);?>
</div>
<?php endif; ?>