<?php
use yii\helpers\Html;

$tableName = 'contact';
$modelNew = $merchantModel->_newModel('newContact');
?>
<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <div data-original-title="" class="box-header well">
            <h2>添加联系人</h2>
            <div class="box-icon">
                 <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content" id="houseAdd" style="display: none;">
            <?php echo $this->render('_contact_add', ['modelNew' => $modelNew]); ?>
        </div>
    </div>
    <div class="box-inner">
        <div data-original-title="" class="box-header well">
            <h2>联系人信息</h2>
            <div class="box-icon">
                 <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php echo $this->render('_contact_list', ['contactInfos' => $contactInfos, 'modelNew' => $modelNew]); ?>
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
