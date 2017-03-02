<script>$(function() {
        var MCeng_lasturl = window.location.href;
        var MCeng_fromurl = document.referrer;
        $('#MCeng_lasturl_1').val(MCeng_lasturl);
        $('#MCeng_fromurl_1').val(MCeng_fromurl);
    });</script>
<script>var is_login = "unlogin";</script>
<style>.zp_icon{background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/a9b13-8560.png') no-repeat;display:inline-block;background-size:100px 100px;vertical-align:middle;} .zp_icon1{ background-position:-26px 0; width:16px; height:16px; } .zp_icon2{ background-position:-27px -24px; width:16px; height:16px; } .zp_icon3{ background-position:-27px -48px; width:18px; height:16px; } .zp_icon4{ background-position:-27px -84px; width:16px; height:16px; } .fixed_footer .doing{color:#e7625d;} .fixed_footer a.doing .zp_icon1{background-position:0 0;width:16px;height:16px;} .fixed_footer a.doing .zp_icon2{background-position:0 -24px;width:16px;height:16px;} .fixed_footer a.doing .zp_icon3{background-position:0 -48px;width:18px;height:16px;} .fixed_footer a.doing .zp_icon4{background-position:0 -84px;width:16px;height:16px;} .fixed_footer{ width:100%; height:49px; } .fixed_footer a{ width:25%; height:49px; float:left; text-align:center; font-size:0.75rem; display:block; color:#999; } .fixed_footer a i{ margin:8px auto 5px;} .more_box{ width:110px; border:1px solid #e0e1e5; border-radius:3px; position:absolute; right:10px; bottom:49px; background:#fff; display:none; } .more_box a{ display:block; height:40px; line-height:40px; border-bottom:1px solid #e0e1e5; color:#999999; font-size:0.75rem; padding-left:15px; } .more_box span{ display:block; width:11px; height:6px; position:absolute; right:25px; bottom:-6px; z-index:1000; } .more_box a i{ display:block; width:16px; height:16px; margin-top:12px; float:left; margin-right:8px; } .more_box .li2 i{ height:17px; } .gray_mask{ background:rgba(0,0,0,.7); position:fixed; top:0; left:0; width:100%; height:100%; z-index:990; display:none; } .fixed_service{ width:75%; position:absolute; right:12.5%; bottom:60px; z-index:996; display:none; } .fixed_service .p_top{ height:30px; } .fixed_service .p_top span{ display:inline-block; width:14px; height:14px; float:right; margin-top:8px; } .fixed_service .fixed_sanJiao{ display:block; width:15px; height:8px; position:absolute; right:31%; bottom:-5px; } .fixed_service2{ border-radius:6px; background:#fff; border:1px solid #e0e1e5; } .fixed_service2 .ul1{ width:87%; margin:auto; padding:10px 0 0px 0; font-size:0.75rem; } .fixed_service2 .ul1 li{ padding:14px 8px; border:1px solid #b9b9b9; border-radius:5px; position:relative; margin-bottom:10px; line-height:20px; } .fixed_service2 .ul1 li span{ display:block; width:6px; height:10px; } .fixed_service2 .ul1 .li1{ background:#fa9895; color:#fff; } .fixed_service2 .ul1 .li2{ background:#fff; } .fixed_service2 .ul1 .li1 .span1{ position:absolute; left:-6px; top:12px; } .fixed_service2 .ul1 .li2 .span2{ position:absolute; left:-6px; top:12px; } .fixed_service2 .ul2{ background:#f8f8f8; padding:15px 6.5% 0px; border-radius:6px; } .fixed_service2 .ul2 li{ line-height:30px; margin-bottom:10px; } .fixed_service2 .ul2 span{ width:16%; font-size:0.8rem; float:left; } .fixed_service2 .ul2 input{ color:#cecece;height:30px; width:83%; float:left; border-radius:3px; border:1px solid #b9b9b9; padding-left:6px; box-sizing:border-box; } .fixed_service2 .ul2 textarea{ height:60px; width:83%; float:left; border-radius:3px; border:1px solid #b9b9b9; color:#cecece; padding:10px 7px; box-sizing:border-box; } .fixed_service2 .ul2 .button{background: #e44b46; height: 32px; border: none;color: #fff;margin-left: 16%; width: 83%;display: block;border-radius: 3px;text-align: center;line-height: 30px;} .p_jmw{ line-height:90px; color:#e3e3e3; text-align:center;}</style>
<div class="gray_mask"></div>
<div style="width:100%; height:49px; border-top:1px solid #e0e1e5; background:#fff; position:fixed; bottom:0; left:0; z-index:999;">
    <div class="fixed_footer clear">
        <a href="<?= "/{$this->context->currentCityCode}/"; ?>">
            <i class="zp_icon zp_icon1"></i>
            <br />首页</a>
        <a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>">
            <i class="zp_icon zp_icon2"></i><br />装修公司</a>
        <a id="dl_line" href="/ask/" title="<?= $this->context->currentCityName . '装修问答'; ?>">
            <i class="zp_icon zp_icon3"></i>
            <br /><?= $this->context->currentCityName . '装修问答'; ?></a>
        <!--<a id="dl_line" href="/ask/" title="<?= $this->context->currentCityName . '装修问答'; ?>">
            <i class="zp_icon zp_icon3"></i>
            <br /><?= $this->context->currentCityName . '装修问答'; ?></a>-->
        <!--<a id="dl_more">
            <i class="zp_icon zp_icon4"></i>
            <br />更多</a>-->
    </div>
    <!-- 更多弹框 -->
    <!--<div class="more_box" id="more_box">
        <a href="http://bbs.jmw.com.cn/" class="li1">
            <i>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/5061c-8123.png" alt="" /></i>论坛</a>
        <a href="/usercenter/footprint.php" class="li2">
            <i>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/edf77-6051.png" alt="" /></i>足迹</a>
        <a href="/usercenter/grzx.php" class="li3" style="border-bottom:none;">
            <i>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/bce2b-5485.png" alt="" /></i>个人中心</a>
        <span>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/fb6dd-1992.png" alt="" /></span>
    </div>-->
    <!-- 客服论坛 -->
    <div class="fixed_service" id="fixed_service">
        <form action="" method="post" id="m_footer">
            <p class="clear p_top" id="fixedp_top">
                <span>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/d1c4a-6203.png" alt="" /></span>
            </p>
            <div class="fixed_service2">
                <ul class="ul1">
                    <li class="li1">
                        <p>您好,欢迎光临中国加盟网</p>
                        <span class="span1">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/266e0-2266.png" alt="" /></span>
                    </li>
                    <li class="li2">
                        <p>请问有什么需要咨询的？</p>
                        <p>您可以先留下联系方式，我们稍后会联系您。</p>
                        <span class="span2">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/6b222-5826.png" alt="" /></span>
                    </li>
                </ul>
                <ul class="ul2">
                    <li class="clear">
                        <span>姓名:</span>
                        <input type="text" name="name" id="m_name" value="如 万先生" onfocus="if(this.value=='如 万先生'){this.value=''}" onblur="if(this.value==''){this.value='如 万先生'}" /></li>
                    <li class="clear">
                        <span>电话:</span>
                        <input type="text" name="phone" id="m_phone" value="如 13111111111" onfocus="if(this.value=='如 13111111111'){this.value=''}" onblur="if(this.value==''){this.value='如 13111111111'}" maxlength="11" /></li>
                    <li class="clear">
                        <span>留言:</span>
                        <textarea name="contant" id="m_contant" cols="30" rows="10">哪个项目加盟赚钱？请客服帮我推荐</textarea></li>
                    <li class="clear">
                        <a href="javascript:;" onclick="return m_footer($(this));" class="button" />提交</a></li>
                </ul>
            </div>
            <input type="hidden" name="target_id" id="m_target_id" value="4">
            <input type="hidden" value="21" name="origin" id="m_origin">
            <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
            <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" />
            <input type="hidden" name="message_num" id="message_num_m" value="1" />
            <span class="fixed_sanJiao">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/2e025-6056.png" alt="" /></span>
        </form>
    </div>
</div>
<script type="text/javascript">$(function() {
        $("#dl_more").click(function(e) {
            //$("#more_box").show();
            $('#more_box').toggle();
            /*阻止冒泡事件*/
            e = window.event || e;
            if (e.stopPropagation) {
                e.stopPropagation();
            } else {
                e.cancelBubble = true;
            }

        });
        $("#more_box").click(function(e) {
            /*阻止冒泡事件*/
            e = window.event || e;
            if (e.stopPropagation) {
                e.stopPropagation();
            } else {
                e.cancelBubble = true;
            }
        });
        $(document).click(function() {
            $("#more_box").hide();
            $("#dl_more").removeClass();
        });

        $('#dl_line').click(function() {
            $('#fixed_service').show();
            $('.gray_mask').show();
            $('#more_box').hide();
        }); $('#fixedp_top').click(function() {
            $('#fixed_service').hide();
            $('.gray_mask').hide();
        }); $('.fixed_footer a').click(function() {
            $(this).toggleClass('doing').siblings().removeClass();
        })

    })</script>
<script>function m_footer(obj) {
        if (obj.attr('usercenter_footer') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;

        var name = $("#m_name").val();
        var message = $("#m_contant").val();
        var phone = $("#m_phone").val();
        var target_id = $("#m_target_id").val();
        var origin = $("#m_origin").val();
        var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
        if (name == '' || name == '如 万先生') {
            alert('姓名不能为空！');
            return false;
        } else if (phone == '' || phone == '如 13111111111') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
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
            obj.attr('usercenter_footer', 1);
            $.ajax({
                type: 'get',
                url: 'http://liuyan.jmw.com.cn/message/first_message.php',
                dataType: 'jsonp',
                jsonp: 'callback',
                data: {
                    is_login: is_login,
                    name: name,
                    telephone: phone,
                    message: message,
                    target_id: target_id,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    obj.attr('usercenter_footer', 0);
                    if (html.status == 'login') {
                        $('#fixed_service').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);

                    }
                }
            });
            if (is_login == 'unlogin') {
                $('.fixed_service').hide();
                $('#Pline_Message').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }
        }
    }</script>
