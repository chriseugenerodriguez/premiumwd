<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

$related = $product->get_related( 4 );

//if ( sizeof( $related ) == 0 ) return;
$terms = wp_get_post_terms( $product->id, 'product_cat' );
//print_r($terms);
$cats_array = array();
foreach ( $terms as $term ) 
if (!in_array($term->term_id, $cats_array)) {
	$cats_array[] = $term->term_id;    
}
if(($term->parent != '0') && !in_array($term->parent, $cats_array)){
	$cats_array[] = $term->parent;
}

$args1 =   array(
	'post_type'				=> 'product',
	'ignore_sticky_posts'	=> 1,
//	'no_found_rows' 		=> 1,
	'posts_per_page' 		=> -1,
	'orderby' 				=> $orderby,
	'post__not_in' => array( $product->id ),
'tax_query' => array(
    array(  
        'taxonomy' => 'product_cat',
        'field' => 'id',
        'terms' => $cats_array
    )));
apply_filters('woocommerce_related_products_args',$args1);
$single_product_id =  $product->id ;
$counter = 1;
$products = new WP_Query( $args1 );

$woocommerce_loop['columns'] = $columns;

if ( $products->have_posts() ) : ?>
	<div class="related products">

		<?php if (in_array("107", $cats_array)) {?>
   			<h3><?php _e( 'Related Plugin', 'woocommerce' ); ?></h3>
		<?php }elseif(in_array("148", $cats_array)) {?>
			<h3><?php _e( 'Related Themes', 'woocommerce' ); ?></h3>
		<?php }else{?>
			<h3><?php _e( 'Related Products', 'woocommerce' ); ?></h3>
		<?php }?>

		<?php woocommerce_product_loop_start(); ?>

			<?php while ( $products->have_posts() ) : $products->the_post(); ?>
				
                <?php if(get_the_ID() == $single_product_id || $counter > 3) continue; ?>
                
				<?php wc_get_template_part( 'content', 'product' ); ?>

			<?php $counter++; endwhile; // end of the loop. ?>

		<?php woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();
