<?php
use yii\helpers\Html;

$tableName = 'house';
$merchantInfos = $modelNew->getPointInfos('merchant', ['noPriv' => true, 'where' => ['status' => 'cps']]);
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('house_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('sort'); ?></th>
            <th><?= $modelNew->getAttributeLabel('is_dispatch'); ?></th>
            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td ><span id="house_show"><span></td>
            <td>
            <?= Html::dropDownList(
                'merchant_id',
                '',
                $merchantInfos,
                [
                    'prompt' => '全部',
                    'class' => 'form-control',
                    'id' => 'merchant_id',
                ]
            ); ?>
            </td>
            <td>
            <?= Html::dropDownList(
                'sort',
                'overall',
                $modelNew->sortInfos,
                [
                    'class' => 'form-control',
                    'id' => 'sort',
                ]
            ); ?>
            </td>
            <td>
            <?php echo Html::dropDownList(
                'is_redispatch',
                '0',
                $modelNew->isRedispatchInfos,
                [
                    'prompt' => '全部',
                    'class' => 'form-control',
                    'id' => 'is_redispatch',
                ]
            ); ?>
            </td>
            <td><?= Html::textarea('note', '', ['id' => 'note', 'rows' => '2', 'cols' => '80']); ?></td>
        </tr>
    </tbody>
</table>
<input type="hidden" name="house_id" id="house_id" />
<?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addMerchantInfo();"]) ?>
