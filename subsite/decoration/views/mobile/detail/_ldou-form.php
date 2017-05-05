<?php
use yii\helpers\Html;
$cid = $this->context->cid;
$cid = empty($cid) ? 678 : $cid;
$type = isset($type) ? $type : '';
?>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<script>
$(function(){
	function popTip(str){
		var $popTip = $('#popTip');
		$popTip.find('p').text(str);
		$popTip.show().click(function() {
			$popTip.hide();
		});
	}

	function checkPhone(phone) {
		if (/^1\d{10}$/g.test(phone)) {
			return true;
		}
		return false;
	}

	$('.submit-box').on('click', function(event) {
		var phone = $.trim($('#phoneInput').val());

		if (phone == '') {
			popTip('请填写您的手机号');
			return false;
		} else if (!checkPhone(phone)) {
			popTip('请填写正确的手机号');
			return false;
		}

    var $data = {
        'mobile': phone,
        'position': 'form_ldou'
    };

    _signup($data);

		/*$.ajax({　　
			type: 'POST',
			url: '',
			data: {
				
			},
			success: function(result) {
				$('.form-container .result').show().siblings().hide();
			},
			error: function() {
				popTip('系统开小差了，请重试');
			}
        });*/
	});

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
                    window.location.href = redirectUrl;
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
})
</script>
<input type="hidden" id="cid" value="<?= $cid; ?>" />
<input type="hidden" id="info_id" value="1" />
<input type="hidden" id="return_url" value="http://www.elvdou.cn/mobile/" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
