<?php
$info = $this->context->mDatas['info'];
$this->params['currentNav'] = 'comment';
$this->params['noCommentList'] = true;
?>
<div class="picture file_one">
    <div class="title"><h2><?= $info['name']; ?>业主评论</h2></div>
    <div class="comment">
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
        <a name="anchor9816"></a>
        <div class="join clearfix">
            <a name="anchor9816"></a>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6ca70-5407.jpg" class="peo" width="69" height="69" />
            <div class="join_box">
                <div class="join_eva clearfix">
                    <span class="span_red fl">意向加盟者</span>
                    <span class="span_time fl">2015年01月06日</span>
                    <span class="span_gray fl">沟通咨询</span>
                    <span class="span_red fl">
                        <a href="http://www.jmw.com.cn/xm137829/xiangmujieshao/" target="_blank" title="晨阳水漆加盟">晨阳水漆</a></span>
                    <span class="span_gray fl">后感觉：</span>
                    <span class="span_good fl">很好</span>
                    <i class="xs_5y fl my_feel4"></i>
                </div>
                <div class="join_infor">了解了这个品牌，觉得还行，各方面的
                    <a href="http://www.jmw.com.cn/" target="_blank" style="color:#666;">加盟</a>政策比较理想，打算去谈合作的事。</div>
                <ul class="clearfix">
                    <!-- <li class="my_replay" style="display:block;"><a href="javascript:;" name="toggleReply" title="隐藏回复">回复(<span></span>)</a></li>-->
                    <!--li><span class="line"></span></li-->
                    <li>
                        <a href="javascript:void(0);" pid="9816" act="yes" num="0" onclick="isSupport($(this));return false;">支持(
                            <span>0</span>)</a></li>
                    <li>
                        <span class="line"></span>
                    </li>
                    <li>
                        <a href="javascript:void(0);" pid="9816" act="no" num="0" onclick="isSupport($(this));return false;">反对(
                            <span>0</span>)</a></li>
                </ul>
                <div class="space">
                    <textarea id="com_text9816" cols="" rows="" class="conTextarea replyTextarea" style="height:22px;" show_dom_id="show_dom9816" insert_num="200" onkeyup="checkInsertLength($(this));return false;">回复TA一句...</textarea>
                    <span class="space_sj"></span>
                    <div class="expression_input clearfix">
                        <span class="show_expression">
                            <a class="show_hit" tabindex="0" hideFocus="true">表情</a>
                            <ul class="expression_list">
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[惊讶]" title="惊讶" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5f8ca-2856.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[奋斗]" title="奋斗" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/56dad-8472.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[鼓掌]" title="鼓掌" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3849b-8717.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[微笑]" title="微笑" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/d4d2e-2671.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[可怜]" title="可怜" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/8dc80-7102.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[亲亲]" title="亲亲" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/06916-5101.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[晕]" title="晕" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/22fe0-5589.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[抱拳]" title="抱拳" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/66c5f-1067.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[玫瑰]" title="玫瑰" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/396b3-7968.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[强]" title="强" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5847c-6093.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[握手]" title="握手" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/cf139-9034.gif" alt="" /></a>
                                </li>
                                <li name="com_text9816" len="200" show_dom_id="show_dom9816" onclick="insertFaceFun($(this));return false;">
                                    <a ico-val="[爱心]" title="爱心" href="javascript:;">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3efbe-4656.gif" alt="" /></a>
                                </li>
                            </ul>
                        </span>
                        <span class="txtLength">还能输入
                            <i id="show_dom9816">200</i>个字符</span>
                        <input class="formSubmit_btn" name="" style="line-height:28px;" type="button" value="回复" tid="9816" onclick="javascript:reply($(this));return false;" /></div>
                    <!---回复框开始 ---->
                    <style>.reply_content dl dt img{ display:inline-block; vertical-align:middle;} .reply_content dl dt span{ display:inline-block; vertical-align:middle;} .viewMore_list span{ display:block; text-align:center;} .viewMore_list span a{ display:inline-block; height:18px; line-height:18px;} .viewMore_list span a.click_viewMore{ padding:0 30px; color:#36C; background:url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c61fb-6285.gif) 108px 6px no-repeat;} .viewMore_list span a.click_fold{ padding:0 20px; color:#666; background:url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1aa8b-5590.gif) 50px 6px no-repeat; border-left:1px dashed #ccc;} .viewMore_list span a:hover{ color:#F00;}</style>
                    <script type="text/javascript">function click_fold(show_reply_more_id) {
                            $('.click_fold').fadeOut();
                            $("#show_reply_more_" + show_reply_more_id).hide();
                        }</script>
                </div>
            </div>
        </div>
        <script>function show_reply_more(score_id, pid, score_reply_page) {
                var hidden_num = $('.hidden_num:last').val();
                var name = "four_reply" + score_id;
                var inpname = "hid_last_id_" + score_id;
                var divname = "appendDiv_" + score_id;
                var last_id = $("#" + inpname).val();
                $("." + name).show();
                if (hidden_num != '') {
                    $.ajax({
                        type: 'get',
                        url: "http://search.jmw.com.cn/show_more_reply.php",
                        data: 'last_id=' + last_id + '&score_id=' + score_id + '&pid=' + pid,
                        dataType: "jsonp",
                        jsonp: "callback",
                        //传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
                        jsonpCallback: "success_jsonpCallback",
                        //自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
                        success: function(data) {
                            $("." + name).append(data.html);
                            $("#" + inpname).val(data.last_id);

                        }

                    });
                } else if (hidden_num == 0) {
                    $(".click_fold").click(function() {
                        $('.click_fold').fadeOut();
                    });
                }

            }
            function click_fold(score_id) {
                var sectionname = "four_reply" + score_id;
                $("." + sectionname).hide();
            }</script>
        <!--回复框效果ya-->
        <script type="text/javascript">$(function() {

                var reply = '回复TA一句...';
                $("#huifu").focus(function() {

                    if ($(this).val() == '回复TA一句...') {
                        $(this).val("");
                        $(this).css('color', '#666');
                    } else {
                        $(this).css('color', '#666');
                    }
                }).blur(function() {
                    if (!$(this).val()) {
                        $(this).val(reply);
                        $(this).css('color', '#ccc');
                    } else {
                        $(this).css('color', '#666');
                    }
                });
                $(".my_replay").toggle(function() {
                    $(this).parent().next().fadeIn("slow");
                },
                function() {
                    $(this).parent().next().fadeOut("slow");

                })

            })</script>
        <!--回复框-end-->
        <!--点评列表end--></div>
    <div class="black2">
        <a class="current">1</a>
        <a href="http://www.jmw.com.cn/xm137829/wangyoudianping/2">2</a>
        <a href="http://www.jmw.com.cn/xm137829/wangyoudianping/2" class="next">下一页</a>
        <a href="http://www.jmw.com.cn/xm137829/wangyoudianping/2">最后一页</a></div>
</div>
