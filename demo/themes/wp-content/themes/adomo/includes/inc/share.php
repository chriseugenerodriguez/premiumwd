<div id="shareme" data-url="<?php echo the_permalink(); ?>" data-curl="<?php echo get_bloginfo('template_directory');?>/assets/js/sharrre.php">
<ul>
	<li id="facebook" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Like"></li>
	<li id="twitter" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Tweet"><a class="box group" href="#"><i class="fa fa-twitter"></i><div class="count" href="#">0</div></a></li>
	<li id="googleplus" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="+1"></li>
	<li id="pinterest" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Pin It"></li>
</ul></div>
<?php global $post; ?>
<script type="text/javascript">
	// Sharrre
	jQuery(document).ready(function(){
		jQuery('#twitter').sharrre({
			share: {
				twitter: true
			},
			//template: '<a class="box group" href="#"><i class="fa fa-twitter"></i><div class="count" href="#">{total}</div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: { twitter: {via: '<?php echo get_option('twitter-username'); ?>'}},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('twitter');
			}
		});
		jQuery('#facebook').sharrre({
			share: {
				facebook: true
			},
			template: '<a class="box group" href="#"><i class="fa fa-facebook-square"></i><div class="count" href="#">{total}</div></a>',
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
			template: '<a class="box group" href="#"><i class="fa fa-google-plus-square"></i><div class="count" href="#">{total}</div></a>',
			enableHover: false,
			enableTracking: false,
			urlCurl: '<?php echo get_bloginfo('template_directory');?>/assets/js/sharrre.php',
			click: function(api, options){
				api.simulateClick();
				api.openPopup('googlePlus');
			}
		});
		jQuery('#pinterest').sharrre({
			share: {
				pinterest: true
			},
			template: '<a class="box group" href="#" rel="nofollow"><i class="fa fa-pinterest"></i><div class="count" href="#">{total}</div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: {
			pinterest: {
				description: '<?php echo the_title(); ?>'<?php if( has_post_thumbnail() ){ ?>,media: '<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'<?php } ?>
				}
			},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('pinterest');
			}
		});
	});
</script>