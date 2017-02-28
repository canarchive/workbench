<?php
use yii\helpers\StringHelper;
$askInfos = $this->context->mDatas['askInfos'];
?>
<?php //echo $this->render('_right-ad'); ?>
<div class="first_step">
    <h2 id="red_title">创业播报</h2>
    <div class="real_time" id="real">
        <div class="mainBox" id="real1">
            <!-- <marquee behavior="alternate" direction="up" onmouseover="this.stop();" onmouseout="this.start();" style="height:403px"> -->
            <?php $i = 1; foreach ($askInfos as $info) { $elemClass = $i <= 3 ? 'red' : 'gray'; ?>
            <div class='J-settle'>
                <a class='settle_a' href="<?= "/ask_show_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>"><?= StringHelper::truncate($info['name'], 10, '...'); ?></a>
            </div>
            <?php } ?>
        </div>
        <div id="real2"></div>
    </div>
</div>
<script>
$(function() {
    $(".J-settle:last").css("border-bottom", "none");
});</script>
<script language="javascript">
/*var speed = 30; real2.innerHTML = real1.innerHTML
function Marquee() {
    if (real2.offsetTop - real.scrollTop <= 0) real.scrollTop -= real1.offsetHeight
    else {
        real.scrollTop++
    }
}
var MyMar = setInterval(Marquee, speed); 
real.onmouseover = function() {
    clearInterval(MyMar)
}
real.onmouseout = function() {
    MyMar = setInterval(Marquee, speed)
}*/
</script>
