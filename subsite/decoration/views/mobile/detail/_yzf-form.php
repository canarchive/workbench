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

<?php if (isset($formType) && $formType == 'top') { ?>
<div class="form" id="formposition">
	<div class="width">
        <input type="text"  placeholder="真实姓名" class="input" name="xm_59"  id="name"/>
        <input type="text"  placeholder="联系方式" class="input tel"  name="dh_59"  id="mobile"/>
        <input type="submit" class="button" <?php if (isset($typeBs)) { echo 'style="border:0; background:url(' . Yii::getAlias('@asseturl') . '/spread/house/yzf/yzfbs/mobile/images/button.png) no-repeat; display:block;margin:0 auto; margin-top:1rem;background-size:11.1875rem  3rem; width:11.1875rem;height:3rem;cursor:pointer;"'; } ?>value="" onclick="submitform('');"/>
    </div>
</div>
<?php } else { $classNum = isset($typeBs) ? 62 : 59; ?>
<div class="form_1" id="a">
	<div class="width_1">
        <p><input type="text"  placeholder="真实姓名" class="input_1" name="xm_<?= $classNum; ?>"  id="name1"/></p>
        <p><input type="text"  placeholder="联系方式" class="input_1  tel_1" name="dh_<?= $classNum; ?>"  id="mobile1"/></p>
		<p class="tc"><input type="submit" class="button_1" value="" onclick='submitform(1);'/></p>
    </div>
</div>
<?php } ?>

<script type="text/javascript">
function submitform(formId) 
{
    var name = $("#name" + formId).val();
    var mobile = $("#mobile" + formId).val();
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
                window.location.href = 'http://bj.yzf.com.cn/bjyxhd/20161103/Phone.html';
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
