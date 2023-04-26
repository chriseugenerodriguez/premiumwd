<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!-- HEAD CODE -->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (get_option('premiumwd_responsive') == 'true'): ?><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" /><?php endif; ?>
<?php if (get_option('premiumwd_responsive') == 'false'): ?><meta name="viewport" content="width=1200, user-scalable=no"><?php endif; ?>

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

<?php if (get_option('premiumwd_code_allow_google', 'true') == 'true'): ?><?php echo stripslashes(get_option('premiumwd_analytics')); ?><?php endif; ?>
<?php if (get_option('premiumwd_code_allow_childcss', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo stripslashes(get_option('premiumwd_code_childcss')); ?>"><?php endif; ?>
<?php if (get_option('premiumwd_code_allow_css', 'false') == 'true') echo '<style type="text/css">' . stripslashes(get_option('premiumwd_custom_css')) . '</style>'; ?>
<?php if (get_option('premiumwd_code_allow_$', 'false') == 'true'): ?><?php echo stripslashes(get_option('premiumwd_custom_$')); ?><?php endif; ?>
</head>

<body <?php body_class(''); ?> data-smooth-scrolling="1" <?php if (get_option('premiumwd_responsive', 'true') == 'true' ): ?> data-responsive="1" <?php endif; ?>>
<header <?php if (get_option('premiumwd_allow_sticky') == 'true'): ?> class="sticky" <?php endif;?>>
  <div class="container">
    <div class="columns twelve">
      <div class="logo">
        <?php if ( get_option('premiumwd_logo')) : ?>
        <a id="logo" href="<?php bloginfo('url')?>/"> <img src="<?php echo get_option('premiumwd_logo'); ?>" alt="<?php bloginfo('name')?>" /> </a><?php else: ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?> </h1></a>
		<?php endif; ?>
      </div>
      <span id="mobile-nav" href="#"><i class="fa fa-reorder"></i></span>
      <?php if ( has_nav_menu( 'header' ) ) { ?>
      <?php if(get_option('premiumwd_mega_menu' , false) != 'false'){
			wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'header', 'walker' => new premiumwd_responsive_mega_menu() ) ); 
			} else {
			wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'header', 'walker' => new premium_Walker_Nav_Menu() ) ); 
			}?>
      <?php } else { ?>
		<p><?php _e("You need to setup your WordPress Menus. Go to Appearance > Menus. See the documentation for details.", "framework") ?></p>
      <?php } ?>
    </div>
  </div>
</header>
<nav id="mobile-menu" role="navigation">
  <div class="container">
    <?php if ( has_nav_menu( 'header' ) ) { ?>
    <?php  wp_nav_menu( array( 'items_wrap' => '<ul id="mobile-header">%3$s</ul>', 'container_class' => 'mobile-header', 'theme_location' => 'header') ); ?>
    <?php } else { ?>
    <p><?php _e("You need to setup your WordPress Menus. Go to Appearance > Menus. See the documentation for details.") ?></p>
    <?php } ?>
  </div>
</nav>
<?php if (get_option('premiumwd_allow_sticky') == 'true'): ?><div class="sticky-container"><?php endif;?>