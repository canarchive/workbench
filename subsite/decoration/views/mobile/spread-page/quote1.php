<?php
use yii\helpers\Url;

$this->params['formPosition'] = 'hd-tobj';
$this->params['formPositionName'] = '活动-报价详情';

Yii::$app->params['tdkInfos']['title'] =  '在线报价-修报价-装修预算表_装修到底需要多少钱';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '装修报价频道为您收集整理了大量2017装修报价单，装修预算表，装修到底需要多少钱，让您家装修更省钱！';

?>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/css/471a5-7162.css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/css/3fb95-9008.css" /></head>

<!--第一步：选择房屋类型与城市-->
<div class="ZXmain_one">
    <div class="main_header"></div>
    <p class="main_title">选择房屋类型与城市1/3</p>
    <div class="main_content">
        <div class="con_left con_check">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/9eb9f-3561.png" alt="勾选图片" class="check_img" data-color="green" /></span>
            </div>
            <p class="left_title check_title">新房装修</p></div>
        <div class="con_right con_check">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="right_title check_title">旧房翻新</p></div>
    </div>
    <p class="con_attention error_tip"></p>
    <select class="main_select one_select">
        <option class="select_option">请选择房屋所在城市</option>
        <option class="select_option">北京</option>
        <option class="select_option">上海</option>
        <option class="select_option">石家庄</option>
        <option class="select_option">天津</option>
        <option class="select_option">哈尔滨</option>
        <option class="select_option">西安</option>
        <option class="select_option">武汉</option>
        <option class="select_option">成都</option>
        <option class="select_option">大连</option>
        <option class="select_option">济南</option></select>
    <p class="one_attention error_tip"></p>
    <p class="one_btn main_btn">下一步</p></div>
<!--第二步：新房装修-->
<div class="ZXmain_two">
    <div class="two_header"></div>
    <p class="two_title">选择户型与面积2/3</p>
    <div class="two_content mrB2">
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <span class="head_centerword">一居室</span>
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
            </div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head active">
                    <span class="head_centerword">两居室</span>
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/9eb9f-3561.png" alt="勾选图片" class="check_img" data-color="green" /></span>
                </div>
            </div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <span class="head_centerword">三居室</span>
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
            </div>
        </div>
    </div>
    <div class="two_content mrB2">
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <span class="head_centerword">四居室</span>
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
            </div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <span class="head_centerword">四居室以上</span>
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
            </div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <span class="head_centerword">公寓别墅</span>
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
            </div>
        </div>
    </div>
    <p class="contwo_attention  con_attention error_tip"></p>
    <div class="two_input">
        <input type="tel" class="main_inp two_area" placeholder="请输入房屋面积" maxlength="3" />
        <em class="input_ping">㎡</em></div>
    <p class="two_attention error_tip"></p>
    <div class="two_btn">
        <span class="btn_left">上一步</span>
        <span class="btn_right">下一步</span></div>
</div>
<!--第二步：旧房翻新-->
<div class="ZXmain_three">
    <div class="main_header"></div>
    <p class="main_title">选择户型与面积2/3</p>
    <div class="main_content">
        <div class="con_left con_check">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/9eb9f-3561.png" alt="勾选图片" class="check_img" data-color="green" /></span>
            </div>
            <p class="left_title check_title">整体改造</p></div>
        <div class="con_right con_check">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="right_title check_title">局部翻新</p></div>
    </div>
    <p class="con_attention error_tip"></p>
    <div class="three_input">
        <input type="tel" class="main_inp three_area" placeholder="请输入房屋面积" maxlength="3" />
        <em class="input_ping">㎡</em></div>
    <p class="three_attention error_tip"></p>
    <div class="three_btn">
        <span class="btn_left">上一步</span>
        <span class="btn_right">下一步</span></div>
</div>
<!--第三部：选择装修风格-->
<div class="ZXmain_four">
    <div class="main_header"></div>
    <p class="main_title">选择装修风格3/3</p>
    <div class="main_content">
        <div class="con_left con_check">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/9eb9f-3561.png" alt="勾选图片" class="check_img" data-color="green" /></span>
            </div>
            <p class="left_title check_title">简约风格</p></div>
        <div class="con_right con_check">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="right_title check_title">欧式风格</p></div>
        <div class="con_left con_check con_lefts">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="left_title check_title">美式风格</p></div>
        <div class="con_right con_check  con_rights">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/1bbc9-7042.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="right_title check_title">中式风格</p></div>
    </div>
    <p class="con_attention error_tip"></p>
    <input type="tel" class="main_inp four_phone" placeholder="输入手机号,短信接收报价结果" maxlength="11" />
    <p class="four_attention error_tip"></p>
    <p class="four_btn main_btn">立即计算</p></div>
<!--第4步:计算中-->
<div class="ZXmain_five">
    <p class="five_title">装修就上<?= Yii::$app->params['siteName']; ?></p>
    <p class="five_image"></p>
    <div class="five_jindu">
        <p class="jindu_word">
            <span class="expand dreamweaver"></span>
        </p>
    </div>
    <p class="five_smtitle">计算中...</p></div>
<!--第5步:成功页，计算结果页-->
<div class="ZXmain_six">
    <p class="six_header"></p>
    <div class="biao_feiyong">
        <p class="fei_title">您的装修报价结果</p>
        <p class="fei_word fei_word1">您家装修价格约为：
            <span class="word_quanbao" id="tubatu_totle">0</span>万元</p>
        <p class="fei_word">· 卧室：
            <span class="word_yuan" id="woshi_bj"></span>元</p>
        <p class="fei_word">· 客厅：
            <span class="word_yuan" id="ting_bj"></span>元</p>
        <p class="fei_word">· 厨房：
            <span class="word_yuan" id="chuf_bj"></span>元</p>
        <p class="fei_word">· 卫生间：
            <span class="word_yuan" id="weisj_bj"></span>元</p>
        <p class="fei_word">· 阳台：
            <span class="word_yuan" id="yangt_bj"></span>元</p>
        <p class="fei_word">· 其他：
            <span class="word_yuan" id="qita_bj"></span>元</p>
    </div>
    <p class="biao_attention">*因材料品牌及工程量不同，具体报价结果以量房实测为准</p>
    <!--<p class="six_title"></p>-->
    <p class="six_attention">请注意接听您的专职装修客服的来电
        <!--注意接听<i class="attention_big">400</i>开头的电话哦--></p>
    <p class="six_smtitle">
        <span class="smtitle_line"></span>
        <span class="smtitle_word">服务流程</span></p>
    <div class="six_fuwu">
        <div class="fuwu_son">
            <p class="son_top son_top1"></p>
            <p class="son_bot">装修管家</p>
            <p class="son_bot1">电话咨询</p></div>
        <p class="fuwu_jian"></p>
        <div class="fuwu_son">
            <p class="son_top son_top2"></p>
            <p class="son_bot">预约免费</p>
            <p class="son_bot1">上门量房</p></div>
        <p class="fuwu_jian"></p>
        <div class="fuwu_son fuwu_son_1">
            <p class="son_top son_top3"></p>
            <p class="son_bot">三个工作日</p>
            <p class="son_bot1">出设计图</p></div>
        <p class="fuwu_jian"></p>
        <div class="fuwu_son">
            <p class="son_top son_top4"></p>
            <p class="son_bot">帮你制定</p>
            <p class="son_bot1">预算规划</p></div>
    </div>
    <!--<a href="javascript:void(0);"><div class="six_banner"></div>-->
    </a>
</div>
<!--biao hidden-->
<form class="biao_hidden">
    <input type="hidden" value="" name="biao_houselei" class="biao_houselei" />
    <input type="hidden" value="" name="biao_city" class="biao_city" />
    <input type="hidden" value="" name="biao_huxing" class="biao_huxing" />
    <input type="hidden" value="" name="biao_area" class="biao_area" />
    <input type="hidden" value="" name="biao_fengge" class="biao_fengge" />
    <input type="hidden" value="" name="biao_phone" class="biao_phone" /></form>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/zepto.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/zhuangxiubaojia.js"></script>
<input type="hidden" id="currentCity" value="<?= Yii::$app->params['currentCompany']['name']; ?>" />
<script>
if($(".ZXmain_one").length>0){
    var ht='<p class="a-txt"><?= $this->context->currentSiteInfo['copy']; ?></p>';
    $(".ZXmain_one").append(ht);
}
</script>
