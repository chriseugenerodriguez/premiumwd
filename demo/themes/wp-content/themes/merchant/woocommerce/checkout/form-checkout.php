<section class="checkout">
  <div id="shippingsteps">
    <ul class="container">
      <?php if ( is_user_logged_in() ) { ?>
      <li><a>Sign In<i class="fa fa-angle-right"></i></a> </li>
      <li class="active"><a data-target="billing_shipping" href="#">Billing Details<i class="fa fa-angle-right"></i></a> </li>
      <?php } else if(get_option( 'woocommerce_enable_guest_checkout' ) == 'yes') { ?>
      <li><a>Sign In<i class="fa fa-angle-right"></i></a> </li>
      <li><a data-target="billing_shipping" href="#">Billing Details<i class="fa fa-angle-right"></i></a> </li>
      <?php } else { ?>
      <li class="active"><a data-target="checkout_login" href="#">Sign In<i class="fa fa-angle-right"></i></a> </li>
      <li><a data-target="billing_shipping" href="#">Billing Details<i class="fa fa-angle-right"></i></a> </li>
      <?php } ?>
      <li><a data-target="order_review" href="#">Order Summary<i class="fa fa-angle-right"></i></a> </li>
      <li><a>Confirmation<i class="fa fa-angle-right"></i></a> </li>
    </ul>
  </div>
  <div class="container">
  <p class="notice"><?php echo get_option('premiumwd_shop_cart_message'); ?></p>
  <?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

?>
  <?php 
// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>
  <form name="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">
    <input type="hidden" class="input-hidden" name="account_username" id="username-hidden"  value="" />
    <input type="hidden" class="input-hidden" name="account_password" id="password-hidden"  value=""  />
    <?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>
    <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
    <?php if ( is_user_logged_in() ) { ?>
    <section id="billing_shipping" class="section billing">
    <?php } else if(get_option( 'woocommerce_enable_guest_checkout' ) == 'yes') { ?>
    <section id="billing_shipping" class="section billing">
    <?php } else { ?>
    <section id="billing_shipping" class="section billing" style="display: none;">
      <?php } ?>
      <div class="six columns">
        <?php do_action( 'woocommerce_checkout_billing' ); ?>
      </div>
      <div class="six columns">
        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
        <input class="button continue_shipping" type="button" value="Continue" name="button_address_continue">
      </div>
    </section>
    <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
    <section id="order_review" class="section" style="position: relative; display: none;">
      <h3 id="order_review_heading">
        <?php _e( 'Your order', 'woocommerce' ); ?>
      </h3>
      <?php endif; ?>
      <?php do_action( 'woocommerce_checkout_order_review' ); ?>
    </section>
    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
  </form>
  </div>
</section>
