<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!-- HEAD CODE --><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="HandheldFriendly" content="true" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- WP-HEAD CODE -->
<?php 	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head(); ?>
<!-- WP-HEAD END -->

<title><?php wp_title(''); ?><?php if(wp_title('', false)) {  echo get_option('premiumwd_title_sep'); } ?> <?php bloginfo('name'); ?></title> 

<!-- FAVICON CODE -->
<link rel="shortcut icon" type="image/x-ico" href="<?php echo stripslashes(get_option('premiumwd_favicon')); ?>" />
<!-- FAVICON END -->

<!-- STYLESHEET CODE -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css" media="all" />
<!-- STYLESHEET END -->

<!--[if IE]>
	<style type="text/css">
  .clearfix {
    zoom: 1;     /* triggers hasLayout */
    }  /* Only IE can see inside the conditional comment
    and read this CSS rule. Don't ever use a normal HTML
    comment inside the CC or it will close prematurely. */
	</style>
<![endif]-->

<!-- WP-HEAD CODE -->
<?php	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head(); ?>
<!-- WP-HEAD END -->        

<!-- GOOGLE FONTS CODE -->
<?php $fonts_array  = $wpdb->get_col("SELECT distinct option_value FROM wp_options WHERE option_name like '%fontfamily%'");
    $fontcnt = 1; 
	$default_font = array('Arial', 'Courier', 'Georgia', 'Impact', 'Lucida', 'Lucida Console', 'Tahoma' , 'Times New Roman', 'Trebuchet', 'Verdana');
	foreach($fonts_array as $fontname) {

		// if default font, it will be the native font. So don't go to google because the font doesn't exist in the google webfonts 
		if( !in_array($fontname, $default_font)) {			
			$fontname = str_replace(" ", "+", $fontname);
			$fontstyle = 'http://fonts.googleapis.com/css?family='.$fontname; ?>
			<link rel='stylesheet' id='<?php echo 'fontstyle-'.$fontcnt.'-css';?>'  href='<?php echo $fontstyle ?>&#038;ver=3.4.2' type='text/css' media='all' />	
<?php 
		}
		$fontcnt++; 
	} 
?>
<!-- GOOGLE FONTS END -->

<!-- JAYA CODE -->
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.js"></script>
<!-- JAYA END -->

<!-- BACKGROUND CODE -->
<?php if (get_option('premiumwd_allow_custom_background') == 'true'): ?><body class="bg1" style="background-image:url(<?php echo get_option('premiumwd_custom_background'); ?>);" /><?php endif; ?>
<?php if (get_option('premiumwd_allow_stock_patterns') == 'true'): ?><?php get_template_part( 'patterns' ); ?><?php endif; ?>
<!-- BACKGROUND END -->

<!-- COLOR SKINS CODE -->
<?php if (get_option('premiumwd_default_skin_grey', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/grey.css" type="text/css" media="screen"  /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_white', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/white.css" type="text/css" media="screen" /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_black', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/black.css" type="text/css" media="screen" /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_purple', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/purple.css" type="text/css" media="screen" /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_orange', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/orange.css" type="text/css" media="screen" /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_red', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/red.css" type="text/css" media="screen" /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_green', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/green.css" type="text/css" media="screen" /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_blue', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/blue.css" type="text/css" media="screen" /><?php endif; ?>
<?php if (get_option('premiumwd_default_skin_yellow', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/premiumwd-options/skins/yellow.css" type="text/css" media="screen" /><?php endif; ?>
<!-- COLOR SKINS END -->


<?php if (get_option('premiumwd_code_allow_google', 'true') == 'true'): ?><?php echo stripslashes(get_option('premiumwd_analytics')); ?><?php endif; ?>
<?php if (get_option('premiumwd_code_allow_childcss', 'false') == 'true'): ?><link rel="stylesheet" href="<?php echo stripslashes(get_option('premiumwd_code_childcss')); ?>"><?php endif; ?>
<?php if (get_option('premiumwd_code_allow_css', 'false') == 'true') echo '<style type="text/css">' . stripslashes(get_option('premiumwd_custom_css')) . '</style>'; ?>
<?php if (get_option('premiumwd_code_allow_$', 'false') == 'true'): ?><?php echo stripslashes(get_option('premiumwd_custom_$')); ?><?php endif; ?>

</head>
<!-- HEAD END -->

<body <?php body_class(); ?>  <?php if (get_option('premiumwd_allow_custom_color') == 'true'): ?>style="background-color:#<?php echo stripslashes (get_option('premiumwd_custom_color')); ?>;"<?php endif; ?> data-responsive="1">

	<div id="wrapper" class="hfeed">
	<header id="header">
    <div id="row">
	<div id="header-top" class="clearfix">
		<div id="masthead">
        <div id="branding" role="banner">
			
		<?php if ( get_option('premiumwd_logo')) : ?>
        <a href="<?php bloginfo('url')?>/">
        <img src="<?php echo get_option('premiumwd_logo'); ?>" alt="<?php bloginfo('name')?>" />
        </a>
        <?php else: ?>
        
        <h1 id="site-title">
            <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?></a></span>
        </h1><?php endif; ?>
    
       
        <?php if ( has_nav_menu( 'primary' ) ) { ?> 
        <div class="nav-menus">
         <a id="toggle-nav" href="#"><i class="icon-reorder"></i></a>
        
        <nav id="access" role="navigation">
    	<?php wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header-menu">%3$s</ul>', 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker' => new premium_Walker_Nav_Menu() ) ); ?>
     	</nav><!-- #access -->
        </div><!-- .nav-menus -->
		<?php } else { ?>
        <p class="notice"><?php _e("You need to setup your Header Menu. Go to Appearance > Menus. See the documentation for details.") ?></p>
 		<?php } ?>
        
    	</div><!-- #branding -->
		</div><!-- #masthead -->
		</div><!-- #header-top -->
		</div><!-- #row -->
        
         <nav id="mobile-menu" role="navigation">
            <?php wp_nav_menu( array( 'items_wrap' => '<ul>%3$s</ul>', 'container_class' => 'container', 'theme_location' => 'primary' ) ); ?>
          </nav>
        
		</header><!-- #header -->
  
        <div id="main">