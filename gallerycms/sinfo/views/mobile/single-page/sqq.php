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
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/banner/sqq.jpg" alt="QQ号抓取"></div>
    <h1>QQ号抓取</h1>
    <div class="vone-range m-part vone-part google-ggc">
        <div class="m-con">
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>QQ号抓取
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
                <div class="tg-item-det">
                    <div class="tg-item-img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/google-ggc-img1.jpg" alt="QQ号抓取"></div>
                    <h4>免费体验　只需三步</h4>
                    <p>注册帐户-部署代码 -获取访客</p>
                    <h4>为营销而生、马上试试</h4>
                    <p>已有超过680万多家名客户通过“<?= $this->context->currentSiteInfo['name']; ?>”实现业绩增长!</p>
                </div>
            </div>
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>常见问题
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
                <div class="tg-item-det">
                    <div class="tg-item-img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/google-ggc-img4.jpg" alt="常见问题"></div>
                    <h4>抓取率如何？</h4>
                    <p>QQ号码的抓取率在20%到40%左右，不同漏洞的接口抓取率不一样。使用过程抓取率会有一定的波动，但不管怎么样，号码都能抓取，只是概率大小而已，这个是行业现状，介意的话，<b>建议您免费注册自己测试一下</b>，看看效果。</p>
                    <h4>注意事项</h4>
                    <p>注册后，我们一个有三个套餐，<b>基础套餐、专业套餐、旗舰套餐</b>，其中基础套餐只能统计QQ号码，<b>只想抓取网站QQ号码的客户请选择此套餐</b>。专业套餐、旗舰套餐<b>可以同时抓取QQ号码和手机号码</b>，想要手机号码和QQ号码的客户请选择这两种套餐，专业套餐、旗舰套餐</p>
                </div>
            </div>
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>安装建议
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
                <div class="tg-item-det">
                    <div class="tg-item-img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/google-ggc-img5.jpg" alt="安装建议"></div>
                    <h4>如何提升抓取率</h4>
                    <p>安装时，建议代码添加在网站所有页面头部&lt;/head&gt;标签前面，这样更利于代码加载，有助于号码抓取。特别是移动站，一定要加在页面的头部。另外，我们服务器带宽充足，同时做过CDN加速处理，不会影响网站速度，请放心使用！</p>
                </div>
            </div>
            <div class="tg-item">
                <div class="tg-item-t">
                    <span class='square-s'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-l'><em></em></span>选择<?= $this->context->currentSiteInfo['name']; ?>的四大理由
                    <span class='square-l'><em></em></span>
                    <span class='square-m'><em></em></span>
                    <span class='square-s'><em></em></span>
                </div>
            </div>
            <div class="range-main">
                <ul class='clearfix'>
                    <li class='bdb bdr'>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/vone-range-img1.png" alt="精确营销"></div>
                        <div class="range-txt">
                            <h3>精准营销</h3>
                            <p>轻松获取访客手机号码及访客来源，从而掌握客户需求，实现精准营销。</p>
                        </div>
                    </li>
                    <li class='bdb'>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/vone-range-img2.png" alt="客户无限"></div>
                        <div class="range-txt">
                            <h3>客户无限</h3>
                            <p>市场广泛，客户无限，号码抓取，三网通关，获取无碍，成本低廉，高性价比。</p>
                        </div>
                    </li>
                    <li class='bdr'>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/vone-range-img3.png" alt="管理系统"></div>
                        <div class="range-txt">
                            <h3>管理系统</h3>
                            <p>客户管理系统、营销跟进系统、统计数据系统、邮件群发系统、短信群发系统等</p>
                        </div>
                    </li>
                    <li>
                        <div class="range-img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/vone-range-img4.png" alt="营销闭环"></div>
                        <div class="range-txt">
                            <h3>营销闭环</h3>
                            <p>打造营销闭环 依托于强大CRM管理系统，对抓取的数据设置自动短信与邮件推送服务</p>
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
