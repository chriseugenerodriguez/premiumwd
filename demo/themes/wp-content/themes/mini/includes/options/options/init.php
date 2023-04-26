<?php
if ( ! function_exists( 'premiumwd_custom_styles' ) ) : function premiumwd_custom_styles() { ?>
<style type="text/css" media="screen">

/* HEADER */
.premiumwd_mega_div ul li a:hover {background:#<?php echo get_option('sub_menu_dropdown_hover_background'); ?>;}
header#main {background:#<?php echo get_option('header_background'); ?>;}
header .logo h1 {font-family:<?php echo get_option('logo_fontfamily'); ?>;font-size:<?php echo get_option('logo_fontsize'); ?>;color:#<?php echo get_option('title_color'); ?>;}
header.affix #menu-header > li > a:hover, header.affix #menu-header > li.current-menu-item > a, header #menu-header > li.current-menu-item > a, header .menu-header ul li a:hover, header #menu-header > li.current-menu-parent > a, .header-meta li a, .header-meta li a:hover, .header-meta li.active a, header.affix .menu-header li.current-menu-item > a, header.affix .menu-header li.current-menu-ancestor > a  {color:#<?php echo get_option('header_hover_background'); ?>}
header .menu-header ul li a, .header-meta li a {font-family:<?php echo get_option('header_menu_fontfamily'); ?>;color:#<?php echo get_option('header_menu_color'); ?>;font-size:<?php echo get_option('header_menu_fontsize'); ?>;}

header .menu-header ul li ul.sub-menu a, .premiumwd_mega_div {background:#<?php echo get_option('sub_menu_background'); ?>;color:#<?php echo get_option('sub_menu_color');?>;}
header nav.sub-nav li a {font-family:<?php echo get_option('sub_menu_fontfamily'); ?>;color:#<?php echo get_option('sub_menu_color'); ?>;font-size:<?php echo get_option('sub_menu_fontsize'); ?>;}
header .menu-header li.menu-item-has-children ul > li a:hover, header .menu-header li.menu-item-has-children ul > li.current-menu-item a {background:#<?php echo get_option('sub_menu_hover_background');?>;color:#<?php echo get_option('sub_menu_hover'); ?>;}
.premiumwd_mega_div > li, header .menu-header ul li ul.sub-menu a {border-color:#<?php echo get_option('sub_menu_border');?>;}


/* BODY */
a {color:#<?php echo get_option('body_active'); ?>;}
a:hover {color:#<?php echo get_option('body_active_hover'); ?>;}
body {font-size:<?php echo get_option('body_fontsize'); ?>;font-family:<?php echo get_option('body_fontfamily'); ?>;background:#<?php echo get_option('body_background'); ?>;color:#<?php echo get_option('body_text'); ?>;}
h1, h2, h3, h4, h5, h6, form#ajax-contact-form label, .woocommerce-Tabs-panel .comment-reply-title {font-family:<?php echo get_option('header_title_fontfamily'); ?>;}
#sidebar section h5 {font-family:<?php echo get_option('sidebar_title_fontfamily'); ?>;color:#<?php echo get_option('sidebar_title_color'); ?>;font-size:<?php echo get_option('sidebar_title_fontsize'); ?>;}



/* FOOTER */
.footer {font-family:<?php echo get_option('footer_widgets_fontfamily_text'); ?>;color:#<?php echo get_option('footer_text');?>;background:#<?php echo get_option('footer_widget_background');?>;}
.footer h4 {font-family:<?php echo get_option('footer_widgets_fontfamily'); ?>;color:#<?php echo get_option('footer_titles');?>;}
.footer a {color:#<?php echo get_option('footer_links'); ?>;}
.footer a:hover {color:#<?php echo get_option('footer_widget_links_hover'); ?>;}
.footer .copyrights {font-family:<?php echo get_option('footer_copyright_fontfamily'); ?>;color:#<?php echo get_option('footer_copyright');?>;background:#<?php echo get_option('footer_copyright_background');?>;}
.footer .socials a {color:#<?php echo get_option('footer_social_links'); ?>;}
.footer .socials a:hover {color:#<?php echo get_option('footer_social_links_hover'); ?>;}

/* SEARCH */
.menu-header li#header-search div:before {border-color:#<?php echo get_option('search_border');?>;}
.menu-header li#header-search form input {color:#<?php echo get_option('search_text');?>;}

</style>
<?php 
$font_familes = array();
$font_familes[] = get_option('logo_fontfamily');
$font_familes[] = get_option('header_menu_fontfamily');
$font_familes[] = get_option('sub_menu_fontfamily');
$font_familes[] = get_option('body_fontfamily');
$font_familes[] = get_option('header_title_fontfamily');
$font_familes[] = get_option('sidebar_title_fontfamily');
$font_familes[] = get_option('footer_widgets_fontfamily');
$font_familes[] = get_option('footer_widgets_fontfamily_text');
$font_familes[] = get_option('footer_copyright_fontfamily');

$font_familes = array_unique($font_familes);
foreach($font_familes as $f){ 
	$fontUrl = 'http://fonts.googleapis.com/css?family='.urlencode($f);
	$font_slug = str_replace(" " , "-", strtolower($f));
	wp_enqueue_style('google-fonts-'.$font_slug, $fontUrl); 
}

} endif;
 add_action( 'wp_head', 'premiumwd_custom_styles' ); 