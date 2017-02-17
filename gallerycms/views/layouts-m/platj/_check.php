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
