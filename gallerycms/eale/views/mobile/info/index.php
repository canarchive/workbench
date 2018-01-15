<?php
use yii\helpers\Url;
use gallerycms\components\LinkPager;

$this->params['cssFiles'] = [
    'bootstrap', 'style_m',
];
$this->params['jsFiles'] = [
    'jquery', 'unveil', 'bootstrap', 'hammer', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="news newsny">
    <div class="container">
        <?= $this->render('../common/_breadnav', ['titleDesc' => '加入右视觉']); ?>
        <?= $this->render('../../_fivepicture'); ?>
        <div class="row">
            <?php foreach ($infos as $info) { ?>
            <div class="col-xs-12 col-sm-12 col-nopadding">
                <div class="news-con">
                    <a href="<?= "/info/{$info['id']}.html"; ?>">
                        <div class="title">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/m_newslogo.png" class="pull-left" />
                            <h4><?= $info['name']; ?><p class="subtitle"><?= $info['title']; ?></p></h4>
                        </div>
                        <img src="<?= $info->resizePic('thumb', 574, 329); ?>" alt="<?= $info['name']; ?>" class="img-responsive" />
						<p class="time"><?= date('Y.m.d', $info['created_at']); ?>
                            <span class="glyphicon glyphicon-play pull-right"></span></p>
                    </a>
                </div>
            </div>
            <?php } ?>
            <div><ul class="pagination"><?= LinkPager::widget(['pagination' => $pages]); ?></ul></div>
        </div>
    </div>
</div>
