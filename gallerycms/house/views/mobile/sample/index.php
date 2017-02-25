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
<!-- 行业站品牌 start -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-pic/_content'); ?>
<!-- 公共底部 start -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer-index'); ?>
<!-- 底部通栏 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer-common'); ?>
<!-- 公共短信验证 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer-bottom'); ?>
