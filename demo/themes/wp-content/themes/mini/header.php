<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!-- HEAD CODE -->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (get_option('premiumwd_responsive') == 'true'): ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="HandheldFriendly" content="true" />
<?php endif; ?>
<?php if (get_option('premiumwd_responsive') == 'false'): ?>
<meta name="viewport" content="width=1200, user-scalable=no">
<?php endif; ?>

<!-- FAVICON CODE -->
<link rel="shortcut icon" type="image/x-ico" href="<?php echo stripslashes(get_option('premiumwd_favicon')); ?>" />
<!-- FAVICON END -->

<!-- STYLESHEET CODE -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- STYLESHEET END -->

<!-- WP-HEAD CODE -->
<?php 	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head(); ?>
<!-- WP-HEAD END -->

<title><?php wp_title(''); ?><?php if(wp_title('', false)) {  echo get_option('premiumwd_title_sep'); } ?> <?php bloginfo('name'); ?></title> 

<!-- JAYA CODE -->
<?php wp_enqueue_script("jquery"); ?>
<!-- JAYA END -->

<?php if (get_option('premiumwd_code_allow_google', 'true') == 'true'): ?>
<?php echo stripslashes(get_option('premiumwd_analytics')); ?>
<?php endif; ?>
<?php if (get_option('premiumwd_code_allow_childcss', 'false') == 'true'): ?>
<link rel="stylesheet" href="<?php echo stripslashes(get_option('premiumwd_code_childcss')); ?>">
<?php endif; ?>
<?php if (get_option('premiumwd_code_allow_css', 'false') == 'true') echo '<style type="text/css">' . stripslashes(get_option('premiumwd_custom_css')) . '</style>'; ?>
<?php if (get_option('premiumwd_code_allow_$', 'false') == 'true'): ?>
<?php echo stripslashes(get_option('premiumwd_custom_$')); ?>
<?php endif; ?>
</head>

<body <?php body_class(''); ?>  <?php if(get_option('premiumwd_lazy_load', 'true') == 'true' ): ?>data-lazy="1" <?php endif; ?> <?php if(get_option('premiumwd_scrollbar', 'true') == 'true' ): ?>data-scroll="1" <?php endif; ?><?php if (get_option('premiumwd_responsive', 'true') == 'true' ): ?> data-responsive="1" <?php endif; ?>>

<?php if (get_option('premiumwd_loading') == 'true'): ?><div class="loader"><div class="loader-wrapper"><div class="loader-inner">
<svg width="50" height="50" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" stroke="#aaa"> <g fill="none" fill-rule="evenodd"> <g transform="translate(1 1)" stroke-width="2"> <circle stroke-opacity=".5" cx="18" cy="18" r="18"/> <path d="M36 18c0-9.94-8.06-18-18-18">  <animateTransform  attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s"  repeatCount="indefinite"/></path> </g> </g></svg></div></div></div><?php endif; ?>

<nav id="mobile-menu" role="navigation"><a href="#" class="close_side_menu"></a>
  <div class="inner">
    <?php if ( has_nav_menu( 'header' ) ) { ?>
    	<?php if ( class_exists( 'WooCommerce' ) ) { echo wooheader(); } ?>
    <?php if(get_option('premiumwd_mega_menu' , false) != 'false'){
			wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'header', 'walker' => new premiumwd_responsive_mega_menu() ) ); 
			} else {
			wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'header', 'walker' => new premium_Walker_Nav_Menu() ) ); 
			}?>
    <?php } else { ?>
    <p> <?php _e("You need to setup your WordPress Menu. Go to Appearance > Menus.") ?> </p>
    <?php } ?>
  </div>
</nav>
<div id="theme-wrapper"  <?php if(get_option('premiumwd_footer_sticky') == 'true'):?> class="stickyfooter <?php if(get_option('premiumwd_footer_widgets') == 'false'):?>no-footer-widgets<?php endif;?>" <?php endif;?>>
<?php  if ( class_exists( 'WooCommerce' ) && is_shop() ) {  $theid = woocommerce_get_page_id('shop');}else{ $theid = $post->ID;}
$header = get_post_meta( $theid, 'header_transparent_checkbox', true); ?>
<header id="main" class="<?php if (get_option('premiumwd_allow_sticky') == 'true'): ?> sticky<?php endif;?> <?php if ($header == 'on'){ ?>transparent <?php } ?>" >
  <?php if (get_option('premiumwd_allow_fluid')== 'true') { ?>
  <div class="container-fluid">
  <?php } else { ?>
  <div class="container">
    <?php } ?>
    <div class="logo columns two">
      <?php if ( get_option('premiumwd_logo')) : ?>
      <a id="logo" href="<?php bloginfo('url')?>/"> <img src="<?php echo get_option('premiumwd_logo'); ?>" alt="<?php bloginfo('name')?>" /> </a>
      <?php else: ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?> </h1></a>
      <?php endif; ?>
    </div>
    <span id="mobile-nav" href="#"> <ul class="hamburger"> <li class="first"></li> <li class="second"></li> <li class="third"></li> </ul></span>
    <div class="columns ten">
      <?php if ( has_nav_menu( 'header' ) ) { ?>
      <nav id="main-nav">
        <?php if(get_option('premiumwd_mega_menu' , false) != 'false'){
			wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'header', 'walker' => new premiumwd_responsive_mega_menu() ) ); 
			} else {
			wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'header', 'walker' => new premium_Walker_Nav_Menu() ) ); 
			}?>
         <?php echo wooheader(); ?>
      </nav>
      <?php } else { ?>
      <p> <?php _e("You need to setup your WordPress Menus. Go to Appearance > Menus. See the documentation for details.", "framework") ?></p>
      <?php } ?>
    </div>
  </div>
</header>