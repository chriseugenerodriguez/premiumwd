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
<div class="wrapper">
  <?php if(get_option('premiumwd_gmap_show') == 'true'): ?><div id="map"></div><?php endif; ?>
  <div class="container">

  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
    <section class="three columns">
      <?php the_content(); ?>
      </section>
      <div id="contactform" class="eight columns right">
        <?php endwhile; // end of the loop. ?>
        <?php if (get_option('premiumwd_contact_show', 'true') == 'true'): ?>
        
        <!--begin:notice message block-->
        
        <div id="note"></div>
        
        <!--begin:notice message block-->

        <form id="ajax-contact-form" class="row" method="post" action="sendmail.php">
          <div class="row">
            <div class="columns six">
              <label for="name">Name *</label>
              <input class="required inpt name" type="text" name="name" value="" />
            </div>
            <div class="columns six">
              <label for="name">Email *</label>
              <input class="required inpt email" type="text" name="email" value="" />
            </div>
          </div>
          <div class="row">
            <div class="columns twelve">
              <label for="name">Message *</label>
              <textarea class="textbox" name="message" rows="7" cols="90"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="columns four">
              <label for="name">Captcha *</label>
              <input class="required captcha" placeholder="3+1=?" type="text" name="answer" value="" />
              <label id="load"></label>
              <input name="submit" type="submit"  class="button medium left" data-hover-color="#fff" data-hover-background-color="#333" style="color:#333; border-color:#333;" value="Send" />
            </div>
          </div>
        </form>
        </fieldset>
        
        <!--copy the code from here--> 
        
      </div>
      <?php endif; ?>
    </section>
    
    <!-- #post-## --> 
    
  </div>
</div>
</div>

<!-- #wrap -->

<?php get_footer(); ?>
