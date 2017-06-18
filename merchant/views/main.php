<?php
$this->params['jsGlobalStr'] = "window.MERCHANT_URL = '" .  Yii::getAlias('@web') . "';";

?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
