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
