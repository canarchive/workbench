<?php
use backend\assets\CharismaAsset;
use backend\assets\Ltie9Asset;

CharismaAsset::register($this);
Ltie9Asset::register($this);

$this->params['menuInfos'] = $this->context->menuInfos;
$this->params['menus'] = $this->context->menuInfos['menus'];
$this->params['appMenus'] = $this->context->menuInfos['appMenus'];
$this->params['currentMenu'] = $this->context->menuInfos['currentMenu'];
$this->params['parentMenu'] = $this->context->menuInfos['parentMenu'];
$this->params['identityInfo'] = $this->context->identityInfo;

$bodyClass = ($this->params['identityInfo']['name'] != 'wangcanliang') ? 'ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false"' : '';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<?= $this->render('_elem-header'); ?>
<?php echo $this->render('_elem-style'); ?>
<body <?= $bodyClass; ?>>
<?php $this->beginBody() ?>
<?php echo $this->render('_elem-topbar'); ?>
<div class="ch-container">
    <div class="row">
        <?php echo $this->render('_elem-left'); ?>
        <div id="content" class="col-lg-10 col-sm-10">
            <?= $this->render('_elem-breadnav'); ?>
            <?= $content ?>
        </div>
    </div>
    <hr>
    <?php echo $this->render('_elem-modal'); ?>
    <?php //echo $this->render('footer'); ?>
</div>
<?php $this->endBody() ?>
<?= $this->render('_elem-js'); ?>
</body>
</html>
<?php $this->endPage() ?>
