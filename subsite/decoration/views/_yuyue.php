<?php
use yii\helpers\Html;
?>
<script>
function yuyue(){
    var name=$("#name").val();;
    var tel=$("#tel").val();
    var note=$("#address").val();
    if(!(/^1[3|4|5|7|8]\d{9}$/.test(tel))){
        alert("手机号格式错误，请填写正确的手机号");
        return false;
    }
    var $data = {
        name: name,
        mobile: tel,
    };

    $data.position = 'tshd';
    $data.position_name = '天盛家装庙会节活动' + note;
    $data.info_id = 1;
    $data.cid = 669;
    $data._csrf = $("#_csrf").val();
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
                //var redirectUrl = window.BASE_URL + '/bm-result.html';
                    window.location.href = redirectUrl;
                }
            }else if ( data.status == 400 ) {
                alert(data.message);
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            } else {
                alert('报名失败');
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            }
        }
    });
    return false;
}
</script>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
