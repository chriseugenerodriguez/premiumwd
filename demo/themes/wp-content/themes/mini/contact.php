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
		mapTypeId: google.maps.MapTypeId.ROADMAP ,
		styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
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
<?php $title = get_post_meta( get_the_ID(), 'page_title_checkbox', true); ?>
<?php $subheader = get_post_meta( get_the_ID(), 'page_sub_heading', true); ?>
<?php $background = get_post_meta( get_the_ID(), 'page_image', true); ?>
<?php $parallax = get_post_meta( get_the_ID(), 'page_parallax_checkbox', true); ?>
<?php $background_color = get_post_meta( get_the_ID(), 'page_background_color', true); ?>
<?php $padding = get_post_meta( get_the_ID(), 'page_padding_checkbox', true); ?>
<?php $headercolor = get_post_meta( get_the_ID(), 'page_header_color', true); ?>
<?php $subcolor = get_post_meta( get_the_ID(), 'page_sub_color', true); ?>
<?php if ($title == 'on'){ ?><section class="header-title grey-section <?php if ($padding == 'on'){ ?>littlepadding<?php } ?> <?php if ($parallax =='on'){ ?>fullscreen<?php } ?>" <?php if ($background_color !== '' || $background !== '' ){ ?>style='background-color: <?php echo $background_color ?>;background-image: url("<?php echo $background ?>");'<?php } ?><?php if ($parallax =='on'){ ?>data-stellar-offset-parent="true" data-stellar-background-ratio="0.1"<?php } ?> >
  <div class="container">
    <div class="topheader text-center <?php if ( $subheader == '') { ?>no-sub<?php } ?>">
      <h1 style="color:<?php echo $headercolor ?>;"><?php the_title(); ?></h1>
		  <?php if ( $subheader  !=='') { ?><p style="color:<?php echo $subcolor ?>;"><?php echo $subheader ?></p><?php } ?>    
    </div>
  </div>
</section><?php } ?><?php if(get_option('premiumwd_gmap_show') == 'true'): ?><div id="map_container">
  <div id="map"></div>
  <?php if(get_option('premiumwd_directions_show') == 'true'): ?><div class="map_button_wrapper">
    <div class="container"><a id="getdirections" href="<?php echo get_option('premiumwd_gmap_directions'); ?>" target="_blank">Get Directions</a></div>
  </div><?php endif; ?>
</div><?php endif; ?>
  <?php while ( have_posts() ): the_post(); ?>
<div class="white-section">
  <div class="container">
     <section class="three columns">  
   <?php the_content(); ?>
          <?php endwhile; ?>
</section>
  <?php if(get_option('premiumwd_contact_show') == 'true'): ?>
  <section class="nine columns">    <div id="contact-form">

    <aside id="note" style="text-align:left;"></aside>
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
    </section>
    
 
	<?php endif; ?>
  <!--/.content--> 
</div>   </div>
<?php get_footer(); ?>
