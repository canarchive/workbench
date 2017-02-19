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
