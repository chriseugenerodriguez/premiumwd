<?php

add_action( 'wp_enqueue_scripts', 'miscellaneous', 100 );

function miscellaneous() {
    if ( class_exists( 'woocommerce' ) && !is_admin()) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'select2');
        wp_deregister_script('select2');

    } 
} 

function unique_handle_woo_scripts() { 
wp_dequeue_script( 'wc-add-to-cart' ); 
if ( function_exists( 'is_woocommerce' ) && ! ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ) { 
wp_dequeue_script( 'wc-add-to-cart' ); 
wp_dequeue_script( 'jquery-blockui' );
 //wp_dequeue_script( 'jquery-placeholder' );
// wp_dequeue_script( 'woocommerce' );
 wp_dequeue_script( 'wc-cart-fragments' ); } } 
add_action( 'wp_enqueue_scripts', 'unique_handle_woo_scripts', 101 );


//Disable the default WooCommerce stylesheet.
if ( version_compare( WOOCOMMERCE_VERSION, "2.1" ) >= 0 ) {
    add_filter( 'woocommerce_enqueue_styles', '__return_false' );
} else {
    define( 'WOOCOMMERCE_USE_CSS', false );
}

// Limit the number of cross sells displayed to a maximum of 4
function yr_woocommerce_cross_sells_total( $limit ) {
	return 4;
}
add_filter( 'woocommerce_cross_sells_total', 'yr_woocommerce_cross_sells_total', 10, 1 );

// Adds theme support for woocommerce 
add_theme_support('woocommerce');

// rich snippet fix
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product', 'woocommerce_upsell_display', 15 );

/* cart */
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_after_cart' , 'woocommerce_cross_sell_display');

// Remove Breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woocommerce_before_single_product_summary', 'woocommerce_breadcrumb' , 0);

// Removes tabs from their original loaction
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 50 ); 

// Related Products Count
	function woo_related_products_limit() {
	  global $product;
		
		$args = array(
			'post_type'             => 'product',
			'no_found_rows'         => 1,
			'posts_per_page'        => 5
		);
		return $args;
	}
	add_filter( 'woocommerce_related_products_args', 'woo_related_products_limit' );

// Add Social Share
function social_share() {
	if(get_option('premiumwd_shop_single_social') == 'true'):
	include (TEMPLATEPATH . "/includes/inc/share.php");
	endif;
};
add_action( 'woocommerce_after_single_product_summary', 'social_share', 10 ); 

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

// Display the second thumbnails
function woocommerce_template_loop_second_product_thumbnail() {
	global $product, $woocommerce;
		  $attachment_ids = $product->get_gallery_attachment_ids();
		  if ( $attachment_ids ) {
			  $secondary_image_id = $attachment_ids['0'];
			  echo wp_get_attachment_image( $secondary_image_id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop-catalog' ) );
		  }
	  }
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_second_product_thumbnail', 11 );

// Product Pagination Single
function product_navigation() {
	global $html;
	if(get_option('premiumwd_shop_single_navigation') == 'true'):
	$next = get_next_product_link();
	$prev = get_previous_product_link();
	$html .= '';
	$html .='<div class="page-nav">'; 
	$html .=  '<a href="'. get_permalink($prev) .'" >PREV</a>';
	$html .=' / ';
    $html .= '<a href="'. get_permalink($next) .'" >NEXT</a>';
    $html .='</div>';	
	echo $html;
	endif;
}
add_action('woocommerce_before_single_product_summary', 'product_navigation', 0);

	function get_next_product_link(){
		$posts = get_posts(array(
			'posts_per_page' => -1,
			'post_type' => 'product',
			'suppress_filters' => false
		));

		$product_ids = array();
		$i = 0;
		global $post;  
		$index = 0;
		foreach($posts as $p){
			$product_ids[$i] = $p->ID;
			if($p->ID == $post->ID) $index = $i;  
			$i++;
		}
		if(isset($product_ids[$index+1])) return $product_ids[$index+1];
		else return $product_ids[0];
	}
	
	function get_previous_product_link(){
		$posts = get_posts(array(
			'posts_per_page' => -1,
			'post_type' => 'product',
			'suppress_filters' => false
		));

		$product_ids = array();
		$i = 0;
		global $post;  
		foreach($posts as $p){
			$product_ids[$i] = $p->ID;
			if($p->ID == $post->ID) $index = $i;
			$i++;
		}
		
		
		if(isset($product_ids[$index-1])) return $product_ids[$index-1];
		else return $product_ids[0];
	}
	
function enollo_move_wc_wishlist_button($product) {
	if ( shortcode_exists('yith_wcwl_add_to_wishlist') ) {
		echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
	}
}
//add_action( 'woocommerce_single_product_summary', 'enollo_move_wc_wishlist_button', 30 );

// Add product category to product single
function woocommerce_image_cat() {
	if ( is_product_category() ){
		global $wp_query;
		$cat = $wp_query->get_queried_object();
		$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
		$image = wp_get_attachment_url( $thumbnail_id, 'full' );
		if ( $image ) {
		echo apply_filters('woocommerce_image_cat_html' , '<div class="category-image"><img src="' . $image . '" alt="" /></div>');
		}
	}
};
function view_more_cat() {
	global $product; global $post;
	$terms = get_the_terms( $post->ID, 'product_cat' );
	foreach ($terms as $term) {
		$product_cat_id = $term->term_id;
		break;
	}
	echo $product->get_categories( ', ', '<div class="six columns posted_in">' . _n( '<span class="view_more ">View More:</span>', '<span class="view_more ">View More:</span>', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</div>' );
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

			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

				<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

			<?php endif; ?>

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

			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

				<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

			<?php endif; ?>

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
