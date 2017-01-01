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
            <h2>我们是谁？</h2>
            <p>北京维纳亚科技有限公司</p>
        </div>
        <div class="zyy_it2_left">
            <div class="zyy_text">
                <!--<span class="zyy_text_title">京维来亚科技有限公司</span>-->
                <h3>北京维纳亚科技有限公司</h3>
                <div class="txt">
                    <p>北京维纳亚科技有限公司是一家旨在通过整合各类网络营销资源，帮助中小企业全面提高营销水平和网络营销效果的高科技创业型企业。</p>
                </div>
            </div>
            <div class="zyy_text">
                <!--<span class="zyy_text_title">国内28个地区部署服务器</span>-->
                <h3>我们的团队</h3>
                <div class="txt">
                    <p>公司创始团队由来自百度、及从事互联网行业推广运营的各界精英等高管组成，在互联网推广、企业精准效果营销与软件开发方面有丰富的经验和雄厚的实力。</p>
                </div>
            </div>
        </div>
        <div class="zyy_it2_right">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic1.png" alt="全球云游 畅通无忧的企业邮局" /></div>
    </div>
</div>
<div class="zyy_item3">
    <div class="zyy_warp">
        <p class="bg">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic2_bg.png" alt="云邮 . 多终端使用" /></p>
        <div class="zyy_title">
            <h2></h2>
            <p></p>
        </div>
        <div class="zyy_it3_left">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic2.png" alt="Z云邮 . 多终端使用" /></div>
        <div class="zyy_it3_right">
            <div class="zyy_text">
                <span class="zyy_text_title">我们能做什么？</span>
                <div class="txt">
                    <p>整合流量营销+推广效果营销根据企业的实际情况，充分整合产品与搜索引擎（SEM+SEO）、网络媒体、社交网络等信息流手段加营销工具。为企业提供全方位的流量整合营销策略，从而提升企业品牌形象与企业价值增值。</p>
                </div>
            </div>
            <div class="zyy_text">
                <span class="zyy_text_title">为什么选择维纳亚？</span>
                <div class="txt">
                    <p>自主开发的SEM监控系统与卡位算法及SEO精准搜索规则，可以高精度锁定受众人群，让SEM、SEO引流更精准更智能，同时投入成本大大降低，ROI提升３０％以上。</p>
                </div>
            </div>
            <div class="zyy_text">
                <span class="zyy_text_title">我们的定位</span>
                <div class="txt">
                    <p>维来亚定位原则每年同行服务的客户控制在５家左右！我们只服务有口碑与有潜力成为行业领袖的客户！</p>
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
            <h2>我们的优势</h2>
            <p>经验+系统完美结合</p>
        </div>
        <div class="zyy_it4_left zyy_text_box2">
            <div class="zyy_text">
                <h3>SEM托管</h3>
                <div class="txt">
                    <p>账户托管优化一步到位，自主开发程序监控，数据一目了然</p>
                </div>
                <h3>SEO优化</h3>
                <div class="txt">
                    <p>快速高效精准，提升自然流量、宣传企业品牌，将流量转换成实际订单</p>
                </div>
            </div>
        </div>
        <div class="zyy_it4_right">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic3.png" alt="Z云邮 . 高效省心 " /></div>
    </div>
    <div class="zyy_warp zyy_warp2">
        <div class="zyy_it4_left">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zmail-pic4.png" alt="Z云邮 . 高效省心 " /></div>
        <div class="zyy_it4_right zyy_text_box2">
            <div class="zyy_text">
                <h3>帮客户节省成本是我们最大的责任</h3>
                <div class="txt">
                    <p>我们只为最有价值的客户及团队执行力强的客户合作，以实现我们服务的最大价值。我们拒绝把时间浪费在谈判上，团队的核心是把99%的精力用来服务合作的客户。收费模式基础服务费 + 提点（可根据实际情况，可做合理调整），详情可以联系客服。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Z云邮部分四 end-->
<?= $this->render('../common/_ask'); ?>
