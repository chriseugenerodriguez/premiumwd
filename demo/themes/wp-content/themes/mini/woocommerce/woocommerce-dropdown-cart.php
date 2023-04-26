<?php
class Woocommerce_Dropdown_Cart extends WP_Widget {

	public function __construct() {
		parent::__construct(
	 		'woocommerce-dropdown-cart', // Base ID
			'Woocommerce Dropdown Cart', // Name
			array( 'description' => __( 'Woocommerce Dropdown Cart', 'qode' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		global $post;
		extract( $args );
		echo $before_widget;
		global $woocommerce; ?>


    <?php
					$cart_is_empty = sizeof( $woocommerce->cart->get_cart() ) <= 0;
					$list_class = array( 'cart_list', 'product_list_widget' );
				?>
    <ul class="<?php echo implode(' ', $list_class); ?>">
      <?php if ( !$cart_is_empty ) : ?>
      <?php foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) :

								$_product = $cart_item['data'];

								// Only display if allowed
								if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
									continue;
								}

								// Get price
								$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();

								$product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
								?>
      <li>
      <div class="image-section">  <?php echo $_product->get_image(); ?></div>
      <div class="info-section">
      <div class="product-name"><a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>"><?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?> </a></div>  
		<div class="line-details"><?php echo $woocommerce->cart->get_item_data( $cart_item ); ?> 
		<div class="info-item qty">
      	<h4 class="label">Qty</h4>
			<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<div class="data">' . sprintf( '%s', $cart_item['quantity'] ) . '</div>', $cart_item, $cart_item_key ); ?>   	
      </div>
      <div class="info-item subtotal">
			<h4 class="label">Subtotal</h4>
			<div class="data"><?php echo $product_price ?></div>
</div>
      </div>
      </div>
      </li>
	  <?php endforeach; ?>
      <a class="button" href="<?php echo $woocommerce->cart->get_checkout_url() ?>">Checkout Now →</a> 
      <?php else : ?>
      <figure></figure>
      <p class="message">Your cart is currently empty.</p>
      <p class="return-to-shop"><a class="button" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></p>
      <?php endif; ?>
    </ul>
<?php
		echo $after_widget;
	}

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();

		return $instance;
	}

} 
add_action( 'widgets_init', create_function( '', 'register_widget( "Woocommerce_Dropdown_Cart" );' ) );
?>
<?php 
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
<span class="header_cart_span"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
<?php
		$fragments['span.header_cart_span'] = ob_get_clean();
		return $fragments;	
}
?>
