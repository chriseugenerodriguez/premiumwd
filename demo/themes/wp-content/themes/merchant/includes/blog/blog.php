<?php 

	// META BOXES
	include_once (TEMPLATEPATH . "/includes/blog/meta-boxes/premiumwd-functions-admin.php");
	include_once (TEMPLATEPATH . "/includes/blog/meta-boxes/premiumwd-functions-option-types.php");
	include_once (TEMPLATEPATH . "/includes/blog/meta-boxes/premiumwd-meta-box-api.php");
	include_once (TEMPLATEPATH . "/includes/blog/meta-boxes/meta-boxes.php");


	function blog_masonry_init() {
	if ( is_page_template('blog.php') || is_page_template('blog-masonry.php') || is_page_template('blog-masonry-sidebar.php') || is_page_template('blog-sidebar.php') || is_singular('post')|| is_archive() || is_search()) {
	wp_enqueue_style( 'plugin-css', get_template_directory_uri() . '/includes/blog/css/plugins.css', '', 'all');

	//BLOG SCRIPTS	
	wp_enqueue_script( 'plugin-js', get_template_directory_uri() . '/includes/blog/js/plugins.js', array( 'jquery' ) );
		 }
	}
	add_action('wp_enqueue_scripts', 'blog_masonry_init' );	

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function merchant_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'merchant_remove_recent_comments_style' );

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

// Pagination
function pagination($pages = '', $range = 2) {
	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<span class="previous">%s</span>' . "\n", get_previous_posts_link('Prev') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<span>…</span>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<span>…</span>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<span class="next">%s</span>' . "\n", get_next_posts_link('Next') );

	echo '</ul></div>' . "\n";
}  

// Search only posts
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
//add_filter('pre_get_posts','SearchFilter');                      