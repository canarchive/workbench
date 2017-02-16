<link type="text/css" rel="stylesheet" href="http://60.205.145.0/filesys/spider/pages/asset/platj/m/css/235a4-6274.css">
<div class="Pline_consult" id="Pline_Message" style="display:none;">
    <script>function Auto_trigger() {
            var curCount = 60;
            $("#chBtn").attr("disabled", "true");
            $("#chBtn").val("" + curCount + "秒");
            //timer处理函数
            function SetRemainTime() {

                if (curCount == 0) {
                    window.clearInterval(InterValObj); //停止计时器
                    $("#chBtn").removeAttr("disabled"); //启用按钮
                    $("#chBtn").val("重新发送");
                    code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
                } else {
                    curCount--;
                    $("#chBtn").attr("disabled", "false");
                    $("#chBtn").val("" + curCount + "秒");
                }
            }
            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        }</script>
    <div class="ZJ_title1">
        <p class="span1">短信验证</p>
        <p class="span2">温馨提示：为便于客服及时联系您，请验证手机号码</p></div>
    <form>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>
                    <em class="w4">手机号码</em>
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="telephone" id="first_telephone" value="" maxlength="11" readonly="readonly"></li>
            <li>
                <span>
                    <em class="em1">*</em>
                    <em>短信验证码</em>
                    <em class="em2">:</em></span>
                <input type="text" name="code" class="text" id="che_code" placeholder="请输入验证码" value="" maxlength="4" />
                <input type="button" value="60秒" class="button fr" id="chBtn" onclick="checkCodeClick();" /></li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consult').hide();$('.gray_mask').hide();window.clearInterval(InterValObj);">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return message_check_code($(this));">确定</a></li>
            <input type="hidden" name="first_message_id" value="" id="first_message_id">
            <input type="hidden" name="gem_collection" value="" id="gem_collection">
            <input type="hidden" name="message_num" id="message_num_m" value="1" /></ul>
    </form>
</div>
<script>function checkCodeClick() {
        var curCount = 60;
        $("#chBtn").attr("disabled", "true");
        $("#chBtn").val("" + curCount + "秒");
        //timer处理函数
        function SetRemainTime() {

            if (curCount == 0) {
                window.clearInterval(InterValObj); //停止计时器
                $("#chBtn").removeAttr("disabled"); //启用按钮
                $("#chBtn").val("重新发送");
                code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
            } else {
                curCount--;
                $("#chBtn").attr("disabled", "false");
                $("#chBtn").val("" + curCount + "秒");
            }
        }
        InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        var telephone = $("#telephone").val();
        $.ajax({
            async: false,
            type: 'get',
            url: 'http://person.jmw.com.cn/telephone_check_again.php',
            dataType: 'jsonp',
            jsonp: 'callback',
            data: {
                telephone: telephone
            },
            success: function(html) {}
        });

    }

    function message_check_code(obj) {
        if (obj.attr('doing') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var phone = $("#first_telephone").val();
        var code = $("#che_code").val();
        var gem_collection = $("#gem_collection").val();
        var first_message_id = $("#first_message_id").val();
        if (phone == '') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (code == '') {
            alert('请输入验证码！');
            return false;
        } else {
            //$('#check_two_message').submit();
            obj.attr('doing', 1);
            $.ajax({
                async: false,
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message_check.php',
                data: {
                    phone: phone,
                    code: code,
                    gem: gem_collection,
                    id: first_message_id
                },
                dataType: 'jsonp',
                jsonp: 'callback',
                success: function(html) {
                    obj.attr('doing', 0);
                    if (html == 1) {
                        $('.Pline_consult').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else {
                        alert('验证码不正确！请输入正确的验证码');
                    }
                }
            });
        }
    }</script>
<!-------留言限制条件 start---->
<style>.safeCheckW{ display: none; width: 100%; height: 100%; background: rgba(0,0,0,.5); position: fixed; z-index: 9998; top:0; left:0; } .message{ width: 90%; height: 294px; border-radius: 20px; background: #ffffff; position: absolute; top:50%; left:5%; margin-top: -147px; } .message-title{ width: 100%; text-align: center; height: 40px; line-height: 40px; border-bottom: 1px solid #E8E8E8; font-size: 17px; color: #333333; } .message-name{ height: 36px; line-height: 36px; margin: 14px 0; } .message-liuyan,.message-name label{ margin-left:5%; display: inline-block; width: 20%; } .message-name input{ height: 34px; width : 32%; border: 1px solid #ccc; } .message-button{ border-top: 1px solid #E8E8E8; } .message-button a{ display: block; float: left; width: 50%; color: #3478E3; line-height: 51px; text-align: center; } #loading-mask{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1005;background:rgba(0,0,0,.5); } .code_color{width: 32%;height: 34px;text-align:center;line-height: 34px;background: #FF9D18;color: #ffffff;display: inline-block;float:right;margin:2px 3% 0 2%;}</style>
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
    }); $('.button_sure').click(function() {
        $('.safeTishiW').hide();
        $("#loading-mask").hide();
    })</script>
<!---留言限制条件 end-->
<!-- 公共底部 end -->
<!-- 项目页底部定位 endd -->
<a class="returntop" href="#top" style="display: none;">
    <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/41560-7162.png"></a>
<script>$(document).scroll(function() {
        var top = $(document).scrollTop();
        if (top == 0) {
            $(".returntop").hide();
        } else {
            $(".returntop").show();
        }
    }); $(".returntop").click(function() {
        $({
            aa: $(window).scrollTop()
        }).animate({
            aa: 0
        },
        {
            duration: 1200,
            step: function() {
                $(window).scrollTop(this.aa);
            }
        })
    })</script>
<!-- 留言验证 start -->
<!-- 首页 询加盟底价弹框 -->
<!-- 首页 询加盟底价弹框 -->
<div class="gray_mask" style="display:none;"></div>
<div class="Pline_consult" id="Pline_consult" style="display:none;">
    <form action="" method="post" id="p_form">
        <p class="P_title1" id="P_title"></p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="name" id="p_name" placeholder="请输入姓名" value="" maxlength="6" /></li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="phone" id="p_phone" placeholder="请输入手机号" value="" maxlength="11" /></li>
            <li>
                <span class="fl" style="position:relative;top:11px;">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="message" id="p_message" cols="30" rows="10"></textarea>
            </li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consult').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="message_check_one($(this));" id="check_t">确定</a></li>
        </ul>
        <input type="hidden" name="target_id" id="target_id" value="">
        <input type="hidden" value="" name="origin" id="p_origin">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" />
        <input type="hidden" name="message_num" id="message_num_m" value="1" /></form>
</div>
<script>function publish_mess(target_id, origin, message) {
        var target_id = target_id;
        var origin = origin;
        var message = message;
        if (origin == 12 || origin == 24 || origin == '12-1' || origin == '12-2') {
            $('#P_title').html('在线咨询');
        } else if (origin == 13 || origin == 25 || origin == '13-1' || origin == '13-2') {
            $('#P_title').html('询加盟底价');
        } else if (origin == 26) {
            $('#P_title').html('投票');
        }
        $('#target_id').val(target_id);
        $('#p_origin').val(origin);
        $('#p_message').val(message);

        $('#Pline_consult').show();
        $('.gray_mask').show();
    }
    function message_check_one(obj) {
        if (obj.attr('message_pop_up') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#p_name").val();
        var message = $("#p_message").val();
        var phone = $("#p_phone").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
        var target_id = $("#target_id").val();
        var origin = $("#p_origin").val();
        var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
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
            obj.attr('message_pop_up', 1);
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
                    obj.attr('message_pop_up', 0);
                    if (html.status == 'login') {
                        $('.Pline_consult').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);
                        $('#first_telephone').val(phone);
                    }
                }
            });
            if (is_login == 'unlogin') {
                $('.Pline_consult').hide();
                $('#Pline_Message').show();
                Auto_trigger();
            }
        }
    }</script>
<!-- 公共短信验证 -->
