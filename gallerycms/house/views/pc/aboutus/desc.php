<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['3cdab-6033', '355e9-6276', 'e6610-7846'];
$jsFiles = ['jquery', 'common'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);
?>
<div class="w970">
    <div class="grid">
        <?= $this->render('_nav', ['navs' => $navs, 'view' => $view]); ?>
        <div class="about_main">
            <div class="company_intro about_box">
                <div class="about_center_title">
                    <h5 class="noBold">公司简介<span>Company Profile</span></h5>
                </div>
                <ul class="c_intro_list">
                    <li>
                        <div class="c_intro_text fr">
                            <div class="c_intro_img fl">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/92b69-4332.jpg" alt="" width="262" height="184" /></div>
<p>兔班长装修网（<a href="/" title="<?= Yii::$app->params['siteNameBase']; ?>">www.tu8zhang.com</a>)是北京维纳亚科技有限公司全力打造的互联网装修建材平台。兔班长装修网认为，要深化家装行业服务品质、提升业主体验，就要解决装修业主重决策与家装企业长服务链条的矛盾，建立起公平、透明、可持续深入的综合平台，满足业主与装企的刚性需求！</p>
<p>兔班长装修网以“创新、速度、合作、共赢”为宗旨，欲打造高水平的互联网装修建材平台，计划在全国近百个大中城市开设分站，用全新的商业模式营造共赢的商业氛围！</p>
<p>做中国专业的互联网家装建材门户！是兔班长装修网的目标，我们将以专业，职业、敬业的执行标准，不断地提升自我、实现突破、为客户提供优质的服务！</p>
                        </div>
                    </li>
                </ul>
                <?php //$this->render('_service'); ?>
                <?php //echo $this->render('_point'); ?>
            </div>
        </div>
    </div>
</div>
