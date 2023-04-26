<?php global $products; ?>

<footer id="footer">
  <div class="container main-widgets">
    <?php dynamic_sidebar( 'Footer Menu' ); ?>
  </div>
  <div class="footer-bottom">
  <div class="container">
    <div class="columns three"> <a id="logo" title="Premium Web Design" href="<?php bloginfo('url')?>">Premiumwd © <?php echo date('Y'); ?></a>
      <div id="footer-social">
        <ul class="social-buttons">
          <li class="f"><a target="_blank" href="https://www.facebook.com/premiumwd"><i class="fa fa-facebook"></i></a></li>
          <li class="g"><a target="_blank" rel="publisher" href="https://google.com/+Premiumwdesign"><i class="fa fa-google-plus"></i></a></li>
          <li class="t"><a target="_blank" href="https://twitter.com/premiumwd"><i class="fa fa-twitter"></i></a></li>
	  		 <li class="r"><a target="_blank" href="/feed"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
    </div>
</div>
</footer>
</div>
<nav id="mobile-menu" class='hidden-sidebar' role="navigation">
  <div class='hidden-sidebar-inner'>
    <?php  wp_nav_menu( array( 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'container_class' => 'menu side-menu', 'theme_location' => 'header') ); ?>
    <?php dynamic_sidebar( 'Header Page' ); ?>
  </div>
</nav>
</div>
<?php wp_footer(); ?>
</body></html>