<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php if(get_option('premiumwd_gmap_show') == 'true'): ?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function toggleBounce() {

  if (marker.getAnimation() != null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
});
var infowindow = new google.maps.InfoWindow();
var custommarker = <?php if ( get_option( 'premiumwd_gmap_marker' ) ): ?>'<?php echo get_option( 'premiumwd_gmap_marker' ); ?>'<?php else: ?>'<?php esc_url( get_stylesheet_directory_uri() ) ?>/assets/images/marker.png'<?php endif;?>;
var myLatlng = new google.maps.LatLng(<?php echo get_option('premiumwd_gmap_gps'); ?>);

function initialize() {
	map = new google.maps.Map(document.getElementById('map'), { 
		zoom: <?php echo get_option('premiumwd_gmap_zoom'); ?>, 
		draggable: true,
		scrollwheel: false,
		center: new google.maps.LatLng(<?php echo get_option('premiumwd_gmap_gps'); ?>), 
		mapTypeId: google.maps.MapTypeId.ROADMAP 
	});

 
		var marker = new google.maps.Marker({
	    	position: myLatlng,
			icon: custommarker,
			map: map,
			animation: google.maps.Animation.DROP
		});
		google.maps.event.addListener(marker, 'click', (function(marker) {
		}));
	}

</script><?php endif; ?>
<div class="wrapper">
  <?php if(get_option('premiumwd_gmap_show') == 'true'): ?><div id="map" style="height:500px;"></div><?php endif; ?>
  <div class="container content-wrapper paddingtop paddingbottom">
	<div class="content">
  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
    <section class="three columns">
      <?php the_content(); ?>
      </section>
        <?php endwhile; // end of the loop. ?>
        <?php if (get_option('premiumwd_contact_show', 'true') == 'true'): ?>
        
        <!--begin:notice message block-->
        	<?php get_template_part('/includes/contact/index'); ?>

      <?php endif; ?>
    
    <!-- #post-## --> 
    </div>
  </div>
</div>

<!-- #wrap -->

<?php get_footer(); ?>
