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
<div class="work">
    <div class="container">
        <?= $this->render('../common/_breadnav'); ?>
        <div class="row">
            <div class="list-group">
                <?php foreach ($infos as $info) { ?>
                <div class="col-xs-6 col-md-4 col-nopadding">
                    <div class="works-con">
                        <a href="<?= "/sample/{$info['id']}.html"; ?>">
                            <img src="<?= $info->resizePic('thumb', 383, 244); ?>" alt="<?= $info['name']; ?>" class="lazy img-responsive"/>
                            <div class="title">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/ico08.png" /><?= $info['name']; ?>
                                <h5><?= $info['name']; ?><br><span class="subtitle"><?= $info['title']; ?></span><span class="glyphicon glyphicon-play pull-right"></span></h5>
                            </div>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="clearfix"></div>
            <div align="center">
                <ul class="pagination">
				    <?= LinkPager::widget(['pagination' => $pages]); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
