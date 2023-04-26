<?php if(get_option('premiumwd_back_top') == 'true'):?><a class="back-to-top" href="#"> <span>scroll to top</span> <i class="fa fa-long-arrow-right"></i></a><?php endif;?>
<footer class="paddingtop">
<div class="container">
  <?php if(get_option('premiumwd_footer_widgets') == 'true'):?>
    <div class="row littlemargintop">
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
  <?php endif; ?>
  <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container_class' => 'menu-footer-container', 'container' => 'nav') ); ?>
  <?php get_template_part( '/includes/inc/social' ); ?>
  </div>
  <div class="copyright tinypaddingbottom text-center">  
    <?php if ( get_option( 'premiumwd_copyright' ) ): ?>
    <p><?php echo get_option( 'premiumwd_copyright' ); ?></p>
    <?php else: ?>
    <p> <a href="http://premiumwd.com">
      <?php bloginfo(); ?>
      </a>  &copy; <?php echo date( 'Y' ); ?>. 
      <?php _e('All Rights Reserved.', 'ellion'); ?>
    </p>
    <?php endif; ?>
  </div>
 </div> 
</footer>
</div>
<nav class='hidden-sidebar' id="mobile-menu" <?php if(get_option('premiumwd_sidemenu_background') != ''):?> style="background-image:url('<?php echo get_option( 'premiumwd_sidemenu_background'); ?>')" <?php endif;?>>
  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'menu' ) ); ?>
  <?php if(get_option('premiumwd_sidemenu_about') == true):?>
     <div class="menu-footer">
        <div class="logo">
            <?php if ( get_option('premiumwd_logo')) : ?>
            <a id="logo" href="<?php echo esc_url( home_url()); ?>/"> <img src="<?php echo get_option('premiumwd_logo'); ?>" alt="<?php bloginfo('name')?>" /> </a>
            <?php else: ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home"><h2><?php bloginfo( 'name' ); ?> </h2></a>
            <?php endif; ?>
          </div>
          <p><?php echo get_option('premiumwd_sidemenu_description'); ?></p>
     </div>
  <?php endif;?>
     
</nav>
<?php wp_footer(); ?>
</body></html>