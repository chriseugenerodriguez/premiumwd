<?php
/**
 * Cart Page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<div class="my_woocommerce_page container">
  <form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post" class="cart">
    <?php do_action( 'woocommerce_before_cart_table' ); ?>
    <div class="container shopping_tagline">
      <div class="two columns">
        <?php woocommerce_breadcrumb(); ?>
      </div>
      <div class="ten columns tagline"><?php echo get_option('premiumwd_shop_cart_message'); ?></div>
    </div>
    <div class="twelve columns">
    	<?php if ( WC()->cart->get_cart_tax() ) : ?>
  <p class="shipping_note">
    <?php
			$estimated_text = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
				? sprintf( ' ' . __( ' (taxes estimated for %s)', 'woocommerce' ), WC()->countries->estimated_for_prefix() . __( WC()->countries->countries[ WC()->countries->get_base_country() ], 'woocommerce' ) )
				: '';
			printf( __( 'Note: Shipping and taxes are estimated%s and will be updated during checkout based on your billing and shipping information.', 'woocommerce' ), $estimated_text );
		?>
    </p><br />
  <?php endif; ?>
      <table class="shopping_bag cart" cellspacing="0">
        <thead>
          <tr>
            <th class="product-thumbnail"><?php _e( 'Item', 'woocommerce' ); ?></th>
            <th class="product-name"><?php _e( 'Description', 'woocommerce' ); ?></th>
            <th class="product-price"><?php _e( 'Price', 'woocommerce' ); ?></th>
            <th class="product-quantity"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
            <th class="product-subtotal"><?php _e( 'Total', 'woocommerce' ); ?></th>
            <th class="product-remove">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php do_action( 'woocommerce_before_cart_contents' ); ?>
          <?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-thumbnail"><?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $_product->is_visible() )
								echo $thumbnail;
							else
								printf( '<a href="%s">%s</a>', $_product->get_permalink(), $thumbnail );
						?></td>
            <td class="product-name"><?php
							if ( ! $_product->is_visible() )
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
							else
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', $_product->get_permalink(), $_product->get_title() ), $cart_item, $cart_item_key );

							// Meta data
							echo WC()->cart->get_item_data( $cart_item );

               				// Backorder notification
               				if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
               					echo '<p class="backorder_notification">' . __( 'Available on backorder', 'woocommerce' ) . '</p>';
						?></td>
            <td class="product-price"><?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						?></td>
            <td class="product-quantity"><?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
								), $_product, false );
							}
							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
						?></td>
            <td class="product-subtotal"><?php
							echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
						?></td>
            <td class="product-remove"><?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">&times;</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
						?></td>
          </tr>
          <?php
			}
		}
		do_action( 'woocommerce_cart_contents' );
		?>
          <tr class="cart-subtotal">
             <td colspan="3">
            <?php if ( WC()->cart->coupons_enabled() ) { ?>
              <div class="coupon">
              <label for="coupon_code">
            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php _e( 'Coupon code', 'woocommerce' ); ?>" />
            <input type="submit" class="button" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" />
            <?php do_action('woocommerce_cart_coupon'); ?>
              </div>
            <?php } ?>
            <span>
            <?php _e( 'Subtotal', 'woocommerce' ); ?>
            </span>
              </td>
            <td colspan="3"><?php wc_cart_totals_subtotal_html(); ?></td>
          </tr>
        </tbody>
      </table>
      <?php woocommerce_cart_totals(); ?>
      <?php woocommerce_shipping_calculator(); ?>
    </div>
    <div class="container proceed-checkout">
      <div class="four columns continue-shopping"><a href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><i class="fa fa-angle-left"></i> Continue Shopping</a></div>
      <div class="seven columns checkout-button">
        <input type="submit" class="checkout-button button" name="proceed" value="<?php _e( 'Proceed to Checkout', 'woocommerce' ); ?>" />
        <input type="submit" class="button update_cart" name="update_cart" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>" />
        <?php // do_action( 'woocommerce_proceed_to_checkout' ); ?>
        <?php wp_nonce_field( 'woocommerce-cart' ); ?>
      </div>
    </div>
  </form>
</div>
        <?php do_action( 'woocommerce_after_cart_contents' ); ?>
<?php do_action( 'woocommerce_after_cart_table' ); ?>
<?php do_action( 'woocommerce_cart_collaterals' ); ?>
<?php do_action( 'woocommerce_after_cart' ); ?>
