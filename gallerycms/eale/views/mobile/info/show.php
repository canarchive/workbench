<?php
use yii\helpers\Url;

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
<div class="workny newsny">
    <div class="container">
        <?= $this->render('../common/_breadnav'); ?>
        <div class="row con">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="list-group yq-list-group1">
                    <div class="list-group">
                        <?= $this->render('../_showbase', ['info' => $info, 'relatedInfos' => $relatedInfos]); ?>
                        <?= $this->render('../_showrelated', ['info' => $info, 'infoType' => 'info', 'relatedInfos' => $relatedInfos]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
