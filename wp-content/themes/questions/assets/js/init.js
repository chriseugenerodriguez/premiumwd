var $ = jQuery.noConflict();

jQuery(document).ready(function() {
	"use strict";
	mobile();
	sidemenuNav();
	questions();
	buddypress();

});
jQuery(window).resize(function() {
	"use strict";
	scroller();
	mobile();
});

function buddypress() {
	$('body.bp-user .post-title').prependTo('#buddypress div#item-header div#item-header-content');	
	$('.dwqa-list-question .filter-bar .order, .question-signin').remove();
	$('#item-meta').prependTo('#item-body');
	
	$('#user-activity').addClass('fa fa-area-chart');
   $('#user-profile').addClass('fa fa-user');
   $('#user-questions').addClass('fa fa-question-circle');
   $('#user-settings').addClass('fa fa-cog');
   $('#user-messages').addClass('fa fa-envelope');
   $('#user-notifications').addClass('fa fa-comments-o');
	
}

function mobile() {
    if (window.innerWidth < 699 && $("body").attr("data-responsive") == 1) {
        $("body").addClass("mobile");
        $("header ul.menu").hide();
		$('#mobile-nav').show();
    } else {
        $("body").removeClass("mobile");
        $("header ul.menu").show();
        $("#mobile-nav").hide()
    }
    if (window.innerWidth < 699 && $("#theme-wrapper").hasClass("side-menu")) {
        $("#theme-wrapper").removeClass()
    } else {
        if (!$("#theme-wrapper").hasClass("side-menu")) {
            $(".hidden-sidebar").removeClass("side-menu")
       };
    }
};

function sidemenuNav() {
    $("header #mobile-nav, .hidden-sidebar a.close_side_menu").click(function() {
		$('html').toggleClass("overflow");
        $("#theme-wrapper, .hidden-sidebar").toggleClass("side-menu");
        return false
    });
    $(".hidden-sidebar ul.menu li").each(function() {
        if ($(this).find("> ul").length > 0) {
            $(this).addClass("sub-menu");
            $(this).find("> a").append('<span class="mobile-arrow"><i class="fa fa-angle-down"></i></span>')
        }
    });
    $('.hidden-sidebar ul.menu li:has(">ul") > a .mobile-arrow').click(function() {
        $(this).parent().parent().find("> ul").slideToggle();
        return false
    })
};




// Questions Page
function questions() {
	$('.g-recaptcha').css({
	'float':'left',
	'margin-bottom':'20px'
	});
	$('#registerform p').each(function(i){
		$(this).addClass('six columns');
	});
	for(var i = 0; i < $('#registerform p').length; i+=2) {
		$('#registerform p').slice(i, i+2).wrapAll('<div style="margin-bottom:20px;float:left;width:100%;"></div>');
	}
	
    $(".dwqa-container span.dwqa-author a, body .dwqa-container span.author a, .related-questions ul li a:last-child, .dwqa-container .dwqa-single-question .dwqa-title a, body .dwqa-container .dwqa-category a, .dwqa-container .dwqa-list-question .dwqa-meta span:last-child a").removeAttr("href").removeAttr("title");
    $('.dwqa-container .login-box').remove();
	    if ($('.dwqa-list-question .dwqa-comment strong').filter(function() {
            return $.trim($(this).text()) > 0
        }).parent(this).addClass('active'));
		  
		  $('body.submit-dwqa-question:not(.logged-in) #dwqa-submit-question-form').html('<p class="not-found">Sorry, please <a href="http://questions.premiumwd.com/login/?redirect_to=http%3A%2F%2Fquestions.premiumwd.com%2Fquestion%2F">Login</a> or <a href="http://questions.premiumwd.com/register/" rel="nofollow">Register</a> to submit question.</p>');
};

function scroller() {
    //Nano Scroller
    $("#search-form .scroll-bar .overflow").nanoScroller({
        alwaysVisible: true,
        contentClass: 'screen',
        preventPageScrolling: true
    });

    if ($(window).width() > 470) {
        $("html").niceScroll({
            scrollspeed: 60,
            mousescrollstep: 40,
            cursorwidth: 7,
            cursorborder: 0,
            cursorcolor: '#2D3032',
            cursorborderradius: 15,
            autohidemode: false,
            horizrailenabled: false,
            background: ""
        });
    }
}
          