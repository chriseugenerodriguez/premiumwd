<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<script type="text/javascript">
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
</script>
<div class="container">
<section class="nine columns content">
<?php while ( have_posts() ): the_post(); ?>
<h1 class="post-title pad"><?php the_title(); ?></h1>
<div class="post-inner">
<div class="post-content pad">
  <div class="entry">
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php if (get_option('premiumwd_contact_show', 'true') == 'true'): ?>
    <div id="note"></div>
    <form id="ajax-contact-form" method="post" action="sendmail.php">
      <input placeholder="Name (required)" class="required inpt name" type="text" name="name" value="" />
      <input placeholder="Email (required)" class="required inpt email" type="text" name="email" value="" />
      <textarea placeholder="Message" class="textbox" name="message" rows="7" cols="90"></textarea>
      <input placeholder="Captcha 3+1 =" class="required captcha" type="text" name="answer" value="" />
      <label id="load"></label>
      <input name="submit" type="submit" class="button small left" style="color:#fff; background-color:#333;" value="Send" />
    </form>
    </fieldset>
    <?php endif; ?>
  </div>
</div>
</div>
</section>
<aside class="three columns clearfix">
  <div id="sidebar">
    <?php dynamic_sidebar( 'Contact Widget Area' ); ?>
  </div>
</aside>
</section>
<!--/.content-->
</div>
<?php get_footer(); ?>