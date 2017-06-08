<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>找回密码</title>
        <link rel="stylesheet" href="http://42.96.194.225/filesys/spider/pages/asset/merchant/css/b114f-8129.css" />
        <link rel="stylesheet" href="http://42.96.194.225/filesys/spider/pages/asset/merchant/css/099cf-3805.css" /></head>
    
    <body>
        <div class="header">
            <div class="contrain contrain-forget">
                <div class="contrainMini">
                    <div class="header-logo"></div>
                </div>
                <a class="btn-backindex btn-backindex-pos-forget" href="https://www.dinghuo123.com/">返回首页</a></div>
        </div>
        <!-- /header -->
        <div class="progress-nav">
            <div class="clearfix">
                <div class="step-left"></div>
                <div class="step-right"></div>
            </div>
            <div class="contrainMini2">
                <div class="progress progress2 clearfix" id="progress">
                    <ul class="progress-1">
                        <li class="step-1">验证手机/邮箱</li>
                        <!-- <li class="step-1">确认注册信息</li> -->
                        <li class="step step-2">重置密码</li></ul>
                    <ul class="progress-3" style="display: none;">
                        <li class="step step-1">验证手机/邮箱</li>
                        <!-- <li class="step step-1">确认注册信息</li> -->
                        <li class="step-2">重置密码</li></ul>
                </div>
                <!-- /progress --></div>
        </div>
        <!-- /progress-nav -->
        <div class="container">
            <div class="contrain">
                <div class="contrainMini">
                    <div class="retrievePassword">
                        <form method="post" id="validateMobileForm" autocomplete="off">
                            <div class="control-box">
                                <div class="control-group username-box">
                                    <div class="control-input">
                                        <input type="text" class="ui-input username" id="userName" name="userName" placeholder="输入手机号/ 邮箱" autocomplete="off" value="" tabindex="1" /></div>
                                </div>
                            </div>
                        </form>
                        <form method="post" id="retrievePwdForm" autocomplete="off">
                            <div class="control-box">
                                <div class="control-group loginextra-box">
                                    <div class="control-input">忘记用户名，
                                        <a href="username_retrieve.jsp" class="btn-retrieveUsername">点击找回</a></div>
                                </div>
                                <div class="control-group verifyCode-box">
                                    <div class="control-input">
                                        <input type="text" class="ui-input verifyCode" id="verfCode" name="verfCode" placeholder="输入验证码" tabindex="2" />
                                        <button class="btn-getverfycode" tabindex="3">获取验证码</button></div>
                                </div>
                                <div class="control-group submit-box">
                                    <div class="control-input">
                                        <button href="javascript:void(0)" class="ui-submit-blue" id="btn-submit" tabindex="4">提&nbsp;&nbsp;交</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
        <!-- <div class="footer">
        <div class="contrain"></div>
        </div>
        /footer -->
        <script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/growingio-pc.js"></script>
        <script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/jquery.js"></script>
        <script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/jquery.validator.js"></script>
        <script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/zh-cn.js"></script>
        <script type="text/javascript">$(function() {
                //
                var retrievePwd = {
                    //
                    validateMobile: /^(13[0-9]|15[0-9]|17[0-9]|18[0-9])\d{8}$/,
                    validateEmail: /^[\w\+\-]+(\.[\w\+\-]+)*@[a-z\d\-]+(\.[a-z\d\-]+)*\.([a-z]{2,4})$/i,
                    //
                    v: null,
                    r: null,
                    //绑定事件
                    bindEvents: function(bindings) {
                        for (var i in bindings) {
                            if (bindings[i].selector) {
                                $(bindings[i].element).on(bindings[i].event, bindings[i].selector, bindings[i].handler);
                            } else {
                                $(bindings[i].element).on(bindings[i].event, bindings[i].handler);
                            }
                        }
                    },

                    remainTime: 60,
                    mobileVerifyInterval: "",
                    setMobileVerifyInterval: function() {
                        if (retrievePwd.remainTime > 0) {
                            $(".btn-getverfycode").prop("disabled", true).text(retrievePwd.remainTime + "后重新获取");
                            retrievePwd.remainTime--;
                        } else {
                            window.clearInterval(retrievePwd.mobileVerifyInterval);
                            $(".btn-getverfycode").prop("disabled", false).text("重新获取");
                            retrievePwd.remainTime = 60;
                        }
                    },

                    //初始化注册
                    init: function() {
                        retrievePwd.initEvent();
                    },

                    initEvent: function() {
                        var _self = this;
                        var bindings = [
                        //获取验证码
                        {
                            element: "#retrievePwdForm",
                            selector: '.btn-getverfycode',
                            event: 'click',
                            handler: function(event) {
                                event.preventDefault();
                                $(".btn-getverfycode").prop("disabled", true).text("正在获取...");
                                retrievePwd.v.trigger("validate");
                            }
                        },
                        //提交
                        {
                            element: "#retrievePwdForm",
                            selector: '#btn-submit',
                            event: 'click',
                            handler: function(event) {
                                event.preventDefault();
                                if (!retrievePwd.v.data('validator').isFormValid() || retrievePwd.v.data('validator').isFormValid() == undefined) {
                                    retrievePwd.v.trigger("validate");
                                } else {
                                    retrievePwd.r.trigger("validate");
                                }
                            }
                        }];
                        retrievePwd.bindEvents(bindings);

                        //初始化 手机/邮箱验证
                        retrievePwd.validateMobileForm();

                        //初始化 验证码验证
                        retrievePwd.validatorRetrievePwdForm();
                        //
                    },

                    //获取验证码
                    getValidateCode: function() {
                        var postData = {
                            mobileOrEmail: $.trim($("input[name=userName]").val())
                        };
                        $.ajax({
                            url: "/user/passwordRetrieve?action=sendPwdRetrieveCode",
                            type: "get",
                            data: postData,
                            dataType: "json",
                            success: function(result) {
                                if (result.code == '200') {
                                    //window.location.href = "/user/passwordRetrieve?action=checkActiveCodePage&mobile=" + result.data.mobile + "&email=" + result.data.email + "&userName=" + result.data.userName;
                                    if (retrievePwd.validateMobile.test(postData.mobileOrEmail)) {
                                        retrievePwd.r.data('validator').showMsg('#verfCode', "验证码已发送至您的手机，请查收！");
                                    } else if (retrievePwd.validateEmail.test(postData.mobileOrEmail)) {
                                        retrievePwd.r.data('validator').showMsg('#verfCode', "验证码已发送至您的邮箱，请查收！");
                                    }
                                    retrievePwd.mobileVerifyInterval = window.setInterval(retrievePwd.setMobileVerifyInterval, 1000);
                                } else {
                                    retrievePwd.r.data('validator').showMsg('#verfCode', result.message);
                                }
                            },
                            error: function() {
                                retrievePwd.r.data('validator').showMsg('#verfCode', "系统繁忙，请稍后再试！");
                                $(".btn-getverfycode").prop("disabled", false).text("重新获取");
                            }
                        });
                    },

                    //验证手机
                    validateMobileForm: function() {
                        //
                        retrievePwd.v = $('#validateMobileForm').validator({
                            focusCleanup: true,
                            stopOnError: false,
                            msgClass: 'n-right',
                            //msgClass:'n-top',
                            //debug: true,
                            dataFilter: function(data) {
                                var d = {};
                                if (data.data.isExist == false) {
                                    var mobileOrEmail = $.trim($("input[name=userName]").val());
                                    if (retrievePwd.validateMobile.test(mobileOrEmail)) {
                                        d = {
                                            "error": "当前手机尚未绑定，请用邮箱找回，也可以联系管理员帮助您重置密码！"
                                        }
                                    } else if (retrievePwd.validateEmail.test(mobileOrEmail)) {
                                        d = {
                                            "error": "当前邮箱尚未绑定，请用手机找回，也可以联系管理员帮助您重置密码！"
                                        }
                                    } else {
                                        d = {
                                            "error": "账户不存在"
                                        }
                                    }
                                } else if (data.data.isExist == true) {
                                    d = {
                                        "ok": ""
                                    }
                                }
                                //false / true:账户不存在
                                //{"error":"账户不存在"}
                                //{"ok":"账户存在"}
                                return d;
                            },
                            rules: {
                                checkUserName: function(element, params) {
                                    var val = $(element).val();
                                    return $.ajax({
                                        type: "get",
                                        //url: '/ajaxChecking?action=checkUserName',
                                        //data: {"userName": val},
                                        url: '/user/passwordRetrieve?action=checkExist',
                                        data: {
                                            "mobileOrEmail": val
                                        },
                                        dataType: "json",
                                        timeout: 15000,
                                        success: function(data, status) {
                                            //console.log("success");
                                        },
                                        error: function(err) {
                                            //console.log("error");
                                            return "error";
                                        },
                                        complete: function() {
                                            //console.log("完成");
                                            return "complete";
                                        }
                                    });

                                }

                            },
                            fields: {
                                "userName": {
                                    timely: 1,
                                    rule: "filter(\\s);required;mobile||email;checkUserName;",
                                    tip: "",
                                    ok: "",
                                    msg: {
                                        required: "手机号码或邮箱不能为空",
                                        mobile: "手机号码或邮箱不正确",
                                        email: "手机号码或邮箱不正确"
                                    }
                                }
                            },
                            //验证成功
                            valid: function(form) {
                                retrievePwd.getValidateCode();
                            },
                            //验证失败
                            invalid: function(form) {
                                $(".btn-getverfycode").prop("disabled", false).text("获取验证码");
                                /*按钮动画效果
			        $('.btn-getverfycode').stop().delay(100)
			            .animate({left:-5}, 100)
			            .animate({left:5}, 100)
			            .animate({left:-4}, 100)
			            .animate({left:4}, 100)
			            .animate({left:-3}, 100)
			            .animate({left:0}, 100);
			        */
                            }
                        });
                    },

                    //找回验证
                    validatorRetrievePwdForm: function() {
                        //
                        retrievePwd.r = $('#retrievePwdForm').validator({
                            focusCleanup: true,
                            stopOnError: false,
                            msgClass: 'n-right',
                            //msgClass:'n-top',
                            //debug: true,
                            fields: {
                                "verfCode": {
                                    timely: 1,
                                    rule: "filter(\s);required;validateCode;",
                                    tip: "",
                                    ok: "",
                                    msg: {
                                        required: "验证码不能为空"
                                    }
                                }
                            },
                            // 验证成功
                            valid: function(form) {
                                var postData = {
                                    mobileOrEmail: $.trim($("input[name=userName]").val()),
                                    activeCode: $.trim($("input[name=verfCode]").val())
                                };
                                $.ajax({
                                    url: "/user/passwordRetrieve?action=checkActiveCode",
                                    type: "post",
                                    data: postData,
                                    dataType: "json",
                                    success: function(result) {
                                        if (result.code == '200') {
                                            window.location.href = result.data.url;
                                        } else {
                                            retrievePwd.r.data('validator').showMsg('#verfCode', result.message);
                                        }
                                    },
                                    error: function() {
                                        retrievePwd.r.data('validator').showMsg('#verfCode', "系统繁忙，请稍后再试！");
                                    }
                                });
                            },

                            //验证失败
                            invalid: function(form) {
                                /*按钮动画效果
				        $('.btn-getverfycode').stop().delay(100)
				            .animate({left:-5}, 100)
				            .animate({left:5}, 100)
				            .animate({left:-4}, 100)
				            .animate({left:4}, 100)
				            .animate({left:-3}, 100)
				            .animate({left:0}, 100);
				        */
                            }
                        });

                    }

                };

                retrievePwd.init();

            });</script>
        <!-- <script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/statistics.js"></script> --></body>

</html>
