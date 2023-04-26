<?php
if ( ! function_exists( 'premiumwd_custom_styles' ) ) : function premiumwd_custom_styles() { ?>
<style type="text/css" media="screen">

/* HEADER */
header, header.transparent.affix {background:#<?php echo get_option('header_background');?>;}
header .logo h1 {font-family:<?php echo get_option('logo_fontfamily'); ?>;font-size:<?php echo get_option('logo_fontsize'); ?>;color:#<?php echo get_option('title_color'); ?>;}
header #menu-header > li.current-menu-item > a, header #menu-header > li > a:hover, header #menu-header > li.current-menu-parent > a:hover, header #menu-header li.current-menu-ancestor > a  {color:#<?php echo get_option('header_hover_background'); ?>}
header #menu-header li a, .header-meta li a {font-family:<?php echo get_option('header_menu_fontfamily'); ?>;color:#<?php echo get_option('header_menu_color'); ?>;font-size:<?php echo get_option('header_menu_fontsize'); ?>;}

header #menu-header li ul {background:#<?php echo get_option('sub_menu_background'); ?>;}
header #menu-header li ul li a {font-family:<?php echo get_option('sub_menu_fontfamily'); ?>;color:#<?php echo get_option('sub_menu_color'); ?>;font-size:<?php echo get_option('sub_menu_fontsize'); ?>;}
header #menu-header li.menu-item-has-children ul > li:hover, header #menu-header li.menu-item-has-children ul > li.current-menu-item {background:#<?php echo get_option('sub_menu_hover_background');?>;color:#<?php echo get_option('sub_menu_hover'); ?>;}


/* BODY */
a {color:#<?php echo get_option('body_active'); ?>;}
a:hover {color:#<?php echo get_option('body_active_hover'); ?>;}
body {font-size:<?php echo get_option('body_fontsize'); ?>;font-family:<?php echo get_option('body_fontfamily'); ?>;background:#<?php echo get_option('body_background'); ?>;color:#<?php echo get_option('body_text'); ?>;}
h1, h2, h3, h4, h5, h6, form#ajax-contact-form label {font-family:<?php echo get_option('header_title_fontfamily'); ?>;}
#sidebar section h5 {font-family:<?php echo get_option('sidebar_title_fontfamily'); ?>;color:#<?php echo get_option('sidebar_title_color'); ?>;font-size:<?php echo get_option('sidebar_title_fontsize'); ?>;}



/* FOOTER */
footer {font-size:<?php echo get_option('footer_fontsize'); ?>;font-family:<?php echo get_option('footer_widgets_fontfamily_text'); ?>;color:#<?php echo get_option('footer_text');?>;background:#<?php echo get_option('footer_widget_background');?>;}
footer h4 {font-family:<?php echo get_option('footer_widgets_fontfamily'); ?>;color:#<?php echo get_option('footer_titles');?>;}
footer a {color:#<?php echo get_option('footer_widget_links'); ?>;}
footer a:hover {color:#<?php echo get_option('footer_widget_links_hover'); ?>;}
footer .copyright {font-family:<?php echo get_option('footer_copyright_fontfamily'); ?>;color:#<?php echo get_option('footer_copyright');?>;background:#<?php echo get_option('footer_copyright_background');?>;}
footer .socials a {color:#<?php echo get_option('footer_social_links'); ?>;}
footer .socials a:hover {color:#<?php echo get_option('footer_social_links_hover'); ?>;}

@media only screen and (max-width: 767px){
	.responsive .single-portfolio header.affix-top #menu-header > li.background--dark > a, .responsive .single-portfolio header.affix-top .logo h1.background--dark {color:#<?php echo get_option('title_color'); ?> !important;}
}

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