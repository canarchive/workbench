<script>//JQuary 方法做选项卡
    $(function() {
        $(".link a").click(function() {
            $(".con .jiaMeng_ul").css("display", "none");
            $($(".con .jiaMeng_ul")[$(this).index(".link a")]).css("display", "block");
        })
    })</script>
<!-- 标项页创业指导 在线咨询 -->
<div class="Pline_consult" id="Pline_consult1" style="display:none;">
    <form action="" method="post" id="form2">
        <p class="P_title1">晨阳水漆免费咨询</p>
        <p class="ZJ_title2">你好，我是中国加盟网创业顾问
            <span id="spd_kf">cindy</span>，请问有 什么可以帮到您的？</p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="name" id="kf_name" placeholder="请输入姓名" value="" maxlength="6" />
                <p class="li_sex fr">&nbsp;&nbsp;性别:
                    <label id="label3" style="display:inline-block;">
                        <i class="icon_sex3 fl icon_sex4"></i>男 &nbsp;</label>
                    <label id="label4" style="display:inline-block;">
                        <i class="icon_sex3 fl "></i>女</label>
                </p>
            </li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="phone" id="kf_phone" placeholder="请输入手机号" value="" maxlength="11" style="width:40%" /></li>
            <li>
                <span class="fl">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="content" id="kf_content" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些?</textarea></li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult1').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return checkMessageInfo_new_kf($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="gender" class="fl" id="kf_sex" value="0">
        <input type="hidden" name="target_id" id="target_id" value="137829">
        <input type="hidden" value="" name="origin" id="kf_origin">
        <input type="hidden" value="" name="m_dirname">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" />
        <input type="hidden" name="message_num" id="message_num_m" value="1" /></form>
</div>
<script type="text/javascript">$('#label3').click(function() {
        $('#label3 i').toggleClass('icon_sex4');
        $('#label4 i').removeClass('icon_sex4');
        $('#kf_sex').val('0');
    }); $('#label4').click(function() {
        $('#label4 i').toggleClass('icon_sex4');
        $('#label3 i').removeClass('icon_sex4');
        $('#kf_sex').val('1');
    })</script>
<script>function checkMessageInfo_new_kf(obj) {
        if (obj.attr('checkMessageInfo_new_kf') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#kf_name").val();
        var message = $("#kf_content").val();
        var phone = $("#kf_phone").val();
        var sex = $("#kf_sex").val();
        var target_id = $("#target_id").val();
        var origin = $("#kf_origin").val();
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
        } else if (content == '') {
            alert('留言内容不能为空！');
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
            obj.attr('checkMessageInfo_new_kf', 1);
            $.ajax({
                async: false,
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
                    obj.attr('checkMessageInfo_new_kf', 0);
                    if (html.status == 'login') {
                        $('#Pline_consult1').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);
                    }
                }
            });

            if (is_login == 'unlogin') {
                $('#Pline_consult1').hide();
                $('#Pline_Message').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }

        }
    }</script>
<style>.icon_sex3{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; } .icon_sex4{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; } .kf-all{ display: none; width: 100%; height: 100%; background: rgba(0,0,0,.5); position: fixed; z-index: 1000; top:0; left:0; } .kf{ width: 270px; height: 334px; border-radius: 20px; background: #ffffff; position: absolute; top:50%; left:50%; margin-top: -167px; margin-left: -135px; } .kf-title{ width: 100%; text-align: center; height: 37px; line-height: 37px; border-bottom: 1px solid #E8E8E8; font-size: 17px; color: #333333; } .kf-name{ height: 33px; width: 100%; line-height: 33px; border-bottom: 1px solid #E8E8E8; } .kf-liuyan,.kf-name label{ margin-left: 21px; margin-right: 6px; } .kf-name input{ height: 23px; width: 180px; border: none; color:#999; } .kf-liuyan{ height: 51px; margin-top: 15px; } .kf-liuyan textarea { margin-top: -4px; vertical-align: middle; width: 170px; height: 50px; line-height: 20px; color: #999; border: none; font-size: 0.6875rem; font-family: "Microsoft YaHei"; } .kf-button{ border-top: 1px solid #E8E8E8; } .kf-button a{ display: block; float: left; width: 134px; color: #347AE2; line-height: 40px; text-align: center; }</style>
<script>$('#tel_label3').click(function() {
        $('#tel_label3 i').toggleClass('icon_tel_sex4');
        $('#teo_label4 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('0');
    }); $('#teo_label4').click(function() {
        $('#teo_label4 i').toggleClass('icon_tel_sex4');
        $('#tel_label3 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('1');
    })

    function check_is_login2(pid, ispay, paystate, origin, brand_name) {
        if (ispay == 1 && paystate == 2) {
            $('.toggle_shu1').hide();
            $('.chaKan').hide();
            $('.toggle_shu2').show();
        } else {
            if (is_login == 'login') {
                $('.toggle_shu1').hide();
                $('.chaKan').hide();
                $('.toggle_shu2').show();
            } else if (is_login == 'unlogin') {
                $('.inquire_tele').show();
                $('.gray_mask').show();
                $('#tel_content').val('我想查看' + brand_name + '项目的加盟电话，了解项目情况，请尽快联系我！');
                $('#tel_origin').val(origin);
            }
        }
    }

    function see_tel(obj) {
        if (obj.attr('see_tel') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#tel_name").val();
        var message = $("#tel_content").val();
        var phone = $("#tel_phone").val();
        var sex = $("#tel_sex").val();
        var target_id = $("#tel_target_id").val();
        var origin = $("#tel_origin").val();
        if (origin == 27) {
            var tel = 'tel';
        }
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
        } else if (content == '') {
            alert('留言内容不能为空！');
            return false;
        } else {
            obj.attr('see_tel', 1);
            $.ajax({
                async: false,
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
                    obj.attr('see_tel', 0);
                    if (html.status == 'login') {
                        $('.inquire_tele').hide();
                        $('.gray_mask').hide();
                    } else if (html.status == 'unlogin') {

                        $('#first_message_id').val(html.id);
                    }
                }
            });
            if (is_login == 'unlogin') {
                $('.inquire_tele').hide();
                $('#Pline_Message').show();
                if (tel == 'tel') {
                    $('#tel').val('tel');
                }
                $('#first_telephone').val(phone);
                Auto_trigger();
            }

        }
    }</script>
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
<!--<a onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 14px; padding-left: 13px; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);">在线
    <br />咨询</a>-->
