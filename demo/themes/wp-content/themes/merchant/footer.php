<footer id="footer">
  <section id="footer-bottom">
    <div class="container">
      <div class="columns seven">
        <div id="copyright">
          <?php if ( get_option( 'premiumwd_footer_copyright' ) ): ?>
          <?php echo get_option( 'premiumwd_footer_copyright' ); ?>
          <?php else: ?><a href="http://premiumwd.com"><?php bloginfo(); ?></a> &copy; <?php echo date( 'Y' ); ?>.<?php endif; ?>
           <?php if(get_option('premiumwd_footer_menu_show') == 'true'): ?> <?php if ( has_nav_menu( 'footer' ) ) { ?><?php  wp_nav_menu( array( 'container_class' => 'footer', 'theme_location' => 'footer') ); ?><?php } else { ?><span><?php _e("Setup your Menu. Go to Appearance > Menus.") ?></span><?php } ?><?php endif; ?>
        </div>
        
        <!--/#copyright--> 
      </div>
      <!--/.five-->
      <div class="columns five">
        <ul class="social-links">
          <?php if(get_option('premiumwd_pg_visa') == 'true'): ?><li class="payment-types visa"></li><?php endif; ?>
          <?php if(get_option('premiumwd_pg_mastercard') == 'true'): ?><li class="payment-types mc"></li><?php endif; ?>
          <?php if(get_option('premiumwd_pg_paypal') == 'true'): ?><li class="payment-types paypal"></li><?php endif; ?>
          <?php if(get_option('premiumwd_pg_discover') == 'true'): ?><li class="payment-types discover"></li><?php endif; ?>
          <?php if(get_option('premiumwd_pg_stripe') == 'true'): ?><li class="payment-types stripe"></li><?php endif; ?>
          <?php if(get_option('premiumwd_pg_amazon') == 'true'): ?><li class="payment-types amazon"></li><?php endif; ?>
          <?php if(get_option('premiumwd_pg_amex') == 'true'): ?><li class="payment-types amex"></li><?php endif; ?>
        </ul>
      </div>
      <!--/.seven--> 
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