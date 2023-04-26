<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php if (get_option('premiumwd_back_to_top') == 'true') : ?><a href="#" class="scrollup" >Scroll</a><?php endif; ?>

  <?php if (get_option('premiumwd_show_footerwidgets', 'true') == 'true'): ?>
   <footer id="footer">
		<div id="colophon" class="clearfix">
        
     <div id="footer-widget-area" role="complementary">
     <div id="first" class="widget-area">
		<ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('first-footer-widget-area') ) : ?>  <?php endif; ?> </ul>
	  <div class="social-wrapper"><?php get_template_part( 'social' ); ?>    </div>
      </div><!-- #first .widget-area --> 
      <div class="footer-bubble">
	<div id="second" class="widget-area">
		<ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('second-footer-widget-area') ) : ?><?php endif; ?></ul>
	 </div><!-- #second .widget-area -->
     <div id="third" class="widget-area">
		<ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('third-footer-widget-area') ) : ?>  <?php endif; ?></ul>
	  </div><!-- #third .widget-area -->
     <div id="fourth" class="widget-area">
		<ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fourth-footer-widget-area') ) : ?><?php endif; ?></ul>
      </div><!-- #fourth .widget-area -->
      </div><!-- .footer-bubble -->
       </div><!-- #colophon -->
<?php endif; ?>
</div>

			<div class="bottom-wrapper clearfix">
<div id="bottom-wrapper">       
 <div class="bottom-one-half">	
<div class="copyright"> 
<?php if(get_option('premiumwd_footer_copyright') && get_option('premiumwd_footer_copyright') !== '') { ?>
	<?php echo get_option('premiumwd_footer_copyright'); ?>
     <?php } else { ?>
     <p>&#169; 2013 - 2014 | Designed by <a href="http://premiumwd.com">premiumwd</a> | All Rights Reserved | Powered by <a href="http://wordpress.org">WordPress</a></p>
      <?php } ?>
            </div>
</div><!-- .copyright -->



<div class="bottom-two-half">	
<div id="site-info" class="clearfix"><div id="site-info" class="clearfix">     
           <?php if ( has_nav_menu( 'secondary' ) ) { ?>
    <?php wp_nav_menu( array('container_class' => 'sub-menu', 'theme_location' => 'secondary') ); ?>
     <?php } else { ?>
     <p class="notice"><?php _e("You need to setup your Footer Menu. Go to Appearance > Menus.") ?></p>
  <?php } ?> 
  
</div><!-- #site-info -->
</div>

</div><!-- #bottom-two-half -->
</div><!-- .bottom-wrapper -->
           

</footer><!-- #footer -->


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
