<?php
/**
 * My Orders
 *
 * Shows recent orders on the account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;
function myfunc($v){return $v->licence_key;}
function get_pwd_keys($order_id){
    global $wpdb;
    $keys = $wpdb->get_results(
        $wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'woocommerce_software_licences WHERE order_id = %d', $order_id)
    );
	
	$return = empty($keys) ? 'NA' : $keys[0]->licence_key;//implode("<br/>\n", array_map("myfunc", $keys));;
    return $return ;
}

$downloads = get_posts( array(
    'numberposts' => isset($order_count)?$order_count:10,
    'meta_key'    => '_customer_user',
    'meta_value'  => get_current_user_id(),
    'post_type'   => 'shop_order',
    'post_status' => 'publish'
) );

?>
<div class="woocommerce">
<div class="my-account">
<?php if ( $downloads = $woocommerce->customer->get_downloadable_products() ) : ?>
<h2><?php echo apply_filters( 'woocommerce_my_account_my_downloads_title', __( 'Available Downloads', 'woocommerce' ) ); ?></h2>
<table class="shop_table my_account_orders">
	<thead>
		<tr>
			<th  class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
            <th  class="product-name" style="width:150px;"><?php _e( 'Rate', 'woocommerce' ); ?></th>
           	<th style="width:300px;" class="product-license"><?php _e( 'License Key', 'woocommerce' ); ?></th>
			<th class="product-total"><?php _e( '', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tfoot>
	<?php foreach ( $downloads as $download ) : ?>
			<tr class="order">
				<th  style="font-weight:normal !important;"  scope="row"><?php echo $download['download_name'] ?> </th>
                <td>
				<div class="woocommerce">
                <?php 
				query_posts('p='.$download['product_id'].'&post_type=product');
				
				while(have_posts()) { the_post();
					$product = new WC_Product(get_the_ID());
					echo $product->get_rating_html();
					echo comments_template();
				} wp_reset_query();
				?>
				</div>
                </td>
				<td><?php echo get_pwd_keys($download['order_id']);?></td>
				<td class="order-actions"><?php
					do_action( 'woocommerce_available_download_start', $download );

					if ( is_numeric( $download['downloads_remaining'] ) )
						echo apply_filters( 'woocommerce_available_download_count', '<span class="count">' . sprintf( _n( '%s download remaining', '%s downloads remaining', $download['downloads_remaining'], 'woocommerce' ), $download['downloads_remaining'] ) . '</span> ', $download ); echo apply_filters( 'woocommerce_available_download_link', '<a class="button" href="' . esc_url( $download['download_url'] ) . '">Download</a>', $download );

					do_action( 'woocommerce_available_download_end', $download );
				?></td>
			</tr>
			<?php
		endforeach;
	?>
	</tfoot>
    </table>
<script>
jQuery(document).ready(function(){
jQuery(".comment-respond").addClass("woocommerce");
});

jQuery('#comments').html('').append(jQuery('<a class="inline button show_review_form" href="#review_form">Submit Rating</a>'));
jQuery('.form-submit').html('').append(jQuery('<input id="submit" class="button" type="submit" value="Submit Review" name="submit"><input id="comment_post_ID" type="hidden" value="4376" name="comment_post_ID"><input id="comment_parent" type="hidden" value="0" name="comment_parent">'));

</script>
<style>
.commentlist{ display:none; }
.add_review{ display:none; }
.noreviews{color:#FFF; }
</style>
<?php
else : ?>
<p>You have no downloads <a href="<?php bloginfo('url');?>/themes/">Buy Themes</a></p>
<?php endif; ?>
</div>
</div>
