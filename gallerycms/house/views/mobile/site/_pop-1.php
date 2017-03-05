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
            $('#P_title').html('免费设计');
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
