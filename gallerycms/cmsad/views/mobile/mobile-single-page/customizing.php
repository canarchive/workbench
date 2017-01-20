<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'swiper.min', 'common-mobile', 'style-m', 'submit',
];
$this->params['jsFiles'] = [
	'jquery-1.8.3.min', 'swiper.min', 'public-m', 'common-m', 'createCity', 'position-m', 'city-select', 'count',
];
//$this->context->pcMappingUrl = '';
$ourDatas = [
    'SEM托管', 'SEO优化', 'SMO优化', '网站建设', '服务器托管', '渠道开户',
    '微信开发', '微博营销', '微信营销', '自媒体营销', '新闻营销',
    '危机公关', '企业内训', 'DSP', '智慧推', '广点通', '信息流广告', '全网营销',
];
$colors = ['blue', 'purple', 'green'];

?>
<section class="content newz-content">
    <div class="top-banner">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/mobile-banner21.png" alt=""></div>
    <div class="vone-range m-part vone-part zshop-part">
        <h2>定制化功能全面<em>18大功能任意选</em></h2>
        <div class="m-con">
            <div class="newz-func-main">
                <ul class='clearfix'>
                    <?php $j = $i = 0; foreach ($ourDatas as $ourData) { ?>
                    <?php if (($i % 3) == 0) { ?><li class='icon-<?= $colors[($j % 3)]; ?>'><div class="li-inner"><?php $j++;} ?>
                        <div class="new-func-list"><em></em><?= $ourData; ?></div>
                    <?php if (($i % 3) == 2) { ?></div></li><?php } ?>
                    <?php $i++; } ?>
                </ul>
            </div>
            <div class="center-rhomh"></div>
        </div>
    </div>
    <div class="conmmon-part vone-part newz-ld">
        <h2>六步营销　赚取大把订单</h2>
        <div class="m-con">
            <div class="newz-ld-img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-img1.png" alt="六步营销　赚取大把订单"></div>
            <ul class='clearfix'>
                <li>
                    <div class="newz-ld-t">
                        <em>1</em>主动营销 请来客户</div>
                    <div class="newz-ld-d">邮件、短信、SEO免费搜索引擎优化</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>2</em>客户上门 热情接待</div>
                    <div class="newz-ld-d">多种获客工具，全方位服务每一个客户</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>3</em>产品展厅 留住客户</div>
                    <div class="newz-ld-d">优化着陆页提升用户体验</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>4</em>销售管理 订单不丢</div>
                    <div class="newz-ld-d">客户管理系统帮企业开展“数据库营销”</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>5</em>流量分析 赢在决策</div>
                    <div class="newz-ld-d">数据分析支撑市场营销策略，创造最大生意价值</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>6</em>定期总结，赢在未来</div>
                    <div class="newz-ld-d">定期的全流程分析总结，提升每个节点的效率</div></li>
            </ul>
        </div>
    </div>
    <div class="m-part vone-part newz-five">
        <h2>服务与保障<em>80%的客户来源于口碑</em></h2>
        <div class="m-con">
            <ul class="good-list">
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist1.png" alt="6大服务实力，提升企业销售业绩"></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>1.6大服务实力，提升企业销售业绩</h3>
                        <p>专业的SEM服务团队，依赖顶尖的产品技术团队，为多行业多领域的客户提供全方位的账户优化服务。</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist2.png" alt="顶尖的技术团队"></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>2.顶尖的技术团队</h3>
                        <p>有专门的BI团队研究，提供丰富的账户优化策略，方案。有业内最顶尖的产品研发团队，致力于数字广告系统研发、消费者行为分析等给优化团队提供强有力的技术支持。</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist3.png" alt="丰富的行业经验"></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>3.丰富的行业经验</h3>
                        <p>多年深耕教育、电商零售、金融、旅游等行业；服务智联招聘、搜狐焦点、苏宁易购等几千万级的大客户，为客户提供精细化执行方案</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist4.png" alt="24小时客服热线"></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>4.24小时客服热线</h3>
                        <p>为企业提供全年365天的 7x24小时“一站式”服务</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist5.png" alt="客户培训服务"></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>5.客户培训服务</h3>
                        <p>为企业客户定制专属SEM和SEO培训课程，提升企业销售业绩，降低企业获客成本</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <?= $this->render('../common/_product'); ?>
    <?= $this->render('../common/_ask_inner'); ?>
</section>
