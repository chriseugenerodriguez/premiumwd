var $ = jQuery.noConflict();

jQuery(document).ready(function() {
	"use strict";
	mobile();
	faq();
	docs();
	scroller();
	video();	
	sidemenuNav();

});
jQuery(window).resize(function() {
	"use strict";
	scroller();
	mobile();
});
jQuery(window).load(function() {
	 if (window.innerWidth < 470) {
        $('body').addClass('loaded');
	 };
})

function mobile() {
    if (window.innerWidth < 699 && $("body").attr("data-responsive") == 1) {
        $("body").addClass("mobile");
        $("header ul.menu, .search-box i.fa-angle-down").hide();
		$('#mobile-nav').show();
    } else {
        $("body").removeClass("mobile");
        $("header ul.menu, .search-box i.fa-angle-down").show();
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
        $("#theme-wrapper, .hidden-sidebar").toggleClass("side-menu");
		$('html').toggleClass("overflow");
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
// VIDEO
function video() {
	$('#video-main > div').hide();
	$('#video-main #wordpress-com-wordpress-org').show();
	
	// ISOTOPE
		var $container = $('#video-page #video-filter ul#portfolio'); //The ID for the list with all the blog posts
		$container.isotope({ //Isotope options, 'item' matches the class in the PHP
		itemSelector : '.item',
		   layoutMode : 'masonry'
		});
		var $optionSets = $('#video-page #video-filter #filter'),
		$optionLinks = $optionSets.find('a');
		$optionLinks.click(function(){
			var $this = $(this);
			if ( $this.hasClass('current') ) {
			  return false;
			}
			var $optionSet = $this.parents('#filter');
			$optionSets.find('.current').removeClass('current');
			$this.addClass('current');
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			return false;
		});
		
		// LOAD VIDEO ON CLICK
	    if ($('.video-col #video-filter #portfolio').length) {
		$('.video-col #video-filter #portfolio li a').click(function(){
			$('.video-col #video-filter #portfolio li').removeClass("active");
			$(this).parent("li").addClass("active");
			var videoID = $(this).parent("li").attr("rel");
			$(".video iframe").attr("src" , "");
			$(".video-tab").hide();
			$("#"+videoID).show();
			$("#"+videoID+" iframe").attr("src" , $("#"+videoID+" iframe").attr("data-video"));
			//return false;
		});
		
		var check_tab = document.URL.split("#");
		check_tab = "#"+check_tab[1];
		$("a[href='"+check_tab+"']").click();
    }; // End IF Statement	
};


function faq() {
// FAQ
    $(".accordion-content").hide();
    $('.accordion-trigger').click(function() {
        $(this).parent(".accordion-panel").addClass("panel-active");
        $(this).next(".accordion-content").show();
        $(this).parent().is('.panel-active');
        // Give the open panel the .panel-active class
        $(".accordion-content").hide();
        $(".accordion-panel").removeClass("panel-active");

        $(this).parent(".accordion-panel").addClass("panel-active");
        // Slide all content areas closed
        $(this).next(".accordion-content").show();

    });
};

function docs() {
	$('#sidebar').sticky({topSpacing:40});
	
	// DOCS
    $('#content .search').find('br').remove();
    // Docs Search	
    $('#search-form #suggestions').hide();
    $("#search-form #query").keyup(function() {

        var $charaters = $(this).val().length;

        if ($charaters >= 3) {
            $('#search-form #suggestions').fadeIn();
            var url = $("#search-form #url").val();
            var data = $("#search-form").serialize();

            $.get(url, data, function(response) {
                $("#search-form #suggestions").html(response);
            });
        }
    });

    $('#search-form > .subpage, #search-form .scroll-bar').hide();
    $('.search-box #category').on('click', function(e) {
        $('#search-form #suggestions').fadeOut();
        $('#search-form > .subpage, #search-form .scroll-bar').fadeIn();
        $('html').on('click', function(e) {
            $('#search-form > .subpage, #search-form .scroll-bar').fadeOut();
        });
        return false;
    });

    $("ul.subpage li").click(function() {
        $('.search-box #query').val('').focus();
        var data_value = $(this).attr("data-value");
        $('.search-box #category').val($(this).find('label').text());
        $("#search-form #subpage").val(data_value).trigger("change");
        $('#search-form > .subpage, #search-form .scroll-bar').fadeOut();
        return false;

    });

    $("#search-form #subpage").change(function() {

        var value = $(this).val();
        var post_type = 'page';

        if (value == 3362) post_type = 'dwqa-question';
        else if (value == 1467) post_type = 'video';

        $("#search-form input[name='post_type']").val(post_type);

        var $charaters = $("#search-form #query").val().length;
        if ($charaters >= 3) {

            var url = $("#search-form #url").val();
            var data = $("#search-form").serialize();

            $.get(url, data, function(response) {
                $("#search-form #suggestions").html(response);
            });
        }
    });
    $("#questions_user_form select").change(function() {
        $("#questions_user_form").submit();
    });
	
	if(window.innerWidth <= 700){
			$("#content #category, ul.subpage").hide();	
			$('.search-box #category').val('Select a Category');
			$("#search-form input[name='post_type']").val('page');
			$("#search-form #subpage").val('');
		} else {
			$("#content #category, ul.subpage").show();	
		}
	
	$(window).resize(function(){
		if(window.innerWidth <= 700){
			$("#content #category, ul.subpage").hide();
			$('.search-box #category').val('Select a Category');
			$("#search-form input[name='post_type']").val('page');
			$("#search-form #subpage").val('').trigger("change");
		} else {
			$("#content #category, ul.subpage").show();	
		}
	});
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

	
                            