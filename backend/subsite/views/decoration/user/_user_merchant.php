<?php
use yii\helpers\Html;

$tableName = 'user_merchant';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('sort'); ?></th>
            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('status'); ?></th>
            <th><?= $modelNew->getAttributeLabel('is_dispatch'); ?></th>
            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
        </tr>
    </thead>
    <tbody id="user_merchant_infos">
        <?php foreach ($houseInfos as $model) { ?>
        <tr>
            <td><?= $model->getPointName('merchant', $model->merchant_id); ?></td>
            <td><?= $model->getKeyName('sort', $model->sort); ?></td>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td>
            <?php if ($model->status == 0 && time() - $model->created_at < $model->statusLimit) { echo Html::dropDownList(
                'status',
                $model->status,
                $model->statusInfos,
                [
                    'prompt' => '全部',
                    'class' => 'form-control',
                    'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'status', this.value)",
                ]
            ); } else { $statusStr = isset($model->statusInfos[$model->status]) ? $model->statusInfos[$model->status] : $model->status; echo $statusStr; } ?>
            </td>
            <td>
            <?php if (time() - $model->created_at < $model->isRedispatchLimit) { echo Html::dropDownList(
                'is_redispatch',
                $model->is_redispatch,
                $model->isRedispatchInfos,
                [
                    'prompt' => '全部',
                    'class' => 'form-control',
                    'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'is_redispatch', this.value)",
                ]
            ); } else { $isRedispatchStr = isset($model->isRedispatchInfos[$model->is_redispatch]) ? $model->isRedispatchInfos[$model->is_redispatch] : $model->is_redispatch; echo $isRedispatchStr; } ?>
            </td>
            <td><?= Html::textarea('note', $model->note, ['rows' => 2, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'note', this.value)"]); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
