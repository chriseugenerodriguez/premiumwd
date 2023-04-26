<?php
/**
 * Show error messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>

<div class="container"><aside class="woocommerce-message woocommerce-error columns twelve"><ul><?php foreach ( $messages as $message ) : ?><li><?php echo wp_kses_post( $message ); ?></li><?php endforeach; ?></ul><a class="close" href="#">×</a> </aside></div>