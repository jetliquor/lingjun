<form id="verify_code">
    <input id="vcode_value" type="text" name="vcode" placeholder="请输入验证码" style="width: 120px" maxlength="4">
    <img id="vcode_img" src="/Utilities/CreateVerifyCode" style="width: 80px; height: 40px; vertical-align: middle"
         onclick="refresh_code()"/>
    <input type="button" id="vcode_submit" value="验证">
</form>

<script src="/js/jquery-1.11.2.js"></script>
<script>
    $(function () {
        $('#vcode_submit').click(function () {
            var url = '/Utilities/CheckVerifyCode?code=' + $('#vcode_value').val();
            $.ajax({
                type: 'GET',
                url: url,
                async: false,
                cache: false,
                success: function(resp) {
                    var Result = eval('('+resp+')');
                }
            });
        });
    });

    function refresh_code() {
        $("#vcode_img").attr('src', "/Utilities/CreateVerifyCode?a=" + Math.random());
    }
</script>