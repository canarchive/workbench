<!-- 首页 询加盟底价弹框 -->
<div class="gray_mask" style="display:none;"></div>
<div class="Pline_consult" id="Pline_consult" style="display:none;">
    <form action="" method="post" id="p_form">
        <p class="P_title1" id="P_title"></p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="name" id="p_name" placeholder="请输入姓名" value="" maxlength="6" /></li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" style="width:75%;" name="phone" id="p_phone" placeholder="请输入手机号" value="" maxlength="11" /></li>
            <li>
                <span class="fl" style="position:relative;top:11px;">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="message" id="p_message" cols="30" rows="10"></textarea>
            </li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consult').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="message_check_one($(this));" id="check_t">确定</a></li>
        </ul>
        <input type="hidden" name="info_id" id="info_id" value="">
        <input type="hidden" name="info_sort" id="info_sort" value="">
        <input type="hidden" name="info_position" id="info_position" value="">
    </form>
</div>
<script>
function publish_mess(infoId, infoSort, infoPosition, formTitle, message) {
    formTitle = !formTitle ? '免费设计' : formTitle;
    $("#P_title").text(formTitle);
    $("#info_id").val(infoId);
    $("#info_sort").val(infoSort);
    $("#info_position").val(infoPosition);
    var message = message;
    $('#p_message').val(message);
    //$("#p_message").val(message);
    $('#Pline_consult').show();
    $('.gray_mask').show();
}
    function message_check_one(obj) {
        if (obj.attr('message_pop_up') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#p_name").val();
        var message = $("#p_message").val();
        var mobile = $("#p_phone").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    var info_id = $("#info_id").val();
    var info_sort = $("#info_sort").val();
    var info_position = $("#info_position").val();
        if (name == '') {
            alert('姓名不能为空！');
            return false;
        } else if (mobile == '') {
            alert('联系方式不能为空！');
            return false;
        } else if (!mobile.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (!regexp.test(message)) {
            alert('留言格式不正确！');
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
            obj.attr('message_pop_up', 1);

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
                message: message,
                page: $("#current_page").val(),
                _csrf: $("#_csrf").val()
            },
            success: function(html) {
                console.log(html);
                obj.attr("message_pop_up", 0);
                if (html.status == 200) {
                        $('.Pline_consult').hide();
                        $('.gray_mask').hide();
                    alert("报名成功！");
                    window.location.reload();
                } else {
                    alert(html.message);
                    $("#click_zongPfind1").hide();
                    //$("#click_zongYZ").show();
                    //v9_Auto_trigger();
                    $("#first_message_id").val(html.id);
                    $("#first_telephone").val(mobile);
                }
            }
        });
        }
    }</script>
