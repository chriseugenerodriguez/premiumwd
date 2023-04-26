<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template.
 *
 * Override this template by copying it to yourtheme/woocommerce/taxonomy-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}$get_cat = $wp_query->query['product_cat'];

// Split
$all_the_cats = explode('/', $get_cat);

// How many categories are there?
$cat_count = count($all_the_cats);


// Define the parent
$parent_cat = $all_the_cats[0];

// Plugin category Layout
if ( $parent_cat == 'wp-premium-plugins' ){ woocommerce_get_template( 'shop-plugins.php' );}

// Product category Layout
else{ woocommerce_get_template( 'archive-product.php' );}
