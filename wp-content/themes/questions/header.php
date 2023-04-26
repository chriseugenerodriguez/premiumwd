<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<!-- HEAD CODE -->
<head <?php do_action( 'add_head_attributes' ); ?>>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="HandheldFriendly" content="true" />
<meta name="google-site-verification" content="_amAmsukUlhr7qZyUjfxn_4NxLn0FtMoeAUwXBNgktg" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<META name="Language" content="English">
<META HTTP-EQUIV="CACHE-CONTROL" content="PUBLIC">
<META name="Copyright" content="2014">
<META name="Designer" content="Chris Rodriguez">
<META name="Publisher" content="PremiumWD">
<META name="Revisit-After" content="51 days">
<META name="distribution" content="Local">
<META name="Robots" content="INDEX,FOLLOW">

<link rel="shortcut icon" type="image/x-ico" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon.ico" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/manifest.json">
<link rel="mask-icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#a6e12e">
<meta name="apple-mobile-web-app-title" content="premiumwd">
<meta name="application-name" content="premiumwd">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/mstile-144x144.png">
<meta name="theme-color" content="#ffffff"><!--[if IE 7]>
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/fonts/css/font-awesome-ie7.css" />
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/html5.js" />
<![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"wtihm1akKd606C", domain:"premiumwd.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=wtihm1akKd606C" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  

  
<?php wp_head(); ?>
<title>
<?php /** Print the <title> tag based on what is being viewed. **/
	global $page, $paged;
	wp_title( '|', true, 'right' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) echo ('|') . sprintf( __( 'Page %s', 'help' ), max( $paged, $page ) ); 
	if (is_taxonomy('dwqa-question_category')){
		global $wp_query;

			$term =	$wp_query->queried_object;
		    if ($term && !empty($term->name)) echo $term->name.' | Help & Customer Care';
	}
	?>
	
</title>
<?php wp_enqueue_script("jquery"); ?>
</head>
<body <?php body_class('responsive'); ?> data-responsive="1" <?php if ( is_user_logged_in() ) { ?> class="logged-in"<?php } ?> >
<!--Header-->
<nav id="mobile-menu" class='hidden-sidebar' role="navigation">
  <div class='hidden-sidebar-inner'>  
  <a class='close_side_menu' target='_self' href='#'></a>
    <?php  wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu', 'theme_location' => 'header') ); ?>
  </div>
</nav>
<div id="theme-wrapper">
<header id="header">
  <div class="container">
    <div class="columns twelve">
      <div class="logo"> <a id="logo" href="<?php bloginfo('url')?>/">
      <?php get_template_part('logo');?>
      </a> </div>
	<?php wp_nav_menu( array( 'container_id' => 'nav', 'container_class' => 'menu', 'theme_location' => 'header' ) ); ?>

      <span id="mobile-nav" href="#"><i class="fa fa-reorder"></i></span>
    </div>
  </div>
</header>
