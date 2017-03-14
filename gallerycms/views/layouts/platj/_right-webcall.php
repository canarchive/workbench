<script language="javascript" type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/webcall.js"></script>
<!-- 400点击回拨 -->
<div class="gray_mask" style="display: none;"></div>
<div class="Pfind_money" id="click_Pfind4" style="display:none; ">
    <p class="p_title1 clearfix">
        <span class="fr" onclick="$('#click_Pfind4').hide();$('.gray_mask').hide();">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1b5cd-8225.png" alt="" /></span>
    </p>
    <div class="Pfind_money2">
        <p class="p_title2">晨阳水漆全国免费咨询热线</p>
        <ul class="p_ul">
            <!--<li style="color:#333; font-size:16px; font-weight:bold; ">免费通话<span style="color:#e93c00;"><?= Yii::$app->params['siteHotline']; ?>转95542</span></li>-->
            <li style="color:#333; font-size:16px; font-weight:bold; ">免费通话
                <span style="color:#e93c00;"><?= Yii::$app->params['siteHotline']; ?></span></li>
            <li style="color:#666; font-size:12px;">
                <span style="color:#999; font-size:12px;">请提供您的联系方式，加盟顾问会及时与您联系</span></li>
        </ul>
        <div class="name_box">
            <p>姓&nbsp;名：
                <input type="text" class="name" fourTelUserName="fourTelUserName" value="您的姓名" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}" id="name" name="name">性别：
                <label>
                    <input type="radio" class="a3" fourTelUserGender="fourTelUserGender" value="0" id="sex" name="tel_sex" checked="checked">男</label>
                <label>
                    <input type="radio" class="a3" value="1" fourTelUserGender="fourTelUserGender" id="sex" name="tel_sex">女</label></p>
            <p>手&nbsp;机：
                <input type="text" class="tel" maxlength="11" value="手机号码" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}" id="mobil" name="mobil"></p>
            <p>
                <input type="button" value="立即咨询" class="btn" onclick="Webcall();return false;" /></p>
            <!--<p style="color:#999;"><span style="color:#126ebc;">温馨提示：</span>通话费用将由企业支付，请放心拨打！</p>--></div>
        <input type="hidden" name="tid" id="tid" value="137829">
        <input type="hidden" name="cname" id="cname" value="晨阳水漆"></div>
</div>
<script>function showStory(cid, phone, cname) {
        $('#click_Pfind4').show();
        $('.gray_mask').show();
    }
    function Webcall() {
        var lasturl = window.location.href;
        var fromurl = document.referrer;
        var com_id = jQuery('#tid').val();
        var tel_name;
        var tel_sex;

        cname = jQuery("#cname").val();
        cn_num = jQuery('#mobil').val();
        tel_name = jQuery("#name").val();
        tel_name = tel_name.replace(/(^\s*)|(\s*$)/g, "");
        tel_sex = $('input:radio[id="sex"]:checked').val();

        if (tel_name == '' || tel_name == '您的姓名') {
            alert('请输入您的姓名！');
            return false;
        }
        if (cn_num == '手机号码' || cn_num == '') {
            alert('请填写您的联系方式！');
            return false;
        } else {
            var yanz = /^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/;
            if (yanz.test(cn_num) == false) {
                alert('请填写您正确的联系方式！');
                return false;
            }
        }
        // alert('是不是这个文件那');
        /*if(com_id != '' && cn_num != 0)
{
$('.advice-3-bot').hide();
var call=new WebCall400(com_id);
call.fourTelUserName=$('[fourTelUserName="fourTelUserName"]').val();
call.fourTelUserGender=$('[fourTelUserGender="fourTelUserGender"]:checked').val();
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
    jQuery.ajax({
        type:'get',
        url:'http://liuyan.jmw.com.cn/message/messageFor400Index.php',
        dataType:'jsonp',
        cache:false,
        async:false,
        jsonp:'fouroorecord',
        data:'phone='+cn_num+'&target_id='+com_id+'&sex='+tel_sex+'&name='+tel_name+'&cname='+cname+'&origin=16-2&content='+'通过400电话为'+cname+'项目留言，想了解加盟流程。请尽快联系！'+'&400index_lasturl='+lasturl+'&400index_fromurl='+fromurl,
        success:function(html){
            setTimeout(sleepReload(),'2000');                    
        }
    });
}
});
function sleepReload(){
window.location.reload();
}
} */

        if (com_id != '' && cn_num != 0) {
            $('.advice-3-bot').hide();
            $.ajax({
                type: 'get',
                dataType: 'jsonp',
                jsonp: 'fouroorecord',
                async: false,
                url: 'http://liuyan.jmw.com.cn/message/messageFor400Index_temporary.php',
                data: 'is_login=' + is_login + '&phone=' + cn_num + '&target_id=' + com_id + '&sex=' + tel_sex + '&name=' + tel_name + '&cname=' + cname + '&origin=16-2&content=' + '通过全国免费热线咨询' + cname + '项目留言，想了解加盟流程。请尽快联系！' + '&400index_lasturl=' + lasturl + '&400index_fromurl=' + fromurl,
                success: function(html) {
                    if (html.status == 'login') {
                        $('#click_Pfind4').hide();
                        $('.gray_mask').hide();
                        /*var call=new WebCall400(com_id);
        call.fourTelUserName=$('[fourTelUserName="fourTelUserName"]').val();
        call.fourTelUserGender=$('[fourTelUserGender="fourTelUserGender"]:checked').val();
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
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#two_message_id').val(html.id);
                    }
                }
            });

            if (is_login == 'unlogin') {
                $('#two_telephone').val(cn_num);
                //$('#tel_400').val('tel_400');
                $('#click_Pfind4').hide();
                $('#click_YZ').show();
                $('#black_ceng').hide();
                $('.gray_mask').show();
                Auto_trigger();
            }

        }
    }
    function sleepReload() {
        window.location.reload();
    }</script>
