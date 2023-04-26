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
<h2><?php echo apply_filters( 'woocommerce_my_account_my_downloads_title', __( 'Licences', 'woocommerce' ) ); ?></h2>
<table class="shop_table my_account_orders">
	<thead>
		<tr>
        	<th  class="product-name"><?php _e( 'Product ID', 'woocommerce' ); ?></th>
			<th  class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
            <th style="width:300px;" class="product-license"><?php _e( 'License Key', 'woocommerce' ); ?></th>
            <th  class="product-name"><?php _e( 'Activation Limit', 'woocommerce' ); ?></th>
            <th class="product-toggle"><?php _e( 'Status', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tfoot>
	<?php foreach ( $downloads as $download ) : 
	global $wpdb;
	$order_id = $download['order_id'];
    $keys = $wpdb->get_results($wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'woocommerce_software_licences WHERE order_id = %d', $order_id)); 
		foreach($keys as $key) : 	
		$title = $wpdb->get_var("SELECT post_id FROM ".$wpdb->prefix ."postmeta WHERE meta_key = '_software_product_id' AND meta_value = '".$key->software_product_id."' LIMIT 1");
		$activation_id = $wpdb->get_var("SELECT activation_id FROM {$wpdb->prefix}woocommerce_software_activations as activations LEFT JOIN {$wpdb->prefix}woocommerce_software_licences as licences ON activations.key_id = licences.key_id WHERE order_id = {$order_id} LIMIT 1");
		$activation_status = $wpdb->get_var("SELECT activation_active FROM {$wpdb->prefix}woocommerce_software_activations as activations LEFT JOIN {$wpdb->prefix}woocommerce_software_licences as licences ON activations.key_id = licences.key_id WHERE order_id = {$order_id} LIMIT 1");
		$external_domain  = $wpdb->get_var("SELECT using_domain FROM {$wpdb->prefix}woocommerce_software_activations as activations LEFT JOIN {$wpdb->prefix}woocommerce_software_licences as licences ON activations.key_id = licences.key_id WHERE order_id = {$order_id} LIMIT 1");

	?>
			<tr class="order">
	            <th  style="font-weight:normal !important;"  scope="row"><?php echo $title ?> </th>
				<th  style="font-weight:normal !important;"  scope="row"><?php echo $download['download_name'] ?> </th>
				<td><?php echo $key->licence_key; ?></td>
                <td><?php echo $key->activations_limit; ?></td>
                <td>
					<input type="hidden" value="<?php echo $external_domain; ?>" name="external_domain" class="external_domain" />
                    <span class="switch" data-id="<?=$activation_id;?>">
						<input type="hidden" name="switch1" value="<?php echo $activation_status;?>" />
					<label for="switch1"><input type="checkbox" id="switch1" name="switch1" value="<?php echo $activation_status;?>" <?=($activation_status == 1)?'checked=checked':'';?> /><span class="toggle_activation">Off</span><span class="switch__divider"> / </span><span class="toggle_activation">On</span></label>
				</span>
				<?php /*if(!empty($activation_id)){ ?><input type="button" name="toggle_activation" class="toggle_activation" value="Toggle Activation" data-id="<?=$activation_id;?>" /><?php }*/ ?></td> 
			</tr>
			<?php
			endforeach;	
		endforeach;
	?>
	</tfoot>
    </table>
<?php else : ?>
<p>You have no downloads <a href="<?php bloginfo('url');?>/themes/">Buy Themes</a></p>
<?php endif; ?>
</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".toggle_activation, .switch__divider").click(function(){
				var el = jQuery(this).parent().parent();
		if(jQuery(el).find("input[type=checkbox]").val() == 0){
		 return false;	
		}
		if(confirm('Are you really want to Deactivate this?')){
		var activation =jQuery(el).attr("data-id");

		var external_domain = jQuery(el).parent().find(".external_domain").val();
		external_domain = external_domain + '/wp-admin/admin-ajax.php';
		var data = {
						action: 		'woocommerce_toggle_activation',
						activation_id: 	activation,
						security: 		'<?php echo wp_create_nonce("toggle-activation"); ?>',
						url: external_domain
					};
					
					jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function( result ) {
						if(result == "Deactivated"){
							jQuery(el).find("input[type=checkbox]").removeAttr("checked");
							jQuery(el).find("input[type=checkbox]").val(0);
						}
					});
		
		return true;			
		
		}
		return false;
	});
});
</script>