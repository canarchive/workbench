<?php
use yii\helpers\Html;
?>
<label class="control-label col-md-1"><?= $elem['name']; ?></label>
<div class="col-md-2">
    <?= Html::checkboxList(
        $elem['field'],
        $elem['value'],
        $elem['infos'],
        [
            'inline' => true,
        ]
    ) ?>
</div>
