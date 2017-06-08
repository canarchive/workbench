<script>
function signupApply($data, successCallback, errorCallback)
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
                var returnUrl = $('#returnUrl').val();
                window.location.href = 'http://m.oppein.cn/';
            }else if ( data.status == 400 ) {
                errorCallback(data);
                alert(data.message);
            } else {
                alert('报名失败，请您重新报名！');
            }
        }//end success

    })// end ajax
    return false;
}
</script>
