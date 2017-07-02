<?php

$this->params['menuInfos'] = $this->context->menuInfos;
$this->params['menus'] = $this->context->menuInfos['menus'];
$this->params['appMenus'] = $this->context->menuInfos['appMenus'];
$this->params['currentMenu'] = $this->context->menuInfos['currentMenu'];
$this->params['parentMenu'] = $this->context->menuInfos['parentMenu'];
$this->params['identityInfo'] = Yii::$app->params['managerInfo'];

$this->params['bodyClass'] = ($this->params['identityInfo']['name'] != 'wangcanliang') ? 'ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false"' : '';
?>
<?php $this->beginContent('@backend/views/base/main-base.php'); ?>
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
<?php $this->endContent(); ?>
<?= $this->render('_elem-js'); ?>
