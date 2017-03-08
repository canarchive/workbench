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
<p>由北京维纳亚科技有限公司斥巨资打造的兔班长装修网（<a href="/" title="<?= Yii::$app->params['siteNameBase']; ?>">www.tubanzhang.com</a>)是中国最具权威的装修建材行业平台，目前已在全国近百个大中城市开设分站，在超过110个一二线设立分支机构，入驻装饰企业超过10万家，帮助逾十万企业成功转型电子商务。</p>
<p>从2016年成立至今，兔班长网建立了完善的装饰企业品牌推广、形象维护体系，致力于扩大装饰企业在互联网的影响力，为企业带来高速的来自于互联网的产值增长，进而推动企业整体发展，有效地结合线上线下的影响力，最终为企业成功融入互联网时代的浪潮做出最强力的支持。</p>
<p>做中国最专业的家装门户，需要的是时间，对于兔班长人来说，敬业，职业，专业，用心，不断地提升自我，为客户提供优质的服务，帮助客户选择最优的装修公司，解决客户在家装中遇到的难题，是其发展过程中永远的话题。</p>
<p>“创新、速度、合作、共赢”是兔班长人的宗旨，兔班长正在不断努力突破，打造一个互赢的家装平台。</p>
                        </div>
                    </li>
                </ul>
                <?php //$this->render('_service'); ?>
                <?php //echo $this->render('_point'); ?>
            </div>
        </div>
    </div>
</div>
