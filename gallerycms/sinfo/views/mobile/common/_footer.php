<footer>
    <ul>
        <li class="" id="yptel" clickCount="true" clickAdd="dhzixun"><em></em>电话咨询</li>
        <li>
            <a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?= Yii::$app->params['siteQQ']; ?>&site=qq&menu=yes" style="color:#fff;"><em></em>售前咨询</a>
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
