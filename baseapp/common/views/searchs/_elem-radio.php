<?php
use yii\helpers\Html;
?>
<div>
<label class="control-label col-md-1"><?= $elem['name']; ?></label>
    <ul class="breadcrumb">
    <?= Html::radioList(
        $elem['field'],
        $elem['value'],
        $elem['infos'],
        [
            'inline' => true,
        ]
    ) ?>
    </ul>
</div>
