<?php
use yii\helpers\Html;

$model->callback_next = $model->callback_next > 0 ? $model->callback_next : time();
$tableName = 'merchant';
?>
<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <div data-original-title="" class="box-header well">
            <h2>商家信息</h2>
            <div class="box-icon">
                 <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered responsive">
                <thead>
                <tr>
                    <th><?= $model->getAttributeLabel('sort'); ?></th>
                    <th><?= $model->getAttributeLabel('code'); ?></th>
                    <th><?= $model->getAttributeLabel('name'); ?></th>
                    <th><?= $model->getAttributeLabel('name_full'); ?></th>
                    <th><?= $model->getAttributeLabel('city_code'); ?></th>
                    <th><?= $model->getAttributeLabel('region'); ?></th>
                    <th><?= $model->getAttributeLabel('hotline'); ?></th>
                    <th><?= $model->getAttributeLabel('address'); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $model->getKeyName('sort', $model->sort); ?></td>
                    <td><?= $model->code; ?></td>
                    <td><input type="text" name="name" value="<?= $model->name; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'name', this.value);"/></td>
                    <td><input type="text" name="name_full" value="<?= $model->name_full; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'name_full', this.value);"/></td>
                    <td><?= $model->getPointName('company', $model->city_code); ?></td>
                    <td><input type="text" name="region" value="<?= $model->region; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'region', this.value);"/></td>
                    <td><input type="text" name="hotline" value="<?= $model->hotline; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'hotline', this.value);"/></td>
                    <td><input type="text" name="address" value="<?= $model->address; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'address', this.value);"/></td>
                </tr>
                </tbody>
            </table>
            <table class="table table-striped table-bordered responsive">
                <thead>
                <tr>
                    <th><?= $model->getAttributeLabel('status'); ?></th>
                    <th><?= $model->getAttributeLabel('interview_num'); ?></th>
                    <th><?= $model->getAttributeLabel('callback_num'); ?></th>
                    <th><?= $model->getAttributeLabel('callback_next'); ?></th>
                    <th><?= $model->getAttributeLabel('created_at'); ?></th>
                    <th><?= $model->getAttributeLabel('updated_at'); ?></th>
                    <th><?= $model->getAttributeLabel('description'); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $model->interview_num; ?></td>
                    <td><?= $model->callback_num; ?></td>
                    <td>
                    <input type="hidden" id="callback_next_old" value="<?= date('Y-m-d H:i:s', $model->callback_next); ?>" />
                    <input class="form-control" type="text" id="callback_next" onblur="changeDate('<?= $tableName; ?>', <?= $model->id; ?>, 'callback_next', this.value)" value="<?= date('Y-m-d H:i:s', $model->callback_next); ?>">
                <script type="text/javascript">
                    $(function () {
                        $('#callback_next').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                        //$('#callback_next').onchange = function () { alert('ss'); }
                    });
                </script>
                    </td>
                    <td><?= $model->formatTimestamp($model->created_at); ?></td>
                    <td><?= $model->formatTimestamp($model->updated_at); ?></td>
                    <td><?= $model->description; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--/span-->
</div>
