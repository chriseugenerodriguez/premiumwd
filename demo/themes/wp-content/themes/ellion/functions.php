<?php

	function main_styles() {
	wp_register_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
		if ( get_option('premiumwd_responsive', 'true') == 'true' ) {	
			wp_register_style( 'responsive', get_template_directory_uri() . '/includes/responsive/responsive.css', 'all' );
			wp_enqueue_style('responsive');
		}
		wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/css/font-awesome.css', '', 'all');
		wp_register_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', '', 'all');
		
		wp_enqueue_style('plugins');	
		wp_enqueue_style('font-awesome');	
		wp_enqueue_style('stylesheet');	
		wp_enqueue_style('responsive');
	}
	add_action( 'wp_enqueue_scripts', 'main_styles' );
	
	function  main_scripts() {	
		wp_register_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ) );
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

		
	load_theme_textdomain( 'Ellion', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	add_theme_support( 'automatic-feed-links' );
 	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'audio', 'video') );
	add_theme_support( "title-tag" );
	
	register_nav_menu( 'primary', __( 'Primary Menu', 'ellion' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'ellion' ) );
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

	if ( ! isset( $content_width ) ) $content_width = 1200;


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


	function send_mail_action(){
		if(isset($_GET['action']) && $_GET['action'] == 'sendmail'){
			include (get_template_directory() . '/includes/contact/sendmail.php');
			echo send_mail_func();
			die();
		}
	}
	add_action('init' , 'send_mail_action',10,99);

// Add the Portfolio Dynamic Content Meta Box
function wpb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once (get_template_directory() . '/includes/inc/meta/init.php');
}
add_action( 'init', 'wpb_initialize_cmb_meta_boxes', 9999 );


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

	//Add Meta Boxes
	function page_metaboxes( $meta_boxes ) {
	$post_id = '';
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	}
	$page_template = get_post_meta( $post_id, '_wp_page_template', true );
	$prefix = 'page_'; // Prefix for all fields
	if ( $page_template == 'full-width.php' || $page_template == 'contact.php' )	{} else {	

	$meta_boxes[] = array(

	'id' => 'title_options',
		'title' => 'Title Options',
		'pages' => array('page', 'post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	
				array(
					'name' => 'Show Title',
					'desc' => 'Display title section.',
					'id' => $prefix . 'title_checkbox',
					'type' => 'checkbox'
				),		

				array(
					  'name'    => 'Sub-Heading',
					  'desc'    => 'Write a short excerpt under the title, leave blank if not used',
					  'default' => '',
					  'id'      => $prefix . 'sub_heading',
					  'type'    => 'text',
				),	

			),
		);
	}
	return $meta_boxes;
	}
	add_filter( 'cmb_meta_boxes', 'page_metaboxes' );      



        //Add Meta Boxes
	function post_metaboxes( $meta_boxes ) {
	$post_id = '';
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	}
	$page_template = get_post_meta( $post_id, '_wp_page_template', true );
	$prefix = 'page_'; // Prefix for all fields

	$meta_boxes[] = array(

	'id' => 'title_options',
		'title' => 'Featured Image Option',
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	   

				array(
					'name' => 'Transparent Header',
					'desc' => 'Make header transparent, looks great for full width featured image.',
					'id' => $prefix . 'transparent_header',
					'type' => 'checkbox'
				),		

				array(
					'name' => 'Image Size',
					'desc' => 'Featured image takes whole width of container',
					'id' => $prefix . 'featured_image',
					'type'    => 'select',
					'options' => array(
						'full' => __( 'Full Screen', 'ellion' ),
						'right'   => __( 'Right', 'ellion' ),
						'regular' => __( 'Regular', 'ellion' ),
					),
					'default' => 'regular',
				),	
        ),
	);
	return $meta_boxes;
	}
	add_filter( 'cmb_meta_boxes', 'post_metaboxes' );      




	//Add Meta Boxes
	function header_metaboxes( $meta_boxes ) {
	$post_id = '';
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	}
	$page_template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( $page_template == 'full-width.php' ) {	
	$prefix = 'header_'; // Prefix for all fields

	$meta_boxes[] = array(
		'id' => 'header_options',
		'title' => 'Header Options',
		'pages' => array('page', 'post', 'portfolio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	
				array(
					'name' => 'Transparent Header',
					'desc' => 'Have the header have no background.',
					'id' => $prefix . 'transparent_checkbox',
					'type' => 'checkbox'
				),		
				array(
					'name' => 'Header Text Color',
					'desc' => 'Have the header text and links change color based on background image of slider.',
					'id' => $prefix . 'dynamic_slider_checkbox',
					'type' => 'checkbox'
				),						
			),
		);
	}
	return $meta_boxes;
	}
	add_filter( 'cmb_meta_boxes', 'header_metaboxes' );      
	
	//Add Meta Boxes
	function body_metaboxes( $meta_boxes ) {
	$post_id = '';
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	}
	$page_template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( $page_template == 'full-width.php' ) {	
	$prefix = 'body_'; // Prefix for all fields

	$meta_boxes[] = array(
		'id' => 'body_options',
		'title' => 'Body Options',
		'pages' => array('page'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	
				array(
					'name' => 'Padding',
					'desc' => 'Set the amount of padding your want on your container.',
					'id' => $prefix . 'padding',
					'type' => 'text'
				),		
			),
		);
	}
	return $meta_boxes;
	}
	add_filter( 'cmb_meta_boxes', 'body_metaboxes' );  