<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;
if(empty($woocommerce_loop['title_tag'])) $title_tag = 'h6'; else $title_tag = $woocommerce_loop['title_tag'];
$product = new WC_Product( get_the_ID() );

if(has_post_thumbnail()) : 
?>

<div class="slide swiper-slide col-sm-4">
	<div class="swiper-slide-image">
		<div class="swiper-slide-wrapper">
			<?php the_post_thumbnail(array(370,475)); ?>
			<div class="opacity">
				<div class="swiper-product-informations item-3 sidebar-no">
					<span class="product-title"><a href="<?php the_permalink(); ?>"> <?php echo '<'.$title_tag.'>'. get_the_title().'</'.$title_tag.'>'; ?> </a></span>
                    <?php echo wc_price($product->get_price()); ?>
                    <!--<span class="product-add-to-cart"><a href="<?php echo $product->add_to_cart_url(); ?>" rel="nofollow" data-product_id="<?php echo get_the_ID(); ?>" data-quantity="1" data-product_sku="" class="add_to_cart_button btn btn-flat product_type_simple"><?php echo $product->add_to_cart_text(); ?></a></span>-->
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>