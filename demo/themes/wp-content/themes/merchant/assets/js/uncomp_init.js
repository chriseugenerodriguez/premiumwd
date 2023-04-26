var c = 1, timer= "";
function genralScripts(){
	
	$("body").on("click" , ".close", function(){
		$(this).parent().fadeOut("slow");
		return false;
	});
	
	if($("tr.shipping .shipping-calculator-form").length > 0)
		$("tr.shipping .shipping-calculator-form").remove();
	
	$("body").on("updated_shipping_method", function(){
		if($("tr.shipping .shipping-calculator-form").length > 0)
			$("tr.shipping .shipping-calculator-form").remove();
	});
	
	if(jQuery(".cart_totals").length > 1){
			jQuery(".cart_totals:eq(0)").replaceWith(jQuery(".cart_totals:eq(1)"));
			jQuery(".cart_totals:gt(0)").remove();
	}

}

function headerslidermenu(){
	var selector = ".slider-container";

	if($(".rev_slider_wrapper").length > 0 && $(selector).length > 0){
	$("body").attr("data-revslider" , 1);
	var node, revid = ($(selector), "revapi" + $("body").data("revslider"));
	if(typeof revid != undefined){
	window[revid].bind("revolution.slide.onloaded", function() {
                    BackgroundCheck.init({
                        targets: "#main",
                        images: ".tp-bgimg",
                        minComplexity: 80,
                        maxDuration: 1500,
                        minOverlap: 0
                    })
                }), window[revid].bind("revolution.slide.onchange", function(e, data) {
                    node = ".rev_slider ul li:nth-child(" + data.slideIndex + ") .tp-bgimg";
                }), window[revid].bind("revolution.slide.onafterswap, revolution.slide.onafterswap", function() {
                    BackgroundCheck.set("images", node)
                })
	}
	}
}

function checkout() {
                $("#shippingsteps a").on("click", function() {
                    var that = $(this), target = that.data("target") ? $("#" + that.data("target")) : !1;
                    return target && ($("#shippingsteps li").removeClass("active"), that.parents("li").addClass("active"), 
                    $(".section").hide(), target.show()), !1;
                });
				// Fix
                $("#guestcheckout").on("click", function() {
					$("form.register").is(":visible") && $("form.register").find(".input-text").trigger("change"), 
                    0 === $("form.register").find(".woocommerce-invalid-required-field").length && $("form.register").eq(2).trigger("click").val(), !1;
					return $("#shippingsteps a").eq(1).trigger("click"), !1;
                });
				$(".continue_shipping").on("click", function() {
                    return $("form.checkout .billing").find(".input-text, select").trigger("change"), 
                    $("form.checkout .shipping_address").is(":visible") && $("form.checkout .shipping_address").find(".input-text, select").trigger("change"), 
                    0 === $("form.checkout").find(".woocommerce-invalid-required-field").length && $("#shippingsteps a").eq(2).trigger("click").val(), !1;
                });
				$("#ship-to-different-address-checkbox").on("change", function() {
                    return $(".shipping_address").slideToggle("slow", function() {
                        $(".shipping_address").is(":hidden") && $("form.checkout .shipping_address").find("p.form-row").removeClass("woocommerce-invalid-required-field");
                    }), !1;
                }); 
				
				$('.check-login .lost_password').text('Forgot?');
				$('.login-section form').show();
	if($(".create-account").length > 0){
		$("body").on("change", ".create-account #username", function(){
			$("#username-hidden").val($(this).val());
		});
		$("body").on("change", ".create-account #password", function(){
			$("#password-hidden").val($(this).val());
		});
	}
	
	$("body").on("updated_checkout", function(){
		$("#username-hidden").val($(".create-account #username").val());
		$("#password-hidden").val($(".create-account #password").val());
	});
				
	$("body").on("checkout_error", function(){
		if($(".checkout > .container .notice").prev(".woocommerce-message").length > 0)
			$(".checkout > .container .notice").prev(".woocommerce-message").remove();
			
		$('.woocommerce-checkout .woocommerce .woocommerce-message').prependTo('.checkout > .container');
		$('.woocommerce-checkout .woocommerce form.checkout .woocommerce-message').remove();
	});
	
	if($(".woocommerce aside.woocommerce-message").length > 0){
		$(".woocommerce aside.woocommerce-message").prependTo('.checkout > .container');
	}
		$("<h3 id='payment_heading'>Payment Method</h3>").insertAfter(".shop_table.woocommerce-checkout-review-order-table");
		$('#order_review').children(':not(#payment_heading, #payment) ').wrapAll('<div class="six columns" />');
		$('#order_review').children(':not(.six.columns) ').wrapAll('<div class="six columns" />');
};
function responsiveinit() {
    if ($('body').attr('data-responsive') == 1) {
        $('html').addClass('responsive');
    };
};

function addOrRemoveSF() {
	if($('#wpadminbar').is(':visible')) {
		if (window.innerWidth > 769) {
			$('header#main.sticky').css('top','32px');
		};
		if (window.innerWidth < 769 && window.innerWidth > 601) {
			$('header#main.sticky').css('top','46px');
		};	
		if (window.innerWidth < 600) {
			$('header#main.sticky').css('top','0px');
		};		
	};
    if (window.innerWidth < 769 && $("body").attr("data-responsive") == 1) {
        $("body").addClass("mobile");
        $(" #header-container").hide();
		$('.mobile #filter-commerce').show();
	$('#filter-commerce').click( function() {
		$('#sidebar').toggle();
	});
    } else {
        $("body").removeClass("mobile");
        $("#header-container").show();
		$('#sidebar').show();
    };
	if (window.innerWidth > 769 && $("#theme-wrapper").hasClass("side-menu")) {
        $("#theme-wrapper").removeClass();
		$('header').removeClass('side-menu');
		$('html').removeClass('overflow');
    } else {
    if (!$("#theme-wrapper").hasClass("side-menu")) {
            $("#mobile-menu").removeClass("side-menu")
        }
    }
	if (window.innerWidth < 450 && $("body").attr("data-responsive") == 1) {
	$('.shopping_bag .cart-subtotal td').attr('colspan','');
	$('.shopping_bag .cart-subtotal td:last-child').attr('colspan','2');
	$('.shopping_bag tbody tr.shipping td').attr('colspan','');
	$('.shopping_bag tbody tr.shipping td:last-child').attr('colspan','2');
	$('.shopping_bag .order-total td').attr('colspan','');
	$('.shopping_bag .order-total td:last-child').attr('colspan','2');
	}
	if (window.innerWidth > 451 && window.innerWidth < 768 && $("body").attr("data-responsive") == 1) {
	$('.shopping_bag .cart-subtotal td').attr('colspan','2');
	$('.shopping_bag tbody tr.shipping td').attr('colspan','2');
	$('.shopping_bag .order-total td').attr('colspan','2');
	}
	if (window.innerWidth > 769 && $("body").attr("data-responsive") == 1) {
	$('.shopping_bag .cart-subtotal td').attr('colspan','3');
	$('.shopping_bag tbody tr.shipping td').attr('colspan','3');
	$('.shopping_bag .order-total td').attr('colspan','3');
	}
};

function ScrollInit() {
	if (window.innerWidth > 769 && $('body').attr('data-scroll') == 1) {
		if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {} else{ 
		$("html").niceScroll({
			scrollspeed: 60,
			mousescrollstep: 40,
			cursorwidth: 7,
			cursorborder: 0,
			cursorcolor: "#444",
			cursorborderradius: 15,
			autohidemode: false,
			zindex: 99999,
			horizrailenabled: false
		});
		$("html").css("overflow-y", "hidden");
		}
	}
}

function mobileNav() {
	
    $("header #mobile-nav, #mobile-menu a.close_side_menu").click(function() {
        $("#theme-wrapper, #mobile-menu, header#main").toggleClass("side-menu");
		$('html').toggleClass("overflow");
        return false
    });
	$('#mobile-menu .inner div').contents().unwrap();
	$('#mobile-menu span.arrow, #mobile-menu span.sub-arrow').remove();
    $("#mobile-menu ul li").each(function() {
        if ($(this).find("> ul").length > 0) {
            $(this).addClass("sub-menu");
            $(this).find("> a").append('<span class="mobile-arrow"><i class="fa fa-angle-down"></i></span>')
        }
    });
    $('#mobile-menu ul li:has(">ul") > a .mobile-arrow').click(function() {
        $(this).parent().next("ul").slideToggle();
        return false
    })
    $("#mobile-menu ul li").each(function() {
        var e = $(this);
		$(this).find("ul").removeClass("premiumwd_mega_div");
        $(this).find("ul li").each(function(e, t) {
            if ($(this).children("a").attr("href") == "") {
				$(this).children("a").remove();
                var n = $(this).children("ul").html();
                $(this).parent().prepend(n);
                $(this).remove()
            }
        })
    });
};


function woocommerce() {

	$('.products .product.product-category').remove();
	
	// PRODUCT HOVER EFFECT
	if (window.innerWidth > 769) {
	$( 'ul.products li.has-gallery a .image-wrapper' ).hoverIntent( function() {
		$( this ).children( '.wp-post-image' ).removeClass( 'fadeIn' ).addClass( 'animated fadeOut' );
		$( this ).children( '.secondary-image' ).removeClass( 'fadeOut' ).addClass( 'animated fadeIn' );	
	}, function() {
		$( this ).children( '.wp-post-image' ).removeClass( 'fadeOut' ).addClass( 'fadeIn' );
		$( this ).children( '.secondary-image' ).removeClass( 'fadeIn' ).addClass( 'fadeOut' );
	});
	}
	
	if (window.innerWidth < 450) {
		$('.woocommerce-message a.button, .woocommerce-message i').remove();
	}

	// View Orders
	$('.woocommerce .view-orders').hide();
	$('.woocommerce li.orders').on('click', function() {
		$('.woocommerce .view-orders').show();
		$('.woocommerce .account-items').hide();
		return false;
	});
	$('.woocommerce .view-orders #backtoaccount').on('click', function() {
		$('.woocommerce .view-orders').hide();
		$('.woocommerce .account-items').show();
		return false;
	});
	// If account has download
	var count = $(".account-items li").length;
	if (count == '6' && window.innerWidth > 769 ) {
		$('.account-items li').css('width','16.67%');
	};
	if (count == '4' && window.innerWidth > 769 ) {
		$('.account-items li').css('width','25%');
	};

	// Checkout
	$('.woocommerce-checkout header nav.sub-menu, .woocommerce-checkout #main-nav ul li a, .woocommerce-checkout .account-holder ul li:not(.backtocart)').remove();
	$('.woocommerce .shop .three.columns').prepend('<span id="filter-commerce">Filter <i class="fa fa-reorder"></i></span>');
	
	$('.shopping_bag tbody tr.shipping td').attr('colspan','3');
	$('.shopping_bag tbody tr.shipping th').replaceWith('<td colspan=3>Shipping and Handling</td>');
		
	$('.items_found, form.woocommerce-ordering').wrapAll('<div class="catalog_top"></div>');
		
	$('#yith-wcwl-form h2, .woocommerce-cart #footer #footer-toggle').remove();
	if($('#customer_login').length){
		$('#customer_login').tabs();
	};
	$('.product_meta .posted_in, #yith-wcwl-popup-message, .yith-wcwl-add-to-wishlist .ajax-loading').remove();
    $('.product_meta .sku_wrapper').appendTo('.product .sharing .six.columns.share');
    $(".price_slider_wrapper").parents(".widget-container").addClass("widget_price_filter");

	// OWN CAROUSEL
	var sync1 = $(".images .slider");
	var sync2 = $(".thumbnails");
	sync1.owlCarousel({
		singleItem: true,
		slideSpeed: 600,
		navigation: true,
		pagination: false,
		autoHeight: true,
		afterAction: syncPosition,
		responsiveRefreshRate: 200,
	});
	sync2.owlCarousel({
		items: 4,
		itemsDesktop: false,
		itemsDesktopSmall: false,
		itemsTablet: [479, 3],
		itemsMobile: [320, 2],
		pagination: false,
		responsiveRefreshRate: 100,
		afterInit: function(el) {
			el.find(".owl-item").eq(0).addClass("synced");
		}
	});
	
	function syncPosition(el) {
		var current = this.currentItem;
		sync2.find(".owl-item").removeClass("synced").eq(current).addClass("synced")
		if (sync2.data("owlCarousel") !== undefined) {
			center(current)
		}
	}
	sync2.on("click", ".owl-item", function(e) {
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync1.trigger("owl.goTo", number);
	});
	
	function center(number) {
		var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for (var i in sync2visible) {
			if (num === sync2visible[i]) {
				var found = true;
			}
		}
		if (found === false) {
			if (num > sync2visible[sync2visible.length - 1]) {
				sync2.trigger("owl.goTo", num - sync2visible.length + 2)
			} else {
				if (num - 1 === -1) {
					num = 0;
				}
				sync2.trigger("owl.goTo", num);
			}
		} else if (num === sync2visible[sync2visible.length - 1]) {
			sync2.trigger("owl.goTo", sync2visible[1])
		} else if (num === sync2visible[0]) {
			sync2.trigger("owl.goTo", num - 1)
		}
	}
	
	// Disable Lightbox Mobile
	if (window.innerWidth < 769) {
		$('.owl-wrapper .owl-item a').removeClass('fresco zoom').removeAttr('href');
	}	
	// SHOPPING BAG
	$('.shopping_cart_dropdown').insertBefore('#theme-wrapper');
	$("header#main .woocommerce-cart, .shopping_cart_dropdown a.close_side_menu").click(function() {
        $("#theme-wrapper, .shopping_cart_dropdown, header#main").toggleClass("side-cart");
		if (window.innerWidth < 769) {
		$('html').toggleClass("overflow");
		}
        return false
    });

	// ACCORDION
	if($(".product_details_accordion").length){
		$(".product_details_accordion").accordion();
	};
    $(".accordion_link.design").trigger("click");
    $(".accordion_link span").click(function() {
        $(this).parent().trigger("click")
    });

	$('.content-product .product_meta').prepend('<div class="small_sep"></div>');
	$('.summary .stock.out-of-stock').replaceWith('<div class="purchase-buttons"><span class="button out-of-stock">Out of stock</span></div>');
	$('.yith-wcwl-add-to-wishlist').appendTo('.purchase-buttons');
	$('.yith-wcwl-add-button .add_to_wishlist').addClass('single_add_to_wishlist button alt');
	
	// PAGINATION
	$('.product .woocommerce-breadcrumb').wrapAll('<div class="row bread-nav"><div class="ten columns"></div><div class="two columns"><span></span></div></div>');
	$('.page-nav').appendTo('.product .bread-nav span');
	
	
	// REVIEW FORM
	var screenTop;
	$('.show_review_form').click(function () {
		if (window.innerWidth < 769) {
		screenTop =  $('html, body').animate({ scrollTop: $(".woocommerce .content-product").offset().top - 40 }, 300);
		} else {
		screenTop =  $('html, body').animate({ scrollTop: $(".woocommerce .content-product").offset().top - 200 }, 300);
		}
		$("#review_form_wrapper_overlay").css('top',0).fadeIn(500);
		
		
		$('.close_review_form').click(function () {
			$('#review_form_wrapper_overlay').fadeOut(500);
			return false;
		});
		return false;
	});	
		$('#review_form_wrapper_overlay_close').click(function () {		
			$("#review_form_wrapper_overlay").css('top',screenTop).fadeOut(500);				
	});
	
	// Review link scroll
	$('.woocommerce-review-link').click(function(){		
		$('.product-tabs').each(function(){
			$(this).find('#ui-id-5').trigger('click');
		});		
		if (window.innerWidth < 769) {
		$('html, body').animate({ scrollTop: $(".product_details_accordion .tab-title#ui-id-5").offset().top - 100 }, 400);
		} else {
		$('html, body').animate({ scrollTop: $(".product_details_accordion .tab-title#ui-id-5").offset().top - 220 }, 400);			
		}
		return false;
	})
	
	jQuery("body").on("updated_shipping_method", function(){
		
		$('.shopping_bag tbody tr.shipping td').attr('colspan','3');
		$('.shopping_bag tbody tr.shipping th').replaceWith('<td colspan=3>Shipping and Handling</td>');
				
		if (window.innerWidth > 451 && window.innerWidth < 768 && $("body").attr("data-responsive") == 1) {
		$('.shopping_bag .cart-subtotal td').attr('colspan','2');
		$('.shopping_bag tbody tr.shipping td').attr('colspan','2');
		$('.shopping_bag .order-total td').attr('colspan','2');
		}
		if (window.innerWidth > 769 && $("body").attr("data-responsive") == 1) {
		$('.shopping_bag .cart-subtotal td').attr('colspan','3');
		$('.shopping_bag tbody tr.shipping td').attr('colspan','3');
		$('.shopping_bag .order-total td').attr('colspan','3');
		}
		
		if(jQuery(".cart_totals").length > 1){
				jQuery(".cart_totals:eq(0)").replaceWith(jQuery(".cart_totals:eq(1)"));
				jQuery(".cart_totals:gt(0)").remove();
		}
		
	});
	
};

// PAGINATION
function setAjaxPagination() {
    jQuery("#pagination a").live("click", function() {
        var e = $(this);
        var t = jQuery(this).attr("href");
        if (checkClick == 0) {
            e.append('<i style="margin-left:10px;" class="fa fa-spinner fa-spin"></i>');
            checkClick = 1;
            jQuery.get(t, {}, function(e) {
                var t = jQuery("<div></div>").html(e);
                if (t.find("#post-area").length > 0) {
                    imagesLoaded(t.find("#post-area"), function() {
                        jQuery("#pagination").remove();
                        jQuery("#post-area").append(t.find("#post-area").html());
                        jQuery("#post-area").isotope("reloadItems").isotope();
                        //addFlexSlider(jQuery);
                        //addAudioPlayer();
                        checkClick = 0;
                        $(window).trigger("resize")
                    })
                }
            })
        }
        return false
    })
}
function lazyload() {
	if($('body').attr('data-lazy') == 1) {
		$("img").lazyload({threshold : 200});	
	}
}


var $ = jQuery.noConflict();
var $window = jQuery(window);
var windowSize = $window.width();
var checkClick = 0;
var timer = ""
jQuery(document).ready(function() {
    "use strict";
	responsiveinit();	
	mobileNav();
	woocommerce();
	addOrRemoveSF();
	ScrollInit();
	checkout();
	setAjaxPagination();
	headerslidermenu();
	lazyload();
	genralScripts();
});
jQuery(window).resize(function() {
    "use strict";
	addOrRemoveSF();
});
jQuery(window).load(function() {
	$(".loader").fadeOut("slow");
	//headerslidermenu();
});

jQuery(window).scroll(function(){
	if (window.innerWidth > 769) {
//		if($("body").hasClass("page-template-full-width-slider") && $("#main").hasClass("sticky") && $(this).scrollTop() > $(".rev_slider_wrapper").height()){
		if($("body").hasClass("page-template-full-width-slider") && $("#main").hasClass("sticky") && $(this).scrollTop() > 10){
			$("#main").addClass("scrolled");
		} else {
			$("#main").removeClass("scrolled");
		}
	}
});

jQuery(document).ready(function() {
$('<div style="text-align:center;"><span style="margin-right:20px;">Username: demo</span> <span>Password: demo</span></div>').appendTo('#customer_login');
});