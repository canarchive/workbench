<?php
use yii\bootstrap\ActiveForm;

$this->params['bodyClass'] = 'id="register" style="background: url(' . Yii::getAlias('@asseturl') . '/merchant/shop/img/01884-3245.jpg) no-repeat scroll center center transparent;"';
Yii::$app->params['seoTitle'] = '注册-' . Yii::$app->params['seoTitle'];

$cssFiles = ['825ea-6906', 'bcb38-6240', 'cfe27-5436', '4d799-6142'];
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
        <a id="registerLink" target="_blank" style="background: url(<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/img/85195-5460.png) center right no-repeat;"></a>
    </div>
    <div class="form-con">
        <div class="my-form" id="step1">
            <form id="step1Form">
                <div class="control-box">
                    <div class="warn" id="warn1"></div>
                    <div class="control-form">
                        <input type="text" name="userName" tabIndex="1" class="ui-input" value="" placeholder="请输入手机号码" autocomplete="off"></div>
                    <div class="control-form">
                        <input type="text" name="verfCode" tabIndex="2" class="ui-input" placeholder="请输入图片识别码" autocomplete="off">
                        <img src="/captcha.html" title="点击刷新图片" height="40" width="105" class="auth-image" oclick="this.src='/captcha.html?' + Math.random()" /></div>
                    <div class="control-form">
                        <input type="text" id="mobileVerfyCode" tabIndex="4" name="mobileVerfyCode" class="ui-input" placeholder="请输入手机验证码" autocomplete="off">
                        <input type="button" id="getVerifyBtn" tabIndex="3" class="get-verify-btn" value="获取验证码"></div>
                    <div class="control-form o-form">
                        <label class="agree-rule">
                            <input type="checkbox" tabIndex="5" name="checkRule" checked="true" value="1" />
                            <span>我已同意
                                <a target="_blank" href="https://www.dinghuo123.com/product/productService.html#f">服务条款</a>，以及
                                <a target="_blank" href="https://www.dinghuo123.com/product/productService.html#e">隐私政策</a></span>
                        </label>
                    </div>
                    <div class="control-form">
                        <input type="button" id="registerBtn1" tabIndex="6" class="ui-btn" value="免费开通"></div>
                    <div class="down-con">
                        <a class="down-a" href="/signin.html"><em class="ui-icon-phone"></em>登录</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="my-form dn" id="step2">
            <form id="step2Form">
                <div class="control-box">
                    <div class="warn" id="warn2"></div>
                    <div class="control-form">
                        <input type="text" name="companyName" tabIndex="7" class="ui-input" placeholder="公司名称" autocomplete="off"></div>
                    <div class="control-form">
                        <input type="text" name="linkman" tabIndex="8" class="ui-input" placeholder="姓名" autocomplete="off"></div>
                    <div class="control-form">
                        <input type="password" name="password" tabIndex="9" class="ui-input" placeholder="密码" autocomplete="off">
                        <a href="javascript:;" id="showPwd" data-checked="true" class="set-pwd-vis ui-icon-show"></a>
                    </div>
                    <div class="control-form">
                        <input type="text" name="email" tabIndex="10" class="ui-input" placeholder="邮箱" autocomplete="off"></div>
                    <div class="control-form">
                        <!-- <input type="text" name="loginName" class="ui-input" placeholder="选择行业"> -->
                        <select class="business-type" tabIndex="11" name="businessTypeId" id="businessTypeId">
                            <option value="0">选择行业</option>
                            <option value="1">汽车用品（汽车电子、车载电器、汽配车饰）</option>
                            <option value="2">图书、音像</option>
                            <option value="3">办公用品（办公设备、办公文仪）</option>
                            <option value="4">手机、数码、电脑</option>
                            <option value="5">食品、饮料、酒水</option>
                            <option value="6">电子、机电、机械</option>
                            <option value="7">数字商品（软件、游戏）</option>
                            <option value="8">家用电器</option>
                            <option value="9">化妆品、个人洗护、美妆工具</option>
                            <option value="10">珠宝</option>
                            <option value="11">玩具、礼品、乐器</option>
                            <option value="12">家居、家具、家装、厨具</option>
                            <option value="13">服饰鞋帽、箱包</option>
                            <option value="14">通讯设备、计算机设备</option>
                            <option value="15">培训、咨询服务</option>
                            <option value="17">日用百货</option>
                            <option value="18">母婴用品</option>
                            <option value="19">农贸产品</option>
                            <option value="20">餐饮连锁</option>
                            <option value="22">保健用品</option>
                            <option value="23">钟表</option>
                            <option value="24">医药行业</option>
                            <option value="16">其他行业</option></select>
                    </div>
                    <div class="control-form">
                        <input type="text" name="recommendCode" tabIndex="12" class="ui-input" placeholder="邀请码（可不填）" value="" autocomplete="off"></div>
                    <div class="control-form">
                        <input type="button" id="registerBtn2" tabIndex="13" class="ui-btn" value="提交"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="dn" id="step3">
    <form id="loginForm" method="post" action="/login" autocomplete="off">
        <div class="r3">
            <div class="r3-head">
                <h2 class="r3-logo"></h2>
            </div>
            <div class="r3-content">
                <div class="r3-l">
                    <p class="register-success">
                        <em></em>开通成功</p>
                    <p class="register-success-info">恭喜您开通易订货5用户终身免费版！同时您也是贵公司易订货系统管理员。</p>
                    <p class="registerToUse">
                        <a class="ui-btn registerToUseBtn" href="javascript:void(0)" id="registerToUseBtn">进入易订货</a>立即使用易订货的全部功能
                        <!-- <a class="ui-btn registerToUseBtn" href="javascript:void(0)" id="registerToUseBtn">进入易订货</a>立即使用易订货的全部功能 --></p>
                    <p class="registerToUse">
                        <a class="ui-btn registerToTryBtn" href="javascript:void(0)" id="registerToTryBtn">进入体验</a>已录入商品、订单等演示数据，帮助您更加快捷、直观了解易订货</p>
                    <p class="registerToUse">
                        <a target="_blank" class="ui-btn registerToDDBtn" href="https://oa.dingtalk.com/register.html?appName=%E6%98%93%E8%AE%A2%E8%B4%A7%E9%92%89%E9%92%89%E4%B8%93%E7%89%88&from=isvauth&inviteCode=4800" id="registerToDDBtn">开通钉钉3.0专版</a>开通易订货钉钉专版，打通企业联动，客户服务最后一公里</p>
                    <!-- <p style="margin-top:50px;"><a href="https://www.dinghuo123.com/topics/dingguide.html" target="_blank" ><img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/img/d1988-1579.jpg" alt=""></a></p> --></div>
                <div class="r3-r">
                    <p class="bqr"></p>
                    <p class="bqr-info">扫一扫下载，畅享移动易订货</p></div>
            </div>
        </div>
    </form>
</div>
</body>
<input type="hidden" value="" name="openId" id="openId" />
<input type="hidden" id="appUrl" value="" />
<input type="hidden" id="service" value="web" />
<input type="hidden" id="relayState" value="" />
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.defaultvalue.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.combo.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/icheck.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/dialog-min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/dialog-plus-min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/login-util.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/statistics.js"></script>
<!--<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/js/growingio-pc.js"></script>-->
<script type="text/javascript">
var THISPAGE = {};
$(function() {
    THISPAGE = {
        init: function() {
            jQuery.validator.addMethod("isMobile",
            function(value, element) {
                var length = value.length;
                var mobile = /^(((1[0-9]{1})|(1[0-9]{1}))+\d{9})$/;
                return this.optional(element) || (length == 11 && mobile.test(value));
            },
            "请正确填写您的手机号码");
            jQuery.validator.addMethod("pwdValid",
            function(value, element) {
                var length = value.length;
                var pwd = /^[0-9a-zA-Z]{6,20}$/;
                return this.optional(element) || pwd.test(value);
            },
            "6~20英文字母或数字");
            jQuery.validator.addMethod("businessValid",
            function(value, element) {
                var length = value.length;
                var pwd = 0;
                return this.optional(element) || pwd !== parseInt(value);
            },
            "请选择行业");

            //VALIDATE UserName
            jQuery.validator.addMethod("validateUserName",
            function(value, element) {
                var inputElem = $('input[name="userName"]'),
                data = {
					'type': 'signup',
					'field': 'mobile',
                    'value': inputElem.val(),
					'_csrf': $("#_csrf").val(),
                },
                flag = true;
                $.ajax({
                    type: "POST",
                    url: "/api-validation.html",
                    dataType: "json",
                    data: data,
                    async: false,
                    success: function(data) {
                        flag = data.status == 200;
                        // if (!!data.data.ok)
                        // {
                        //   return true;
                        // }
                        // else
                        // {
                        //    return false;
                        // }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        alert('ajax loading error... ... ' + url + query);
                        return false;
                    }
                });
                return flag;

            },
            '手机号码已被注册');
            this.addEvent();
        },
        addEvent: function() {
            var _self = this;
            $(document).on('keyup',
            function(e) {
                e.preventDefault();
                if (e.keyCode === 13) {
                    if (e.target.name === 'mobileVerfyCode') {
                        $("#registerBtn1").trigger('click');
                    } else {
                        if (e.target.name === 'mobileVerfyCode') {
                            $("#registerBtn2").trigger('click');
                        } else {
                            var tabIndex = e.target.tabIndex;
                            tabIndex++;
                            $("input[tabIndex=" + tabIndex + "]").focus();
                        }
                    }
                }
            })
            //ie8
            $(".ui-input").defaultValue();
            //动画
            /*$('.my-form').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
				$('#registerLink').addClass('animated fadeInLeft');
			});*/
            //刷新验证码
            $(".auth-image").click(function(e) {
                //$(this).attr('src', LOGIN.getVerifyCode());
                $(this).attr('src', '/captcha.html?' + Math.random());
            });
            //同意规则
            $("input[name=checkRule]").iCheck({
                checkboxClass: 'icheck icheckbox_flat-blue'
            });
            //选择行业
            $("#businessTypeId").combo({
                placeholder: "选择行业",
                width: 300
            });

            //表单1的验证
            $("#step1Form").validate({
                onfocusin: function(element, event) {
                    var e = $("#warn1");
                    e.html("");
                },
                onfocusout: function(element, event) {
                    $(element).valid();
                },
                focusCleanup: true,
                success: "success",
                onkeyup: false,
                ignore: false,
                errorPlacement: function(label, element) {
                    var e = $("#warn1");
                    e.append(label);
                },
                rules: {
                    userName: {
                        isMobile: true,
                        required: true,
                        validateUserName: true
                    },
                    verfCode: {
                        required: true,
                        maxlength: 4,
                        minlength: 4
                    }
                },
                messages: {
                    userName: {
                        isMobile: "手机号码格式不正确！",
                        required: "手机号码不能为空！",
                        validateUserName: "手机号码已被注册！"
                    },
                    verfCode: {
                        required: "图片识别码不能为空！",
                        maxlength: "图片识别码不正确！",
                        minlength: "图片识别码不正确！"
                    }
                }
            });

            //获取验证码
            $("#getVerifyBtn").click(function(e) {
                var _this = $(this);
                $("#mobileVerfyCode").rules("remove");
                var step1FormValid = $("#step1Form").valid();
                $("#warn1").find('.success').remove();
                var postData = {
                    mobile: $.trim($("input[name=userName]").val()),
					type: 'signup',
                    captcha: $.trim($("input[name=verfCode]").val())
                };
                if (step1FormValid) {
                    _this.attr("disabled", true).val("正在获取...");
                    //发送验证码
                    LOGIN.sendCode(postData, {
                        success: function(data) {
                            _self.sendCodeInterval();
                        },
                        error: function(r) {
                            $("input[name=verfCode]").val('');
							$(".auth-image").attr('src', '/captcha.html?' + Math.random());
                            $("#warn1").html(r);
                            $("#getVerifyBtn").attr("disabled", null).val("获取验证码");
                        }
                    });
                }
            });

            //第一步注册按钮
            $("#registerBtn1").click(function(e) {
                $("#warn1").html('');
                $("#mobileVerfyCode").rules("add", {
                    required: true,
                    messages: {
                        required: "手机验证码不能为空！"
                    }
                });
                var step1FormValid = $("#step1Form").valid();
                $("#warn1").find('.success').remove();
                var postData = {
                    mobile: $('input[name="userName"]').val(),
					type: 'signup',
                    code: $('input[name="mobileVerfyCode"]').val()
                };
                if (step1FormValid) {
                    if ( !! $("input[name=checkRule]").get(0).checked) {
                        LOGIN.checkActiveCode(postData, {
                            success: function() {
                                //toStep2
                                _self.toStep2();

                            },
                            error: function(r) {
                                $("#warn1").html(r);
                            }
                        });
                    } else {
                        $("#warn1").html("请先同意服务条款，以及隐私政策！");
                    }
                }
            });

            //第二步提交
            $("#registerBtn2").click(function(e) {
                var _this = $(this);
                $("#warn2").html('');
                var step2FormValid = $("#step2Form").valid();
                $("#warn2").find('.success').remove();
                if (step2FormValid) {
                    var postData = {
                        action: 'ajaxReg',
                        mobile: $.trim($('input[name="userName"]').val()),
                        code: $.trim($("input[name=mobileVerfyCode]").val()),
                        merchant_name: $.trim($("input[name=companyName]").val()),
                        contact: $.trim($("input[name=linkman]").val()),
                        password: $.trim($("input[name=password]").val()),
                        email: $.trim($("input[name=email]").val()),
                        recommend_code: $.trim($("input[name=recommendCode]").val()),
                        //邀请码
                        openId: $.trim($("input[name=openId]").val()),
                        source: $.cookie('s') || 0,
                        merchant_type: $("#businessTypeId").val() //,
                        //sc: register.getQueStr("sc")//推荐有礼
                    };
                    LOGIN.register(postData, {
                        success: function(data) {
                            _self.setBaiduConversion(data);
                            _self.toStep3();
                        },
                        error: function(r) {
                            $("#warn2").html(r);
                        }
                    })
                }

            });

            $("#showPwd").click(function(e) {
                e.preventDefault();
                var checked = $(this).data("checked");
                _self.showPwd(checked);
                $(this).data("checked", !checked);
            })
        },
        toStep2: function() {
            var _self = this;
            $("#step1").hide();
            $("#step2").show();
            $("#step2Form").validate({
                onfocusin: function(element, event) {
                    var e = $("#warn2");
                    e.html("");
                },
                onfocusout: function(element, event) {
                    $(element).valid();
                },
                focusCleanup: true,
                success: "success",
                onkeyup: false,
                ignore: false,
                errorPlacement: function(label, element) {
                    var e = $("#warn2");
                    e.append(label);
                },
                rules: {
                    companyName: {
                        required: true
                    },
                    linkman: {
                        required: true
                    },
                    password: {
                        required: true,
                        pwdValid: true
                    },
                    businessTypeId: {
                        businessValid: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    companyName: {
                        required: "公司名称不能为空！"
                    },
                    linkman: {
                        required: "姓名不能为空！"
                    },
                    password: {
                        required: "密码不能为空！",
                        pwdValid: "密码为6-20位字母数字组合！"
                    },
                    businessTypeId: {
                        businessValid: "行业不能为空！"
                    },
                    email: {
                        required: "邮箱不能为空！",
                        email: "邮箱格式不正确！"
                    }
                }
            });
        },
        //到第三步
        toStep3: function() {
            var _self = this;
            $(".container").hide();
            $(".header").hide();
            $("#step3").show();
            $("body").css("background", "none");
            $("#registerToUseBtn").click(function(e) {
                e.preventDefault();
                var postData = {
                    username: $.trim($("input[name=userName]").val()),
                    password: $.trim($("input[name=password]").val()),
                    service: $("#service").val(),
                    relayState: $("#relayState").val()
                }
                LOGIN.auth(postData, {
                    success: function(lt) {
                        window.location.href = "/login?lt=" + lt + "&username=" + postData.username + "&password=" + postData.password + "&service=" + postData.service + "&relayState=" + postData.relayState;
                    },
                    error: function(code, t) {
                        alert(t);
                    }
                })
            });
            $("#registerToTryBtn").click(function(e) {
                e.preventDefault();
                _self.setTrialBox(e);
            })
        },
        showPwd: function(checked) {
            if (checked) {
                var inp = $('<input type="text" name="password" class="ui-input pwdInp" value="' + $("input[name=password]").val() + '" placeholder="登录密码"  autocomplete="off" />');
                $("input[name=password]").replaceWith(inp);
                $(".pwdInp.ui-input-ph").remove();
            } else {
                var inp = $('<input type="password" name="password" class="ui-input pwdInp" value="' + $("input[name=password]").val() + '" placeholder="登录密码"  autocomplete="off" />');
                $("input[name=password]").replaceWith(inp);
                $(".pwdInp.ui-input-ph").remove();
            }
        },
        //获取手机验证码倒计时
        sendCodeInterval: function() {
            var _self = this;
            _self.remainTime = 60;
            $("#getVerifyBtn").attr("disabled", true).val("正在获取...");
            _self.sendCodeIntervalTime = window.setInterval(function() {
                if (_self.remainTime > 0) {
                    $("#getVerifyBtn").attr("disabled", true).val(_self.remainTime + "秒后重新获取");
                    _self.remainTime--;
                } else {
                    _self.remainTime = 60;
                    window.clearInterval(_self.sendCodeIntervalTime);
                    $("#getVerifyBtn").attr("disabled", null).val("重新获取");
                }
            },
            1000);
        },
        setBaiduConversion: function(data) {
            var login_url = LOGIN.APPURL;
            _url = login_url + "/apply/suc1",
            apply1 = window.location.pathname.indexOf('apply1'),
            apply2 = window.location.pathname.indexOf('apply2'),
            rc = window.location.search.indexOf('rc');
            if (rc >= 0) {
                _url = login_url + "/apply/suc4";
            } else {
                if (apply1 >= 0) {
                    _url = login_url + "/apply/suc1";
                } else if (apply2 >= 0) {
                    _url = login_url + "/apply/suc2";
                }
            }
            _url += "?username=" + data.userName + "&dbid=" + data.dbid;
            var _iframe = '<iframe src="' + _url + '" style="display:none" />';
            $("body").prepend(_iframe);
            $(".r1bg").hide();
            $("#step3").show();
        },
        //进入体验
        setTrialBox: function(event) {
            event.preventDefault();
            var _self = this;
            $.get("/alert/trial.html?t=" + new Date().getTime(),
            function(res) {
                var cs = $.cookie("s");
                var corpHref = $(res).find(".corp-btn").attr("href");
                var agentHref = $(res).find(".agent-btn").attr("href");
                if ( !! cs) {
                    var con = $(res).find(".corp-btn").attr("href", corpHref + "?s=" + cs).siblings(".agent-btn").attr("href", agentHref + "&s=" + cs).parents(".trial-box");
                } else {
                    con = res;
                }

                var d = dialog({
                    title: ' ',
                    content: con,
                    width: 550,
                    height: 350
                });

                d.showModal();
            });
            $(".corp-btn").die("click").live("click",
            function() {
                window.open("https://www.dinghuo123.com/chooseIndustry.html?to=corp");
            });
            $(".agent-btn").die("click").live("click",
            function() {
                window.open("https://www.dinghuo123.com/chooseIndustry.html?to=agent");
            });
        },
    };
    THISPAGE.init();
});</script>
