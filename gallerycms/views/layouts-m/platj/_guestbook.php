<!-- 我要留言 -->
<style type="text/css">.gray_mask{ background:rgba(0,0,0,.4); position:fixed; top:0; left:0; width:100%; height:100%; z-index:990; display:none; } .I_speak{ width:100%; height:41px; background:#404042; margin-top:4px; position:fixed; bottom:0; z-index:990;} .I_speak .li_left{ width:17.5%; background:#252724; color:#fff; height:41px; text-align:center; font-size:0.75rem; position:relative; } .I_speak .li_left i{ position:absolute; display:block; width:17px; height:17px; top:1px; right:14%; } .I_speak .li_left p{ margin-top:6px; line-height:16px; } .I_speak .li_center{ width:62%; } .I_speak .li_center input{ width:91.5%; height:31px; margin:4px auto; background:#e4e1e1; color:#a5a5a5; border:none; border-radius:6px; padding-left:13px; box-sizing:border-box; display:block; } .I_speak .li_right{ width:16%; background:#169e16; height:31px; border-radius:5px; margin-top:4px; } .I_speak .li_right dl{ margin:auto; width:81%; } .I_speak .li_right dt{ width:15px; height:15px; margin-top:8px ; } .I_speak .li_right dd{ font-size:0.75rem; color:#fff; line-height:14px; margin-left:6px;margin-top:2px;} @media (min-width:320px) and (max-width:365px){ .I_speak .li_right dd{ margin-left:2px;margin-top:2px;} } @media screen and (min-width:384px){ .I_speak .li_right dl{ margin:auto; width:74%; } } .Pline_consultL{ background:#fff; width:83%; position:fixed; left:8.5%; top:20%; border-radius:10px; z-index:1305; display:none; } .Pline_consultL .P_title1{ height:45px; line-height:45px; text-align:center; border-bottom:1px solid #e8e8e8; font-size:0.95rem; } .Pline_consultL ul li{ line-height:42px; padding:0 3%; border-bottom:1px solid #e8e8e8; font-size:0.8rem;} .Pline_consultL ul li .text{ width:33%; height:28px;font-size:0.85rem; color:#999; box-sizing:border-box; padding-left:3px; margin-left:3px; border:medium none; } .Pline_consultL ul li .button{ width:32%; height:28px; border:1px solid #e10000; color:#e10000; line-height:28px; text-align:center; background:#fff; margin-top:8px; padding:0; border-radius:2px; } .Pline_consultL .li_sex{ font-size:0.8rem; margin-right:8px; } .Pline_consultL ul li span .em1{ float:left; color:#e10000; margin-right:2px;} .Pline_consultL ul li textarea{ height:40px; font-family: "微软雅黑";width:81%;font-size:0.85rem; margin-left:3px; margin-top:10px; line-height:20px; color:#999; border:medium none; } @media screen and (max-width:330px){ .Pline_consultL ul li textarea{ width:79%; } } .Pline_consultL ul .li5{ height:46px; line-height:46px; border-bottom:none;} .Pline_consultL ul li a{ text-align:center; width:50%; display:inline-block; font-size:0.95rem; } .Pline_consultL ul .a1{ border-right:1px solid #e8e8e8; box-sizing:border-box; color:#cdcdcd; } .Pline_consultL ul .a2{ color:#4283e4; }</style>
<script language="javascript" type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/webcall.js"></script>
<script language="javascript" type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/iscroll.js"></script>
<ul class="I_speak clear">
    <li class="fl li_left" onclick="$('.Pline_consultL').show();$('.gray_mask').show();">
        <p>我要
            <br />留言</p>
        <i>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/2de72-9761.png" alt="" /></i>
    </li>
    <li class="fl li_center">
        <input type="text" name="phone" id="si_mobel" value="输入您的电话:138******10" onfocus="if(this.value=='输入您的电话:138******10'){this.value=''}" onblur="if(this.value==''){this.value='输入您的电话:138******10'}" maxlength="11" /></li>
    <li class="fl li_right" onclick="si_Webcall();return false;">
        <dl class="clear">
            <dt class="fl">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/00698-5306.png" alt="" /></dt>
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
