<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-pic/_js-header');
?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_topdown'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_header'); ?>
<?php echo $this->render('_content-show'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_comment'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_guestbook'); ?>
<!-- 相关信息项目 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_related'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_footer'); ?>
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
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_pop-new'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_guestbook'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_valid-common'); ?>
