<?php 


/*  Get images attached to post
/* ------------------------------------ */
if ( ! function_exists( 'alx_post_images' ) ) {

	function alx_post_images( $args=array() ) {
		global $post;

		$defaults = array(
			'numberposts'		=> -1,
			'order'				=> 'ASC',
			'orderby'			=> 'menu_order',
			'post_mime_type'	=> 'image',
			'post_parent'		=>  $post->ID,
			'post_type'			=> 'attachment',
		);

		$args = wp_parse_args( $args, $defaults );

		return get_posts( $args );
	}
	
}

/*  Upscale cropped thumbnails
/* ------------------------------------ */
if ( ! function_exists( 'alx_thumbnail_upscale' ) ) {
	
	function alx_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
		if ( !$crop ) return null; // let the wordpress default function handle this

		$aspect_ratio = $orig_w / $orig_h;
		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);

		$s_x = floor( ($orig_w - $crop_w) / 2 );
		$s_y = floor( ($orig_h - $crop_h) / 2 );

		return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
	}
	
}
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 23;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function ellion_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false', 'ellion' );
}
add_action( 'widgets_init', 'ellion_remove_recent_comments_style' );


	// additional image sizes
	add_image_size( 'thumb-blog', 500, 500, true ); //640 pixels wide & 300 height




