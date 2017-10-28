<?php
use yii\helpers\Html;

$model->callback_again = $model->callback_again > 0 ? $model->callback_again : time();
$tableName = 'user';
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>业主报名信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
                <?php if (!empty($model->conversionInfo)) { $cModel = $model->conversionInfo; ?>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th><?= $cModel->getAttributeLabel('sort'); ?></th>
                        <th><?= $cModel->getAttributeLabel('merchant_id'); ?></th>
                        <th><?= $cModel->getAttributeLabel('city_code'); ?></th>
                        <th><?= $cModel->getAttributeLabel('client_type'); ?></th>
                        <th><?= $cModel->getAttributeLabel('channel'); ?></th>
                        <th><?= $cModel->getAttributeLabel('sem_account'); ?></th>
                        <th><?= $cModel->getAttributeLabel('keyword'); ?></th>
                        <th><?= $cModel->getAttributeLabel('keyword_search'); ?></th>
                        <th><?= $cModel->getAttributeLabel('note'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $cModel->sort; ?></td>
                        <td><?php $merchantName = isset($model->merchantInfo) ? $model->merchantInfo['name'] : $model->merchant_id; if ($model->merchant_id == 3) { echo "<b style='font:oblique small-caps 900 29pt 黑体;'>{$merchantName}</b>"; } else { echo $merchantName; } ?></td>
                        <td><?= $cModel->city_code; ?></td>
                        <td><?= $cModel->client_type; ?></td>
                        <td><?= $cModel->channel; ?></td>
                        <td><?= $cModel->sem_account; ?></td>
                        <td><?= $cModel->keyword; ?></td>
                        <td><?= $cModel->keyword_search; ?></td>
                        <td><?= $cModel->note; ?></td>
                    </tr>
                    </tbody>
                </table>
                <?php } ?>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th><?= $model->getAttributeLabel('mobile'); ?></th>
                        <th><?= $model->getAttributeLabel('name'); ?></th>
                        <th><?= $model->getAttributeLabel('signup_at'); ?></th>
                        <th><?= $model->getAttributeLabel('signup_num'); ?></th>
                        <th><?= $model->getAttributeLabel('created_at'); ?></th>
                        <th><?= $model->getAttributeLabel('message'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $model->mobile; ?></td>
                        <td><input type="text" name="name" value="<?= $model->name; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'name', this.value);"/></td>
                        <td><?= date('Y-m-d H:i:s', $model->signup_at); ?></td>
                        <td><?= $model->signup_num; ?></td>
                        <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
                        <td><?= $model->message; ?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th><?= $model->getAttributeLabel('status'); ?></th>
                        <th><?= $model->getAttributeLabel('invalid_status'); ?></th>
                        <th><?= $model->getAttributeLabel('callback_again'); ?></th>
                        <th>指派其他商家</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <?= Html::dropDownList(
                            "status",
                            $model->status,
                            $model->statusInfos,
                            [
                                'prompt' => '全部',
                                'class' => 'form-control',
                                'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'status', this.value)",
                            ]
                        ); ?>
                        </td>
                        <td>
                        <?= Html::dropDownList(
                            "invalid_status",
                            $model->invalid_status,
                            $model->invalidStatusInfos,
                            [
                                'prompt' => '全部',
                                'class' => 'form-control',
                                'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'invalid_status', this.value)",
                            ]
                        ); ?>
                        </td>
                        <td>
                        <input type="hidden" id="callback_again_old" value="<?= date('Y-m-d H:i:s', $model->callback_again); ?>" />
                        <input class="form-control" type="text" id="callback_again" onblur="changeDate('<?= $tableName; ?>', <?= $model->id; ?>, 'callback_again', this.value)" value="<?= date('Y-m-d H:i:s', $model->callback_again); ?>">
                    <script type="text/javascript">
                        $(function () {
                            $('#callback_again').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                            //$('#callback_again').onchange = function () { alert('ss'); }
                        });
                    </script>
                        </td>
                        <td><?= "<a href='/subsite/decoration/user/change-merchant.html?id={$model->id}'>指派其他商家</a>"; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>