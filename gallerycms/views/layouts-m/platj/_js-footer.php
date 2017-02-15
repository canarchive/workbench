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
} (function(m, ei, q, i, a, j, s) {
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
