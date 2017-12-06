<?php
use yii\helpers\Url;
use yii\helpers\Html;

Yii::$app->params['tdkInfos']['title'] = '瓷砖招商|瓷砖加盟|瓷砖代理-欧神诺高端瓷砖品牌';
Yii::$app->params['tdkInfos']['description'] = '瓷砖招商,瓷砖加盟,瓷砖代理';
Yii::$app->params['tdkInfos']['keyword'] = '欧神诺高端瓷砖品牌，现对安徽、湖北、湖南全县级招商加盟代理，欢迎您的加盟！';
$urls = $this->context->navUrls;
// <body class="pc" id="star">
?>
<!--[if lt IE 9]>
<script type="text/javascript">
    alert('浏览器版本过低，部分内容不能达到最佳展示效果，请升级！');
</script>
<![endif]-->
<script type="text/javascript">
window.sourceChannel = 'SOURCE_PC';
window.sourceLocation = 'SOURCE_PC_QMHG';
</script>
<link rel="stylesheet" href="https://cigro.cn/static/css/reset.css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/css/1028.css?v=20171103_1" />
<link rel="stylesheet" href="http://event.oceano.com.cn/activity/style/layer.css" />

<!-- 顶部图 -->
<div class="banner">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/banner.png"  />
</div>
<!-- 顶部图 -->

<!-- 申请加盟 -->
<div class="form" id="apply">
    <div class="title">
        <p>下一个会是你吗？</p>
    </div>
    <form action="/" onsubmit="return false" class="forbid" id="form">
        <p class="apply"><span>申请加盟</span></p>
        <div class="input">
            <div class="line clearfix">
                <div class="left"><span class="red">*</span>姓名<input type="text" id="username" placeholder="请输入姓名"/></div>
                <div class="right"><span class="red">*</span>手机号码<input type="text" id="mobile" placeholder="请输入手机号码"/></div>
            </div>
            <div class="line clearfix">
                <div class="left"><span class="red">*</span>意向地区城市
                    <p id="user-city-distpicker">
                        <select name="province" class="province" id="province"></select>
                        <select name="city" class="city" id="city"></select>
                        <select name="district" class="district" id="district"></select>
                    </p>
                </div>
                <!--<div class="right"><span class="red">*</span>获取验证码<input type="text" id="code_input" placeholder="请输入手机验证码" maxlength="6"/><input id="code_btn" class="getCode" type="button" value="发送验证码" readonly=""></div>-->
            </div>
            <div class="button">
                <input type="button" value="重置" class="reset" onclick="clearFormN()"/>
                <input type="button" value="发送" class="send" id="usrMsg_ok_btn"/>
            </div>
        </div>
        <div class="important clearfix">
            <div class="box">
                <p class="p1"><span class="red">*</span>此次重点招商省份</p>
                <p class="p2"><span>安徽、湖南、湖北</span> 空白城市/县城同步招商</p>
            </div>
            <div class="box">
                <p class="p1"><span class="red">*</span>加盟电话</p>
                <p class="p2">安徽省：<span>13923178425</span>（余先生）</p>
                <p class="p2">湖南省：<span>13450788704</span>（黄先生）</p>
                <p class="p2">湖北省：<span>18823148628</span>（方先生）</p>
            </div>
            <div class="box">
                <p class="p1"><span class="red">*</span>全国招商热线</p>
                <p class="p2"><span>13928610872</span></p>
            </div>
        </div>
    </form>
</div>
<!-- 申请加盟 -->

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
    <div class="picture" id="imgLazy">
        <div class="pic show">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/blank.gif" data-echo="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/picture_1.jpg" />
            <div class="content">
                <p class="t">盈利（速造模式）：</p>
                <p class="c">8+1的特色经营及服务优势，高度品牌差异化战略，强势打造终端实力。</p>
            </div>
        </div>
        <div class="pic">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/blank.gif" data-echo="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/picture_2.jpg"  />
            <div class="content">
                <p class="t">活动战略：</p>
                <p class="c">富有激情与活力的精英行销团队为您打造团队、打造标杆，全面提升经营、管理及销售能力。</p>
            </div>
        </div>
        <div class="pic">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/blank.gif" data-echo="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/picture_3.jpg"  />
            <div class="content">
                <p class="t">客户渠道：</p>
                <p class="c">开辟如线上电商平台等各大商机渠道，联动线下门店，打造O2O新零售营运体系，突破传统，高效引客。</p>
            </div>
        </div>
        <div class="pic">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/blank.gif" data-echo="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/picture_4.jpg" />
            <div class="content">
                <p class="t">大数据营销：</p>
                <p class="c">利用大数据分析系统，提供全国楼盘、3D云计算、换砖DIY、经营分析、用户画像等数据支持，高效谈单，运筹帷幄。</p>
            </div>
        </div>
        <div class="pic">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/blank.gif" data-echo="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/picture_5.jpg" />
            <div class="content">
                <p class="t">品牌成就：</p>
                <p class="c">近20年来共获得200多荣誉奖项及专利认证，品牌高端品质有目共睹，值得信赖。</p>
            </div>
        </div>
        <div class="pic">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/blank.gif" data-echo="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/picture_6.jpg" />
            <div class="content">
                <p class="t">县在必得<br />——经销商风采</p>
                <p class="c">安徽阜阳门店<br />湖北钟祥门店<br />安徽蚌埠门店<br />安徽定远门店<br />安徽泗县门店<br />安徽天长门店<br />……</p>
            </div>
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
        <li class="power_5 last">
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
        <li class="power_10 last">
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
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/newHead.jpg" class="smallImg"/>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/big.jpg" class="bigImg"/>
        <div class="square clearfix">
            <div><p>经验优先</p></div>
            <div><p>理念一致</p></div>
            <div><p>专业团队</p></div>
            <div><p>实力过硬</p></div>
        </div>
        <input type="button" class="goForm forbid" onclick="javascript:jump('apply')"/>
    </div>
</div>
<!-- 加盟 -->

<!-- 流程 -->
<div class="step" id="step">
    <div class="title">
        <p>加盟流程</p>
    </div>
    <div class="stepImg"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/blank.gif" data-echo="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images/step.jpg"/></div>
</div>
<!-- 流程 -->

<!-- 联系 -->
<div class="contact">
    <p class="cn">全国招商热线</p>
    <p class="tel"><span class="forbid">139-2861-0872</span></p>
    <p class="qq"><a class="forbid" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3340235094&amp;site=qq&amp;menu=yes" target="_blank"/></a></p>
</div>
<!-- 联系 -->

<!-- 导航 -->
<div class="menu">
    <span onclick="jump('apply', -50)"></span>
    <span onclick="jump('better', -50)"></span>
    <span onclick="jump('power', -50)"></span>
    <span onclick="jump('join', -50)"></span>
    <span onclick="jump('step', -50)"></span>
    <span onclick="jump(0)"></span>
</div>
<!-- 导航 -->

<!-- 活动号 -->
<input type="hidden" id="campaignName" value="20171031"/>
<input type="hidden" id="returnUrl" value="http://oceano.com.cn"/>
<!-- 活动号 -->

<!-- script -->
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/echo.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/highlight.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/jquery-stars.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/smothscrool.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/store.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/common.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/layer/layer.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/cityselect/distpicker.data.min.js"></script>
<script type="text/javascript" src="http://event.oceano.com.cn/activity/script/cityselect/distpicker.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/js/nevesytxis.js?v=20171103_1"></script>
<script type="text/javascript">
$(function() {
    $('#star').jstars({
        image_path: '<?= Yii::getAlias('@asseturl'); ?>/spread/house/czdl/images',
        style: 'yellow',
        frequency: 20
    });

    Echo.init({
        offset: 800,
        throttle: 0
    });
})
</script>
<!-- script -->
