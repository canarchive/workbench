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
            <div class="to8to_culture about_box">
                <div class="about_center_title">
                    <h5 class="noBold">核心价值观<span>Core Values</span></h5>
                </div>
                <ul class="core_list">
                    <li class="one_core">
                        <div class="core_text">
                            <p><strong>客户第一：</strong>将客户利益置于战略核心，推动行业阳光、透明</p>
                        </div>
                    </li>
                    <li class="two_core">
                        <div class="core_text more_text">
                            <p><strong>简单可信：</strong>简单相处，直面地提出自己的观点，欣喜坦诚的看待任何意见</p>
                        </div>
                    </li>
                    <li class="three_core">
                        <div class="core_text">
                            <p><strong>激情进取：</strong>执着投入，永不言败</p>
                        </div>
                    </li>
                    <li class="four_core">
                        <div class="core_text">
                            <p><strong>主动协作：</strong>共享共担，平凡人做非凡事</p>
                        </div>
                    </li>
                    <li class="five_core">
                        <div class="core_text">
                            <p><strong>快速有效：</strong>拥抱变化，动如脱兔，突破性解决问题</p>
                        </div>
                    </li>
                </ul>
                <div class="about_center_title">
                    <h5 class="noBold">土巴兔的口号<span>Our Slogan</span></h5>
                </div>
                <div class="slogan_title"></div>
                <ul class="mission_vision">
                    <li class="fl">
                        <i><img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/f7fe4-5302.jpg" alt="土巴兔的使命" /></i>
                        <span>土巴兔的使命</span>
                        <p>让天下没有烦心的装修</p>
                    </li>
                    <li class="fr">
                        <i><img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/d7a70-1679.jpg" alt="土巴兔的愿景" /></i>
                        <span>土巴兔的愿景</span>
                        <p>成为全球家居装修领域的领导者</p>
                    </li>
                </ul>
                <div class="to8to_creed">
                    <span class="to8to_creed_pic">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/04d24-4968.jpg" alt="土巴兔信条" />
                    </span>
                    <div class="to8to_creed_text">
                        <h5>土巴兔的信条</h5>
                        <strong>第一信条：</strong>
                        <p>We are Tubatu</p>
                        <strong>机会信条：</strong>
                        <p>存在的问题就是机会</p>
                        <strong>牛人信条：</strong>
                        <p>不怕别人比我们牛，就怕牛人比我们更努力</p>
                        <strong>相处信条：</strong>
                        <p>学习比我强的人，帮助没我强的人</p>
                        <strong>用人信条：</strong>
                        <p>优秀人才最优惠，平庸之人最昂贵</p>
                        <strong>管理信条：</strong>
                        <p>对下支援，对上支持</p>
                        <strong>营销信条：</strong>
                        <p>不是单纯为了利益营销，而是为真心帮助他人</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
