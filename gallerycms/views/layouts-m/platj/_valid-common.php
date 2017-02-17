<!-- 公共短信验证 -->
<div class="Pline_consult" id="Pline_Message" style="display:none;">
    <script>function Auto_trigger() {
            var curCount = 60;
            $("#chBtn").attr("disabled", "true");
            $("#chBtn").val("" + curCount + "秒");
            //timer处理函数
            function SetRemainTime() {

                if (curCount == 0) {
                    window.clearInterval(InterValObj); //停止计时器
                    $("#chBtn").removeAttr("disabled"); //启用按钮
                    $("#chBtn").val("重新发送");
                    code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
                } else {
                    curCount--;
                    $("#chBtn").attr("disabled", "false");
                    $("#chBtn").val("" + curCount + "秒");
                }
            }
            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        }</script>
    <div class="ZJ_title1">
        <p class="span1">短信验证</p>
        <p class="span2">温馨提示：为便于客服及时联系您，请验证手机号码</p></div>
    <form>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>
                    <em class="w4">手机号码</em>
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="telephone" id="first_telephone" value="" maxlength="11" readonly="readonly"></li>
            <li>
                <span>
                    <em class="em1">*</em>
                    <em>短信验证码</em>
                    <em class="em2">:</em></span>
                <input type="text" name="code" class="text" id="che_code" placeholder="请输入验证码" value="" maxlength="4" />
                <input type="button" value="60秒" class="button fr" id="chBtn" onclick="checkCodeClick();" /></li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consult').hide();$('.gray_mask').hide();window.clearInterval(InterValObj);">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return message_check_code($(this));">确定</a></li>
            <input type="hidden" name="first_message_id" value="" id="first_message_id">
            <input type="hidden" name="tel" value="" id="tel">
            <input type="hidden" name="gem_collection" value="" id="gem_collection">
            <input type="hidden" name="tel_400" value="" id="tel_400">
            <input type="hidden" name="message_num" id="message_num_m" value="1" /></ul>
    </form>
</div>
<script>
function checkCodeClick() {
    var curCount = 60;
    $("#chBtn").attr("disabled", "true");
    $("#chBtn").val("" + curCount + "秒");
    //timer处理函数
    function SetRemainTime() {

        if (curCount == 0) {
            window.clearInterval(InterValObj); //停止计时器
            $("#chBtn").removeAttr("disabled"); //启用按钮
            $("#chBtn").val("重新发送");
            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
        } else {
            curCount--;
            $("#chBtn").attr("disabled", "false");
            $("#chBtn").val("" + curCount + "秒");
        }
    }
    InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
    var telephone = $("#first_telephone").val();
    $.ajax({
        type: 'get',
        url: 'http://person.jmw.com.cn/telephone_check_again.php',
        dataType: 'jsonp',
        jsonp: 'callback',
        data: {
            telephone: telephone
        },
        success: function(html) {}
    });

}
function message_check_code(obj) {
    if (obj.attr('m_biaoye') == 1) {
        alert('正在提交中。。请稍后');
        return false;
    }
    var phone = $("#first_telephone").val();
    var code = $("#che_code").val();
    var gem_collection = $("#gem_collection").val();
    var tel_400 = $("#tel_400").val();
    var tel = $("#tel").val();
    var first_message_id = $("#first_message_id").val();
    if (phone == '') {
        alert('联系方式不能为空！');
        return false;
    } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false;
    } else if (code == '') {
        alert('请输入验证码！');
        return false;
    } else {
        //$('#check_two_message').submit();
        obj.attr('m_biaoye', 1);
        $.ajax({
            type: 'get',
            url: 'http://liuyan.jmw.com.cn/message/first_message_check.php',
            data: {
                phone: phone,
                code: code,
                gem: gem_collection,
                id: first_message_id
            },
            dataType: 'jsonp',
            jsonp: 'callback',
            success: function(html) {
                obj.attr('m_biaoye', 1);
                if (html == 1) {
                    $('.Pline_consult').hide();
                    $('.gray_mask').hide();
                    if (tel == 'tel') {
                        function modify_state() {
                            is_login = 'login';
                        }
                        modify_state();
                        /*}else if(tel_400 == 'tel_400'){
                var com_id = jQuery('#si_tid').val();
                if(com_id != ''){
                    var call=new WebCall400(com_id);
                    call.fourTelUserName='创业者';
                    call.fourTelUserGender=2;
                    call.webcall(phone);
                    jQuery.ajax({
                        url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
                        type:'get',
                        data:'com_id='+com_id+'&cb_num='+phone,
                        cache:false,
                        dataType:'jsonp',
                        async:false,
                        jsonp: "call_status",//服务端用于接收callback调用的function名的参数
                        success:function(data,text)
                        {
                            alert(data.msg);
                            setTimeout(sleepReload(),'2000');  
                        }
                    });
                }*/
                    } else {
                        alert('留言成功！');
                        window.location.reload();
                    }

                } else {
                    alert('验证码不正确！请输入正确的验证码');
                }
            }
        });
    }
} 
(function(m, ei, q, i, a, j, s) {
    m[a] = m[a] ||
    function() { (m[a].a = m[a].a || []).push(arguments)
    };
    j = ei.createElement(q),
    s = ei.getElementsByTagName(q)[0];
    j.async = true;
    j.charset = 'UTF-8';
    j.src = i + '?v=' + new Date().getUTCDate();
    s.parentNode.insertBefore(j, s);
})(window, document, 'script', '//static.meiqia.com/dist/meiqia.js', '_MEIQIA');
_MEIQIA('entId', 18836);
_MEIQIA('withoutBtn', true);
</script>
<div id="div" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 15px; text-align:center; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);">
    <a id="widget" onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="color:#fff;">在线
        <br />咨询</a></div>
<!-- 项目页底部定位 endd -->
