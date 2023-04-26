</div><!--/.container-->
<footer id="footer">
<?php if(get_option('premiumwd_footer_show') == 'true') {?>  <section id="footer-bottom">
    <div class="container">
      <div class="columns five">
        <div id="copyright">
          <?php if ( get_option( 'premiumwd_footer_copyright' ) ): ?>
          <p><?php echo get_option( 'premiumwd_footer_copyright' ); ?></p> <?php else: ?>
          <p> <?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. <?php _e('All Rights Reserved.','adomo'); ?> <a href="http://premiumwd.com">premiumwd.com</a> </p>
		  <?php endif; ?>
        </div><!--/#copyright-->
        </div>  <!--/.five-->  
      <div class="columns seven">
        <?php if ( has_nav_menu( 'footer' )) { ?>
        <?php  wp_nav_menu( array( 'items_wrap' => '<ul id="menu-footer">%3$s</ul>', 'container_class' => 'menu-footer', 'theme_location' => 'footer') ); ?>
        <?php } else { ?>
        <p><?php _e("You need to setup your WordPress Menus. Go to Appearance > Menus. See the documentation for details.") ?></p>
        <?php } ?>
      </div>  <!--/.seven-->  
    </div>
    <!--/.container--> 
  </section><?php } ?>
  <!--/#footer-bottom--> 
</footer>
<!--/#footer-->
</div><!--/#theme-wrapper-->
<?php wp_footer(); ?>
</body>
</html>                        