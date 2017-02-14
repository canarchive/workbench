<!-- 弹框 start -->
<div class="poplayer pop-offer-buliding">
    <span class="close js-close">&#10005</span>
    <div class="layout430">
        <div class=" clearfix cGray">
            <p class="offer-buliding-title f22 tc fB cMdGray">生成报价</p>
            <form class="form-offer-buliding-detail">
                <input type="hidden" name="all" value="">
                <input type="hidden" name="zhuwo" value="">
                <input type="hidden" name="ciwo" value="">
                <input type="hidden" name="kewo" value="">
                <input type="hidden" name="keting" value="">
                <input type="hidden" name="chufang" value="">
                <input type="hidden" name="weishengjian" value="">
                <input type="hidden" name="yangtai" value="">
                <p class="f14 tc fB cGray mb10">我们将把方案发到您的手机，方便随时查询</p>
                <p class="iptbox mb20">
                    <input type="text" class="ipt w100" name="phone" value="" data-value="您的手机" maxlength="11" autocomplete="off"></p>
                <p class="iptbox clearfix">
                    <input type="text" name="code" value="" data-value="验证码" maxlength="6" autocomplete="off" class="ipt ipt-code l">
                    <input type="button" name="getcode" value="获取验证码" class="btn-pop btn-cancel getcode f12 l"></p>
                <p class="error-tip"></p>
                <p class="mb20 tc">
                    <button type="submit" id="" class="btn-pop btn-ok w100 radius5">免费获得装修报价</button></p>
            </form>
        </div>
    </div>
</div>
<div class="poplayer pop-countdown1500">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/img/c8a04-9978.png" class="img">
    <div class="clips-box">
        <h5 class="txt-loading">
            <span class="txt">0</span>
            <span class="f16">%</span></h5>
        <div class="clip-box clip-r1"></div>
        <div class="clip-box clip-r2"></div>
        <div class="clip-box clip-l"></div>
    </div>
    <div class="txt-zz">正在为您生成报价</div>
</div>
