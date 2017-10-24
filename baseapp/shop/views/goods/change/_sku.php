<?php
use yii\helpers\Html;

$aModel = $model->getPointModel('shop-attribute');

$tableName = 'goods_attribute';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $aModel->getAttributeLabel('house_id'); ?></th>
            <th><?= $aModel->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $aModel->getAttributeLabel('sort'); ?></th>
            <th><?= $aModel->getAttributeLabel('note'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td ><span id="house_show"><span></td>
            <td>
            <?= Html::dropDownList(
                'merchant_id',
                '',
                $merchantInfos,
                [
                    'prompt' => '全部',
                    'class' => 'form-control',
                    'id' => 'merchant_id',
                ]
            ); ?>
            </td>
            <td>
            <?= Html::dropDownList(
                'sort',
                'overall',
                $aModel->sortInfos,
                [
                    'class' => 'form-control',
                    'id' => 'sort',
                ]
            ); ?>
            </td>
            <td><?= Html::textarea('note', '', ['id' => 'note', 'rows' => '2', 'cols' => '80']); ?></td>
        </tr>
    </tbody>
</table>
