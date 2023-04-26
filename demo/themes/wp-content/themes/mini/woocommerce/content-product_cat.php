<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );

// Increase loop count
//$woocommerce_loop['loop']++;
$thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
$image = wp_get_attachment_image_src( $thumbnail_id, 'full' );
if ( !$image ) {
			$image[0] = home_url(). '/wp-content/plugins/woocommerce/assets/images/placeholder.png';
			$image[1] = 450;
			$image[2] = 450;
}

$columns_number = "";
if($woocommerce_loop['columns'] == 2){
	$columns_number = "six columns";
} else if ($woocommerce_loop['columns'] == 3) {
	$columns_number = "four columns";
} else if ($woocommerce_loop['columns'] == 4) {
	$columns_number = "three columns";
}


?>
<li class="<?php echo $columns_number; ?> product-category black">

	<a href="<?php echo get_term_link($category, $category->taxonomy); ?>" class="product-category-link">
		<img class="category-thumb" src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
		<div class="text-wrapper">
        	<div class="show-category-background">
            	<div class="background">
					<h3><?php	 echo $category->name;
				if ( $category->count > 0 )
					echo apply_filters( 'woocommerce_subcategory_count_html', ' <span class="count">' . $category->count . '</span>', $category );			?>
		</h3>
		</div></div></div>

	</a>

</li>
