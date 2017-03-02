    <script>function getPraise(tid) {
            $.ajax({
                url: 'http://bbs.jmw.com.cn/mood.php?api=getpraise',
                data: "tid=" + tid,
                type: 'get',
                dataType: 'jsonp',
                jsonp: 'callback',
                success: function(html) {
                    if (html == 1) {
                        alert("点赞成功！");
                        window.location.reload();
                    } else if (html == 0) {

}
                }
            });
        }</script>
    <!-- 问 快速提问 -->
    <div class="quick_wen">
        <input type="hidden" name="lasturl" id="lasturl1" />
        <input type="hidden" name="fromurl" id="fromurl1" />
        <input type="hidden" name="subject" id="subject" />
        <input type="hidden" name="message" id="message" />
        <input type="hidden" name="project_message_targetId" id="project_message_targetId1" value="137829" />
        <input type="hidden" name="project_message_origin" id="project_message_origin1" value="1" />
        <input type="hidden" name="chk" id="chk" value="1" />
        <input type="hidden" name="mobile" value="13811974106" id="wenmobile">
        <input type="hidden" name="sname" id="wenname" value="王灿">
        <input type="hidden" name="brand_name" value="晨阳水漆" id="brand_name">
        <input type="hidden" name="project_id" value="137829" id="project_id">
        <input type="hidden" name="industry_id" value="24" id="industry_id">
        <input type="hidden" name="child_industry_id" value="89" id="child_industry_id">
        <p class="quick_wen_p clearfix">
            <span class="fl">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/ab2ff-8782.png" alt="" /></span>
            <input type="text" name="content" class="fl text" id="content" onblur="check_wenda()" value="" style="line-height:38px;">
            <span id="contentSpan" class="fl"></span>
            <input type="button" id="Tijiaowenda" value="快速提问" onclick="check_cookie()" class="fr button"></p>
        <p class="Tishi">提示：快捷发帖到晨阳水漆创业论坛问答版块</p></div>
    <script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery.cookie.js"></script>
    <script type="text/javascript">function check_wenda() {
            var content = $('#content').val();
            content = content.replace(/(^\s*)|(\s*$)/g, "");
            if (content == '') {
                return false;
            } else {
                return true;
            }
        }
        function check_cookie() {
            var content = $("#content").val();
            var COOKIE_NAME = 'COOKIE_NAME';
            if (content !== '') {
                $.cookie(COOKIE_NAME, content, {
                    path: './',
                    expires: 1
                });
                $("#content").attr("value", contentcookie);
                $.cookie(COOKIE_NAME, '', {
                    expires: -1
                });
            }

        }
        $("#Tijiaowenda").click(function() {
            var login_user = 'Array';
            var pid = '137829';
            if (login_user == 'unlogin') {
                window.location.href = "http://person.jmw.com.cn/login.php";
            } else {
                var checktt = check_wenda();
                var project_message_targetId = $("#project_message_targetId1").val();
                var project_message_origin = $("#project_message_origin1").val();
                var mobile = $("#wenmobile").val();
                var lasturl = $("#lasturl1").val();
                var fromurl = $("#fromurl1").val();
                var sname = $("#wenname").val();
                var brand_name = $("#brand_name").val();
                var project_id = $("#project_id").val();
                var industry_id = $("#industry_id").val();
                var child_industry_id = $("#child_industry_id").val();
                var content = $("#content").val();
                var chk = '1';
                var message = content;
                var subject = content;
                var username = '';
                var sex = '1';
                var tel = '';
                var lastpost = '1484816121';
                var dateline = '1484816121';
                var strdata = "subject=" + subject + "&message=" + message + "&tel=" + tel + "&sex=" + sex + "&username" + username + "&fid=80" + "&display=0" + "&lastpost=" + lastpost + "&dateline=" + dateline + "&child_industry_id=" + child_industry_id + "&industry_id=" + industry_id + "&project_id=" + project_id + "&usesig=1" + "&brand_name=" + brand_name;
                if (checktt == true) {
                    $.ajax({
                        url: "http://bbs.jmw.com.cn/mood.php?api=addwenda",
                        data: strdata,
                        type: 'get',
                        dataType: 'jsonp',
                        jsonp: 'callback',
                        success: function(html) {
                            if (html == 1) {
                                var liut = "project_message_targetId=" + project_message_targetId + "&chk=" + chk + "&sname=" + sname + "&mobile=" + mobile + "&fromurl=" + fromurl + "&lasturl" + lasturl + "&content=" + content;
                                $.ajax({
                                    url: "http://liuyan.jmw.com.cn/message/LTFoot.php",
                                    data: liut,
                                    type: 'get',
                                    dataType: 'jsonp',
                                    jsonp: 'callback',
                                    success: function(html) {
                                        if (html == 1) {
                                            $(".chuangYe_box").show();
                                            $("#black_box").show();

                                        } else if (html == 0) {
                                            alert("增加失败！");
                                        }

                                    }
                                });
                            } else if (html == 0) {
                                alert("增加失败！");
                            } else if (html == 2) {
                                $(".chuangYe_tox").show();
                                $("#black_tok").show();
                            }
                        }
                    });
                    $.ajax({
                        url: 'http://search.jmw.com.cn/del_memcache.php',
                        data: "pid=" + pid,
                        type: 'get',
                        dataType: 'jsonp',
                        jsonp: 'callback',
                        success: function(html) {

}
                    });
                }
            }
        });</script>
    <!-- 创业问答 弹框 -->
    <!-- 问 快速提问 end -->
    <!-- 创业问答成功的 弹框 -->
    <style>.button_close{background: #70a7e7 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #fff; font-size: 14px; height: 40px; margin-left: 125px; text-align: center; width: 150px; margin-top:20px; }</style>
    <div id="black_box" style="width:100%; height:100%; background:rgba(0,0,0,.5); position:fixed; top:0; left:0; display:none; z-index:1111; "></div>
    <div class="chuangYe_box" style="display:none;z-index:1112;">
        <div class="chuangYe_box2">
            <p class="p1 clear">
                <span class="span1 fl">创业问答</span>
                <span class="span2 fr">×</span></p>
            <div class="tiJiao_succeed">
                <dl>
                    <dt class="clear">
                        <span class="fl span1">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/7a420-5965.png" alt="" /></span>
                        <span class="fr span2">提交成功</span></dt>
                    <dd style="text-align:center;font-size:15px;color:#666666;">您的问题已提交审核，请耐心等待</dd></dl>
                <input type="button" value="关闭" class="button_close" /></div>
        </div>
    </div>
    <div id="black_tok" style="width:100%; height:100%; background:rgba(0,0,0,.5); position:fixed; top:0; left:0; display:none; z-index:1111; "></div>
    <div class="chuangYe_tox" style="position: fixed;;top:50%;left:50%;margin-left:-244px;margin-top:-157px;z-index:1112;display:none;background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/310de-5844.png') no-repeat;width:500px;height:290px;padding-top:1px;">
        <div style="margin:7px; background:#fff;width:486px;height:276px;" class="chuangYe_tox2">
            <p style="height:60px;background:#70A7E7;line-height:60px;margin-top:-1px;">
                <span style="font-size:20px;color:#fff;margin-left:34px;">创业问答</span>
                <span class="span2 fr spancha" style="font-size:23px;margin-top:-20px;cursor:pointer;">×</span></p>
            <div style="background: #fff none repeat scroll 0 0;color: #666666;padding: 10px 40px;">
                <dl>
                    <dt class="clear" style="height: 36px;margin:10px auto;width: 160px;">
                        <span>
                            <img style="float:left;margin-right:10px;" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/fd5a7-4688.png" alt="" /></span>
                        <span style="color: #E21314;font-size: 24px;font-weight: bold;margin-top: 7px;">提交失败</span></dt>
                    <dd style="text-align:center;font-size:15px;color:#666666;">您已经发表过相同的问答，请勿重复发表！</dd></dl>
                <input type="button" value="关闭" class="button_close" id="button_close" /></div>
        </div>
    </div>
    <script>/*$('#btn_tiW').click(function () {
   $(".I_ask_box").show();
   $("#black_ceng").show();
 });*/
        $('.button_close').click(function() {
            $(".chuangYe_box").hide();
            $("#black_box").hide();
            window.location.reload();
        });
        $('.span2').click(function() {
            $(".chuangYe_box").hide();
            $("#black_box").hide();
            window.location.reload();
        });
        $('#button_close').click(function() {
            $(".chuangYe_tox").hide();
            $("#black_tok").hide();
            window.location.reload();
        });
        $('.spancha').click(function() {
            $(".chuangYe_tox").hide();
            $("#black_tok").hide();
            window.location.reload();
        });</script>
    <!-- 创业问答 end -->
    <!---留言--->
