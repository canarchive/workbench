<?php
use yii\helpers\Url;

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
<div class="wrap">
    <div class="container about-index serve">
        <?= $this->render('../common/_breadnav', ['datas' => ['/commercial/' => '广告摄影']]); ?>
        <?= $this->render('../../_fivepicture'); ?>
        <?php foreach ($infos as $sort => $subInfos) { ?>
        <div class="row title"><h3><?= str_replace(['摄影机构-', '美学馆-'], '', $model->sortInfos[$sort]); ?></h3></div>
        <div class="row">
            <div class="list-group">
                <?php foreach ($subInfos as $info) { ?>
                <div class="col-xs-6 col-md-6 col-nopadding">
                    <div class="service">
                        <a href="<?= "/service/{$info['id']}.html"; ?>">
                            <div class="title"><?= $info['name']; ?></div>
                            <img src="<?= $info->resizePic('thumb', 574, 329); ?>" alt="<?= $info['name']; ?>" class="img-responsive" />
                            <p class="time">
                                <span class="glyphicon glyphicon-play pull-right"></span>
                            </p>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
