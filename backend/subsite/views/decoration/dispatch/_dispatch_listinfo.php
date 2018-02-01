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
            <th><?= $modelNew->getAttributeLabel('status_result'); ?></th>
            <th><?= $modelNew->getAttributeLabel('result_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('note_result'); ?></th>
            <th>添加备注</th>
        </tr>
    </thead>
    <tbody id="user_merchant_infos">
        <?php foreach ($userMerchantInfos as $model) { $model->result_at = $model->result_at > 0 ? $model->result_at : time();?> 
        <tr>
            <td><?= $model->getPointName('merchant', $model->merchant_id); ?></td>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td><?= date('Y-m-d H:i:s', $model->view_at); ?></td>
            <td>
            <?php if (time() - $model->created_at < $model->statusLimit) { echo Html::dropDownList(
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
            <td>
            <?= Html::dropDownList(
                'status_result',
                $model->status_result,
                $model->statusResultInfos,
                [
                    'prompt' => '全部',
                    'class' => 'form-control',
                    'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'status_result', this.value)",
                ]
            ); ?>
            </td>
                        <td>
                        <input type="hidden" id="result_at_old" value="<?= date('Y-m-d H:i:s', $model->result_at); ?>" />
                        <input class="form-control" type="text" id="result_at_<?= $model->id; ?>" onblur="changeDate('', '<?= $tableName; ?>', <?= $model->id; ?>, 'result_at', this.value)" value="<?= date('Y-m-d H:i:s', $model->result_at); ?>">
                    <script type="text/javascript">
                        $(function () {
                            $('#result_at_<?= $model->id; ?>').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                            //$('#result_at').onchange = function () { alert('ss'); }
                        });
                    </script>
                        </td>
            <td><?= Html::textarea('note_result', $model->note_result, ['rows' => 2, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'note_result', this.value)"]); ?></td>
            <td><a href="javascript: void(0);" onclick="$('#guestbook_merchant_name').text('<?= $model->getPointName('merchant', $model->merchant_id); ?>'); $('#user_merchant_id').val(<?= $model->id; ?>); $('#add_guestbook').show();">备注</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
