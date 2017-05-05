<?php
use yii\helpers\Html;

$tableName = 'guestbook';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('reply'); ?></th>
            <th><?= $modelNew->getAttributeLabel('reply_at'); ?></th>
        </tr>
    </thead>
    <tbody id="guestbook_infos">
        <?php foreach ($guestbookInfos as $model) { ?>
        <tr>
            <td><?php $merchantName = isset($model->merchantInfo['name']) ? $model->merchantInfo['name'] : ''; echo $merchantName; ?></td>
            <td><?= $model->content; ?></td>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td><?= Html::textarea('reply', $model->reply, ['rows' => 1, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'reply', this.value)"]); ?></td>
            <td><?php if ($model->reply_at > 0) { echo date('Y-m-d H:i:s', $model->reply_at); } ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
