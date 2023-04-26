<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

?>

<div class="my_woocommerce_page page-padding text-center cart-empty">
<section>
	<figure></figure>
    <p class="message">Your cart is currently empty.</p>

	<?php do_action('woocommerce_cart_is_empty'); ?>

	<p class="return-to-shop"><a class="btn" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></p>	
    </section>
</div>