<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

<div class="product-tabs">
  <div class="product_details_accordion">
    <?php foreach ( $tabs as $key => $tab ) : ?>
    <h3 class="tab-title <?php echo $key ?>"><span class="title"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></span></h3>
     <div class="accordion_content">
          <?php call_user_func( $tab['callback'], $key, $tab ) ?>
        </div>
    <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>
