function responsiveinit() {
    1 == $("body").attr("data-responsive") && $("html").addClass("responsive")
}

function addOrRemoveSF() {
    window.innerWidth < 769 && 1 == $("body").attr("data-responsive") ? ($("body").addClass("mobile"), $(" #header-container").hide()) : ($("body").removeClass("mobile"), $("#sidebar").show()), window.innerWidth > 769 && $("#theme-wrapper").hasClass("side-menu") ? ($("#theme-wrapper").removeClass(), $("header").removeClass("side-menu"), $("html").removeClass("overflow")) : $("#theme-wrapper").hasClass("side-menu") || $("#mobile-menu").removeClass("side-menu")
}

function mobileNav() {
    $("header #mobile-nav, #mobile-menu a.close_side_menu").click(function() {
        return $("#theme-wrapper, #mobile-menu, header#main").toggleClass("side-menu"), $(".mobile #mobile-nav ul.hamburger").toggleClass("checked"), $("html").toggleClass("overflow"), $("html, body").scrollTop("0"), $("header").removeClass("affix").addClass("affix-top"), !1
    }), $("#mobile-menu ul li").each(function() {
        $(this).find("> ul").length > 0 && ($(this).addClass("sub-menu"), $(this).find("> a").append('<span class="mobile-arrow"><i class="fa fa-angle-down"></i></span>'))
    }), $('#mobile-menu ul li:has(">ul") > a .mobile-arrow').click(function() {
        return $(this).parent().next("ul").slideToggle(), !1
    })
}

function portfolio() {
    function k(a) {
        var b = $(".single-portfolio-holder"),
            c = b.offset().left;
        $(".full-width-container.carousal").css({
            marginLeft: -9 - c + "px",
            marginRight: -9 - c + "px"
        }), a >= "770" ? j.hasClass("slick-initialized") || j.slick({
            slidesToShow: 1,
            cssEase: "ease-in-out",
            infinite: !1,
            adaptiveHeight: !1,
            autoplay: !1,
            dots: !0,
            prevArrow: "",
            nextArrow: ""
        }) : ($("#theme-wrapper:not(.fullscreen) .full-width-container .slick-list div").removeClass("twelve columns"), $("#theme-wrapper.fullscreen .full-width-container.carousal > div").removeClass("twelve columns"), j.hasClass("slick-initialized") && j.unslick())
    }

    function q() {
        setTimeout(function() {}, 3e3)
    }
    $("body").hasClass("single-portfolio") && $("header").hasClass("sticky") && $("header").removeClass("sticky");
    var b = ($(".single-portfolio-holder .content .row"), $(window).width());
    if ($(".single-portfolio .single-portfolio-holder").hasClass("full") && $(this).length) {
        $(".single-portfolio .single-portfolio-holder").parent().parent().removeClass("container");
        var c = $(".single-portfolio-holder .content .row").offset(),
            d = $(".single-portfolio header").outerHeight(!0) + 50;
        $(window).on("load resize", function() {
            $(window).width() > 740 && ($(".single-portfolio .page-container .details").hasClass("description-set-left") ? $(".single-portfolio-holder .content .row").css({
                marginTop: -d,
                marginRight: -40
            }) : $(".single-portfolio-holder .content .row").css({
                marginTop: -d,
                marginLeft: -40
            }))
        })
    }
    if ($(".single-portfolio-holder .details").hasClass("sticky") && $(".single-portfolio-holder .details").length) {
      $('.single-portfolio-holder .details.sticky').theiaStickySidebar();
        
    }
    if ($("body").hasClass("single-portfolio")) {
        var j = $("#theme-wrapper.fullscreen .full-width-container.carousal"),
            l = $(window).width();
        if ($(window).ready(k(l)).resize(function() {
                var a = $(window).width();
                k(a)
            }), !$(".single-portfolio #theme-wrapper").hasClass("fullscreen")) {
            var c = $(".single-portfolio-holder"),
                m = c.offset().left,
                n = b - (m + c.outerWidth());
            $(".page-container .carousal").css({
                marginLeft: -9 - m + "px",
                marginRight: -19 - n + "px"
            }), $(".page-container .carousal").slick({
                slidesToShow: 1,
                cssEase: "ease-in-out",
                infinite: !1,
                adaptiveHeight: !1,
                autoplay: !0,
                prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-long-arrow-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-long-arrow-right"></i></button>',
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: !0
                    }
                }]
            })
        }
    }
    var o = $("#portfolio"),
        p = function() {
            var a = o.width(),
                b = 1,
                c = 50;
            return a > 1200 ? b = 5 : a > 900 ? b = 3 : a > 600 ? b = 2 : a > 300 && (b = 1), c = Math.floor(a / b), o.find(".element").each(function() {
                var a = $(this),
                    b = a.attr("class").match(/item-w(\d)/),
                    d = a.attr("class").match(/item-h(\d)/),
                    e = b ? c * b[1] - 0 : c - 5,
                    f = d ? c * d[1] * 1 - 5 : .5 * c - 5;
                a.css({
                    width: e,
                    height: f
                })
            }), c
        };
    $("#portfolio-filters-inline ul a").on("click", function() {
        var a = $(this).attr("data-filter");
        return o.isotope({
            filter: a
        }, q()), $("#portfolio-filters-inline ul a").removeClass("active"), $(this).addClass("active"), !1
    }), o.imagesLoaded(function() {
        o.isotope();
        var a = o.find(".element");
        a.each(function(b) {
            setTimeout(function() {
                a.eq(b).addClass("post-loaded animate")
            }, 200 * (b + 1)), setTimeout(function() {
                a.eq(b).removeClass("post-loaded")
            }, 400 * (b + 1))
        })
    }), o.isotope({
        resizable: !0,
        itemSelector: ".element",
        layoutMode: "masonry",
        gutter: 0,
        masonry: {
            columnWidth: p(),
            gutterWidth: 0
        }
    })
}

function setAjaxPagination() {
    var a = $.ias({
        container: "#portfolio",
        item: ".element",
        pagination: "#pagination",
        next: ".next a",
        delay: 500
    });
    a.on("rendered", function(a) {
        var b = $(a);
        return b.imagesLoaded(function() {
            $("#portfolio").isotope("layout"), $("#portfolio").append(b).isotope("addItems", b), portfolio()
        }), !1
    }), a.extension(new IASSpinnerExtension({}))
}

function affix() {
    $("header.sticky").affix({
        offset: {
            top: 100,
            bottom: function() {
                return this.bottom = $(".copyrights").outerHeight(!0)
            }
        }
    })
}

function background() {
    $(".rev_slider_wrapper").length > 0 && 1 == $("#theme-wrapper").data("rev") && ($(".rev_slider_wrapper").bind("revolution.slide.onloaded", function() {
        BackgroundCheck.init({
            targets: "header.transparent.affix-top .logo h1, header.transparent.affix-top #menu-header li, header.transparent.affix-top ul.hamburger li",
            images: ".tp-bgimg",
            minComplexity: 80,
            maxDuration: 1500,
            minOverlap: 0
        })
    }), $(".rev_slider_wrapper").bind("revolution.slide.onchange", function(a, b) {
        node = ".rev_slider ul li:nth-child(" + b.slideIndex + ") .tp-bgimg"
    }), $(".rev_slider_wrapper").bind("revolution.slide.onafterswap, revolution.slide.onafterswap", function() {
        BackgroundCheck.set("images", node)
    })), $("#theme-wrapper").hasClass("fullscreen") && (BackgroundCheck.init({
        targets: "#theme-wrapper.fullscreen header .logo h1, #theme-wrapper.fullscreen .slick-dots li, #theme-wrapper.fullscreen header #menu-header li, #theme-wrapper.fullscreen .portfolio-pagination",
        images: ".full-width-container.carousal.slick-slider .slick-slide img",
        maxDuration: 1500,
        minOverlap: 0
    }), $(".full-width-container.carousal").on("swipe", function(a, b, c) {
        BackgroundCheck.init({
            targets: "#theme-wrapper.fullscreen header .logo h1, #theme-wrapper.fullscreen .slick-dots li, #theme-wrapper.fullscreen header #menu-header > li, #theme-wrapper.fullscreen .portfolio-pagination",
            images: ".full-width-container.carousal.slick-slider .slick-slide img",
            maxDuration: 1500,
            minOverlap: 0
        }), BackgroundCheck.refresh()
    })), $(window).scroll(function() {
        $(".rev_slider_wrapper .fullscreenbanner").css("opacity", 1 - $(window).scrollTop() / $(".rev_slider_wrapper .fullscreenbanner").height()), $(".single-post .full .portrait-wrap figure").css("opacity", 1 - $(window).scrollTop() / $(".single-post .full .portrait-wrap figure").height())
    }), $("#theme-wrapper").hasClass("full") && $(".single-post .full").length > 0 && 0 == $(document).scrollTop() && BackgroundCheck.init({
        targets: "#theme-wrapper.full header.affix-top .logo h1, #theme-wrapper.full header.affix-top #menu-header > li,  #theme-wrapper.full header.affix-top ul.hamburger, #theme-wrapper.full .entry-header h1, #theme-wrapper.full .meta-data li",
        images: ".single-post .full figure .image-container img",
        minComplexity: 80,
        maxDuration: 1500,
        minOverlap: 0
    }), $(window).on("load resize", function() {
        BackgroundCheck.refresh(), $(window).width() > 760 && ($("#theme-wrapper").hasClass("side-right") && $(".single-portfolio-holder").hasClass("full") && BackgroundCheck.init({
            targets: "header .logo h1",
            images: ".single-portfolio-holder .content .row > div img",
            minComplexity: 80,
            maxDuration: 1500,
            minOverlap: 0
        }), $("#theme-wrapper").hasClass("side-left") && $(".single-portfolio-holder").hasClass("full") && BackgroundCheck.init({
            targets: "header #menu-header > li",
            images: ".single-portfolio-holder .content .row > div img",
            minComplexity: 80,
            maxDuration: 1500,
            minOverlap: 0
        }))
    })
}

function lazyload() {
    1 == $("body").data("lazy") && $("img").lazyload({
        threshold: 200
    })
}

function backtop() {
    $(window).width() > 700 && ($(window).scroll(function() {
        $(this).scrollTop() > 200 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
    }), $(".back-to-top").click(function() {
        return $("html, body").animate({
            scrollTop: 0
        }, 600), !1
    }))
}

function aesthetics() {
    $(".isotope-item figure").find("br").remove(), $(".owl-nav .owl-prev, .owl-nav .owl-next").html("")
}

function blog() {
    $(window).width() > 800 ? !$(".single .single-content").parent("wp-caption").length > 0 ? $(".single .single-content img.size-full, .single .single-content img.size-large").parent().css({
        width: "1000px",
        marginLeft: "-130px"
    }) : $(".single .single-content img.size-full, .single .single-content img.size-large").css({
        width: "1000px",
        marginLeft: "-130px"
    }) : !$(".single .single-content").parent("wp-caption").length > 0 ? $(".single .single-content img.size-full, .single .single-content img.size-large").parent().css({
        width: "auto",
        margin: "0 -20px"
    }) : $(".single .single-content img.size-full, .single .single-content img.size-large").css({
        width: "auto",
        margin: "0 -20px"
    }), $(".single-post figure a").contents().unwrap(), $(".single-post .wrapper .full").parent().parent().addClass("full")
}
setAjaxPagination();
var $ = jQuery.noConflict(),
    $window = jQuery(window);
jQuery(document).ready(function() {
    "use strict";
    backtop(), mobileNav(), affix(), responsiveinit(), addOrRemoveSF(), lazyload(), portfolio(), blog(), background(), aesthetics()
}), jQuery(window).resize(function() {
    "use strict";
    blog(), addOrRemoveSF()
}), jQuery(window).scroll(function() {
    "use strict";
    background()
}), jQuery(window).load(function() {
    "use strict";
    $(".loader").fadeOut("slow")
});