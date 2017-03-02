<link type="text/css" rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/css/235a4-6274.css">
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
            <input type="hidden" name="gem_collection" value="" id="gem_collection">
            <input type="hidden" name="message_num" id="message_num_m" value="1" /></ul>
    </form>
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
        var telephone = $("#telephone").val();
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

    function message_check_code(obj) {
        if (obj.attr('doing') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var phone = $("#first_telephone").val();
        var code = $("#che_code").val();
        var gem_collection = $("#gem_collection").val();
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
            obj.attr('doing', 1);
            $.ajax({
                async: false,
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
                    obj.attr('doing', 0);
                    if (html == 1) {
                        $('.Pline_consult').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else {
                        alert('验证码不正确！请输入正确的验证码');
                    }
                }
            });
        }
    }</script>
<?php echo $this->render('_check'); ?>
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
<!-- 留言验证 start -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_pop-show'); ?>
