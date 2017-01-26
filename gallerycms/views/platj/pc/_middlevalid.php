<div class="Pfind_money" id="click_Pfind1" style="display:none; ">
    <p class="p_title1 clearfix">
        <span class="fr" onclick="$('#click_Pfind1').hide();$('.gray_mask').hide();$('#button_click').attr('onclick','return checkForm($(this))');">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1b5cd-8225.png" alt="" /></span>
    </p>
    <div class="Pfind_money2">
        <form action="" method="post" id="form">
            <p class="p_title2">
                <span id="utitle"></span>
            </p>
            <ul class="p_ul">
                <li style="color:#333; font-size:15px;">
                    <span id="description"></span>
                </li>
                <li class="li2" style="color:#999;" id="joinnum"></li>
                <li style="color:#666;" id="Prompt">请您提供联系方式，以方便我们及时为您提供服务</li></ul>
            <div class="name_box">
                <p>姓&nbsp;名：
                    <input type="text" class="name" maxlength="6" value="您的姓名" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}" id="uname" name="sname">性别：
                    <label>
                        <input type="radio" checked="checked" class="a3" value="0" id="usex" name="sex" checked="checked">男</label>
                    <label>
                        <input type="radio" class="a3" value="1" id="usex" name="sex">女</label></p>
                <p>手&nbsp;机：
                    <input type="text" class="tel" maxlength="11" value="手机号码" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}" id="utel" name="mobile"></p>
                <p>
                    <input type="button" value="快联系我" id="button_click" class="btn" onclick="return checkForm($(this));" /></p>
            </div>
            <input type="hidden" name="content" id="ucontent" value="">
            <input type="hidden" name="target_id" id="utarget_id" value="">
            <input type="hidden" name="origin" id="uorigin" value="">
            <input type="hidden" name="lasturl" id="ulasturl" value="" />
            <input type="hidden" name="fromurl" id="ufromurl" value="" /></form>
    </div>
</div>
<script>function checkForm(obj, tel) {
        if (obj.attr('doing') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#uname").val();
        var phone = $("#utel").val();
        var sex = $("input[name='sex']:checked").val();
        var message = $("#ucontent").val();
        var target_id = $("#utarget_id").val();
        var origin = $("#uorigin").val();
        var lasturl = $("#ulasturl").val();
        var fromurl = $("#ufromurl").val();

        if (name == '' || name == '您的姓名') {
            alert('姓名不能为空！');
            return false;
        } else if (sex == '') {
            alert('请选择性别！');
            return false;
        } else if (phone == '' || phone == '手机号码') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else {
            obj.attr('doing', 1);
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/messageProjectBX_temporary.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    is_login: is_login,
                    sname: name,
                    mobile: phone,
                    message: message,
                    sex: sex,
                    target_id: target_id,
                    origin: origin,
                    lasturl: lasturl,
                    fromurl: fromurl
                },
                success: function(html) {
                    obj.attr('doing', 0);
                    if (html.status == 'login') {
                        $('#click_Pfind1').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#two_message_id').val(html.id);
                    }
                }
            });
            if (is_login == 'unlogin') {
                $('#click_Pfind1').hide();
                $('#click_YZ').show();
                if (tel == 'tel') {
                    $('#tel').val(tel);
                }
                $('#two_telephone').val(phone);
                Auto_trigger();
            }

        }
    }</script>
