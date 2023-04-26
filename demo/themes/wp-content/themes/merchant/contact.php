<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<?php if(get_option('premiumwd_gmap_show') == 'true'): ?><script type="text/javascript">
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
var custommarker = <?php if ( get_option( 'premiumwd_gmap_marker' ) ): ?>'<?php echo get_option( 'premiumwd_gmap_marker' ); ?>'<?php else: ?>'<?php bloginfo('template_directory'); ?>/assets/images/marker.png'<?php endif;?>;
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
<?php if(get_option('premiumwd_contact_show') == 'true'): ?><script type="text/javascript">				
    /* <![CDATA[ */
    jQuery(document).ready(function($) {
		$('#contactform #note').hide();
        var close_note = $("#note");
        close_note.click(function() {
            $("#contactform #note").slideUp(1000, function() {
                $(this).hide();
            });
        });
        $("#ajax-contact-form").submit(function() {
            $('#load').append('<center><img src="<?php bloginfo('template_directory'); ?>/includes/contact/images/ajax-loader.gif" alt="" id="loading" /></center>');
            var fem = $(this).serialize();
            note = $('#note');
            $.ajax({
                type: "POST",
                url: "<?php bloginfo('url'); ?>?action=sendmail&" + fem,
                data: fem,
                success: function(msg) {
                    if (note.height()) {
                        note.slideUp(1000, function() {
                            $(this).hide();
                        });
                    }
                    else
                        note.hide();

                    $('#loading').fadeOut(300, function() {
                        $(this).remove();
                        if (msg === 'OK') {
                            $('input:not(:submit)').val("");
                            $('textarea').val("");
                        }

                        // Message Sent? Show the 'Thank You' message and hide the form
                        result = (msg === 'OK') ? '<div class="success">Your message was sent successfully</div>' : msg;

                       var i = setInterval(function() {
                            if (!note.is(':visible')) {
                                note.html(result).slideDown(1000);
                                clearInterval(i);
                            }
                        }, 40);
                    }); // end loading image fadeOut
                }
            });
            return false;
        });
    });
    /* ]]> */
</script><?php endif; ?>

<?php if(get_option('premiumwd_gmap_show') == 'true'): ?><div id="map_container">
  <div id="map" style="width: 100%; height: 450px;"></div>
  <?php if(get_option('premiumwd_directions_show') == 'true'): ?><div class="map_button_wrapper">
    <div class="container"><a id="getdirections" href="<?php echo get_option('premiumwd_gmap_directions'); ?>" target="_blank">Get Directions</a></div>
  </div><?php endif; ?>
</div><?php endif; ?>
<div class="container pad contact">
  <?php while ( have_posts() ): the_post(); ?>
  <section class="twelve columns content">
    <h1 class="post-title">
      <?php the_title(); ?>
    </h1>
    <div class="post-inner">
      <div class="post-content">
        <div class="entry">
          <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
  <?php if(get_option('premiumwd_contact_show') == 'true'): ?>
  <div id="contact-form">
  <section class="eight columns">
    <aside id="note" style="text-align:left;"></aside>
    <form id="ajax-contact-form" method="post" action="sendmail.php">
      <p><label>Your Name <span class="required">*</span></label><input class="required inpt name" type="text" name="name" value="" /></p>
      <p><label>Email <span class="required">*</span></label><input class="required inpt email" type="text" name="email" value="" /></p>
      <p><label>Message <span class="required">*</span></label><textarea class="textbox" name="message" rows="7" cols="90"></textarea></p>
      <p><label>Captcha 3+1= <span class="required">*</span></label><input class="required captcha" type="text" name="answer" value="" /></p>
      <p><label id="load"></label><input name="submit" type="submit" class="button small left" style="color:#fff; background-color:#333;" value="Send" /></p>
    </form>
    </section>
    
	  <aside class="three columns clearfix">
      <div id="sidebar">
        <?php dynamic_sidebar( 'Contact Widget Area' ); ?>
      </div>
    </aside>
    </div>

	<?php endif; ?>
  <!--/.content--> 
</div>
<?php get_footer(); ?>
