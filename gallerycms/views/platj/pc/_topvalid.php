<div class="gray_mask" style="display:none;"></div>
<div class="Pfind_money" id="click_YZ" style="display:none; ">
    <script>function Auto_trigger() {
            var curCount = 60;
            $("#check_miao").attr("disabled", "true");
            $("#check_miao").val("" + curCount + "秒");
            //timer处理函数
            function SetRemainTime() {

                if (curCount == 0) {
                    window.clearInterval(InterValObj); //停止计时器
                    $("#check_miao").removeAttr("disabled"); //启用按钮
                    $("#check_miao").val("重新发送");
                    code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
                } else {
                    curCount--;
                    $("#check_miao").attr("disabled", "false");
                    $("#check_miao").val("" + curCount + "秒");
                }
            }
            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        }</script>
    <p class="p_title1 clearfix">
        <span class="fr" onclick="$('#click_YZ').hide();$('.gray_mask').hide();window.clearInterval(InterValObj);">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1b5cd-8225.png" alt="" /></span>
    </p>
    <div class="Pfind_money2">
        <p class="p_title2">短信验证</p>
        <ul class="p_ul">
            <li style="color:#333;">为便于客服及时联系您,请验证手机号码</li></ul>
        <div class="name_box">
            <form>
                <p>
                    <span>
                        <em class="em1">*</em>
                        <em class="w4">手机号码</em>
                        <em class="em2">:</em></span>
                    <input type="text" class="txt" style=" border:medium none;" name="telephone" value="" id="two_telephone" placeholder="请输入手机号" maxlength="11" /></p>
                <p>
                    <span>
                        <em class="em1">*</em>
                        <em>短信验证码</em>
                        <em class="em2">:</em></span>
                    <input type="text" name="code" id="two_code" value="" class="txt" placeholder="请输入验证码" maxlength="4" />
                    <input type="button" value="60秒" class="button fr" id="check_miao" onclick="checkCode();" /></p>
                <p>
                    <input type="button" value="确定" class="btn" onclick="return two_check_code();" /></p>
                <input type="hidden" name="first_message_id" value="" id="two_message_id">
                <input type="hidden" name="gem_collection" value="" id="gem_collection">
                <input type="hidden" name="tel" value="" id="tel">
                <input type="hidden" name="tel_400" value="" id="tel_400"></form>
        </div>
    </div>
</div>
<style type="text/css">.gray_mask { background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;display: none;height: 100%;left: 0;position: fixed;top: 0;width: 100%;z-index: 990;} .Pfind_money .name_box p span{ width:6em; display:inline-block; font-size:14px; } .Pfind_money .name_box p span .em1{ float:left; color:#e10000; margin-right:2px;} .Pfind_money .name_box p span .em2{ float:right; } .Pfind_money .name_box .txt{ width:120px; height:36px; line-height:36px; border:1px solid #cccccc; margin-left:3px; padding-left:8px; box-sizing:border-box; } .Pfind_money .name_box .w2{letter-spacing:3em; margin-right:-3em;} .Pfind_money .name_box .w4{letter-spacing:0.3em; margin-right:-0.3em;} .Pfind_money .name_box .button{ width:92px; height:36px; background:#eeeae9; border:1px solid #cccccc; color:#333; }</style>
<script type="text/javascript">function checkCode() {
        var curCount = 60;
        $("#check_miao").attr("disabled", "true");
        $("#check_miao").val("" + curCount + "秒");
        //timer处理函数
        function SetRemainTime() {

            if (curCount == 0) {
                window.clearInterval(InterValObj); //停止计时器
                $("#check_miao").removeAttr("disabled"); //启用按钮
                $("#check_miao").val("重新发送");
                code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
            } else {
                curCount--;
                $("#check_miao").attr("disabled", "false");
                $("#check_miao").val("" + curCount + "秒");
            }
        }
        InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        var telephone = $("#two_telephone").val();
        $.ajax({
            async: false,
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
    function two_check_code() {
        var phone = $("#two_telephone").val();
        var code = $("#two_code").val();
        var tel = $("#tel").val();
        //var tel_400 = $("#tel_400").val();
        var gem_collection = $("#gem_collection").val();
        var two_message_id = $("#two_message_id").val();
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
            $.ajax({
                async: false,
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message_check.php',
                data: {
                    phone: phone,
                    code: code,
                    gem: gem_collection,
                    id: two_message_id
                },
                dataType: 'jsonp',
                jsonp: 'callback',
                success: function(html) {
                    if (html == 1) {
                        $('#click_YZ').hide();
                        $('.gray_mask').hide();
                        if (tel == 'tel') {
                            $('#button_click').attr('onclick', 'return checkForm($(this))');
                            function modify_state() {
                                is_login = 'login';
                            }
                            modify_state();
                        }
                        /*else if(tel_400 == 'tel_400'){
                                var com_id = jQuery('#tid').val();
                                if(com_id != '')
                                {
                                    var call=new WebCall400(com_id);
                                    call.fourTelUserName=$('[fourTelUserName="fourTelUserName"]').val();
                                    call.fourTelUserGender=$('[fourTelUserGender="fourTelUserGender"]:checked').val();
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
                                }
                            }*/
                        else {
                            alert('留言成功！');
                            window.location.reload();
                        }
                    } else {
                        alert('验证码不正确！请输入正确的验证码');
                    }
                }
            });
        }
    }</script>
