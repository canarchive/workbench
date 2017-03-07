<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-pic/_js-header');
?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_header', ['showHeaderBase' => true]); ?>
<?php echo $this->render('_content', ['infos' => $commentInfos['infos'], 'pages' => $commentInfos['pages']]); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_check'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_pop-show'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_pop-new'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_guestbook'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_merchant'); ?>
<?php //echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_related'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_footer'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_valid-common'); ?>
