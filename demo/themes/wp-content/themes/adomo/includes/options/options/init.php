<?php
if ( ! function_exists( 'premiumwd_custom_styles' ) ) : function premiumwd_custom_styles() { ?>
<style type="text/css" media="screen">

/* HEADER */
.logo h1 {color:#<?php echo get_option('title_color'); ?>;font-size:#<?php echo get_option('logo_fontsize'); ?>;}
header {background-color:#<?php echo get_option('header_background'); ?>;}
header .menu-header > ul li a:hover,header .menu-header > ul li a:active,header .menu-header > ul li a:focus,header .menu-header ul li.current-menu-item, header .menu-header li.current-menu-parent.menu-item-has-children {background:#<?php echo get_option('header_hover_background'); ?>}
header .menu-header ul li a {color:#<?php echo get_option('header_menu_color');?>}
header .menu-header ul.sub-menu li a {color:#<?php echo get_option('sub_menu_color');?>}
header .menu-header ul li.menu-item-has-children:hover > a, header .menu-header ul.sub-menu li a {background:#<?php echo get_option('sub_menu_background'); ?>}
header .menu-header li.menu-item-has-children ul > li a:hover, header .menu-header li.menu-item-has-children ul > li.current-menu-item a {background:#<?php echo get_option('sub_menu_hover_background'); ?>}
#menu-header .premiumwd_mega_div {width:<?php echo get_option('premiumwd_mega_menu_width'); ?>;}

/* BODY */
.single .wrapper .metadata {font-size:#<?php echo get_option('meta_data_fontsize'); ?>;}
.page-title h1 {font-size:#<?php echo get_option('page_title_fontsize'); ?>;}
a:link, a:active, a:visited {color:#<?php echo get_option('body_active'); ?>;}
.post-meta a:hover, .post-title a:hover, .alx-tab .tab-item-category a, .alx-posts .post-item-category a, .alx-tab li:hover .tab-item-title a, .alx-tab li:hover .tab-item-comment a, .alx-posts li:hover .post-item-title a, a:hover, .font_awesome_icon i:hover, .accordion_holder.accordion .ui-accordion-header:hover, .tabs .tabs-nav li.active a:hover,.tabs .tabs-nav li a:hover, .font_awesome_icon i, .dropcap, .font_awesome_icon_stack .fa-circle,.icon_with_title.boxed .icon_holder .fa-stack, .icon_with_title .icon_with_title_link, .icon_with_title.center .icon_holder .font_awsome_icon i:hover, .box_holder.with_icon .box_holder_icon_inner .fa-stack i.fa-stack-base, .list.number ul>li:before{color:#<?php echo get_option('body_active_hover'); ?>;}
.icon_with_title.square .icon_holder .fa-stack:hover,.box_holder_icon_inner.square .fa-stack:hover,.box_holder_icon_inner.circle .fa-stack:hover,.circle .icon_holder .fa-stack:hover, .dropcap.circle, .dropcap.square, .highlight, .button:hover, .icon_list i, .icon_with_title.boxed .icon_holder .fa-stack,.font_awsome_icon_square, .progress_bar .progress_content, .progress_bars_vertical .progress_content_outer .progress_content, .social_icon_holder.circle .fa-stack:hover, .list.number.circle ul>li:before {background-color:#<?php echo get_option('body_active_hover'); ?>;}
.alx-tabs-nav li.active a {border-color:#<?php echo get_option('body_active_hover'); ?>;}
*::-moz-selection {background:#<?php echo get_option('body_active_hover'); ?>;}
body {color:#<?php echo get_option('body_text'); ?>;background-color:#<?php echo get_option('body_background'); ?>;}

/* SEARCH */
header .menu-header ul li#search {background:#<?php echo get_option('search_background'); ?>;}
header .menu-header ul li#search i, header .menu-header ul li#search input {color:#<?php echo get_option('search_text'); ?>;}
/* FOOTER */
#footer {color:#<?php echo get_option('footer_color'); ?>;background:#<?php echo get_option('footer_background'); ?>;border-top-background:#<?php echo get_option('footer_border_background')?>;}
#footer-widgets > .widgets > section h5 {color:#<?php echo get_option('footer_headers'); ?>;}
#footer-bottom {background:#<?php echo get_option('footer_bottom_background'); ?>;}
#footer-bottom a {color:#<?php echo get_option('footer_link'); ?>;}
#footer-bottom a:hover {color:#<?php echo get_option('footer_link_hover'); ?>;}
</style>
<?php } endif;
 add_action( 'wp_head', 'premiumwd_custom_styles' ); 

                            
                            