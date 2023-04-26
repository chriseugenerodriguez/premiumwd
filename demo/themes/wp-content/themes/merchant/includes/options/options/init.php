<?php
if ( ! function_exists( 'premiumwd_custom_styles' ) ) : function premiumwd_custom_styles() { ?>

<style type="text/css" media="screen">
/* HEADER */
.premiumwd_mega_div {width:<?php echo get_option('premiumwd_mega_menu_width'); ?> !important;background:#<?php echo get_option('sub_menu_dropdown_background'); ?>;}
.premiumwd_mega_div ul li a:hover {background:#<?php echo get_option('sub_menu_dropdown_hover_background'); ?>;}
header#main .top-nav {background:#<?php echo get_option('header_background'); ?>;}
header .logo h1 {font-family:<?php echo get_option('logo_fontfamily'); ?>;font-size:<?php echo get_option('logo_fontsize'); ?>;color:#<?php echo get_option('title_color'); ?>;}
header .menu-header ul li a, .account-holder ul li a {font-family:<?php echo get_option('header_menu_fontfamily'); ?>;color:#<?php echo get_option('header_menu_color'); ?>;font-size:<?php echo get_option('header_menu_fontsize'); ?>;}
header#main .sub-nav {background:#<?php echo get_option('sub_menu_background'); ?>;}
header nav.sub-nav li a {font-family:<?php echo get_option('sub_menu_fontfamily'); ?>;color:#<?php echo get_option('sub_menu_color'); ?>;font-size:<?php echo get_option('sub_menu_fontsize'); ?>;}

/* BODY */
a {color:#<?php echo get_option('body_active'); ?>;}
a:hover {color:#<?php echo get_option('body_active_hover'); ?>;}
body {background:#<?php echo get_option('body_background'); ?>;color:#<?php echo get_option('body_text'); ?>;font-family:<?php echo get_option('body_fontfamily'); ?>;}
h1.page-title, h1.post-title {font-family:<?php echo get_option('header_title_fontfamily'); ?>;color:#<?php echo get_option('header_title_color'); ?>;font-size:<?php echo get_option('header_title_fontsize'); ?>;}
#sidebar section h5 {font-family:<?php echo get_option('sidebar_title_fontfamily'); ?>;color:#<?php echo get_option('sidebar_title_color'); ?>;font-size:<?php echo get_option('sidebar_title_fontsize'); ?>;}

/* SEARCH */
header nav.sub-nav li#header-search input {color:#<?php echo get_option('search_text'); ?>;border-color:#<?php echo get_option('search_border'); ?>;}

/* FOOTER */
#footer #copyright {font-family:<?php echo get_option('footer_fontfamily'); ?>;}
</style>

<?php 
$font_familes = array();
$font_familes[] = get_option('logo_fontfamily');
$font_familes[] = get_option('header_menu_fontfamily');
$font_familes[] = get_option('sub_menu_fontfamily');
$font_familes[] = get_option('header_title_fontfamily');
$font_familes[] = get_option('sidebar_title_fontfamily');

$font_familes = array_unique($font_familes);
foreach($font_familes as $f){ 
	$fontUrl = 'http://fonts.googleapis.com/css?family='.urlencode($f);
	$font_slug = str_replace(" " , "-", strtolower($f));
	wp_enqueue_style('google-fonts-'.$font_slug, $fontUrl); 
}

} endif;
 add_action( 'wp_head', 'premiumwd_custom_styles' ); 