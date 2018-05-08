<?php
use yii\helpers\Url;

$cssFiles = [
    'f0d70-4173', '0729d-1303',
];
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'spread/house/collect/m/css/']);

Yii::$app->params['tdkInfos']['title'] =  '装修报价-装修预算表_装修到底需要多少钱';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '装修报价频道为您收集整理了大量2018装修报价单，装修预算表，装修到底需要多少钱，让您家装修更省钱！';
?>
<!--第一步：选择房屋类型与城市-->
<div class="ZXmain_one">
    <div class="main_header">
        <p class="header-word">免费获取装修报价</p></div>
    <p class="main_title">选择房屋类型与城市1/3</p>
    <div class="main_content">
        <div class="con_left con_check">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/37b2c-9244.png" alt="勾选图片" class="check_img" data-color="green" /></span>
            </div>
            <p class="left_title check_title">新房装修</p></div>
        <div class="con_right con_check">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="right_title check_title">旧房翻新</p></div>
    </div>
    <p class="con_attention error_tip"></p>
    <select class="main_select one_select">
        <option class="select_option">请选择房屋所在城市</option>
        <option class="select_option">北京</option>
        <option class="select_option">深圳</option>
        <option class="select_option">太原</option>
        <option class="select_option">上海</option>
        <option class="select_option">长沙</option>
        <option class="select_option">兰州</option>
        <option class="select_option">石家庄</option>
        <option class="select_option">天津</option>
        <option class="select_option">哈尔滨</option>
        <option class="select_option">西安</option>
        <option class="select_option">武汉</option>
        <option class="select_option">成都</option>
        <option class="select_option">大连</option>
        <option class="select_option">济南</option>
        <option class="select_option">其它</option></select>
    <p class="one_attention error_tip"></p>
    <p class="one_btn main_btn">下一步</p>
    <div class="foot">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/b073f-8897.jpg" class="foot-img" /></div>
</div>
<!--第二步：新房装修-->
<div class="ZXmain_two">
    <div class="main_header">
        <p class="header-word">免费获取装修报价</p></div>
    <p class="two_title">选择户型与面积2/3</p>
    <div class="two_content mrB2">
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/23851-9197.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
                <p class="con-word">一室一厅</p></div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head active">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/d28ef-8492.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/37b2c-9244.png" alt="勾选图片" class="check_img" data-color="green" /></span>
                </div>
                <p class="con-word">一室两厅</p></div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/56d75-7923.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
                <p class="con-word">两室一厅</p></div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/e1ca8-9755.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
                <p class="con-word">两室两厅</p></div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/f9b71-2901.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
                <p class="con-word">三室一厅</p></div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/58b90-2971.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
                <p class="con-word">三室两厅</p></div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/4b04b-8080.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
                <p class="con-word">四室一厅</p></div>
        </div>
        <div class="con_fat">
            <div class="con_left con_check">
                <div class="left_head check_head">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/45659-5572.jpg" class="head-img" />
                    <span class="head_check">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
                </div>
                <p class="con-word">四室两厅</p></div>
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
    <div class="foot">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/b073f-8897.jpg" class="foot-img" /></div>
</div>
<!--第二步：旧房翻新-->
<div class="ZXmain_three">
    <div class="main_header">
        <p class="header-word">免费获取装修报价</p></div>
    <p class="main_title">选择户型与面积2/3</p>
    <div class="main_content">
        <div class="con_left con_check">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/37b2c-9244.png" alt="勾选图片" class="check_img" data-color="green" /></span>
            </div>
            <p class="left_title check_title">整体改造</p></div>
        <div class="con_right con_check">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
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
    <div class="foot">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/b073f-8897.jpg" class="foot-img" /></div>
</div>
<!--第三部：选择装修风格-->
<div class="ZXmain_four">
    <div class="main_header">
        <p class="header-word">免费获取装修报价</p></div>
    <p class="main_title">选择装修风格3/3</p>
    <div class="main_content">
        <div class="con_left con_check">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/37b2c-9244.png" alt="勾选图片" class="check_img" data-color="green" /></span>
            </div>
            <p class="left_title check_title">简约风格</p></div>
        <div class="con_right con_check">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="right_title check_title">欧式风格</p></div>
        <div class="con_left con_check con_lefts">
            <div class="left_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="left_title check_title">美式风格</p></div>
        <div class="con_right con_check  con_rights">
            <div class="right_head check_head">
                <span class="head_check">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/8312c-2822.png" alt="勾选图片" class="check_img" data-color="gray" /></span>
            </div>
            <p class="right_title check_title">中式风格</p></div>
    </div>
    <p class="con_attention error_tip"></p>
    <input type="tel" class="main_inp four_phone" placeholder="输入手机号,短信接收报价结果" maxlength="11" />
    <p class="four_attention error_tip"></p>
    <p class="four_btn main_btn">立即计算</p>
    <div class="foot">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/b073f-8897.jpg" class="foot-img" /></div>
</div>
<!--第4步:计算中-->
<div class="ZXmain_five">
    <p class="five_title">装修就上一起装修网</p>
    <p class="five_image"></p>
    <div class="five_jindu">
        <p class="jindu_word">
            <span class="expand dreamweaver"></span>
        </p>
    </div>
    <p class="five_smtitle">计算中...</p></div>
<!--第5步:成功页，计算结果页-->
<div class="ZXmain_six">
    <p class="six_header">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/6097e-9938.jpg" class="six_header-img" />
        <!--<span>一不小心就获得一份<i>增值服务</i></span>-->
    </p>
    <!--<p class="six_title"></p>-->
    <div class="six_fuwu">
        <p class="fuwu_title">服务流程</p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/85436-7998.gif" alt="服务流程" class="fuwu-img" />
        <ul class="">
            <li>装修管家
                <br>电话咨询</li>
            <li>预约免费
                <br>上门量房</li>
            <li>三个工作日
                <br>出设计图</li>
            <li>帮你制定
                <br>预算规划</li></ul>
        <p class="phone-attention">注意接听装修顾问的电话哦</p></div>
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
    <!--<a href="javascript: void(0);">
        <div class="six_banner">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/d9bf3-9891.jpg" />
        </div>
    </a>-->
</div>
<!--biao hidden-->
<form class="biao_hidden">
    <input type="hidden" value="" name="biao_houselei" class="biao_houselei" />
    <input type="hidden" value="" name="biao_city" class="biao_city" />
    <input type="hidden" value="" name="biao_huxing" class="biao_huxing" />
    <input type="hidden" value="" name="biao_area" class="biao_area" />
    <input type="hidden" value="" name="biao_fengge" class="biao_fengge" />
    <input type="hidden" value="" name="biao_phone" class="biao_phone" /></form>
<a href="javascript:;" class="a-txt" style="text-align: center; display: block;">
	<?php if (in_array($this->context->channelCode, ['zht', 'bdztc'])) { ?>
	<?= $this->context->currentSiteInfo['copy']; ?><br>
	<?php } ?>
    <?= $this->context->currentSiteInfo['icp']; ?>
</a>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/zepto.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/zxbj.js"></script>
