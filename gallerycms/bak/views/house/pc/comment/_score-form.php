            <!--我要点评star-->
            <input class="projectId" type="hidden" value="137829" />
            <div class="fr star_right">
                <h3>我要点评</h3>
                <div class="fell clearfix">
                    <span class="span_a">您在</span>
                    <div class="commun">
                        <span>沟通咨询</span>
                        <ul name="" id='com_select' class="commun_li" style="display:none;width:120px;height:auto;background:#ffffff;color:#666;text-indent:6px;background: #f0f0f0;">
                            <li menuid="2">沟通咨询</li>
                            <li menuid="3">实地考察</li></ul>
                        <input type="hidden" id="com_select_hidden" value="2" /></div>
                    <span class="car">后感觉：
                        <i>晨阳水漆</i>
                    </span>
                </div>
                <!--下拉框特效-->
                <script type="text/javascript">var commun_class = true;
                    $(function() {
                        $("body").click(function() {
                            if (commun_class) $(".commun_li").hide();
                        });
                        $(".commun span").click(function() {
                            $(".commun_li").show();
                        });
                        $(".commun_li li").mouseover(function() {
                            $(this).css('background', '#ccc');
                        }).mouseout(function() {
                            $(this).css('background', '#f0f0f0');

                        });
                        $(".commun_li li").click(function() {
                            var menuid = $(this).attr('menuid');
                            $("#com_select_hidden").val(menuid);
                            $(".commun span").html($(this).html());
                            $(".commun_li").hide();
                        });
                        $(".commun").mouseout(function() {
                            commun_class = true;
                        });
                        $(".commun").mouseover(function() {
                            commun_class = false;
                        });
                    })</script>
                <!--我要点评五角星-star-->
                <link href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/e8ba4-6744.css" rel="stylesheet" type="text/css" />
                <style>.gradeRank_big{float:left;width:118px;height:20px;margin:0 10px 0 0;overflow:hidden;background-image:url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png);background-position:-1px -100px;background-repeat:no-repeat;} .gradeRank_big.b_star0{background-position:-1px -151px;} .gradeRank_big.b_star1{background-position:-1px -121px;} .gradeRank_big.b_star2{background-position:-1px -91px;} .gradeRank_big.b_star3{background-position:-1px -61px;} .gradeRank_big.b_star4{background-position:-1px -31px;} .gradeRank_big.b_star5{background-position:-1px -1px;} .gradeBox{height:20px;line-height:20px;margin:15px 0;overflow:hidden;} .gradeBox li a.choose_star{background-image:url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png);background-repeat:no-repeat;} .gradeBox li a.clrs{background-image:none;} .gradeBox li a.hover_star{background-image:url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3fa98-1808.png);background-repeat:no-repeat;} .gradeBox li a.one_star{width:20px;z-index:5;background-position: -1px -80px;} .gradeBox li a.two_star{width:45px;z-index:4;background-position: -1px -60px;} .gradeBox li a.three_star{width:66px;z-index:3;background-position: -1px -40px;} .gradeBox li a.four_star{width:93px;z-index:2;background-position: -1px -20px;} .gradeBox li a.five_star{width:118px;z-index:1;background-position: -1px 0px;}</style>
                <div class="gradeBox">
                    <ul class="gradeRank_big">
                        <li>
                            <a class="one_star" href="javascript:;" hideFocus="true" data-rate-value="1" data-note="不好" title="不好"></a>
                        </li>
                        <li>
                            <a class="two_star" href="javascript:;" hideFocus="true" data-rate-value="2" data-note="一般" title="一般"></a>
                        </li>
                        <li>
                            <a class="three_star" href="javascript:;" hideFocus="true" data-rate-value="3" data-note="比较好" title="比较好"></a>
                        </li>
                        <li>
                            <a class="four_star choose_star" href="javascript:;" hideFocus="true" data-rate-value="4" data-note="很好" title="很好"></a>
                        </li>
                        <li>
                            <a class="five_star" href="javascript:;" hideFocus="true" data-rate-value="5" data-note="特别好" title="特别好"></a>
                        </li>
                    </ul>
                    <span class="note">
                        <em>很好</em>
                        <input type='hidden' id='grade_num' name='grade_num' value='4' /></span>
                </div>
                <script>$(function() {
                        $('.conTextarea').focus(function() {
                            $(this).css('color', '#555');

                        })

                    })

                    function insertFaceFun(obj) {
                        $("#com_text").animate({
                            'opacity': 1
                        },
                        300).addClass('txtColor');
                        var face = obj.find('a').attr('ico-val');
                        var text_id = obj.attr("name");
                        var show_dom_id = obj.attr('show_dom_id');
                        var len = obj.attr("len");
                        if ($("#" + text_id).val() == ' 与网友分享您的感受...' || $("#" + text_id).val() == ' 回复TA一句...') {
                            $("#" + text_id).val("");
                        }
                        if (($("#" + text_id).val().length + face.length) > len) {
                            return;
                        }
                        insertFace(obj.attr("name"), face, ' 与网友分享您的感受...');
                        checkLength(text_id, show_dom_id, len);
                    }
                    function checkInsertLength(obj) {
                        var insert_id = obj.attr('id');
                        var show_dom_id = obj.attr('show_dom_id');
                        var insert_num = obj.attr('insert_num') var checklen = checkLength(insert_id, show_dom_id, insert_num);
                        //if(!checklen){alert('输入长度不能超过'+insert_num+'字！');}
                    }
                    function loginShow() {
                        $("#itemAtt").attr('class', 'popWrap loginWin');
                        $("#hidSidVal").val(projectId);
                        $("#brandNameOne").attr('href', '');
                        $("#brandNameOne").html('');
                        $("#brandNameTwo").attr('href', '');
                        $("#brandNameTwo").html('');
                        $("#tipsOne").html('');
                        $("#tipsTwo").html('');
                        $("#attTips").attr('class', 'attTips');
                        showPop("#itemAtt", 405);
                        $("#quickBox").hide();
                        $("#c_infoBox2").hide();
                        $("#c_infoBox1").hide();
                        $("#hidLoginDiv").show();
                        $("#hidAttentionDiv").hide();
                    }</script>
                <textarea class="conTextarea" style="height:78px" rows="" cols="" id="com_text" show_dom_id="dom_show" insert_num="300" onkeyup="checkInsertLength($(this));return false;">与网友分享您的感受...</textarea>
                <div class="expression_input clearfix">
                    <span class="show_expression">
                        <a class="show_hit" href="javascript:;" tabindex="0" hideFocus="true">表情</a>
                        <ul class="expression_list">
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[惊讶]" title="惊讶" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5f8ca-2856.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[奋斗]" title="奋斗" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/56dad-8472.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[鼓掌]" title="鼓掌" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3849b-8717.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[微笑]" title="微笑" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/d4d2e-2671.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[可怜]" title="可怜" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/8dc80-7102.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[亲亲]" title="亲亲" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/06916-5101.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[晕]" title="晕" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/22fe0-5589.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[抱拳]" title="抱拳" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/66c5f-1067.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[玫瑰]" title="玫瑰" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/396b3-7968.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[强]" title="强" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5847c-6093.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[握手]" title="握手" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/cf139-9034.gif" alt="" /></a>
                            </li>
                            <li show_dom_id="dom_show" len="300" name="com_text" onclick="insertFaceFun($(this));return false;">
                                <a ico-val="[爱心]" title="爱心" href="javascript:;">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3efbe-4656.gif" alt="" /></a>
                            </li>
                        </ul>
                        <script type="text/javascript">$(function() {
                                var submitstatus = true;
                                function ec(ss) {

                                    //var ss=" fsd fsdaf";                 
                                    return ss.replace(/[ ]/g, "");

                                }
                                $('#com_submit').click(function() {
                                    var com_text_val = $('#com_text').val();
                                    if (ec(com_text_val) == "" || com_text_val == '与网友分享您的感受...') {
                                        alert("请输入内容");
                                        return false;
                                    }
                                    if (!submitstatus) {
                                        return;
                                    }
                                    submitstatus = false;
                                    var com_select = $('#com_select_hidden').val(); //点评选择框
                                    if (com_select == '') {
                                        alert("请选择评价类型！");
                                        submitstatus = true;
                                        return;
                                    }
                                    if ($("#com_text").val() == '与网友分享您的感受...') {
                                        $("#com_text").val('');
                                    }
                                    var checklen = checkLength('com_text', 'dom_show', 300);
                                    if (!checklen) {
                                        alert('输入长度不能超过300字！');
                                        submitstatus = true;
                                        return;
                                    }
                                    var grade_num = $('#grade_num').val(); //评分
                                    var com_text = com_text_val.replace(/(^\s*)|(\s*$)/g, ""); //内容
                                    var projectId = $(".projectId").val(); //点评的项目ids
                                    //alert(projectId);
                                    if (com_text == '' || com_text == '与网友分享您的感受...') {
                                        alert('请输入内容');
                                        return false;
                                    } else {
                                        $.ajax({
                                            type: "GET",
                                            url: 'http://rating.jmw.com.cn/addComments.php',
                                            data: "com_select=" + com_select + "&grade_num=" + grade_num + "&com_text=" + encodeURIComponent(com_text) + "&tid=" + projectId,
                                            dataType: 'jsonp',
                                            cache: false,
                                            jsonp: "jsonpcallback",
                                            success: function(html) {
                                                submitstatus = true;
                                                if (html == -3) {
                                                    alert("您对（晨阳水漆）的评论次数今日已达上限！明天可以继续评论！");

                                                } else if (html == -6) {
                                                    alert("您已经点评过该项目，如需追加点评请登录！");
                                                } else if (html == -5) {
                                                    alert("您的分享内容包含敏感词，无法提交");
                                                } else {
                                                    alert("评论成功！");
                                                    $("#com_text").val('与网友分享您的感受...');
                                                    window.location.reload();
                                                }

                                            }
                                        });
                                    }

                                });

                            });
                            //
                            </script>
                    </span>
                    <span class="txtLength">还能输入
                        <i id='dom_show'>300</i>个字符</span>
                    <input class="formSubmit_btn" name="" type="button" id="com_submit" value="发布" /></div>
            </div>
            <!--我要点评end--></div>
