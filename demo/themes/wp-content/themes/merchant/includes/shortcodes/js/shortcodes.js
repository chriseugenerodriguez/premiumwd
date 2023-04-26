var $ = jQuery.noConflict();

var _onresize = function( f ) {
    jQuery(window).on( 'resize', f );
    //window.addEventListener( 'resize', f, false );
};


jQuery(document).ready(function($) {
    "use strict";
	initTabs();
    initAccordion();
    initAccordionContentLink();
	initButtonHover();
	initMessage();
	productSwiper();
	productSlider();
});

function initMessage() {
	$('.woocommerce-message .close').on('click', function(){
		$('.woocommerce-message').each(function(event) {
			$(this).fadeOut(500);
			return false;
		});
	});
}

function initButtonHover() {
    if($('.button').length) {
        $('.button').each(function() {

            //hover background color
            if(typeof $(this).data('hover-background-color') !== 'undefined' && $(this).data('hover-background-color') !== false) {
                var hover_background_color = $(this).data('hover-background-color');
                var initial_background_color = $(this).css('background-color');
                $(this).hover(
                function() {
                    $(this).css('background-color', hover_background_color);
                },
                function() {
                    $(this).css('background-color', initial_background_color);
                });
            }
            //hover color
            if(typeof $(this).data('hover-color') !== 'undefined' && $(this).data('hover-color') !== false) {
                var hover_color = $(this).data('hover-color');
                var initial_color = $(this).css('color');
                $(this).hover(
                    function() {
                        $(this).css('color', hover_color);
                    },
                    function() {
                        $(this).css('color', initial_color);
                    });
            }
        });
    }
}

function initAccordionContentLink() {
    "use strict";
    if ($(".accordion").length) {
        $(".accordion_holder .accordion_inner .accordion_content a").click(function() {
            if ($(this).attr("target") === "_blank") {
                window.open($(this).attr("href"), "_blank")
            } else {
            }
            return false
        })
    }
}

function initTabs() {
    "use strict";
    if ($(".tabs").length) {
        $(".tabs").appear(function() {
            $(".tabs").css("visibility", "visible")
        }, {
            accX: 0,
            accY: -100
        });
        var e = $(".tabs-nav");
        var t = e.children("li");
        e.each(function() {
            var e = $(this);
            e.next().children(".tab-content").stop(true, true).hide().first().show();
            e.children("li").first().addClass("active").stop(true, true).show()
        });
        t.on("click", function(e) {
            var t = $(this);
            t.siblings().removeClass("active").end().addClass("active");
            t.parent().next().children(".tab-content").stop(true, true).hide().siblings(t.find("a").attr("href")).fadeIn();
            e.preventDefault()
        })
    }
}

function initAccordion() {
    "use strict";
    if ($(".accordion_holder").length) {
        $(".accordion_holder").appear(function() {
            $(".accordion_holder").css("visibility", "visible")
        }, {
            accX: 0,
            accY: -100
        });
        if ($(".accordion").length) {
            $(".accordion").accordion({
                animate: "swing",
                collapsible: true,
                active: false,
                icons: "",
                heightStyle: "content"
            });
            $(".accordion").each(function() {
                var e = parseInt($(this).data("active-tab"));
                if (e !== "") {
                    e = e - 1;
                    $(this).accordion("option", "active", e)
                }
                var t = parseInt($(this).data("border-radius"));
                if (t !== "") {
                    $(this).find(".accordion_mark").css("border-radius", t + "px")
                }
                var n = $(this).data("collapsible") == "yes" ? true : false;
                $(this).accordion("option", "collapsible", n);
                $(this).accordion("option", "collapsible", n)
            })
        }
        $(".toggle").addClass("accordion ui-accordion ui-accordion-icons ui-widget ui-helper-reset").find(".title-holder").addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-top ui-corner-bottom").hover(function() {
            $(this).toggleClass("ui-state-hover")
        }).click(function() {
            $(this).toggleClass("ui-accordion-header-active ui-state-active ui-state-default ui-corner-bottom").next().toggleClass("ui-accordion-content-active").slideToggle(400);
            return false
        }).next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom").hide();
        $(".toggle").each(function() {
            var e = parseInt($(this).data("active-tab"));
            if (e !== "" && e >= 1) {
                e = e - 1;
                $(this).find(".ui-accordion-content").eq(e).show();
                $(this).find(".ui-accordion-header").eq(e).addClass("ui-state-active")
            }
        })
    }
}

function productSlider(){
	
	$products_sliders = $('.products-slider-wrapper, .categories-slider-wrapper');
	
	if( $.fn.owlCarousel && $products_sliders.length ) {
            $products_sliders.each(function(){
                var t = $(this);

                    var cols = t.data('columns') ? t.data('columns') : 4;
                    var autoplay = (t.attr('data-autoplay')=='true') ? 3000 : false;
                    var owl = t.find('.products').owlCarousel({
                        autoPlay: autoplay,
                        items : cols,
                        itemsDesktop : [1199,cols],
                        itemsDesktopSmall : [979,cols],
                        itemsTablet : [767, 2],
                        itemsMobile : [481, 2],
                    });

                    // Custom Navigation Events
                    t.on('click', '.es-nav-next', function(){
                        owl.trigger('owl.next');
                    });

                    t.on('click', '.es-nav-prev', function(){
                        owl.trigger('owl.prev');
                    });

                
            });
        }
	   	
}

function productSwiper(){
 /*************************
         * SWIPER SLIDER PRODUCTS
         *************************/
				
        $('.swiper-products').each( function(){
			
			$(this).closest('.swiper_container').css({
				left: -1 * ($(window).width() - $(this).closest('.swiper_container').parent().width()) / 2
			});
			$(this).closest('.swiper_container').width($(window).outerWidth());
			
            var slider = $(this),
                container = $(this).closest('.swiper_container'),
                slideOpacity = slider.find('.swiper-slide-image .opacity'),
                window_width = $(window).width(),

                items = slider.data('items'),
                overflow = slider.data('overflow'),
                autoplay = slider.data('autoplay'),

                swiper = container.swiper({
                    //Your options here:

                    mode:'horizontal',
                    autoplay: autoplay,
                    loop: true,
                    loopAdditionalSlides: 2,
                    slidesPerView : items,
                    calculateHeight : true,
                    grabCursor: true,
                    autoResize: true, //Sinc to Browser Resize/Resolution -> Important for Responsive
					preloadImages:true,
					updateOnImagesReady: true,
                });
				container.parent().css("min-height", "260px");
			imagesLoaded(container , function(){
				container.parent().height(container.outerHeight());
			});
            //Check Browser Resolution for All Browser
            if ( window.innerWidth > 767 ) {
                slider.parent().css('overflow', 'hidden');
            }

            if ( window.innerWidth < 768 && items != 2 ) {
                swiper.params.slidesPerView = 2;
               swiper.reInit();
            }
			swiper.swipeTo(1);
            //Change slider options on Browser Resize
            _onresize( function(){
				
				container.width($(window).width());
				container.css({
					left: -1 * ($(window).width() - container.parent().width()) / 2
				});
				imagesLoaded(container , function(){
					container.parent().height(container.outerHeight());
				});
				
                if ( window.innerWidth > 767 ) {
                    swiper.params.slidesPerView = items;
                    container.css('overflow', 'hidden');
                }
                else if(  window.innerWidth < 768 ) {
                    if( items != 2 ) {
                        swiper.params.slidesPerView = 2;
                    }
                    container.css('overflow', 'visisble');
                }
                else {
                    if( items != 1 ){
                        swiper.params.slidesPerView = 1;
                    }
                    container.css('overflow', 'hidden');
                }
		//		swiper.reInit();
            } );	
        });
		
}
