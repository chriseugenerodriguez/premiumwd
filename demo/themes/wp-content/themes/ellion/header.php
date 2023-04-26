<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!-- HEAD CODE -->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (get_option('premiumwd_responsive') == 'true'): ?>
<?php if (get_option('premiumwd_responsive', 'true') == 'true' ): ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php endif; ?>
<meta name="HandheldFriendly" content="true" />
<?php endif; ?>
<?php if (get_option('premiumwd_responsive') == 'false'): ?>
<meta name="viewport" content="width=1120, user-scalable=no">
<?php endif; ?>

<!-- FAVICON CODE -->
<link rel="shortcut icon" type="image/x-ico" href="<?php echo stripslashes(get_option('premiumwd_favicon')); ?>" />
<!-- FAVICON END -->

<!-- STYLESHEET CODE -->
<link href="https://fonts.googleapis.com/css?family=Raleway|Cardo" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- STYLESHEET END -->

<!-- WP-HEAD CODE -->
<?php 	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head(); ?>
<!-- WP-HEAD END -->

<title>
<?php if(wp_title('', false)) {  echo get_option('premiumwd_title_sep'); } else { wp_title('|', true, 'right'); } ?>
</title>

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

<body <?php body_class(''); ?> <?php if (get_option('premiumwd_responsive', 'true') == 'true' ): ?> data-responsive="1" <?php endif; ?> <?php body_class(''); ?> <?php if (get_option('premiumwd_lazy_load', 'true') == 'true' ): ?> data-lazy="1" <?php endif; ?>>
<?php if (get_option('premiumwd_loading') == 'true'): ?>
<div class="loader"><?php get_template_part('/includes/inc/loader');?></div>
<?php endif; ?>
<?php $header = get_post_meta( $post->ID, 'header_transparent_checkbox', true); ?>
<?php $sticky = get_option('premiumwd_allow_sticky', true); ?>
<?php $layout = get_post_meta(get_the_ID(), 'portfolio_type', true);  ?>
<?php $align = get_post_meta(get_the_ID(), 'portfolio_align', true);  ?>
<?php $revsliderbackground = get_post_meta( $post->ID, 'header_dynamic_slider_checkbox', true); ?>
<?php $container = get_post_meta( get_the_ID(), 'portfolio_container', true); ?>
<?php $layout = get_post_meta(get_the_ID(), 'portfolio_type', true);  ?>

<div id="theme-wrapper" <?php if($revsliderbackground == 'on'){?>data-rev="1"<?php } ?> class="<?php if ($layout == 'full-screen'){ ?>fullscreen <?php } ?> <?php if ($layout == 'side' && $align == 'left'){ ?>side-left <?php } ?> <?php if ($layout == 'side' && $align == 'right'){ ?>side-right <?php } ?> ">

<header id="main" class="<?php if ($sticky == 'true'): ?> sticky<?php endif;?> <?php if ($header == 'on'){ ?>transparent <?php } ?><?php if($container == 'full' && 'side' == $layout) { ?>absolute<?php } ?>" >
  <?php if (get_option('premiumwd_allow_fluid')== 'true') { ?>
  <div class="container-fluid">
  <?php } else { ?>
  <div class="container">
    <div class="twelve columns">
    <?php } ?>
    <div class="logo">
      <?php if ( get_option('premiumwd_logo')) : ?>
      <a id="logo" href="<?php echo esc_url( home_url()); ?>/"> <img src="<?php echo get_option('premiumwd_logo'); ?>" alt="<?php echo bloginfo('name')?>" /> </a>
      <?php else: ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home"><h1><?php echo bloginfo( 'name' ); ?> </h1></a>
      <?php endif; ?>
    </div>
  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', ) ); ?>
  <span id="mobile-nav" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="18" width="20">
  <g>
    <rect fill="#999" x="0" y="0" width="18" height="2"/>
    <rect fill="#999" x="0" y="7" width="10" height="2"/>
    <rect fill="#999" x="0" y="14" width="14" height="2"/>
  </g>
  </svg></span>
 </div> 
 <?php if (get_option('premiumwd_allow_fluid') != 'true') { ?></div><?php } ?>
</header>
