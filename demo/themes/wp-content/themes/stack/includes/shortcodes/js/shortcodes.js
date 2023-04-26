// Appear JS
(function(e){function u(){r=false;for(var n=0,i=t.length;n<i;n++){var s=e(t[n]).filter(function(){return e(this).is(":appeared")});s.trigger("appear",[s]);if(o){var u=o.not(s);u.trigger("disappear",[u])}o=s}}var t=[];var n=false;var r=false;var i={interval:250,force_process:false};var s=e(window);var o;e.expr[":"]["appeared"]=function(t){var n=e(t);if(!n.is(":visible")){return false}var r=s.scrollLeft();var i=s.scrollTop();var o=n.offset();var u=o.left;var a=o.top;if(a+n.height()>=i&&a-(n.data("appear-top-offset")||0)<=i+s.height()&&u+n.width()>=r&&u-(n.data("appear-left-offset")||0)<=r+s.width()){return true}else{return false}};e.fn.extend({appear:function(s){var o=e.extend({},i,s||{});var a=this.selector||this;if(!n){var f=function(){if(r){return}r=true;setTimeout(u,o.interval)};e(window).scroll(f).resize(f);n=true}if(o.force_process){setTimeout(u,o.interval)}t.push(a);return e(a)}});e.extend({force_appear:function(){if(n){u();return true}return false}})})(jQuery)


var $ = jQuery.noConflict();

jQuery(document).ready(function($) {
    "use strict";
	initTabs();
    initCounter();
    initProgressBars();
    initListAnimation();
    initAccordion();
    initAccordionContentLink();
    initProgressBarsIcon();
    initProgressBarsVertical();
    initIconWithTextAnimation();
	initButtonHover();
});


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

function initIconWithTextAnimation() {
    "use strict";
    if ($(".icon_animation").length > 0 && $(".no_animation_on_touch").length === 0) {
        $(".icon_animation").each(function() {
            $(this).appear(function() {
                $(this).addClass("show_animation")
            }, {
                accX: 0,
                accY: -200
            })
        })
    }
}

function countAnimatedTextIconPerRow() {
    "use strict";
    if ($(".animated_icons_with_text").length) {
        $(".animated_icons_with_text").each(function() {
            var e = $(this);
            var t = e.height();
            var n = e.width();
            var r;
            var i = e.find(".animated_icon_with_text_holder").width() + 1;
            var s = e.find(".animated_icon_with_text_holder").length;
            e.find(".animated_icon_with_text_holder").each(function() {
                r = r > $(this).height() ? r : $(this).height()
            });
            r = r + 30;
            var o = Math.ceil(n / i);
            var u = Math.floor(s / o);
            var a = s - o * u;
            if (a === 0) {
                a = o
            }
            e.find(".animated_icon_with_text_holder").removeClass("border-bottom-none");
            var f = s - a - 1;
            e.find(".animated_icon_with_text_holder:gt(" + f + ")").addClass("border-bottom-none")
        })
    }
}


function initProgressBarsVertical() {
    "use strict";
    if ($(".progress_bars_vertical").length) {
        $(".progress_bars_vertical").each(function() {
            $(this).appear(function() {
                initToCounterVerticalProgressBar($(this));
                var e = $(this).find(".progress_content").data("percentage");
                $(this).find(".progress_content").css("height", "0%");
                $(this).find(".progress_content").animate({
                    height: e + "%"
                }, 1500)
            }, {
                accX: 0,
                accY: -200
            })
        })
    }
}

function initToCounterVerticalProgressBar(e) {
    "use strict";
    if (e.find(".progress_number span").length) {
        e.find(".progress_number span").each(function() {
            var e = parseFloat($(this).text());
            $(this).countTo({
                from: 0,
                to: e,
                speed: 1500,
                refreshInterval: 50
            })
        })
    }
}

function initProgressBarsIcon() {
    "use strict";
    if ($(".progress_bars_icons_holder").length) {
        $(".progress_bars_icons_holder").each(function() {
            var e = $(this);
            e.appear(function() {
                e.find(".progress_bars_icons").css("opacity", "1");
                e.find(".progress_bars_icons").each(function() {
                    var e = $(this).find(".progress_bars_icons_inner").data("number");
                    var t = $(this).find(".progress_bars_icons_inner").data("size");
                    if (t !== "") {
                        $(this).find(".progress_bars_icons_inner.custom_size .bar").css({
                            width: t + "px",
                            height: t + "px"
                        });
                        $(this).find(".progress_bars_icons_inner.custom_size .bar .fa-stack").css({
                            "font-size": t / 2 + "px"
                        })
                    }
                    var n = $(this).find(".bar");
                    n.each(function(t) {
                        if (t < e) {
                            var r = (t + 1) * 150;
                            timeOuts[t] = setTimeout(function() {
                                $(n[t]).addClass("active")
                            }, r)
                        }
                    })
                })
            }, {
                accX: 0,
                accY: -200
            })
        })
    }
}

function initAccordionContentLink() {
    "use strict";
    if ($(".accordion").length) {
        $(".accordion_holder .accordion_inner .accordion_content a").click(function() {
            if ($(this).attr("target") === "_blank") {
                window.open($(this).attr("href"), "_blank")
            } else {
                window.open($(this).attr("href"), "_self")
            }
            return false
        })
    }
}

function initServiceAnimation() {
    "use strict";
    if ($(".fade_in_circle_holder").length > 0 && $(".no_animation_on_touch").length === 0) {
        $(".fade_in_circle_holder").each(function() {
            $(this).appear(function() {
                $(this).addClass("animate_circle")
            }, {
                accX: 0,
                accY: -200
            })
        })
    }
}

function initToCounterPieChart(e) {
    "use strict";
    $(e).css("opacity", "1");
    var t = parseFloat($(e).find(".tocounter").text());
    $(e).find(".tocounter").countTo({
        from: 0,
        to: t,
        speed: 1500,
        refreshInterval: 50
    })
}

function initPieChartWithIcon() {
    "use strict";
    if ($(".percentage_with_icon").length) {
        $(".percentage_with_icon").each(function() {
            var e = piechartcolor;
            if ($(this).data("active") !== "") {
                e = $(this).data("active")
            }
            var t = "#eeeeee";
            if ($(this).data("noactive") !== "") {
                t = $(this).data("noactive")
            }
            var n = 10;
            if ($(this).data("linewidth") !== "") {
                n = $(this).data("linewidth")
            }
            var r = 174;
            $(this).appear(function() {
                $(this).parent().css("opacity", "1");
                $(this).css("opacity", "1");
                $(this).easyPieChart({
                    barColor: e,
                    trackColor: t,
                    scaleColor: false,
                    lineCap: "butt",
                    lineWidth: n,
                    animate: 1500,
                    size: r
                })
            }, {
                accX: 0,
                accY: -200
            })
        })
    }
}

function initListAnimation() {
    "use strict";
    if ($(".animate_list").length > 0 && $(".no_animation_on_touch").length === 0) {
        $(".animate_list").each(function() {
            $(this).appear(function() {
                $(this).find("li").each(function(e) {
                    var t = $(this);
                    setTimeout(function() {
                        t.animate({
                            opacity: 1,
                            top: 0
                        }, 1500)
                    }, 100 * e)
                })
            }, {
                accX: 0,
                accY: -200
            })
        })
    }
}

function initToCounterHorizontalProgressBar(e) {
    "use strict";
    var t = parseFloat(e.find(".progress_content").data("percentage"));
    if (e.find(".progress_number span").length) {
        e.find(".progress_number span").each(function() {
            $(this).parents(".progress_number_wrapper").css("opacity", "1");
            $(this).countTo({
                from: 0,
                to: t,
                speed: 1500,
                refreshInterval: 50
            })
        })
    }
}

function initProgressBars() {
    "use strict";
    if ($(".progress_bar").length) {
        $(".progress_bar").each(function() {
            $(this).appear(function() {
                initToCounterHorizontalProgressBar($(this));
                var e = $(this).find(".progress_content").data("percentage");
                $(this).find(".progress_content").css("width", "0%");
                $(this).find(".progress_content").animate({
                    width: e + "%"
                }, 1500);
                $(this).find(".progress_number_wrapper").css("width", "0%");
                $(this).find(".progress_number_wrapper").animate({
                    width: e + "%"
                }, 1500)
            }, {
                accX: 0,
                accY: -200
            })
        })
    }
}

function initCounter() {
    "use strict";
    if ($(".counter.random").length) {
        $(".counter.random").each(function() {
            if (!$(this).hasClass("executed")) {
                $(this).addClass("executed");
                $(this).appear(function() {
                    $(this).parent().css("opacity", "1");
                    $(this).absoluteCounter({
                        speed: 2e3,
                        fadeInDelay: 1e3
                    })
                }, {
                    accX: 0,
                    accY: -200
                })
            }
        })
    }
}

function initToCounter() {
    "use strict";
    if ($(".counter.zero").length) {
        $(".counter.zero").each(function() {
            if (!$(this).hasClass("executed")) {
                $(this).addClass("executed");
                $(this).appear(function() {
                    $(this).parent().css("opacity", "1");
                    var e = parseFloat($(this).text());
                    $(this).countTo({
                        from: 0,
                        to: e,
                        speed: 1500,
                        refreshInterval: 100
                    })
                }, {
                    accX: 0,
                    accY: -200
                })
            }
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

function initAccordionContentLink() {
    "use strict";
    if ($(".accordion").length) {
        $(".accordion_holder .accordion_inner .accordion_content a").click(function() {
            if ($(this).attr("target") === "_blank") {
                window.open($(this).attr("href"), "_blank")
            } else {
                window.open($(this).attr("href"), "_self")
            }
            return false
        })
    }
}

	
	