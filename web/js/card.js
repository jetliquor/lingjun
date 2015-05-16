/**
 * Created by lv on 2015/5/16.
 */
function onRefreshVcode() {
    $('#vcode_img').attr('src', '/Utilities/CreateVerifyCode?a=Math.random()');
}

function onGetSecurityVcode() {
    var phone = $('.card_phone').val();
    var vcode = $(".card_vcode").val();
    if (!phone || phone.length != 11) {
        alert('请输入正确的手机号');
        return false;
    }
    if (!vcode || vcode.length != 4) {
        alert('请输入正确的验证码');
        return false;
    }
//	$('#getcode').attr('disabled', 'disabled');
    refreshIntervalId = window.setInterval("count_down();", 1000);
    $.ajax({
        type: "GET",
        url: "/Utilities/SendSecurityCode/" + phone + "/" + vcode,
        success: function (resp) {
            if (resp.length > 0) {
                alert(resp);
            } else {
                // 倒计时
                refreshIntervalId = window.setInterval("count_down();", 1000);
                // $('#token').val(data.token);
            }
        },
        error: function (resp) {

        }
    });
}

function onApplyCard() {
    var phone = $('.card_phone').val();
    var vcode = $(".card_vcode").val();
    var card_code = $(".card_code").val();
//	console.log($("#apply_card").serialize());
//	console.log(phone, vcode);
    if (!phone || phone.length != 11) {
        alert('请输入正确的手机号');
        return false;
    }
    if (!vcode || vcode.length != 4) {
        alert('请输入正确的验证码');
        return false;
    }
    if (!card_code || card_code.length != 4) {
        alert('请输入正确的手机验证码');
        return false;
    }
    $('#getcode').attr('disabled', 'disabled');
    $.ajax({
        type: "GET",
        url: "/card/apply/" + phone + "/" + card_code + "/" + $('#modal_join').data('type'),
        success: function (resp) {
            if (resp.length > 0) {
                alert(resp);
            } else {
                clearInterval(refreshIntervalId);
                // 成功对话框TODO
            }
        },
        error: function () {

        }
    });
}

function onCardLogin() {
    var inputs = $('#modal_login input');
    var user = inputs[0].value;
    var password = inputs[1].value;

    if (user.length < 1) {
        alert('请输入正确的用户名');
        return false;
    }
    if (password.length < 1) {
        alert('请输入正确的卡密');
        return false;
    }

    $.ajax({
        url: '/card/login',
        type: 'POST',
        data: "user="+user+"&password="+password,
        success: function(data, textStatus, jqXHR) {
            // 跳到用户界面
            location.href = "/card";
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {

        }
    });
}

var second = 10;
function count_down() {
    if (second > 0) {
        $('#getcode').attr('disabled', 'disabled');
        $('#getcode').val(second + '秒');
        second--;
    } else {
        second = 10;
        $('#getcode').val('获取验证码');
        $('#getcode').removeAttr('disabled');
        //       $('.warmprompt').removeClass('hide');
        clearInterval(refreshIntervalId);
    }
}