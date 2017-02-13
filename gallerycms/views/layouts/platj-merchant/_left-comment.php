    <div class="nineth">
        <div class="nineth_title clearfix">
            <span class="zixun_h3">晨阳水漆加盟在线咨询</span>
            <a target="_blank" href="http://www.jmw.com.cn/xm137829/liuyan/" title="晨阳水漆加盟在线咨询">
                <u>查看更多</u>&gt;&gt;</a>
        </div>
        <div class="message" id="message_main">
            <div id="message_div" class="message_every clearfix">
                <dl class="fl">
                    <dt>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/79506-4799.jpg" width="51" height="51" alt="" /></dt>
                    <dd>鲍先生</dd></dl>
                <ul class="tent fl">
                    <li class="sanjiao"></li>
                    <li class="from">
                        <ul class="clearfix">
                            <li class="ip">IP：
                                <span>121.17.120.*</span></li>
                            <li class="From"></li>
                            <li class="From">网页版</li>
                            <li class="time">留言时间:
                                <span>2017-01-17 15:43:09
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c91dc-9102.gif" style='display:inline-block' /></span></li>
                        </ul>
                    </li>
                    <li class="want">资金看项目</li></ul>
            </div>
            <div id="message_div" class="message_every clearfix">
                <dl class="fl">
                    <dt>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5448b-6171.jpg" width="51" height="51" alt="" /></dt>
                    <dd>吴正军</dd></dl>
                <ul class="tent fl">
                    <li class="sanjiao"></li>
                    <li class="from">
                        <ul class="clearfix">
                            <li class="ip">IP：
                                <span>180.174.146.*</span></li>
                            <li class="From"></li>
                            <li class="From">网页版</li>
                            <li class="time">留言时间:
                                <span>2017-01-17 15:11:13
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c91dc-9102.gif" style='display:inline-block' /></span></li>
                        </ul>
                    </li>
                    <li class="want">·我想详细了解此项目的加盟流程，请与我联系！</li></ul>
            </div>
            <div id="message_div" class="message_every clearfix">
                <dl class="fl">
                    <dt>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5448b-6171.jpg" width="51" height="51" alt="" /></dt>
                    <dd>陆前锋</dd></dl>
                <ul class="tent fl">
                    <li class="sanjiao"></li>
                    <li class="from">
                        <ul class="clearfix">
                            <li class="ip">IP：
                                <span>58.40.195.*</span></li>
                            <li class="From"></li>
                            <li class="From">网页版</li>
                            <li class="time">留言时间:
                                <span>2017-01-16 15:19:31
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c91dc-9102.gif" style='display:inline-block' /></span></li>
                        </ul>
                    </li>
                    <li class="want">·我想详细了解此项目的加盟流程，请与我联系！</li></ul>
            </div>
            <div id="message_div" class="message_every clearfix">
                <dl class="fl">
                    <dt>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6989f-5450.jpg" width="51" height="51" alt="" /></dt>
                    <dd>李总</dd></dl>
                <ul class="tent fl">
                    <li class="sanjiao"></li>
                    <li class="from">
                        <ul class="clearfix">
                            <li class="ip">IP：
                                <span>223.104.24.*</span></li>
                            <li class="From"></li>
                            <li class="From">手机版</li>
                            <li class="time">留言时间:
                                <span>2017-01-15 12:45:33</span></li>
                        </ul>
                    </li>
                    <li class="want">我想询问晨阳水漆项目</li></ul>
            </div>
        </div>
    </div>
    <script>$(function() {
            var lasturl = window.location.href;
            var fromurl = document.referrer;
            $('#lasturl').val(lasturl);
            $('#fromurl').val(fromurl);
            $('#lasturlTJ').val(lasturl);
            $('#fromurlTJ').val(fromurl);
            $('#dqid10').val('');
            $('#dqid20').val('');
            $('#dqid30').val('');
            $("#list_1").hide();
        });
        function checkcontent() {
            var areaCont = $('#areaCont').val();
            areaCont = areaCont.replace(/(^\s*)|(\s*$)/g, "");
            if (areaCont == '') {
                return false;
            } else {
                return true;
            }
        }
        function checkmobile() {
            var yanz = /^(86)?0?1\d{10}$/;
            var mpnum = $('#mobile').val();
            if (mpnum == '') {
                $("#spanmobile").attr('class', "correct error");
                return false;
            } else {
                if (yanz.test(mpnum) == false) {
                    $("#spanmobile").attr('class', "correct error");
                    return false;
                } else {
                    $("#spanmobile").attr('class', "correct");
                    return true;
                }
            }
        }
        function checksname() {
            var sname = $('#sname').val();
            sname = sname.replace(/(^\s*)|(\s*$)/g, "");
            if (sname == '') {
                $("#spanname").attr('class', "correct error");
                return false;
            } else {
                $("#spanname").attr('class', "correct");
                return true;
            }
        }
        function projectFootMessage() {
            var sname = $("#sname").val();
            var mobile = $("#mobile").val();
            var content = $("#areaCont").val();
            var project_message_targetId = $("#project_message_targetId").val();
            var project_message_origin = $("#project_message_origin").val();
            var lasturl = $("#lasturl").val();
            var fromurl = $("#fromurl").val();
            var dqid10 = $("#dqid10").val();
            var dqid20 = $("#dqid20").val();
            var zhanhui = $("input[name='zhanhui']:checked").val();
            if (zhanhui == undefined) {
                zhanhui = 0;
            }
            var chk = $("input[name='chk']:checked").val();
            var jsCheck = true;
            var dqid30 = $('#dqid30').val();
            if (dqid30 == '') {
                $("#xiaspan").attr('class', "correct error");
                jsCheck = false;
            } else {
                $("#xiaspan").attr('class', "correct");
                jsCheck = true;
            }
            if (checkcontent() == false) jsCheck = false;
            if (checksname() == false) jsCheck = false;
            if (checkmobile() == false) jsCheck = false;
            if (jsCheck == true) {
                // $('#hideFootSubmit').hide();
                $.ajax({
                    type: 'get',
                    url: 'http://liuyan.jmw.com.cn/message/messageProjectFoot_temporary.php',
                    dataType: 'jsonp',
                    jsonp: 'callback',
                    data: {
                        is_login: is_login,
                        sname: sname,
                        mobile: mobile,
                        content: content,
                        chk: chk,
                        project_message_targetId: project_message_targetId,
                        project_message_origin: project_message_origin,
                        lasturl: lasturl,
                        fromurl: fromurl,
                        dqid10: dqid10,
                        dqid20: dqid20,
                        dqid30: dqid30,
                        zhanhui: zhanhui
                    },
                    success: function(html) {
                        if (html.status == 'login') {
                            alert('留言成功！');
                            window.location.reload();
                            //alert(is_login);
                        } else if (html.status == 'unlogin') {
                            $('#two_message_id').val(html.id);
                        }
                    }
                });
                if (is_login == 'unlogin') {
                    $('#click_YZ').show();
                    $('.gray_mask').show();
                    $('#two_telephone').val(mobile);
                    $('#gem_collection').val('标页留言');
                    Auto_trigger();
                }
            }
            return jsCheck;
        }</script>
