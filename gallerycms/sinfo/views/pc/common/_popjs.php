<?php
use yii\helpers\Url;
$urlController = $this->context->isMobile ? 'mobile-aboutus' : 'aboutus';
$url = '/record.html';
?>
<script>
$(function() {
    var feedbackTime = true;
    $('#email_bottom3').mailAutoComplete({
        width: '306px'
    });

    function showRequest(formId) {
        alert(formId);
        if (!feedbackTime) {
            alert('已提交，不需要重复提交！');
            return;
        }
        var form = $("#" + formId);
        var company = form.find("input[name=company_name]").val();
        var mycall = form.find("input[name=mobile]").val();
        <?php if ($this->context->isMobile) { ?>
        var gp = form.find("select[name=province]").val();
        var gt = form.find("select[name=city]").val();
        var content = form.find("input[name=content]").val();
        <?php } else { ?>
        var gp = form.find("input[name=province]").val();
        var gt = form.find("input[name=city]").val();
        var content = form.find("textarea[name=content]").val();
        <?php } ?>
        var name = form.find("input[name=contact]").val();
        var gender = form.find("input[name='gender']:checked").val();
        var email = form.find("input[name=email]").val();
        //var mcode = form.find("input[name=mcode]");
        //$('#hidden_value').val(admin_add);
        //if (content == '' || gp == '' || gt == '' || gp == '请选择省份' || gt == '请选择城市' || mycall == '' || name == '') {
        //if (gp == '' || gt == '' || gp == '请选择省份' || gt == '请选择城市' || mycall == '' || company == '') {
        if (mycall == '' || company == '') {
            alert('信息不能为空!');
            return false;
        }
        if (!validate.checkMobile(mycall)) {
            alert('手机号码格式有误');
            return false;
        }
        if (!validate.checkEmail(email)) {
            alert('email格式有误');
            return false;
        }
        feedbackTime = false;
        var data = {
            company_name: company,
            mobile: mycall,
            province: gp,
            city: gt,
            name: name,
            gender: gender,
            email: email,
            content: content
        };
        return data;
    }

    $('.zixunsubmit').click(function() {
        var $this=$(this);
        var formId = $this.attr('data-formId');
        var data = showRequest(formId);
        console.log(data);

        if (data === false) {
            return;
        }
        var url = '<?= $url; ?>';
	    data._csrf = $('#_csrf').val();
        console.log(data);
        $.ajax({
    	    type: "POST",
    	    url: url,
    		data: data,
            success: function(data,status) {
    			if (data.status != 200) {
                    alert('亲，我们已经收到你的意见反馈，会尽快处理');
                    //window.location.href = '/';
    			} else {
                    alert(data.message);
    			}
    		}
    	});
    });
});
</script>
