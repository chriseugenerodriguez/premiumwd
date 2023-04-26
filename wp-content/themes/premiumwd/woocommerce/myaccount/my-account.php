<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
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

//global $woocommerce;

wc_print_notices(); //$woocommerce->show_messages(); 
/**
 * My Account navigation.
 * @since 2.6.0
 */
do_action( 'woocommerce_account_navigation' );?>

<div class="user-account">
<div class="picture"><?php global $user_ID; echo get_avatar($user_ID);  ?>
<ul>
<li class="name"><?php global $user_ID; echo $current_user->display_name ?></li>
<li class="downloads"><em class="fa fa-shopping-cart"></em> &nbsp;<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo WC()->cart->get_cart_total(); ?></a></li>
</ul>
</div>
<ul class="account">
<li class="active"><a href="/my-account/downloads/"><em class="fa fa-cloud-download"></em> Downloads</a></li>
<li><a href="/my-account/orders/"><em class="fa fa-list-alt"></em> Orders</a></li>
<li><a href="/my-account/rewards/"><em class="fa fa-heart"></em> Rewards</a></li>
<li><a href="/my-account/edit-address/billing/"><em class="fa fa-cog"></em> Settings</a></li>
<li><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout"><em class="fa fa-sign-out"></em> Logout</a></li>
</ul>
</div>


<?php //do_action( 'woocommerce_before_my_account' ); ?>
	
<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>
 <?php
	//wc_get_template( 'myaccount/my-address.php' );  
 ?>
<?php do_action( 'woocommerce_after_my_account' ); ?>