<?php
/**
 * Checkout login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

if ( is_user_logged_in() || 'no' == get_option( 'woocommerce_enable_checkout_login_reminder' ) ) return; 
if(get_option( 'woocommerce_enable_guest_checkout' ) == 'yes') return;?>
<section id="checkout_login" class="section" style="display: block;">
  <div class="eight columns">
      <div class="login-section">
        <div class="smalltitle">Existing Customer</div>
        <?php
	woocommerce_login_form(
		array(
			'message'  => __( 'If you have shopped with us before, please enter your details in the boxes below.', 'woocommerce' ),
			'redirect' => get_permalink( wc_get_page_id( 'checkout' ) ),
			'hidden'   => true
		)
	);
?>
        <hr/>
      </div>
    <?php
// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}
?>
    <?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>
    <?php if ( ! is_user_logged_in() && $checkout->enable_signup ) : ?>
    <?php if ( ! $checkout->enable_guest_checkout ) : ?>
      <div class="create-account">
        <div class="smalltitle">New Customer</div>
        <p>I'm a new customer and would like to register.</p>
             <form method="post" class="register">
        <?php if ( get_option( 'woocommerce_registration_generate_username' ) === 'no' ) : ?>
        <p class="form-row form-row-first">
        <input id="username" class="input-text placeholder" type="text" name="username" placeholder="Username or email" value="<?php if ( ! empty( $_POST['username'] ) ) esc_attr_e( $_POST['username'] ); ?>">
        </p>
        <?php endif; ?>
        <p class="form-row form-row-last">
        <input id="password" class="input-text placeholder" type="password" name="password" placeholder="Password" value="<?php if ( ! empty( $_POST['password'] ) ) esc_attr_e( $_POST['password'] ); ?>">
        </p>
        <input id="guestcheckout" class="button" role="button" type="submit" value="Continue"></input> </div>
      </form>
    </div>  
  <?php endif; ?>
    <?php endif; ?>
    <?php if ( $checkout->enable_guest_checkout ) : ?>
     <div class="row">
      <div class="create-account">
        <div class="smalltitle">Guest Checkout</div>
        <p>You can checkout without creating an account. You will have a chance to create an account later.</p>
        <input id="guestcheckout" class="button" role="button" type="submit" value="Continue"></input> 
       </div>
       </div>
    <? endif; ?>

  <div class="four columns">
    <div class="login-section">
      <aside class="coupon-container">
        <div class="smalltitle">Have a coupon?</div>
        <p><?php _e( 'Have a coupon? Feel free to add it here.', 'woocommerce' ); ?></p>

        <form class="checkout_coupon" method="post">
          <div class="coupon">
            <p class="form-row"><input type="text" name="coupon_code" class="input-text" placeholder="<?php _e( 'Enter coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" /></p>
            <input type="submit" class="button" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" />
          </div>
        </form>
      </aside>
    </div>
  </div>
</section>
<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
