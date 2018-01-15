<!--footer begin-->
<div class="footer">
    <div class="footer_info">
        <div class="wrap">
            <!--<div class="serverbox">
                <dl>
                    <dt>关于我们</dt>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/27">假冒欧派产品举报</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/8">企业文化</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/6">企业荣誉</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/3">品牌实力</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/1">公司简介</a></dd>
                </dl>
                <dl>
                    <dt>新手指南</dt>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/24">常见问题</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/20">隐私声明</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/19">用户协议</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/18">购物须知</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/9">购物流程</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/4">注册新用户</a></dd>
                </dl>
                <dl>
                    <dt>免费测量</dt>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/16">填写表单预约</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/11">电话预约</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/10">在线咨询预约</a></dd>
                    <dt>售后保障</dt>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/13">收货指南</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/12">物流配送</a></dd>
                    <dd>
                        <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/2">退货政策</a></dd>
                </dl>
                <dl class="tel_service">
                    <dt>全国客服热线：</dt>
                    <dd class="tel">400-884-1869</dd>
                </dl>
                <dl class="social">
                    <dt>关注</dt>
                    <dd id="weixin_1">
                        <i class="radius_l"></i>
                        <i class="radius_r"></i>
                        <span class="wx"></span>
                        <p>关注微信</p>
                        <div id="weixin_2">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/19b93-3441.jpg" width="150px;" />
                            <em>关注欧派官方微信拿更多优惠</em></div>
                    </dd>
                    <dd>
                        <i class="radius_l"></i>
                        <i class="radius_r"></i>
                        <span class="xl"></span>
                        <p>
                            <a rel="nofollow" target="_blank" href="http://weibo.com/gdop" title="关注新浪微博">关注新浪微博</a></p>
                    </dd>
                    <dd>
                        <i class="radius_l"></i>
                        <i class="radius_r"></i>
                        <span class="tx"></span>
                        <p>
                            <a rel="nofollow" target="_blank" href="http://e.t.qq.com/oppeingd" title="关注腾讯微博">关注腾讯微博</a></p>
                    </dd>
                </dl>
            </div>-->
            <div class="copyright">
                <p class="us_act">
                    <!--<a rel="nofollow" target="_blank" href="http://www.oppein.com">欧派官网</a>
                    <span>|</span>
                    <a rel="nofollow" target="_blank" href="http://www.oppein.com/#16">招商加盟</a>
                    <span>|</span>
                    <a rel="nofollow" target="_blank" href="http://www.oppein.cn/shop/">欧派展厅</a>
                    <span>|</span>
                    <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/20">网站声明</a>
                    <span>|</span>
                    <a rel="nofollow" target="_blank" href="http://www.oppein.cn/site/services/25">联系我们</a></p>-->
                    <p><?= $this->context->icpStr; ?></p>
                    <p><?= $this->context->copyStr; ?></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/statistics_port.js"></script>
<!-- 在线客服图标:百货客服代码 结束-->
<script type="text/javascript">$(function() {
        //报名成功后的弹窗关闭
        $('.apply_ok_chatBot .back,.apply_ok_chat_close').click(function() {
            $('#apply_ok_chat_bg,#apply_ok_chat').css('display', 'none');
        }); $('.com_introduce_footOC').css('display', 'none');
        //页面报名框报名成功后显示的文本
        $('.userapp_ok').html("亲爱的客户：<p>您好，感谢您申请欧派家居的免费上门量房设计体验卡服务。我们的客服人员将在24小时之内与您沟通<i>确定上门量尺时间</i>，请留意广州总部<em>020-83911002</em>的来电！</p><span class='apply_btn' onclick='consule();'>在线咨询</span>");
        //页面底部的微信模块
        $('#weixin_1').mouseover(function() {
            $("#weixin_2").show();
        }).mouseout(function() {
            $("#weixin_2").hide();
        });
        //回到顶部
        $(".go_top,.go_up").click(function() {
            $("body,html").animate({
                scrollTop: 0
            },
            1000);
        });
        formGet($('.apply_con_list'));
        formGet($('.sqk_alert'));
        formGet($('.sqk_alert2'));
        formGet($('.sqk_bottom'));
        //图片延迟加载
        $("img[data-original]").lazyload({
            threshold: 200,
            effect: 'fadeIn'
        });
        //手机扫微信
        $("a.mobile_bg").hover(function() {
            $("img.mobile_code").show();
        },
        function() {
            $("img.mobile_code").hide();
        });
    });
    //弹出咨询框
    function consule() {
        return ;
        $.post('/api/consultlog', {
            url: 'http://www.oppein.cn/oppein/edmsys/index.php?r=site/app&c=seosbl20141128',
            refer_url: ''
        });
        window.open('http://v2.live800.com/live800/chatClient/chatbox.jsp?companyID=661555&configID=126120&jid=8095036864&skillId=6934&enterurl=', '', 'width=570,height=430,');
    }</script>
<!--footer end-->
<!--百度自动推送代码-->
<script>(function() {
        var bp = document.createElement('script');
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();</script>
