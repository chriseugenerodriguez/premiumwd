<?php

function main_scripts() {	
  if ( get_option('premiumwd_responsive', 'true') == 'true' ) {	
	  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/includes/responsive/responsive.css', 'all' );
  }

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', '', 'all');
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', '', 'all');
	wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
	wp_register_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ) );		
	wp_register_script( 'jquery-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ) );	
	wp_enqueue_script( 'jquery-scripts' );
	wp_enqueue_script( 'jquery-init' );
	
  }
add_action( 'wp_enqueue_scripts', 'main_scripts');

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

  load_theme_textdomain( 'merchant', get_template_directory() . '/languages' );
  add_editor_style();

  require_once (TEMPLATEPATH . "/includes/plugins/theme_plugins.php");  	
  require_once (TEMPLATEPATH . "/includes/shortcodes/theme-shortcodes.php"); 
  require_once (TEMPLATEPATH . "/includes/shortcodes/shortcodes.php");  
  require_once (TEMPLATEPATH . "/includes/sidebar/sidebar.php"); 
  require_once (TEMPLATEPATH . "/includes/widgets/flickr.php");   
  require_once (TEMPLATEPATH . "/includes/widgets/twitter.php");
  require_once (TEMPLATEPATH . "/includes/widgets/latest_posts_menu.php");   
  require_once (TEMPLATEPATH . "/includes/options/font-awesome/font-awesome.php");   
  require_once (TEMPLATEPATH . "/includes/widgets/related_posts.php"); 
  require_once (TEMPLATEPATH . "/includes/widgets/video.php");  
  require_once (TEMPLATEPATH . "/includes/widgets/instagram.php");  
  require_once (TEMPLATEPATH . "/includes/blog/blog.php"); 
  include_once (TEMPLATEPATH . "/includes/options/google-fonts-array.php");	  
  include_once (TEMPLATEPATH . "/includes/options/options-init.php");
  include_once (TEMPLATEPATH . "/includes/options/options/init.php");
  include_once (TEMPLATEPATH . "/includes/update.php");



  // Enable automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // Make theme available for translation
  // Translations can be filed in the /languages/ directory
  load_theme_textdomain( 'merchant', get_template_directory() . '/languages' );

  $locale = get_locale();
  $locale_file = get_template_directory() . "/languages/$locale.php";

  if ( is_readable( $locale_file ) )
	  require_once( $locale_file );

  // Enable featured image
  add_theme_support( 'post-thumbnails' );

  // Enable post format support
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'audio', 'video', 'quote' ) );

  // Thumbnail sizes
  add_image_size( 'thumb-small', 160, 160, true );
  add_image_size( 'thumb-medium', 520, 245, true );
  add_image_size( 'thumb-large', 900, 550, true );
  add_image_size( 'masonry-gallery', 360, 400, true );
  add_image_size( 'masonry-image', 230, 360, true );
  add_image_size( 'related_posts', 400, 400, false );
  add_image_size('latest_post_boxed', 600, 400, true);
  add_image_size('product_swiper', 370,475, true);

  // Custom menu areas
  register_nav_menus( array(
	  'header' => 'Header Primary',
	  'sub-header' => 'Sub Header',
	  'footer' => 'Footer',
  ) );	

if(function_exists("is_woocommerce")){
  require_once( 'woocommerce/woocommerce_configuration.php' );
  include_once('woocommerce/woocommerce-dropdown-cart.php');
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
	 if (get_option('premiumwd_allow_search') == 'true') {
	  if (in_array('container' , $classes)) {
          $items .= '<li id="header-search"><i class="fa fa-angle-right"></i><form method="GET" action="'. esc_url( home_url( '/' ) ).'"><input type="hidden" name="post_type" value="product" /><input  type="text" placeholder="Search Products" value="" name="s"></form></li>';
			}
	   }
	 if (get_option('premiumwd_allow_headline') == 'true') {
	  if (in_array('menu-header' , $classes)) {
          $items .= '<li class="bannertext">'.get_option('premiumwd_allow_headline_text').'</li>';
			}
	   }
	  if(is_active_sidebar('woocommerce_dropdown')) {
	  	if (in_array('ecommerce-header' , $classes)) { 
	 		 ob_start();
	 		 dynamic_sidebar('woocommerce_dropdown'); 
	 		 $items .= '<li class="woocart">';
			 $items .= ob_get_contents();
			 $items .= '</li>';
	  		ob_get_clean();
		if (is_checkout()) {
			$items .='<li class="backtocart"><a href="'. get_permalink(woocommerce_get_page_id("cart")).'"><i class="fa fa-angle-left"></i> Back to Cart</a></li>';	
			}
		  } 
		} 
	 return $items;
}
add_filter('wp_nav_menu_items', 'add_contact', 10, 2);


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