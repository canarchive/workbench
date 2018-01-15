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
<div class="wrap">
    <div class="container news newslist newsny">
        <?= $this->render('../common/_breadnav', ['datas' => ['/info/' => '新闻']]); ?>
        <?= $this->render('../../_fivepicture'); ?>
        <div class="row">
            <div class="list-group">
                <?php foreach ($infos as $info) { ?>
                <div class="col-xs-6 col-md-6 col-nopadding">
                    <div class="news-con">
                        <a href="<?= "/info/{$info['id']}.html"; ?>">
                            <div class="title">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/ico08b.png" />
                                <h3><?= $info['name']; ?><p class="subtitle"><?= $info['title']; ?></p></h3>
                            </div>
                            <img src="<?= $info->resizePic('thumb', 576, 329); ?>" alt="<?= $info['name']; ?>" class="img-responsive" style="width:576px; height:329px;"/>
                            <p class="time"><?= date('Y-m-d', $info['created_at']); ?>
                                <span class="glyphicon glyphicon-play pull-right"></span></p>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div align="center">
                <ul class="pagination"><?= LinkPager::widget(['pagination' => $pages]); ?></ul>
            </div>
        </div>
        <!-- 留言板-->
        <?= $this->render('../common/_guestbook'); ?>
    </div>
</div>
