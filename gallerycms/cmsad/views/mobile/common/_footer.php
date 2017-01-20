<footer>
    <ul>
        <li class="" id="yptel" clickCount="true" clickAdd="dhzixun"><em></em>电话咨询</li>
        <li>
            <a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=1298115377&site=qq&menu=yes" style="color:#fff;" target="_blank"><em></em>售前咨询</a>
        </li>
        <li class="last"><em></em>免费报价</li>
    </ul>
    <script>$("#yptel").click(function(j) {
            form.tqCount(this);
            location.href = "tel:" + '<?= Yii::$app->params['siteHotline']; ?>';
            j.stopPropagation();
        });</script>
</footer>
<input name="areacode" id="area_code" type="hidden" value="" />
<div class="scrTop"><span></span></div>
