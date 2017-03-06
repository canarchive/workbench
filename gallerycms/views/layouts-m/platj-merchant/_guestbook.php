<?php
$info = $this->context->mDatas['info'];
?>
<section class="ziXun" id="ljzx">
    <div class="wrap" style="color:#e44b46; border-bottom:1px solid #e8eaee; line-height:50px;">找<?= $info['name']; ?>免费设计量房</div>
    <form action="" method="post" class="Iwant wrap" id="form_biao">
        <div class="clear">
            <p class="fl current6">
                <label>姓名</label>
                <input name="name" id="namedbly" value="" type="text"></p>
            <div class="fl you_a">
                <label class="fl current8">性别:</label>
                <label class="fl" id="label5">
                    <i class="icon_sex5 fl icon_sex6"></i>男 &nbsp;</label>
                <label class="fl" id="label6">
                    <i class="icon_sex5 fl "></i>女</label>
                <input name="gender" class="fl" value="0" id="gender" type="hidden">
                <input name="target_id" id="target_id" value="137829" type="hidden">
                <input value="13" name="origin" type="hidden">
                <input value="" name="m_dirname" id="m_dirname" type="hidden">
                <input name="MFoot_lasturl" id="MFoot_lasturl" value="http://60.205.145.0/filesys/spider/pages/source-deal/jmw-m/index-merchant.php" type="hidden">
                <input name="MFoot_fromurl" id="MFoot_fromurl" value="http://60.205.145.0/filesys/spider/pages/source-deal/jmw-m/" type="hidden">
                <input name="message_num" id="message_num_m" value="1" type="hidden"></div>
        </div>
        <p>
            <label>手机</label>
            <input name="phone" id="phonedbly" value="" maxlength="11" type="text"></p>
        <p class="liuY">
            <label>留言</label>
            <input name="content" id="contentdbly" value="" type="text"></p>
        <p class="current9">
            <a onclick="return checkMessageInfo_new_bx($(this));">提交留言</a></p>
        <style type="text/css">.tongShi{padding:14px 0 8px 0px;height:11px;line-height:9px;} .tongShi input{margin:2px 12px 0 0;} .tongShi p a{color:#e43c01;font-weight:bold; }</style>
        <div class="tongShi clearfix">
            <input name="zhanhui" value="0" type="hidden">
            <!--<input type="checkbox" name="zhanhui" class="fl" value="1" checked style="margin:5px 12px 0 0" />
            <p class="fl" style="width:90%;font-size:12px;padding-left:0;">已有
                <i style="color:#e43c01;"></i>人想去
                <span style="color: #E43C01;font-weight: bold;line-height:20px">第九届中国品牌加盟投资博览会-北京国家会议中心</span>现场看
                <span style="color: #E43C01;font-weight: bold;">晨阳水漆</span>创业项目(
                <i style="color:#e43c01;">我也想去</i>)</p>--></div>
        <!--<p style="width:100%; padding-left:0px; line-height:25px; background:#f9f9f9; font-size:12px;margin-top:30px">已有<i style="color:#e43c01;"></i>位创业者线上发送意向：在<i style="color:#e43c01;position:relative;">北京<span style="font-size:25px;position:absolute;top:-11px;">.</span>&nbsp;&nbsp;国家会议中心</i>现场去看<i style="color:#e43c01;">投资博览会</i></p>--></form>
</section>
<script type="text/javascript">$('#label5').click(function() {
        $('#label5 i').toggleClass('icon_sex6');
        $('#label6 i').removeClass('icon_sex6');
        $('#gender').val('0');
    }); $('#label6').click(function() {
        $('#label6 i').toggleClass('icon_sex6');
        $('#label5 i').removeClass('icon_sex6');
        $('#gender').val('1');
    })</script>
<script>function checkMessageInfo_new_bx(obj) {
        if (obj.attr('checkMessageInfo_new') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#namedbly").val();
        var content = $("#contentdbly").val();
        var mobile = $("#phonedbly").val();
        //var m_dirname = $("#m_dirname").val();
        //var target_id = $("#target_id").val();
        //var origin = $("#origin").val();
        //var gender = $("#gender").val();
        //var zhanhui = $("input[name='zhanhui']:checked").val();
        //if (zhanhui == undefined) {
            //zhanhui = 0;
        //}
        //var MFoot_lasturl = $("#MFoot_lasturl").val();
        //var MFoot_fromurl = $("#MFoot_fromurl").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|&mdash;|[\u4e00-\u9fa5]){2,199}$/;

        if (name == '' || name == '如 万先生') {
            alert('姓名不能为空！');
            return false;
        } else if (!regexp.test(content)) {
            alert('留言格式不正确！');
            return false;
        } else if (mobile == '' || mobile == '如 13111111111') {
            alert('联系方式不能为空！');
            return false;
        } else if (!mobile.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
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
            //$('#form_biao').submit();
            obj.attr('checkMessageInfo_new', 1);
        $.ajax({
            type: "post",
            url: '/signup.html',
            dataType: "json",
            //jsonp: "callback",
            data: {
                name: name,
                mobile: mobile,
                info_id: '',
                info_sort: '',
                info_position: '',
                page: $("#current_page").val(),
                message: content,
                _csrf: $("#_csrf").val()
            },
            success: function(html) {
                console.log(html);
                obj.attr("message_pop_up", 0);
                if (html.status == 200) {
                    $("#click_zongPfind1").hide();
                    $("#zong_gray").hide();
                    alert("报名成功！");
                    window.location.reload();
                } else {
                    alert(html.message);
                    //$("#click_zongPfind1").hide();
                    //$("#click_zongYZ").show();
                    //v9_Auto_trigger();
                    $("#first_message_id").val(html.id);
                    //$("#first_telephone").val(phone);
                }
            }
        });

            /*if (is_login == 'unlogin') {
                $('#Pline_Message').show();
                $('.gray_mask').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }*/
        }

    }</script>
<style>.icon_sex5{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:11px 6px 0 0; } .icon_sex6{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:11px 6px 0 0; }</style>
