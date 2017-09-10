<?php
$sortInfos = $this->context->currentSortInfos;
?>
<link href="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/css/jquery-ui.min.css" rel="stylesheet" />
<script>
window.signupUrl = '<?= Yii::getAlias('@web') . '/signup.html'; ?>';
console.log(window.signupUrl);
</script>
<section class="order_area cf">
    <!--请选择xxxxx：-->
    <div class="step_detail">
        <span class="active">step1</span>
        <p>选择类型，提交拍摄需求</p>
        <span>step2</span>
        <p>沟通拍摄方案，确定拍摄时间</p>
        <span>step3</span>
    </div>
    <!--step1-->
    <div class="order_style cf">
        <ul class="cf">
            <?php foreach ($sortInfos as $sort => $info) { ?>
            <li class="fl">
                <a href="#" onclick="$('#sort').val('<?= $sort; ?>'); ">
                    <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/<?= $sort; ?>.jpg" alt="<?= $info['name']; ?>"/>
                    <p><?= $info['name']; ?></p>
                </a>
            </li>
            <?php } ?>
        </ul>
        <!--<p class="next_step">下一步</p>-->
    </div>
    <!--step2-->

    <form class="order_form">
        <div class="order_city">
            选择拍摄城市：
            <select>
                <option>北京</option>
            </select>
            <span>* 其他城市暂不支持</span>
        </div>
        <div class="order_date">
            选择拍摄日期：
            <input id="date_time" type="text" placeholder="请选择日期"/>
        </div>
       <?php foreach ($sortInfos as $info) { $priceRanges = array_filter(explode(';', $info['price_range'])); ?>
       <!--<ul class="order_price cur c">
          <li>选择拍摄价格：</li>
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
            <p> 姓名： <input type="text"  name="uname" placeholder="您的称呼"/></p>
            <p> 电话： <input type="text"  name="phone" placeholder="您的手机号码"/></p>
            <p> 地址： <input type="text"  name="address" placeholder="您的地址"/></p>
            <p  class="order_message c">
                <span>留言：</span>
                <textarea name="message" placeholder="定制意向留言"></textarea>
            </p>
            <i class="err_tips"></i>
            <br/>
            <a class="order_pre">上一步</a>
            <a class="order_btn" onclick="phoneCheck($(this))">下一步</a>
            <input type="hidden" id="sort" name="sort" value="fashion" />
        </div>
    </form>
    <!--step3-->
    <div class="success_info">
        <div class="cf succ_container">
            <div class="succ_wechat fl">
            <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/weiixn.png" width="132px" height="132px" alt="微信"/>
            <span class="wechat_title">扫一扫关注我们</span>
            <span class="wechat_text">获取更多动态信息</span>
        </div>
            <div class="succ_detail fl">
            <p class="succ_title">恭喜您预约成功！</p>
            <p class="succ_tips">稍后我们会有专员与您联系，请您保持手机畅通。
                <a href="/">返回>></a>
            </p>
        </div>
        </div>
        <div class="ct6 ert">
            <div class="ertcon">
                <span class="p2">你可能会喜欢</span>
                <span class="p1 fs16">MAY LIKE</span>
            </div>
        </div>

        <div class="chinacon swiper-container cf" id="rInfos">
        </div>
    </div>

</section>
