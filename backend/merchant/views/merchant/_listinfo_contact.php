<?php
use yii\helpers\Html;

$tableName = 'contact';
$modelNew = $merchantModel->_newModel('newContact');
?>
<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <div data-original-title="" class="box-header well">
            <h2>联系人信息</h2>
            <div class="box-icon">
                 <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered responsive">
                <thead>
                    <tr>
                        <th><?= $modelNew->getAttributeLabel('name'); ?></th>
                        <th><?= $modelNew->getAttributeLabel('title'); ?></th>
                        <th><?= $modelNew->getAttributeLabel('mobile'); ?></th>
                    </tr>
                </thead>
                <tbody id="contact_infos">
                <?php foreach ($contactInfos as $model) { ?>
                    <tr>
                        <td><?= $model->name; ?></td>
                        <td><?= $model->title; ?></td>
                        <td><?= $model->mobile; ?></td>
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
function addContact()
{
    var content = $("#contact_content").val();
    if (!content) {
        alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
        return false;
    }
    var data = {
        'merchant_id': '<?= $merchantModel->id; ?>',
        'saleman_id': <?= $merchantModel->saleman_id; ?>,
        'operation': 'add',
        'table': '<?= $tableName; ?>',
        'content': content,
        'status': $("#contact_status").val()
    };

    addElemForUser(data);
}
</script>
