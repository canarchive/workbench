<?php
$quoteInfos = $this->context->mDatas['quoteInfos'];
?>
<div class="zero_step">
    <h2 id="red_title"><?= $this->context->currentCityName . '装修报价'; ?></h2>
    <div class="venture" id="windVane_list">
        <ul class="venture-list">
            <?php $i = 1; foreach ($quoteInfos as $info) { ?>
            <li>
                <p class="p-list1">
                    <span class="attb"><a href="<?= "/{$info['city_code']}/quoteshow_{$info['code']}.html"; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?></a></span>
                </p>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<script>var scrtime;
    $("#windVane_list").hover(function() {
        clearInterval(scrtime);
    },
    function() {
        scrtime = setInterval(function() {
            var news = $("#windVane_list ul");
            var liHeight = news.find("li:last").height();
            news.animate({
                marginTop: liHeight + 10 + "px"
            },
            800,
            function() {
                news.find("li:last").prependTo(news); news.find("li:first").hide();
                news.css({
                    marginTop: 0
                });
                news.find("li:first").fadeIn(500);
            });
        },
        3000);
    }).trigger("mouseleave");</script>
<style type="text/css">.zero_step{ margin-top: 10px;} .venture{ border:3px solid #ededed; border-top:none; padding: 16px 14px 8px; height: 212px; overflow: hidden;} .venture-list li{ border-bottom: 1px dashed #e1e1e1; padding-top: 11px; padding-bottom: 15px; height: 4px;} .p-list1{ color: #666; line-height: 22px; font-size: 14px; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/95199-2768.png) no-repeat 0 3px; padding-left: 28px;} .p-list1 .attb a{ color: #d90000;} .p-list1 .attb a:hover{ text-decoration: underline;} .p-list2{ font-size: 14px; color: #333; height: 22px; line-height: 22px; overflow: hidden;} .p-list2 a{ color: #d90000;} .p-list2 a:hover{ text-decoration: underline;}</style>
<script>$(function() {
        // 加盟热点2015.5.5-最后一个li没有border-bottom
        $(".venture-list li:last").css("border-bottom", "none");
    })</script>
