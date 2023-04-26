<?php
/**
 * Cart totals
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div class="cart_totals <?php if ( WC()->customer->has_calculated_shipping() ) echo 'calculated_shipping'; ?>">
<table class="shopping_bag cart" cellspacing="0">
  <?php do_action( 'woocommerce_before_cart_totals' ); ?>
  <?php foreach ( WC()->cart->get_coupons( 'cart' ) as $code => $coupon ) : ?>
  <tr class="cart-discount coupon-<?php echo esc_attr( $code ); ?>">
    <td><?php wc_cart_totals_coupon_label( $coupon ); ?></td>
    <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
  </tr>
  <?php endforeach; ?>
  <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
  <?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
  <?php wc_cart_totals_shipping_html(); ?>
  <?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
  <?php endif; ?>
  <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
  <tr class="fee">
    <td><?php echo esc_html( $fee->name ); ?></td>
    <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
  </tr>
  <?php endforeach; ?>
  <?php if ( WC()->cart->tax_display_cart == 'excl' ) : ?>
  <?php if ( get_option( 'woocommerce_tax_total_display' ) == 'itemized' ) : ?>
  <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
  <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
    <td><?php echo esc_html( $tax->label ); ?></td>
    <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
  </tr>
  <?php endforeach; ?>
  <?php else : ?>
  <tr class="tax-total">
    <td><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></td>
    <td><?php echo wc_cart_totals_taxes_total_html(); ?></td>
  </tr>
  <?php endif; ?>
  <?php endif; ?>
  <?php foreach ( WC()->cart->get_coupons( 'order' ) as $code => $coupon ) : ?>
  <tr class="order-discount coupon-<?php echo esc_attr( $code ); ?>">
    <td><?php wc_cart_totals_coupon_label( $coupon ); ?></td>
    <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
  </tr>
  <?php endforeach; ?>
  <?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
  <tr class="order-total">
    <td colspan=3><?php if ( woo_cart_has_virtual_product() == false && get_option( 'woocommerce_enable_shipping_calc' ) === 'yes'): ?><a href="#" class="shipping-calculator-button"><?php _e( 'Calculate Shipping', 'woocommerce' ); ?> <i class="fa fa-angle-down"></i></a><?php endif; ?><?php _e( 'Order Total', 'woocommerce' ); ?></td>
    <td colspan=3><?php wc_cart_totals_order_total_html(); ?></td>
  </tr>
  <?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
  
  <?php do_action( 'woocommerce_after_cart_totals' ); ?>
  </table>
</div>