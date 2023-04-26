<?php

	// Questions
	include_once get_template_directory().'/buddypress/bp-custom.php';

	// WP ENQUEUE SCRIPTS / STYLES
	function  main_scripts() {	
	

	
	wp_register_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
	wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', '', 'all');
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/css/font-awesome.css', '', 'all');
    wp_register_style( 'animation-css', get_template_directory_uri() . '/assets/css/animate.css', '', 'all');

	wp_enqueue_style('stylesheet');
	wp_enqueue_style('responsive');
	wp_enqueue_style('font-awesome');
    wp_enqueue_style('animation-css');	
  
	wp_register_script( 'jquery-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ) );
	wp_register_script( 'jquery-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ) );
    wp_register_script( 'jquery-jPages', get_template_directory_uri() . '/assets/js/jPages.min.js', array( 'jquery' ) );
    wp_register_script( 'jquery-Pagination', get_template_directory_uri() . '/assets/js/Pagination.js', array( 'jquery' ) );

	wp_enqueue_script( 'jquery-plugins' );
	wp_enqueue_script( 'jquery-init' );
    wp_enqueue_script( 'jquery-jPages' );
    wp_enqueue_script( 'jquery-Pagination' );
	
	}
	add_action( 'wp_head', 'main_scripts' );

	// Enable shortcode/
	add_filter('the_content', 'do_shortcode');
	add_filter('the_excerpt', 'do_shortcode');

	// add ie conditional html5 shim to header
	function add_ie_html5_shim () {
		echo '<!--[if lt IE 9]>';
		echo '<script src="'. get_template_directory_uri() .'/assets/js/html5.js"></script>';
		echo '<![endif]-->';
	}
	add_action('wp_head', 'add_ie_html5_shim');	
	
	// add ie 6-8 conditional selectivizr to header
	function add_ie_selectivizr () {
		echo '<!--[if (gte IE 6)&(lte IE 8)]>';
		echo '<script src="'. get_template_directory_uri() .'/assets/js/selectivizr-min.js"></script>';
		echo '<![endif]-->';
	}
	add_action('wp_head', 'add_ie_selectivizr');	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header' => __( 'Header Navigation', 'premiumwd' ),
		'footer' => __( 'Footer Navigation', 'premiumwd' ),
	) );
	
	// Enable Post Thumbnail 
	add_theme_support( 'post-thumbnails' );
	
	// Add Image Size 
	add_image_size( 'attachment-shop_catalog',  690, 1109, true ); 

	// Custom Excerpt
	function custom_excerpt_length( $length ) {
		return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more($more) {
		   global $post;
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
		
	// Remove WordPress V.
	function wpbeginner_remove_version() {
	return '';
	}
	add_filter('the_generator', 'wpbeginner_remove_version');

	// Remove Query Strings
	function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
	}
	add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', '_remove_script_version', 15, 1 ); 

	if ( function_exists('register_sidebar') )
	    register_sidebars(1,array(
			'name' => 'Questions',
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		));	

	if ( function_exists('register_sidebar') )
	    register_sidebars(1,array(
			'name' => 'Questions Single',
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		));	
		
	// Defer parsing of JavaScript
	function defer_parsing_of_js ( $url ) {
	if ( FALSE === strpos( $url, '.js' ) ) return $url;
	if ( strpos( $url, 'jquery.js' ) ) return $url;
	return "$url' defer='defer";
	}
	add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );


add_filter('wp_nav_menu_items', 'add_login', 10, 2);
 function add_login($items, $args) {
	 global $current_user;
	 $classes = explode(" " , $args->container_class );
		if (in_array('menu' , $classes)) {
          if ( is_user_logged_in() ) { 
		  } else { 
		  $items .= '<li><a href="/login">Login</a> </li><li class="alt"><a href="/register">Sign Up</a> </li>';
		   } 
			}	
				 return $items;
			}
add_action('wp_ajax_support_search', 'support_search_callback');
add_action('wp_ajax_nopriv_support_search', 'support_search_callback');
function support_search_callback(){
	
	global $wpdb;
	
	$s = isset($_GET['s'])?$_GET['s']:'';
	$subpages = isset($_GET['subpage'])?$_GET['subpage']:'';
	$post_type = isset($_GET['post_type'])?$_GET['post_type']:'page';
	
	$args = array('posts_per_page' => 5 , 'post_status' => 'publish');
	
	if(!empty($s)) $args['s'] = $s;
	if($post_type != 'page') $args['post_type'] = $post_type;
	else { $args['post_parent'] = $subpages; $args['post_type'] = 'page'; }
	
	
//	$searches = getSearchResults($s , $subpages);
		remove_filter('pre_get_posts','SearchFilter');
		$searches = new WP_Query($args);
	
		if($searches->have_posts()){
			while($searches->have_posts()): $searches->the_post();
				if($post_type == 'video') {
					$p = get_post(get_the_ID());
					echo '<li><a href="'.get_permalink($subpages).'#'.$p->post_name.'">'.get_the_title().'</a></li>';
				} else
					echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
			endwhile;
		} else {
			echo '<li>No Search Matched</li>';
		}
	
	exit;
}


add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	

	<table class="form-table">

		<tr>
			<th><label for="location">Current Location</label></th>

			<td>
				<input type="text" name="location" id="location" value="<?php echo esc_attr( get_the_author_meta( 'location', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your location .</span>
			</td>
		</tr>

	</table>
<?php }



add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'location', $_POST['location'] );
}
