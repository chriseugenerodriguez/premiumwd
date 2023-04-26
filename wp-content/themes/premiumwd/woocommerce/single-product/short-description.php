<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

if ( ! $post->post_excerpt ) return;
?>
<?php global $post,$product;  $p = get_post($post->ID); ?>

<div class="description"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
<?php if( $product->is_type( 'variable' ) ){ woocommerce_template_single_add_to_cart(); } else { ?>
<a class="button-info shakes animated" href="?add-to-cart=<?php echo $p->ID ?>">Buy Now -  <?php echo do_shortcode(get_post_meta($p->ID, 'Price', true));?></a>
<?php } ?>
</div>
</div>
<div class="product-slider animated bounceInUp">
  <div class="browser-button" style="margin-left:10px;"></div>
  <div class="browser-button"></div>
  <div class="browser-button"></div>
  <div class="nano">
<span class="loader"></span>
<div class="designs-template-info"><div class="button-centered">
<a class="button-info" href="<?php echo  do_shortcode(get_post_meta($p->ID, 'Preview', true)); ?>">Live Preview</a>
</div></div>
<div class="blank_screen"></div>
      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" />
  </div>
  <div class="mobile animated bounceInUp">
    <div class="iphone-camera"></div>
    <div class="iphone-sensor"></div>
    <div class="iphone-earpiece"></div>
    <img width="134" height="240" src="<?php echo do_shortcode(get_post_meta($p->ID, 'mobile', true));?>" /> </div>
</div>
</div>
</div>
