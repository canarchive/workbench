<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609', '235a4-6274', 'cd7cd-5015'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-merchant/_js-header');//, ['jsFiles' => $jsFiles]);
?>
<!--<标项页头部定位 start-->
<?= $this->render('@gallerycms/views/layouts-m/platj-merchant/_top'); ?>
<!--图片轮播 start-->
<?= $this->render('@gallerycms/views/layouts-m/platj-merchant/_slide'); ?>
<!-- 品牌信息 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_brandinfo'); ?>
<?php echo $this->render('_dynamic'); ?>
<!-- 项目介绍 -->
<ul class="main-title">
    <li><a href="#xiangmujieshao">项目介绍</a></li>
    <li><a href="#jiamengfeiyong">加盟费用</a></li>
    <li><a href="#jiamengyoushi">加盟优势</a></li>
    <li><a href="#jiamengdianpu">加盟店铺</a></li>
</ul>
<style>
  #directory p{ color:#333; }
</style>
<?php echo $this->render('_desc'); ?>
<?php echo $this->render('_fee'); ?>
<?php echo $this->render('_advantage'); ?>
<?php echo $this->render('_info'); ?>
<!--我要咨询项目 start-->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_comment'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_guestbook'); ?>

<!-- 官网活动 start-->
<?php echo $this->render('_activity'); ?>
<?php echo $this->render('_related'); ?>
<?php echo $this->render('_ask'); ?>
<!-- 网友点评 start-->
<?php echo $this->render('_comment'); ?>
<?php echo $this->render('_message'); ?>
<?php echo $this->render('_point'); ?>
<!-- 官网 start-->
<section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/guanwang/" class="ziXun_a wrap pr" title="晨阳水漆官网">
        <h2>晨阳水漆官网</h2>
        <span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">立即查看企业详情</span>
        <i class="icon10"></i>
    </a>
</section>
<!-- 官网 end-->
<!-- 品牌图库 start-->
<section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/pinpaituku/" class="ziXun_a wrap pr" title="晨阳水漆品牌图库">
        <h2>晨阳水漆品牌图库</h2>
        <span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">共有48张品牌图片
            <i class="icon10"></i></a>
</section>
<!-- 品牌图库 end-->
<!-- 成功案例 start-->
<section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/chenggonganli/" class="ziXun_a wrap pr" title="晨阳水漆成功案例">
        <h2>晨阳水漆成功案例</h2>
        <span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">已有2922人成功加盟</span>
        <i class="icon10"></i>
    </a>
</section>
<!-- 成功案例 end-->
<!-- 相关信息 start-->
<section class="message_list">
    <style type="text/css">@media screen and (max-width:359px){ .zi_message li{ margin-left:2%;} .zi_message .li_4{ margin-left:4%;} }</style>
    <div class="ziXun zi_message clear" style="display:block;">
        <ul class="link">
            <li>
                <h2>
                    <a style="color: #e44b46;">晨阳水漆相关</a></h2>
            </li>
            <li>|</li>
            <li>
                <h2>
                    <a>热门项目</a>
                </h2>
            </li>
            <li>|</li>
            <li>
                <h2>
                    <a>加盟动态</a>
                </h2>
            </li>
        </ul>
    </div>
    <div class="con">
        <div class="jiaMeng_ul clear" style="display:block;">
            <ul style="width:29%">
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/xiangmujieshao/" title="晨阳水漆项目介绍">晨阳...项目介绍</a></li>
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/youshizhichi/" title="晨阳水漆加盟优势">晨阳...加盟优势</a></li>
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/jiamengdian/" title="晨阳水漆加盟店铺">晨阳...加盟店铺</a></li>
            </ul>
            <ul style="width:29%">
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/jiamengfeiyong/" title="晨阳水漆项目费用">晨阳...项目费用</a></li>
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/wangyoudianping/" title="晨阳水漆网友点评">晨阳...网友点评</a></li>
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/zixun/" title="晨阳水漆加盟资讯">晨阳...加盟资讯</a></li>
            </ul>
            <ul style="width:29%">
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/liuyan/" title="晨阳水漆在线咨询">晨阳...在线咨询</a></li>
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/pinpaituku/" title="晨阳水漆品牌图库">晨阳...品牌图库</a></li>
                <li>
                    <a href="http://m.jmw.com.cn/xm137829/bbs/" title="晨阳水漆创业问答">晨阳...创业问答</a></li>
            </ul>
        </div>
        <div class="jiaMeng_ul clear" style="display:none;">
            <ul style="width:100%;">
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm79341/" title="樱花涂料加盟">樱花涂料加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6562900/" title="室美伦加盟">室美伦加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm158545/" title="舒鑫e家加盟">舒鑫e家加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6589649/" title="空间美贝壳粉生态涂料加盟">空间美贝加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm58277/" title="德尔地板加盟">德尔地板加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6572154/" title="欧克斯门窗加盟">欧克斯门加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm60837/" title="法恩莎瓷砖加盟">法恩莎瓷加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm63088/" title="纤之韵-墙衣加盟">纤之韵-加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm76445/" title="澳普利发门窗加盟">澳普利发加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6675488/" title="钛能门业加盟">钛能门业加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6581027/" title="荣事达管业加盟">荣事达管加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6593563/" title="VOTO沃土加盟">VOTO加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6594594/" title="忆江南锦缎泥加盟">忆江南锦加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6582517/" title="定荣家加盟">定荣家加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm81364/" title="佛山照明加盟">佛山照明加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6584328/" title="千叶珠宝加盟">千叶珠宝加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6674681/" title="展腾投资集团加盟">展腾投资加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6597666/" title="能力风暴机器人加盟">能力风暴加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm210499/" title="阳光喔作文培训加盟">阳光喔作加盟</a></li>
                <li style="float:left; width:24%; margin-right:1%;">
                    <a href="http://m.jmw.com.cn/xm6558704/" title="野马汽车加盟">野马汽车加盟</a></li>
            </ul>
        </div>
        <!-----加盟动态----->
        <style type="text/css">#demo{ overflow:hidden; height:200px; width:98%; position:relative; } #demo1{ width: 98%; padding: 0 1%; margin: 0 auto; font-size: 0.9rem; line-height: 1.2rem; color: #333; } #demo1 .league-dynamic{ border-bottom: 1px dashed #cccccc; padding:6px 0; } #demo1 .league-dynamic font{ color: #CC0000; } #demo2{ width: 98%; padding: 0 1%; margin: 0 auto; font-size: 0.9rem; line-height: 1.2rem; color: #333; } #demo2 .league-dynamic{ border-bottom: 1px dashed #cccccc; padding:6px 0; } #demo2 .league-dynamic font{ color: #CC0000; }</style>
        <div style="display: none;" class="jiaMeng_ul clear scroll_DT ">
            <div id="demo">
                <ul id="demo1">
                    <script type="text/javascript" src="http://port.jmw.com.cn/html/zh/zhxm.html"></script>
                    <script type="text/javascript">var num = userSort.length;
                        for (var i = 0; i < num; i++) {
                            document.getElementById("demo1").innerHTML += '<div class="league-dynamic">·来自' + userSort[i]['province'] + '的<font onclick=' + 'dongtai_message(28,16,"我想入驻中国加盟网，成为企业会员，展示产品，推广项目")' + '>' + userSort[i]['sname'] + '</font>正在寻找<span ></span>行业的创业项目，欢迎相关品牌自荐</div>';
                        }</script>
                </ul>
                <div id="demo2"></div>
            </div>
        </div>
        <script>function dongtai_message(target_id, origin, message) {
                var target_id = target_id;
                var origin = origin;
                var message = message;

                $('#z_title').html('我要查看');
                $('#z_target_id').val(target_id);
                $('#z_origin').val(origin);
                $('#z_content').val(message);

                $('.black-all6').show();

            }</script>
        <script type="text/javascript">var speed = 40 window.onload = function() {
                var demo = document.getElementById("demo");
                //var gundong=document.getElementById("gundong"); 
                var demo2 = document.getElementById("demo2");
                var demo1 = document.getElementById("demo1");
                demo2.innerHTML = demo1.innerHTML
                function Marquee() {
                    if (demo.scrollTop >= demo1.offsetHeight) {
                        demo.scrollTop = 0;
                    } else {
                        demo.scrollTop = demo.scrollTop + 1;
                    }
                }
                var MyMar = setInterval(Marquee, speed)
                //gundong.onmouseover=function(){clearInterval(MyMar)} 
                //gundong.onmouseout=function(){MyMar=setInterval(Marquee,speed)} 
            }</script>
        <div class="black-all6" style="display: none;">
            <form action="http://liuyan.jmw.com.cn/message/FirstMessage.php" method="post" id="form_zhao">
                <input type="hidden" name="message_num" id="message_num" value="1" />
                <ul class="all6">
                    <li class="all6-title">
                        <span id="z_title"></span>
                    </li>
                    <li class="all6-name">
                        <label>
                            <span style="color:red;margin-right:3px;">*</span>项目名:</label>
                        <input type="text" name="name" id="z_name" value="如 驾校网" onfocus="if(this.value=='如 驾校网'){this.value=''}" onblur="if(this.value==''){this.value='如 驾校网'}" /></li>
                    <li class="all6-name">
                        <label>
                            <span style="color:red;margin-right:3px;">*</span>手&nbsp;&nbsp;&nbsp;机:</label>
                        <input type="text" name="phone" id="z_phone" value="如 13111111111" onfocus="if(this.value=='如 13111111111'){this.value=''}" onblur="if(this.value==''){this.value='如 13111111111'}" maxlength="11" /></li>
                    <li class="all6-liuyan">
                        <label>
                            <span style="color:red;margin-right:3px;">*</span>留&nbsp;&nbsp;&nbsp;言:</label>
                        <textarea class="fr" name="contant" id="z_content"></textarea>
                    </li>
                    <li class="all6-button">
                        <a onclick="$('.black-all6').hide();" style="color:#ccc;border-right:1px solid #e8e8e8;box-sizing: border-box;">取消</a>
                        <a onclick="return zhao_checkMessage();">确定</a></li>
                </ul>
                <input type="hidden" name="target_id" id="z_target_id" value="">
                <input type="hidden" value="" name="origin" id="z_origin">
                <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
                <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" />
                <input type="hidden" name="message_num" id="message_num_m" value="1" /></form>
        </div>
        <style>/*弹框开始*/ .black-all6{ display: none; width: 100%; height: 100%; background: rgba(0,0,0,.5); position: fixed; z-index: 9998; top:0; left:0; } .all6{ background: #ffffff none repeat scroll 0 0; border-radius: 20px; height: 235px; left: 50%; margin-left: -135px; margin-top: -117px; position: absolute; top: 50%; width: 270px; } .all6-title { border-bottom: 1px solid #e8e8e8; color: #333333; font-size: 17px; height: 40px; line-height: 40px; text-align: center; width: 100%; } .all6-name { border-bottom: 1px solid #e8e8e8; height: 42px; line-height: 42px; width: 100%; overflow:hidden; } .all6-liuyan, .all6-name label { margin-left: 21px; } .all6-name input { border: medium none; height: 23px; width: 168px; color:#999; } .all6-liuyan { height: 51px; margin-top: 15px; } .all6-liuyan textarea { border: medium none; color: #999; font-family: "Microsoft YaHei"; font-size: 12px; height: 48px; line-height: 20px; margin-top: -2px; vertical-align: middle; width: 168px; margin-right:12px; } .all6-button { border-top: 1px solid #e8e8e8; } .all6-button a { color: #347ae2; display: block; float: left; line-height: 40px; text-align: center; width: 134px; }</style>
        <!-----加盟动态-----></div>
</section>
<!-- 相关信息 end-->
<script>//JQuary 方法做选项卡
    $(function() {
        $(".link a").click(function() {
            $(".con .jiaMeng_ul").css("display", "none");
            $($(".con .jiaMeng_ul")[$(this).index(".link a")]).css("display", "block");
        })
    })</script>
<!-- 标项页创业指导 在线咨询 -->
<div class="Pline_consult" id="Pline_consult1" style="display:none;">
    <form action="" method="post" id="form2">
        <p class="P_title1">晨阳水漆免费咨询</p>
        <p class="ZJ_title2">你好，我是中国加盟网创业顾问
            <span id="spd_kf">cindy</span>，请问有 什么可以帮到您的？</p>
        <ul class="clear">
            <li>
                <span>
                    <em class="em1">*</em>姓名
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="name" id="kf_name" placeholder="请输入姓名" value="" maxlength="6" />
                <p class="li_sex fr">&nbsp;&nbsp;性别:
                    <label id="label3" style="display:inline-block;">
                        <i class="icon_sex3 fl icon_sex4"></i>男 &nbsp;</label>
                    <label id="label4" style="display:inline-block;">
                        <i class="icon_sex3 fl "></i>女</label>
                </p>
            </li>
            <li>
                <span>
                    <em class="em1">*</em>手机
                    <em class="em2">:</em></span>
                <input type="text" class="text" name="phone" id="kf_phone" placeholder="请输入手机号" value="" maxlength="11" style="width:40%" /></li>
            <li>
                <span class="fl">
                    <em class="em1">*</em>留言
                    <em class="em2">:</em></span>
                <textarea name="content" id="kf_content" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些?</textarea></li>
            <li class="li5 clear">
                <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult1').hide();$('.gray_mask').hide();">取消</a>
                <a href="javaScript:;" class="fr a2" onclick="return checkMessageInfo_new_kf($(this));">确定</a></li>
        </ul>
        <input type="hidden" name="gender" class="fl" id="kf_sex" value="0">
        <input type="hidden" name="target_id" id="target_id" value="137829">
        <input type="hidden" value="" name="origin" id="kf_origin">
        <input type="hidden" value="" name="m_dirname">
        <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1" />
        <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1" />
        <input type="hidden" name="message_num" id="message_num_m" value="1" /></form>
</div>
<script type="text/javascript">$('#label3').click(function() {
        $('#label3 i').toggleClass('icon_sex4');
        $('#label4 i').removeClass('icon_sex4');
        $('#kf_sex').val('0');
    }) $('#label4').click(function() {
        $('#label4 i').toggleClass('icon_sex4');
        $('#label3 i').removeClass('icon_sex4');
        $('#kf_sex').val('1');
    })</script>
<script>function checkMessageInfo_new_kf(obj) {
        if (obj.attr('checkMessageInfo_new_kf') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#kf_name").val();
        var message = $("#kf_content").val();
        var phone = $("#kf_phone").val();
        var sex = $("#kf_sex").val();
        var target_id = $("#target_id").val();
        var origin = $("#kf_origin").val();
        var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();

        if (name == '') {
            alert('姓名不能为空！');
            return false;
        } else if (sex == '') {
            alert('请选择性别！');
            return false;
        } else if (phone == '') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (content == '') {
            alert('留言内容不能为空！');
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
            obj.attr('checkMessageInfo_new_kf', 1);
            $.ajax({
                async: false,
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
                    gender: sex,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    obj.attr('checkMessageInfo_new_kf', 0);
                    if (html.status == 'login') {
                        $('#Pline_consult1').hide();
                        $('.gray_mask').hide();
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $('#first_message_id').val(html.id);
                    }
                }
            });

            if (is_login == 'unlogin') {
                $('#Pline_consult1').hide();
                $('#Pline_Message').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }

        }
    }</script>
<style>.icon_sex3{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; } .icon_sex4{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; } .kf-all{ display: none; width: 100%; height: 100%; background: rgba(0,0,0,.5); position: fixed; z-index: 1000; top:0; left:0; } .kf{ width: 270px; height: 334px; border-radius: 20px; background: #ffffff; position: absolute; top:50%; left:50%; margin-top: -167px; margin-left: -135px; } .kf-title{ width: 100%; text-align: center; height: 37px; line-height: 37px; border-bottom: 1px solid #E8E8E8; font-size: 17px; color: #333333; } .kf-name{ height: 33px; width: 100%; line-height: 33px; border-bottom: 1px solid #E8E8E8; } .kf-liuyan,.kf-name label{ margin-left: 21px; margin-right: 6px; } .kf-name input{ height: 23px; width: 180px; border: none; color:#999; } .kf-liuyan{ height: 51px; margin-top: 15px; } .kf-liuyan textarea { margin-top: -4px; vertical-align: middle; width: 170px; height: 50px; line-height: 20px; color: #999; border: none; font-size: 0.6875rem; font-family: "Microsoft YaHei"; } .kf-button{ border-top: 1px solid #E8E8E8; } .kf-button a{ display: block; float: left; width: 134px; color: #347AE2; line-height: 40px; text-align: center; }</style>
<script>$('#tel_label3').click(function() {
        $('#tel_label3 i').toggleClass('icon_tel_sex4');
        $('#teo_label4 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('0');
    }) $('#teo_label4').click(function() {
        $('#teo_label4 i').toggleClass('icon_tel_sex4');
        $('#tel_label3 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('1');
    })

    function check_is_login2(pid, ispay, paystate, origin, brand_name) {
        if (ispay == 1 && paystate == 2) {
            $('.toggle_shu1').hide();
            $('.chaKan').hide();
            $('.toggle_shu2').show();
        } else {
            if (is_login == 'login') {
                $('.toggle_shu1').hide();
                $('.chaKan').hide();
                $('.toggle_shu2').show();
            } else if (is_login == 'unlogin') {
                $('.inquire_tele').show();
                $('.gray_mask').show();
                $('#tel_content').val('我想查看' + brand_name + '项目的加盟电话，了解项目情况，请尽快联系我！');
                $('#tel_origin').val(origin);
            }
        }
    }

    function see_tel(obj) {
        if (obj.attr('see_tel') == 1) {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#tel_name").val();
        var message = $("#tel_content").val();
        var phone = $("#tel_phone").val();
        var sex = $("#tel_sex").val();
        var target_id = $("#tel_target_id").val();
        var origin = $("#tel_origin").val();
        if (origin == 27) {
            var tel = 'tel';
        }
        var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
        var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();

        if (name == '') {
            alert('姓名不能为空！');
            return false;
        } else if (sex == '') {
            alert('请选择性别！');
            return false;
        } else if (phone == '') {
            alert('联系方式不能为空！');
            return false;
        } else if (!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false;
        } else if (content == '') {
            alert('留言内容不能为空！');
            return false;
        } else {
            obj.attr('see_tel', 1);
            $.ajax({
                async: false,
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
                    gender: sex,
                    origin: origin,
                    MFoot_lasturl: MCeng_lasturl_1,
                    MFoot_fromurl: MCeng_fromurl_1
                },
                success: function(html) {
                    obj.attr('see_tel', 0);
                    if (html.status == 'login') {
                        $('.inquire_tele').hide();
                        $('.gray_mask').hide();
                    } else if (html.status == 'unlogin') {

                        $('#first_message_id').val(html.id);
                    }
                }
            });
            if (is_login == 'unlogin') {
                $('.inquire_tele').hide();
                $('#Pline_Message').show();
                if (tel == 'tel') {
                    $('#tel').val('tel');
                }
                $('#first_telephone').val(phone);
                Auto_trigger();
            }

        }
    }</script>
<a class="returntop" href="#top" style="display: none;">
    <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/41560-7162.png"></a>
<script>$(document).scroll(function() {
        var top = $(document).scrollTop();
        if (top == 0) {
            $(".returntop").hide();
        } else {
            $(".returntop").show();
        }
    }) $(".returntop").click(function() {
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
<a onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 14px; padding-left: 13px; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);">在线
    <br />咨询</a>
<!-- 项目页底部定位 start -->
<!-- 公共底部 start -->
<footer class="copyRight">
    <p class="copy-1">
        <a href='http://m.jmw.com.cn/'>回到首页</a>
        <i>
        </i>
        <!--<a href="http://pc.jmw.com.cn">电脑版</a><i></i>-->
        <a href='javaScript:;' class="wy_download" id="downLoad" onClick="func()">APP下载</a>
        <i>
        </i>
        <a href='http://m.jmw.com.cn/usercenter/register.php'>注册</a>
        <i>
        </i>
        <a href='http://m.jmw.com.cn/usercenter/login.php'>登录</a></p>
    <p class="copy-2">
        <span>Copyright©2004-2016 JMW.COM.CN 京ICP证：040787号</span></p>
</footer>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer'); ?>
