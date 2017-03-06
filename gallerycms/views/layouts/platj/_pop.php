<!------------新版仿商桥模块 B------------>
<link href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/v9_style.css" type="text/css" rel="stylesheet" />
<!--留言弹框验证(1)-->
<script>
$(function() {
    var MCeng_lasturl = window.location.href;
    var MCeng_fromurl = document.referrer;
    $("#MCeng_lasturl_1").val(MCeng_lasturl);
    $("#MCeng_fromurl_1").val(MCeng_fromurl);
});
function message_check(infoId, infoSort, infoPosition, formTitle, message) {
    formTitle = !formTitle ? '免费设计' : formTitle;
    $("#form_title").text(formTitle);
    $("#button_title").val(formTitle);
    $("#info_id").val(infoId);
    $("#info_sort").val(infoSort);
    $("#info_position").val(infoPosition);
    //$("#p_message").val(message);
    $("#click_zongPfind1").show();
    $("#zong_gray").show();
}
</script>
<div id="zong_gray"></div>
<div class="zong_Pfind" id="click_zongPfind1">
    <form action="" method="post" id="p_form">
        <p class="p_title1 clear">
            <span class="fr" onclick='$("#click_zongPfind1").hide();$("#zong_gray").hide();'>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/close_03.png" alt="" /></span>
        </p>
        <div class="zong_Pfind2">
            <p class="p_title2" id="form_title">免费报价</p>
            <ul class="p_ul">
                <li style="color:#666;">请您提供联系方式，以方便我们及时为您提供服务</li></ul>
            <div class="name_box">
                <p>
                    <em class="em1">*</em>姓&nbsp;名：
                    <input type="text" class="name" name="name" id="p_name" value="test" onfocus='if(this.value=="请输入姓名"){this.value=""}' onblur='if(this.value==""){this.value="请输入姓名"}' maxlength="6">
                    <!--性别：
                    <label>
                        <input type="radio" class="a3" value="0" id="sexm" name="sex" checked>男</label>
                    <label>
                        <input type="radio" class="a3" value="1" id="sexfm" name="sex">女</label></p>-->
                <p>
                    <em class="em1">*</em>手&nbsp;机：
                    <input type="text" class="tel" name="phone" id="p_phone" onfocus='if(this.value=="请输入手机号"){this.value=""}' onblur='if(this.value==""){this.value="请输入手机号"}' value="13200000002" maxlength="11"></p>
                <p>
                    <input type="button" value="快联系我" class="btn" id="button_title" onclick="v9_check($(this));" /></p>
            </div>
        </div>
        <input type="hidden" name="content" id="p_message" value="">
        <input type="hidden" name="info_id" id="info_id" value="">
        <input type="hidden" name="info_sort" id="info_sort" value="">
        <input type="hidden" name="info_position" id="info_position" value="">
    </form>
</div>
<script>
function v9_check(obj) {
    if (obj.attr("message_pop_up") == 1) {
        alert("正在提交中。。请稍后");
        return false;
    }
    var name = $("#p_name").val();
    var message = '';//$("#p_message").val();
    var mobile = $("#p_phone").val();
    //var sex = $('input[name="sex"]:checked').val();
    var info_id = $("#info_id").val();
    var info_sort = $("#info_sort").val();
    var info_position = $("#info_position").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    /*if (name == "") {
        alert("姓名不能为空！");
        return false;
    } else */
    if (mobile == "") {
        alert("联系方式不能为空！");
        return false;
    } else if (!mobile.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert("请输入正确的手机号码！");
        return false;
    } else {
        obj.attr("message_pop_up", 1);

        function show() {
            obj.attr("message_pop_up", 0);
        }
        window.setTimeout(show, 2000);
        $.ajax({
            type: "post",
            url: '/signup.html',
            dataType: "json",
            //jsonp: "callback",
            data: {
                name: name,
                mobile: mobile,
                info_id: info_id,
                info_sort: info_sort, 
                info_position: info_position,
                page: $("#current_page").val(),
                _csrf: $("#_csrf").val()
            },
            success: function(html) {
                alert(html.status);
                console.log(html);
                obj.attr("message_pop_up", 0);
                if (html.status == 200) {
                    $("#click_zongPfind1").hide();
                    $("#zong_gray").hide();
                    alert("报名成功！");
                    window.location.reload();
                } else {
                    alert(html.message);
                    $("#click_zongPfind1").hide();
                    //$("#click_zongYZ").show();
                    //v9_Auto_trigger();
                    $("#first_message_id").val(html.id);
                    $("#first_telephone").val(phone);
                }
            }
        });

    }
}
</script>
<!--留言第二个弹框验证-->
<div class="zong_Pfind" id="click_zongYZ">
    <script>function v9_Auto_trigger() {
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
    <p class="p_title1 clearfix">
        <span class="fr" onclick='$("#click_zongYZ").hide();$("#zong_gray").hide();window.clearInterval(InterValObj);'>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/close_03.png" alt="" /></span>
    </p>
    <div class="zong_Pfind2">
        <form>
            <p class="p_title2">短信验证</p>
            <ul class="p_ul">
                <li style="color:#333;">为便于客服及时联系您,请验证手机号码</li></ul>
            <div class="name_box">
                <p>
                    <span>
                        <em class="em1">*</em>
                        <em class="w4">手机号码</em>
                        <em class="em2">:</em></span>
                    <input type="text" class="txt" style=" border:medium none;" name="telephone" id="first_telephone" value="" maxlength="11" readonly="readonly" /></p>
                <p class="clear">
                    <span class="fl">
                        <em class="em1">*</em>
                        <em>短信验证码</em>
                        <em class="em2">:</em></span>
                    <input type="text" name="code" class="txt" class="text" id="che_code" placeholder="请输入验证码" value="" maxlength="4" />
                    <input type="button" value="60秒" class="button fr" id="chBtn" onclick="checkCodeClick();" /></p>
                <p>
                    <input type="button" value="确定" class="btn" onclick="return message_check_code($(this));" /></p>
                <input type="hidden" name="first_message_id" value="" id="first_message_id"></div>
        </form>
    </div>
</div>
<script>function checkCodeClick() {
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
            type: "get",
            url: "http://person.jmw.com.cn/telephone_check_again.php",
            dataType: "jsonp",
            jsonp: "callback",
            data: {
                telephone: telephone
            },
            success: function(html) {}
        });

    }
    function message_check_code(obj) {
        if (obj.attr("message_authen") == 1) {
            alert("正在提交中。。请稍后");
            return false;
        }
        var phone = $("#first_telephone").val();
        var code = $("#che_code").val();
        var first_message_id = $("#first_message_id").val();
        if (phone == "") {
            alert("联系方式不能为空！");
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert("请输入正确的手机号码！");
            return false;
        } else if (code == "") {
            alert("请输入验证码！");
            return false;
        } else {
            obj.attr("message_authen", 1);

            function show() {
                obj.attr("message_authen", 0);
            }
            window.setTimeout(show, 2000);
            $.ajax({
                type: "get",
                url: "http://liuyan.jmw.com.cn/message/first_message_check.php",
                data: {
                    phone: phone,
                    code: code,
                    id: first_message_id
                },
                dataType: "jsonp",
                jsonp: "callback",
                success: function(html) {
                    obj.attr("message_authen", 0);
                    if (html == 1) {
                        $("#click_zongYZ").hide();
                        $("#zong_gray").hide();
                        alert("留言成功！");
                        window.location.reload();
                    } else {
                        alert("验证码不正确！请输入正确的验证码");
                    }
                }
            });
        }
    }</script>
<!--留言弹框验证 end-->
