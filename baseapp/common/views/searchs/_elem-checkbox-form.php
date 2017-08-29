<?php
use yii\helpers\Html;
?>
<?php if (!empty($elem['name'])) { ?><label class="control-label col-md-1"><?= $elem['name']; ?></label><?php } ?>
<div id="<?= $elem['field'] . '_wrap'; ?>" class="col-md-2">
    <?= Html::checkboxList(
        $elem['field'],
        $elem['value'],
        $elem['infos'],
        $this->getOptionInfo($elem, ['inline' => true])
    ) ?>
</div>
