<?php

if ( ! function_exists( 'premiumwd_custom_styles' ) ) : function premiumwd_custom_styles() { ?>


<style type="text/css" media="screen">

<?php if (get_option('premiumwd_responsive') == 'false'): ?>
.container {width:1120px;max-width:none;}
article.post {width:1120px;margin:0px auto;}
<?php endif; ?>

/* HEADER */
.logo h1 {color:#<?php echo get_option('title_color'); ?>;font-size:<?php echo get_option('logo_fontsize'); ?>;}
header ul.menu li a {font-size:<?php echo get_option('header_nav'); ?>;}
header #header-container, .mobile header{background-color:#<?php echo get_option('header_background'); ?>;}

/* BODY */
body {font-family:<?php echo get_option('body_font_family'); ?>;}
article.post .post-categories li, .page-title .post-categories li, .meta-data li, .portfolio-tag {font-size:<?php echo get_option('meta_data_fontsize'); ?>;}
.wrapper .page-title h1, article.post h3, .archive-title h1 {font-size:<?php echo get_option('page_title_fontsize'); ?>;}
.socials li a, a:link, a:active, a:visited, .portfolio_navigation a, #header-container #toggle-nav i {color:#<?php echo get_option('body_active'); ?>;}
.socials li a:hover, a:hover, .portfolio_navigation a:hover, #header-container #toggle-nav i:hover, .font_awsome_icon i:hover, .accordion_holder.accordion .ui-accordion-header:hover, .tabs .tabs-nav li.active a:hover,.tabs .tabs-nav li a:hover, .font_awsome_icon i, .dropcap, .font_awsome_icon_display .fa-circle,.icon_with_title.boxed .icon_holder .fa-display, .icon_with_title .icon_with_title_link, .icon_with_title.center .icon_holder .font_awsome_icon i:hover, .box_holder.with_icon .box_holder_icon_inner .fa-display i.fa-display-base, .progress_bars_icons_inner.square .bar.active i,.progress_bars_icons_inner.circle .bar.active i,.progress_bars_icons_inner.normal .bar.active i,.progress_bars_icons_inner .bar.active i.fa-circle, .list.number ul>li:before{color:#<?php echo get_option('body_active_hover'); ?>;}
.icon_with_title.square .icon_holder .fa-display:hover,.box_holder_icon_inner.square .fa-display:hover,.box_holder_icon_inner.circle .fa-display:hover,.circle .icon_holder .fa-display:hover, .dropcap.circle, .dropcap.square, .highlight, .button:hover, .icon_list i, .icon_with_title.boxed .icon_holder .fa-display,.font_awsome_icon_square, .progress_bar .progress_content, .progress_bars_vertical .progress_content_outer .progress_content, .social_icon_holder.circle .fa-display:hover, .list.number.circle ul>li:before {background-color:#<?php echo get_option('body_active_hover'); ?>;}
html {background-color:#<?php echo get_option('body_background'); ?>;}
.widget-container h5 {font-size:<?php echo get_option('sidebar_titles'); ?>;}
.sidebar section {font-size:<?php echo get_option('sidebar_text'); ?>;}
</style>

<?php } endif;
 add_action( 'wp_head', 'premiumwd_custom_styles' ); 
