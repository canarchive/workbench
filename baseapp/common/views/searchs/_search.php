<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$elemLists = isset($elems['list']) ? (array) $elems['list'] : [];
$elemForms = isset($elems['form']) ? (array) $elems['form'] : [];

$menuInfos = $this->context->menuInfos;
$currentUrl = $menuInfos['currentMenu']['url'];
$currentUrl = substr($currentUrl, 0, strpos($currentUrl, '?'));
?>
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
    <?php //foreach ($elemLists as $elem) { echo $this->render('_elem-list', ['elem' => $elem, 'model' => $model]); } ?> 
    <?php foreach ($elemLists as $elem) { echo $this->render('_elem-checkbox', ['elem' => $elem, 'model' => $model]); } ?> 
    <div class="box-inner">
        <div class="box-create">
            <?php $i = 1; $num = count($elemForms); foreach ($elemForms as $elemSubs) { ?>
            <div class="form-group form-group-sm">
                <?php foreach ($elemSubs as $elem) { $eView = "_elem-{$elem['type']}"; echo $this->render($eView, ['elem' => $elem, 'model' => $model]); } ?>
                <?php if ($i == $num) { ?>
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                </div>
                <?php } ?>
            </div>
            <?php $i++; } ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
</div>
