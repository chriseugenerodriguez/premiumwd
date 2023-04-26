<?php

function wooheader(){	 
			global $woocommerce;
			$items = '';
			$items .= '<ul class="header-meta">';
			if (is_user_logged_in()) { 
				$items .= '<li><a href="'. get_permalink(get_option('woocommerce_myaccount_page_id')) .'">My Account</a></li>';
			} else {
				$items .= '<li><a href="'. get_permalink(get_option('woocommerce_myaccount_page_id')) .'">Log in</a></li>';
			}
		   if(shortcode_exists("yith_wcwl_wishlist")){	 
			  $items .= '<li class="wishlist"><a href="'. get_home_url(). '/'. get_option('premiumwd_my_account_wish_list') .'">Wishlist </a></li>'; 
		   }
		   if(is_active_sidebar('woocommerce_dropdown')) {
			  if(sizeof( $woocommerce->cart->get_cart() ) >= 1){ 	 	
				  $items .= '<li class="bag active">';
			  } else {
				  $items .= '<li class="bag">';
			  }
			  $items .= '<a class="woocommerce-cart" href="'. $woocommerce->cart->get_cart_url() .'">Bag <span>'. $woocommerce->cart->cart_contents_count .'</span></a>';					
			  ob_start(); 
			  dynamic_sidebar('woocommerce_dropdown');
			  $items .= ob_get_contents();
			  $items .= '</li>';
		   }
		   ob_get_clean();		
			$items .= '</ul>';		 
		
		return $items;	
}


function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 5; // 4 related products
	$args['columns'] = 2; // arranged in 2 columns
	return $args;
}


function remove_added_to_cart_notice()
{
    $notices = WC()->session->get('wc_notices', array());

    foreach( $notices['success'] as $key => &$notice){
        if( strpos( $notice, 'has been added' ) !== false){
            $added_to_cart_key = $key;
            break;
        }
    }
    unset( $notices['success'][$added_to_cart_key] );

    WC()->session->set('wc_notices', $notices);
}
add_action('woocommerce_before_single_product','remove_added_to_cart_notice',1);
add_action('woocommerce_shortcode_before_product_cat_loop','remove_added_to_cart_notice',1);
add_action('woocommerce_before_shop_loop','remove_added_to_cart_notice',1);

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 50 );

// Add Social Share
function social_share() {
	if(get_option('premiumwd_shop_single_social') == 'true'):
	include (TEMPLATEPATH . "/includes/inc/share.php");
	endif;
};
add_action( 'woocommerce_after_single_product_summary', 'social_share', 10 ); 


//Disable the default WooCommerce stylesheet.
if ( version_compare( WOOCOMMERCE_VERSION, "2.1" ) >= 0 ) {
    add_filter( 'woocommerce_enqueue_styles', '__return_false' );
} else {
    define( 'WOOCOMMERCE_USE_CSS', false );
}


// Adds theme support for woocommerce 
add_theme_support('woocommerce');

// rich snippet fix
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

/* cart */
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_after_cart' , 'woocommerce_cross_sell_display');

// Remove Breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// Removes tabs from their original loaction
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_after_single_product', 'woocommerce_output_product_data_tabs', 10 ); 


// Display 12 products per page.
add_filter('loop_shop_per_page', create_function('$cols', 'return '. get_option('premiumwd_shop_products_per_page') .';'), 20);

// Remove the product rating display on product loops
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ); 


// Add has-gallery class to products that have a gallery
function product_has_gallery( $classes ) {
	global $product;
	$post_type = get_post_type( get_the_ID() );
		if ( ! is_admin() ) {
			if ( $post_type == 'product' ) {
				$attachment_ids = $product->get_gallery_attachment_ids();
				if ( $attachment_ids ) {
					$classes[] = 'has-gallery';
				}
			}
		}
		return $classes;
	}
add_filter( 'post_class', 'product_has_gallery' );

// Remove sale
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );


function addtocarticons() {
	$wish = '';
	
	if(get_option('premiumwd_shop_addtowishlist') == 'true'){
		$wish .='<div class="hover_items">';
			echo do_shortcode('[yith_wcwl_add_to_wishlist]');
		$wish .='</div>';
		return $wish;
	}
	if(get_option('premiumwd_shop_addtocart') == 'true'){
		add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20 );
	}


}
add_action( 'woocommerce_after_shop_loop_item_title', 'addtocarticons', 100 );

function addtocart(){
	if(get_option('premiumwd_shop_addtocart') == 'false'){
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	}	
}
add_action('init', 'addtocart', 10);

function view_more_cat() {
	global $product; global $post;
	$terms = get_the_terms( $post->ID, 'product_cat' );
	foreach ($terms as $term) {
		$product_cat_id = $term->term_id;
		break;
	}
	echo $product->get_categories( ', ', '<h4 class="posted_in">' . _n( '', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</h4>' );
}
add_action('woocommerce_after_single_product_summary', 'view_more_cat', 10);

function woo_qode_product_searchform($form) {

    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search Products', 'woocommerce' ) . '" /><i class="fa fa-search"></i>
			<input type="hidden" name="post_type" value="product" />
	</form>';

    return $form;

}
add_filter( 'get_product_search_form' , 'woo_qode_product_searchform' );


/* Remove WooCommerce styles and scripts. */
function woo_remove_lightboxes() {
        // Styles
        wp_dequeue_style( 'woocommerce_prettyPhoto_css' );        
        // Scripts
        wp_dequeue_script( 'prettyPhoto' );
        wp_dequeue_script( 'prettyPhoto-init' );
        wp_dequeue_script( 'fancybox' );
        wp_dequeue_script( 'enable-lightbox' );
}
add_action( 'wp_enqueue_scripts', 'woo_remove_lightboxes', 99 );


function woo_cart_has_virtual_product() {
  
  global $woocommerce;
  
  // By default, no virtual product
  $has_virtual_products = false;
  
  // Default virtual products number
  $virtual_products = 0;
  
  // Get all products in cart
  $products = $woocommerce->cart->get_cart();
  
  // Loop through cart products
  foreach( $products as $product ) {
	  
	  // Get product ID and '_virtual' post meta
	  $product_id = $product['product_id'];
	  $is_virtual = get_post_meta( $product_id, '_virtual', true );
	  
	  // Update $has_virtual_product if product is virtual
	  if( $is_virtual == 'yes' )
  		$virtual_products += 1;
  }
  
  if( count($products) == $virtual_products )
  	$has_virtual_products = true;
  
  return $has_virtual_products;

}

 add_filter('single_product_large_thumbnail_size', 'single_product_large_thumbnail_size_callback', 10 ,99);
 function single_product_large_thumbnail_size_callback($size){
	  $size = 'full';
	  return 'full';
  }
  
  
/* for category layout */
add_action('woocommerce_init', 'woocommece_change_tax_layout_base_on_meta');
function woocommece_change_tax_layout_base_on_meta(){
	if(is_shop() || is_product_category() || is_product_tag()){
		global $woocommerce, $post, $product, $wp_query;
		$term = $wp_query->get_queried_object();
		$display_type = get_woocommerce_term_meta( $term->term_id, 'display_type', true );
		
		switch($display_type){
			case '':
				switch(get_option( 'woocommerce_category_archive_display' ) ){
					case 'products' :
					case 'subcategories' :
						remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
						add_filter('woocommerce_image_cat_html', function($html){
							$html = "";
							return "";
						});
					break;
				}
			break;
			case 'products' :
			case 'subcategories' :
				remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
				add_filter('woocommerce_image_cat_html', function($html){
					$html = "";
					return "";
				});
			break;
		}
	}
			
}

add_filter('premiumwd_shop_sidebar', 'premiumwd_shop_sidebar_func');
function premiumwd_shop_sidebar_func($is_sidebar){
	if(is_product_category() || is_product_tag()){
		global $woocommerce, $post, $product, $wp_query;
		$term = $wp_query->get_queried_object();
		$display_type = get_woocommerce_term_meta( $term->term_id, 'display_type', true );
		
		switch($display_type){
			case '':
				switch(get_option( 'woocommerce_category_archive_display' ) ){
					case 'subcategories' :
						$is_sidebar = 'false';
					break;
				}
			break;
			case 'subcategories' :
				$is_sidebar = 'false';
			break;
		}
		
			
	}
	
	if($is_sidebar == 'false')
		add_filter('body_class' , function($classes){ $classes[] = 'no-sidebar'; return $classes; });
	
	return $is_sidebar;
}

function woocommerce_content() {

		if ( is_singular( 'product' ) ) {

			while ( have_posts() ) : the_post();

				wc_get_template_part( 'content', 'single-product' );

			endwhile;

		} else if (is_product_category() || is_product_tag()) { ?>

			<?php do_action( 'woocommerce_archive_description' ); ?>

			<?php if ( have_posts() ) : ?>
				
                <?php woocommerce_product_subcategories(array('before' => '<br /><div class="woocommerce-categories"><ul class="products clearfix">' , 'after' => '</ul></div>')); ?>
                
				<?php do_action('woocommerce_before_shop_loop'); ?>

				<?php woocommerce_product_loop_start(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php do_action('woocommerce_after_shop_loop'); ?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif;

		} else { ?>

			<?php do_action( 'woocommerce_archive_description' ); ?>

			<?php if ( have_posts() ) : ?>
                
				<?php do_action('woocommerce_before_shop_loop'); ?>

				<?php woocommerce_product_loop_start(); ?>
                
					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php do_action('woocommerce_after_shop_loop'); ?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif;

		}
        
        
	}
