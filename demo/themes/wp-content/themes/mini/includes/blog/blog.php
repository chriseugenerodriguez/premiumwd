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
	return '<a class="more-link button small" href="' . get_permalink() . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function Mini_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'Mini_remove_recent_comments_style' );

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
add_filter('pre_get_posts','SearchFilter');   

	function li_user_has_loved_post($user_id, $post_id) {
		$loved = get_user_option('li_user_loves', $user_id);
		if(is_array($loved) && in_array($post_id, $loved)) {
			return true; // user has loved post
		}
		return false; // user has not loved post
	}

	function li_store_loved_id_for_user($user_id, $post_id) {
		$loved = get_user_option('li_user_loves', $user_id);
		if(is_array($loved)) {
			$loved[] = $post_id;
		} else {
			$loved = array($post_id);
		}
		update_user_option($user_id, 'li_user_loves', $loved);
	}

	function li_mark_post_as_loved($post_id, $user_id) {
	
		// retrieve the love count for $post_id	
		$love_count = get_post_meta($post_id, '_li_love_count', true);
		if($love_count)
			$love_count = $love_count + 1;
		else
			$love_count = 1;
		
		if(update_post_meta($post_id, '_li_love_count', $love_count)) {	
			// store this post as loved for $user_id	
			li_store_loved_id_for_user($user_id, $post_id);
			return true;
		}
		return false;
	}
	
	function li_get_love_count($post_id) {
		$love_count = get_post_meta($post_id, '_li_love_count', true);
		if($love_count)
			return $love_count;
		return 0;
	}
	
	function li_process_love() {
		if ( isset( $_POST['item_id'] ) && wp_verify_nonce($_POST['love_it_nonce'], 'love-it-nonce') ) {
			if(li_mark_post_as_loved($_POST['item_id'], $_POST['user_id'])) {
				echo 'loved';
			} else {
				echo 'failed';
			}
		}
		die();
	}
	  function li_love_link($love_text = null, $loved_text = null) {
	  
		  global $user_ID, $post;	
		  // only show the link when user is logged in and on a singular page
	  
			  ob_start();		
			  // retrieve the total love count for this item
			  $love_count = li_get_love_count($post->ID);
			 
				  
				  // only show the Love It link if the user has NOT previously loved this item
				  if( ! li_user_has_loved_post( $user_ID, get_the_ID() ) ) {
					  echo '<a class="love-it" data-post-id="' . get_the_ID() . '" data-user-id="' .  $user_ID . '"  data-lovecount="' . $love_count . '" ><span class="love-count"><i class="fa fa-heart-o"></i> <span>' . $love_count . '</span> Likes</span></a>';
				  } else {
					  // show a message to users who have already loved this item
					  echo '<a class="love-it loved" data-lovecount="' . $love_count . '"><span class="love-count"><i class="fa fa-heart"></i> <span>' . $love_count . '</span> Likes</span></a> ';
				  }
			  // append our "Love It" link to the item content.
			  $link = ob_get_clean();
			  return $link;
		  }
			
		
		// adds the Love It link and count to post/page content automatically
	function li_front_end_js() {
		 	wp_enqueue_script( 'love-it', get_template_directory_uri() . '/assets/js/love-it.js', array( 'jquery' ) );	
			wp_localize_script( 'love-it', 'love_it_vars', 
				array( 
					'ajaxurl' => admin_url( 'admin-ajax.php' ),
					'nonce' => wp_create_nonce('love-it-nonce'),
					'already_loved_message' => __('You have already liked this item.', 'love_it'),
					'error_message' => __('Sorry, there was a problem processing your request.', 'love_it')
				) 
			);	
	}
	add_action('wp_footer', 'li_front_end_js', 1);
	add_action('wp_ajax_love_it', 'li_process_love');
	add_action('wp_ajax_nopriv_love_it', 'li_process_love');
                   