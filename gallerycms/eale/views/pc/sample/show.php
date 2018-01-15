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
    <div class="container news newsny">
        <?= $this->render('../common/_breadnav', ['datas' => ["/{$info['sort']}/" => $info->sortInfos[$info->sort]]]); ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 article_yq">
                <div class="list-group yq-list-group1">
                    <div class="list-group">
                        <div id="modeplace">
                            <div class="row list-group-item">
                                <div class="col-sm-3 col-md-4 item-img pull-left">
                                <img alt="" src="<?= $info->resizePic('thumb', 381, 246); ?>" class="img-responsive" /></div>
                                <div class="col-sm-4 col-md-5 item-heading">
                                    <h3><?= $info['name']; ?></h3>
                                    <p><?= date('Y/m/d', $info['created_at']); ?></p>
                                    <h4><?= $info['title']; ?></h4>
                                    <div class="cont_qq">
                                        <span>我也要拍</span>
                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=295496616&site=qq&menu=yes" target="_blank" class="qq1" title="QQ咨询"></a>
                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=2393606242&site=qq&menu=yes" target="_blank" class="qq2" title="QQ咨询"></a>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-md-3 fenxiang">
                                    <?= $this->render('../../_share'); ?>
                                    <?= $this->render('../_showrelated', ['relatedInfos' => $relatedInfos]); ?>
                                </div>
                            </div>
                        </div>
                        <div class="item-con"><?= $info['content']; ?></div>
                    </div>
                    <div id="pageplace">
                        <?= $this->render('../_showrelated', ['position' => 'bottom', 'relatedInfos' => $relatedInfos]); ?>
                    </div>
                    <?= $this->render('../../_share2'); ?>
                    <?= $this->render('../../_related', ['infoType' => 'sample', 'infos' => $relatedInfos['rInfos']]); ?>
                </div>
                <div class="clearfix"></div>
                <div class="pre_next1 pre_next2" align="center">
                    <a class="r_top" href="#top">回顶部</a>
                    <a class="return" href="javascript:void()" onclick="returnbk();">返回</a></div>
            </div>
        </div>
    </div>
</div>
</div>
