function setHeight() {
    windowHeight = $(document).innerHeight();
    if (!$("#header-container").hasClass("fixed")) {
        $("#header-container").css("min-height", windowHeight)
    }
    $("#header-container #toggle-nav i").click(function() {
        $("#header-container").css("min-height", windowHeight)
    })
}

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
	 if (window.innerWidth > 1e3) {$('.toggle-filter i').toggle(function() {
	  $('.portfolio-title, #theme-wrapper #container').addClass('hide-filter');
	}, function() {
	  $('.portfolio-title, #theme-wrapper #container').removeClass('hide-filter');
	});
	 } 
	 if (window.innerWidth < 1e3 && $(".portfolio-title, #theme-wrapper #container").hasClass("hide-filter")) {
            $('.portfolio-title, #theme-wrapper #container').removeClass("hide-filter");
		}
}

function niceScrollInit() {
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
    $(".hidden-sidebar").niceScroll({
        cursoropacitymin: 0,
        cursoropacitymax: 0,
        horizrailenabled: false
    });
   // $("html").css("overflow-y", "hidden")
}

function mobileNav() {
    $("header #mobile-nav").click(function() {
        $("#mobile-menu").slideToggle(500);
        return false
    });
    $("#mobile-menu .container ul li").each(function() {
        if ($(this).find("> ul").length > 0) {
            $(this).addClass("sub-menu");
            $(this).find("> a").append('<span class="mobile-arrow"><i class="fa fa-angle-down"></i></span>')
        }
    });
    $('#mobile-menu .container ul li:has(">ul") > a .mobile-arrow').click(function() {
        $(this).parent().parent().find("> ul").slideToggle();
        return false
    })
}

function sidemenuNav() {
    $("#header-container #toggle-nav i, .hidden-sidebar a.close_side_menu").click(function() {
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
}

function portfoliosidebarscroll() {
    if ($(".container .four.columns").hasClass("portfolio_single_sidebar")) {
        if ($(".portfolio_single_sidebar").length > 0) {
            var e = $(".portfolio_single_sidebar"),
                t = $(window),
                n = e.offset(),
                r = 65;
            t.scroll(function() {
                if (t.scrollTop() > n.top) {
                    e.stop().animate({
                        marginTop: t.scrollTop() - n.top + r
                    })
                } else {
                    e.stop().animate({
                        marginTop: 0
                    })
                }
            })
        }
    }
}

function scrollicon() {
    var e = $(window).scrollTop();
    if ($(window).width() > 1020) {
        if (e > 100) {
            $("#to-top").show()
        } else {
            $("#to-top").hide()
        }
        $("#to-top").click(function() {
            $("body,html").stop().animate({
                scrollTop: 0
            }, 800, "easeOutCubic");
            return false
        })
    }
}

function piVertCenter() {
    $(".portfolio-items > .col").each(function() {
        var e = $(this).find(".work-item").height();
        var t = $(this).find(".vert-center").height(); - $(this).find(".work-info .vert-center").css("margin-top", e / 2 - t / 2 - 15)
    })
}

function portfoliohover() {
    $(".portfolio-items .col .work-item").hover(function() {
        $(this).find(".work-info .vert-center").stop().animate({
            "padding-top": 15
        }, 400, "easeOutCubic");
        $(this).find(".work-info, .work-info .vert-center *, .work-info > i").stop().animate({
            opacity: 1
        }, 250, "easeOutCubic");
        $(this).find(".work-info-bg").stop().animate({
            opacity: .88
        }, 250, "easeOutCubic")
    }, function() {
        $(this).find(".work-info .vert-center").stop().animate({
            "padding-top": 0
        }, 400, "easeOutCubic");
        $(this).find(".work-info, .work-info .vert-center *, .work-info > i").stop().animate({
            opacity: 0
        }, 250, "easeOutCubic");
        $(this).find(".work-info-bg").stop().animate({
            opacity: 0
        }, 250, "easeOutCubic")
    })
}

function portfolioisotope() {
    var e = $(this).find("a.active").html();
    if (typeof e == "undefined" || e.length == 0) e = $(this).attr("data-sortable-label");
    $(this).find("a#sort-portfolio span").html(e);
    $(this).find("> ul").slideUp(500, "easeOutExpo");
    $("#portfolio-filters-inline .nine ul li a").mousedown(function() {
        $("#portfolio-filters-inline .current-portfolio").html($(this).html())
    });
    if ($("body").hasClass("mobile") || navigator.userAgent.match(/(iPad|IEMobile)/)) {
        $("#portfolio-filters").unbind("mouseenter mouseleave");
        $("#portfolio-filters > a, #portfolio-filters ul li a").click(function() {
            $(this).parents("#portfolio-filters").find("> ul").slideToggle(600, "easeOutCubic")
        })
    }
    if ($portfolio_container.length > 0) {
        $("#portfolio-filters ul li a, #portfolio-filters-inline ul li a").click(function() {
            clearTimeout(clearIsoAnimation);
            $(".isotope, .isotope .isotope-item").css("transition-duration", "0.7s");
            clearIsoAnimation = setTimeout(function() {
                $(".isotope, .isotope .isotope-item").css("transition-duration", "0s")
            }, 700);
            var e = $(this).attr("data-filter");
            $portfolio_container.isotope({
                filter: e
            });
            $("#portfolio-filters-inline ul li a").removeClass("active");
            $(this).addClass("active");
            setTimeout(masonryZindex, 700);
            return false
        });
        $portfolio_container.imagesLoaded(function() {
            reLayout();
            masonryZindex();
            $window.resize(reLayout);
            $window.smartresize(masonryZindex);
            $portfolio_container.find(".loading").remove();
            $portfolio_container.find(" > article").css({
                visibility: "visible"
            })
        })
    }
}

function reLayout() {
    var e = getComputedStyle(document.body, ":after").getPropertyValue("content");
    var t;
    if (navigator.userAgent.match("MSIE 8") == null) {
        e = e.replace(/"/g, "")
    }
    var n = $(".portfolio-items").attr("data-col-num") == "elastic";
    if (window.innerWidth > 1600) {
        e = "five"
    } else if (window.innerWidth < 1600 && window.innerWidth > 990) {
        e = "four"
    } else if (window.innerWidth < 990) {
        e = "two"
    }
    switch (e) {
        case "five":
            n ? colWidth = 5 : colWidth = userDefinedColWidth;
            t = {
                columnWidth: $portfolio_container.width() / parseInt(colWidth)
            };
            break;
        case "four":
            n ? colWidth = 4 : colWidth = userDefinedColWidth;
            t = {
                columnWidth: $portfolio_container.width() / parseInt(colWidth)
            };
            break;
        case "three":
            n ? colWidth = 3 : colWidth = userDefinedColWidth;
            t = {
                columnWidth: $portfolio_container.width() / parseInt(colWidth)
            };
            break;
        case "two":
            t = {
                columnWidth: $portfolio_container.width() / 2
            };
            break;
        case "one":
            t = {
                columnWidth: $portfolio_container.width() / 1
            };
            break
    }
    var r = $('.portfolio-items .col.elastic-portfolio-item[class*="small"]:first img').height();
    var i = window.innerWidth > 470 ? 2 : 1;
    $('.portfolio-items .col.elastic-portfolio-item[class*="tall"] img').css("height", r * i);
    var s = $(".portfolio-items.masonry-items").length > 0 ? "masonry" : "fitRows";
    var o = $(".portfolio-items").attr("data-starting-filter") != "" && $(".portfolio-items").attr("data-starting-filter") != "default" ? "." + $(".portfolio-items").attr("data-starting-filter") : "*";
    if (o != "*") {
        $('#portfolio-filters ul a[data-filter="' + o + '"], #portfolio-filters-inline ul a[data-filter="' + o + '"]').click()
    }
    $portfolio_container.isotope({
        resizable: false,
        itemSelector: ".element",
        filter: o,
        layoutMode: s,
        masonry: t
    }).isotope("reLayout")
}

function masonryZindex() {
    var e = {};
    var t = {};
    $("body .portfolio-items .elastic-portfolio-item").each(function() {
        $matrix = matrixToArray($(this).css("transform"));
        e[$(this).index()] = $matrix[4]
    });
    var n = $.map(e, function(e) {
        return e
    });
    n = removeDuplicates(n);
    n.sort(function(e, t) {
        return e - t
    });
    for (var r = 0; r < n.length; r++) {
        t[n[r]] = r * 10
    }
    $.each(e, function(e, n) {
        var r;
        var i = n;
        $.each(t, function(e, t) {
            if (i == e) {
                r = t
            }
        });
        $("body .portfolio-items .elastic-portfolio-item:eq(" + e + ")").css("z-index", r)
    })
}

function matrixToArray(e) {
    return e.substr(7, e.length - 8).split(", ")
}

function removeDuplicates(e) {
    var t;
    var n = e.length;
    var r = [];
    var i = {};
    for (t = 0; t < n; t++) {
        i[e[t]] = 0
    }
    for (t in i) {
        r.push(t)
    }
    return r
}

function setAjaxPagination() {    
      var ias = $.ias({
            container: '#portfolio',
            item: '.element',
            pagination: '#pagination',
            next: '#pagination span a'
      });
      
      ias.on('rendered', function(items) {
            var $items = $(items);
                        $items.imagesLoaded(function(){
                            $("#portfolio").isotope("reLayout");
                            $("#portfolio").isotope("reloadItems").isotope();
                            $("#portfolio").append( $items ).isotope( 'addItems', $items );
                            reLayout();
                            masonryZindex();
                            portfoliohover();
                            piVertCenter();
                        });
                    return false;
      });
      ias.extension(new IASTriggerExtension({text:'Show more',html: '<div id="pagination"><div class="load_more_button_holder"> <span class="portfolio-button"><a>{text}</a></span> </div>'}));
}


function setBlogPagination() {
    jQuery("#post-area #pagination a").live("click", function() {
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
                        addFlexSlider(jQuery);
                        addAudioPlayer();
                        checkClick = 0;
                        $(window).trigger("resize")
                    })
                }
            })
        }
        return false
    })
}
var $ = jQuery.noConflict();
var $window = jQuery(window);
var windowSize = $window.width();
var $portfolio_container = $(".portfolio-items");
var clearIsoAnimation = null;
var checkClick = 0;
jQuery(document).ready(function(e) {
    "use strict";
    setBlogPagination();
    setAjaxPagination(); 
portfoliosidebarscroll();
    sidemenuNav();
    mobileNav();
    responsiveinit();
    niceScrollInit();
    masonryZindex();
    portfolioisotope();
    piVertCenter();
    portfoliohover();
    addOrRemoveSF();
    reLayout();
    setHeight();
    $portfolio_container.find(" > article").css({
        visibility: "hidden"
    })
});
jQuery(window).load(function(e) {
    "use strict";
    piVertCenter()
});
jQuery(window).resize(function(e) {
    "use strict";
    addOrRemoveSF();
    niceScrollInit();
    setHeight()
});
jQuery(window).smartresize(function(e) {
    piVertCenter()
});
jQuery(window).scroll(function(e) {
    "use strict";
    scrollicon()
});
setHeight();
var $smoothActive = $("body").attr("data-smooth-scrolling");
var $smoothCache = $smoothActive == 1 ? true : false;
if ($smoothActive == 1 && $(window).width() > 690 && $("body").outerHeight(true) > $(window).height()) {
    niceScrollInit()
} else {
    $("body").attr("data-smooth-scrolling", "0")
}(function(e, t) {
    var n = function(e, t, n) {
        var r;
        return function() {
            function i() {
                if (!n) e.apply(s, o);
                r = null
            }
            var s = this,
                o = arguments;
            if (r) clearTimeout(r);
            else if (n) e.apply(s, o);
            r = setTimeout(i, t || 100)
        }
    };
    jQuery.fn[t] = function(e) {
        return e ? this.bind("resize", n(e)) : this.trigger(t)
    }
})(jQuery, "smartresize")