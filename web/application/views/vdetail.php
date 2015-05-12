<div class="content">
    <div class="banner container">
        <div class="banner_title fl"></div>
        <div class="banner_sign fr"></div>
    </div>

    <div class="warp">
        <div class="nav_box">
            <div class="svc-guide">
                <dl>
                    <dt>
                    <div class="px18">Why</div>
                    <div class="px16">choose us?</div>
                    </dt>
                    <dd class="">价格透明</dd>
                    <dd class="">服务宣言</dd>
                    <dd class="">专业技师上门</dd>
                    <dd class="">用户保障</dd>
                    <dd class="">注意事项</dd>
                </dl>
                <div class="gotop"></div>
            </div>
        </div>
        <div class="container main_box">
            <div class="left_box fl">
                <h2 class="h_title">价格透明</h2>

                <?php
                echo $goods->category . '<br>' . $goods->name;
                ?>
                <h2 class="h_title">服务宣言</h2>

                <div class="item_box">
                    <dl class="service">
                        <dt><img src="/image/appPic1.jpg"></dt>
                        <dd><p>生活中总有做不完的家务事，疲惫不堪的您是否做梦都想，动动手指即可坐拥洁净与舒适？阿姨帮正致力于达成您的心愿！</p></dd>
                    </dl>
                    <dl class="service2">
                        <dt><img src="/image/appPic2.jpg"></dt>
                        <dd><p>我们专注移动互联技术研发，通过一系列服务标准化建设，让您用最优的价格，享受最高品质的服务。</p></dd>
                    </dl>
                    <dl class="service">
                        <dt><img src="/image/appPic3.jpg"></dt>
                        <dd><p>阿姨帮将为每一位用户提供至尊的服务体验。无论您是我们的会员，还是初次使用的用户，在这里都将尽享非凡的礼遇！</p></dd>
                    </dl>
                    <p class="h_infor">”感谢您的支持，感谢您的使用，我们一直在努力！“</p>
                </div>

                <h2 class="h_title">专业技师上门</h2>

                <div class="item_box"><img src="/image/appPic4.jpg"></div>

                <h2 class="h_title">用户保障</h2>

                <div class="item_box">
                    <h3>四大保障——为您的安全保驾护航</h3>
                    <dl class="h_dl">
                        <dt class="h_ico1"></dt>
                        <dd>
                            <h4>诚信保障</h4>

                            <p>爽约/私自调价/私自带人：免费赠送2小时服务。</p>
                        </dd>
                    </dl>
                    <dl class="h_dl">
                        <dt class="h_ico2"></dt>
                        <dd>
                            <h4>安全保障</h4>

                            <p>通过阿姨帮预约的服务将同时免费享有《家政责任险》,全程保障雇主、服务人员及第三者的人身安全。</p>
                        </dd>
                    </dl>
                    <dl class="h_dl">
                        <dt class="h_ico3"></dt>
                        <dd>
                            <h4>财产保障</h4>

                            <p>服务过程中证实出现因服务人员造成的财产损失，客户提供发票，阿姨帮先行协商赔付。</p>
                        </dd>
                    </dl>
                    <dl class="h_dl">
                        <dt class="h_ico4"></dt>
                        <dd>
                            <h4>品质保障</h4>

                            <p>未按阿姨帮标准规范服务，磨洋工或打扫不干净的，可申请订单赔付。</p>
                        </dd>
                    </dl>
                </div>

                <h2 class="h_title">注意事项</h2>

                <div class="item_box">
                    <dl class="h_dlList">
                        <dt>预定</dt>
                        <dd>请您至少提起前1天预定，以便我们安排合适的技师</dd>
                    </dl>
                    <dl class="h_dlList">
                        <dt>变更</dt>
                        <dd>请您至少在预约的服务时间开始前2小时提交修改或取消需求，以免技师白跑一趟。</dd>
                    </dl>
                    <dl class="h_dlList">
                        <dt>留人</dt>
                        <dd>请您确保在阿姨帮服务期间家中留人</dd>
                    </dl>
                </div>
            </div>
            <div class="right_box fr">
                <form action="/appoint/do" method="post" id="svc-form">
                    <input name="service_project" type="hidden" value="project_clean_glass">
                    <input name="city" type="hidden" value="成都">

                    <div class="form-box">
                        <div class="formtit">服务时间</div>
                        <div class="iptbox">
                            <!--
                            <span class="tips datetip">
                                <div>请选择服务日期！</div>
                            </span>
                            <span class="tips timetip">
                                <div>请选择服务时间！</div>
                            </span>
                            -->
                            <input placeholder="日期" class="date hasDatepicker" name="serverdate" id="serverdate"
                                   tip="datetip">
                            <input placeholder="时间" class="time ui-timepicker-input" name="servertime" id="servertime"
                                   tip="timetip" autocomplete="off">
                            <span class="star">*</span>
                        </div>
                        <div class="formtit">服务地址</div>
                        <div class="iptbox">
                	<span class="tips addr">
                    	<div>地址输入有误！最少6个字!<br>请重新输入</div>
                    </span>
                    <span class="tips room">
                    	<div>您输入的门牌号有误！<br>请重新输入</div>
                    </span>
                            <input class="iptl" placeholder="请输入服务地址" id="addr" name="address" tip="addr"><span
                                class="star">*</span>
                            <input class="iptl" placeholder="门牌号" id="room" name="address_detail" tip="room">
                        </div>


                        <div class="formtit">更多需求</div>
                        <div class="iptbox">
                            <input class="iptl" name="remark" placeholder="您可以在这里备注更多需求">
                        </div>
                    </div>

                    <div class="xieyi">
                        <span class="checked">
                            <input type="checkbox" id="xieyi" class="checkbox">
                            <label for="xieyi" class="checkbox_label"></label>
                        </span>
                        <label for="xieyi">
                            我已阅读并同意《<a href="/agreement" target="_blank"> 阿姨帮用户使用协议 </a>》
                        </label>
                    </div>
                    <div><input type="button" class="submit px18" value="下一步" id="nextstep"></div>
                    <!--<div class="cover">
                        <div class="loginPoup">
                            <div class="topic">
                                <span class="fl">验证手机号</span>
                                <i class="fr"></i>
                            </div>
                            <div class="con">
                                <div class="tip">无需注册，验证手机即可快速下单</div>
                                <dl class="clearfix">
                                    <dt>手机号</dt>
                                    <dd><input class="ipt1" type="text" name="phone" id="mobi"></dd>
                                </dl>
                                <dl class="clearfix">
                                    <dt>验证码</dt>
                                    <dd><input class="ipt2" type="text" name="vcode" id="chknum"> <img src="/getvcode"
                                                                                                       id="imgCode"
                                                                                                       class="changeCode">
                                        <a href="javascript:;" class="changeCode">换一张</a></dd>
                                </dl>
                                <dl class="clearfix">
                                    <dt>短信验证</dt>
                                    <dd><input class="ipt2" type="text" name="code" id="codenum" disabled="disabled">
                                        <input type="button" class="btn" value="获取验证码" disabled="disabled" id="getcode">
                                        <a href="javascript:alert('温馨提示:请检查您的手机号是否正确，如果正确但长时间没有收到验证码短信，可能是因为短信运营商网络不太给力的原因，请拨打客服电话（400-000-9898）获取验证码。');"
                                           class="abs">没有收到？</a></dd>
                                </dl>
                                <div class="submit">
                                    <input type="submit" value="提交订单" disabled="disabled" id="submitbtn">
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </form>
            </div>
        </div>
    </div>
</div>

