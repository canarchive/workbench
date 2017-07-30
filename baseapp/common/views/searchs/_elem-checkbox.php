<?php
use yii\helpers\Html;
?>
<div>
<label class="control-label col-md-1"><?= $elem['name']; ?></label>
    <ul class="breadcrumb">
    <?= Html::checkboxList(
        $elem['field'],
        null,
        $elem['infos'],
        [
            'inline' => true,
        ]
    ) ?>
    </ul>
</div>
