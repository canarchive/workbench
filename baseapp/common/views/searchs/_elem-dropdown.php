<?php
use yii\helpers\Html;
print_r($elem);exit();
?>
<label class="control-label col-md-1"><?= $elem['name']; ?></label>
<div class="col-md-2">
    <?= Html::dropDownList(
        $elem['field'],
        $elem['value'],
        $elem['infos'],
        [
            'prompt' => '全部',
            'class' => 'form-control',
        ]
    ) ?>
</div>
