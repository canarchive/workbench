<?php
use yii\helpers\Html;

$tableGuest = 'guestbook';
$modelGuestbook = $model->_newModel('guestbook');
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>派单信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content" id="user_house_infos">
                <?php echo $this->render('_dispatch_listinfo', ['model' => $model, 'userMerchantInfos' => $userMerchantInfos]); ?>
            </div>
        </div>
        <div class="box-inner" id="add_guestbook" style="display: none;">
            <div data-original-title="" class="box-header well">
                <h2>添加备注</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content" id="userHouseAdd">
                <?php echo $this->render('_guestbook_add', ['modelNew' => $modelGuestbook]); ?>
            </div>
        </div>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>备注信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content" >
                <?php echo $this->render('_guestbook_listinfo', ['modelNew' => $modelGuestbook, 'guestbookInfos' => $guestbookInfos]); ?>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<script>
function addGuestbook()
{
    var fields = ['user_merchant_id', 'reply'];
    var dataValues = [];
    for (var i = 0; i < fields.length; i++) {
        dataValues[fields[i]] = $("#" + fields[i]).val();
    }
    var data = {
        'operation': 'add',
        'table': '<?= $tableGuest; ?>',
        'merchantName': $('#guestbook_merchant_name').text()
    };
    for (var field in dataValues) {
        data[field] = dataValues[field];
    }

    addElemForUser(data);
}
</script>
