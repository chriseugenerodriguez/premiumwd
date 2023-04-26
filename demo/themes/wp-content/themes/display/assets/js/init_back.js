function responsiveinit() {
    if ($("body").attr("data-responsive") == 1) {
        $("html").addClass("responsive")
    }
}

function addOrRemoveSF() {
    if (window.innerWidth < 1e3 && $("body").attr("data-responsive") == 1) {
        $("body").addClass("mobile");
        $(".hidden-sidebar, #header-container").hide()
    } else {
        $("body").removeClass("mobile");
        $(".hidden-sidebar, #header-container").show();
        $("#mobile-menu").hide()
    }
    if (window.innerWidth < 1e3 && $("#theme-wrapper").hasClass("side-menu")) {
        $("#theme-wrapper").removeClass()
    } else {
        if (!$("#theme-wrapper").hasClass("side-menu")) {
            $(".hidden-sidebar").removeClass("side-menu")
        }
    }
    $('img').lazyload({threshold : 200});
}


function mobileNav() {
    $("header #mobile-nav").toggle(function() {
        $("#mobile-menu").slideToggle(600).show();
		$('#mobile-nav svg g rect').attr('fill','#333');
		 $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        return false
    }, function() {		
		$("#mobile-menu").slideToggle().hide(600);
		$('#mobile-nav svg g rect').attr('fill','#999');
	});
    $("#mobile-menu ul li").each(function() {
        if ($(this).find("> ul").length > 0) {
            $(this).addClass("sub-menu");
            $(this).find("> a").append('<span class="mobile-arrow"><i class="fa fa-angle-down"></i></span>')
        }
    });
    $('#mobile-menu ul li:has(">ul") > a .mobile-arrow').click(function() {
        $(this).parent().parent().find("> ul").slideToggle();
		 $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        return false
    });
}

function portfolioNav() {
	 $('#portfolio-filters-inline').addClass('hide-filter');
	 $('#toggle-nav svg.filter').toggle(function() {
	    $("html, body").animate({scrollTop: $('#theme-wrapper').offset().top - 40}, 600)
	  $('#portfolio-filters-inline').removeClass('hide-filter');
	  		$('#toggle-nav svg g rect').attr('fill','#333');
		 return false;
	}, function() {
	  $('#portfolio-filters-inline').addClass('hide-filter');
				$('#toggle-nav svg g rect').attr('fill','#999');
		});
	 
	 $('.page-template-portfolio #toggle-nav .filter').show();
}
function portfolioCenter() {
	 	$(".isotope-item figure").each(function() {
        	var e = $(this).find("img").height();
        	var t = $(this).find("figcaption a").height();
			console.log(e,t); 
			$(this).find("figcaption a").css("top", (e - t)/2)
    	});
}
	setInterval(portfolioCenter, 1000);	


var $ = jQuery.noConflict();
var $window = jQuery(window);

jQuery(document).ready(function($) {
    "use strict";
    portfolioNav();
    mobileNav();
    responsiveinit();
    addOrRemoveSF();
    portfolioCenter();
});
jQuery(window).resize(function($) {
    "use strict";
    addOrRemoveSF();
    portfolioCenter();
});
