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
                window.location.href = 'http://m.oppein.cn/';
            }else if ( data.status == 400 ) {
                alert(data.message);
            } else {
                alert('报名失败，请您重新报名！');
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
