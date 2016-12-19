<?php
use yii\helpers\Url;
?>
<div class="banner padTop20 clearfix">
    <!--立即预约表单-->
    <div class="appointment-form fn-left">
        <div class="title-tab clearfix">
            <a class="on" href="javascript:;">免费量房</a>
            <a href="javascript:;">免费设计</a>
			<a href="javascript:;">免费报价</a>
        </div>
        <div class="body">
            <div class="title-tip padBtm20">
                <p class="show">免费3家装修公司上门量房，布局规划</p>
                <p>免费获取3家设计方案 空间合理布局</p>
                <p>获取3套装修报价，预算立省40%</p>
            </div>
            <div class="apply-form">
                <input name="apply_type" type="hidden" value="index-liangfang" />
                <input name="name" type="text" placeholder="您的姓名" class="inputEl" />
                <input name="phone" type="text" placeholder="手机号码" class="inputEl" />
                <div class="select-group clearfix js-region-select-group">
                    <select class="js-province" name="province" id="province">
						<option value="">省/市</option>
                    </select>
                    <select class="js-city" name="city" id="city">
						<option value="">市/地区</option>
                    </select>
                </div>
				<input name="applyBtn" type="button" value="我要预约" />
            </div>
            <p class="apply-tip" style="text-align: center;">
			    <span>已为<em class="ifocus">32382</em>位业主提供装修服务</span>
			    <span class="hide">已为<em class="ifocus">32382</em>位业主提供装修服务</span>
			    <span class="hide">已为<em class="ifocus">32382</em>位业主提供装修服务</span>
            </p>
        </div>
    </div>
    <!--轮播-->
    <div class="carousel fn-left" id="tbanner">
        <!--轮播图片-->
        <div class="center-bar">
            <ul class="bxslider">
                <li>
				    <a href="<?= Url::to(['/house/feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/banner_al.jpg" alt="装修经验">
                    </a>
                </li>
                <li>
				    <a href="<?= Url::to(['/house/decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/banner_kpzx2.jpg" alt="靠谱装修季">
                    </a>
                </li>
                <li>
				    <a href="<?= Url::to(['/house/feature/index', 'view' => 'baojia', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/banner1.jpg" alt="一分钟找到靠谱装修公司">
                    </a>
                </li>
            </ul>
            <span class="bx-prev"></span>
            <span class="bx-next"></span>
        </div>
    </div>
    <!--免费上门验房、免费设计、免费报价-->
    <div class="advert">
	    <a class="item" href="<?= Url::to(['/house/feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
            <p class="padTop25">免费找装修公司</p>
            <p class="padTop10">3家装修公司PK<br />比比谁家服务好</p>
        </a>
		<a class="item " href="<?= Url::to(['/house/feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
            <p class="padTop25">免费3套设计方案</p>
			<p class="padTop10">3套设计方案比较<br />合理规范空间</p>
        </a>
		<a class="item last" href="<?= Url::to(['/house/feature/index', 'view' => 'baojia', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
            <p class="padTop25">在线报价器</p>
			<p class="padTop10">10秒解决预算难题<br />装修省40%</p>
        </a>
    </div>
</div>
