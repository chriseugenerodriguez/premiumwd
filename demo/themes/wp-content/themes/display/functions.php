<?php

	function main_styles() {
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
		if ( get_option('premiumwd_responsive', 'true') == 'true' ) {	
			wp_register_style( 'responsive', get_template_directory_uri() . '/includes/responsive/responsive.css', 'all' );
			wp_enqueue_style('responsive');
		}
		wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/css/font-awesome.css', '', 'all');
		
		wp_enqueue_style('font-awesome');	
		wp_enqueue_style('stylesheet');	
		wp_enqueue_style('responsive');
	}
	add_action( 'wp_enqueue_scripts', 'main_styles' );
	
	function  main_scripts() {	
		wp_register_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/scripts.js?t=1', array( 'jquery' ) );
		wp_register_script( 'jquery-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ) );
		
		wp_enqueue_script("jquery-ui-accordion");
		wp_enqueue_script("jquery-ui-tabs"); 	
		wp_enqueue_script( 'jquery-scripts' );	
		wp_enqueue_script( 'jquery-init' );
	}
	add_action( 'wp_footer', 'main_scripts' );

	function de_script() {
	        wp_dequeue_script("jquery-ui-widget"); 
	        wp_dequeue_script("comment-reply");
	        wp_dequeue_script("jquery-ui-core");
	}
	add_action( 'wp_print_scripts', 'de_script', 10 );

		
	load_theme_textdomain( 'Display', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		get_template_part( $locale_file );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'image') );
	
	register_nav_menu( 'primary', __( 'Primary Menu', 'Display' ) );
	add_editor_style();

	require_once (get_template_directory() . "/includes/plugins/theme_plugins.php");  
	require_once (get_template_directory() . "/includes/shortcodes/shortcodes.php");  
	require_once (get_template_directory() . "/includes/sidebar/sidebar.php");  
	require_once (get_template_directory() . "/includes/widgets/twitter.php");
	require_once (get_template_directory() . "/includes/widgets/portfolio.php");  
	require_once (get_template_directory() . "/includes/widgets/instagram.php");  
	require_once (get_template_directory() . "/includes/portfolio/portfolios.php"); 
	require_once (get_template_directory() . "/includes/blog/blog.php"); 
	include_once (get_template_directory() . "/includes/options/google-fonts-array.php");		
	include_once (get_template_directory() . "/includes/options/options-init.php");
	include_once (get_template_directory() . "/includes/options/options/init.php");

	include_once (get_template_directory() . "/includes/options/font-awesome/font-awesome.php");		
	include_once (get_template_directory() . "/includes/update.php");


	// Thumbnail sizes
	add_theme_support( 'post-thumbnails' );
  	add_image_size( 'blog-image', 1120, 400, true );

if(!is_admin()){
	add_action('init', 'search_query_fix');
	function search_query_fix(){
		if(isset($_GET['s']) && $_GET['s']==''){
			$_GET['s']=' ';
		}
	}
}

function search_setup() {
	add_action('template_redirect', 'single_result');  
    function single_result() {  
        if (is_search()) {  
            global $wp_query;  
            if ($wp_query->post_count == 1) {  
                wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );  
            }  
        }  
    }  
}

function SearchFilter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
}

    add_filter('pre_get_posts','SearchFilter');
	
	if(preg_match('/(?i)msie [6-9]/',$_SERVER['HTTP_USER_AGENT']))
	{
	function add_ie_formaters() {
		echo '<script src="'. get_template_directory_uri() .'/assets/js/html5.js"></script>';
		echo '<script src="'.get_template_directory_uri() . '/assets/js/respond.js"></script>';
		echo '<script src="'. get_template_directory_uri() .'/assets/js/selectivizr-min.js"></script>';
	}
	add_action('wp_head', 'add_ie_formaters');	
	}


	add_action('init' , 'send_mail_action',10,99);
	function send_mail_action(){
		if(isset($_GET['action']) && $_GET['action'] == 'sendmail'){
			include (TEMPLATEPATH . '/includes/contact/sendmail.php');
			echo send_mail_func();
			die();
		}
	}

	if ( get_option('premiumwd_defer_js', 'false') == 'true' ) {		
		function defer_parsing_of_js ( $url ) {
		if ( FALSE === strpos( $url, '.js' ) ) return $url;
		if ( strpos( $url, 'jquery.js' ) ) return $url;
		return "$url' defer='defer";
			}
		add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
	}
	
	function _remove_script_version( $src ){
			$result = $src;
				if ( strpos("-----" . $src, site_url()) > 0) {
					$parts = explode( '?', $src );
					$result = $parts[0];
					return $result;	
				}
				return $result;	
	}
	if ( get_option('premiumwd_query_strings', 'false') == 'true' ) {	
		add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
		add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
	}

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
			  
				  // $love_text = is_null($love_text) ? __( 'Like it', 'love_it' ) : $love_text;
				  // $loved_text = is_null($loved_text) ? __( 'You have liked this', 'love_it' ) : $loved_text;
				  
				  // only show the Love It link if the user has NOT previously loved this item
				  if( ! li_user_has_loved_post( $user_ID, get_the_ID() ) ) {
					  echo '<a class="love-it" data-post-id="' . get_the_ID() . '" data-user-id="' .  $user_ID . '"  data-lovecount="' . $love_count . '" ><span class="love-count"><i class="fa fa-heart"></i> <span>' . $love_count . '</span> Likes</span></a>';
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

function options_toolbar( $wp_admin_bar ) {
	$args = array(
		'parent' => 'appearance',
		'id'    => 'options',
		'title' => 'Options',
		'href' => get_bloginfo('url').'/wp-admin/themes.php?page=premiumwd_theme_options',
		'meta'  => array( 'class' => 'my-toolbar-page' )
	);
	$wp_admin_bar->add_node( $args );
}
add_action( 'admin_bar_menu', 'options_toolbar', 999 );

// REV SLIDER FIX
if( is_admin() ) {
 
    add_filter( 'script_loader_tag', 'tp_theme_filter_overrides' , 10, 4 );
 
}
 
function tp_theme_filter_overrides( $tag, $handle ) {
 
    return str_replace( 'defer', '', $tag );
 
}