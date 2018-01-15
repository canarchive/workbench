<?php
use yii\helpers\Html;
$cid = $this->context->cid;
$cid = empty($cid) ? 675 : $cid;
$type = isset($type) ? $type : '';
?>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<script>
function signup(position) 
{
    var mobile = $("#mobile_" + position).val();
    var myreg = /^1[3|4|5|7|8]\d{9}$/;///^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (!myreg.test(mobile)) {
        alert('请输入正确的手机号码!');
        return false;
    }
    var $data = {
        'name': $("#name_" + position).val(),
        'mobile': mobile,
        'area_input': $("#area_" + position).val(),
        'city_input': $("#note_" + position).val(),
        'position': 'form_' + position
    };

    _signup($data);
}

function _signup($data)
{
    $data.info_id = $("#info_id").val();
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
		    	alert('报名成功');
	     		var redirectUrl = $("#return_url").val();
				if (redirectUrl) {
                    //window.location.href = redirectUrl;
				}
            }else if ( data.status == 400 ) {
                alert(data.message);
            } else {
                alert('报名失败');
            }
        }
    })
    return false;
}
</script>
<input type="hidden" id="cid" value="<?= $cid; ?>" />
<input type="hidden" id="info_id" value="1" />
<input type="hidden" id="return_url" value="http://50-jia.com/" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
