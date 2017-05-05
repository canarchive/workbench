<?php
use yii\helpers\Html;
$cid = $this->context->cid;
$cid = empty($cid) ? 674 : $cid;
$type = isset($type) ? $type : '';
?>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>

<div class="width">
	<div class="form" id="a">
    <?php if ($type == 'hb') { ?>
    <input name="xm_59" id="name" class="input_xm text" placeholder="真实姓名" type="text">
    <input name="dh_59" id="mobile" class="input_dh text" placeholder="联系方式" type="text">
    <input class="button" value="" onclick="submitform();" type="submit">
    <?php } else { ?>
		<input name="xm_54"  id="name" type="text" class="input text" placeholder="真实姓名" >
        <input name="dh_54" id="mobile" type="text" class="input1 text" placeholder="联系电话">
       <div class="cls"></div>
       <input type="submit" class="button" value=""  onclick='submitform();return false;';/>
    <?php } ?>
    </div>
</div>

<script type="text/javascript">
function submitform() 
{
    var name = $("#name").val();
    var mobile = $("#mobile").val();
    var myreg = /^1[3|4|5|7|8]\d{9}$/;///^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (!myreg.test(mobile)) {
        alert('请输入正确的手机号码!');
        return false;
    }
    var $data = {
        'name': name,
        'mobile': mobile
    };

    signup($data);
}

function signup($data)
{
    $data.position = '<?= $position; ?>';
    $data.position_name = '<?= $positionName; ?>';
    $data.info_id = 1;
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
                window.location.href = 'http://bj.yzf.com.cn/';
            }else if ( data.status == 400 ) {
                alert(data.message);
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            } else {
                alert('报名失败');
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
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
