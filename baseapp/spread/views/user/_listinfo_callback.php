<?php
use yii\helpers\Html;

$tableName = 'callback';
$modelNew = $modelUser->_newModel('callback');
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                        <tr>
                            <th><?= $modelNew->getAttributeLabel('status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('invalid_status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('out_status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('follow_status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('signed_merchant'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                        <?= Html::dropDownList(
                            "status",
                            $modelUser->status,
                            $modelNew->statusInfos,
                            [
                                'prompt' => '全部',
                                'style' => 'width:80px;',
                                'class' => 'form-control',
                                'id' => 'callback_status',
                                'onchange' => "updateElemForUser('{$tableName}', {$modelNew->id}, 'status', this.value)",
                            ]
                        ); ?>
                        </td>
                        <td>
                        <?= Html::dropDownList(
                            "invalid_status",
                            $modelUser->invalid_status,
                            $modelNew->invalidStatusInfos,
                            [
                                'prompt' => '全部',
                                'style' => 'width:80px;',
                                'class' => 'form-control',
                                'id' => 'callback_invalid_status',
                                'onchange' => "updateElemForUser('{$tableName}', {$modelNew->id}, 'invalid_status', this.value)",
                            ]
                        ); ?>
                        </td>
                        <td>
                        <?= Html::dropDownList(
                            "out_status",
                            $modelUser->out_status,
                            $modelNew->outStatusInfos,
                            [
                                'prompt' => '全部',
                                'style' => 'width:90px;',
                                'class' => 'form-control',
                                'id' => 'callback_out_status',
                                'onchange' => "updateElemForUser('{$tableName}', {$modelNew->id}, 'out_status', this.value)",
                            ]
                        ); ?>
                        </td>
                        <td>
                        <?= Html::dropDownList(
                            "follow_status",
                            $modelUser->follow_status,
                            $modelNew->followStatusInfos,
                            [
                                'prompt' => '全部',
                                'style' => 'width:90px;',
                                'class' => 'form-control',
                                'id' => 'callback_follow_status',
                                'onchange' => "updateElemForUser('{$tableName}', {$modelNew->id}, 'follow_status', this.value)",
                            ]
                        ); ?>
                        </td>
                        <td><input type="text" id="signed_merchant" name="signed_merchant" value="<?= $modelUser->signed_merchant; ?>" /></td>
                            <td><?= Html::textarea('content', '', ['id' => 'callback_content', 'rows' => '5', 'cols' => '80']); ?></td>
                        </tr>
                    </tbody>
                </table>
                <?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addCallback();"]) ?>
            </div>
            <div data-original-title="" class="box-header well">
                <h2>回访日志信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                        <tr>
                            <th><?= $modelNew->getAttributeLabel('service_id'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('invalid_status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('out_status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('follow_status'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('signed_merchant'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
                        </tr>
                    </thead>
                    <tbody id="callback_infos">
                    <?php foreach ($callbackInfos as $model) { ?>
                        <tr>
                            <td><?= $model->getPointName('service', $model->service_id); ?></td>
                            <td><?= $model->getKeyName('status', $model->status); ?></td>
                            <td><?= $model->getKeyName('invalid_status', $model->invalid_status); ?></td>
                            <td><?= $model->getKeyName('out_status', $model->out_status); ?></td>
                            <td><?= $model->getKeyName('follow_status', $model->follow_status); ?></td>
                            <td><?= $model->signed_merchant; ?></td>
                            <td><?= $model->content; ?></td>
                            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<script>
function addCallback()
{
    var content = $("#callback_content").val();
    var status = $("#callback_status").val();
    if (!status) {
        alert('<?= $modelNew->getAttributeLabel('status'); ?>内容不能为空');
        return false;
    }
    if (!content) {
        alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
        return false;
    }
    var data = {
        'mobile': '<?= $modelUser->mobile; ?>',
        'service_id': <?= $modelUser->service_id; ?>,
        'operation': 'add',
        'table': '<?= $tableName; ?>',
        'content': content,
        'status': status,
        'signed_merchant': $("#signed_merchant").val(),
        'invalid_status': $("#callback_invalid_status").val(),
        'out_status': $("#callback_out_status").val(),
        'follow_status': $("#callback_follow_status").val(),
        'note': $("#callback_note").val()
    };

    addElemForUser(data);
}
</script>
