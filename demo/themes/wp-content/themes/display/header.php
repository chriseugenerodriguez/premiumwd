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
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
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

<body <?php body_class(''); ?> <?php if (get_option('premiumwd_responsive', 'true') == 'true' ): ?> data-responsive="1" <?php endif; ?> <?php body_class(''); ?> <?php if (get_option('premiumwd_lazy_load', 'true') == 'true' ): ?> data-lazy="1" <?php endif; ?>>
<?php if (get_option('premiumwd_loader') == 'true'): ?>
<div class="loader"><svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg" stroke="#333">
  <g fill="none" fill-rule="evenodd" stroke-width="2">
    <circle cx="22" cy="22" r="1">
      <animate attributeName="r" begin="0s" dur="1.8s" values="1; 20" calcMode="spline" keyTimes="0; 1" keySplines="0.165, 0.84, 0.44, 1" repeatCount="indefinite"/>
      <animate attributeName="stroke-opacity" begin="0s" dur="1.8s" values="1; 0" calcMode="spline" keyTimes="0; 1" keySplines="0.3, 0.61, 0.355, 1" repeatCount="indefinite"/>
    </circle>
    <circle cx="22" cy="22" r="1">
      <animate attributeName="r" begin="-0.9s" dur="1.8s" values="1; 20" calcMode="spline" keyTimes="0; 1" keySplines="0.165, 0.84, 0.44, 1" repeatCount="indefinite"/>
      <animate attributeName="stroke-opacity" begin="-0.9s" dur="1.8s" values="1; 0" calcMode="spline" keyTimes="0; 1" keySplines="0.3, 0.61, 0.355, 1" repeatCount="indefinite"/>
    </circle>
  </g>
  </svg></div>
<?php endif; ?>
<div id="theme-wrapper">
<div class="copyright">  
  <?php if ( get_option( 'premiumwd_copyright' ) ): ?>
  <p><?php echo get_option( 'premiumwd_copyright' ); ?></p>
  <?php else: ?>
  <p> <a href="http://premiumwd.com">
    <?php bloginfo(); ?>
    </a>  &copy; <?php echo date( 'Y' ); ?>. 
    <?php _e('All Rights Reserved.','Display'); ?>
  </p>
  <?php endif; ?>
</div>