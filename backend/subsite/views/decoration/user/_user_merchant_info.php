<?php
use yii\helpers\Html;

$tableName = 'user_merchant';
?>
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
            ); } else { echo $model->statusInfos[$model->status]; } ?>
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
            <td><?= Html::textarea('note', $model->note, ['rows' => 5, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'note', this.value)"]); ?></td>
        </tr>
