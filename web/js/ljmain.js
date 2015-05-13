/**
 * Created by JLI on 15-5-6.
 */

$(document).ready(function () {
    $('#gallery').showFocusImg();
    $(".nav_box").slideGuide();
    $('#modal_join').on('show.bs.modal', function () {
        $(this).css({
            'display': 'block',
            'margin-top': function () {
                return ($(this).height() / 3);
            }
        });
    });

    $.datepicker.regional['zh-CN'] = {
        closeText: '关闭',
        prevText: '&#x3C;上月',
        nextText: '下月&#x3E;',
        currentText: '今天',
        monthNames: ['一月', '二月', '三月', '四月', '五月', '六月',
            '七月', '八月', '九月', '十月', '十一月', '十二月'],
        monthNamesShort: ['一月', '二月', '三月', '四月', '五月', '六月',
            '七月', '八月', '九月', '十月', '十一月', '十二月'],
        dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
        dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
        dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
        weekHeader: '周',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: true,
        yearSuffix: '年'};
    $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
    $("#datepicker").datepicker({
        dateFormat:"mm 月 dd 日",
        minDate:'0',
        maxDate:'+6'
    });
    $("#timepicker").timepicker();
    $('#timepicker').timepicker({
        timeFormat: 'H:i',
        minTime: '8:00',
        maxTime: '18:00'
    });
})
;
