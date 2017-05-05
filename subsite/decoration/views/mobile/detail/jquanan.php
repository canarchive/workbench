<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/j50/css/mobile.css"/>
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/j50/css/iconfont.css">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/j50/quanan/style.css">
    <title></title>
  </head>
  <body>
    <div class="wrap">
      <div class="banner bg"></div>
      <div class="bg1 bg">
        <ul class="form bg">
          <li class="title bg"></li>
          <li class="tipErr tip"></li>
          <form name="formdl" class="formdl">
            <dl><i class="icon iconfont icon-user"></i>
              <input name="name" id="name_1" type="text" placeholder="您的姓名" class="inputCommon"/>
            </dl>
            <dl><i class="icon iconfont icon-tel"></i>
              <input name="phone" id="mobile_1" type="text" pattern="[0-9]" placeholder="您的手机" class="inputCommon"/>
            </dl>
            <dl><i class="icon iconfont icon-build"></i>
              <input name="area" id="area_1" type="text" placeholder="面积" value="" class="inputCommon"/>
            </dl>
            <dl><i class="icon iconfont icon-build"></i>
              <input name="property" id="note_1" type="text" placeholder="您的小区" value="" class="inputCommon"/>
            </dl>
            <a href="javascript:void(0);" onclick="signup('1');" class="btnStyle btn">获取报价</a>
          </form>
        </ul>
        <div class="scroll">
          <div class="lineScroll">
            <div class="scrollBox">
              <div class="scrollItem"><span class="locate">金域国际</span><span class="name">李先生</span><span class="text">获得报价</span><span class="price">241240元</span></div>
              <div class="scrollItem"><span class="locate">润泽公馆</span><span class="name">王小姐</span><span class="text">获得报价</span><span class="price">408561元</span></div>
              <div class="scrollItem"><span class="locate">旭辉御锦</span><span class="name">张女士</span><span class="text">获得报价</span><span class="price">346920元</span></div>
              <div class="scrollItem"><span class="locate">海淀名著</span><span class="name">李先生</span><span class="text">获得报价</span><span class="price">364127元</span></div>
              <div class="scrollItem"><span class="locate">华侨城</span><span class="name">王女士</span><span class="text">获得报价</span><span class="price">425710元</span></div>
              <div class="scrollItem"><span class="locate">中信城</span><span class="name">朱女士</span><span class="text">获得报价</span><span class="price">215700元</span></div>
              <div class="scrollItem"><span class="locate">华贸城</span><span class="name">赵先生</span><span class="text">获得报价</span><span class="price">472160元</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg2 bg">
        <div class="title bg"></div>
        <div class="pic1 bg"></div>
        <div class="pic2 bg"></div>
        <div class="btn-l bms bg heartbeat">立即体验</div>
      </div>
      <div class="bmbox">
        <ul class="form bg">
          <div class="close">X</div>
          <div class="title bg"></div>
          <div class="tip tipErr2">*请填写个人信息
            <form name="formdl2" class="formdl">
              <dl><i class="icon iconfont icon-user"></i>
                <input name="name2" id="name_2" type="text" placeholder="您的姓名" class="inputCommon"/>
              </dl>
              <dl><i class="icon iconfont icon-tel"></i>
                <input name="phone2" id="mobile_2" type="text" pattern="[0-9]" placeholder="您的手机" class="inputCommon"/>
              </dl>
              <dl><i class="icon iconfont icon-build"></i>
                <input name="area" id="area_2" type="text" placeholder="面积" value="" class="inputCommon"/>
              </dl>
              <dl><i class="icon iconfont icon-build"></i>
                <input name="property" id="note_2" type="text" placeholder="您的小区" value="" class="inputCommon"/>
              </dl>
              <a href="javascript:void(0);" onclick="signup('2');" class="btnStyle btn">获取报价</a>
            </form>
          </div>
        </ul>
      </div>
      <div class="get">
        <div class="no1 bms">获取报价</div>
        <div class="no2 bms">免费设计</div>
      </div>
      <div class="blank">   </div>
    </div>
<script type="text/javascript" charset="utf-8" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/j50/js/jquery-2.0.3.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/j50/quanan/m50.js"></script>
    <script>
      $(".bms").click(function () {
        $(".bmbox").show();
        if ($(this).html()) {
          $(".bmbox .btn").html($(this).html());
        }
        else {
          $(".bmbox .btn").html("立即预约");
        }
      });
      var lh = $(".btn-l").width() * .15;
      $('.btn-l').height(lh);
      $('.btn-l').css({"line-height" : lh + "px"});
      $(".bmbox .close").click(function () {
        $(".bmbox").hide();
      });
    </script>
<?= $this->render('_j50-form'); ?>
<input type="hidden" id="position" value="quanan" />
  </body>
</html>
