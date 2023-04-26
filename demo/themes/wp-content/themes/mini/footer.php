<?php if(get_option('premiumwd_back_top') == 'true'):?><span class="back-top"><i class="fa fa-angle-up"></i></span><?php endif;?>

<footer class="footer <?php if(get_option('premiumwd_footer_widgets') == 'false'):?>no-widgets<?php endif;?><?php if(get_option('premiumwd_footer_sticky') == 'false'):?>regular<?php endif; ?>" <?php if(get_option('premiumwd_footer_sticky') == 'true'):?> id="stickyfooter"<?php endif;?>>
    <?php if(get_option('premiumwd_footer_widgets') == 'true'):?> 
    <div class="container">
    	<div class="row">
            <?php 
			$total = 4;	
				
			if ( get_option( 'premiumwd_footer_widget_count' ) != '' ) {							
			$total = get_option('premiumwd_footer_widget_count');
				if( $total == 1) $class = 'twelve';
				if( $total == 2) $class = 'six';
				if( $total == 3) $class = 'four';
				if( $total == 4) $class = 'three';
				}
				if ( ( is_active_sidebar( 'footer-widget-area-1' ) ||
					   is_active_sidebar( 'footer-widget-area-2' ) ||
					   is_active_sidebar( 'footer-widget-area-3' ) ||
					   is_active_sidebar( 'footer-widget-area-4' ) ) && $total > 0 ) ?>
                       
				<?php $i = 0; while ( $i < $total ) { $i++; ?>
						<?php if ( is_active_sidebar( 'footer-widget-area-' . $i ) ) { ?>
					
					<div class="footer-widget-<?php echo $i; ?> columns <?php echo $class; ?>">
						<?php dynamic_sidebar( 'footer-widget-area-' . $i ); ?>
					</div>
					
						<?php } ?>
					<?php } ?>                      
    	</div>
    </div>
    <?php endif; ?>
    <div class="copyrights">
    	<div class="container">
    		<div class="text-center">
        		<ul class="socials"> <?php if (get_option('premiumwd_social_twitter')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_twitter_url')); ?>"><i class="fa fa-twitter"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_facebook', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_facebook_url')); ?>"><i class="fa fa-facebook"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_linkedin', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_linkedin_url')); ?>"><i class="fa fa-linkedin"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_google-plus', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_google-plus_url')); ?>"><i class="fa fa-google-plus"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_dribbble', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_dribbble_url')); ?>"><i class="fa fa-dribbble"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_youtube', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_youtube_url')); ?>"><i class="fa fa-youtube"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_rss', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_rss_url')); ?>"><i class="fa fa-rss"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_pinterest', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_pinterest_url')); ?>"><i class="fa fa-pinterest"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_skype', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_skype_url')); ?>"><i class="fa fa-skype"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_instagram', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_instagram_url')); ?>"><i class="fa fa-instagram"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_flickr', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_flickr_url')); ?>"><i class="fa fa-flickr"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_tumblr', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_tumblr_url')); ?>"><i class="fa fa-tumblr"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_dropbox', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_dropbox_url')); ?>"><i class="fa fa-dropbox"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_foursquare', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_foursquare_url')); ?>"><i class="fa fa-foursquare"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_stack-exchange', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_stack-exchange_url')); ?>"><i class="fa fa-stack-exchange"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_weibo', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_weibo_url')); ?>"><i class="fa fa-weibo"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_github', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_github_url')); ?>"><i class="fa fa-github"></i></a></li><?php endif; ?> <?php if (get_option('premiumwd_social_envelope', 'false')=='true'): ?><li><a href="<?php echo stripslashes (get_option('premiumwd_social_envelope_url')); ?>"><i class="fa fa-envelope"></i></a></li><?php endif; ?> </ul>
        <div class="copymessage">
          <?php if ( get_option( 'premiumwd_footer_copyright' ) ): ?>
          <?php echo get_option( 'premiumwd_footer_copyright' ); ?>
          <?php else: ?>&copy;<?php echo date( 'Y' ); ?> <a href="http://premiumwd.com"><?php bloginfo(); ?></a> - All Rights Reserved. Powered by <a href="http://wordpress.org">WordPress</a><?php endif; ?>
           <?php if(get_option('premiumwd_footer_menu_show') == 'true'): ?> <?php if ( has_nav_menu( 'footer' ) ) { ?><?php  wp_nav_menu( array( 'container_class' => 'footer', 'theme_location' => 'footer') ); ?><?php } else { ?><span><?php _e("Setup your Menu. Go to Appearance > Menus.") ?></span><?php } ?><?php endif; ?>
        </div>
    		</div>
       	</div>
    </div>
    <!--/.container--> 
  </section>
  <!--/#footer-bottom--> 
</footer>
<!--/#footer-->
</div>
<!--/#theme-wrapper-->
<?php wp_footer(); ?>
</body></html>