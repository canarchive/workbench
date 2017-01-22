<?php

use yii\bootstrap\NavBar;
use backend\assets\CharismaAsset;
use backend\assets\Ltie9Asset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Json;

CharismaAsset::register($this);
Ltie9Asset::register($this);

$controller = $this->context;
$menus = [];
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <title><?= Html::encode($this->title) ?></title>

    <link id="bs-css" href="<?= Yii::getAlias('@asseturl/backend'); ?>/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <script src="<?= Yii::getAlias('@asseturl'); ?>/bower_components/jquery/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/backend'); ?>/img/favicon-fb.ico">

    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php echo $this->render('_topbar', ['menus' => $menus]); ?>
<div class="ch-container">
    <div class="row">
        <?php echo $this->render('_left-menu', ['menus' => $menus]); ?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php if ($controller->showSubnav) { ?>
            <div>
                <ul class="breadcrumb">
            <?php
            $subnavString = '';
            /*foreach ($menuInfos['appMenus'] as $appMenu) {
                if ($appMenu['display'] > 3) continue;
                $styleStr = ($menuInfos['currentMenu']['method'] == $appMenu['method']) ? 'style="color:#009900;"' : '';
                $urlStr = ($menuInfos['currentMenu']['method'] == $appMenu['method']) ? 'javascript:void(0);' : $appMenu['url'];
                $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$appMenu['name']}</a></li>";
            }*/
            echo $subnavString;
            ?>
                </ul>
            </div>
            <?php } ?>
            <?= $content ?>
            <?php //echo $this->render('content'); ?>
            <!-- content ends -->
        </div><!--/#content.col-md-0-->
    </div><!--/fluid-row-->

    <hr>
    <?php echo $this->render('_modal'); ?>
    <?php //echo $this->render('footer'); ?>

</div><!--/.fluid-container-->

<?php $this->endBody() ?>

<?php if (isset($this->params['haveTreeList'])) { ?>
<script src="http://static.acanstudio.com/backend/js/jquery.treetable.js"></script>
<script src="http://static.acanstudio.com/backend/js/jquery.treeview.js"></script>
<?php } ?>
<script language="javascript">
$(document).ready(function(){
  var current_theme = $.cookie('current_theme')==null ? 'cerulean' :$.cookie('current_theme');
  switch_theme(current_theme);

  $('#themes a[data-value="'+current_theme+'"]').find('i').addClass('icon-ok');

  $('#themes a').click(function(e){
    e.preventDefault();
    current_theme=$(this).attr('data-value');
    $.cookie('current_theme',current_theme,{expires:365});
    switch_theme(current_theme);
    $('#themes i').removeClass('icon-ok');
    $(this).find('i').addClass('icon-ok');
  });

  function switch_theme(theme_name)
  {
    $('#bs-css').attr('href','<?= Yii::getAlias('@asseturl'); ?>/backend/css/bootstrap-'+theme_name+'.min.css');
  }
});

</script>
</body>
</html>
<?php $this->endPage() ?>
