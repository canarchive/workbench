<?php
use yii\helpers\Html;

$tableName = 'house';
$modelNew = $modelUser->_newModel('house');

$tableNameMerchant = 'user_merchant';
$modelUserMerchantNew = $modelUser->_newModel('userMerchant');
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>添加房屋信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content" id="houseAdd" style="display: none;">
                <?php echo $this->render('_house_add', ['modelNew' => $modelNew]); ?>
            </div>
        </div>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>房屋信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
                <?php echo $this->render('_house', ['modelUser' => $modelUser, 'houseInfos' => $houseInfos]); ?>
            </div>
        </div>
        <div class="box-inner" id="sendto_merchant" style="display: none;">
            <div data-original-title="" class="box-header well">
                <h2>派单</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content" id="houseAdd">
                <?php echo $this->render('_user_merchant_add', ['modelNew' => $modelUserMerchantNew]); ?>
            </div>
        </div>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>派单信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content" id="_house_infos">
                <?php echo $this->render('_user_merchant', ['modelUser' => $modelUser, 'modelNew' => $modelUserMerchantNew, 'houseInfos' => $userMerchantInfos]); ?>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<script>
function addHouseInfo()
{
    var fields = ['region', 'address', 'house_area', 'house_sort', 'house_type', 'renovation_at', 'renovation_budget'];
    var dataValues = [];
    for (var i = 0; i < fields.length; i++) {
    //for (var field in fields) {
        dataValues[fields[i]] = $("#" + fields[i]).val();
    }
    var data = {
        'operation': 'add',
        'table': '<?= $tableName; ?>',
        'mobile': '<?= $modelUser->mobile; ?>',
        'service_id': <?= $modelUser->service_id; ?>
    };
    for (var field in dataValues) {
        data[field] = dataValues[field];
    }
    console.log(data);
    /*if (!content) {
        alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
        return false;
    }*/

    addElemForUser(data);
}

function addMerchantInfo()
{
    var fields = ['house_id', 'note', 'merchant_id', 'sort'];
    var dataValues = [];
    for (var i = 0; i < fields.length; i++) {
    //for (var field in fields) {
        dataValues[fields[i]] = $("#" + fields[i]).val();
    }
    var data = {
        'operation': 'add',
        'table': '<?= $tableNameMerchant; ?>',
        'service_id': <?= $modelUser->service_id; ?>,
        'city_code': '<?= $modelUser->city_code; ?>',
        'mobile': '<?= $modelUser->mobile; ?>'
    };
    for (var field in dataValues) {
        data[field] = dataValues[field];
    }
    console.log(data);
    /*if (!content) {
        alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
        return false;
    }*/

    addElemForUser(data);
}
</script>
