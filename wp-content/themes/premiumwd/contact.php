<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<script type="text/javascript">  
/* <![CDATA[ */    
jQuery(document).ready(function($) {
	var close_note = $("#note");
	close_note.click(function () {
		jQuery("#note").slideUp(1000, function () {
			jQuery(this).hide();
		});
	});

    $("#ajax-contact-form").submit(function() {
        $('#load').append('<center><img src="<?php bloginfo( 'template_directory' ); ?>/email/images/ajax-loader.gif" alt="Currently Loading" id="loading" /></center>');

        var fem = $(this).serialize(),
			note = $('#note');
	
        $.ajax({
            type: "POST",
            url: "<?php bloginfo( 'url' ); ?>?action=sendmail&"+fem,
            success: function(msg) {
				if ( note.height() ) {			
					note.slideUp(1000, function() {
						$(this).hide();
					});
				} 
				else note.hide();

				$('#loading').fadeOut(300, function() {
					$(this).remove();
							if(msg === 'OK') {   $('input').val(""); $('textarea').val(""); }	
					// Message Sent? Show the 'Thank You' message and hide the form
					result = (msg === 'OK') ? '<div class="success">Your message has been sent. Thank you!</div>' : msg;

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

<!-- Margin -->


  <section id="content">
    <div class="central">
      <hgroup>
        <h1>Here is how to get in touch</h1>
        <h2>Before you send us your questions, please take a look at any of the options below!</h2>
      </hgroup>
    </div>
    <div class="container">
      <section id="build" class="central">
        <ul id="tools">
          <li class="four columns"> <a class="contact-click" href="#presale">
            <div class="inner"> <i class="fa fa-envelope-o"></i>
              <h2>Pre-Sale Questions</h2>
              <p>Any questions regarding our themes, and or unsure about specific features and need some help? Please click here to get started and fill out our form.</p>
            </div>
            </a> </li>
          <li class="four columns"> <a target="_blank" href="http://help.premiumwd.com/">
            <div class="inner"> <i class="fa fa-gears"></i>
              <h2>Technical Issue</h2>
              <p>Need help with setting up your theme? If you have problems setting it up or if you encountered a bug, please visit our <b>support center</b> for help.</p>
            </div>
            </a> </li>
          <li class="four columns"> <a target="_blank" href="http://help.premiumwd.com/guides/pre-purchase/frequently-asked-questions/">
            <div class="inner"> <i class="fa fa-question-circle"></i>
              <h2>General Questions</h2>
              <p>If you need some general questions answered regarding purchasing, support, and or anything else, please check out our <b>FAQ</b> for more information.</p>
            </div>
            </a> </li>
        </ul>
      </section>
    </div>
    <div class="container" id="class-contact">
    <div class="nine columns"> <a name="presale"></a>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
      <!--copy the code from here-->
      <div id="contactform"> 
        
        <!--begin:notice message block-->
        <div id="note"></div>
        <!--begin:notice message block-->
        
        <form id="ajax-contact-form" method="post" action="email/sendmail.php">
          <input placeholder="Name" class="required inpt" type="text" name="name" value="" />
          <input placeholder="E-mail" class="required inpt" type="text" name="email" value="" />
          <!--  <input class="required inpt" type="text" name="subject" value="" /> -->
          <textarea placeholder="Comments" class="textbox" name="message" rows="6" cols="30"></textarea>
          <input placeholder="Captcha 3+1 =" class="required captcha" type="text" name="answer" value="" />
          <br/>
          <br/>
          <label id="load"></label>
          <input name="submit" type="submit" class="button2 small" id="button2" value="Send" />
        </form>
        </fieldset>
      </div>
    </div>
    
    <!-- Single Page Container--> 
    
    <!-- Margin -->
  <aside class="three columns clearfix">
    <div id="sidebar">
      <?php dynamic_sidebar( 'Contact Page' ); ?>
    </div>
  </aside>
    
  </section>

<?php get_footer(); ?>