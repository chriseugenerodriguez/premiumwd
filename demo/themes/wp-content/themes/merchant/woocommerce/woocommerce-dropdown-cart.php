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

<a class="woocommerce-cart" href="#">Bag <span><?php echo $woocommerce->cart->cart_contents_count; ?></span></a>
<nav class="shopping_cart_dropdown"><a href="#" class="close_side_menu"></a>
  <header><h4>YOUR SHOPPING BAG</h4></header>
  <div class="shopping_cart_dropdown_inner">
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
      <li>  <?php echo $_product->get_image(); ?>
      <div class="list_content">
      <h4><a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>"><?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?> </a></h4>  <?php echo $woocommerce->cart->get_item_data( $cart_item ); ?> <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>       </div>
      <?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">&times;</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );?>
      </li>
	  <?php endforeach; ?>
      <div class="subtotal"> Subtotal <span><?php wc_cart_totals_subtotal_html(); ?></span> </div>
      <div class="buttons"> <a class="button edit" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">View / Edit Cart</a> <a class="button" href="<?php echo $woocommerce->cart->get_checkout_url() ?>">Checkout</a> </div>
      <?php else : ?>
      <figure></figure>
      <p class="message">Your cart is currently empty.</p>
      <p class="return-to-shop"><a class="button" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></p>
      <?php endif; ?>
    </ul>
  </div>
</nav>
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
