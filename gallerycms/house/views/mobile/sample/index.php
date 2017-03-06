<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['1b17c-4289', 'be233-6823', '35df6-9609', '235a4-6274'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-pic/_js-header');
?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-pic/_top-style'); ?>
<?php //echo $this->render('@gallerycms/views/layouts-m/platj/_topdown'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_header'); ?>
<?php echo $this->render('_sort', ['houseSortInfos' => $houseSortInfos, 'tagInfos' => $tagInfos, 'model' => $model]); ?>
<?php echo $this->render('_content', ['infos' => $infos, 'pages' => $pages]); ?>
<!-- 公共底部 start -->
<link type="text/css" rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/css/be233-6823.css">
<div style="height:65px;"></div>
<!-- 底部通栏 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer-common'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_pop-1'); ?>
<!-- 公共短信验证 -->
<?php //echo $this->render('@gallerycms/views/layouts-m/platj/_footer-bottom'); ?>
