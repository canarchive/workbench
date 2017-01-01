<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'swiper.min', 'common-mobile', 'style-m', 'submit',
];
$this->params['jsFiles'] = [
	'jquery-1.8.3.min', 'swiper.min', 'public-m', 'common-m', 'createCity', 'position-m', 'city-select', 'count',
];
//$this->context->pcMappingUrl = '';
?>
<section class="content">
    <div class="top-banner">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/mobile-banner11.jpg" alt=""></div>
    <div class="vone-range m-part vone-part google-ggc">
        <h2>SEO整体解决方案</h2>
        <div class="m-con">
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>搜索引擎
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
                <div class="tg-item-det">
                    <div class="tg-item-img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/google-ggc-img1.jpg" alt=""></div>
                    <h4>Baidu最大的中文检索引擎</h4>
                    <p>移动搜索绝对的霸主，全球最大的中文搜索引擎</p>
                    <h4>sogou借助于输入法成为发展最快的搜索引擎</h4>
                    <p>借助于搜狗输入法，抢占用户市场</p>
                </div>
            </div>
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>SEO顾问优势
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
                <div class="tg-item-det">
                    <div class="tg-item-img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/google-ggc-img4.jpg" alt=""></div>
                    <h4>经验丰富</h4>
                    <p><?= Yii::$app->params['siteNameBase']; ?>SEO总监亲自操刀，8年经验，值得信赖！</p>
                    <h4>保证效果</h4>
                    <p>流量无明显提升，官网保证全额退款</p>
                </div>
            </div>
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>SEO顾问流程
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
                <div class="tg-item-det">
                    <div class="tg-item-img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/google-ggc-img5.jpg" alt=""></div>
                    <h4>SEO具体服务流程</h4>
                    <p>双方沟通---》确认受理---》报价确认---》签订合同---》收款确认---》顾问开始</p>
                </div>
            </div>
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>Seo搜索引擎优化
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
            </div>
            <div class="range-main">
                <ul class='clearfix'>
                    <li class='bdb bdr'>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/vone-range-img1.png" alt=""></div>
                        <div class="range-txt">
                            <h3>强化品牌形象</h3>
                            <p>搜索获得正确答案; 确定官方唯一地位; 抑制负面声音</p>
                        </div>
                    </li>
                    <li class='bdb'>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/vone-range-img2.png" alt=""></div>
                        <div class="range-txt">
                            <h3>提高用户体验</h3>
                            <p>提供用户所需内容，增强满意度;及时更新和丰富内容，提高用户回访率和粘稠度</p>
                        </div>
                    </li>
                    <li class='bdr'>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/vone-range-img3.png" alt=""></div>
                        <div class="range-txt">
                            <h3>优化流量</h3>
                            <p>内容与搜索词相关，有效传递信息提高关键词排名和网站流量；覆盖长尾词</p>
                        </div>
                    </li>
                    <li>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/vone-range-img4.png" alt=""></div>
                        <div class="range-txt">
                            <h3>更多转化</h3>
                            <p>流量提高，相对的转化数提高;内容精准，转化提高；活动或礼品促进转化</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="center-rhomh"></div>
        </div>
    </div>
    <?= $this->render('../common/_product'); ?>
    <?= $this->render('../common/_ask_inner'); ?>
</section>
