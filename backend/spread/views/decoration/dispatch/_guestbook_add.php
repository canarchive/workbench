<?php
use yii\helpers\Html;

?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td ><span id="guestbook_merchant_name"></span></td>
            <td><?= Html::textarea('reply', '', ['id' => 'reply', 'rows' => '2', 'cols' => '80']); ?></td>
        </tr>
    </tbody>
</table>
<input type="hidden" name="user_merchant_id" id="user_merchant_id" />
<?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addGuestbook();"]) ?>
