<script>if ($('.ajaxGetNumById').length > 0) {
        var ajaxGetNumByIdStr = '';
        $('.ajaxGetNumById').each(function() {
            ajaxGetNumByIdStr += 'target_id[]=' + $(this).val() + '&';
        });
        ajaxGetNumByIdStr = ajaxGetNumByIdStr.substring(0, ajaxGetNumByIdStr.length - 1);
        $.ajax({
            type: 'get',
            url: 'http://liuyan.jmw.com.cn/message/search_list_message_count.php',
            dataType: 'jsonp',
            jsonp: 'callback',
            data: ajaxGetNumByIdStr,
            success: function(html) {
                $('.apCountNumClass').html('<span>0</span>人申请');
                for (var o in html) {
                    $('#apCountNum' + html[o].target_id).html('<span>' + html[o].c + '</span>人申请')
                }
            }
        });
        $.ajax({
            type: 'get',
            url: 'http://person.jmw.com.cn/search_list_attention_count.php',
            dataType: 'jsonp',
            jsonp: 'callback',
            data: ajaxGetNumByIdStr,
            success: function(html) {
                $('.apattention').html('<span>0</span>人关注');
                for (var o in html) {
                    $('#attentionCountNum' + html[o].target_id).html('<span>' + html[o].c + '</span>人关注')
                }
            }
        });
        $.ajax({
            type: 'get',
            url: 'http://protectedapi.jmw.com.cn/admin/search_list_service.php',
            dataType: 'jsonp',
            jsonp: 'callback',
            data: ajaxGetNumByIdStr,
            success: function(json) {
                for (var o in json) {
                    if (json[o].service_id == '30' || json[o].service_id == '31' || json[o].service_id == '32') {
                        $('#zuan_' + json[o].target_id).show();
                    }
                    if (json[o].service_id == '33' || json[o].service_id == '34' || json[o].service_id == '35') {
                        $('#jin_' + json[o].target_id).show();
                    }
                    if (json[o].service_id == '61') {
                        $('#_' + json[o].target_id).show();
                    }
                    if (json[o].service_id == '63') {
                        $('#svip1_' + json[o].target_id).show();
                    }
                }
            }
        });

    }

    function showStory(cid, phone, cname) {
        var html = '<div class="advice-1"><p>' + cname + '全国免费咨询热线' + '</p><input type="hidden" name="tid" id="tid" value="' + cid + '"><input type="hidden" name="cname" id="cname" value="' + cname + '"></div>';
        var htmlphone = '<strong  style="color:#fff;font-size:24px;line-height:46px;padding-left:6px;">4000-500-555</strong>';
        jQuery("#advicephone").html(htmlphone);
        jQuery("#parameter").html(html);
        jQuery('#tel400_box').show();
    }
    function Webcall() {
        var com_id = jQuery('#tid').val();
        var tel_name;
        var tel_sex;
        /*
if(document.getElementById("tel_type0").checked) {
type = 0;
}else{
type = 1;
}
var cn_num = 0;
if(type == 0){
cn_num = jQuery('#mobil').val();
}else{
cn_num = jQuery("#qh").val()+jQuery("#phone").val();
}
if(cn_num == '区号固定电话') {
alert('请填写固定电话！');return false;
}*/
        cname = jQuery("#cname").val();
        cn_num = jQuery('#mobil').val();
        tel_name = jQuery("#name").val();
        tel_email = jQuery("#email").val();
        tel_name = tel_name.replace(/(^\s*)|(\s*$)/g, "");
        tel_sex = $('input:radio[id="sex"]:checked').val();
        var lasturl = window.location.href;
        var fromurl = document.referrer;

        if (tel_name == '' || tel_name == '请填写姓名！') {
            alert('请输入您的姓名');
            return false;
        }
        if (cn_num == '请填写手机号码！' || cn_num == '') {
            alert('请填写您的联系方式');
            return false;
        } else {
            var yanz = /^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/;
            if (yanz.test(cn_num) == false) {
                alert('请填写您正确的联系方式！');
                return false;
            }
        }
        if (tel_email != '') {
            var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
            if (!reg.test(tel_email)) {
                alert('邮箱格式有误！');
                return false;
            }
        }
        if (com_id != '' && cn_num != 0) {
            $('.advice-3-bot').hide();
            $.ajax({
                type: 'get',
                dataType: 'jsonp',
                jsonp: 'fouroorecord',
                async: false,
                url: 'http://liuyan.jmw.com.cn/message/messageFor400List_temporary.php',
                data: 'is_login=' + is_login + '&phone=' + cn_num + '&target_id=' + com_id + '&sex=' + tel_sex + '&name=' + tel_name + '&cname=' + cname + '&email=' + tel_email + '&origin=16-2-1&content=' + '通过全国免费热线咨询' + cname + '项目留言，想了解加盟流程。请尽快联系！' + '&400search_lasturl=' + lasturl + '&400search_fromurl=' + fromurl,
                success: function(html) {
                    if (html.status == 'login') {
                        $("#advice_hotline").hide();
                        $('#black_ceng').hide();
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
                        alert("留言成功！");
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#two_message_id').val(html.id);
                    }
                }
            });

            if (is_login == 'unlogin') {
                $('#two_telephone').val(cn_num);
                //$('#tel_400').val('tel_400');
                $('#advice_hotline').hide();
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
<!--script>
if($('.ajaxGetNumById').length>0)
{
var ajaxGetNumByIdStr = '';
$('.ajaxGetNumById').each(function(){
ajaxGetNumByIdStr+='target_id[]='+$(this).val()+'&';
});
ajaxGetNumByIdStr = ajaxGetNumByIdStr.substring(0,ajaxGetNumByIdStr.length-1);
$.ajax({
type:'get',
url:'http://liuyan.jmw.com.cn/message/search_list_message_count.php',
dataType:'jsonp',
jsonp:'callback',
data:ajaxGetNumByIdStr,
success:function(html){
$('.apCountNumClass').html('<span>0</span>人申请');
for(var o in html){  
$('#apCountNum'+html[o].target_id).html('<span>'+html[o].c+'</span>人申请')
}  
}
});
$.ajax({
type:'get',
url:'http://person.jmw.com.cn/search_list_attention_count.php',
dataType:'jsonp',
jsonp:'callback',
data:ajaxGetNumByIdStr,
success:function(html){
$('.apattention').html('<span>0</span>人关注');
for(var o in html){  
$('#attentionCountNum'+html[o].target_id).html('<span>'+html[o].c+'</span>人关注')
}  
}
});
$.ajax({
type:'get',
url:'http://protectedapi.jmw.com.cn/admin/search_list_service.php',
dataType:'jsonp',
jsonp:'callback',
data:ajaxGetNumByIdStr,
success:function(json){
for(var o in json){  
if(json[o].service_id=='30'||json[o].service_id=='31'||json[o].service_id=='32')
{
$('#zuan_'+json[o].target_id).show();
}
if(json[o].service_id=='33'||json[o].service_id=='34'||json[o].service_id=='35')
{
$('#jin_'+json[o].target_id).show();
}
if(json[o].service_id=='61')
{
$('#_'+json[o].target_id).show();
}
}  
}
});
}
/*  (function($){
$(window).load(function(){
$(".real_cont").mCustomScrollbar({
scrollButtons:{
enable:true
}
});
});
})(jQuery);*/
</script-->
