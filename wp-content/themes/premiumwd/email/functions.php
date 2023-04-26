<?php


// Redefine user notification function
if ( !function_exists('wp_new_user_notification') ) {
    function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {
        $user = new WP_User($user_id);

        $user_login = stripslashes($user->user_login);
        $user_email = stripslashes($user->user_email);

        $message  = sprintf(__('New user registration on your blog %s:'), get_option('blogname')) . "\r\n\r\n";
        $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
        $message .= sprintf(__('E-mail: %s'), $user_email) . "\r\n";

        @wp_mail(get_option('admin_email'), sprintf(__('[%s] New User Registration:'), get_option('blogname')), $message);

        if ( empty($plaintext_pass) )
            return;

        $message  = __('Hi there,') . "\r\n\r\n";
        $message .= sprintf(__("Welcome to %s! Please enjoy all the benefits that come with your new membership."), get_option('blogname')) . "\r\n\r\n";
		$message .= sprintf(__("Theme tutorials and guides to finish faster.")) . "\r\n";
  		$message .= sprintf(__("24/7/365 support forums for all paid customers.")) . "\r\n";
  		$message .= sprintf(__("Unlimited theme updates with each purchase.")) . "\r\n";
		$message .= sprintf(__("Video tutorials to see things easier.")) . "\r\n";
		$message .= sprintf(__("Please be sure to stay in the look of our blog and updates so you enjoy the best from us and keep coming back for all your WordPress needs.")) . "\r\n";
        $message .= sprintf(__("")) . "\r\n";
		$message .= sprintf(__("Here is the following login information to get you started!")) . "\r\n";
        $message .= sprintf(__('Username: %s'), $user_login) . "\r\n";
        $message .= sprintf(__('Password: %s'), $plaintext_pass) . "\r\n\r\n";
		$message .= sprintf(__("")) . "\r\n";
        $message .= sprintf(__("If you have any problems, please contact us on our support center and open a ticket!")). "\r\n\r\n"; 
		$message .= sprintf(__("https://premiumwd.zendesk.com/home")) . "\r\n";
      	$message .= sprintf(__("")) . "\r\n";
	   	$message .= sprintf(__("Best Regards")) . "\r\n";
	  	$message .= sprintf(__("Founder - Chris Rodriguez")) . "\r\n";
		$message .= sprintf(__("http://www.premiumwd.com/")) . "\r\n";

        wp_mail($user_email, sprintf(__('[%s] Your username and password'), get_option('blogname')), $message);

    }
}


add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
/**
* Remove WooCommerce Generator tag, styles, and scripts from the homepage.
* Tested and works with WooCommerce 2.0+
*
* @author Greg Rickaby
* @since 2.0.0
*/
function child_manage_woocommerce_styles() {
remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
if ( is_front_page() || is_home() ) {
wp_dequeue_style( 'woocommerce_frontend_styles' );
wp_dequeue_style( 'woocommerce_fancybox_styles' );
wp_dequeue_style( 'woocommerce_chosen_styles' );
wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
wp_dequeue_script( 'wc_price_slider' );
wp_dequeue_script( 'wc-single-product' );
wp_dequeue_script( 'wc-add-to-cart' );
wp_dequeue_script( 'wc-cart-fragments' );
wp_dequeue_script( 'wc-checkout' );
wp_dequeue_script( 'wc-add-to-cart-variation' );
wp_dequeue_script( 'wc-single-product' );
wp_dequeue_script( 'wc-cart' );
wp_dequeue_script( 'wc-chosen' );
wp_dequeue_script( 'woocommerce' );
wp_dequeue_script( 'prettyPhoto' );
wp_dequeue_script( 'prettyPhoto-init' );
wp_dequeue_script( 'jquery-blockui' );
wp_dequeue_script( 'jquery-placeholder' );
wp_dequeue_script( 'fancybox' );
wp_dequeue_script( 'jqueryui' );
}}

include(TEMPLATEPATH . "/shortcodes/shortcodes.php");

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'premiumwd' ),
	) );
	
	
/* Enable Post Thumbnail */
add_theme_support( 'post-thumbnails' );

/* Add Image Size */
add_image_size( 'blog-post', 140, 150, true ); 
add_image_size( 'blog-one-col', 620, 300, true ); 
add_image_size( 'featured', 450, 330, true ); 
add_image_size( 'index-recent', 200, 100, true ); 
add_image_size( 'slider', 960, 400, true ); 

//Function to enable Shortcode on widget
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode', 11);
add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );



function registration_form_wpa95139(){ ?>

    <form id="create-page" method="post">
   <div class="signup_divider"><h2><?php _e('Create a Free Account'); ?></h2></div>

             <div class="signup_box_inner">
             <p><label for="name">Full Name</label>
			<input type="text" name="user_name" id="user_name" class="input required" /></p>
             
            <p> <label for="username">Username</label>
			<input type="text" name="user_login" id="user_login" class="input required" /></p>

			<p><label for="email">Email</label>
			<input type="text" name="user_email" id="user_email" class="input required" /></p>

                             <p class="statement"><?php _e('By signing up a temporary password will be e-mailed to you.'); ?></p>
					</div>
					<?php do_action('register_form'); ?>
                     <div class="signup_box_button"><input type="submit" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>" id="register" /></div>
                                 </form>
   
<?php }

//Function for widget sidebars

if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Footer Widget',
        'before_widget' => '<li class="one-fourth %1$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
	
if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Blog Page',
        'before_widget' => '<div class="widget-box clearfix %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Showcase Page',
        'before_widget' => '<div class="widget-box clearfix">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Contact Page',
        'before_widget' => '<div class="widget-box clearfix %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Premium Theme Details',
        'before_widget' => '<div class="widget-box clearfix">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Theme Page',
        'before_widget' => '<div class="widget-box clearfix">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'FAQ Page',
        'before_widget' => '<div class="widget-box clearfix %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebars(1,array(
	    'name' => 'Create Page',
        'before_widget' => '<div class="widget-box clearfix %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
      $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   <div class="comment-author">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="avatar-container"><?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '75' ); }?></div>
           <div class="comment-content">
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
      <?php endif; ?>
     <div class="data-container">
<h5><?php printf(__('%s'), get_comment_author_link()) ?> <span><a> <?php comment_time( 'M j, H:i '); ?> </a></span></h5>
  <?php comment_text() ?>
      <div class="reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?> <span><?php edit_comment_link(__('(Edit)'),'  ','') ?></span></div>
       </div></div></div>
       <div style="clear:both;"></div>
       </li>
<?php } // end custom_comments

// Pagination
function pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}



function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
       global $post;
	return '...
	<span class="read"><a href="'. get_permalink($post->ID) .'">Read More</a></span>';
}
add_filter('excerpt_more', 'new_excerpt_more');


 // remove parentheses from category list and add span class to post count
function categories_postcount_filter ($variable) {
$variable = str_replace('(', '<span class="post-count"> ', $variable);
$variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','categories_postcount_filter');


error_reporting(E_ALL);

add_action( 'init', 'add_product_to_cart' );
function add_product_to_cart() {
if ( ! is_admin() ) {
global $woocommerce;
$product_id = 64;
$found = false;
//check if product already in cart
if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) {
foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) {
$_product = $values['data'];
if ( $_product->id == $product_id )
$found = true;
}
// if product not found, add it
if ( ! $found )
$woocommerce->cart->add_to_cart( $product_id );
} else {
// if no products in cart, add it
$woocommerce->cart->add_to_cart( $product_id );
}
}
}
function remove_loop_button(){
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_images', 20 );
	remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
}
add_action('init','remove_loop_button');
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );

function remove_add_to_cart_buttons() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
}
remove_action( 'woocommerce_before_main_content',
    'woocommerce_breadcrumb', 20, 0);


    add_action( 'init', 'register_cpt_showcase' );
    function register_cpt_showcase() {
    $labels = array(
    'name' => _x( 'Showcase', 'showcase' ),
    'singular_name' => _x( 'Showcase', 'showcase' ),
    'add_new' => _x( 'Add New', 'showcase' ),
    'add_new_item' => _x( 'Add New Showcase', 'showcase' ),
    'edit_item' => _x( 'Edit Showcase', 'showcase' ),
    'new_item' => _x( 'New Showcase', 'showcase' ),
    'view_item' => _x( 'View Showcase', 'showcase' ),
    'search_items' => _x( 'Search Showcase', 'showcase' ),
    'not_found' => _x( 'No Showcase found', 'showcase' ),
    'not_found_in_trash' => _x( 'No Showcase found in Trash', 'showcase' ),
    'parent_item_colon' => _x( 'Parent Showcase:', 'showcase' ),
    'menu_name' => _x( 'Showcase', 'showcase' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'thumbnail', 'custom-fields' ),
    'public' => false,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon' => get_bloginfo('template_directory') . '/images/cpt-icons/folder-share.png',
    'show_in_nav_menus' => false,
    'publicly_queryable' => false,
    'exclude_from_search' => true,
    'has_archive' => false,
    'query_var' => 'showcase',
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'showcase', $args );
    } 





/**
 * add ie conditional html5 shim to header
 */
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="'. get_template_directory_uri() .'/js/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');	

/**
 * add ie 6-8 conditional selectivizr to header
 * Important for the responsive framework
 */
function add_ie_selectivizr () {
    echo '<!--[if (gte IE 6)&(lte IE 8)]>';
    echo '<script src="'. get_template_directory_uri() .'/js/selectivizr-min.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_selectivizr');	

function st_enqueue_scripts() {
	/*
	* Adds JavaScript for Live Search
	*/
	/*
	* Adds JavaScript for shortcodes
	* (will be mvoed to plugin soon)
	*/
	wp_enqueue_script('st_shortcodes', get_template_directory_uri() . '/shortcodes/shortcodes.js', array( 'jquery' ), false, true);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');


add_filter( 'avatar_defaults', 'newgravatar' );

function newgravatar ($avatar_defaults) {
$myavatar = get_bloginfo('template_directory') . '/images/twitter-avatar.png';
$avatar_defaults[$myavatar] = "PremiumWD";
return $avatar_defaults;
}


 /*add_action('admin_menu', function() { remove_meta_box('pageparentdiv', 'chapter', 'normal');});
  add_action('add_meta_boxes', function() { add_meta_box('chapter-parent', 'Part', 'chapter_attributes_meta_box', 'chapter', 'side', 'high');});*/

  function chapter_attributes_meta_box($post) {
    $post_type_object = get_post_type_object($post->post_type);
    if ( $post_type_object->hierarchical ) {
      $pages = wp_dropdown_pages(array('post_type' => 'part', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __('(no parent)'), 'sort_column'=> 'menu_order, post_title', 'echo' => 0));
      if ( ! empty($pages) ) {
        echo $pages;
      } // end empty pages check
    } // end hierarchical check.
  }


add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
	$admin_bar->add_menu( array(
		'parent' => 'appearance',
		'id'    => 'showcase',
		'title' => 'Showcase',
		'href'  => '/wp-admin/edit.php?post_type=showcase',	
		'meta'  => array(
			'title' => __('Showcase'),			
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'appearance',
		'id'    => 'product',
		'title' => 'Products',
		'href'  => '/wp-admin/edit.php?post_type=product',	
		'meta'  => array(
			'title' => __('Products'),			
		),
	));
} 

add_action( 'admin_menu', 'my_remove_menu_pages' );

	function my_remove_menu_pages() {
		remove_menu_page('customize.php');	
	}
	
/* Remove Checkout Fields */
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
unset($fields['billing']['billing_phone']);
    $fields['billing']['billing_address_2'] = array(
    'label'     => __('Address 2', 'woocommerce'),
    'placeholder'   => _x('Address 2 (optional)', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-last'),
    'clear'     => true
     );
    $fields['billing']['billing_postcode'] = array(
    'label'     => __('Zip Code', 'woocommerce'),
    'placeholder'   => _x('Zip Code', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-last'),
    'clear'     => true
     );
 	$fields['billing']['billing_state'] = array(
    'label'     => __('State', 'woocommerce'),
    'placeholder'   => _x('State', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-last'),
    'clear'     => true
     );
	 $fields['billing']['billing_address_1'] = array(
    'label'     => __('Address', 'woocommerce'),
    'placeholder'   => _x('Address', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-first'),
    'clear'     => false
     );
	 $fields['billing']['billing_city'] = array(
    'label'     => __('Town / City', 'woocommerce'),
    'placeholder'   => _x('Town / City', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-first'),
    'clear'     => false
     );
	$fields['billing']['billing_country'] = array(
    'label'     => __('Country', 'woocommerce'),
    'placeholder'   => _x('Country', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-first'),
    'clear'     => false
     );
return $fields;
}

function reorder_woo_fields($fields) {
$fields2['billing']['billing_first_name'] = $fields['billing']['billing_first_name'];
$fields2['billing']['billing_last_name'] = $fields['billing']['billing_last_name'];
$fields2['billing']['billing_company'] = $fields['billing']['billing_company'];
$fields2['billing']['billing_address_1'] = $fields['billing']['billing_address_1'];
$fields2['billing']['billing_address_2'] = $fields['billing']['billing_address_2'];
$fields2['billing']['billing_city'] = $fields['billing']['billing_city'];
$fields2['billing']['billing_postcode'] = $fields['billing']['billing_postcode'];
$fields2['billing']['billing_country'] = $fields['billing']['billing_country'];
$fields2['billing']['billing_state'] = $fields['billing']['billing_state'];
$fields2['billing']['billing_email'] = $fields['billing']['billing_email'];

//rest of the fields....

//just copying these (keeps the standard order)
$fields2['shipping'] = $fields['shipping'];
$fields2['account'] = $fields['account'];
$fields2['order'] = $fields['order'];

return $fields2;
}
add_filter('woocommerce_checkout_fields','reorder_woo_fields'); //changes adres field on the checkout page

	
///////////////////////////////////////
// Enable shortcode in content
///////////////////////////////////////	
add_filter('the_content', 'do_shortcode');

///////////////////////////////////////
// Enable shortcode in excerpt
///////////////////////////////////////
add_filter('the_excerpt', 'do_shortcode');

///////////////////////////////////////	
// Enable shortcode in text widget
///////////////////////////////////////
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode', 11);

///////////////////////////////////////	
// Remove the 2 main auto-formatters
///////////////////////////////////////
remove_filter( 'the_content', 'wpautop' );
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');


function avatar_delete( $user_id ) {
            $old_avatars = get_user_meta( $user_id, 'author_avatar', true );
            $auth = get_the_author_meta( 'user_login', $user_id );
            $wp_content = WP_CONTENT_DIR;
            $filename = $wp_content . '/images/authors/' . $auth . '.jpg';
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

add_action('init' , 'send_mail_action',10,99);
function send_mail_action(){
	if(isset($_GET['action']) && $_GET['action'] == 'sendmail'){
		include('email/sendmail.php');
		echo send_mail_func();
		die();
	}
}