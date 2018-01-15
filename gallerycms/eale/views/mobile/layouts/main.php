<?php
use yii\helpers\Url;

?>
<?php $this->beginContent('@common/views/main-base.php'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    window.location.href = "<?= $this->context->pcMappingUrl; ?>";
}

function search() {
    var txt = $('#tb_yq_artcleseek1').val();
    if (txt != "") {
        var url = "/search/" + "?keyword=" + encodeURIComponent(txt);
        window.open(url);
    }
}
</script>
<?= $this->render('../common/_topcss_' . $this->context->siteCode); ?>
<?= $this->render('../common/_header'); ?>
<?= $this->render('../../_slide'); ?>
<?= $content; ?>
<?= $this->render('../common/_footer'); ?>
<?php echo $this->render('../_weixin'); ?>
<script>
$(function() {
    var myElement = document.getElementById('yq_carousel');
    var hm = new Hammer(myElement);
    hm.on("swipeleft",
        function() {
            $('#yq_carousel').carousel('next')
        }); 
    hm.on("swiperight",
        function() {
            $('#yq_carousel').carousel('prev')
        })
})
function UpMessageBoard() {
    var mobile = $("#mobile").val();
    var name = $("#name").val();
    var error = "";
    if (name == "") error = "姓名不能为空！";
    if (!isphone2(mobile)) error = error + "手机号码输入错误！";

    if (error != "") {
        alert(error);
        return;
    }
	var url = '/guestbook.html';
	var data = {
		'_csrf': $('#_csrf').val(),
        'site_code': $('#site_code').val(),
        'page': $('#page').val(),
		'name': name,
		'mobile': mobile,
        'callback': $('#callback').val(),
        'email': $('#email').val(),
        'address': $('#address').val(),
        'qq': $('#qq').val(),
        'message': $('#message').val()
	};

    $.ajax({
	    type: "POST",
	    url: url,
		data: data,
        success: function(data,status) {
            if (data.status == 200) {
                alert('留言成功，我们会及时跟您联系！');
            } else {
                alert(data.message);
            }
		}
	});
}

</script>
<?php $this->endContent(); ?>
