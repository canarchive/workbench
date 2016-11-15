<?php
use yii\helpers\Html;

$tableName = 'owner_house';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('address'); ?></th>
            <th><?= $modelNew->getAttributeLabel('house_type'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="address" id="address" value=""/></td>
            <td>
            <?= Html::dropDownList(
                'house_type', 
                '', 
                $modelNew->houseTypeInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'id' => 'house_type',
                ]
            ); ?>
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('renovation_company'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= Html::radioList('renovation_company', 0, $modelNew->renovationCompanyInfos, ['id' => 'renovation_company']); ?></td>
        </tr>
    </tbody>
</table>
<?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addHouseInfo();"]) ?>
