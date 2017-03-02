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
