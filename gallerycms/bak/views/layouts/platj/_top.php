<div class="topToolbar_box">
    <div class="topToolbar_box">
        <div class="topToolbar" id="estDiv">
            <ul class="siteLink">
                <li>
                    <i class="ico9"></i>
                    <a href="/" target="_blank">首页</a></li>
                <!--<li class="ShowMore" id="ShowMore1">
                    <i class="ico10"></i>
                    <a href="javascript:;" target="_self">浏览记录</a>
                </li>-->
                <li class="ShowMore" id="ShowMore2">
                    <i class="ico11"></i>
                    <a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>">找商家</a></li>
            </ul>
            <div class="phone_kuang" style="display:none;background:rgba(0,0,0,.4); padding:6px 0;width:384px; border-radius:3px; position:absolute; top:30px; left:415px;">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/erweima_02_12.png" alt="" style=" margin-left:6px; cursor:pointer;"></div>
            <div class="loginReg">
                <span>欢迎来到<?= Yii::$app->params['siteName']; ?>! </span>
            </div>
        </div>
    </div>
</div>
