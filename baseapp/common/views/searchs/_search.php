<?php
use yii\bootstrap\ActiveForm;

$model = $this->context->searchModel;
$elems = $model->searchDatas;
$elemLists = isset($elems['list']) ? (array) $elems['list'] : [];
$elemForms = isset($elems['form']) ? (array) $elems['form'] : [];
$elemLists = array_filter($elemLists);
$elemForms = array_filter($elemForms);

$menuInfos = $this->context->menuInfos;
$currentUrl = $menuInfos['currentMenu']['url'];
$currentUrl = strpos($currentUrl, '?') !== false ? substr($currentUrl, 0, strpos($currentUrl, '?')) : $currentUrl;
?>
<?php if (!empty($elemLists) || !empty($elemForms)) { ?>
<div class="row">
<?php
$form = ActiveForm::begin([
    'id' => 'list-form',
    'method' => 'get',
    'action' => $currentUrl,
    'options' => ['class' => 'form-horizontal'],
]);
?>
<div class="box col-md-12">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-edit"></i>检索条件</h2>
    </div>
    <?php foreach ($elemLists as $elem) { echo $this->render("_elem-{$elem['type']}", ['elem' => $elem, 'model' => $model]); } ?> 
    <div class="box-inner">
        <div class="box-create">
            <?php if (empty($elemForms)) { echo $this->render('_elem-button', ['haveWrap' => true]); } else { ?>
            <?php $i = 1; $num = count($elemForms); foreach ($elemForms as $elemSubs) { ?>
            <div class="form-group form-group-sm">
                <?php foreach ($elemSubs as $elem) { $eView = "_elem-{$elem['type']}"; echo $this->render($eView, ['elem' => $elem, 'model' => $model]); } ?>
                <?php if ($i == $num && $elem['type'] != 'button') { echo $this->render('_elem-button'); } ?>
            </div>
            <?php $i++; } ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
</div>
<?php } ?>
