<?php
use yii\helpers\Html;

$privInfo = isset(Yii::$app->params['privInfo']) ? Yii::$app->params['privInfo'] : [];
$serviceIds = isset($privInfo['service_id']) ? $privInfo['service_id'] : [];
$tableName = 'user_merchant';
$houseInfo = $model->_newModel('house')->findOne($model['house_id']);
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>业主信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th><?= $model->getAttributeLabel('mobile'); ?></th>
                        <th><?= $model->getAttributeLabel('city_code'); ?></th>
                        <th><?= $model->getAttributeLabel('service_id'); ?></th>
                        <th><?= $model->getAttributeLabel('num_merchant'); ?></th>
                        <th><?= $houseInfo->getAttributeLabel('region'); ?></th>
                        <th><?= $houseInfo->getAttributeLabel('house_area'); ?></th>
                        <th><?= $houseInfo->getAttributeLabel('house_type'); ?></th>
                        <th><?= $houseInfo->getAttributeLabel('house_sort'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php if (in_array($model->service_id, $serviceIds)) { echo $model->aTagMobile($this, true); } else { echo $model->aTagMobile($this); } ?></td>
                        <td><?= $model->city_code; ?></td>
                        <td><?= $model->getPointName('service', $model->service_id); ?></td>
                        <td><?= $model->num_merchant; ?></td>
                        <td><?= $houseInfo->region . ' ' . $houseInfo->address; ?></td>
                        <td><?= $houseInfo->house_area; ?></td>
                        <td><?= $houseInfo->getKeyName('house_type', $houseInfo->house_type); ?></td>
                        <td><?= $houseInfo->getKeyName('house_sort', $houseInfo->house_sort); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
