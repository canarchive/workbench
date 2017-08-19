<?php
use yii\bootstrap\ActiveForm;

$this->params['bodyClass'] = 'id="login" style="background-image: url(' . Yii::getAlias('@asseturl') . '/merchant/shop/img/06dd8-6485.jpg);"';
Yii::$app->params['seoTitle'] = '注册-' . Yii::$app->params['seoTitle'];

$cssFiles = ['825ea-6906', 'bcb38-6240', '4d799-6142'];
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'merchant/shop/css']);
//$jsFiles = ['modernizr'];;
//$this->params['jsStr'] = $this->render('@common/views/base/_css-js', ['type' => 'js', 'files' => $jsFiles, 'path' => 'merchant/adview/js']);

$fields = ['mobile', 'password'];
$data = [];
foreach ($fields as $field) {
    $data[$field]['value'] = !isset($info[$field]) || $field == 'password' ? '' : $info[$field]['value'];
    $data[$field]['error'] = isset($info[$field]['error']) ? $info[$field]['error'] : '';
}

?>
<?= $this->render('_logo.php'); ?>
<div class="container">
    <div class="link-con">
        <a id="loginLink" target="_blank" style="background: url(<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/img/c5bd6-1160.png) center right no-repeat;" href="/"></a>
    </div>
    <div class="form-con">
        <div class="my-form">
            <form id="myForm" autocomplete="off">
                <input style="display:none" type="text" name="fakeusernameremembered" />
                <input style="display:none" type="password" name="fakepasswordremembered" />
                <div class="control-box">
                    <div class="warn" id="warn"></div>
                    <div class="control-form">
                        <input type="text" name="username" id="username" tabIndex="1" class="ui-input" placeholder="请输入手机号码/用户名" autocomplete="off"></div>
                    <div class="control-form">
                        <input type="password" name="password" id="password" tabIndex="2" class="ui-input" placeholder="请输入密码" autocomplete="off"></div>
                    <div class="control-form dn">
                        <input type="text" class="ui-input verifyCode" id="verifyCode" name="verifyCode" placeholder="请输入右侧图片" autocomplete="off" />
                        <img src="" title="点击刷新图片" height="40" width="105" class="auth-image" /></div>
                    <div class="control-form o-form">
                        <label class="remember-name">
                            <input type="checkbox" tabIndex="3" name="rememberName" value="1" /><span>记住用户名</span>
                        </label>
                        <a class="forget-pwd" href="/findpwd.html">忘记密码？</a></div>
                    <div class="control-form">
                        <input type="button" id="loginBtn" class="ui-btn ui-btn-blue" tabIndex="4" value="登录"></div>
                </div>
            </form>
            <div class="down-con">
                <!--<a class="down-a" href="/download.html#c"><em class="ui-icon-phone"></em>手机下载</a>-->
                <a class="register-a" href="/signup.html"><em class="ui-icon-register"></em>注册</a>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="service" value="" />
<input type="hidden" name="relayState" value="" />
<form id="loginForm" method="post" action="https://sso.dinghuo123.com/login">
    <input type="hidden" name="lt" value="LT-7525-gwcZJ2ug2mjImrxLfOPb-" />
    <input type="hidden" name="service" value="" />
    <input type="hidden" name="relayState" value="" /></form>
<input type="hidden" id="appUrl" value="https://sso.dinghuo123.com" />
<input type="hidden" id="loginErrorCount" value="" /></body>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/login-util.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.defaultvalue.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/icheck.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/growingio-pc.js"></script>
<script type="text/javascript">var THISPAGE = {};
$(function() {
    THISPAGE = {
        init: function() {
            this.errorTime = !!$("#loginErrorCount").val() ? parseInt($("#loginErrorCount").val()) : 0;
            this.addEvent();
        },
        addEvent: function() {
            var _self = this;
            $(window).on('resize',
            function() {
                var CH = document.body.clientHeight;
                if (CH < 800) {
                    $("#loginLink").css({
                        "backgroundSize": "70%"
                    });
                } else {
                    $("#loginLink").css({
                        "backgroundSize": null
                    });
                }
            });
            $(window).trigger('resize');
            $(document).on('keyup',
            function(e) {
                e.preventDefault();
                if (e.keyCode === 13) {
                    if (e.target.name === 'password' || e.target.name === 'verifyCode') {
                        $("#loginBtn").trigger('click');
                    } else {
                        var tabIndex = e.target.tabIndex;
                        tabIndex++;
                        $("input[tabIndex=" + tabIndex + "]").focus();
                    }
                }
            });
            //记住的用户名
            var u = $.cookie("username");
            if (u) {
                $("#username").val(u);
            }
            //动画
            //$('.my-form').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            //	$('#loginLink').addClass('animated fadeInLeft');
            //});
            //记住用户名
            $(".remember-name").iCheck({
                checkboxClass: 'icheck icheckbox_flat-blue'
            });

            //IE8
            $(".ui-input").defaultValue();

            //刷新验证码
            $(".auth-image").click(function(e) {
                $(this).attr('src', LOGIN.getVerifyCode());
            });

            if (_self.errorTime >= 3) {
                var $img = $(".auth-image");
                $img.parents('.control-form').show();
                $img.attr('src', LOGIN.getVerifyCode());
            }

            $("#myForm").validate({
                onfocusin: function(element, event) {
                    var e = $("#warn");
                    e.html("");
                },
                onfocusout: function(element, event) {
                    $(element).valid();
                },
                focusCleanup: true,
                success: "success",
                onkeyup: false,
                ignore: ":hidden",
                errorPlacement: function(label, element) {
                    var e = $("#warn");
                    e.append(label);
                },
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    verifyCode: {
                        required: true,
                        maxlength: 4,
                        minlength: 4
                    }
                },
                messages: {
                    username: {
                        required: "登录用户名不能为空！"
                    },
                    password: {
                        required: "登录密码不能为空！"
                    },
                    verifyCode: {
                        required: "验证码不能为空！",
                        maxlength: "图片识别码不正确！",
                        minlength: "图片识别码不正确！"
                    }
                }
            });

            $("#loginBtn").click(function(e) {
                var _this = $(this);
                e.preventDefault();
                $("#warn").html("");
                var formValid = $("#myForm").valid();
                $("#warn").find('.success').remove();
                if (formValid) {
                    var postData = {
                        service: $("input[name=service]").val(),
                        relayState: $("input[name=relayState]").val(),
                        mobile: $.trim($("input[name=username]").val()),
                        password: $.trim($("input[name=password]").val())
                    };
                    if (_self.errorTime >= 3) {
                        var $img = $(".auth-image");
                        $img.parents('.control-form').show();
                        $img.attr('src', LOGIN.getVerifyCode());
                        postData.verfCode = $.trim($("input[name=verifyCode]").val());
                    }
                    _this.attr("disabled", true).val("正在登录...");
                    LOGIN.clearCrossDomainCookie();
                    LOGIN.auth(postData, {
                        success: function(r) {
                            $("input[name=lt]").val(r);
                            if ($("input[name=rememberName]").get(0).checked) {
                                $.cookie("username", postData.username, {
                                    expires: 30,
                                    path: '/',
                                    domain: 'dinghuo123.com'
                                });
                            }
                            $("#loginForm").submit();
                        },
                        error: function(code, r) {
                            var e = $("#warn");
                            e.html("");
                            e.append(r);
                            _this.attr("disabled", null).val("登录");
                            _self.errorTime++;
                            if (_self.errorTime >= 3) {
                                var $img = $(".auth-image");
                                $img.parents('.control-form').show();
                                $img.attr('src', LOGIN.getVerifyCode());
                            }
                            if (_self.errorTime >= 5) {
                                $("#warn").html('').html('连续输错密码五次,请30分钟后再试!');
                                _this.attr("disabled", true).val("请30分钟后再试");
                            }
                            if (code === 'limit') {
                                _this.attr("disabled", true).val("请30分钟后再试");
                            }
                        }
                    });
                }
            });
        }
    };
    THISPAGE.init();

})</script>
