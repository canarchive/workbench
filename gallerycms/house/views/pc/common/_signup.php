<?php
$formType = isset($type) ? $type : 'index';
$positionName = isset($positionName) ? $positionName : '';
?>
<!--首页底部浮动报名条-->
<div class="appoinment-bottom show" style="left: -150%;">
    <div class="page-container">
        <a href="javascript:void(0);">
			<img class="logo" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/appoinment-bottom-logo.png">
        </a>
        <div class="content-box">
            <div class="apply-form">
                <p class="tip">已有<em class="ifocus"><?php echo '32382'; ?> </em>位业主 成功在线预约装修服务</p>
				<input name="apply_type" type="hidden" value="<?= $formType; ?>">
				<input name="position_name" type="hidden" value="<?= $positionName; ?>">
                <div class="part_left">
                    <input name="name" type="text" placeholder="您的姓名">
					<input name="phone" type="text" placeholder="手机号码">
                </div>
                <div class="part_right">
                    <div class="squatre">
                        <input name="size" type="text" placeholder="建筑面积">
						<span>㎡</span>
                    </div>
                    <div class="select-group clearfix js-region-select-group">
                        <select class="js-province" name="province" id="province">
							<option value="">省/市</option>
                        </select>
                        <select class="js-city" name="city" id="city">
							<option value="">市/地区</option>
                        </select>
                    </div>
                </div>
				<input name="applyBtn" type="button" value="">
            </div>
            <div class="qrcode-box">
                <p class="faultlayout">&nbsp;</p>
				<img class="ewm" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg">
				<p class="desc">关注官方微信号</p>
            </div>
        </div>
        <div class="close_button"><a href="javascript:;">×</a></div>
    </div>
</div>
<!--缩略版-->
<div class="appoinment-bottom-collapse">
    <a href="javascript:;">
		<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/appoinment-bottom-collapse.png">
    </a>
</div>
