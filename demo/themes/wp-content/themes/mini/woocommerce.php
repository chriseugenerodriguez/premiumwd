<?php /* Template Name: WooCommerce */ ?>
<?php get_header();  ?>
<?php 
global $woocommerce, $post, $product;
$is_sidebar = apply_filters('premiumwd_shop_sidebar' , get_option('premiumwd_shop_sidebar'));
$category = get_queried_object();
$category_id=$category->term_id;
$theid = woocommerce_get_page_id('shop');
?>
<?php $subheader = get_post_meta( $theid, 'page_sub_heading', true); ?>
<?php $header = get_post_meta($theid, 'header_transparent_checkbox', true); ?>
<?php $height = get_post_meta($theid, 'page_height_heading', true); ?>
<?php $title = get_post_meta( $theid, 'page_title_checkbox', true); ?>
<?php $background = get_post_meta( $theid, 'page_image', true); ?>
<?php $parallax = get_post_meta( $theid, 'page_parallax_checkbox', true); ?>
<?php $background_color = get_post_meta( $theid, 'page_background_color', true); ?>
<?php $padding = get_post_meta( $theid, 'page_padding_checkbox', true); ?>
<?php $headercolor = get_post_meta( $theid, 'page_header_color', true); ?>
<?php $subcolor = get_post_meta( $theid, 'page_sub_color', true); ?>
<?php if (! is_singular( 'product' ) ) {?>
<?php if ($title == 'on'){ ?>
<section class="header-title grey-section <?php if ($header == 'on'){ ?>transparent <?php } ?> <?php if ($padding == 'on'){ ?>littlepadding<?php } ?> <?php if ($parallax =='on'){ ?>fullscreen<?php } ?>" <?php if ($header == 'on' || $background_color !== '' || $background !== '' ){ ?>style='min-height:<?php echo $height ?>px;background-color: <?php echo $background_color ?>;background-image: url("<?php echo $background ?>");'<?php } ?><?php if ($parallax =='on'){ ?>data-stellar-offset-parent="true" data-stellar-background-ratio="0.1"<?php } ?> >
  <div class="container">
    <div class="topheader text-center <?php if ( $subheader == '') { ?>no-sub<?php } ?>">
      <div class="wrapper">
        <?php 
  if( is_shop() ) {
        $shoppage_id = wc_get_page_id( 'shop' );
        $shop_page = get_post($shoppage_id);
        ?>
              <h1 style="color:<?php echo $headercolor ?>;"><?php echo $shop_page->post_title; ?></h1>
              <?php if ( $subheader  !=='') { ?><div class="separator tiny center"></div><p style="color:<?php echo $subcolor ?>;"><?php echo $subheader ?></p><?php } ?>
 <?php } else {
      if($category->parent != '') {
        parentcat($category->parent);  ?>
              <div class="separator tiny center"></div>
              <p style="color:<?php echo $subcolor ?>;"><?php echo  $category->name; ?></p>
        <?php } else { ?>
        <?php if($category->term_id!='') { ?>
              <h1 style="color:<?php echo $headercolor ?>;"><?php echo $category->name ?></h1>
              <?php }
      }
    }  ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php } ?>
<section class="white-section">
  <div class="container">
    <?php if (! is_singular( 'product' ) ) {?>
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
    <?php } ?>
    <?php woocommerce_content(); ?>
    <?php global $woocommerce_loop; ?>
  </div>
</section>
<?php get_footer(); ?>
