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

<body <?php body_class(''); ?> data-smooth-scrolling="1" data-header-resize="<?php echo get_option('premiumwd_allow_scroll'); ?>" <?php if (get_option('premiumwd_responsive', 'true') == 'true' ): ?> data-responsive="1" <?php endif; ?>>
<nav class='hidden-sidebar'>
  <div class='hidden-sidebar-inner'><a class='close_side_menu' target='_self' href='#'></a>
    <?php initsidebar(); 
	if(get_option('premiumwd_footer_copyright') && get_option('premiumwd_footer_copyright') !== '') {  echo get_option('premiumwd_footer_copyright'); } else { ?>
    <p class="copyright">&#169; 2014 | Designed by <a href='http://premiumwd.com'>premiumwd</a></p>
    <?php } ?>
  </div>
</nav>
<div id="theme-wrapper">
<header id="header">
  <div class="branding-wrap text-logo <?php if (get_option('premiumwd_allow_scroll', 'true') == 'true' ): ?>fixed<?php endif; ?>">
    <div class="logo">
	<?php if ( get_option('premiumwd_logo')) : ?>
    <a id="logo" href="<?php bloginfo('url')?>/"> <img src="<?php echo get_option('premiumwd_logo'); ?>" alt="<?php bloginfo('name')?>" /> </a>
    <?php else: ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home">
      <h1>
        <?php bloginfo( 'name' ); ?>
      </h1>
      </a>
      <?php endif; ?>
    </div>
    <?php if (get_option('premiumwd_allow_description', 'true') == 'true' ): ?>
    <div class="site-description"> <?php echo get_bloginfo( 'description' ); ?> </div>
    <?php endif; ?>
    <?php get_template_part('social'); ?>
  </div>
  <span id="mobile-nav" href="#"><i class="fa fa-reorder"></i></span>
  <div id="header-container" <?php if (get_option('premiumwd_allow_scroll', 'true') == 'true' ): ?>class="fixed"<?php endif; ?>> <span id="toggle-nav" class="<?php if (get_option('premiumwd_allow_scroll', 'true') == 'true' ): ?>fixed<?php endif; ?>" href="#"><i class="fa fa-reorder"></i></span><?php if (get_option('premiumwd_filter', 'true') == 'true'): ?><span class="toggle-filter"><i class="fa fa-ellipsis-h"></i></span><?php endif; ?>
    <?php if (get_option('premiumwd_back_to_top', 'true') == 'true' ): ?>
    <a id="to-top"><i class="fa fa-angle-up"></i></a>
    <?php endif; ?>
  </div>
</header>
<nav id="mobile-menu" role="navigation">
  <div class="container">
    <?php if ( has_nav_menu( 'primary' ) ) { ?>
    <?php  wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'primary') ); ?>
    <?php } else { ?>
    <p>
      <?php _e("You need to setup your WordPress Menus. Go to Appearance > Menus. See the documentation for details.", "framework") ?>
    </p>
    <?php } ?>
  </div>
</nav>
