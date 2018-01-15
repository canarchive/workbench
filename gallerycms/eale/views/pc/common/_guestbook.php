<?php
use yii\helpers\Html;
?>
<div class="row">
    <img class="img-responsive join2 title-mar" src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/guestbook.jpg" alt="留言板" />
</div>
<div class="row liuyan">
    <form method="post" action="/guestbook.html" id="form1">
        <div id="MessageBoard1"></div>
        <input type="hidden" name="site_code" id="site_code" value="<?= $this->context->siteCode; ?>" />
        <input type="hidden" name="page" id="page" value="<?= $this->context->currentPage; ?>" />
        <div class="col-sm-12 col-md-7 col-xs-12 left">
            <div class="input-group">
                <span class="input-group-addon">姓名：</span>
                <input name="name" id="name" type="name" class="form-control" aria-describedby="MessageBoard2_userName" />
                <span class="desc">*请填写您的真实姓名</span></div>
            <div class="input-group">
                <span class="input-group-addon">电话：</span>
                <input name="mobile" id="mobile" type="dh" class="form-control" aria-describedby="telephone" />
                <span class="desc">*请填写您的手机号或者座机号</span></div>
            <div class="input-group">
                <span class="input-group-addon">回访：</span>
                <div class="form-control form-control1">
                    <select name="callback" id="callback" class="input">
                        <option value="0">&#160;&#160; 随时</option>
                        <option value="1">上班时间</option>
                        <option value="2">下班时间</option></select>
                </div>
                <span class="desc">请选择回访时间</span></div>
            <div class="input-group">
                <span class="input-group-addon">邮箱：</span>
                <input name="email" id="email" type="text" class="form-control" aria-describedby="eMail" />
                <span class="desc">便于查收电子邮件</span></div>
            <div class="input-group">
                <span class="input-group-addon">地址：</span>
                <input name="address" id="address" type="text" class="form-control" aria-describedby="address" />
                <span class="desc">方便为您邮寄资料</span></div>
            <div class="input-group">
                <span class="input-group-addon qq">QQ：</span>
                <input name="qq" id="qq" type="text" class="form-control" aria-describedby="char1" />
                <span class="desc">方便线上第一时间联系上您</span></div>
        </div>
        <div class="col-sm-12 col-md-5 col-xs-12 right">
            <span id="basic-addon6">留言板：</span>
            <textarea name="message" id="message" cols="20" rows="5" class="form-control"></textarea>
            <a class="btn" href="javascript:void(0)" onclick="UpMessageBoard();" role="button" title="提交留言">&nbsp&nbsp 提交留言 &nbsp&nbsp</a></div>
    </form>
</div>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
