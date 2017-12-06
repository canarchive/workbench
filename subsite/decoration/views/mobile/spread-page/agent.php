<?php
use yii\helpers\Url;
use yii\helpers\Html;

Yii::$app->params['tdkInfos']['title'] = '瓷砖招商|瓷砖加盟|瓷砖代理-欧神诺高端瓷砖品牌';
Yii::$app->params['tdkInfos']['description'] = '瓷砖招商,瓷砖加盟,瓷砖代理';
Yii::$app->params['tdkInfos']['keyword'] = '欧神诺高端瓷砖品牌，现对安徽、湖北、湖南全县级招商加盟代理，欢迎您的加盟！';
$urls = $this->context->navUrls;
?>
<!--[if lt IE 9]>
<script type="text/javascript">
    alert('浏览器版本过低，部分内容不能达到最佳展示效果，请升级！');
</script>
<![endif]-->
<script type="text/javascript">
window.sourceChannel = 'SOURCE_PHOME';
window.sourceLocation = 'SOURCE_PHOME_QMHG';
//微信分享数据
var shareData = {
    title : '欧神诺陶瓷县在招商，诚邀您的加盟',//分享的标题
    desc : '8+1特色经营模式，10大加盟优势，欧神诺期待与你盈未来·赢天下！',//分享的描述
    img : 'http://event.oceano.com.cn/20171028/asset/images/m_header.jpg',//分享的图片
    link : ''//分享的链接
};

</script>
<link rel="stylesheet" href="https://cigro.cn/static/css/reset.css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/css/1028m.css?v=20171103_1" />
<link rel="stylesheet" href="http://event.oceano.com.cn/activity/style/layer.css" />

<div class="background w640">
    <!-- 头部 -->
    <div class="header">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_header.jpg" />
        <!-- 导航 -->
        <div class="menu clearfix">
            <a href="javascript:void(0)" onclick="jump(0)">欧神诺在线</a>
            <a href="javascript:void(0)" onclick="jump('apply', -150)">申请加盟</a>
            <a href="javascript:void(0)" onclick="jump('better', -150)">我们的优势</a>
            <a href="javascript:void(0)" onclick="jump('power', -150)">品牌实力</a>
            <a href="javascript:void(0)" onclick="jump('join', -150)">加盟须知</a>
            <a href="javascript:void(0)" onclick="jump('step', -150)">加盟流程</a>
        </div>
        <!-- 导航 -->
    </div>
    <!-- 头部 -->

    <!-- 表单 -->
    <div class="apply" id="apply">
        <div class="title">
            <p>下一个会是你吗？</p>
        </div>
        <form action="/" onsubmit="return false">
            <p class="desc"><span>申请加盟</span></p>
            <p class="input"><span class="red">*</span>姓名<input type="text" id="username" placeholder="请输入姓名"/></p>
            <p class="input"><span class="red">*</span>手机号码<input type="text" id="mobile" placeholder="请输入手机号码"/></p>
            <!--<p class="input"><span class="red">*</span>获取验证码<input type="text" id="code_input" placeholder="请输入手机验证码" maxlength="6"/><input id="code_btn" class="getCode" type="button" value="发送验证码" readonly=""></p>-->
            <div class="input"><span class="red">*</span>意向地区城市
                <p id="user-city-distpicker">
                    <select name="province" class="province" id="province"></select>
                    <select name="city" class="city" id="city"></select>
                    <select name="district" class="district" id="district"></select>
                </p>
            </div>
            <div class="button">
                <input type="button" value="重置" class="reset" onclick="clearFormN()"/>
                <input type="button" value="发送" class="send" id="usrMsg_ok_btn"/>
            </div>
            <div class="important clearfix">
                <div class="box left">
                    <p class="p1"><span class="red">*</span>此次重点招商省份</p>
                    <p class="p2"><span>安徽、湖南、湖北</span> 空白城市/县城同步招商</p>
                    
                    <p class="p1"><span class="red">*</span>全国招商热线</p>
                    <p class="p2"><span>139-2861-0872</span></p>
                </div>
                <div class="box right">
                    <p class="p1"><span class="red">*</span>加盟电话</p>
                    <p class="p2">安徽省：<br /><span>13923178425</span><br />（余先生）</p>
                    <p class="p2">湖南省：<br /><span>13450788704</span><br />（黄先生）</p>
                    <p class="p2">湖北省：<br /><span>18823148628</span><br />（方先生）</p>
                </div>
            </div>
        </form>
    </div>
    <!-- 表单 -->

    <!-- 优势 -->
    <div class="better" id="better">
        <div class="title">
            <p>我们的优势</p>
        </div>
        <div class="ctrl clearfix forbid">
            <span class="ctrl_1" data-index="0" onclick="showThis(this)"></span>
            <span class="ctrl_2" data-index="1" onclick="showThis(this)"></span>
            <span class="ctrl_3" data-index="2" onclick="showThis(this)"></span>
            <span class="ctrl_4" data-index="3" onclick="showThis(this)"></span>
            <span class="ctrl_5" data-index="4" onclick="showThis(this)"></span>
            <span class="ctrl_6" data-index="5" onclick="showThis(this)"></span>
        </div>
        <div class="picture">
            <div class="pic pic_1 show">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_pic1.jpg" />
            </div>
            <div class="pic pic_2">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_pic2.jpg" />
            </div>
            <div class="pic pic_3">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_pic3.jpg" />
            </div>
            <div class="pic pic_4">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_pic4.jpg" />
            </div>
            <div class="pic pic_5">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_pic5.jpg" />
            </div>
            <div class="pic pic_6">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_pic6.jpg" />
            </div>
        </div>
    </div>
    <!-- 优势 -->

    <!-- 实力 -->
    <div class="power" id="power">
        <div class="title">
            <p>品牌实力优势</p>
        </div>
        <ul class="clearfix forbid">
            <li class="power_1">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">01</span><span class="t">加盟政策支持</span></p>
                        <p class="text">享有品牌使用权和全部商品经营权。多场品牌活动贯穿全年，区域化营销活动助力，轻松推动业绩增长。</p>
                    </div>
                </div>
            </li>
            <li class="power_2">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">02</span><span class="t">全渠道引流体系</span></p>
                        <p class="text">运用多个线上商机平台，引流潜在客户至门店，线上线下营销结合，紧抓商机，客源无忧。</p>
                    </div>
                </div>
            </li>
            <li class="power_3">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">03</span><span class="t">全媒体服务支持</span></p>
                        <p class="text">全面的品牌媒体矩阵，如官网、微信、微博等，提供精品内容传播，持续为经销商维护客情，增加品牌粘性。</p>
                    </div>
                </div>
            </li>
            <li class="power_4">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">04</span><span class="t">高效3D云设计</span></p>
                        <p class="text">10分钟即可出效果图，更可导出720°效果图、CAD施工图、铺砖指导彩图，强大抓客工具，轻松谈单。</p>
                    </div>
                </div>
            </li>
            <li class="power_5">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">05</span><span class="t">免费新商培训</span></p>
                        <p class="text">欧神诺拥有成熟的讲师团队，针对性提供系统培训、人才培训、服务培训及营销培训，一站式扶持店面发展。</p>
                    </div>
                </div>
            </li>
            <li class="power_6">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">06</span><span class="t">开业指导</span></p>
                        <p class="text">欧神诺专业团队协助策划开业活动，多项开业扶持大礼，协助门店打响头炮。</p>
                    </div>
                </div>
            </li>
            <li class="power_7">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">07</span><span class="t">营销支持战略</span></p>
                        <p class="text">庞大的精英行销团队，为全年各类营销活动提供点对点的帮扶和策划、执行指导，提升团队质素，迅猛开拓市场。</p>
                    </div>
                </div>
            </li>
            <li class="power_8">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">08</span><span class="t">宣传推广支持</span></p>
                        <p class="text">覆盖国内及国外高端广告宣传，更可针对区域提供推广协助，从品牌到终端，立体彰显品牌影响力。</p>
                    </div>
                </div>
            </li>
            <li class="power_9">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">09</span><span class="t">高效物流体系</span></p>
                        <p class="text">先进的物流系统确保仓储高速运行，及时补货，为销售提供强大后盾。</p>
                    </div>
                </div>
            </li>
            <li class="power_10 spec">
                <div class="cover">
                    <div class="box">
                        <p class="head"><span class="n">10</span><span class="t">欢迎您的加入</span></p>
                        <p class="text">欧神诺以技术创新为核心，专注高端瓷砖生产，致力人居环境美化。期待你的加入，一起盈未来，赢天下。</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- 实力 -->

    <!-- 加盟 -->
    <div class="join" id="join">
        <div class="title">
            <p>品牌加盟须知</p>
        </div>
        <div class="box">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_join.png"/>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/newHead.jpg" class="smallImg"/>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/big.jpg" class="bigImg"/>
            <input type="button" class="goForm forbid" onclick="javascript:jump('apply', -150)"/>
        </div>
    </div>
    <!-- 加盟 -->

    <!-- 步骤 -->
    <div class="step" id="step">
        <div class="title">
            <p>加盟流程</p>
        </div>
        <div class="box">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/m_step.jpg"/>
        </div>
    </div>
    <!-- 步骤 -->

    <!-- 联系 -->
    <div class="contact">
        <div>
            <p>全国招商热线</p>
            <p>139-2861-0872</p>
            <a class="qqBtn" href="//wpa.qq.com/msgrd?v=3&amp;uin=3340235094&amp;site=qq&amp;menu=yes" target="_blank"/></a>
        </div>
    </div>
    <!-- 联系 -->

    <!-- 活动号 -->
    <input type="hidden" id="campaignName" value="20171031"/>
<input type="hidden" id="returnUrl" value="http://oceano.com.cn"/>
    <!-- 活动号 -->

</div>

<!-- script -->
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/jquery.min.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/store.js"></script> 
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/common.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/layer/layer.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/cityselect/distpicker.data.min.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/cityselect/distpicker.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/nevesytxis.js?v=20171103_1"></script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" charset="utf-8">

$.post("http://wx.oceano.com.cn:80/osn/wechat/signUrl.html", {
    signUrl : window.location.href
}, function(data, status) {
    window.wx.config({
        debug : 0,
        appId : 'wxe551610d444bde4d',
        timestamp : data.timestamp,
        nonceStr : data.noncestr,
        signature : data.signature,
        jsApiList : [ 'checkJsApi', 'onMenuShareTimeline','showMenuItems','hideAllNonBaseMenuItem',
            'hideOptionMenu', 'chooseImage','uploadImage','onMenuShareTimeline','onMenuShareAppMessage' ]
    });

    wrapWxReady();

});    

function wrapWxReady(){
    window.wx.ready(function() {
        var shareTitle = window.shareData.title || document.title;//分享标题
        var shareDesc = window.shareData.desc || getMetaDesc() ;//分享描述
        var shareImg = window.shareData.img || '';//分享图片
        var shareLink = window.shareData.link || window.location.href;//分享链接

        window.wx.onMenuShareTimeline({
            title: shareTitle,
            desc:shareDesc,
            imgUrl: shareImg,
            link: shareLink,
            success: function () {
            },
            cancel: function () {
            },
            fail: function (res) {
            }
        });
        window.wx.onMenuShareAppMessage({
            title: shareTitle,
            desc:shareDesc,
            imgUrl: shareImg,
            link: shareLink,
            success: function (res) {
            },
            cancel: function (res) {
            },
            fail: function (res) {
            }
        });
    });
}
</script>
<!-- script -->
