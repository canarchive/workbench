    <div class="loginBox">
        <div class="loginBox_bg"></div>
        <div class="loginBox_con" style="width:430px;">
            <div class="close">&#10005</div>
            <div class="LBC clear">
                <!--<div class="LBC_left">
                <h2>用户登录</h2>
                <div>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/plat1/img/20ede-3736.jpg" alt="登录-二维码" width="158px" height="158px">
                <p>微信扫码&nbsp;快速登录</p>
                <p><i>?</i>使用帮助</p>
                </div>
                </div>-->
                <div class="LBC_right">
                    <p class="h3">
                        <i>
                        </i>短信快捷登录</p>
                    <div class="loginBox_name clear" id="userLogin">
                        <span></span>
                        <input id="username" type="text" value="邮箱/用户名/已验证手机"></div>
                    <div class="loginBox_pwds clear" id="userPwd">
                        <span></span>
                        <input id="password" type="password">
                        <p class="pwdtxt">请输入密码</p></div>
                    <div class="error_show">
                        <span id="userSpan"></span>
                    </div>
                    <div class="loginBox_checkbox clear">
                        <input type="checkbox" checked="checked">
                        <div>自动登陆</div>
                        <span>
                            <a href="http://passport.17house.com/forgetpwd">忘记密码</a></span>
                    </div>
                    <div class="loginBox_btn">立即登录</div>
                    <div class="loginBox_qita">
                        <p class="h4">您还可以使用合作账号登录网站：</p>
                        <ul class="list clear">
                            <li>
                                <a class="list_img1" href="javascript:;" target="_blank"></a>
                            </li>
                            <li>
                                <a class="list_img2" href="#" id="sinaLoginBtn"></a>
                            </li>
                            <li>
                                <a class="list_img3" href="javascript:void(0);"></a>
                            </li>
                        </ul>
                        <p>还没有一起网帐号？10秒钟,
                            <a href="http://passport.17house.com/reg" target="_blank">快速注册</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="loginBox_conP" style="width:430px;">
            <div class="close">&#10005</div>
            <div class="LBC clear">
                <!-- <div class="LBC_left">
                <h2>用户登录</h2>
                <div>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/plat1/img/da2be-4036.jpg" alt="登录-二维码" width="158px" height="158px">
                <p>微信扫码&nbsp;快速登录</p>
                <p><i>?</i>使用帮助</p>
                </div>
                </div>
                -->
                <div class="LBC_right">
                    <p class="back">
                        <s>
                        </s>返回登录</p>
                    <div class="loginBox_res">验证即登录，未注册将自动创建一起网帐号</div>
                    <div class="loginBox_name clear">
                        <i>
                        </i>
                        <input name="usermobile" class="LBC_tel" id="userMobile" type="text" value="请输入手机号码"></div>
                    <div class="loginBox_pwd clear">
                        <div class="loginBox_pwdL clear">
                            <span></span>
                            <input type="text" name="vcode" id="vcode" value="请输入动态密码"></div>
                        <div class="loginBox_pwdR" name="sendSMS">获取动态密码</div></div>
                    <div class="error_show">
                        <span class="alert_phone_login"></span>
                    </div>
                    <div class="loginBox_btn1" style="margin-top:10px">立即登录</div>
                    <div class="loginBox_qita">
                        <p class="h4">您还可以使用合作账号登录网站：</p>
                        <ul class="list clear">
                            <li>
                                <a class="list_img1" href="javascript:;" target="_blank"></a>
                            </li>
                            <li>
                                <a class="list_img2" href="#" id="sinaLoginBtn"></a>
                            </li>
                            <!--<a href="#" id="sinaLoginBtn"><div class="WB_loginButton WB_widgets"><a href="javascript:void(0);"></a></div></a>--></ul>
                        <p>还没有一起网帐号？10秒钟,
                            <a href="http://passport.17house.com/reg" target="_blank">快速注册</a></p>
                    </div>
                    <!-- 下面这个隐藏字段是为了存储今日短信发送是否超过10条 -->
                    <input type="hidden" name="for_isBeyondLimit" value="" />
                    <!-- 区分当前页面是否处于计时的字段 0表示当前页面没有进行计时-->
                    <input type="hidden" name="for_timing" value="0" />
                    <!-- 下面这个隐藏表单是为了存放间歇调用的ID的 -->
                    <input type="hidden" name="for_intervalId" value="" />
                    <!-- 下面这个隐藏表单是为了存放authkey -->
                    <input type="hidden" id="authkey" value="" /></div>
            </div>
        </div>
    </div>
