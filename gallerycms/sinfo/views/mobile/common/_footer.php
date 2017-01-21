<footer>
    <ul>
        <li class="" id="yptel" clickCount="true" clickAdd="dhzixun"><em></em>电话咨询</li>
        <li>
        <?php if ($this->context->isMobile) { ?>
        <a rel="nofollow" href="mqqwpa://im/chat?chat_type=wpa&uin=<?= Yii::$app->params['siteQQ']; ?>&version=1&src_type=web&web_src=weinaya.com" target="_blank" class="button radius small" title="售前咨询">售前咨询</a>
        <?php } else { ?>
        <a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?= Yii::$app->params['siteQQ']; ?>&site=qq&menu=yes" target="_blank" class="button radius small" title="咨询客服">售前咨询</a>
        <?php } ?>
        </li>
        <li class="last"><em></em><a href="/sp-register.html" title="免费体验">免费体验</a></li>
    </ul>
    <script>$("#yptel").click(function(j) {
            form.tqCount(this);
            location.href = "tel:" + '<?= Yii::$app->params['siteHotline']; ?>';
            j.stopPropagation();
        });</script>
</footer>
<input name="areacode" id="area_code" type="hidden" value="" />
<div class="scrTop"><span></span></div>
