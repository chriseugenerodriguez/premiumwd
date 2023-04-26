<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript">  
/* <![CDATA[ */    
$(document).ready(function() {
	var close_note = $("#note");
	close_note.click(function () {
		jQuery("#note").slideUp(1000, function () {
			jQuery(this).hide();
		});
	});

    $("#ajax-contact-form").submit(function() {
        $('#load').append('<center><img src="<?php bloginfo( 'template_directory' ); ?>/images/ajax-loader.png" alt="" id="loading" /></center>');

        var fem = $(this).serialize();
			note = $('#note');
	
        $.ajax({
            type: "POST",
            url: "<?php bloginfo( 'url' ); ?>?action=sendmail&"+fem,
            data: fem,
            success: function(msg) {
				if ( note.height() ) {			
					note.slideUp(1000, function() {
						$(this).hide();
					});
				} 
				else note.hide();

				$('#loading').fadeOut(300, function() {
					$(this).remove();
							if(msg === 'OK') {   $('input:not(:submit)').val(""); $('textarea').val(""); }	
					// Message Sent? Show the 'Thank You' message and hide the form
					result = (msg === 'OK') ? '<div class="success"><?php echo get_option('premiumwd_contact_message'); ?> </div>' : msg;

					var i = setInterval(function() {
						if ( !note.is(':visible') ) {
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
</script>  


<!-- Single Page Container-->

<div id="container">
<div id="content" role="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
<div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1><?php the_breadcrumb(); ?> </div>
</div>
<div id="entry-content">
<div class="entry-content">
<?php if(get_option('premiumwd_googlemap_show', 'true') == 'true'): ?> 
<?php echo do_shortcode('[map w="702" h="330" z="15" marker="yes" address="". get_option("premiumwd_custom_color")"., ".  get_option("premiumwd_contact_city")"., ".  get_option("premiumwd_contact_state")". ". get_option("premiumwd_contact_zipcode") "." ]'); ?>
<?php endif; ?>

<div id="main-single">
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

<?php if(get_option('premiumwd_contact_show', 'true') == 'true'): ?> 

<div id="contactform">

	
        <!--begin:notice message block-->
        <div id="note"></div>
        <!--begin:notice message block-->

			<form id="ajax-contact-form" method="post" action="premiumwd-options/sendmail.php">

			<label>Name<span style="color:red;">*</span></label><input class="required inpt" type="text" name="name" value="" />
			<label>E-Mail<span style="color:red;">*</span></label><input class="required inpt" type="text" name="email" value="" />
			<label>Phone Number<span style="color:red;">*</span></label><input class="required inpt" type="text" name="phone" value="" />
			<!--  <input class="required inpt" type="text" name="subject" value="" /> -->
			<label>Comments<span style="color:red;">*</span></label><textarea class="textbox" name="message" rows="7" cols="90"></textarea>
			<label>Captcha 3+1 =<span style="color:red;">*</span> </label><input class="required captcha" type="text" name="answer" value="" />
			<label id="load"></label><input name="submit" type="submit" class="button black small" value="Send" />

                </form>
            </fieldset>
        <!--copy the code from here-->
        </div>


		<?php endif; ?>
        </div>

     

<aside id="secondary"><div id="sidebar"><?php dynamic_sidebar( 'Contact Widget Area' ); ?></div></aside>
</div>
</div>


<?php get_footer(); ?>