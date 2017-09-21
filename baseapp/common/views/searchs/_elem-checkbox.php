<?php
use yii\helpers\Html;
?>
<div id="<?= $elem['field'] . '_wrap'; ?>" class="<?php if (isset($elem['wrapClass'])) { echo $elem['wrapClass']; } ?>">
    <label class="control-label col-md-1"><?= $elem['name']; ?></label>
    <ul class="breadcrumb">
    <?= Html::checkboxList(
        $elem['field'],
        $elem['value'],
        $elem['infos'],
        $this->getOptionInfo($elem, ['inline' => true])
    ) ?>
    </ul>
</div>
