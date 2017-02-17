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
