	jQuery(document).ready(function ($) {

 //Scroll
    
	   $(window).scroll(function(){
            if (jQuery(this).scrollTop() > 100) {$('.scrollup').fadeIn();
            } else {$('.scrollup').fadeOut();
            }
        });$('.scrollup').click(function(){$("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
 
    	

	

	 	 function addOrRemoveSF() {
		 if (window.innerWidth < 960 && $('body').attr('data-responsive') == '1') {
			 $('body').addClass('mobile');
			 $('header nav#access').hide();
			 $('header').css('position','relative');
			 $('#main').css('padding-top','0px');
			 $('#toggle-nav').show();
		 } else {
			 $('body').removeClass('mobile');
			 $('header nav#access').show();
			 $('#mobile-menu').hide();
			 $('#toggle-nav').hide();
			 //recalc height of dropdown arrow
			 $('.mobile-arrows').css('height', $('a.sf-with-ul').height());
		 }
	 }
	 $(document).ready(addOrRemoveSF);
	 $(window).resize(addOrRemoveSF);
	
	 function SFArrows() {
		 //set height of dropdown arrow
		 $('.mobile-arrows').css('height', $('a.sf-with-ul').height());
	 }
	 SFArrows();
	
	
		//responsive nav
	$('#toggle-nav').click(function () {
		$('#mobile-menu').stop(true, true).slideToggle(500);
		return false;
	});
	////append dropdown indicators / give classes
	$('#mobile-menu .container ul li').each(function () {
		if ($(this).find('> ul').length > 0) {
			$(this).addClass('sub-menu');
			$(this).find('> a').append('<span class="mobile-arrow"><i class="icon-chevron-down icon-white"></i></span>');
		}
	});
	////events
	$('#mobile-menu .container ul li:has(">ul") > a .mobile-arrow').click(function () {
		$(this).parent().parent().toggleClass('open');
		$(this).parent().parent().find('> ul').stop(true, true).slideToggle();
		return false;
	}); 
 
	
	});