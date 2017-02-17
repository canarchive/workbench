<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-pic/_js-header');
?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_topdown'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_header'); ?>
<?php echo $this->render('_content-show'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_comment'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_guestbook'); ?>
<!-- 相关信息项目 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_related'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_footer'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_check'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_pop-show'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_pop-new'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_guestbook'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_valid-common'); ?>
