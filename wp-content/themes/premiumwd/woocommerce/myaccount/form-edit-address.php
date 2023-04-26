<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $woocommerce, $current_user;

$page_title = ( $load_address == 'billing' ) ? __( 'Billing Address', 'woocommerce' ) : __( 'Shipping Address', 'woocommerce' );

get_currentuserinfo();
?>

<?php if ( ! $load_address ) : ?>

	<?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php else : ?>
<div class="user-account">
<div class="picture"><?php global $user_ID; echo get_avatar($user_ID);  ?>
<ul>
<li class="name"><?php global $current_user; get_currentuserinfo(); echo $current_user->display_name ?></li>
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
<div class="my-account">


    <div id="tabs" class="ui-tabs ">
  <ul class="ui-tabs-nav">
    <li class="ui-tabs-active"><a href="" class="ui-tabs-anchor">My Address</a></li>
    <li><a href="/my-account/settings/change-password/" class="ui-tabs-anchor">Change Password</a></li>
    <li><a href="/my-account/settings/profile-info/" class="ui-tabs-anchor">Edit Profile</a></li>
  </ul>

  <div id="tabs-1" class="ui-tabs-panel">
    <form method="post">
<?php wc_print_notices(); ?>

    <?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

		<?php foreach ( $address as $key => $field ) : ?>

			<?php woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : $field['value'] ); ?>

		<?php endforeach; ?>

    <?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>
    
		<p>
			<input type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save Address', 'woocommerce' ); ?>" />
			<?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
			<input type="hidden" name="action" value="edit_address" />
		</p>

	</form>
  </div>
  <div id="tabs-2" class="ui-tabs-panel">
    <?php //echo do_shortcode('[wp-members page="password"]'); ?>
  </div>
  <div id="tabs-3" class="ui-tabs-panel">
    <?php //echo do_shortcode('[wpuf_editprofile]'); ?>
  </div>
</div>
</div>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<style>
.ui-tabs .ui-tabs-panel{ clear:both; }
</style>

<?php endif; ?>
<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>