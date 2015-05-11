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
});
