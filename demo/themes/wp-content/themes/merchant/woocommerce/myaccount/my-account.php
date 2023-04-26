<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_my_account' ); ?>
<?php if(get_option('premiumwd_allow_my_account_banner') == 'true'): ?><a href="<?php echo get_option('premiumwd_myaccount_banner_link'); ?>" class="myaccount_ad twelve columns"> <img src="<?php echo get_option('premiumwd_myaccount_banner'); ?>" /> </a><?php endif; ?>
<ul class="account-items">
  <li class="list-items orders"><a href="#"><i class="fa fa-inbox"></i> My Orders</a></li>
  <?php if ( $downloads = WC()->customer->get_downloadable_products() ) : ?><li class="list-items"><a href="my-downloads"><i class="fa fa-cloud-download"></i> My Orders</a></li> <?php endif; ?>
  <?php if(shortcode_exists("yith_wcwl_wishlist")){ ?><li class="list-items"><a href="<?php echo get_option('premiumwd_my_account_wish_list'); ?>"><i class="fa fa-heart"></i> My Wishlist</a></li> <?php } ?>
  <li class="list-items"><a href="<?php echo get_option('woocommerce_myaccount_edit_address_endpoint'); ?>"><i class="fa fa-file-text-o"></i> My Addresses</a></li>
  <li class="list-items"><a href="<?php echo get_option('woocommerce_myaccount_edit_account_endpoint'); ?>"><i class="fa fa-pencil"></i> My Account</a></li>
  <li class="list-items"><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout"><i class="fa fa-sign-out"></i> Logout</a></li>
</ul>
<?php do_action( 'woocommerce_after_my_account' ); ?>
<div class="view-orders">
<div id="backtoaccount"><i class="fa fa-angle-left"></i> Back to Account</div>
<?php  echo wc_get_template( 'myaccount/my-orders.php');   ?>
</div> 