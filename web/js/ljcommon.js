/**
 * Created by JLI on 15-5-6.
 */

(function ($) {
    $.fn.showFocusImg = function () {
        var $this = $(this);
        var slides = $this.find('.list').children();
        var indicators = $this.find('.num').children();
        if ($this.length == 0) return false;

        var len = slides.length;
        var index = 1;
        var imgEvent = function () {
            slides.eq(index).fadeIn(2000).siblings().fadeOut(2000);
            indicators.eq(index).addClass('on').siblings().removeClass('on');
            index++;
            if (index == len) {
                index = 0;
            }
        }
        var mouseNumber = function () {
            $(this).addClass('on').siblings().removeClass('on');
            index = $(this).index();
            imgEvent();
            clearInterval(timer);
        }
        var mouseEnts = function () {
            clearInterval(timer);
        }
        var mouseLeas = function () {
            timer = window.setInterval(imgEvent, 3000);
        }
        indicators.on("mouseover", mouseNumber);
        slides.on("mouseenter", mouseEnts);
        slides.on("mouseleave", mouseLeas);
        timer = window.setInterval(imgEvent, 3000);
    }


    $.fn.slideGuide = function (options) {
        var $this = $(this);
        if ($this.length == 0) return false;
        var opts = $.extend({
            guide_items: ".nav_box dd",
            content_items: ".main_box h2.h_title",
            fixedClass: "fixed",
            currClass: "curr",
            gotop: ".gotop",
            speed: 300
        }, options);

        var gtop = $this.offset().top;
        var spos = new Array();
        $(opts.content_items).each(function (i, ele) {
            spos[i] = $(this).offset().top - 20;
        });


        var docSt = setInterval(function () {
            if (document.readyState == "complete") {
                clearInterval(docSt);
                $(opts.content_items).each(function (i, ele) {
                    spos[i] = $(this).offset().top - 20;
                });
            }
        }, 10);
        $(window).scroll(function () {
            var wtop = $(this).scrollTop();
            if (wtop >= gtop) {
                $this.addClass(opts.fixedClass);
            } else {
                $this.removeClass(opts.fixedClass);
            }
            setCurrGuide(wtop);
        });
        $(opts.guide_items).click(function () {
            var i = $(this).index();
            //$(window).scrollTop(spos[i-1]);
            $("html,body").animate({scrollTop: spos[i - 1]}, opts.speed);
        });
        $(opts.gotop).click(function () {
            $("html,body").animate({scrollTop: 0}, opts.speed);
        });

        var setCurrGuide = function (wtop) {

            var curr = 0;
            for (var i = 0; i <= spos.length; i++) {
                if (wtop >= spos[i]) {
                    curr = i;
                    if (wtop <= spos[i]) {
                        break;
                    }
                }
            }
            $(opts.guide_items).removeClass(opts.currClass).eq(curr).addClass(opts.currClass);
        }
    }


})(jQuery);
