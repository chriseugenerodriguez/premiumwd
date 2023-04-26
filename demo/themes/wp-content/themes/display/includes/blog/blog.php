<?php 

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

function display_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'display_remove_recent_comments_style' );


	// additional image sizes
	add_image_size( 'blog-style', 1200, 340, true ); //640 pixels wide & 300 height




