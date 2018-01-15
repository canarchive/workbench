<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$elemLists = (array) $elems['list'];
$elemForms = (array) $elems['form'];
?>
<div class="row">
<?php
$form = ActiveForm::begin([
    'id' => 'list-form',
    'method' => 'get',
    //'action' => Url::toRoute('channel-log-success/listinfo'),
    'options' => ['class' => 'form-horizontal'],
]);
?>
<div class="box col-md-12">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i>检索条件</h2>
        </div>
    <?php foreach ($elemLists as $elem) { echo $this->render('_elem-list', ['elem' => $elem, 'model' => $model]); } ?> 
    <div class="box-inner">
        <div class="box-create">
            <?php foreach ($elemForms as $elemSubs) { ?>
            <div class="form-group form-group-sm">
                <?php foreach ($elemSubs as $elem) { $eView = "_elem-{$elem['type']}"; echo $this->render($eView, ['elem' => $elem, 'model' => $model]); } ?>
            </div>
            <?php } ?>
            <div class="form-group form-group-sm">
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
</div>
