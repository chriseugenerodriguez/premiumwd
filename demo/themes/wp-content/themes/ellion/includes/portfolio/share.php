<?php $twitter_params = 
        '?text=' . urlencode(get_the_title()) . '+-' .
        '&amp;url=' . urlencode(get_the_permalink()) . 
        '&amp;via=' . get_option('twitter-username') . 
        //'&amp;related=' . $twitter_related .
        ''
        ;?>
<div id="shareme" data-url="<?php the_permalink(); ?>" data-curl="<?php echo get_stylesheet_directory_uri() ?>/assets/js/sharrre.php">
  <ul>
    <!-- <li id="twitter" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Tweet"></li> -->
    <li><!-- <a href="http://twitter.com/home?status=<?php the_title(); ?> : <?php the_permalink(); ?>" title="Click to share this post on Twitter">Tweet</a> -->
    	<div class="twitter-share">
            <a class="twitter-button" 
               rel="external nofollow" 
               title="Share this on Twitter" 
               href="#"
               onclick="window.open('http://twitter.com/share<?php echo $twitter_params ;?>', 'tweet', 'width=500,height=300');return false;">Tweet</a>
        </div>
    </li>
    <li id="facebook" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Like"></li>
    <li id="googleplus" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="+1"></li>
    <li id="pinterest" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Pin It"></li>
    <li><a href="mailto:?subject=<?php the_title(); ?>&amp;body=Check out what I just spotted: <?php the_permalink(); ?>" class="envelope-o">Email</a></li>
  </ul>
</div>
<script type="text/javascript">
	// Sharrre
	jQuery(document).ready(function(){
		/*jQuery('#twitter').sharrre({
			share: {
				twitter: true
			},
			template: '<a href="#">Twitter</a>',
			enableHover: false,
			enableTracking: true,
			buttons: { twitter: {via: '<?php echo get_option('twitter-username'); ?>'}},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('twitter');
			}
		});*/
		jQuery('#facebook').sharrre({
			share: {
				facebook: true
			},
			template: '<a href="#">Facebook</a>',
			enableHover: false,
			enableTracking: true,
			click: function(api, options){
				api.simulateClick();
				api.openPopup('facebook');
			}
		});
		jQuery('#googleplus').sharrre({
			share: {
				googlePlus: true
			},
			template: '<a href="#">Google Plus</a>',
			enableHover: false,
			enableTracking: false,
			urlCurl: '<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/js/sharrre.php',
			click: function(api, options){
				api.simulateClick();
				api.openPopup('googlePlus');
			}
		});
		jQuery('#pinterest').sharrre({
			share: {
				pinterest: true
			},
			template: '<a href="#" rel="nofollow">Pinterest</a>',
			enableHover: false,
			enableTracking: true,
			buttons: {
			pinterest: {
				description: '<?php the_title(); ?>'<?php if( has_post_thumbnail() ){ ?>,media: '<?php wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'<?php } ?>
				}
			},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('pinterest');
			}
		});
	});
</script>