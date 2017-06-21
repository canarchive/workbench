<?php
use yii\helpers\Html;

$tableName = 'user_merchant';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('status'); ?></th>
            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
        </tr>
    </thead>
    <tbody id="user_merchant_infos">
        <?php foreach ($houseInfos as $model) { ?>
        <tr>
            <td><?= $model->getPointName('merchant', $model->merchant_id); ?></td>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td>
            <?php if ($model->status == 0 && time() - $model->created_at < 600) { echo Html::dropDownList(
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
            <td><?= Html::textarea('note', $model->note, ['rows' => 2, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'note', this.value)"]); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
