<?php
use yii\helpers\Url;
?>
<!--channel begin-->
<div class="wrapper">
    <div class="channel">
    <?php foreach ($houseSortInfos as $sortKey => $sortInfo) { ?>
        <div class="channelOne clearfix" style="padding:0px 0 5px 12px;<?php if ($sortKey == 'color') { echo 'border-bottom: medium none;'; } ?>">
		    <em><?= $sortInfo['name']; ?></em>
            <div style="float:left;">
                <a href="http://search.jmw.com.cn/">不限</a>
                <span style="display:none;" class="red_ll"></span>
                <span style="display:none;" class="red_rr"></span>
            </div>
            <ul class="clearfix" style="width:760px">
				<?php foreach ($sortInfo['values'] as $key => $value) { $tag = $model->createTag($tagInfos, [$sortKey => $key]); ?>
                <li <?php if ($key == $tagInfos[$sortKey]) { echo 'class="a_se"'; } ?>>
					<a href="<?= Url::to(['/house/sample/index', 'page' => 1, 'tag' => $tag]); ?>" data-<?= str_replace('_', '', $sortKey); ?>="<?= $key; ?>" ><?= $value; ?></a>
                    <span style="display:none;" class="red_ll"></span>
                    <span style="display:none;" class="red_rr"></span>
                </li>
				<?php } ?>
            </ul>
        </div>
    <?php } ?>
    </div>
</div>
<script type="text/javascript">
function setURl() {
    var url = "";
    var urlb = "";
    if (url !== '' || urlb !== '') {
        $('.auto_ul').css('height', 'auto');
        $('.zhanKAI').hide();
        $('.shouQI').show();
    }
}
setURl();
$(function() {
    $('zhanKAI').hover(function() {
        $('.shouQI').hide();
    },
    function() {
        $('.shouQI').show();
    });
    $('.zhanKAI').click(function() {
        $('.auto_ul').css('height', 'auto');
        $('.zhanKAI').hide();
        $('.shouQI').show();
    });
    $('.shouQI').click(function() {
        $('.auto_ul').css('height', '24px');
        $('.shouQI').hide();
        $('.zhanKAI').show();
    })
})
</script>
