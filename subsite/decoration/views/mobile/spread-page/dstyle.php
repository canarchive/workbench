<?php

$this->params['formPosition'] = 'dstyle';
$this->params['formPositionName'] = '活动-设计风格';

Yii::$app->params['tdkInfos']['title'] = '装修免费设计，免费量房';
Yii::$app->params['tdkInfos']['description'] = '装修设计,量房';
Yii::$app->params['tdkInfos']['keyword'] = '装修设计量房';
?>
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/f9122-6568.ico" type="image/x-icon">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/css/4af18-4005.css" /></head>

<div class="main">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/41ebf-1170.png" class="mannertit" />
    <div class="conter">
        <p class="conter-tit">
            <span>选择您的户型</span>
            <b>1</b>/4</p>
        <ul>
            <li class="imgcl">
                <span>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/704c8-2829.png" data-url="images/one.png" data-active="images/oneimg.png" /></span>
                <span>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/22f73-1467.png" data-url="images/two.png" data-active="images/twoimg.png" /></span>
                <span>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/60ddb-7908.png" data-url="images/three.png" data-active="images/threeimg.png" /></span>
                <span>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/42b5b-7710.png" data-url="images/four.png" data-active="images/fourimg.png" /></span>
            </li>
            <li>
                <p class="ptit">
                    <span data-sex="男">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/a5b37-9885.png" data-url="images/men.png" data-active="images/menimg.png" /></span>
                    <span data-sex="女">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/65fbe-7142.png" data-url="images/woman.png" data-active="images/womanimg.png" /></span>
                </p>
                <p class="age">
                    <span>35岁以下</span>
                    <span>35岁-45岁</span>
                    <span>45岁以上</span></p>
            </li>
            <li class="mode">
                <p data-type="jo">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/6047b-3033.jpg" />
                    <span>简欧</span></p>
                <p data-type="jy">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/83b27-1030.jpg" />
                    <span>现代简约</span></p>
                <p data-type="zs">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/84ce7-4863.jpg" />
                    <span>新中式</span></p>
                <p data-type="ms">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/ec01b-3047.jpg" />
                    <span>新美式</span></p>
            </li>
            <li class="formbox">
                <form>
                    <select name="city" class="inp">
                        <option value="北京">北京</option>
                        <option value="上海">上海</option>
                        <option value="深圳">深圳</option>
                        <option value="太原">太原</option>
                        <option value="天津">天津</option>
                        <option value="哈尔滨">哈尔滨</option>
                        <option value="西安">西安</option>
                        <option value="武汉">武汉</option>
                        <option value="成都">成都</option>
                        <option value="大连">大连</option>
                        <option value="济南">济南</option>
                        <option value="石家庄">石家庄</option>
                        <option value="其他城市">其他城市</option></select>
                    <b>
                    </b>
                    <input type="tel" class="inp" maxlength="11" placeholder="请输入手机号，测试结果发送至手机" value="" name="phone" /></form>
            </li>
            <p class="retreat">上一步</p>
            <p class="sig-up">完成</p></ul>
    </div>
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/js/zepto.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/js/manner.js"></script>
