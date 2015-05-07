<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>换芯宝 | 换芯卡</title>
    <link rel="shortcut icon" href="favicon.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="换芯宝">
    <meta name="keywords" content="换芯宝">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    -->
    <link rel="stylesheet" href="/css/public.css"

</head>

<body>
<header class="warp container">
    <h1 class="logo fl">
        <a href="/" class="h_a"><span
                class="undis"></span></a>
    </h1>
    <ul class="menu fr">
        <li><a href="/home"><b class="wb01">首页<span>Home</span></b></a></li>
        <li><a href="/appoint"><b class="wb02">在线预约<span>Online
							booking</span></b></a></li>
        <li><a href="#" class="on"><b class="wb03">加入会员<span>Membership</span></b></a></li>
        <li><a href="/faq"><b class="wb04">常见问题<span>FAQ</span></b></a></li>
        <li><a href="/join"><b class="wb05">加入我们<span>Join
							us</span></b></a></li>
        <ul>
        </ul>
    </ul>
</header>

<script src="/js/jquery-1.11.2.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/ljcommon.js"></script>
<script src="/js/ljmain.js"></script>

<div style="background: url(/image/cardbackgroud.jpg) no-repeat center; height:600px; " class="center-block">
    <div>
		<span class="card-title">
		家庭服务应有尽有，加入<span>会员</span>更享<span>实惠</span>
		</span>
    </div>
    <div class="card-content row">
        <div class="card-intro col-md-4">
            <span><img src="/image/card1.png"></span><br>
            <span>适合两周做一次保洁的用户</span><br>
            <span>充值1000</span><br>
            <span class="color_green">返现100</span><br>
            <span><span class="join_card" data-title="金卡会员" data-type="3"
                        data-toggle="modal" data-target="#modal_join">立即加入</span></span>
        </div>
        <div class="card-intro col-md-4">
            <span><img src="/image/card2.png"></span><br>
            <span>适合每周做一次保洁的用户</span><br>
            <span>充值2000</span><br>
            <span class="color_green">返现300</span><br>
            <span><span class="join_card" data-title="白金会员" data-type="4"
                        data-toggle="modal" data-target="#modal_join">立即加入</span></span>
        </div>
        <div class=" card-intro col-md-4">
            <span><img src="/image/card3.png"></span><br>
            <span>适合需要全方位家庭服务的用户</span><br>
            <span>充值5000</span><br>
            <span class="color_green">返现800</span><br>
            <span><span class="join_card" data-title="钻石会员" data-type="5"
                        data-toggle="modal" data-target="#modal_join">立即加入</span></span>
        </div>
    </div>
</div>

<div class=" container" style="margin-top:20px">
    <div style="text-align:center; margin:60px 0;">
		<span style="height:50px;display:inline-block;vertical-align: bottom;">
            <img alt=""
                 src="/image/telephoneicon.png"
                 style="vertical-align: bottom;">
		<span style="color:#18A252;font-size:28px;height:40px;display:inline-block;margin-top:10px;line-height:40px">
            400-000-9898</span>
		</span>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            <span><img src="/image/cardicon01.png"></span><br>
            <span class="intro-title">充值赠送</span><br>
            <span class="color_green">充的多返的多</span><br>
        </div>
        <div class="col-md-3 text-center">
            <span><img src="/image/cardicon02.png"></span><br>
            <span class="intro-title">专属管家</span><br>
            <span class="color_green">一对一管家式服务</span><br>
        </div>
        <div class="col-md-3 text-center">
            <span><img src="/image/cardicon03.png"></span><br>
            <span class="intro-title">一卡通用</span><br>
            <span class="color_green">一卡在手，家政无忧</span><br>
        </div>
        <div class="col-md-3 text-center">
            <span><img src="/image/cardicon04.png"></span><br>
            <span class="intro-title">会员支付</span><br>
            <span class="color_green">更方便，更安全</span><br>
        </div>
    </div>
    <div class="" style="margin-top:50px;">
    </div>
</div>


<footer class="container">
    <p class="h_top">
        <a href="/service/media">媒体报道</a><span>|</span> <a href="/join">加入我们</a><span>|</span>
        <a href="/faq">常见问题</a><span>|</span> <a href="/agreement">用户协议</a>
    </p>

    <p>©2015&nbsp;&nbsp;换芯宝
        &nbsp;&nbsp;沪ICP备xxxxxxx</p>
</footer>

<!-- Modal -->
<div id="modal_join" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 320px">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">加入会员</h4>
            </div>
            <div class="modal-body">
                <form id="apply_card">
                    <input type="text" class="card_phone bottom-left" name="phone" placeholder="请输入手机号" style="width:255px;">
                    <input type="text" class="card_vcode bottom-left" name="vcode" placeholder="请输入验证码" style="width:120px;">
                    <img id="vcode_img" style="vertical-align: middle;height:40px" src="/Utilities/CreateVerifyCode">
                    <input type="text" class="card_code bottom-left" name="code" placeholder="请输入手机验证码" style="width:120px;">
                    <input type="button" id="getcode" class="inline btn btn-default btn-lg" style="height:45px;width:135px;font-size: 14px;font-weight:bold;display:inline-block;" value="获取验证码">
                    <div class="apply_card_button" style="color:white;font-size:20px;cursor: all-scroll;width: 100%;height: 50px;display: inline-block;background: #3BC173;text-align: center;vertical-align: middle;line-height: 50px;">立即申请</div>
                    <input type="hidden" name="type">
                </form>
            </div>
        </div>

    </div>
</div>


</body>

</html>