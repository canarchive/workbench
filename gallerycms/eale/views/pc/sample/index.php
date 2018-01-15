<?php
use yii\helpers\Url;
use gallerycms\components\LinkPager;

$this->params['cssFiles'] = [
    'bootstrap', 'yq_docs',
];
$this->params['jsFiles'] = [
    'jquery', 'bootstrap', 'unveil', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="container">
    <?= $this->render('../common/_breadnav', ['datas' => ["/{$sort}/" => $sortName]]); ?>
</div>
<div class="wrap">
    <div class="container works works-nobg">
        <div class="row">
            <?php if (in_array($sort, ['commercial', 'fashion', 'star', 'people', 'wedding'])) { ?>
            <?= $this->render('../../_tag', ['cSort' => $sort, 'cTag' => $tag]); ?>
            <?php } ?>
            <div class="list-group">
                <?php foreach ($infos as $info) { ?>
                <div class="col-xs-6 col-md-4 col-nopadding">
                    <div class="works-con">
                        <a href="<?= "/sample/{$info['id']}.html"; ?>">
                            <img src="<?= $info->resizePic('thumb', 383, 244); ?>" alt="<?= $info['name']; ?>" class="lazy img-responsive" />
                            <div class="title">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/ico08.png" /><?= $info['name']; ?>
                                <span class="glyphicon glyphicon-play pull-right"></span><br />
                                <span class="subtitle"><?= $info['title']; ?></span></div>
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
        <div class="clearfix"></div>
    </div>
</div>
