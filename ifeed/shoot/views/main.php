<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@assetself') . '/favicon.ico';
$this->params['statCodeStr'] = $this->render('_stat'); 
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $content; ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = Yii::$app->params['statUrl']; echo $statUrl; ?>
</div>
<?php $this->endContent(); ?>
