<?php
use backend\assets\CharismaAsset;
use backend\assets\Ltie9Asset;

CharismaAsset::register($this);
Ltie9Asset::register($this);
isset($this->params['bodyClass']) || $this->params['bodyClass'] = '';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<?= $this->render('_elem-header'); ?>
<?php echo $this->render('_elem-style'); ?>
<body <?= $this->params['bodyClass']; ?>>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
