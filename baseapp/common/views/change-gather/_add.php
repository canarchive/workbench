<?php
use yii\helpers\Html;

$model = $info['modelNew'];
$idStr = isset($info['id']) ? $info['id'] : '';
$displayStr = isset($info['defaultShow']) ? '' : 'style="display: none;"';
?>
<div class="box-content" <?= $idStr; ?> <?= $displayStr; ?> >
    <?php foreach ($info['elems'] as $elems) { ?>
    <table class="table table-striped table-bordered responsive">
        <thead><tr>
            <?php foreach ($elems as $field => $elem) { echo '<th>' . $model->getAttributeLabel($field) . '</th>'; } ?>
        </tr></thead>
        <tbody><tr>
            <?php foreach ($elems as $field => $elem) { echo $this->getElemView($model, $field, $elem, 'new'); } ?>
        </tr></tbody>
    </table>
    <?php } ?>
    <?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => $info['addFunc']]) ?>
</div>
