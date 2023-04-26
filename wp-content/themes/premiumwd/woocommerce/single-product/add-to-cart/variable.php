<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $post;

$attribute_keys = array_keys( $attributes );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->id ); ?>" data-product_variations="<?php echo esc_attr( json_encode( $available_variations ) ) ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0">
			<tbody><?php //print_r($attributes);?>
				<?php foreach ( $attributes as $attribute_name => $options ) : ?>
					<tr>
						<td class="label"><label for="<?php echo sanitize_title( $attribute_name ); ?>"><?php echo wc_attribute_label( $attribute_name ); ?></label></td>
						<td class="value">
							<?php
								$selected = isset( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) ? wc_clean( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) : $product->get_variation_default_attribute( $attribute_name );
								wc_dropdown_variation_attribute_options( array( 'options' => $options, 'attribute' => $attribute_name, 'product' => $product, 'selected' => $selected ) );
								echo end( $attribute_keys ) === $attribute_name ? '<a class="reset_variations" href="#">' . __( 'Clear selection', 'woocommerce' ) . '</a>' : '';
							?>
						</td>
					</tr>
		        <?php endforeach;?>
			</tbody>
		</table>

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
		<script>
		jQuery(document).ready(function(){
			
			jQuery('form.cart').on( 'change', '.variations select', function( event ) {
				setTimeout( var_fuc, 600 );
				
				//alert($var_id);
			});
			function var_fuc()
			{
				$var_id=jQuery('.variation_id').val();
				//alert($var_id);
				jQuery('button#var_id').each(function(){ 
				//alert(jQuery(this).text());
				if(jQuery(this).hasClass('var_id_'+$var_id)){
					jQuery('.button-info').css('display','none'); jQuery('.var_id_'+$var_id).show(); 
					} 
					});
			}
			//setTimeout( function(){jQuery('.woocommerce-message').css('display','block !important'); }, 600 );
			
		});
		</script>
		<style>
		.woocommerce-message
		{
			display:block !important;
		}
		</style>
		<div class="single_variation_wrap" style="display:none;">
			<?php
				/**
				 * woocommerce_before_single_variation Hook
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * woocommerce_single_variation hook. Used to output the cart button and placeholder for variation data.
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				 //woocommerce_single_variation();
				 ?>
				 <div class="variations_button">
				 <?php  
			
			$tickets = new WC_Product_Variable( get_the_ID());
			$availablevariations = $tickets->get_available_variations(); 
			//print_r($availablevariations); 
			foreach( $availablevariations as $variation ){ ?>
				 <button type="submit" class="button-info shakes animated var_id_<?php echo $variation['variation_id'];  ?>" id="var_id" style="display:none;">Buy Now - $<?php echo $variation['display_regular_price'];  ?></button>
			<?php } ?>
				 <!--<button type="submit" class="button-info shakes animated">Buy Now<?php //echo do_shortcode(get_post_meta($post->ID, 'Price', true));?></button>-->
				 <input type="hidden" name="add-to-cart" value="<?php echo $product->id; ?>" />
			<input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
			<input type="hidden" name="variation_id" class="variation_id" value="" />
				 </div>
				<?php //do_action( 'woocommerce_single_variation' );

				/**
				 * woocommerce_after_single_variation Hook
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
