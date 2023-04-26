<?php 
/*
Template Name: WooCommerce
*/ 
?>
<?php 
global $woocommerce, $post, $product, $wp_query;

	do_action('woocommerce_init');

$id = get_option('woocommerce_shop_page_id');
$shop= get_post($id);
$cat = $wp_query->get_queried_object();
$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
$image = wp_get_attachment_url( $thumbnail_id );
		
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
$is_sidebar = apply_filters('premiumwd_shop_sidebar' , get_option('premiumwd_shop_sidebar'));

?>
<?php get_header(); $id = get_option('woocommerce_shop_page_id'); ?>
<?php if(is_shop() || is_product_category() || is_product_tag()): ?>

<div class="container shop">
  <div class="row bread-nav">
    <div class="six columns">
      <?php woocommerce_breadcrumb(); ?>
    </div>
    <div class="six columns"><span><?php echo get_option('premiumwd_shop_message'); ?></span></div>
  </div>
  <?php if($is_sidebar == 'true'): ?>
  <aside class="three columns">
    <div id="sidebar">
      <?php dynamic_sidebar( 'WooCommerce Sidebar Widget Area' ); ?>
    </div>
  </aside>
  <?php endif; ?>
  
  <?php if($is_sidebar == 'true'): ?>
  <section class="nine columns clearfix">
  <?php endif; ?>
  
  <?php if($is_sidebar == 'false'): ?>
  <section class="twelve columns clearfix">
  <?php endif; ?>
  
  <?php woocommerce_image_cat(); ?>
  
  <?php endif; ?>
  
  <?php woocommerce_content(); ?>
  <?php global $woocommerce_loop; ?>
</div>
<?php get_footer(); ?>
