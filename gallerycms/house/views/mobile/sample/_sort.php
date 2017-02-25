<?php
use yii\helpers\Url;
foreach ($houseSortInfos as $sortKey => $sortInfo) {
    $titles[$sortKey] = !empty($tagInfos[$sortKey]) ? $sortInfo['values'][$tagInfos[$sortKy]] : $sortInfo['name'];
}
//print_r($titles);exit();
?>
<!-- 选择行业与投资金额 start -->
<div class="J-tend">
    <style type="text/css">.tend-1{ overflow:hidden; } .tend_li7 { position: absolute; background: #e0e0e0; width: 1px; height: 20px; left: 33%; top: 30%; } .tend-1 li a span{ text-indent:5px; } .tend-1 li a span i{ background:none;} .tend-1 li i.sanJiao{ -webkit-transition: all 0.1s ease 0s; transition: all 0.1s ease 0s; } #J-captain-4 .captain-1{ width:100%; } #J-captain-4 .captain-1 li{ width:50%; box-sizing:border-box; float:left; } #J-captain-4 .captain-1 li a span{ background:none;}</style>
    <ul class="tend-1 clearfix" id="hot">
        <li class="tend_li1" id="tend_li1" style="width:25%;">
            <a href="javascript:;" onclick="change(this)">
            <span><?= $titles['house_type']; ?><i class="sanJiao"></i></span>
            </a>
        </li>
        <li class="tend_li3" style="left:26%;"></li>
        <li class="tend_li2" id="tend_li2" style="width:25%;">
            <a href="javascript:;">
                <span><?= $titles['style']; ?><i class="sanJiao"></i></span>
            </a>
        </li>
        <li class="tend_li5" style="right:24%;"></li>
        <li class="tend_li4" id="tend_li4" style="width:25%;">
            <a href="javascript:;">
                <span><?= $titles['area']; ?><i class="sanJiao"></i></span>
            </a>
        </li>
        <li class="tend_li7" style="left:51%;"></li>
        <li class="tend_li6" id="tend_li6" style="width:25%;">
            <a>
                <span><?= $titles['color']; ?><i class="sanJiao"></i></span>
            </a>
        </li>
    </ul>
    <!-- 加盟行业下拉 -->
    <?php $i = 1; foreach ($houseSortInfos as $sortKey => $sortInfo) { ?>
    <div class="J-captain" id="J-captain-<?= $i; ?>">
        <div class="captain_cont clearfix">
            <ul class="captain-1" id="captain-<?= $i; ?>">
				<?php foreach ($sortInfo['values'] as $key => $value) { $tag = $model->createTag($tagInfos, [$sortKey => $key]); ?>
                <li id="circle_2">
                    <a href="<?= Url::to(['/house/sample/index', 'page' => 1, 'tag' => $tag]); ?>" title="<?= $value; ?>"><span><?= $value; ?></span></a>
                </li>
                <?php } ?>
            </ul>
            <!--<div class="fl J-stick">
                <ul class="stick-1" id="stick-1"></ul>
            </div>-->
        </div>
    </div>
    <?php $i++; } ?>
</div>
<script>
function getChild(id) {
    var money = "";
    var people = "";
    var area = "";
    $.ajax({
        type: "get",
        url: "http://m.jmw.com.cn/so/m_secondary.php",
        data: 'id=' + id + '&money=' + money + '&people=' + people + '&area=' + area,
        dataType: 'html',
        success: function(html) {
            $("#stick-1").html(html);
        }
    });
    }</script>
