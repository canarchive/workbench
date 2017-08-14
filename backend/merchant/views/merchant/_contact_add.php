<?php
use yii\helpers\Html;

?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('name'); ?></th>
            <th><?= $modelNew->getAttributeLabel('mobile'); ?></th>
            <th><?= $modelNew->getAttributeLabel('title'); ?></th>
            <th><?= $modelNew->getAttributeLabel('description'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="name" id="name" value=""/></td>
            <td><input type="text" name="mobile" id="mobile" value=""/></td>
            <td><input type="text" name="title" id="title" value=""/>平米</td>
            <td><input type="text" name="description" id="description" value=""/></td>
            <td>
        </tr>
    </tbody>
</table>
<?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addContactInfo();"]) ?>
