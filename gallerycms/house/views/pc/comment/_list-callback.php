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
                    <!-- 回复框开始 -->
                    <style>.reply_content dl dt img{ display:inline-block; vertical-align:middle;} .reply_content dl dt span{ display:inline-block; vertical-align:middle;} .viewMore_list span{ display:block; text-align:center;} .viewMore_list span a{ display:inline-block; height:18px; line-height:18px;} .viewMore_list span a.click_viewMore{ padding:0 30px; color:#36C; background:url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c61fb-6285.gif) 108px 6px no-repeat;} .viewMore_list span a.click_fold{ padding:0 20px; color:#666; background:url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1aa8b-5590.gif) 50px 6px no-repeat; border-left:1px dashed #ccc;} .viewMore_list span a:hover{ color:#F00;}</style>
                    <script type="text/javascript">function click_fold(show_reply_more_id) {
                            $('.click_fold').fadeOut();
                            $("#show_reply_more_" + show_reply_more_id).hide();
                        }</script>
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
