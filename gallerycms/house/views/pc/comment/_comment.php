        <div class="star clearfix">
            <!--综合评分 左 B-->
            <style>.star_left p .x1{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0); float: left; height: 20px; width: 128px; background-position:-1px -80px; } .star_left p .x2{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0); float: left; height: 20px; width: 128px; background-position:-1px -60px; } .star_left p .x3{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0); float: left; height: 20px; width: 128px; background-position:-1px -40px; } .star_left p .x4{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0); float: left; height: 20px; width: 128px; background-position:-1px -20px; } .star_left p .x5{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0); float: left; height: 20px; width: 128px; background-position:-1px 0px; }</style>
            <div class="fl star_left">
                <h3>综合平均分</h3>
                <p class="clearfix">
                    <i class="x5"></i>
                    <span>特别好</span></p>
                <div class="progress">
                    <dl class="clearfix">
                        <dt class="fl">特别好:</dt>
                        <dd class="fl clearfix">
                            <span class="fl bar bar1">
                                <i style="width:15.38%"></i>
                            </span>
                            <span class="fl percen">15.38%</span></dd>
                    </dl>
                    <dl class="clearfix">
                        <dt class="fl">很好:</dt>
                        <dd class="fl clearfix">
                            <span class="fl bar bar2">
                                <i style="width:84.61%"></i>
                            </span>
                            <span class="fl percen">84.61%</span></dd>
                    </dl>
                    <dl class="clearfix">
                        <dt class="fl">比较好:</dt>
                        <dd class="fl clearfix">
                            <span class="fl bar bar3">
                                <i style="width:0%"></i>
                            </span>
                            <span class="fl percen">0%</span></dd>
                    </dl>
                    <dl class="clearfix">
                        <dt class="fl">一般:</dt>
                        <dd class="fl clearfix">
                            <span class="fl bar bar4">
                                <i style="width:0%"></i>
                            </span>
                            <span class="fl percen">0%</span></dd>
                    </dl>
                    <dl class="clearfix">
                        <dt class="fl">不好:</dt>
                        <dd class="fl clearfix">
                            <span class="fl bar bar5">
                                <i style="width:0%"></i>
                            </span>
                            <span class="fl percen">0%</span></dd>
                    </dl>
                </div>
            </div>
            <!--综合评分 左 End-->
            <?php echo $this->render('_score-form'); ?>
        <!--点评列表star-->
        <style>.formSubmit_btn{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/32916-9047.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0); border: medium none; color: #fff; cursor: pointer; position:absolute; top:0; right:0; z-index: 10; font-family: "微软雅黑"; font-size: 16px; height: 30px; line-height: 28px; overflow: hidden; width: 100px; } .my_feel1{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/0403f-8739.png") repeat scroll 0 0 rgba(0, 0, 0, 0); display: inline-block; height: 12px; margin-top: 6px; overflow: hidden; width: 80px; background-position:-1px -57px; } .my_feel2{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/0403f-8739.png") repeat scroll 0 0 rgba(0, 0, 0, 0); display: inline-block; height: 12px; margin-top: 6px; overflow: hidden; width: 80px; background-position:-1px -42px; } .my_feel3{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/0403f-8739.png") repeat scroll 0 0 rgba(0, 0, 0, 0); display: inline-block; height: 12px; margin-top: 6px; overflow: hidden; width: 80px; background-position:-1px -27px; } .my_feel4{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/0403f-8739.png") repeat scroll 0 0 rgba(0, 0, 0, 0); display: inline-block; height: 12px; margin-top: 6px; overflow: hidden; width: 80px; background-position:-1px -15px; } .my_feel5{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/0403f-8739.png") repeat scroll 0 0 rgba(0, 0, 0, 0); display: inline-block; height: 12px; margin-top: 6px; overflow: hidden; width: 80px; background-position:-1px 0px; }</style>
        <script>//回复
            var replystatus = true;
            function reply(obj) {
                /*alert('1');
            if(!replystatus) { alert('2'); return;}
            replystatus = false;
            alert('3');*/
                var tid = obj.attr('tid'); //'项目id';
                var reply_content = $('#com_text' + tid).val(); //回复内容;
                if (reply_content == "") {
                    alert("请输入内容");
                    return false;
                }
                if (reply_content == '回复TA一句...' || reply_content.length > 200 || reply_content.length < 2) {
                    alert("回复内容不能为空并且输入长度必须在2-200之间！");
                    replystatus = true;
                    return;
                }
                $.ajax({
                    type: "GET",
                    url: 'http://rating.jmw.com.cn/reply.php',
                    data: "tid=" + tid + "&reply_content=" + encodeURIComponent(reply_content),
                    dataType: 'jsonp',
                    cache: false,
                    jsonp: "jsonpcallback",
                    success: function(html) {
                        replystatus = true;
                        if (html == -4) {
                            alert('您回复的太快了，请过15秒后试试！');
                        } else if (html == -5) {
                            alert('您回复的内容中有敏感词出现，无法提交。');
                        } else {
                            alert("回复成功！");
                            $('#com_text' + tid).val('回复TA一句...');
                            window.location.reload();
                        }
                    }
                });
            }
            //查看更多
            function showMore(obj) {
                var isfold = obj.attr("isfold");
                if (isfold == "true") {

                    obj.parents('.replyGrade').find('.replyList').height('');
                    obj.parents('span').animate({
                        'width': 197
                    },
                    200,
                    function() {
                        $(this).find('.click_fold').fadeIn(300);
                    });
                    obj.attr("isfold", "false");
                    return;
                }
                var tid = obj.attr('tid'); //项目id
                var lastid = $("#afterReply" + tid + " li:last-child").attr('key');
                var pagenum = 10;
                $.ajax({
                    type: "GET",
                    url: 'http://rating.jmw.com.cn/showMore.php',
                    data: "tid=" + tid + "&lastid=" + lastid + "&pagenum=" + pagenum,
                    dataType: 'jsonp',
                    cache: false,
                    jsonp: "jsonpcallback",
                    success: function(html) {
                        if (html['error'] != -1) {
                            $("#afterReply" + tid).append(html['html']);
                            obj.parents('span').animate({
                                'width': 197
                            },
                            200,
                            function() {
                                $(this).find('.click_fold').fadeIn(300);
                            });
                        } else {
                            obj.html("暂无更多");
                        }
                    }
                });
            }
            //**支持反对
            //**
            var isstatus = true;
            function isSupport(obj) {
                if (!isstatus) {
                    return;
                }
                isstatus = false;
                var projectId = $("#projectId").val();
                var pid = obj.attr("pid");
                var act = obj.attr("act");
                var num = parseInt(obj.attr("num"));
                $.ajax({
                    type: "GET",
                    url: 'http://rating.jmw.com.cn/isSupport.php',
                    data: "pid=" + pid + "&act=" + act + '&projectId=' + projectId,
                    dataType: 'jsonp',
                    cache: false,
                    jsonp: "jsonpcallback",
                    success: function(html) {
                        if (html == 1) {
                            //num++;
                            if (num == 0) {
                                obj.find('span').text(1);
                            } else {
                                obj.find('span').text(num + 1);
                            }
                            if (act == 'yes') {
                                var info = "支持成功！";
                            } else {
                                var info = "反对成功！";
                            }

                        } else if (html == -1) {
                            if (act == 'yes') {
                                var info = "您已经支持过了！";
                            } else {
                                var info = "您已经反对过了！";
                            }
                        }
                        alert(info);
                        isstatus = true;
                    }
                });
            }
            //收起
            function fold(obj) {
                obj.fadeOut(300,
                function() {
                    var li_obj = obj.parents('.replyGrade').find('.replyList li');
                    var li_h1 = li_obj.eq(0).height();
                    var li_h2 = li_obj.eq(1).height();
                    var li_h3 = li_obj.eq(2).height();
                    var li_h4 = li_obj.eq(3).height();
                    var h_all = li_h1 + li_h2 + li_h3 + li_h4 + 84;
                    obj.parents('.replyGrade').find('.replyList').animate({
                        'height': h_all
                    },
                    200);
                    obj.parents('span').animate({
                        'width': 132
                    },
                    200);
                    obj.prev().attr("isfold", "true");
                    obj.prev().html("查看更多回复");
                });
            }</script>
