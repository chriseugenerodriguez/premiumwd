<?php
/**
 * Single Product Thumbnails
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();

if ( $attachment_ids ) {
	$loop 		= 0;
	?>
	<div class="thumbnails">
		<a href="<?php if ( has_post_thumbnail() ) { echo $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); } ?>" title="<?php echo $image_caption_custom = esc_attr( get_post_field( 'post_excerpt', get_post_thumbnail_id(get_the_ID())) ); ?>">
	<?php echo $image_custom = wp_get_attachment_image( get_post_thumbnail_id(get_the_ID()), apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, $attr = array() ); ?>
	</a>
	<?php

		foreach ( $attachment_ids as $attachment_id ) {

			$image_link = wp_get_attachment_url( $attachment_id );

			if ( ! $image_link )
				continue;

			$image_title 	= esc_attr( get_the_title( $attachment_id ) );
			$image_caption 	= esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );

			$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, $attr = array() );

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<a href="%s" title="%s">%s</a>', $image_link, $image_caption, $image ), $attachment_id, $post->ID );

			$loop++;
		}

	 ?>

	</div>
	<?php
}


 /*?>$attachment_ids = $product->get_gallery_attachment_ids();

if ( $attachment_ids ) {
		$loop 		= 0;

	?>
	<div class="thumbnails">	<?php
	
		foreach ( $attachment_ids as $attachment_id ) {

			$image_title 	= esc_attr( get_the_title( $attachment_id ) );
			$image_caption 	= esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );

			if ( ! $image_link )
				continue;
				
			$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, $attr = array(
				'title'	=> $image_title,
				'alt'	=> $image_title
				) );
			$image_link = wp_get_attachment_url( $attachment_id );
			$image_class = esc_attr( implode( ' ', $classes ) );

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<a href="%s" class="%s" title="%s" data-rel="prettyPhoto[product-gallery]">%s</a>', $image_link, $image_class, $image_caption, $image ), $attachment_id, $post->ID, $image_class );

//           echo wp_get_attachment_image( $attachment->ID, 'attachment-shop_thumbnail' );
			$loop++;
		}
	?></div>
	<?php
}
<?php */?>
