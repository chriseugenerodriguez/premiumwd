<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see   https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
global $post;  $p = get_post($post->ID);

if ( ! empty( $tabs ) ) :  ?>

<div class="product-info clearfix">
<div class="right-content1" id="premium-sidebar">
<div id="theme-details" class="rating"></div>

    <div id="theme-details" class="clearfix"> 
      <?php if ( $keys = get_post_custom_keys() ) {
	echo "<ul class='post-meta'>\n";
	foreach ( (array) $keys as $key ) {
	$keyt = trim($key);
	if ( '_' == $keyt{0} || 'onesignal_meta_box_present' == $keyt || 'onesignal_send_notification' == $keyt || 'wprss_ftp_taxonomies' == $keyt || 'custom_post_template' == $keyt || 'snapEdIT' == $keyt || 'snap_isAutoPosted' == $keyt || 'snap_MYURL' == $keyt || 'snapFB' == $keyt || 'snapTR' == $keyt || 'snapTW' == $keyt || 'mobile' == $keyt || 'snapEdIT' == $keyt || 'snap_MYURL' == $keyt || 'slide_template' == $keyt || 'Preview' == $keyt || 'Version' == $keyt || 'psp_kw' == $keyt || 'psp_meta' == $keyt || 'psp_sitemap_isincluded' == $keyt || 'psp_w3c_validation' == $keyt || 'psp_desktop_pagespeed' == $keyt || 'psp_mobile_pagespeed' == $keyt || 'psp_status' == $keyt || 'psp_score' == $keyt || 'bitly_short_url' == $keyt || 'Intro' == $keyt || 'retweet_cache' == $keyt || 'BuyNow' == $keyt || 'Tags' == $keyt || 'Slider' == $keyt || 'Title' == $keyt || 'Description' == $keyt || 'total_sales' == $keyt || 'frs_woo_product_tabs' == $keyt || 'custom_permalink' == $keyt  )
	continue;
	$values = array_map('trim', get_post_custom_values($key));
	$value = implode($values,', ');
	echo apply_filters('the_meta_key', "
	<li><span class='post-meta-key'>$key:</span> <span class='pull-right'>$value</span></li>
	\n", $key, $value);
	}
	echo "\n";
	} ?>
    <?php echo premium_orders(); ?>
    </div>
    
    <div class="widget-box support-widget clearfix"> 
      <h5>Support</h5>
      <p>We provide support included with our customers for this template. If you run into any problems, ask for help on the <a target="_blank" href="http://questions.premiumwd.com">Forums</a>.</p>
      <ul>
      <li><strong>Documentation:</strong> <a target="_blank" href="http://help.premiumwd.com/guides/templates/<?php echo strtolower(get_the_title()); ?>/">View Docs</a></li>
      </ul>
    </div>
  </div><div class="woocommerce-tabs clearfix">
  <ul class="tabs">
    <?php foreach ( $tabs as $key => $tab ) : ?>
    <li class="<?php echo $key ?>_tab"> <a href="#tab-<?php echo $key ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a> </li>
    <?php endforeach; ?>
  </ul>
  <?php 
  foreach ( $tabs as $key => $tab ) : ?>
  <div class="panel entry-content" id="tab-<?php echo $key ?>">
    <div class="wrapper" itemprop="description">
      <?php call_user_func( $tab['callback'], $key, $tab ) ?>
    </div>
  </div>
  <?php endforeach; ?>
<?php endif; ?>

</div>