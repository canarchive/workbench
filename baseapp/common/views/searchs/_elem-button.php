<?php
use yii\helpers\Html;
$optionDefault = ['class' => 'btn btn-primary'];
$buttons = isset($elem['buttons']) ? $elem['buttons'] : [['name' => '搜索']];
?>
<?php if (isset($haveWrap)) { echo '<div class="form-group form-group-sm">'; } ?>
    <div class="col-md-3">
        <?php foreach ($buttons as $button) { $option = isset($button['option']) ? array_merge($optionDefault, $button['option']) : $optionDefault; echo Html::submitButton($button['name'], $option) . '    '; } ?>
    </div>
<?php if (isset($haveWrap)) { echo '</div>'; } ?>
