<?php

function main_styles() {	

  if ( get_option('premiumwd_responsive', 'true') == 'true' ) {	
	  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/includes/responsive/responsive.css', 'all' );
  }
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', '', 'all');
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', '', 'all');
	wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
}
add_action( 'wp_enqueue_scripts', 'main_styles');

function main_scripts() {		
	wp_register_script( 'jquery-modrnizr', get_template_directory_uri() . '/assets/js/modernizr.js', array( 'jquery' ) );		
	wp_register_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ) );		
	wp_register_script( 'jquery-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ) );	
	wp_enqueue_script( 'jquery-modrnizr' );
	wp_enqueue_script( 'jquery-scripts' );
	wp_enqueue_script( 'jquery-init' );
  }
add_action( 'wp_footer', 'main_scripts');


//MEGA MENU
$columns_class = array("1" => "twelve" , "2" => "six" , "3" => "four" , "4"  => "three");
if(get_option('premiumwd_mega_menu', 'true') == 'true'){
	require_once(TEMPLATEPATH . "/includes/menu/class-megamenu.php");
	require_once(TEMPLATEPATH . "/includes/menu/helper-responsive-megamenu.php");

	function mega_scripts() {
		wp_enqueue_style( 'mega-menu', get_template_directory_uri() . '/includes/menu/css/menu.css', '', 'all');	
	}
	add_action( 'wp_enqueue_scripts', 'mega_scripts' );	
}

  load_theme_textdomain( 'Mini', get_template_directory() . '/languages' );

  add_editor_style();

  require_once (TEMPLATEPATH . "/includes/plugins/theme_plugins.php");  	
  require_once (TEMPLATEPATH . "/includes/shortcodes/theme-shortcodes.php"); 
  require_once (TEMPLATEPATH . "/includes/shortcodes/shortcodes.php");  
  require_once (TEMPLATEPATH . "/includes/sidebar/sidebar.php"); 
  require_once (TEMPLATEPATH . "/includes/widgets/portfolio.php");  
  require_once (TEMPLATEPATH . "/includes/widgets/flickr.php");   
  require_once (TEMPLATEPATH . "/includes/widgets/twitter.php");
  require_once (TEMPLATEPATH . "/includes/widgets/latest_posts.php");   
  require_once (TEMPLATEPATH . "/includes/widgets/related_posts.php"); 
  require_once (TEMPLATEPATH . "/includes/widgets/video.php");  
  require_once (TEMPLATEPATH . "/includes/widgets/instagram.php");  
  require_once (TEMPLATEPATH . "/includes/blog/blog.php"); 
  require_once (TEMPLATEPATH . "/includes/portfolio/portfolios.php"); 
  include_once (TEMPLATEPATH . "/includes/options/google-fonts-array.php");	  
  include_once (TEMPLATEPATH . "/includes/options/options-init.php");
  include_once (TEMPLATEPATH . "/includes/options/options/init.php");
  
  include_once (TEMPLATEPATH . "/includes/options/font-awesome/font-awesome.php");		
  include_once (TEMPLATEPATH . "/includes/update.php");



// Add the Portfolio Dynamic Content Meta Box
function wpb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once (TEMPLATEPATH . '/includes/inc/meta/init.php');
}
add_action( 'init', 'wpb_initialize_cmb_meta_boxes', 9999 );


  // Enable automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // Make theme available for translation
  // Translations can be filed in the /languages/ directory
  load_theme_textdomain( 'Mini', get_template_directory() . '/languages' );

  $locale = get_locale();
  $locale_file = get_template_directory() . "/languages/$locale.php";

  if ( is_readable( $locale_file ) )
      require_once( $locale_file );


  // Enable featured image
  add_theme_support( 'post-thumbnails' );

  
  // Enable post format support
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'audio', 'video', 'quote' ) );

  
  // Thumbnail sizes
  add_image_size( 'thumb-blog', 1200, 500, true );
  add_image_size('latest_post_boxed', 600, 400, true);


  // Custom menu areas
  register_nav_menus( array(
	  'header' => 'Header Primary',
  ) );	


if(preg_match('/(?i)msie [6-9]/',$_SERVER['HTTP_USER_AGENT']))
  {
  function add_ie_formaters() {
	  echo '<script src="'. get_template_directory_uri() .'/assets/js/html5.js"></script>';
	  echo '<script src="'.get_template_directory_uri() . '/assets/js/respond.js"></script>';
	  echo '<script src="'. get_template_directory_uri() .'/assets/js/selectivizr-min.js"></script>';
	}
  add_action('wp_head', 'add_ie_formaters');	
}

if(function_exists("is_woocommerce")){
  require_once( 'woocommerce/woocommerce_configuration.php' );
  include_once('woocommerce/woocommerce-dropdown-cart.php');

	function wooscripts() {
		wp_enqueue_style( 'woostyle', get_template_directory_uri() . '/woocommerce/style.css', '', 'all');	
		wp_dequeue_script( 'prettyPhoto' );
		wp_dequeue_script( 'prettyPhoto-init' );
	}
	add_action( 'wp_enqueue_scripts', 'wooscripts' );	

}


function send_mail_action(){
	if(isset($_GET['action']) && $_GET['action'] == 'sendmail'){
		include (TEMPLATEPATH . '/includes/contact/sendmail.php');
		echo send_mail_func();
	die();
	}
}
add_action('init' , 'send_mail_action',10,99);

if ( get_option('premiumwd_defer_js', 'false') == 'true' ) {		
	function defer_parsing_of_js ( $url ) {
	  if ( FALSE === strpos( $url, '.js' ) ) return $url;
	  if ( strpos( $url, 'jquery.js' ) ) return $url;
	  return "$url' defer='defer";
		}
	add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

if ( get_option('premiumwd_query_strings', 'false') == 'true' ) {	
	add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
	add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
}

//*Add nav-arrows to navigation if parent
class premium_Walker_Nav_Menu extends Walker_Nav_Menu {
     function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

        if ( 'header' == $args->theme_location ) {
            $submenus = 0 == $depth || 1 == $depth ? get_posts( array( 'post_type' => 'nav_menu_item', 'numberposts' => 1, 'meta_query' => array( array( 'key' => '_menu_item_menu_item_parent', 'value' => $item->ID, 'fields' => 'ids' ) ) ) ) : false;
            $item_output .= ! empty( $submenus ) ? ( 0 == $depth ? '<span class="arrow"><i class="fa fa-angle-down"></i></span>' : '<span class="sub-arrow"><i class="fa fa-angle-right"></i></span>' ) : '';
        }
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


/*  Upscale cropped thumbnails
/* ------------------------------------ */
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
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );



function add_contact($items, $args) {
	$classes = explode(" " , $args->container_class );	 	
	if (in_array('menu-header' , $classes)) {
		if (get_option('premiumwd_allow_search') == 'true') {
			$items .= '<li id="header-search"><div><i class="fa fa-search"></i><form method="GET" action="'. esc_url( home_url( '/' ) ).'"><input  type="text" placeholder="Search" value="" name="s"></form></div></li>';
		}
	}	 
	return $items;
}
add_filter('wp_nav_menu_items', 'add_contact', 10, 2);


	//Add Meta Boxes
	function page_metaboxes( $meta_boxes ) {
	$post_id = '';
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	}
	$page_template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( $page_template == 'blank.php' || $page_template == 'full-width-slider.php' || $page_template == 'archive.php' || $page_template == '404.php' ) {	} else {
	$prefix = 'page_'; // Prefix for all fields

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

				array(
					'name' => 'Background Color',
					'id'   => $prefix . 'background_color',
					'type' => 'colorpicker',
					'default'  => '#F7F8FA',
					'repeatable' => false,
				),

				array(
						'name' => 'Background',
						'id' => $prefix . 'image',
						'type' => 'file',
						'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
				),    

				array(
					'name' => 'Parallax',
					'desc' => 'Background image scrolls with the page.',
					'id' => $prefix . 'parallax_checkbox',
					'type' => 'checkbox'
				),		

				array(
					'name' => 'Little Padding',
					'desc' => 'Add less padding to page title for a smaller section.',
					'id' => $prefix . 'padding_checkbox',
					'type' => 'checkbox'
				),	

				array(
					'name' => 'Title Color',
					'id'   => $prefix . 'header_color',
					'type' => 'colorpicker',
					'default'  => '#333',
					'repeatable' => false,
				),

				array(
					'name' => 'Sub Header Color',
					'id'   => $prefix . 'sub_color',
					'type' => 'colorpicker',
					'default'  => '#ccc',
					'repeatable' => false,
				),

				array(
					'name' => 'Min Height',
					'desc' => 'This is mainly used for transparent header section.',
					'id' => $prefix . 'height_checkbox',
				    'default' => '0',
				    'id'      => $prefix . 'height_heading',
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
		'title' => 'Title Options',
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	

				array(
					'name' => 'Background Color',
					'id'   => $prefix . 'background_color',
					'type' => 'colorpicker',
					'default'  => '#F7F8FA',
					'repeatable' => false,
				),

				array(
						'name' => 'Background',
						'id' => $prefix . 'image',
						'type' => 'file',
						'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
				),    

				array(
					'name' => 'Parallax',
					'desc' => 'Background image scrolls with the page.',
					'id' => $prefix . 'parallax_checkbox',
					'type' => 'checkbox'
				),		

				array(
					'name' => 'Little Padding',
					'desc' => 'Add less padding to page title for a smaller section.',
					'id' => $prefix . 'padding_checkbox',
					'type' => 'checkbox'
				),	

				array(
					'name' => 'Title Color',
					'id'   => $prefix . 'header_color',
					'type' => 'colorpicker',
					'default'  => '#333',
					'repeatable' => false,
				),

				array(
					'name' => 'Sub Header Color',
					'id'   => $prefix . 'sub_color',
					'type' => 'colorpicker',
					'default'  => '#ccc',
					'repeatable' => false,
				),

				array(
					'name' => 'Min Height',
					'desc' => 'This is mainly used for transparent header section.',
					'id' => $prefix . 'height_checkbox',
				    'default' => '500',
				    'id'      => $prefix . 'height_heading',
				    'type'    => 'text',
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
	if ( $page_template == 'blank.php' || $page_template == 'archive.php' || $page_template == '404.php' ) {	} else {
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
	if ( $page_template !== 'full-width.php' ) {	} else {
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
	
function options_toolbar( $wp_admin_bar ) {
	$args = array(
		'parent' => 'appearance',
		'id'    => 'options',
		'title' => 'Options',
		'href' => get_bloginfo('url').'/wp-admin/admin.php?page=premiumwd_theme_options',
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