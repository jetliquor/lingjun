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
})(jQuery);
