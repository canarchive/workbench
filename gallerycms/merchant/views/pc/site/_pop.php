    <div class="Pfind_money" id="pFind6">
        <p class="p_title1 clearfix">
            <span class="fr" onclick="$('#pFind6').hide();$('.gray_mask').hide();">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1b5cd-8225.png" alt="" /></span>
        </p>
        <div class="Pfind_money2">
            <form action="" method="post" id="u_form">
                <p class="p_title2" id="u_title"></p>
                <p class="p_title3" id="u_description"></p>
                <div class="name_box">
                    <p>姓&nbsp;名：
                        <input type="text" class="name" maxlength="6" value="您的姓名" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}" id="u_name" name="sname">性别：
                        <label>
                            <input type="radio" class="a3" value="0" id="u_sexm" name="sex" checked="checked">男</label>
                        <label>
                            <input type="radio" class="a3" value="1" id="u_sexm" name="sex">女</label></p>
                    <p>手&nbsp;机：
                        <input type="text" class="tel" maxlength="11" value="手机号码" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}" id="u_tel" name="mobile"></p>
                    <p>
                        <input type="button" value="快联系我" class="btn" onclick="return u_checkForm($(this))" /></p>
                </div>
                <input type="hidden" name="content" id="u_content" value="">
                <input type="hidden" name="target_id" id="u_target_id" value="">
                <input type="hidden" value="" name="origin" id="u_origin">
                <input type="hidden" name="lasturl" id="u_lasturl" />
                <input type="hidden" name="fromurl" id="u_fromurl" /></form>
        </div>
    </div>
    <script>function check_zhao(target_id, origin, brand_name) {
            $('#pFind6').show();
            $('.gray_mask').show();
            if (origin == '23-1') {
                $('#u_title').html('我要找资金');
                $('#u_content').val('我查看了' + brand_name + '加盟项目页面，想了解加盟创业好帮手“找资金”功能，请尽快联系我。');
                $('#u_origin').val(origin);
                $('#u_description').html('目前已有<span>211人</span>找到了资金，快来加入我们吧！');
            } else if (origin == '23-2') {
                $('#u_title').html('我要找场地');
                $('#u_content').val('我查看了' + brand_name + '加盟项目页面，想了解加盟创业好帮手“找场地”功能，请尽快联系我。');
                $('#u_origin').val(origin);
                $('#u_description').html('目前已有<span>212人</span>找到了场地，快来加入我们吧！');
            } else if (origin == '23-3') {
                $('#u_title').html('我要找装修');
                $('#u_content').val('我查看了' + brand_name + '加盟项目页面，想了解加盟创业好帮手“找装修”功能，请尽快联系我。');
                $('#u_origin').val(origin);
                $('#u_description').html('目前已有<span>213人</span>找到了装修，快来加入我们吧！');
            } else if (origin == '23-4') {
                $('#u_title').html('我要找优惠');
                $('#u_content').val('我查看了' + brand_name + '加盟项目页面，想了解加盟创业好帮手“找优惠”功能，请尽快联系我。');
                $('#u_origin').val(origin);
                $('#u_description').html('目前已有<span>214人</span>找到了优惠，快来加入我们吧！');
            } else if (origin == '23-5') {
                $('#u_title').html('我要合伙开店');
                $('#u_content').val('我查看了' + brand_name + '加盟项目页面，想了解加盟创业好帮手“合伙开店”功能，请尽快联系我。');
                $('#u_origin').val(origin);
                $('#u_description').html('目前已有<span>215人</span>找到了合伙人，快来加入我们吧！');
            } else if (origin == '23-6') {
                $('#u_title').html('我要找委托');
                $('#u_content').val('我查看了' + brand_name + '加盟项目页面，想了解加盟创业好帮手“找委托”功能，请尽快联系我。');
                $('#u_origin').val(origin);
                $('#u_description').html('目前已有<span>216人</span>找到了委托，快来加入我们吧！');
            }
            $('#u_target_id').val(target_id);
            $.ajax({
                async: false,
                type: 'get',
                url: 'http://protectedapi.jmw.com.cn/project/message_num.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    origin: origin
                },
                success: function(data) {
                    num = data[0].num;
                    if (origin == '23-1') {
                        sum = 211 + parseInt(num);
                        $('#u_description').html('目前已有<span>' + sum + '人</span>找到了资金，快来加入我们吧！');
                    } else if (origin == '23-2') {
                        sum = 212 + parseInt(num);
                        $('#u_description').html('目前已有<span>' + sum + '人</span>找到了场地，快来加入我们吧！');
                    } else if (origin == '23-3') {
                        sum = 213 + parseInt(num);
                        $('#u_description').html('目前已有<span>' + sum + '人</span>找到了装修，快来加入我们吧！');
                    } else if (origin == '23-4') {
                        sum = 214 + parseInt(num);
                        $('#u_description').html('目前已有<span>' + sum + '人</span>找到了优惠，快来加入我们吧！');
                    } else if (origin == '23-5') {
                        sum = 215 + parseInt(num);
                        $('#u_description').html('目前已有<span>' + sum + '人</span>找到了合伙人，快来加入我们吧！');
                    } else if (origin == '23-6') {
                        sum = 216 + parseInt(num);
                        $('#u_description').html('目前已有<span>' + sum + '人</span>找到了委托，快来加入我们吧！');
                    }
                },
                error: function(err) {
                    if (origin == '23-1') {
                        $('#u_description').html('目前已有<span>211人</span>找到了资金，快来加入我们吧！');
                    } else if (origin == '23-2') {
                        $('#u_description').html('目前已有<span>212人</span>找到了场地，快来加入我们吧！');
                    } else if (origin == '23-3') {
                        $('#u_description').html('目前已有<span>213人</span>找到了装修，快来加入我们吧！');
                    } else if (origin == '23-4') {
                        $('#u_description').html('目前已有<span>214人</span>找到了优惠，快来加入我们吧！');
                    } else if (origin == '23-5') {
                        $('#u_description').html('目前已有<span>215人</span>找到了合伙人，快来加入我们吧！');
                    } else if (origin == '23-6') {
                        $('#u_description').html('目前已有<span>216人</span>找到了委托，快来加入我们吧！');
                    }
                }
            });
        }

        function u_checkForm(obj) {
            if (obj.attr('u_checkForm') == 1) {
                alert('正在提交中。。请稍后');
                return false;
            }
            var name = $("#u_name").val();
            var phone = $("#u_tel").val();
            var sex = $("#u_sexm").val();
            var message = $("#u_content").val();
            var target_id = $("#u_target_id").val();
            var origin = $("#u_origin").val();
            var lasturl = $("#u_lasturl").val();
            var fromurl = $("#u_fromurl").val();

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
                obj.attr('u_checkForm', 1);
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
                        obj.attr('u_checkForm', 0);
                        if (html.status == 'login') {
                            $('#pFind6').hide();
                            $('.gray_mask').hide();
                            alert('留言成功！');
                            window.location.reload();
                        } else if (html.status == 'unlogin') {
                            $('#two_message_id').val(html.id);
                        }
                    }
                });
                if (is_login == 'unlogin') {
                    $('#pFind6').hide();
                    $('#click_YZ').show();
                    $('#two_telephone').val(phone);
                    Auto_trigger();
                }

            }
        }</script>
    <!-- 找资金 找场地 找装修 找优惠 合伙开店 找委托弹框 end-->
