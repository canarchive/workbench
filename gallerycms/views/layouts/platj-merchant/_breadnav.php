<?php
$info = $this->context->mDatas['info'];
?>
<div class="home clearfix">
    <div class="home_left fl">
        <ul class="clearfix">
            <li class="current3">
                <a href="/" title="<?= Yii::$app->params['siteNameBase']; ?>">首页</a></li>
            <li><span></span></li>
            <li>
                <a title="<?= $this->context->currentCityName; ?>装修公司" href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>"></a><?= $this->context->currentCityName; ?>装修公司</li>
            <li><span></span></li>
            <li>
                <a href="<?= $info['infoUrl']; ?>"><strong><?= $info['name']; ?></strong></a></li>
        </ul>
    </div>
    <div class="home_right fr clearfix">
        <ul class="clearfix fl">
            <!--<li>实景案例：
                <u><?= $info['num_realcase']; ?></u>个</li>
            <li><span></span></li>
            <li>直播工地：
                <u><?= $info['num_working']; ?></u>个</li>
            <li><span></span></li>
            <li>设计师：
                <u><?= $info['num_designer']; ?></u>个</li>
            <li><span></span></li>
            <li>服务业主数：
                <u><?= $info['num_owner']; ?></u>个</li>
            <li><span></span></li>-->
            <li>评论数：
                <u><?= $info['num_comment']; ?></u>条</li>
            <li><span></span></li>
            <li>好评率：
                <u><?= $info['score']; ?></u>%</li>
            </li>
        </ul>
        <script type="text/javascript">/*function showPhoneCode(){
    $(".w-erwei").show();
}*/
            $(document).ready(function() {
                $(".fr .phone").mouseover(function() {
                    $(".w-erwei").show();
                });
                $(".w-erwei").mouseover(function() {
                    $(".w-erwei").show();
                });
                $(".fr .phone").mouseout(function() {
                    $(".w-erwei").hide();
                });
                $(".w-erwei").mouseout(function() {
                    $(".w-erwei").hide();
                });
            })</script>
        <a class="fr phone" href="javascript:;" style="position: relative;z-index: 100;">朋友帮我看项目
            <div style="position:absolute;z-index:500;right:-25px;background:#fff;border:2px solid #d5d5d5;display: none;padding: 10px;top:23px;" class="w-erwei">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4acd8-7348.png">
                <img style="margin-left:6px;" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c7753-5805.png" />
            </div>
        </a>
    </div>
</div>
