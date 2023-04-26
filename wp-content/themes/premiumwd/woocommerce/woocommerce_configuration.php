<?php


function signincheckout() {
     if ( is_user_logged_in() ) {
     } else {
       echo '<p>Already have an account with us? <a title="Login" href="https://www.premiumwd.com/login?redirect_to=https%3A%2F%2Fwww.premiumwd.com%2Fcheckout%2F">Sign In</a>
</p>';	
     }
}
add_action('woocommerce_after_checkout_billing_form', 'signincheckout', 0);

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

//Elance gaurav code
function get_next_product_link($cats_array)
	{
		$query_args = array(
			'posts_per_page' => -1,
			'post_status' => 'publish',     
			'post_type' => 'product', 
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'id',
					'terms' => $cats_array
				))
			);
		$r = new WP_Query($query_args);
		$current_product_id = get_the_ID();
    
		$prev_product_id = -1;
    	        $next_product_id = -1;

		$found_product = false;
		$i = 0;
	
		$current_product_index = $i;
		$current_product_id = get_the_ID();
		
    	if ($r->have_posts()) {
        	while ($r->have_posts()) {
            	$r->the_post();
            	$current_id = get_the_ID();

				if ($current_id == $current_product_id) {
					$found_product = true;
					$current_product_index = $i;
				}

            	$is_first = ($current_product_index == $first_product_index);
                if (!$found_product && $current_id != $current_product_id) {
                    $next_product_id = get_the_ID();

                }          

            	$i++;
			}
			if ($next_product_id != -1) { wp_reset_query();
				return $next_product_id;}
			wp_reset_query();	
		}
    }
function get_previous_product_link($cats_array)
	{
		$query_args = array(
			'posts_per_page' => -1,
			'post_status' => 'publish', 
			'post_type' => 'product', 
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'id',
					'terms' => $cats_array
				))
			);
		$r = new WP_Query($query_args);
		$current_product_id = get_the_ID();
    
		$prev_product_id = -1;
    	        $next_product_id = -1;

		$found_product = false;
		$i = 0;
	
		$current_product_index = $i;
		$current_product_id = get_the_ID();
		
		if ($r->have_posts()) {
			while ($r->have_posts()) {
				$r->the_post();
//print_r($r);
				$current_id = get_the_ID();
	
				if ($current_id == $current_product_id) {
					$found_product = true;
					$current_product_index = $i;
				}
	
				$is_first = ($current_product_index == $first_product_index);
				
				
				/*if ($i == 0) { // if product is last then 'next' = first product
                $next_product_id = get_the_ID();
            }*/

			         if ($found_product && $i == $current_product_index + 1) {
                $prev_product_id = get_the_ID();

            }
	
				$i++;
			}		
			
        		if ($prev_product_id  != -1) {wp_reset_query();return $prev_product_id;
				}
				wp_reset_query();
				
    	}
	}
	
function on_save_post($id) {
	$permalink = get_permalink($id);
	if (strpos($permalink,'/product/') == false) {
		return;
	}
	delete_post_meta( $id, 'custom_permalink' );
	$postn = get_post($id);
	$slugnew = get_permalink($id);
	$url =  site_url();
	$x = strlen($url);
	$ogslug = substr($slugnew, $x + 8); 
	//$ogslug = substr($slugnew, strpos($slugnew, "com/") + 30); 
	//$original_link = get_slugs($id);
	$permalink_structure = get_option('permalink_structure');
	$terms = get_the_terms( $id, 'product_cat' );
	$terms2 = get_the_terms( $id, 'product_cat' );
	if (! (empty($terms) and empty($terms2))) {
		foreach ($terms as $term) {
			$pcategory = $term->slug;
			break;
		}
		foreach ($terms2 as $term1) {
			$scategory = $term1->slug;
		}
	}
	if ($scategory !== $pcategory) {
		$add_sub = str_replace('projects/premiumwd/product/', '', $ogslug);
		$new_permalink = str_replace($pcategory, 'tyinput', $add_sub,$count1);
		$new_permalink = str_replace('tyinput', $pcategory.'/'.$scategory, $new_permalink,$count);
	} else {

	$new_permalink = str_replace('projects/premiumwd/product/', '', $ogslug);
	}
	update_post_meta( $id, 'custom_permalink', str_replace('%2F', '/', urlencode(ltrim(stripcslashes($new_permalink),"/"))) );
}
add_action('save_post','on_save_post');

//Elance gaurav code


function premium_beforethemes_layout() {
		$html = '';
		$html .= '<div class="browser"><div class="browser-content">';
		
		echo $html;
	}
add_action( 'woocommerce_before_shop_loop_item', 'premium_beforethemes_layout' );

function premium_afterthemes_layout() {
			$html = '';	
		$html .= '<div class="designs-template-info"><div class="button-centered"><a href="'. get_post_permalink() .'"><div class="button button-small">View '. get_the_title() .'</div></a></div></div></div></div>';
		echo $html;
	}
add_action( 'woocommerce_after_shop_loop_item', 'premium_afterthemes_layout' );


add_action( 'wp_enqueue_scripts', 'miscellaneous', 100 );

function miscellaneous() {
    if ( class_exists( 'woocommerce' ) && !is_admin()) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'select2');
        wp_deregister_script('select2');

    } 
} 
	
	// Remove each style one by one
	function jk_dequeue_styles( $enqueue_styles ) 
	{
		unset( $enqueue_styles['woocommerce-general'] ); // Remove the gloss
		unset( $enqueue_styles['woocommerce-layout'] ); // Remove the layout
		unset( $enqueue_styles['woocommerce-smallscreen'] ); // Remove the smallscreen optimisation
		return $enqueue_styles;
		}
	add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
		
	// Or just remove them all in one line
	function my_deregister_javascript() 
	{
		wp_deregister_script( 'prettyPhoto' );
		wp_deregister_script( 'prettyPhoto-init' );
		wp_deregister_style( 'woocommerce_prettyPhoto_css' );
		}
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );	
	add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
	
	function unique_handle_woo_scripts() 
	{
		wp_dequeue_script( 'wc-add-to-cart' );
		
		if(function_exists('is_woocommerce') && ! ( is_woocommerce() || is_cart() || is_checkout() || is_account_page())) 
		{
			//wp_dequeue_script( 'wc-add-to-cart' ); 
			wp_dequeue_script( 'jquery-blockui' ); 
			wp_dequeue_script( 'jquery-placeholder' ); 
			//wp_dequeue_script( 'woocommerce' ); 
			wp_dequeue_script( 'wc-cart-fragments' );
			} 
		} 
	add_action( 'wp_enqueue_scripts', 'unique_handle_woo_scripts', 101 );
	
	// TOTAL PRODUCTS
	
	function total_items() 
	{
		$total_products = count( get_posts( array('post_type' => 'product', 'post_status' => 'publish', 'fields' => 'ids', 'posts_per_page' => '-1') ) );
		echo $total_products();
		}
	
	// TOTAL ORDER COUNT
	function display_woocommerce_order_count( $atts, $content = null ) 
	{
		$args 	=	shortcode_atts( array('status' => 'completed'), $atts );
		
		$status_list	=	$args['status'];
		$statuses 	=	array_map( 'trim', explode( ',', $status_list ) );	
		$order_count = 0;
		
		foreach ($statuses as $status) 
		{
			$status = str_replace( $status, 'wc-' . $status, $status );
			$total_orders = wp_count_posts( 'shop_order' )->$status; 
			$order_count += $total_orders;
			}
		ob_start();
		echo $order_count;
		return ob_get_clean();
		}
		
	add_shortcode( 'wc_order_count', 'display_woocommerce_order_count' );									
	 
	// Add order count
	function premium_orders() 
	{
		global $product;
		$units_sold	=	get_post_meta( $product->id, 'total_sales', true );
		echo '<li> <span class="pull-right">' . sprintf( __( '%s', 'woocommerce' ), $units_sold ) . '</span><span class="post-meta-key">Sales:</span></li>';
		}

	
	// Redefine woocommerce_output_upsell_products()
	function woocommerce_upsell_display($posts_per_page = 3, $columns = 3, $orderby = 'rand') 
	{
		woocommerce_get_template('single-product/up-sells.php', array(
			'posts_per_page' => $posts_per_page,
			'orderby' => $orderby,
			'columns' => $columns
			));
		}
	
	// Display 12 products per page.
	add_filter('loop_shop_per_page', create_function('$cols', 'return 12;'), 20);
	/**
	 * Overrides placeholder values for checkout fields
	 * @param array all checkout fields
	 * @return array checkout fields with overriden values
	 */
	// add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
		/**
		* Remove WooCommerce Generator tag, styles, and scripts from the homepage.
		* Tested and works with WooCommerce 2.0+
		*
		* @author Greg Rickaby
		* @since 2.0.0
		*/
	function child_manage_woocommerce_styles() 
	{
		remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ));
		if ( is_woocommerce() && is_home() && is_front_page() ) 
		{
			wp_dequeue_script( 'wc_price_slider' );
			//wp_dequeue_script( 'wc-single-product' );
			//wp_dequeue_script( 'wc-add-to-cart' );
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'wc-checkout' );
			//wp_dequeue_script( 'wc-add-to-cart-variation' );
			//wp_dequeue_script( 'wc-single-product' );
			wp_dequeue_script( 'wc-cart' );
			//wp_dequeue_script( 'wc-chosen' );
			//wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'prettyPhoto' );
			wp_dequeue_script( 'prettyPhoto-init' );
			wp_dequeue_script( 'jquery-blockui' );
			wp_dequeue_script( 'jquery-placeholder' );
			wp_dequeue_script( 'fancybox' );
			wp_dequeue_script( 'jqueryui' );
			}
		}

	// Adds theme support for woocommerce 
	add_theme_support('woocommerce');	
	add_filter( 'get_product_search_form' , 'woo_qode_product_searchform' );	
	/**
	 * woo_custom_product_searchform
	 *
	 * @access      public
	 * @since       1.0
	 * @return      void
	 */
	function woo_qode_product_searchform($form) 
	{
		$form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
			<div>
				<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search Products', 'woocommerce' ) . '" />
				<input type="submit" id="searchsubmit" value="&#xf002;" />
				<input type="hidden" name="post_type" value="product" />
			</div>
		</form>';
	
		return $form;
		}
	
	//add_action( 'init', 'add_product_to_cart' );
	function add_product_to_cart() 
	{
		if (!is_admin())
		{
			global $woocommerce;
			$product_id = 64;
			$found	=	false;
			//check if product already in cart
			if(sizeof( $woocommerce->cart->get_cart() ) > 0)
			{
				foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values)
				{
					$_product = $values['data'];
					if ( $_product->id == $product_id )
					$found = true;
					}
				// if product not found, add it
				if ( ! $found )
				$woocommerce->cart->add_to_cart( $product_id );
				} 
				else
				{
					// if no products in cart, add it
					$woocommerce->cart->add_to_cart( $product_id );
					}
			}
		}
		
	function remove_loop_button()
	{
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_images', 20 );
		remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
		}
		
	add_action('init','remove_loop_button');
	//add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );
	
	function remove_add_to_cart_buttons()
	{
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
		}
		
	remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
	
	// Woocommerce Tags
	function product_tags()
	{
		global $post, $product;
	
		$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
		echo'<li><span class="post-meta-key">Tags:</span><span class="pull-right">';
		echo $product->get_tags( ', ', '' . _n( '', '', $tag_count, 'woocommerce' ) . ' ', '</span></li>' );
		}

//	add_filter('body_class','premium_plugin_classes');
//
//	function premium_plugin_classes($classes = '')
//	{
//		global $post;
//		if($post->ID == 4354)
//		{
//			$classes = array('archive', 'post-type-archive', 'post-type-archive-product', 'logged-in', 'woocommerce', 'woocommerce-page');
//			}
//		return $classes;
//		}
//		
//	/* remove plugins category products from main page */
//	add_action('pre_get_posts' , 'remove_plugin_category_products');
//	
//	function remove_plugin_category_products($query)
//	{
//		if(!$query->is_page(4354) || $query->is_singular('product'))
//		{
//			global $wpdb;
//			//$query->set('post__not_in' , $wpdb->get_col("SELECT tr.object_id FROM ". $wpdb->prefix."term_relationships tr JOIN ".$wpdb->prefix."term_taxonomy tx ON tx.term_taxonomy_id = tr.term_taxonomy_id WHERE tx.term_id = 107"));
//			
//			$query->set('post__not_in' , $wpdb->get_col("SELECT object_id FROM ". $wpdb->prefix."term_relationships WHERE term_taxonomy_id = 114 || term_taxonomy_id = 113"));
//			}		
//		return $query;
//		}
	
		
		
	add_filter('woocommerce_cart_item_price', function($price , $cart_item , $cart_item_key){
	
	$product = new WC_Product($cart_item['product_id']);
	$product_price  = floatval($product->get_price());
	if($product_price <= 0)
	{
		return 'Free!';
		}
	return $price;
	}, 10 , 3);
	
	//add_action('init', 'add_notification_purchase');
	function add_notification_purchase()
	{
		if(is_user_logged_in())
		{
			$url = explode("/", $_SERVER['REQUEST_URI']);
			if(in_array("my-account", $url))
			wc_add_notice('Did you like our product? Leave a Review and get 10$ off coupon, use it towards your next purchase!', 'notice');
			}
		}

	add_action('init' , function(){
		if(isset($_GET['close']) && $_GET['close'] == 1)
		{
			global $user_ID;
			update_user_meta($user_ID, '_closed', "yes");
			}
		});


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    return $fields;
}
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );


function custom_pre_get_posts_query( $q ) {

	if ( ! $q->is_main_query() ) return;
	if ( ! $q->is_post_type_archive() ) return;
	
	if ( ! is_admin() && is_shop() ) {

		$q->set( 'tax_query', array(array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => array( 'club', 'services' ), // Don't display products in the knives category on the shop page
			'operator' => 'NOT IN'
		)));
	
	}

	remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

}	
add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );
function custom_js_code() {
	if(is_checkout())
	{
	    ?>
	    <script type="text/javascript">
	    jQuery( document ).ready(function($) {
		   $('.payment_box.payment_method_s4wc .s4wc-description').appendTo('.payment_methods .payment_method_s4wc');
		   console.log($('.payment_box.payment_method_s4wc .s4wc-description').html());
		   $('.payment_box.payment_method_s4wc').insertAfter('.payment_methods');
		   
		});
		</script>
	    <?php
	}
}
//add_action( 'wp_footer', 'custom_js_code', 100 );
//add_action( 'wp_footer', 'woocommerce_checkout_update_order_review', 100 );
 