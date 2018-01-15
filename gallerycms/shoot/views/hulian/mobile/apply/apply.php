<?php
$this->params['noBanner'] = true;
$sortInfos = $this->context->currentSortInfos;
?>
<script>
var signupUrl = '<?= Yii::getAlias('@web'); ?>';
</script>
<link href="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/css/jquery-ui.min.css" rel="stylesheet" />
<!--step1-->
<section class="order_style" style="margin-top: 4rem">
    <p class="order_title">step1:<span>&nbsp;&nbsp; 请选择拍摄类型</span></p>
    <ul class="clearfix">
        <?php foreach ($sortInfos as $sort => $info) { ?>
        <li>
            <a href="javascript:;" onclick="$('#sort').val('<?= $sort; ?>'); ">
                <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/<?= $sort; ?>.jpg" alt="<?= $info['name']; ?>"/>
            </a>
            <h4><?= $info['name']; ?></h4>
        </li>
        <?php } ?>
    </ul>
</section>
<!--step2-->
<section class="order_form" style="margin-top: 4rem">
    <p class="order_title">step2:<span>&nbsp;&nbsp; 请登记您的信息</span></p>
    <div class="order_city">
        选择拍摄城市:
        <select>
            <option>北京</option>
        </select>
        <span>*其他城市暂不支持</span>
    </div>
    <div class="date_time">
        选择拍摄日期:
        <input id="date_time" type="text" placeholder="请选择拍摄日期">
    </div>
    <?php foreach ($sortInfos as $info) { $priceRanges = array_filter(explode(';', $info['price_range'])); ?>
    <!--<ul class="order_price clearfix">
        <p>选择拍摄价格：</p>
        <?php foreach ($priceRanges as $priceRange) { ?>
        <li>
            <span><?= $priceRange; ?></span>
            <input name="price" type="radio" value="<?= $priceRange; ?>"/>
            <label><i></i></label>
        </li>
        <?php } ?>
    </ul>-->
    <?php } ?>
    <div class="order_info">
        <p>
            姓名：
            <input type="text" name="uname" placeholder="您的姓名"/>
        </p>
        <p>
            电话：
            <input type="text" name="phone" placeholder="您的手机号码"/>
        </p>
        <p>
            地址：
            <input type="text" name="address" placeholder="您的地址"/>
        </p>
        <p class="order_message clearfix">
            <span>留言：</span>
            <textarea name="message" placeholder="定制意向留言"></textarea>
        </p>
        <i class="err_tips" style="color: #FF0000;font-style: normal"></i>
        <br/>
        <p class="order_btn">
            <a class="order_pre">上一步</a>
            <a class="order_next" onclick="errCheck($(this))">下一步</a>
        </p>
        <input type="hidden" id="sort" name="sort" value="fashion" />
    </div>
</section>
<!--step3-->
<section class="success_info" style="margin-top: 4rem">
    <p class="order_title">step3:<span>&nbsp;&nbsp; 完成登记</span></p>
    <p class="succ_title">恭喜您预约成功！</p>
    <p class="succ_tips">
        稍后我们会有专员与您联系，请您保持手机畅通。
    </p>
    <p class="succ_wechat">
        <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/weiixn.png" alt=""/>
        <span class="wechat_text">
            <i>扫一扫关注我们</i>
            <i>获取更多动态信息</i>
        </span>
    </p>
    <div class="casetit">
        <div class="case_title">
            <a href="/case/">
                <span class="case_right">你可能会喜欢</span>
            </a>
        </div>
    </div>
    <div class="biaoda" id="rInfos">
    </div>
    <div style="clear:both"></div>
</section>
