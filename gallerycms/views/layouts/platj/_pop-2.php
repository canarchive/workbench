<!------------新版仿商桥模块 B------------>
<link href="http://image1.jmw.com.cn/public/css/jmw_shangqiao.css" type="text/css" rel="stylesheet" />
<script src="http://liuyan.jmw.com.cn/jmw_tpl_2011/js/jmw_util.js" type="text/javascript" language="javascript"></script>
<!--侧边工具栏 B-->
<style type="text/css">.yiche-side{ position:fixed; top:500px; right:50%; margin-right:-555px; width:50px; border:1px solid #e43c01; font-size:14px; } .yiche-side li{ border-bottom:1px solid #e9e9e9; height:52px; } .yiche-side li a{ color:#999999; display:block; width:30px; padding:6px 10px; cursor:pointer; } .yiche-side .lireturn_top{ background:#e43c01; border-bottom:none; display:none; } .yiche-side .lireturn_top a{ color:#fff; } .yiche-side .side_li_first:hover{ background:#e43c01; } .yiche-side .side_li_first a:hover{ color:#fff; }</style>
<script src="http://image1.jmw.com.cn/newSearchPage/js/jmw_shangqiao.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://image1.jmw.com.cn/newSearchPage/css/gai1_style.css" />
<link rel="stylesheet" type="text/css" href="http://image1.jmw.com.cn/industry/css/aside2.css" />
<script language="javascript" type="text/javascript" src="http://image1.jmw.com.cn/search/js/WebCall.js"></script>
<!-- <ul class="yiche-side" style="margin-right:-540px;"> 
<li class="side_li_first"onclick="_MEIQIA._SHOWPANEL()"><a>在线咨询</a></li>
<li class="side_li_first" onclick="showStory('6','0','行业工具栏400电话')" > 
<a>免费电话</a> 
</li>
<li style="border:none; position:relative;" onmouseover="$('.over_pic').show();" onmouseOut="$('.over_pic').hide();" class="side_li_first"><a id="clickqq" style="cursor:pointer" rel="nofollow">下载APP</a>
<img class="over_pic" src="http://image1.jmw.com.cn/newSearchPage/images/u0_03.png" alt="" style="position:absolute; right:51px; bottom:1px; display:none; z-index:200;"></li>
<li class="lireturn_top"><a href="javascript:;">返回顶部</a></li></ul> -->
<ul id="aside2-ul">
    <li onclick="_MEIQIA._SHOWPANEL()" class="one-li">
        <span>在线咨询</span></li>
    <li class="two-li">
        <span>免费通话</span>
        <form>
            <div class="information">
                <h1>全国免费咨询热线</h1>
                <span class="free-tell">免费通话
                    <i style="font-style: normal;"><?= Yii::$app->params['siteHotline']; ?></i></span>
                <span style="color: #ccc;" class="three-span">请直接拨打免费热线，或留言咨询</span>
                <div style="width: 318px;height: 35px;margin: 0 auto;font-size: 14px;">姓名：
                    <input type="text" placeholder="您的姓名" / style="font-size: 12px;height: 30px;margin-right: 10px;width: 131px;padding-left: 4px;" fourTelUserName="fourTelUserName" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}" id="name" name="name">性别：
                    <input type="radio" id="sex" value="男" checked="checked" value="0" fourTelUserGender="fourTelUserGender" name="tel_sex" checked/>男
                    <input type="radio" value="女" value="1" fourTelUserGender="fourTelUserGender" name="tel_sex" />女</div>
                <div style="width: 318px;height: 35px;margin: 0 auto;margin-top: 8px; font-size: 14px;">手机：
                    <input type="text" placeholder="手机号码" style="font-size: 12px;width:251px;height: 30px;margin-right: 10px;padding-left: 4px;" maxlength="11" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}" id="mobil" name="mobil" /></div>
                <button style="width: 299px;height: 40px;background: #e93c00;outline: none;border: none;cursor: pointer;display: block;margin: 0 auto;margin-top: 21px;color: #fff;font-size: 14px;margin-left:22px" value="立即咨询" onclick="Webcall();return false;">立即咨询</button>
                <span style="font-size: 12px;" class="seven-span">
                    <u>温馨提示：</u>提供您的联系方式，加盟顾问会及时与您联系！</span>
                <img src="http://image1.jmw.com.cn/industry/image/white-jian_cb.png" style="position: absolute; right: -5px;top: 141px;width:auto;height:auto" /></div>
            <input type="hidden" name="tid" id="tid" value="6">
            <input type="hidden" name="cname" id="cname" value="行业工具栏400电话"></form>
    </li>
    <li onmouseover="$('.over_pic').show();" onmouseOut="$('.over_pic').hide();" class="three-li">
        <span>下载A P P</span>
        <div id="app">
            <div style="margin: 0 auto;margin-top: 10px;width: 209px;min-height:100px ;">
                <img src="http://image1.jmw.com.cn/industry/image/an_cb.png" style="display: inline-block;float: left;width: 88px;height: 88px;padding: 3px;border: 1px solid #ccc;margin-right: 10px;margin-top: -4px;" />
                <img src="http://image1.jmw.com.cn/industry/image/ip_cb.png" style="display: inline-block; float: left; width: 88px;height: 88px;padding: 3px;border: 1px solid #ccc;margin-top: -4px" /></div>
            <h2>
                <span style="margin-right: 10px;">Android版</span>
                <span>iPhone版</span></h2>
        </div>
        <img src="http://image1.jmw.com.cn/industry/image/white-jian_cb.png" class="pos-img" / style="width:auto;height:auto"></li>
    <li class="lireturn_top four-li" style="border: none;bottom: -1px;"></li>
</ul>
<script>//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 700) {
                $(".lireturn_top").fadeIn(1500);
            } else {
                $(".lireturn_top").fadeOut(1500);
            }
        });
        //当点击跳转链接后，回到页面顶部位置
        $(".lireturn_top").click(function() {
            $("body,html").animate({
                scrollTop: 0
            },
            1000);
            return false;
        });
    });
    function showStory(projectid, name) {
        $("#click_Pfind4").show();
        $(".gray_mask").show();
    }
    function onClickPCFrom(obj) {
        html = obj.html();
        $("#textarea").append(html);
        $("#textarea").css("color", "#666");
        $("#textarea").val(html);
        $("#form_zx_secMsg").hide();
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
    _MEIQIA('assign', {
        groupToken: '0aef37e3a9fd8c75101972c05c53e86f'
    });
    _MEIQIA('fallback', 2);</script>
<!-- 400点击回拨 -->
<!--<form>
<div class="gray_mask" style="display: none;z-index:2001;"></div>
<div class="Pfind_money" id="click_Pfind4" style="display:none; z-index:2005;"> 
<p class="p_title1 clearfix">
<span class="fr" onclick="$('#click_Pfind4').hide();$('.gray_mask').hide();">
<img src="http://search.jmw.com.cn/images/close_031.png" alt=""/></span>
</p>
<div class="Pfind_money2"> 
<p class="p_title2">全国免费咨询热线</p>
<ul class="p_ul"> 
<li style="color:#333; font-size:16px; font-weight:bold; ">免费通话<span style="color:#e93c00;"><?= Yii::$app->params['siteHotline']; ?></span></li>
<li style="color:#666; font-size:12px;"><span style="color:#999; font-size:12px;"> 请直接拨打免费热线，或留言咨询</span></li></ul>
<div class="name_box"> 
<p>
姓&nbsp;名：<input type="text" class="name" fourTelUserName="fourTelUserName" value="test" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}" id="name" name="name">
性别：
<label>
<input type="radio" id="sex" class="a3" value="0" fourTelUserGender="fourTelUserGender" name="tel_sex" checked > 男
</label>
<label>
<input type="radio" id="sex" class="a3" value="1" fourTelUserGender="fourTelUserGender" name="tel_sex" > 女
</label>
</p>
<p>
手&nbsp;机：<input type="text" class="tel" maxlength="11" value="13200000002" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}" id="mobil" name="mobil"></p>
<p>
<input type="button" value="立即咨询" class="btn" onclick="Webcall();return false;"/></p>
<p style="color:#999;">
<span style="color:#126ebc;">温馨提示：</span>提供您的联系方式，加盟顾问会及时与您联系！
</p>
</div>
<input type="hidden" name="tid" id="tid" value="6">
<input type="hidden" name="cname" id="cname" value="行业工具栏400电话"></div>
</div>
</form>-->
<script>function showStory(cid, phone, cname) {
        $("#click_Pfind4").show();
        $(".gray_mask").show();
    }
    function Webcall() {
        var lasturl = window.location.href;
        var fromurl = document.referrer;
        var com_id = jQuery("#tid").val();
        var tel_name;
        var tel_sex;

        cname = jQuery("#cname").val();
        cn_num = jQuery("#mobil").val();
        tel_name = jQuery("#name").val();
        tel_name = tel_name.replace(/(^\s*)|(\s*$)/g, "");
        tel_sex = $('input:radio[id="sex"]:checked').val();

        if (tel_name == '' || tel_name == '您的姓名') {
            alert('请输入您的姓名！');
            return false;
        }
        if (cn_num == '手机号码' || cn_num == '') {
            alert('请填写您的联系方式！');
            return false;
        } else {
            var yanz = /^(86)?0?1\d{10}$/;
            if (yanz.test(cn_num) == false) {
                alert('请填写您正确的联系方式！');
                return false;
            }
        }
        /*if(com_id != '' && cn_num != 0)
 {
 $(".advice-3-bot").hide();
 var call=new WebCall400(com_id);
 call.fourTelUserName=$('[fourTelUserName="fourTelUserName"]').val();
 call.fourTelUserGender=$('[fourTelUserGender="fourTelUserGender"]:checked').val();
 call.webcall(cn_num);
 jQuery.ajax({
 url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
 type:'get',
 data:'com_id='+com_id+'&cb_num='+cn_num,
 cache:false,
 dataType:'jsonp',
 async:false,
 jsonp: "call_status",//服务端用于接收callback调用的function名的参数
 success:function(data,text)
 {
 alert(data.msg); 
 jQuery.ajax({
 type:'get',
 url:'http://liuyan.jmw.com.cn/message/messageFor400Index.php',
 dataType:'jsonp',
 cache:false,
 async:false,
 jsonp:'fouroorecord',
 data:'phone='+cn_num+'&target_id='+com_id+'&sex='+tel_sex+'&name='+tel_name+'&cname='+cname+'&origin=16-25&content='+'通过400电话为'+cname+'项目留言，想了解加盟流程。请尽快联系！'+'&400index_lasturl='+lasturl+'&400index_fromurl='+fromurl,
 success:function(html){
 setTimeout(sleepReload(),'2000'); 
 }
 });
 }
 });
 function sleepReload(){
 window.location.reload();
 }
 } */

        if (com_id != '' && cn_num != 0) {
            $('.advice-3-bot').hide();
            $.ajax({
                type: 'get',
                dataType: 'jsonp',
                jsonp: 'fouroorecord',
                async: false,
                url: 'http://liuyan.jmw.com.cn/message/v9_messageFor400Index_temporary.php',
                data: 'phone=' + cn_num + '&target_id=' + com_id + '&sex=' + tel_sex + '&name=' + tel_name + '&cname=' + cname + '&origin=16-2&content=' + '通过全国免费热线咨询' + cname + '项目留言，想了解加盟流程。请尽快联系！' + '&400index_lasturl=' + lasturl + '&400index_fromurl=' + fromurl,
                success: function(html) {
                    if (html.status == 'login') {
                        /*$('#click_Pfind4').hide();
                    $('.gray_mask').hide();
                    var call=new WebCall400(com_id);
                    call.fourTelUserName=$('[fourTelUserName="fourTelUserName"]').val();
                    call.fourTelUserGender=$('[fourTelUserGender="fourTelUserGender"]:checked').val();
                    call.webcall(cn_num);
                    jQuery.ajax({
                        url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
                        type:'get',
                        data:'com_id='+com_id+'&cb_num='+cn_num,
                        cache:false,
                        dataType:"jsonp",
                        async:false,
                        jsonp: "call_status",//服务端用于接收callback调用的function名的参数
                        success:function(data,text)
                        {
                            alert(data.msg);
                            setTimeout(sleepReload(),'2000'); 
                        }
                    });*/
                        alert('留言成功！');
                        window.location.reload();
                    } else if (html.status == 'unlogin') {
                        $("#zong_gray").show();
                        $("#click_zongYZ").show();
                        v9_Auto_trigger();
                        $("#first_message_id").val(html.id);
                        $("#first_telephone").val(cn_num);
                    }
                }
            });

        }
    }</script>
<!--侧边工具栏 E-->
