<?php
use yii\helpers\Html;

$modelNew = $model->_newModel('userMerchant');
$tableName = 'user_merchant';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('view_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('status'); ?></th>
            <th><?= $modelNew->getAttributeLabel('is_redispatch'); ?></th>
            <!--<th><?= $modelNew->getAttributeLabel('note'); ?></th>-->
            <th>添加备注</th>
        </tr>
    </thead>
    <tbody id="user_merchant_infos">
        <?php foreach ($userMerchantInfos as $model) { ?>
        <tr>
            <td><?= $model->getPointName('merchant', $model->merchant_id); ?></td>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td><?= date('Y-m-d H:i:s', $model->view_at); ?></td>
            <td>
            <?php if (time() - $model->created_at < 600) { echo Html::dropDownList(
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
            <?php if (time() - $model->created_at < 600) { echo Html::dropDownList(
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
            <!--<td><?= Html::textarea('note', $model->note, ['rows' => 2, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'note', this.value)"]); ?></td>-->
            <td><a href="javascript: void(0);" onclick="$('#guestbook_merchant_name').text('<?= $model->getPointName('merchant', $model->merchant_id); ?>'); $('#user_merchant_id').val(<?= $model->id; ?>); $('#add_guestbook').show();">备注</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
