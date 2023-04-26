<?php

	function my_site_WI_dequeue_script() {
		 wp_dequeue_script( 'jquery' ); 
		 wp_dequeue_script( 'jquery-ui-core' ); 
		 wp_dequeue_script( 'jquery-ui-widget' ); 
		 wp_dequeue_script( 'jquery-ui-mouse' ); 
		 wp_dequeue_script( 'jquery-ui-sortable' ); 
		 wp_dequeue_script( 'jquery-ui-datepicker' ); 
		 wp_dequeue_script( 'jquery-ui-draggable' ); 
		 wp_dequeue_script( 'jquery-ui-slider' ); 
		 wp_dequeue_script( 'jquery-ui-widget' ); 
		 wp_dequeue_script( 'jquery-ui-autocomplete' ); 
		 wp_dequeue_script( 'jquery-ui-menu' ); 
		 wp_dequeue_script( 'jquery-ui-position' ); 
		 wp_dequeue_script( 'suggest' ); 
		 wp_dequeue_script( 'google-maps' ); 

		 wp_dequeue_style( 'jquery-ui-css' );

			if ( ! is_admin() ) {	 
				 wp_dequeue_script( 'thickbox' ); 
				 wp_dequeue_script( 'underscore' ); 
				 wp_dequeue_script( 'shortcode' ); 
				 wp_dequeue_script( 'media-upload' ); 
				 wp_dequeue_script( 'wp-embed' );

				 wp_dequeue_style( 'dashicons-css' );
				 wp_dequeue_style( 'thickbox-css' );
				 wp_dequeue_style( 'wpuf-css-css' );
			}
	}
	add_action( 'wp_print_scripts', 'my_site_WI_dequeue_script', 100 );

	// Include files
	include_once (TEMPLATEPATH . "/woocommerce/custom-permalinks.php");
	include_once (TEMPLATEPATH . "/woocommerce/woocommerce_configuration.php");
    include_once (TEMPLATEPATH . "/sidebars/sidebars.php");
	// include_once (TEMPLATEPATH . "/widgets/posts.php");

	// WP ENQUEUE SCRIPTS / STYLES
	function  main_scripts() {	
   
    wp_register_style( 'stylesheet', get_stylesheet_directory_uri().'/style.css', '', 'all');
	wp_register_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', 'all' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', '', 'all');
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/css/font-awesome.css', '', 'all');
	wp_register_style( 'ico-moon', get_template_directory_uri() . '/assets/fonts/css/icomoon.css', '', 'all');
	wp_register_style( 'woocommerce', 'http://premiumwd.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css', '', 'all');
	wp_register_style( 'print', get_template_directory_uri() . '/assets/css/print.css', '', 'all');

	wp_enqueue_style('print');	
    wp_enqueue_style('woocommerce');	
	wp_enqueue_style('responsive');
	wp_enqueue_style('stylesheet');
	wp_enqueue_style('plugins');	
	wp_enqueue_style('font-awesome');	
	wp_enqueue_style('ico-moon');	

	wp_register_script('jquery-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ) );	
	wp_register_script('jquery-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ) );	

	wp_enqueue_script( 'jquery-plugins' );
	wp_enqueue_script( 'jquery-init' );
	
	}
	add_action( 'wp_enqueue_scripts', 'main_scripts' );

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
	) );
	
	// Enable Post Thumbnail 
	add_theme_support( 'post-thumbnails' );
	
	// Add Image Size 
	add_image_size( 'index-recent', 280, 130, true ); 
	add_image_size( 'blog-post', 2000, 800, true ); 
	add_image_size('blog', 300, 200, true);
	add_image_size('showcase', 600, 400);

	// Enable shortcode/
	add_filter('the_content', 'do_shortcode');
	add_filter('the_excerpt', 'do_shortcode');
	
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


	// Defer parsing of JavaScript
	function defer_parsing_of_js ( $url ) {
	if ( FALSE === strpos( $url, '.js' ) ) return $url;
	if ( strpos( $url, 'jquery.js' ) ) return $url;
	return "$url' defer='defer";
	}
	add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
	
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
// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function Adomo_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'Adomo_remove_recent_comments_style' );

 function add_login($items, $args) {
	 $classes = explode(" " , $args->container_class );
		if (in_array('menu' , $classes)) {
		 global $woocommerce; 
		 if ( sizeof( $woocommerce->cart->cart_contents ) == 0 ) {
			 } else {
 		$items .= '<li id="cart"><a class="cart-contents" href="'. $woocommerce->cart->get_cart_url().'" title="View your shopping cart">'. sprintf(_n('%d item', '%d items', WC()->cart->cart_contents_count, 'woothemes'), WC()->cart->cart_contents_count).' - '. WC()->cart->get_cart_total().'</li></a>'; 
			 }
		  if ( is_user_logged_in() ) { 
		  $items .= '<li id="my-account"> 
		  <a class="account" href="/my-account/downloads" >My Account</a></li>';
		  } else { 
		  $items .= '<li id="login"><a href="/login">Login</a></li>';
		   } 
		   $items .= '<li class="menu-nav"><a id="mobile-nav" href="#mobile-menu"><ul class="hamburger"><li class="first"></li><li class="second"></li><li class="third"></li></ul></a></li>';
                   $items .= '<li><a class="get-started button-info" href="/wordpress-themes">Get Started</a></li>';
			}	
				 return $items;
			}
add_filter('wp_nav_menu_items', 'add_login', 10, 2);




	function avatar_delete( $user_id ) {
            $old_avatars = get_user_meta( $user_id, 'author_avatar', true );
            $auth = get_the_author_meta( 'user_login', $user_id );
            $wp_content = WP_CONTENT_DIR;
            $filename = $wp_content . '/assets/images/authors/' . $auth . '.jpg';
            if ( file_exists( $filename ) ) {

                unlink( $filename );
            }
            else {
                $upload_path = wp_upload_dir();

                if ( is_array( $old_avatars ) ) {
                    foreach ( $old_avatars as $old_avatar ) {
                        $old_avatar_path=str_replace( $upload_path[ 'baseurl' ], $upload_path[ 'basedir' ], $old_avatar );
                        @unlink( $old_avatar_path );
                    }
                }
            }

            delete_user_meta( $user_id, 'author_avatar' );
        }

	//* Contact Form *//
	add_action('init' , 'send_mail_action',10,99);
	function send_mail_action(){
		if(isset($_GET['action']) && $_GET['action'] == 'sendmail'){
			include('email/sendmail.php');
			echo send_mail_func();
			die();
		}
	}


	add_shortcode('edit_user_avatar_front','edit_user_avatar_func');
	function edit_user_avatar_func($atts, $content = ''){
		ob_start();
		$user = wp_get_current_user();
		
		if(isset($_POST['_wp_http_referer'])){
			user_avatar_add_photo_step2_custom($user->ID);
		}
		user_avatar_add_photo_step1_custom($user->ID);
		
		$content = ob_get_contents();
		ob_get_clean();
		return $content;
	}
	if(!function_exists('get_avatar')){
	function get_avatar($uid){
		return user_avatar_get_avatar($uid);
	}
	}
	
	add_action( 'show_user_profile', 'extra_user_profile_fields' );
	add_action( 'edit_user_profile', 'extra_user_profile_fields' );
	function extra_user_profile_fields( $user ) { ?>

<table class="form-table">
  <tr>
    <th><label for="image">Profile Image</label></th>
    <td><img src="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>" style="width:128px;">
      <input type="text" name="image" id="image" value="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>" class="regular-text" />
      <input type='file' class="button-primary" value="Choose Image" id="uploadimage" name="avatar_image"/>
      <br />
      <span class="description">Please upload your image for your profile.</span></td>
  </tr>
</table>
<?php }

	
	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
	 
	function my_save_extra_profile_fields( $user_id ) {
	 
	if ( !current_user_can( 'edit_user', $user_id ) )
	return false;
	
	 $file = isset($_FILES['avatar_image'])?$_FILES['avatar_image']:'';
	 if(isset($_FILES['avatar_image']) && $_FILES['avatar_image']['error'] <= 0){
	 if ( ! function_exists( 'wp_handle_upload' ) ) 
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
	$uploadedfile = $_FILES['avatar_image'];
	$upload_overrides = array( 'test_form' => false );
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	
	update_usermeta( $user_id, 'image', $movefile['url'] );
	$f = get_user_meta( $user_id, 'image', true); 
	?>
<script type="text/javascript">jQuery(document).ready(function(){ 
	jQuery(".avatar.avatar-96.photo").attr("src", '<?php echo $f; ?>');
	});//window.location.href='https://premiumwd.com/my-account/edit-address/';</script>
<?php
	 }
	 ?>
<script type="text/javascript">
	 jQuery(document).ready(function(){
		 jQuery(".tab-pane:eq(2)").addClass("active");
		 jQuery(".tab-pane:eq(0)").removeClass("active");
		 jQuery(".nav.nav-tabs li:eq(2)").addClass("active");
		 jQuery(".nav.nav-tabs li:eq(0)").removeClass("active");
	 });
	 </script>
<?php
	}

	
	function zkr_profile_upload_js() {
	?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#your-profile").attr('enctype', 'multipart/form-data');
	});
	</script>
<?php
	}
	add_action('admin_head','zkr_profile_upload_js');
	add_action('wp_head','zkr_profile_upload_js');
	function add_scripts_avatar(){
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox'); 
	}
	add_action('init' , 'add_scripts_avatar');
	
	function custom_avatar(){
		global $user_ID;
		$id = $user_ID;
		return '<img class="avatar avatar-96 photo" src="'.get_user_meta($id , 'image',true).'" />';
	}
	
	function get_avatar_custom( $avatar, $id_or_email, $size, $default, $alt )
	{
		if(get_user_meta($id_or_email , 'image',true)){
			return '<img class="avatar" src="'.get_user_meta($id_or_email , 'image',true).'" />';
		} else {
			return '<img src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=75">';
		}
	}
	
	function tgm_custom_avatar_size( $avatar ) {
		global $comment;
		$avatar = get_avatar( $comment, $size = '64' );
		return $avatar;
	
	}
	
	function be_gravatar_filter($avatar, $id_or_email = '', $size, $default, $alt) {
	
		$avatarfound = '';
		$safe_alt = '';
		$id = $id_or_email;
		if(is_object($id_or_email)){
			$id = $id_or_email->user_id;
		} else if(!is_numeric($id_or_email)){
			$user = get_user_by('email', $id_or_email);
			if($user){
			$id = $user->ID;
			}
		}
		$avatarfound = get_user_meta($id , 'image' , true);
		if($avatarfound == ""){
			$avatarfound = 'http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s='.$size;
		}
		$avatar = '<img class="avatar avatar-'.$size.' photo" src="'.$avatarfound.'" alt="'.$safe_alt.'" width="'.$size.'" height="'.$size.'" />';
		return $avatar;
	
	}
	add_filter('get_avatar', 'be_gravatar_filter', 10, 5 );





add_action('wp_ajax_filter_themes', 'filter_themes_callback');
add_action('wp_ajax_nopriv_filter_themes', 'filter_themes_callback');

function filter_themes_callback(){
		
	$args['post_type'] = 'product';
	$args['posts_per_page'] = -1;
	
	if(isset($_POST['product_cat']) && !empty($_POST['product_cat']))
		$args['product_cat'] = $_POST['product_cat'];
	
	if(isset($_POST['theme_name']) && !empty($_POST['theme_name'])){
		$args['s'] = urldecode($_POST['theme_name']);
		$args['exact'] = false;
		$args['sentance'] = false;
	}
	
	
	if(isset($_POST['orderby']) && !empty($_POST['orderby'])){
				
		$orderby = $_POST['orderby'];
		
		switch ( $orderby ) {
			case 'date' :
				$args['orderby']  = 'date';
				$args['order']    = 'DESC';
				$args['meta_key'] = '';
			break;
			case 'price' :
				$args['orderby']  = 'meta_value_num';
				$args['order']    = 'ASC';
				$args['meta_key'] = '_price';
			break;
			case 'price-desc' :
				$args['orderby']  = 'meta_value_num';
				$args['order']    = 'DESC';
				$args['meta_key'] = '_price';
			break;
			case 'popularity' :
				$args['orderby']  = 'meta_value_num';
				$args['order']    =  'DESC';
				$args['meta_key'] = 'total_sales';
			break;
			case 'rating' :
				$args['orderby']  = 'menu_order title';
				$args['order']    =  'DESC';
				$args['meta_key'] = '';
				
			break;
			case 'title' :
				$args['orderby']  = 'title';
				$args['order']    = 'ASC';
				$args['meta_key'] = '';
			break;
			// default - menu_order
			default :
				$args['orderby']  = 'menu_order title';
				$args['order']    =  'ASC';
				$args['meta_key'] = '';
			break;
		}	
		
	}
		
		add_filter( 'post_class', 'wc_product_post_class_ajax', 20, 3 );	
		
		global $woocommerce_loop;
		$woocommerce_loop['columns'] = 4;
		$woocommerce_loop['loop'] = 0;
		query_posts($args);
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); 
			woocommerce_get_template_part( 'content', 'product' );
			endwhile; 
			

		else:
			
			echo '<li>'.__('No Product To Show' , 'woocommerce').'</li>';
			
		endif;
		wp_reset_query();


		exit;	
}

function wc_product_post_class_ajax( $classes, $class = '', $post_id = '' ) {
	if ( ! $post_id || get_post_type( $post_id ) !== 'product' )
		return $classes;
		
	$classes[] = 'product';
	
	return $classes;
}


add_shortcode('change-password' , 'premiumwd_change_password');

function premiumwd_change_password($atts , $content = ""){
	$error = "";
	if(isset($_POST['change_password'])){
		global $user_ID;
		if(!empty($_POST['confirm_password']) && !empty($_POST['password'])){
			if($_POST['confirm_password'] == $_POST['password']){
				wp_set_password($_POST['password'] , $user_ID);	
				$error = "Passwords Successfully Updated";
			} else {
				$error = "Passwords Not Matched";
			}
		} else {
			$error = "Please Enter Required Fields";
		}
	}
	
	ob_start();
	?>
<form action="" method="post">
  <?php if(!empty($error)){ ?>
  <div class="clear"></div>
  <div class="error"><?php echo $error; ?>
    </li>
  </div>
  <?php } ?>
  <p class="form-row form-row-first validate-required">
    <label for="password">New Password</label>
    <input type="password" name="password" class="input-text" />
  </p>
  <p class="form-row form-row-first validate-required">
    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" class="input-text" />
  </p>
  <p class="form-row form-row-first validate-required">
    <input type="submit" name="change_password" value="Change" class="button" />
  </p>
</form>
<?php
	$content .= ob_get_contents();
	ob_get_clean();
	return $content;
	
}


function remove_woocom_action() {
	remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
	add_action( 'woocommerce_checkout_payment_custom', 'woocommerce_checkout_payment', 20 );
}
//add_action('wp', 'p404_redirect');
//function p404_redirect()
//{
//	if(is_404()) 
//	{
//		header("Location: " . home_url());
//		exit();
//	}
//}
//echo DOMAIN_CURRENT_SITE;
//exit();
//function cart_product_price( $price, $product )
//{
//	//echo $price;
//	//exit();
//}
//add_filter('woocommerce_cart_product_price','cart_product_price', 10, 2);

		// REGISTER THE POST TYPE


// Register Custom Post Type


// Register Custom Post Type
function showcase() {

	$labels = array(
		'name'                  => 'Showcases',
		'singular_name'         => 'showcase',
		'menu_name'             => 'Showcase',
		'name_admin_bar'        => 'Showcase',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'showcase',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-pressthis',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'showcase', $args );

// REGISTER CATEGORIES
	    $taxonomy_showcase_category_labels = array(
			'name' 							=> __( 'Showcase Categories', 'premiumwd' ),
			'singular_name' 				=> __( 'Category', 'premiumwd' ),
			'search_items' 					=> __( 'Search Categories', 'premiumwd' ),
			'popular_items'					=> __( 'Popular Categories', 'premiumwd' ),
			'all_items' 					=> __( 'All Categories', 'premiumwd' ),
			'parent_item' 					=> __( 'Parent Category', 'premiumwd' ),
			'parent_item_colon' 			=> __( 'Parent Category:', 'premiumwd' ),
			'edit_item' 					=> __( 'Edit Category', 'premiumwd' ),
			'update_item' 					=> __( 'Update Category', 'premiumwd' ),
			'add_new_item' 					=> __( 'Add New Category', 'premiumwd' ),
			'new_item_name' 				=> __( 'New Category Name', 'premiumwd' ),
			'separate_items_with_commas' 	=> __( 'Separate showcase categories with commas', 'premiumwd' ),
			'add_or_remove_items' 			=> __( 'Add or remove showcase categories', 'premiumwd' ),
			'choose_from_most_used' 		=> __( 'Choose from the most used showcase categories', 'premiumwd' ),
			'menu_name' 					=> __( 'Categories', 'premiumwd' ),
	    );
		
	    $taxonomy_showcase_category_args = array(
			'labels' 			=> $taxonomy_showcase_category_labels,
			'public' 			=> true,
			'show_in_nav_menus' => true,
			'show_ui' 			=> true,
			'show_admin_column' => true,
			'show_tagcloud'		=> true,
			'hierarchical' 		=> true,
			'rewrite' 			=> array( 'slug' => 'showcase_category' ),
			'query_var' 		=> true,
	    );
		
	    register_taxonomy( 'showcase_category', array( 'showcase' ), $taxonomy_showcase_category_args );
		 }
add_action( 'init', 'showcase', 0 );



