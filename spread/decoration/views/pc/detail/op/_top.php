<?php
use yii\helpers\Html;
$cid = $this->context->cid;
$cid = empty($cid) ? 689 : $cid;
$type = isset($type) ? $type : '';
?>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<div class="header_top">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57d18-7114.jpg" width="1162" height="57" usemap="#Map_top" style="position:relative;z-index:999;" />
    <map name="Map_top">
        <area shape="rect" coords="153,13,353,46" class="alert" href="javascript:void(0);">
        <area shape="rect" coords="408,17,537,49" class="alert" href="javascript:void(0);">
        <area shape="rect" coords="560,17,656,51" class="alert" href="javascript:void(0);" >
        <area shape="rect" coords="676,16,843,48" class="alert" href="javascript:void(0);" >
        <area shape="rect" coords="919,7,1085,51" class="alert" href="javascript:void(0);" ></map>
</div>
<script>
function signupApply($data)
{
    var positionName = $('#position_name').val() + ';' + $data.needtype + $data.needother;
    $data.position = $('#position').val();
    $data.position_name = positionName;
    $data.city_input = $data.address_sheng + $data.address_shi;
    $data.cid = $("#cid").val();
    $data._csrf = $("#_csrf").val();
    console.log($data);
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
                //Hide(".sqk_alert");
                Hide('.tckbg , .sqk_alert, .sqk_bottom');
                Show('.apply_ok_chat_bg, .apply_ok_chat');
                //window.location.href = 'http://bj.yzf.com.cn/';
            }else if ( data.status == 400 ) {
                $('#tip_show0').text(data.message);
            } else {
                $('#tip_show0').text('报名失败，请您重新报名！');
            }
        }//end success

    })// end ajax
    return false;
}
</script>
<input type="hidden" id="cid" value="<?= $cid; ?>" />
<input type="hidden" id="info_id" value="1" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
