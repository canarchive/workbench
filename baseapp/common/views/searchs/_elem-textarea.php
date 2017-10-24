<?php
use yii\helpers\Html;
?>
<label class="control-label col-md-1"><?= $elem['name']; ?></label>
<div class="col-md-1" style="padding-left:5px;padding-right:5px">
    <input class="form-control" type="text" name="<?= $elem['field']; ?>">
    <?= $form->field($model, 'content')->textarea(['rows' => 3]) ?>
    <?= Html::textarea(
        $elem['field'],
        $elem['value'],
        $this->getOptionInfo($elem, ['rows' => 3])
    ) ?>
</div>
