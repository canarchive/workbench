<?php
use yii\helpers\Html;
$name = isset($elem['name']) ? $elem['name'] : '搜索';
$buttons = isset($elem['buttons']) ? $elem['button'] : [['name' => '搜索', 'option' => ['class' => 'btn btn-primary']]];
?>
<?php if (isset($haveWrap)) { echo '<div class="form-group form-group-sm">'; } ?>
    <div class="col-md-2">
        <?php foreach ($buttons as $button) { echo Html::submitButton($button['name'], $button['option']); } ?>
    </div>
<?php if (isset($haveWrap)) { echo '</div>'; } ?>
