<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>
</div>
<nav class='hidden-sidebar' id="mobile-menu"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'mobile' ) ); ?></nav>
<header id="header">
  <div class="logo">
    <?php if ( get_option('premiumwd_logo')) : ?>
    <a id="logo" href="<?php bloginfo('url')?>/"> <img src="<?php echo get_option('premiumwd_logo'); ?>" alt="<?php bloginfo('name')?>" /> </a>
    <?php else: ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a>
    <?php endif; ?>
  </div>

  <span id="mobile-nav" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="18" width="20"> <g> <rect fill="#999" x="0" y="0" width="20" height="2"/> <rect fill="#999" x="0" y="7" width="20" height="2"/> <rect fill="#999" x="0" y="14" width="20" height="2"/> </g> </svg></span>
 
 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'menu' ) ); ?>

  <?php if (get_option('premiumwd_filter') == 'true'): ?><span id="toggle-nav" href="#"> <svg class="filter" xmlns="http://www.w3.org/2000/svg" height="18" width="20"> <g> <rect height="2" width="2" y="0" x="0" fill="#999"/> <rect height="2" width="2" y="0" x="16" fill="#999"/> <rect height="2" width="2" y="0" x="8" fill="#999"/> <rect height="2" width="2" y="7" x="0" fill="#999"/> <rect height="2" width="2" y="7" x="8" fill="#999"/> <rect height="2" width="2" y="7" x="16" fill="#999"/> <rect height="2" width="2" y="14" x="8" fill="#999"/> <rect height="2" width="2" y="14" x="16" fill="#999"/> </g> </svg> </span> <?php endif; ?>
  

<ul class="socials"> <?php if (get_option('premiumwd_social_twitter')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_twitter_url')); ?>"><i class="fa fa-twitter"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_facebook', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_facebook_url')); ?>"><i class="fa fa-facebook"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_linkedin', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_linkedin_url')); ?>"><i class="fa fa-linkedin"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_google-plus', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_google-plus_url')); ?>"><i class="fa fa-google-plus"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_dribbble', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_dribbble_url')); ?>"><i class="fa fa-dribbble"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_youtube', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_youtube_url')); ?>"><i class="fa fa-youtube"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_rss', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_rss_url')); ?>"><i class="fa fa-rss"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_pinterest', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_pinterest_url')); ?>"><i class="fa fa-pinterest"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_skype', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_skype_url')); ?>"><i class="fa fa-skype"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_instagram', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_instagram_url')); ?>"><i class="fa fa-instagram"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_flickr', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_flickr_url')); ?>"><i class="fa fa-flickr"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_tumblr', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_tumblr_url')); ?>"><i class="fa fa-tumblr"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_dropbox', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_dropbox_url')); ?>"><i class="fa fa-dropbox"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_foursquare', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_foursquare_url')); ?>"><i class="fa fa-foursquare"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_stack-exchange', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_stack-exchange_url')); ?>"><i class="fa fa-stack-exchange"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_weibo', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_weibo_url')); ?>"><i class="fa fa-weibo"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_github', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_github_url')); ?>"><i class="fa fa-github"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_envelope', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_envelope_url')); ?>"><i class="fa fa-envelope"></i></a></li><?php endif; ?> </ul>

 
  </header>
<?php wp_footer(); ?>

</body>
</html>