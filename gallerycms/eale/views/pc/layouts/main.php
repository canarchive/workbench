<?php
use yii\helpers\Url;

$siteCode = $this->context->siteCode;
$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/third/eale/images/ficon.png';
?>
<?php $this->beginContent('@common/views/main-base.php'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    window.location.href = "<?= $this->context->mobileMappingUrl; ?>";
}
</script>
<?= $this->render('../common/_topcss_' . $siteCode); ?>
<?= $this->render('../common/_top'); ?>
<?= $this->render('../common/_nav'); ?>
<?= $this->render('../../_slide'); ?>
<?= $content; ?>
<?= $this->render('../common/_right_' . $siteCode); ?>
<?= $this->render('../common/_friendlink'); ?>
<?= $this->render('../common/_footer'); ?>
<script type="text/javascript">
$(function() {
    $('#box div img').mouseover(function(e) {
        $(this).stop().fadeTo(500, 0.6);
    });
    $('#box div img').mouseout(function(e) {
        $(this).stop().fadeTo(500, 1);
    });
})</script>
<script type="text/javascript">
function tb_yq_artcleseek() {
    var txt = document.getElementById("tb_yq_artcleseek").value;
    if (txt != "") {
        var url = "/search/" + "?keyword=" + encodeURIComponent(txt);
        window.open(url);
    }
}</script>
<script type="text/javascript">
$(function() {
    $(".float .fl_one").hover(function() {
        $(".float .fl_hover").fadeIn(300);
    },
    function() {
        $(".float .fl_hover").fadeOut(300);
    })

})

$(window).scroll(function() {
    // 当滚动到最底部以上100像素时， 加载新内容
    if ($(this).scrollTop() >= 500) {
        $(".float").css("display", "block");
    } else {
        $(".float").css("display", "none");
    }
});</script>
<script>function returnbk() {
    var url = window.location.href;
    url = url.substr(0, url.lastIndexOf('/') + 1);
    window.location.href = url;
}

function returnbks() {
    var url = window.location.href;
    url = url.substr(0, url.lastIndexOf('/')) + "s/";
    window.location.href = url;
}</script>
<script type="text/javascript" language="javascript">
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

function isphone2(inputString) {
    var partten = /^1[3,5,8]\d{9}$/;
    var fl = false;
    if (partten.test(inputString)) {
        return true;
    } else {
        return false;
    }
}

$(function() {
    if ($("#MessageBoard1_alert").length > 0) {
        if ($("#MessageBoard1_alert").val() != "") {
            alert($("#MessageBoard1_alert").val());
            $("#MessageBoard1_alert").val("");
        }
    }
});</script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    var video = $("#player2");

    var videourl = $(video).attr("videourl");
    var linktype = $(video).attr("linktype");
    var imgurl = $(video).attr("imgurl");

    if (linktype == 11 || linktype == 13 || linktype == 12) setvideo(videourl, linktype, imgurl);
    else {
        var swidth = 770;
        var sheight = swidth * 9 / 16;
        var str = '<a href="' + videourl + '" target="_blank"><img width="' + swidth + '" height="' + sheight + '"  src="' + imgurl + '"></a>';
        $(video).html(str);
    }
});

function setvideo(videourl, linktype, imgurl) {
    var video = $("#player2");

    var swidth = 770;
    var sheight = swidth * 9 / 16;

    if (linktype == 12 || linktype == 13) { //优酷、土豆
        var str = '<embed allowFullScreen="true" autostart="true" quality="high" width="' + swidth + '" height="' + sheight + '" align="middle" src="' + videourl + '" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent"></embed>';
        $(video).html(str);
    } else if (linktype == 11) { //腾讯
        var str = '<iframe class="video_iframe" style="z-index: 1;" width="' + swidth + '" height="' + sheight + '"  src="' + videourl + '"  frameborder="0"></iframe>';
        $(video).html(str);
    } else { //打开连接
        window.open(videourl);
    }
}</script>
<script type="text/javascript">
//菜单 修正下拉菜单时一级菜单不生效bug
var dropdowns = $(".dropdown-toggle");
for (var i = 0; i < dropdowns.length; i++) {
    $(dropdowns[i]).click(function() {
        var url = $(this).attr("href");

        if (url != undefined && url != "#") {
            var target = $(this).attr("target");
            if (target == "_blank") window.open(url);
            else location.href = url;
        }
    });
}</script>
<?php $this->endContent(); ?>
