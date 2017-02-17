<!-- 公共底部 end -->
<script type="text/javascript">function func() {
        var u = navigator.userAgent,
        app = navigator.appVersion;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if (isAndroid == true) {
            document.getElementById("downLoad").href = "http://m.jmw.com.cn/app/android/中国加盟网.apk";
        } else if (isiOS == true) {
            document.getElementById("downLoad").href = "https://appsto.re/cn/ukd68.i";
        } else {
            alert("请在手机端下载app");
        }
    }</script>
<style>.safeCheckW{ display: none; width: 100%; height: 100%; background: rgba(0,0,0,.5); position: fixed; z-index: 9998; top:0; left:0; } .message{ width: 90%; height: 294px; border-radius: 20px; background: #ffffff; position: absolute; top:50%; left:5%; margin-top: -147px; } .message-title{ width: 100%; text-align: center; height: 40px; line-height: 40px; border-bottom: 1px solid #E8E8E8; font-size: 17px; color: #333333; } .message-name{ height: 36px; line-height: 36px; margin: 14px 0; } .message-liuyan,.message-name label{ margin-left:5%; display: inline-block; width: 20%; } .message-name input{ height: 34px; width : 32%; } .message-button{ border-top: 1px solid #E8E8E8; } .message-button a{ display: block; float: left; width: 50%; color: #3478E3; line-height: 51px; text-align: center; } #loading-mask{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1005;background:rgba(0,0,0,.5); } .code_color{width: 32%;height: 34px;text-align:center;line-height: 34px;background: #FF9D18;color: #ffffff;display: inline-block;float:right;margin:2px 3% 0 2%;}</style>
<!--弹框-->
<div class="safeCheckW">
    <ul class="message">
        <li class="message-title">安全验证</li>
        <li style="padding: 10px 21px;border-bottom: 1px solid #E8E8E8;color: #666;line-height: 1.4rem;">你今天已经连续留言2条，为了保障你的账户安全，请输入手机验证码或修改手机号码</li>
        <li class="message-name">
            <label>手机号:</label>
            <input type="text" name="telephone" id="telephone" value="" readonly="readonly"></li>
        <li class="message-name">
            <label>验证码:</label>
            <input type="text" name="code" id="code" value="">
            <a id="checkBtn" class="code_color">发送短信验证码</a></li>
        <li class="message-button">
            <a onclick="$('.safeCheckW').hide();$('#loading-mask').hide();" style="color: #666;box-sizing: border-box;border-right: 1px solid #E8E8E8;">取消</a>
            <a class="button2">确定</a></li>
    </ul>
</div>
<script type="text/javascript">//验证码变化
    /*function t1(){
$("#vailcode").attr("src","http://m.jmw.com.cn/code.php?rand"+Math.random());
var session_code = context.Session["Checkcode"].ToString();
alert(session_code);
return false;
}*/
    var fal = true;
    $('#checkBtn').click(function() {
        if (fal == true) {
            var telephone = $("#telephone").val();
            $.ajax({
                type: 'get',
                async: false,
                url: 'http://person.jmw.com.cn/sendMessagecode.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    'telephone': telephone
                },
                success: function(html) {
                    if (html == 1) {
                        fal = false;
                        var curCount = 90;
                        $(".code_color").css('background', '#c3c3c3');
                        //$("#checkBtn").attr("disabled", "true");
                        $("#checkBtn").html("" + curCount + "秒倒计时");
                        //timer处理函数
                        function SetRemainTime() {

                            if (curCount == 0) {
                                window.clearInterval(InterValObj); //停止计时器
                                //$("#checkBtn").removeAttr("disabled");//启用按钮
                                $(".code_color").css('background', '#FF9D18');
                                $("#checkBtn").html("重新发送");
                                code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效   
                                fal = true;
                            } else {
                                curCount--;
                                //$("#checkBtn").attr("disabled", "false");
                                $("#checkBtn").html("" + curCount + "秒倒计时");
                            }
                        }
                        InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                    }
                }
            })
        }
    })

    $('.button2').click(function() {
        var code = $('#code').val();
        if (code != '') {
            $.ajax({
                type: 'get',
                async: false,
                url: 'http://person.jmw.com.cn/m_code_check.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    'code': code
                },
                success: function(html) {
                    if (html == 1) {
                        $("input[name=message_num]").val(1);
                        $('.safeCheckW').hide();
                        $('#loading-mask').hide();
                    } else {
                        alert('验证码失效或不正确！');
                        $('.safeCheckW').hide();
                        $('#loading-mask').hide();
                    }
                }
            })
        } else {
            alert('验证码不能为空！');
            return false;
        }

    })</script>
<style type="text/css">.clear{ zoom:1;clear:both;} .clear:after{content:""; clear:both; height:0; line-height:0; display:block; visibility:hidden;} .fl{float:left;display:inline;} .fr{float:right;display:inline;} #loading-mask{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1005;background:rgba(0,0,0,.5); } .safeTishiW{ width:94.4%; background:rgba(0,0,0,.3); position:fixed; top:25%; left:0; right:0; margin:0 auto; border-radius:5px; padding:0.9% 0; z-index:1100;} .safeTishiL{ width:98%; margin-left:1%; } .safeTishiL .p1{ background:#e44b46; height:28px; color:#fff; } .safeTishiL .p1 .span_safe{ font-size:0.875rem; padding-left:7.4%; box-sizing:border-box; line-height:28px; } .safeTishiL .p1 .span_close{ font-size:1.375rem; padding-right:1.8%; box-sizing:border-box; } .safeTishiL_bottom{ background:#f3f4f7; padding:7.4%; box-sizing:border-box; font-size:1.0rem; } .safeTishiL_bottom .ul1{ padding-bottom:15px; line-height:30px; font-weight:bold; padding-left:7.4%; } .safeTishiL_bottom .button_sure{ width:30%; text-align:center; height:35px; line-height:35px; font-size:0.85rem; margin:auto; display:block; background:#e44b46; border:none; color:#fff; }</style>
<div id="loading-mask" style="display:none;"></div>
<div class="safeTishiW" style="display:none;">
    <div class="safeTishiL">
        <p class="p1 clear">
            <span class="fl span_safe">安全提示</span>
            <span class="fr span_close">×</span></p>
        <div class="safeTishiL_bottom">
            <ul class="ul1">
                <li>您今天留言次数已满
                    <font class="font1">20</font>条,</li>
                <li>为了您的账号安全,</li>
                <li>请您明天继续.</li></ul>
            <a class="button_sure" />确定</a></div>
    </div>
</div>
<script>$('.span_close').click(function() {
        $('.safeTishiW').hide();
        $("#loading-mask").hide();
    }) $('.button_sure').click(function() {
        $('.safeTishiW').hide();
        $("#loading-mask").hide();
    })</script>
<!---留言限制条件 end-->
<!-- 标项页立即咨询 -->
<div class="gray_mask" style="display:none;"></div>
<div class="Pline_consult" style="display:none;" id="online_consult">
    <div class="ZJ_title1">
        <p class="span1">专家咨询</p>
        <p class="span2">温馨提示：为便于客服及时联系您，请验证手机号码</p></div>
    <form action="" method="post">
        <input type="hidden" name="message_num" id="message_num_m" value="1" />
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="name" id="zx_name" placeholder="请输入姓名" value="" maxlength="6" /></li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="phone" id="zx_phone" placeholder="请输入手机号" value="" maxlength="11" /></li>
            <li>
                <span class="fl" style="position:relative;top:16px;">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="content" id="zx_contents" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些？</textarea></li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('#online_consult').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return message_check_zx($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="sex" value="" />
        <input type="hidden" name="target_id" id="target_id" value="137829" />
        <input type="hidden" name="origin" value="" id="zj_origin" />
        <input type="hidden" value="" name="m_dirname">
        <input type="hidden" name="MCeng_lasturl" id="MCeng_lasturl" />
        <input type="hidden" name="MCeng_fromurl" id="MCeng_fromurl" /></form>
</div>
<script>function message_check_zx(obj) {
        if (obj.attr('doing') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#zx_name").val();
        var message = $("#zx_contents").val();
        var phone = $("#zx_phone").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
        var target_id = $("#target_id").val();
        var origin = $("#zj_origin").val();
        var MCeng_lasturl_1 = $("#MCeng_lasturl").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl").val();

        if (name == '') {
            alert('姓名不能为空！');
            return false;
        } else if (phone == '') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (!regexp.test(message)) {
            alert('留言格式不正确！');
            return false;
        } else {
            /*var message_num = $("#message_num_m").val();
    if(message_num == -1){
        $('.safeCheckW').show();
        $('#loading-mask').show();
        return false;
    }
    if(message_num == -2){
        $('.safeTishiW').show();
        $('#loading-mask').show();
        return false;
    }*/
            //obj.html('提交中。。');
            obj.attr('doing', 1);
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    is_login: is_login,
                    name: name,
                    telephone: phone,
                    message: message,
                    target_id: target_id,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    //obj.show();
                    obj.attr('doing', 0);
                    if (html.status == 'login') {
                        $('#online_consult').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);
                    }
                }
            });
            if (is_login == 'unlogin') {
                $('#online_consult').hide();
                $('#Pline_Message').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }
        }
    }</script>
<!--<ul class="xm_footer">
<li class="xm_ico1 fl"><a href="javascript:;" onclick="addTelForWap(137829,1,'4000500555,95542');"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/dddd7-9769.png">免费通话</a></li>
<li class="xm_ico2 fl"><a onclick="$('.black-all').show();$('#n_content').val('请问晨阳水漆企业电话是多少？');$('#origin').val(9);"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/dcf8d-7090.png"><span>索要企业电话</span></a></li>
<li class="xm_ico3 fl"><a onclick="$('.tm_bg').show()&amp;&amp;$('.J-extent').show();$('#zj_origin').val('1');$('#contents').val('请问投资晨阳水漆所需要的费用有哪些?');"><span>在线咨询</span></a></li></ul>-->
<!-- 项目页底部定位 stop -->
<style>.xm_footer { position: fixed; bottom: 0; left: 0; z-index: 200; width: 100%; height: 48px; background: #f9f9f9; } .xm_footer .xm_ico1,.xm_footer .xm_ico2{border-right: 1px solid #E0E1E5;box-sizing: border-box;border-top: 1px solid #e0e1e5;} .xm_ico1,.xm_ico2{width: 30%;height:100%;position: relative;} .xm_footer .xm_ico3{width: 40%;background: #E44B46;color: #ffffff;} .xm_footer li a { display: block; color: #666666; text-align: center; font-size: 0.725em; line-height: 66px; } .xm_footer .xm_ico3 a{color: #ffffff;font-size: 0.8em;line-height: 48px;} .xm_footer .xm_ico1 img,.xm_footer .xm_ico2 img{width: 15px;height: 15px;display: block;position: absolute;top:6px;left:50%;margin-left: -7.5px;} .icon_sex1{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; margin-top: 20px!important;} .icon_sex2{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; margin-top: 20px!important;} .icon_liu_sex2{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:11px 6px 0 0; }</style>
<!-- 标项页讯加盟低价 -->
<link rel="stylesheet" href="http://60.205.145.0/filesys/spider/pages/asset/platj/m/css/235a4-6274.css" />
<div class="gray_mask" style="display:none;"></div>
<div class="Pline_consult" style="display:none;" id="Pline_consult">
    <form action="" method="post" id="form1">
        <p class="P_title1" id="P_title1">加盟咨询</p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="name" id="n_name" placeholder="请输入姓名" value="" maxlength="6" />
                <p class="li_sex fr">&nbsp;&nbsp;性别:
                    <label id="label1" style="display:inline-block;">
                        <i class="icon_sex1 fl icon_sex2"></i>男 &nbsp;</label>
                    <label id="label2" style="display:inline-block;">
                        <i class="icon_sex1 fl "></i>女</label>
                </p>
            </li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="phone" id="n_phone" placeholder="请输入手机号" value="" maxlength="11" /></li>
            <li>
                <span class="fl" style="position: relative; top: 16px;">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="content" id="n_content" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些?</textarea></li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult').hide();$('.gray_mask').hide();$('#P_title1').html('加盟咨询')">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return check_Standard($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="gender" class="fl" id="sex" value="0">
        <input type="hidden" name="target_id" id="target_id" value="137829">
        <input type="hidden" value="" name="origin" id="origin">
        <input type="hidden" value="" name="m_dirname">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" />
        <input type="hidden" name="message_num" id="message_num_f" value="1" /></form>
</div>
<script type="text/javascript">$('#label1').click(function() {
        $('#label1 i').toggleClass('icon_sex2');
        $('#label2 i').removeClass('icon_sex2');
        $('#sex').val('0');
    }) $('#label2').click(function() {
        $('#label2 i').toggleClass('icon_sex2');
        $('#label1 i').removeClass('icon_sex2');
        $('#sex').val('1');
    })</script>
<script>function check_Standard(obj) {
        if (obj.attr('check_Standard') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#n_name").val();
        var message = $("#n_content").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
        var phone = $("#n_phone").val();
        var sex = $("#sex").val();

        var target_id = $("#target_id").val();
        var origin = $("#origin").val();
        var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();

        if (name == '') {
            alert('姓名不能为空！');
            return false;
        } else if (sex == '') {
            alert('请选择性别！');
            return false;
        } else if (phone == '') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (!regexp.test(message)) {
            alert('留言格式不正确！');
            return false;
        } else {
            /*var message_num = $("#message_num_m").val();
    if(message_num == -1){
        $('.safeCheckW').show();
        $('#loading-mask').show();
        return false;
    }
    if(message_num == -2){
        $('.safeTishiW').show();
        $('#loading-mask').show();
        return false;
    }*/
            obj.attr('check_Standard', 1);
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    is_login: is_login,
                    name: name,
                    telephone: phone,
                    message: message,
                    target_id: target_id,
                    gender: sex,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    obj.attr('check_Standard', 0);
                    if (html.status == 'login') {
                        $('#Pline_consult').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);
                    }
                }
            });
            if (is_login == 'unlogin') {
                $('#Pline_consult').hide();
                $('#Pline_Message').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }
        }
    }</script>
<!--新增弹框 end-->
<!-- 我要留言 -->
<style type="text/css">.gray_mask{ background:rgba(0,0,0,.4); position:fixed; top:0; left:0; width:100%; height:100%; z-index:990; display:none; } .I_speak{ width:100%; height:41px; background:#404042; margin-top:4px; position:fixed; bottom:0; z-index:990;} .I_speak .li_left{ width:17.5%; background:#252724; color:#fff; height:41px; text-align:center; font-size:0.75rem; position:relative; } .I_speak .li_left i{ position:absolute; display:block; width:17px; height:17px; top:1px; right:14%; } .I_speak .li_left p{ margin-top:6px; line-height:16px; } .I_speak .li_center{ width:62%; } .I_speak .li_center input{ width:91.5%; height:31px; margin:4px auto; background:#e4e1e1; color:#a5a5a5; border:none; border-radius:6px; padding-left:13px; box-sizing:border-box; display:block; } .I_speak .li_right{ width:16%; background:#169e16; height:31px; border-radius:5px; margin-top:4px; } .I_speak .li_right dl{ margin:auto; width:81%; } .I_speak .li_right dt{ width:15px; height:15px; margin-top:8px ; } .I_speak .li_right dd{ font-size:0.75rem; color:#fff; line-height:14px; margin-left:6px;margin-top:2px;} @media (min-width:320px) and (max-width:365px){ .I_speak .li_right dd{ margin-left:2px;margin-top:2px;} } @media screen and (min-width:384px){ .I_speak .li_right dl{ margin:auto; width:74%; } } .Pline_consultL{ background:#fff; width:83%; position:fixed; left:8.5%; top:20%; border-radius:10px; z-index:1305; display:none; } .Pline_consultL .P_title1{ height:45px; line-height:45px; text-align:center; border-bottom:1px solid #e8e8e8; font-size:0.95rem; } .Pline_consultL ul li{ line-height:42px; padding:0 3%; border-bottom:1px solid #e8e8e8; font-size:0.8rem;} .Pline_consultL ul li .text{ width:33%; height:28px;font-size:0.85rem; color:#999; box-sizing:border-box; padding-left:3px; margin-left:3px; border:medium none; } .Pline_consultL ul li .button{ width:32%; height:28px; border:1px solid #e10000; color:#e10000; line-height:28px; text-align:center; background:#fff; margin-top:8px; padding:0; border-radius:2px; } .Pline_consultL .li_sex{ font-size:0.8rem; margin-right:8px; } .Pline_consultL ul li span .em1{ float:left; color:#e10000; margin-right:2px;} .Pline_consultL ul li textarea{ height:40px; font-family: "微软雅黑";width:81%;font-size:0.85rem; margin-left:3px; margin-top:10px; line-height:20px; color:#999; border:medium none; } @media screen and (max-width:330px){ .Pline_consultL ul li textarea{ width:79%; } } .Pline_consultL ul .li5{ height:46px; line-height:46px; border-bottom:none;} .Pline_consultL ul li a{ text-align:center; width:50%; display:inline-block; font-size:0.95rem; } .Pline_consultL ul .a1{ border-right:1px solid #e8e8e8; box-sizing:border-box; color:#cdcdcd; } .Pline_consultL ul .a2{ color:#4283e4; }</style>
<script language="javascript" type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/platj/js/webcall.js"></script>
<script language="javascript" type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/js/iscroll.js"></script>
<ul class="I_speak clear">
    <li class="fl li_left" onclick="$('.Pline_consultL').show();$('.gray_mask').show();">
        <p>我要
            <br />留言</p>
        <i>
            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/2de72-9761.png" alt="" /></i>
    </li>
    <li class="fl li_center">
        <input type="text" name="phone" id="si_mobel" value="输入您的电话:138******10" onfocus="if(this.value=='输入您的电话:138******10'){this.value=''}" onblur="if(this.value==''){this.value='输入您的电话:138******10'}" maxlength="11" /></li>
    <li class="fl li_right" onclick="si_Webcall();return false;">
        <dl class="clear">
            <dt class="fl">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/00698-5306.png" alt="" /></dt>
            <dd class="fl">在线
                <br />咨询</dd>
            <input type="hidden" name="tid" id="si_tid" value="137829">
            <input type="hidden" name="cname" id="si_cname" value="晨阳水漆"></dl>
    </li>
</ul>
<div class="gray_mask"></div>
<div class="Pline_consultL" style="display:none; z-index:1400;">
    <form action="" method="post" id="form_liu">
        <p class="P_title1" style="color:#333;">留言咨询</p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名&nbsp;:</span>
                <input type="text" class="text" name="name" id="liu_name" value="如 万先生" onfocus="if(this.value=='如 万先生'){this.value=''}" onblur="if(this.value==''){this.value='如 万先生'}" />
                <p class="li_sex fr" style="position:absolute;top:39px;height:35px;">性别&nbsp;:
                    <label id="man" for="man" style="margin-right:10px; ">
                        <i class="icon_sex1 icon_liu_sex2" style="display:inline-block;"></i>男</label>
                    <label id="woman" for="woman">
                        <i class="icon_sex1 " style="display:inline-block;"></i>女</label>
                </p>
            </li>
            <li style="clear:both;">
                <span>
                    <em class="em1">*</em>手机&nbsp;:</span>
                <input type="text" class="text" style="width:80%;" name="phone" id="liu_phone" value="如 13111111111" onfocus="if(this.value=='如 13111111111'){this.value=''}" onblur="if(this.value==''){this.value='如 13111111111'}" maxlength="11" /></li>
            <li>
                <span class="fl">
                    <em class="em1">*</em>留言&nbsp;:</span>
                <textarea name="contant" id="liu_content" cols="30" rows="10">我想咨询晨阳水漆加盟费用最低多少钱?</textarea></li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consultL').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return message_liuyan($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="gender" class="fl" id="liu_sex" value="0">
        <input type="hidden" name="target_id" id="target_id" value="137829">
        <input type="hidden" value="22" name="origin" id="liu_origin">
        <input type="hidden" value="" name="m_dirname">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" />
        <input type="hidden" name="message_num" id="message_num_f" value="1" /></form>
</div>
<script type="text/javascript">$('#man').click(function() {
        $('#man i').toggleClass('icon_liu_sex2');
        $('#woman i').removeClass('icon_liu_sex2');
        $('#liu_sex').val('0');
    }) $('#woman').click(function() {
        $('#woman i').toggleClass('icon_liu_sex2');
        $('#man i').removeClass('icon_liu_sex2');
        $('#liu_sex').val('1');
    })</script>
<script>function message_liuyan(obj) {
        if (obj.attr('message_liuyan') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#liu_name").val();
        var content = $("#liu_content").val();
        var phone = $("#liu_phone").val();
        var sex = $("#liu_sex").val();
        var target_id = $("#target_id").val();
        var origin = $("#liu_origin").val();
        var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;

        if (name == '' || name == '如 万先生') {
            alert('姓名不能为空！');
            return false;
        } else if (sex == '') {
            alert('请选择性别！');
            return false;
        } else if (phone == '' || phone == '如 13111111111') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (!regexp.test(content)) {
            alert('留言格式不正确！');
            return false;
        } else {
            /*var message_num = $("#message_num_m").val();
    if(message_num == -1){
        $('.safeCheckW').show();
        $('#loading-mask').show();
        return false;
    }
    if(message_num == -2){
        $('.safeTishiW').show();
        $('#loading-mask').show();
        return false;
    }*/
            obj.attr('message_liuyan', 1);
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    is_login: is_login,
                    name: name,
                    telephone: phone,
                    message: content,
                    target_id: target_id,
                    gender: sex,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    obj.attr('message_liuyan', 0);
                    if (html.status == 'login') {
                        $('.Pline_consultL').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);

                    }
                }
            });
            if (is_login == 'unlogin') {
                $('.Pline_consultL').hide();
                $('#Pline_Message').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }
        }
    }</script>
<!-------m站标页底部浮层类似400回拨------->
<script>function si_Webcall() {
        var lasturl = window.location.href;
        var fromurl = document.referrer;
        var com_id = jQuery('#si_tid').val();
        var tel_name;
        var tel_sex;

        cname = jQuery("#si_cname").val();
        cn_num = jQuery('#si_mobel').val();
        if (cn_num == '输入您的电话:138******10' || cn_num == '') {
            alert('请填写您的联系方式！');
            return false;
        } else {
            if (!cn_num.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
                alert('请填写您正确的联系方式！');
                return false;
            }
        }
        if (com_id != '' && cn_num != 0) {
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/messageMFor400Index_temporary.php',
                dataType: 'jsonp',
                jsonp: 'fouroorecord',
                data: 'is_login=' + is_login + '&phone=' + cn_num + '&target_id=' + com_id + '&sex=2&name=创业者&cname=' + cname + '&origin=13-23&content=' + '通过400电话为' + cname + '项目留言，想了解加盟流程。请尽快联系！' + '&400index_lasturl=' + lasturl + '&400index_fromurl=' + fromurl,
                success: function(html) {
                    if (html.status == 'login') {
                        alert('留言成功！');
                        /*var call=new WebCall400(com_id);
            call.fourTelUserName='创业者';
            call.fourTelUserGender=2;
            call.webcall(cn_num);
            jQuery.ajax({
                url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
                type:'get',
                data:'com_id='+com_id+'&cb_num='+cn_num,
                cache:false,
                dataType:'jsonp',
                async:false,
                jsonp: "call_status",//服务端用于接收callback调用的function名的参数
                success:function(data,text)
                {
                    alert(data.msg);
                    setTimeout(sleepReload(),'2000');  
                }
            });*/
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);

                    }
                }
            });
            if (is_login == 'unlogin') {
                $('.gray_mask').show();
                $('#Pline_Message').show();
                $('#first_telephone').val(cn_num);
                $('#tel_400').val('tel_400');
                Auto_trigger();
            }
        }
    }
    function sleepReload() {
        window.location.reload();
    }</script>
<?= $this->render('_valid-common'); ?>
