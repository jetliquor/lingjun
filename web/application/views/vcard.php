
<div class="content" class="center-block">
    <div>
		<span class="card_title">
		家庭服务应有尽有，加入<span>会员</span>更享<span>实惠</span>
		</span>
    </div>
    <div class="card_list container row">
        <div class="card_intro col-sm-4 col-md-4">
            <span><img src="/image/card1.png"></span><br>
            <span>适合两周做一次保洁的用户</span><br>
            <span>充值1000</span><br>
            <span class="color_green">返现100</span><br>
            <span><span class="join_card" data-title="金卡会员" data-type="3"
                        data-toggle="modal" data-target="#modal_join">立即加入</span></span>
        </div>
        <div class="card_intro col-sm-4 col-md-4">
            <span><img src="/image/card2.png"></span><br>
            <span>适合每周做一次保洁的用户</span><br>
            <span>充值2000</span><br>
            <span class="color_green">返现300</span><br>
            <span><span class="join_card" data-title="白金会员" data-type="4"
                        data-toggle="modal" data-target="#modal_join">立即加入</span></span>
        </div>
        <div class="card_intro col-sm-4 col-md-4">
            <span><img src="/image/card3.png"></span><br>
            <span>适合需要全方位家庭服务的用户</span><br>
            <span>充值5000</span><br>
            <span class="color_green">返现800</span><br>
            <span><span class="join_card" data-title="钻石会员" data-type="5"
                        data-toggle="modal" data-target="#modal_join">立即加入</span></span>
        </div>
    </div>
</div>

<div class="membership container">
    <div class="phone">
        <img alt="" src="/image/telephoneicon.png" style="vertical-align: bottom;">
        <span> 400-000-9898</span>
    </div>

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
</div>

<div class="container">
    <div class="" style="margin-top:50px;">
    </div>
</div>

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
                    <input type="text" class="card_phone bottom-left" name="phone" placeholder="请输入手机号"
                           style="width:255px;">
                    <input type="text" class="card_vcode bottom-left" name="vcode" placeholder="请输入验证码"
                           style="width:120px;">
                    <img id="vcode_img" style="vertical-align: middle;height:40px" src="/Utilities/CreateVerifyCode">
                    <input type="text" class="card_code bottom-left" name="code" placeholder="请输入手机验证码"
                           style="width:120px;">
                    <input type="button" id="getcode" class="inline btn btn-default btn-lg"
                           style="height:45px;width:135px;font-size: 14px;font-weight:bold;display:inline-block;"
                           value="获取验证码">

                    <div class="apply_card_button"
                         style="color:white;font-size:20px;cursor: all-scroll;width: 100%;height: 50px;display: inline-block;background: #3BC173;text-align: center;vertical-align: middle;line-height: 50px;">
                        立即申请
                    </div>
                    <input type="hidden" name="type">
                </form>
            </div>
        </div>

    </div>
</div>
