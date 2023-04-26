<?php

	function  main_scripts() {	
	wp_register_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
	if ( get_option('premiumwd_responsive', 'true') == 'true' ) {	
		wp_register_style( 'responsive', get_template_directory_uri() . '/includes/responsive/responsive.css', 'all' );
		wp_enqueue_style('responsive');
	}
	wp_register_style('sans-font', 'http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans', '', 'all');
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/css/font-awesome.css', '', 'all');
	
	wp_enqueue_style('font-awesome-min');
	wp_enqueue_style('font-awesome');	
	wp_enqueue_style('stylesheet');	
	wp_enqueue_style('responsive');
	wp_enqueue_style('sans-font');
	
	wp_register_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ) );
	wp_register_script( 'jquery-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'jquery-scripts' );	
	wp_enqueue_script( 'jquery-init' );
	}
	add_action( 'wp_head', 'main_scripts' );


	
	load_theme_textdomain( 'stack', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'gallery', 'image',  'video', 'audio', 'quote', 'link' ) );
	
	register_nav_menu( 'primary', __( 'Primary Menu', 'stack' ) );
	add_editor_style();

	require_once (TEMPLATEPATH . "/includes/plugins/theme_plugins.php");  
	require_once (TEMPLATEPATH . "/includes/shortcodes/shortcodes.php");  
	require_once (TEMPLATEPATH . "/includes/sidebar/sidebar.php"); 
	require_once (TEMPLATEPATH . "/includes/widgets/popular-posts.php");  
	require_once (TEMPLATEPATH . "/includes/widgets/twitter.php");
	require_once (TEMPLATEPATH . "/includes/widgets/latest-posts.php");  
	require_once (TEMPLATEPATH . "/includes/widgets/portfolio.php");  
	require_once (TEMPLATEPATH . "/includes/widgets/instagram.php");  
	require_once (TEMPLATEPATH . "/includes/portfolio/portfolios.php"); 
	require_once (TEMPLATEPATH . "/includes/portfolio/portfolio-format.php");
	require_once (TEMPLATEPATH . "/includes/blog/blog.php"); 
	include_once (TEMPLATEPATH . "/includes/options/google-fonts-array.php");		
	include_once (TEMPLATEPATH . "/includes/options/options-init.php");
	include_once (TEMPLATEPATH . "/includes/options/options/init.php");

	include_once (TEMPLATEPATH . "/includes/options/font-awesome/font-awesome.php");		
	include_once (TEMPLATEPATH . "/includes/update.php");


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
			  
				  $love_text = is_null($love_text) ? __( 'Like it', 'love_it' ) : $love_text;
				  $loved_text = is_null($loved_text) ? __( 'You have liked this', 'love_it' ) : $loved_text;
				  
				  // only show the Love It link if the user has NOT previously loved this item
				  if( ! li_user_has_loved_post( $user_ID, get_the_ID() ) ) {
					  echo '<a href="javascript:;" class="love-it" data-post-id="' . get_the_ID() . '" data-user-id="' .  $user_ID . '" title="' . $love_text . '"  data-lovecount="' . $love_count . '" ><span class="love-count">' . $love_count . '</span></a>';
				  } else {
					  // show a message to users who have already loved this item
					  echo '<a href="javascript:;" class="love-it loved"   title="' . $loved_text . '" data-lovecount="' . $love_count . '"><span class="love-count">' . $love_count . '</span></a> ';
					  //echo '<span class="loved">' . $loved_text . ' (<span class="love-count">' . $love_count . '</span>)</span>';
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
	add_action('wp_enqueue_scripts', 'li_front_end_js');
	add_action('wp_ajax_love_it', 'li_process_love');
	add_action('wp_ajax_nopriv_love_it', 'li_process_love');
	
	

function initsidebar() {	
	if (is_home()): dynamic_sidebar( 'sidebar-widget-area' );		
	elseif (is_page_template('contact.php')): dynamic_sidebar( 'contact-widget-area' );	
	elseif (is_singular('portfolio') || is_page_template('portfolio-gallery.php') || is_page_template('portfolio-masonry.php') || is_page_template('portfolio-standard.php')): dynamic_sidebar( 'portfolio-widget-area' );		
	elseif (is_page_template('blog.php') || is_single() || is_archive()): dynamic_sidebar( 'blog-widget-area' );		
	else : dynamic_sidebar( 'page-widget-area' );
	endif;
}

add_filter('wp_nav_menu_items', 'add_contact', 10, 2);
 function add_contact($items, $args) {
	 $classes = explode(" " , $args->container_class );
		if (in_array('menu-header' , $classes)) {
          $items .= '<li id="mobile-search">
			<form method="GET" action="/">
<input action="'. esc_url( home_url( '/' ) ).'" type="text" placeholder="Search.." value="" name="s">
</form>';
			}	
				 return $items;
			}
			
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
