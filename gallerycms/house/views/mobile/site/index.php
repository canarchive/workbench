<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['cd7cd-5015', '556dc-3586', '92ee4-2657', '235a4-6274', 'df376-8815', '0d0c2-9033'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('_js-header');
?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_topdown'); ?>
<?php echo $this->render('_slide'); ?>
<?php echo $this->render('_text'); ?>
<?php echo $this->render('_icon'); ?>
<?php echo $this->render('_activity'); ?>
<?php echo $this->render('_sort'); ?>
<?php //echo $this->render('_seckill'); ?>
<?php echo $this->render('_content'); ?>
<?php echo $this->render('_content2'); ?>
<?php echo $this->render('_sorthot'); ?>
<?php echo $this->render('_list'); ?>
<?php echo $this->render('_tag'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer-index'); ?>
<a class="returntop" href="#top" style="display: none;">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/41560-7162.png"></a>
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
<!--弹框 询加盟低价-->
<div class="tm_bg" style="width: 100%; height: 100%; display: none;"></div>
<div class="gray_mask" style="display:none;"></div>
<!-- 首页 创业者弹框 -->
<div class="Pline_consult" id="f_Pline_consult" style="display:none;">
    <form action="" method="post" id="form_first">
        <p class="P_title1" id="f_title"></p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="name" id="f_name" placeholder="请输入姓名" value="" maxlength="6" /></li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="phone" id="f_phone" placeholder="请输入手机号" value="" maxlength="11" /></li>
            <li>
                <span class="fl" style="position:relative;top:11px;">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="contant" id="f_content" cols="30" rows="10"></textarea>
            </li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consult').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return first_checkMessage($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="target_id" id="f_target_id" value="">
        <input type="hidden" value="" name="origin" id="f_origin">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" /></form>
</div>
<!-- 首页 品牌商弹框 -->
<div class="Pline_consult" id="z_Pline_consult" style="display:none;">
    <form action="" method="post" id="form_zhao">
        <p class="P_title1" id="z_title"></p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>项目名
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:70%;" name="name" id="z_name" value="如 驾校网" onfocus="if(this.value=='如 驾校网'){this.value=''}" onblur="if(this.value==''){this.value='如 驾校网'}" /></li>
            <li>
                <span>
                    <em class="em1">*</em>联系人
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:70%;" name="contacts" id="z_contacts" value="请填写联系人" onfocus="if(this.value=='请填写联系人'){this.value=''}" onblur="if(this.value==''){this.value='请填写联系人'}" /></li>
            <li>
                <span>
                    <em class="em1">*</em>职位
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:70%;" name="position" id="z_position" value="请填写职位" onfocus="if(this.value=='请填写职位'){this.value=''}" onblur="if(this.value==''){this.value='请填写职位'}" /></li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="phone" id="z_phone" onfocus="if(this.value=='请输入手机号'){this.value=''}" onblur="if(this.value==''){this.value='请输入手机号'}" value="请输入手机号" maxlength="11" /></li>
            <li>
                <span class="fl" style="position:relative;top:11px;">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="contant" id="z_content" cols="30" rows="10"></textarea>
            </li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('#z_Pline_consult').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return zhao_checkMessage($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="target_id" id="z_target_id" value="">
        <input type="hidden" value="" name="origin" id="z_origin">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" /></form>
</div>
<!-- 标项页讯加盟低价 -->
<style>.icon_sex1{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; } .icon_sex2{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }</style>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/css/235a4-6274.css" />
<div class="gray_mask" style="display:none;"></div>
<div class="Pline_consult" style="display:none;" id="Pline_consult_hel">
    <form action="" method="post" id="form1">
        <p class="P_title1" id="P_title1">加盟咨询</p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="name" id="n_name" placeholder="请输入姓名" value="" maxlength="6" />
                <p class="li_sex fr">性别:
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
                <span class="fl" style="position:relative;top:11px;">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="content" id="n_content" cols="30" rows="10"></textarea>
            </li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult_hel').hide();$('.gray_mask').hide();$('#P_title1').html('加盟咨询')">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="help_check($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="gender" class="fl" id="sex" value="0">
        <input type="hidden" name="target_id" id="target_id" value="">
        <input type="hidden" value="" name="origin" id="origin">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_help" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_help" /></form>
</div>
<script>$('#label1').click(function() {
        $('#label1 i').toggleClass('icon_sex2');
        $('#label2 i').removeClass('icon_sex2');
        $('#sex').val('0');
    }); $('#label2').click(function() {
        $('#label2 i').toggleClass('icon_sex2');
        $('#label1 i').removeClass('icon_sex2');
        $('#sex').val('1');
    }); function help_message(target_id, origin, message) {
        var target_id = target_id;
        var origin = origin;
        var message = message;
        if (origin == '40-1') {
            $('#P_title1').html('找招商经理');
        } else if (origin == '40-2') {
            $('#P_title1').html('预约砍价');
        }
        $('#target_id').val(target_id);
        $('#origin').val(origin);
        $('#n_content').val(message);

        $('#Pline_consult_hel').show();
        $('.gray_mask').show();
    }
    $(function() {
        var MFoot_lasturl = window.location.href;
        var MFoot_fromurl = document.referrer;
        $('#MCeng_lasturl_help').val(MFoot_lasturl);
        $('#MCeng_fromurl_help').val(MFoot_fromurl);
    });
    function help_check(obj) {
        if (obj.attr('help_check') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#n_name").val();
        var message = $("#n_content").val();
        var phone = $("#n_phone").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
        var target_id = $("#target_id").val();
        var origin = $("#origin").val();
        var gender = $("#sex").val();
        var MCeng_lasturl_1 = $("#MCeng_lasturl_help").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl_help").val();
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
            obj.attr('help_check', 1);
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    is_login: is_login,
                    name: name,
                    gender: gender,
                    telephone: phone,
                    message: message,
                    target_id: target_id,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    obj.attr('help_check', 0);
                    if (html.status == 'login') {
                        $('#Pline_consult_hel').hide();
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
                $('#Pline_consult_hel').hide();
                $('#Pline_Message').show();
                Auto_trigger();
            }
        }
    }</script>
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
<!-- 公共短信验证 -->
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
                <input type="text" class="text" style="width: 54%" name="telephone" id="first_telephone" value="" maxlength="11" readonly="readonly"></li>
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
        var telephone = $("#first_telephone").val();
        $.ajax({
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
        if (obj.attr('message_authen') == 1) {
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
            obj.attr('message_authen', 1);
            $.ajax({
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
                    obj.attr('message_authen', 0);
                    if (html == 1) {
                        $('#Pline_Message').hide();
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
<!-- 留言验证 end -->
<script>function first_checkMessage(obj) {
        if (obj.attr('first_checkMessage') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#f_name").val();
        var message = $("#f_content").val();
        var phone = $("#f_phone").val();
        var target_id = $("#f_target_id").val();
        var origin = $("#f_origin").val();
        var MCeng_lasturl_1 = window.location.href;
        var MCeng_fromurl_1 = document.referrer;
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;

        if (name == '' || name == '如 万先生') {
            alert('姓名不能为空！');
            return false;
        } else if (phone == '' || phone == '如 13111111111') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (!regexp.test(message)) {
            alert('留言格式不正确！');
            return false;
        } else {
            obj.attr('help_check', 1);
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
                    obj.attr('help_check', 0);
                    if (html.status == 'login') {
                        $('#f_Pline_consult').hide();
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
                $('#f_Pline_consult').hide();
                $('#Pline_Message').show();
                Auto_trigger();
            }
        }
    }

    function zhao_checkMessage(obj) {
        if (obj.attr('zhao_checkMessage') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#z_name").val();
        var content = $("#z_content").val();
        var phone = $("#z_phone").val();
        var contacts = $("#z_contacts").val();
        var position = $("#z_position").val();
        var origin = $("#z_origin").val();
        var target_id = $("#z_target_id").val();
        var MCeng_lasturl_1 = window.location.href;
        var MCeng_fromurl_1 = document.referrer;
        if (name == '' || name == '如 驾校网') {
            alert('项目名不能为空！');
            return false;
        } else if (contacts == '' || contacts == '请填写联系人') {
            alert('请填写联系人');
            return false;
        } else if (position == '' || position == '请填写职位') {
            alert('请填写职位');
            return false;
        } else if (phone == '' || phone == '请输入手机号') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (content == '') {
            alert('留言内容不能为空！');
            return false;
        } else {
            var message = content + ' 项目名：【' + name + '】，  职位：【' + position + '】。';
            obj.attr('zhao_checkMessage', 1);
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    is_login: is_login,
                    name: contacts,
                    telephone: phone,
                    message: message,
                    target_id: target_id,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    obj.attr('zhao_checkMessage', 0);
                    if (html.status == 'login') {
                        $('#z_Pline_consult').hide();
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
                $('#z_Pline_consult').hide();
                $('#Pline_Message').show();
                Auto_trigger();
            }
        }
    }</script>
<script>(function(m, ei, q, i, a, j, s) {
        m[a] = m[a] ||
        function() { (m[a].a = m[a].a || []).push(arguments)
        };
        j = ei.createElement(q),
        s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = i + '?v=' + new Date().getUTCDate();
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '//static.meiqia.com/dist/meiqia.js', '_MEIQIA');
    _MEIQIA('entId', 18836);
    _MEIQIA('withoutBtn', true);</script>
<!-- 双11弹层 样式-->
<style type="text/css">#ad_tanceng{ width: 12.25rem; height: 8rem; position: fixed; top: 40%; left: 22%; } #ad_tanceng img{ width: 12.25rem; height: 8rem; } #ad_tanceng span{ display: block; width: 0.95rem; height: 0.95rem; background: yellow; position: absolute; top: 0.1rem; right: 1.6rem; opacity: 0; }</style>
<!-- 双11弹层 -->
<!-- 屏蔽 <div id="ad_tanceng">
<a href="https://weidian.com/?userid=214234322"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/13491-3651.png"/></a>
<span id="display"></span></div> 
-->
<!-- 双11弹层 js-->
<!-- 屏蔽 <script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/fastclick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
//解除移动端的300毫秒的延迟
$(function() {
FastClick.attach(document.body);
});
//rem
// document.documentElement.style.fontSize=innerWidth/16+'px';
// onresize=function(){
// document.documentElement.style.fontSize=innerWidth/16+'px';
// //重新计算尺寸
// }
//设置font-size的值
// 让弹层渐隐渐现
var t=setTimeout(function(){
$("#ad_tanceng").fadeOut("slow")
},10000)
//点击X使弹层消失
$("#display").bind("click",function(){
$(this).parent().css("display","none")
})
</script>-->
<div id="div" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 15px; text-align:center; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);">
    <a id="widget" onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="color:#fff;">在线
        <br />咨询</a></div>
<!--<script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/fastclick.js"></script>-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/jquery.textslider.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/mindex.js"></script>
