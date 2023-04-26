<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>

<?php foreach ( $messages as $message ) : ?><div class="container"><aside class="woocommerce-message woocommerce-info columns twelve"><i class="fa fa-info"></i> <?php echo wp_kses_post( $message ); ?><a class="close" href="#">×</a></aside></div><?php endforeach; ?>