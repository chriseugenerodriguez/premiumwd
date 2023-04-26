<?php
/**
 * Change password form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;
?>


<div class="user-account">
<div class="picture"><?php global $user_ID; echo get_avatar($user_ID);  ?>
<ul>
<li class="name"><?php global $current_user; get_currentuserinfo(); echo $current_user->user_firstname ?></li>
<li class="downloads"><em class="fa fa-shopping-cart"></em> &nbsp;<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo $woocommerce->cart->get_cart_total(); ?></a></li>
</ul>
</div>
<ul class="account">
<li><a href="/my-account/downloads/"><em class="fa fa-cloud-download"></em> Downloads</a></li>
<li><a href="/my-account/orders/"><em class="fa fa-list-alt"></em> Orders</a></li>
<li><a href="/my-account/rewards/"><em class="fa fa-heart"></em> Rewards</a></li>
<li class="active"><a href="/my-account/edit-address/billing/"><em class="fa fa-cog"></em> Settings</a></li>
<li><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout"><em class="fa fa-sign-out"></em> Logout</a></li>
</ul>
</div>

<form action="<?php echo esc_url( get_permalink( wc_get_page_id( 'change_password' ) ) ); ?>" method="post">
<?php wc_print_notices(); ?>
	<p class="form-row form-row-first">
		<label for="password_1"><?php _e( 'New password', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="password" class="input-text" name="password_1" id="password_1" />
	</p>
	<p class="form-row form-row-last">
		<label for="password_2"><?php _e( 'Re-enter new password', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="password" class="input-text" name="password_2" id="password_2" />
	</p>
	<div class="clear"></div>

	<p><input type="submit" class="button" name="change_password" value="<?php _e( 'Save', 'woocommerce' ); ?>" /></p>

	<?php wp_nonce_field( 'woocommerce-change_password' ); ?>
	<input type="hidden" name="action" value="change_password" />

</form>