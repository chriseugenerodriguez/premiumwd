!function(e){function r(){o=!1;for(var r=0,t=i.length;t>r;r++){var n=e(i[r]).filter(function(){return e(this).is(":appeared")});if(n.trigger("appear",[n]),p[r]){var a=p[r].not(n);a.trigger("disappear",[a])}p[r]=n}}function t(e){i.push(e),p.push()}var i=[],n=!1,o=!1,a={interval:250,force_process:!1},f=e(window),p=[];e.expr[":"].appeared=function(r){var t=e(r);if(!t.is(":visible"))return!1;var i=f.scrollLeft(),n=f.scrollTop(),o=t.offset(),a=o.left,p=o.top;return p+t.height()>=n&&p-(t.data("appear-top-offset")||0)<=n+f.height()&&a+t.width()>=i&&a-(t.data("appear-left-offset")||0)<=i+f.width()?!0:!1},e.fn.extend({appear:function(i){var f=e.extend({},a,i||{}),p=this.selector||this;if(!n){var u=function(){o||(o=!0,setTimeout(r,f.interval))};e(window).scroll(u).resize(u),n=!0}return f.force_process&&setTimeout(r,f.interval),t(p),e(p)}}),e.extend({force_appear:function(){return n?(r(),!0):!1}})}(function(){return"undefined"!=typeof module?require("jquery"):jQuery}());
var $ = jQuery.noConflict();

jQuery(document).ready(function($) {
    "use strict";
	initTabs();
    initAccordion();
    initAccordionContentLink();
	initButtonHover();
	initSlider();
});
function initSlider(){
	$('.owl-buttons .owl-prev, .owl-buttons .owl-next').html('');
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
                window.open($(this).attr("href"), "_self")
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

	
	