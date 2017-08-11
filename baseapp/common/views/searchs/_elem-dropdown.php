<?php
use yii\helpers\Html;
$optionDefault = [
    'prompt' => '全部',
    'class' => 'form-control',
];
$option = isset($elem['option']) ? array_merge($optionDefault, $elem['option']) : $optionDefault;
?>
<label class="control-label col-md-1"><?= $elem['name']; ?></label>
<div class="col-md-2">
    <?= Html::dropDownList(
        $elem['field'],
        $elem['value'],
        $elem['infos'],
        $this->getOptionInfo($elem, ['prompt' => '全部', 'class' => 'form-control'])
    ) ?>
</div>
