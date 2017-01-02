<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'common', 'public', 'style_z_email',
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = $controllerId;
$this->params['formPositionName'] = $view;
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<style>#notice{margin-left:13px; } #notice:hover{color: #ec6500;}</style>
<div class="topimg-360" style="background:url(<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmaile--banner.jpg) no-repeat top center">
    <div class="topimg-con zmail-img pop_zixun">
        <a href="javascript:void(0);" value="1">立即咨询</a></div>
</div>
<!-- Z云邮部分二 -->
<div class="zyy_item2">
    <div class="zyy_warp">
        <div class="zyy_title">
            <h2>为营销而生</h2>
            <p>一段神奇的代码、改变了世界、也改变了企业的营销模式</p>
        </div>
        <div class="zyy_it2_left">
            <div class="zyy_text">
                <h3>我们相信</h3>
                <div class="txt">
                    <p>一定有一种方法，可以让企业的推广成本降到合理的水平及至更低。一定有一种更简单的方法，可以快速提升企业的业绩。</p>
                </div>
            </div>
            <div class="zyy_text">
                <h3>我们的目标</h3>
                <div class="txt">
                    <p>不断提升产品水平,为客户带来更大价值! 倾注多年的心血研究与实践，日以继夜的研发出了“QQ云统计”，帮助我们的客户，花费更少的成本，获取更多的潜在客户，创造更好的业绩。</p>
                </div>
            </div>
        </div>
        <div class="zyy_it2_right">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic1.png" alt="" /></div>
    </div>
</div>
<div class="zyy_item3">
    <div class="zyy_warp">
        <p class="bg">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic2_bg.png" alt="" /></p>
        <div class="zyy_title">
            <h2></h2>
            <p></p>
        </div>
        <div class="zyy_it3_left">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic2.png" alt="" /></div>
        <div class="zyy_it3_right">
            <div class="zyy_text">
                <span class="zyy_text_title">软件介绍</span>
                <div class="txt">
                    <p>QQ云统计、是专门针对营销推广来获取网站访客手机号与QQ号的专业统计软件，从而来达到让营销变得更简单，截止到目前，已为客户抓取手机号码和QQ号码累计达到108亿以上</p>
                </div>
            </div>
            <div class="zyy_text">
                <span class="zyy_text_title">功能介绍</span>
                <div class="txt">
                    <p>历经6年，QQ云统计现以集成QQ抓取、手机抓取、CRM管理系统、智能QQ对话弹窗、智能主动推送、访客关键词来路分析、数据分析等功能，可对客户CRM管理系统的客户进行精准的电话、EDM、QQ和短信营销等，功能与技术国内前茅！</p>
                </div>
            </div>
            <div class="zyy_text">
                <span class="zyy_text_title">使用介绍</span>
                <div class="txt">
                    <p>免费注册后，即可获取一段简单的代码，布置到您的网站上，当访客在浏览您的网页时，就能抓取到手机号与QQ号，并能清楚的看到访客的信息，包括号码、网站标题、来源关键词、来源url、地区、ip等，可以批量通过Excel导出，和在线进行CRM管理。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Z云邮部分三 end-->
<!-- Z云邮部分四 -->
<div class="zyy_item4">
    <div class="zyy_warp zyy_warp1">
        <div class="zyy_title">
            <h2>使用QQ云统计，您能获得什么？</h2>
            <p>让营销变得更简单</p>
        </div>
        <div class="zyy_it4_left zyy_text_box2">
            <div class="zyy_text">
                <h3>网站访客抓取</h3>
                <div class="txt">
                    <p>通过对您网站访客的抓取,获得精准客户QQ号、手机号码以及客户来路、等相关数据信息。</p>
                </div>
                <h3>访客管理系统</h3>
                <div class="txt">
                    <p>建立您的客户鱼塘(CRM数据库)、广撒网、对有意向客户进行跟进、大大提升成交量、降低推广成本。</p>
                </div>
            </div>
        </div>
        <div class="zyy_it4_right">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic3.png" alt="" /></div>
    </div>
    <div class="zyy_warp zyy_warp2">
        <div class="zyy_it4_left">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic4.png" alt="" /></div>
        <div class="zyy_it4_right zyy_text_box2">
            <div class="zyy_text">
                <h3>帮客户节省成本是我们最大的责任</h3>
                <div class="txt">
                    <p>如果您使用了QQ云统计，一个月您将获得至少100*30 = 3000个精准客户的联系方式. 就算只有十分之一的客户购买了您的产品或服务,那也有超过300单的成交量. 以每单50元利润来计算,每个月QQ云统计将帮助您多赚300*50=15000元. 如果您没有使用QQ云统计,那么您将损失大量的精准客户,每一个网站访客都需要我们付出很大的成本,您想眼睁睁看着他们流失吗? 现在QQ云统计可以免费试用三天,您只需要注册帐号,获取代码并添加到您的网站就可以使用,像添加统计代码一样简单,完全免费,不收任何费用,感觉效果满意再购买,不满意直接去掉统计代码即可!让您完全无任何后顾之忧!早用早受益! </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Z云邮部分四 end-->
<?= $this->render('../common/_ask'); ?>
