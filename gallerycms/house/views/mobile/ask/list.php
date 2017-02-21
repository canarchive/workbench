<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['dfc20-7370', '9c07e-2206'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
$this->params['jsStr'] = $this->render('_js-header');//, ['jsFiles' => $jsFiles]);
?>
<?= $this->render('_header'); ?>
<?= $this->render('_js-list'); ?>
<section class="zxask-list-wrap">
    <?= $this->render('_search'); ?>
    <?= $this->render('_sort'); ?>
    <div id="overlay"></div>
    <div class="zxask-main-list">
        <ul class="zxask-ask-list">
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/7a8b9-9481.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="落花盈满袖"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友落花盈满袖问:</p>
                    <span class="zxask-ask-time">4天前</span>
                    <a class="zxask-ask-title" href="/ask/k6396301.html">哈尔滨哪里有榻榻米定做？</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6396301.html">3个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/9db2b-3120.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="华高丽"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友华高丽问:</p>
                    <span class="zxask-ask-time">6天前</span>
                    <a class="zxask-ask-title" href="/ask/k6392352.html">房间玄关在哪里谁可以说说</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6392352.html">3个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/ae8a9-5989.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="长风破浪_0456"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友长风破浪_0456问:</p>
                    <span class="zxask-ask-time">9天前</span>
                    <a class="zxask-ask-title" href="/ask/k6391042.html">附图 入户门对厕所门应该怎么改？ 做隔断的话放在哪里合适</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6391042.html">1个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/631cc-6250.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="彭赫然"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友彭赫然问:</p>
                    <span class="zxask-ask-time">16天前</span>
                    <a class="zxask-ask-title" href="/ask/k6341164.html">问下玄关设计需要注意什么</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6341164.html">4个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/f1ffe-1352.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="卢思远"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友卢思远问:</p>
                    <span class="zxask-ask-time">18天前</span>
                    <a class="zxask-ask-title" href="/ask/k6318708.html">玄关摆放什么饰品谁可以告诉我</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6318708.html">3个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/e4474-6617.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="戴德水"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友戴德水问:</p>
                    <span class="zxask-ask-time">19天前</span>
                    <a class="zxask-ask-title" href="/ask/k6305747.html">玄关门多少钱谁可以告诉我</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6305747.html">3个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/ef6d8-9769.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="鲁光华"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友鲁光华问:</p>
                    <span class="zxask-ask-time">21天前</span>
                    <a class="zxask-ask-title" href="/ask/k6298255.html">玄关设计大全谁可以告诉我</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6298255.html">3个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/f1d68-4975.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="李沛文"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友李沛文问:</p>
                    <span class="zxask-ask-time">21天前</span>
                    <a class="zxask-ask-title" href="/ask/k6294202.html">玄关壁纸怎么选谁可以告诉我</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6294202.html">4个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/68f2c-7958.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="湛奇志"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友湛奇志问:</p>
                    <span class="zxask-ask-time">21天前</span>
                    <a class="zxask-ask-title" href="/ask/k6299066.html">求大神解答玄关多长</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6299066.html">3个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/e801b-8886.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="吴安琪"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友吴安琪问:</p>
                    <span class="zxask-ask-time">21天前</span>
                    <a class="zxask-ask-title" href="/ask/k6292707.html">各位谁了解装修玄关怎么做</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6292707.html">3个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/68536-1265.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="谢波涛"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友谢波涛问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5703327.html">玄关软装可以怎么设计？讲一下</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5703327.html">1个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/68536-1265.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="谢波涛"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友谢波涛问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5822666.html" rel='nofollow'>请各位给个建议？玄关问题?耐用吗？</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5822666.html" rel='nofollow'>0个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/04fbb-5314.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="伍丹彤"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友伍丹彤问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5703328.html" rel='nofollow'>玄关设置的目的？有什么特征？</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5703328.html" rel='nofollow'>0个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/1bb4d-4280.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="蒋莉莉"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友蒋莉莉问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k6243299.html" rel='nofollow'>如何进行玄关装潢？</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6243299.html" rel='nofollow'>0个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/438ad-3191.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="魏嘉纳"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友魏嘉纳问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5710081.html" rel='nofollow'>怎样设计漂亮的玄关？懂设计来帮忙说说</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5710081.html" rel='nofollow'>0个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/f9514-9251.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="袁嘉誉"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友袁嘉誉问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5744657.html">请问谁比较清楚玄关处挂什么画好</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5744657.html">1个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/dd912-6439.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="华斌斌"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友华斌斌问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5744629.html" rel='nofollow'>谁能说说入户门玄关设计要怎么做？</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5744629.html" rel='nofollow'>0个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/4024e-4957.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="凌飞翼"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友凌飞翼问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5822628.html" rel='nofollow'>中式玄关花格怎么设计装修？谁知道阿</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5822628.html" rel='nofollow'>0个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/37c58-5067.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="邱思嘉"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友邱思嘉问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k5864641.html" rel='nofollow'>现代玄关的造型如何设计顶级好？要考虑啥不好的注意事项？</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k5864641.html" rel='nofollow'>0个回答</a></div>
            </li>
            <li class="zxask-ask-list-item">
                <div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/cab29-6179.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="祝米雪"></div>
                <div class="zxask-ask-list-right">
                    <p class="zxask-ask-user">网友祝米雪问:</p>
                    <span class="zxask-ask-time">22天前</span>
                    <a class="zxask-ask-title" href="/ask/k6048317.html" rel='nofollow'>入户是客厅需要玄关吗？有什么要求的吗？</a>
                    <a class="zxask-ask-type" href="/ask/more-h2s3i5">玄关</a>
                    <a class="zxask-ask-num" href="/ask/k6048317.html" rel='nofollow'>0个回答</a></div>
            </li>
        </ul>
    </div>
    <div data-role="widget-pagination">
        <a class="widget-pagination-disable">上一页</a>
        <div>
            <a class="widget-pagination-current-page" href="/ask/more-h2s3i5">1/87</a>
            <select class="widget-pagination-pages" id="pageCounts">
                <option value="/ask/more-h2s3i5p1" selected>1/87</a></option>
                <option value="/ask/more-h2s3i5p2">2/87</a></option>
                <option value="/ask/more-h2s3i5p3">3/87</a></option>
                <option value="/ask/more-h2s3i5p4">4/87</a></option>
                <option value="/ask/more-h2s3i5p5">5/87</a></option>
                <option value="/ask/more-h2s3i5p6">6/87</a></option>
                <option value="/ask/more-h2s3i5p7">7/87</a></option>
                <option value="/ask/more-h2s3i5p8">8/87</a></option>
                <option value="/ask/more-h2s3i5p9">9/87</a></option>
                <option value="/ask/more-h2s3i5p10">10/87</a></option>
                <option value="/ask/more-h2s3i5p11">11/87</a></option>
                <option value="/ask/more-h2s3i5p12">12/87</a></option>
                <option value="/ask/more-h2s3i5p13">13/87</a></option>
                <option value="/ask/more-h2s3i5p14">14/87</a></option>
                <option value="/ask/more-h2s3i5p15">15/87</a></option>
                <option value="/ask/more-h2s3i5p16">16/87</a></option>
                <option value="/ask/more-h2s3i5p17">17/87</a></option>
                <option value="/ask/more-h2s3i5p18">18/87</a></option>
                <option value="/ask/more-h2s3i5p19">19/87</a></option>
                <option value="/ask/more-h2s3i5p20">20/87</a></option>
                <option value="/ask/more-h2s3i5p21">21/87</a></option>
                <option value="/ask/more-h2s3i5p22">22/87</a></option>
                <option value="/ask/more-h2s3i5p23">23/87</a></option>
                <option value="/ask/more-h2s3i5p24">24/87</a></option>
                <option value="/ask/more-h2s3i5p25">25/87</a></option>
                <option value="/ask/more-h2s3i5p26">26/87</a></option>
                <option value="/ask/more-h2s3i5p27">27/87</a></option>
                <option value="/ask/more-h2s3i5p28">28/87</a></option>
                <option value="/ask/more-h2s3i5p29">29/87</a></option>
                <option value="/ask/more-h2s3i5p30">30/87</a></option>
                <option value="/ask/more-h2s3i5p31">31/87</a></option>
                <option value="/ask/more-h2s3i5p32">32/87</a></option>
                <option value="/ask/more-h2s3i5p33">33/87</a></option>
                <option value="/ask/more-h2s3i5p34">34/87</a></option>
                <option value="/ask/more-h2s3i5p35">35/87</a></option>
                <option value="/ask/more-h2s3i5p36">36/87</a></option>
                <option value="/ask/more-h2s3i5p37">37/87</a></option>
                <option value="/ask/more-h2s3i5p38">38/87</a></option>
                <option value="/ask/more-h2s3i5p39">39/87</a></option>
                <option value="/ask/more-h2s3i5p40">40/87</a></option>
                <option value="/ask/more-h2s3i5p41">41/87</a></option>
                <option value="/ask/more-h2s3i5p42">42/87</a></option>
                <option value="/ask/more-h2s3i5p43">43/87</a></option>
                <option value="/ask/more-h2s3i5p44">44/87</a></option>
                <option value="/ask/more-h2s3i5p45">45/87</a></option>
                <option value="/ask/more-h2s3i5p46">46/87</a></option>
                <option value="/ask/more-h2s3i5p47">47/87</a></option>
                <option value="/ask/more-h2s3i5p48">48/87</a></option>
                <option value="/ask/more-h2s3i5p49">49/87</a></option>
                <option value="/ask/more-h2s3i5p50">50/87</a></option>
                <option value="/ask/more-h2s3i5p51">51/87</a></option>
                <option value="/ask/more-h2s3i5p52">52/87</a></option>
                <option value="/ask/more-h2s3i5p53">53/87</a></option>
                <option value="/ask/more-h2s3i5p54">54/87</a></option>
                <option value="/ask/more-h2s3i5p55">55/87</a></option>
                <option value="/ask/more-h2s3i5p56">56/87</a></option>
                <option value="/ask/more-h2s3i5p57">57/87</a></option>
                <option value="/ask/more-h2s3i5p58">58/87</a></option>
                <option value="/ask/more-h2s3i5p59">59/87</a></option>
                <option value="/ask/more-h2s3i5p60">60/87</a></option>
                <option value="/ask/more-h2s3i5p61">61/87</a></option>
                <option value="/ask/more-h2s3i5p62">62/87</a></option>
                <option value="/ask/more-h2s3i5p63">63/87</a></option>
                <option value="/ask/more-h2s3i5p64">64/87</a></option>
                <option value="/ask/more-h2s3i5p65">65/87</a></option>
                <option value="/ask/more-h2s3i5p66">66/87</a></option>
                <option value="/ask/more-h2s3i5p67">67/87</a></option>
                <option value="/ask/more-h2s3i5p68">68/87</a></option>
                <option value="/ask/more-h2s3i5p69">69/87</a></option>
                <option value="/ask/more-h2s3i5p70">70/87</a></option>
                <option value="/ask/more-h2s3i5p71">71/87</a></option>
                <option value="/ask/more-h2s3i5p72">72/87</a></option>
                <option value="/ask/more-h2s3i5p73">73/87</a></option>
                <option value="/ask/more-h2s3i5p74">74/87</a></option>
                <option value="/ask/more-h2s3i5p75">75/87</a></option>
                <option value="/ask/more-h2s3i5p76">76/87</a></option>
                <option value="/ask/more-h2s3i5p77">77/87</a></option>
                <option value="/ask/more-h2s3i5p78">78/87</a></option>
                <option value="/ask/more-h2s3i5p79">79/87</a></option>
                <option value="/ask/more-h2s3i5p80">80/87</a></option>
                <option value="/ask/more-h2s3i5p81">81/87</a></option>
                <option value="/ask/more-h2s3i5p82">82/87</a></option>
                <option value="/ask/more-h2s3i5p83">83/87</a></option>
                <option value="/ask/more-h2s3i5p84">84/87</a></option>
                <option value="/ask/more-h2s3i5p85">85/87</a></option>
                <option value="/ask/more-h2s3i5p86">86/87</a></option>
                <option value="/ask/more-h2s3i5p87">87/87</a></option>
            </select>
        </div>
        <a href="/ask/more-h2s3i5p2">下一页</a></div>
</section>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/css/b6c9e-6532.css" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/css/c103d-8382.css" />
<style>/*20150724*/ .whan-ad { background: rgba(0, 0, 0, 0.7); height: 53px; position: fixed; bottom: 0; width: 100%; padding-left: 105px; z-index: 101; } .whan-ad div { position: relative; } .whan-ad div .wh-tx1 { position: absolute; margin-left: -86px; margin-top: -55px; width: 70px; } .whan-ad div h1 { font-size: 17px; color: #ffe400; font-family: "Arial" , "Microsoft YaHei"; margin-top: 10px; margin-bottom: 2px; letter-spacing: 3px; } .whan-ad div h2 { font-size: 13px; color: #fff; margin-top: 5px; letter-spacing: 1px; } .whan-ad div h3 { background: #ffe400; width: 36%; height: 32px; font-size: 14px; border-radius: 4px; position: absolute; right: 16px; top: -1px; color: #fff; text-align: center; line-height: 32px; } .whan-ad div h3 a{ color:#000;} /*以下是浮框下新增发标框样式 -------------------start bottom: 427px;*/ .zxd-form { padding: 12px 15px 22px 15px; background: transparent; } .zxd-form div { position: relative; background: #fff; border: solid 1px #e1e1e1; border-radius: 6px; margin: 10px 0; overflow: hidden; } .zxd-form div span { position: absolute; right: 15px; top: 16px; color: #333; } .zxd-form div.download-arrow:after { content: ''; width: 0; height: 0; border-style: solid; border-color: #999 transparent transparent transparent; border-width: 6px; font-size: 0; position: absolute; top: 23px; right: 18px; } .zxd-form div input { -webkit-appearance: none; outline: none; padding-left: 10px; display: inline-block; } .zxd-form div input[type='button'] { height: 50px; width: 100%; } .zxd-form div input[type='text'], .zxd-form div input[type='tel'],.zxd-form div input[type='number'] { display: block; height: 50px; border: none; text-align: left; width: 100%; } .zxd-form div label { position: relative; } .zxd-form div span { vertical-align: 6px; } .jiting { height: 50px; } .jiting label { float: left; width: 25%; } .jiting label select { background-color: #fff; -webkit-appearance: none; height: 50px; border: none; width: 100%; outline: none; margin-left: 3%; } .jiting label:after { content: ''; width: 0; height: 0; border-style: solid; border-color: #999 transparent transparent transparent; border-width: 6px; font-size: 0; position: absolute; top: 23px; right: 12px; } .jiting label:before { content: ''; position: absolute; right: 4px; top: 12px; border-right: solid 1px #e3e3e3; height: 26px; z-index: 10; } .jiting label:last-of-type::before { content: ''; position: absolute; right: 4px; top: 12px; border-right: solid 1px #e3e3e3; height: 26px; z-index: 10; display: none; } .jiting input { width: 50%; float: left; } .jiting input:nth-of-type(1) { height: 30px !important; margin-top: 10px; border-right: solid 1px #e3e3e3 !important; } .jishi { height: 50px; } .jishi label { float: left; width: 33%; } .jishi label select { -webkit-appearance: none; background-color: #fff; height: 50px; border: none; width: 100%; outline: none; margin-left: 3%; } .jishi label:after { content: ''; width: 0; height: 0; border-style: solid; border-color: #999 transparent transparent transparent; border-width: 6px; font-size: 0; position: absolute; top: 23px; right: 18px; } .jishi label:nth-of-type(1)::before { content: ''; position: absolute; right: 4px; top: 12px; border-right: solid 1px #e3e3e3; height: 26px; z-index: 10; } .jishi label:nth-of-type(2)::before { content: ''; position: absolute; right: 4px; top: 12px; border-right: solid 1px #e3e3e3; height: 26px; z-index: 10; } .jishi input { width: 33.2%; float: left; } .zxd-form-tip { font-size: 12px; color: #e54a4a; margin: 10px 0; display: none; } #ask-form-submit,#ask-submit-again { border: none; font-size: 17px; color: #fff; background-color: #f79c33; border-radius: 6px; -webkit-appearance: none; margin-top: 10px; height: 44px; width: 100%; text-align: center; outline: none; } #ask-form-submit.active ,#ask-submit-again.active{ background: #fff; color: #666; border: solid #e3e3e3 1px; } #area { background-color: #fff; text-align: left; border: none; -webkit-appearance: none; } .zxd-form .touch-input2 label { position: absolute; right: 15px; top: 16px; color: #333; } .ask-oarea-remind { color: #999; font-size: 13px; } .zxd-form .touch-input2 label { position: absolute; right: 15px; top: 16px; color: #333; } .zxd-form div.download-arrow1:after{ content: ''; width: 10px; height: 10px; font-size: 0; position: absolute; top: 20px; right: 18px; border-top: 1px solid #999; border-right: 1px solid #999; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg); } #froms #area { background-color: #fff; text-align: left; border: none; -webkit-appearance: none; -moz-appearance: none; appearance: none; } .whan-ad div .dialog-827img{ position: absolute; right: 27px; top: 45px; width: 36px; margin-top: -49px; transition: all 0.5s; -webkit-transition: all 0.5s; } .whan-ad div .dialog-827img-up{ -webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -ms-transform: rotate(180deg); -o-transform: rotate(180deg); transform: rotate(180deg); } /*结果页*/ .dialog-ask-fruit{ padding: 10px 20px 22px 20px; } .ask-fruit-cue p{ color: #666; font-size: 12px; line-height: 17px; position: relative; padding-left: 6px; } .ask-fruit-cue p:last-of-type{ color: #ff5e26; margin-top: 2px; } .ask-fruit-cue p span{ font-size: 12px; position: absolute; left: 0; top: 2px; } .ask-fruit-data ul{ border-width: 1px 0 0 1px; border-style: solid; border-color: #c7c7c7; overflow: hidden; } .ask-fruit-data ul li{ border-width: 0 1px 1px 0; border-style: solid; border-color: #c7c7c7; height: 41px; width: 50%; padding: 0 5%; float: right; } .ask-fruit-data ul li span{ font-size: 14px; color: #666; font-weight: bold; text-align: left; float: left; line-height: 40px; } .ask-fruit-data ul li em{ font-size: 14px; color: #ff5e26; float: right; text-align: right; height: 40px; line-height: 40px; } .ask-fruit-data p{ text-align: center; font-size: 12px; color: #333; margin: 7px 0 10px 0; } .ask-fruit-data p em{ text-align: center; font-size: 32px; color: #ff5e26; position: relative; } .ask-fruit-title .fruit-title-p{ font-size: 17px; color: #000; text-align: center; position: relative; } .fruit-title-p .dashed-b-left:after{ content: ''; position: absolute; top: 9px; left: 0%; border-top: 1px dotted #ff5e26; width: 15% } .fruit-title-p .dashed-b-left:before{ content: ''; position: absolute; top: 7px; left: 15%; width: 5px; height: 5px; background-color: #ff5e26; transform:rotate(45deg); -ms-transform:rotate(45deg);/*IE9*/ -moz-transform:rotate(45deg);/*Firefox*/ -webkit-transform:rotate(45deg);/*Safari and Chrome*/ margin-left: 2px; } .fruit-title-p .dashed-b-right:after{ content: ''; position: absolute; top: 9px; right: 0%; border-top: 1px dotted #ff5e26; width: 15% } .fruit-title-p .dashed-b-right:before{ content: ''; position: absolute; top: 7px; right: 15%; width: 5px; height: 5px; background-color: #ff5e26; transform:rotate(45deg); -ms-transform:rotate(45deg);/*IE9*/ -moz-transform:rotate(45deg);/*Firefox*/
    -webkit-transform:rotate(45deg);/*Safari and Chrome*/ margin-right: 2px; } #ask-submit-again{ margin-top: 10px; } .shade-click{ height: 53px; position: absolute; top: -45px; width: 100%; left: -105px; } .whan-ad div h2 .span-ff6c40{ font-size: 14px; color: #ff6c40; font-weight: bold; } /*增加优先级*/ .area-select-box{ z-index: 1112; } /*以下是发标框位置样式*/ .whan-ad-ask .fabiaoqu-ask{ position: absolute; top: 53px; width: 100%; background-color: #fff; left: 0; height: 334px; } /*ios下虚拟键盘bug*/ .cc-box-style{ position: absolute; top: 45px; bottom: 0; overflow-y: scroll; -webkit-overflow-scrolling: touch; width: 100%; } /**/ /*.big-margin{ margin-top: 0; } */ /* 微信小号引导banner */ .banner-wx-new-ask { display: none; } .banner-wx-new { position: fixed; bottom: 0; left: 0; padding: 0 15px; z-index: 103; width: 100%; padding: 5px 12px; background: rgba(51, 51,51, 0.85); color: #fff; } .banner-wx-new-img { display: inline-block; width: 25%; text-align: center; vertical-align: middle; } .banner-wx-new-img img { width: 103px; height: 80px; } .banner-wx-new-text { display: inline-block; width: 75%; line-height: 21px; padding-left: 7px; vertical-align: middle; font-size: 14px; } .banner-wx-new-text p { color: #fff; } .banner-wx-new-text-name { color: #34c083; } .banner-wx-new-text-number { color: #e57e04; } .banner-wx-new-text-ha { color: #e57e04; } body{ -webkit-user-select:text !important; user-select:text !important; } .banner-wx-new-text{ -webkit-user-select:none !important; user-select:none !important; } #banner-wx-new-text-ha{ -webkit-user-select:text !important; user-select:text !important; } .banner-wx-new-text-tip { color: #e57e04; } @media screen and (max-width: 365px){ .banner-wx-new-text { font-size: 12px; } } @media screen and (max-width: 380px){ .banner-wx-new-img img { height: 66px; } } @media screen and (min-width: 390px) and (max-width: 400px){ .banner-wx-new-img img { height: 72px; } } /* 微信小号引导banner 按钮*/ .banner-wx-new-text-btn { width: 0.83rem; vertical-align: middle; } .weixin-pop-wx3-btn-ask { display: inline-block; padding: 2px 5px; border-radius: 5px; margin-left: 5px; vertical-align: baseline; font-size: 12px; background-color: #22cc77; } .weixin-pop-wx3-btn-text-ask { display: inline-block; color: #fff; padding-left: 5px; } .weixin-pop-wx3-btn-icon { width: 14px; height: 12px; vertical-align: sub; } /* 按钮放大动效 */ @-webkit-keyframes pulse-btn { 0% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 10% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 20% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 30% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 40% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 50% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 60% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 70% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 80% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 90% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 100% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } } @-moz-keyframes pulse-btn { 0% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 10% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 20% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 30% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 40% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 50% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 60% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 70% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 80% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 90% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 100% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } } @keyframes pulse-btn { 0% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 10% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 20% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 30% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 40% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 50% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 60% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 70% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 80% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } 90% { -webkit-transform: scale3d(1.1, 1.1, 1.1); transform: scale3d(1.1, 1.1, 1.1); } 100% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); } } .pulse-btn { -webkit-animation: pulse-btn 5s infinite; -moz-animation: pulse-btn 5s infinite; animation: pulse-btn 5s infinite; } @media screen and (max-width: 330px){ .banner-wx-new-img img { height: 60px; } .weixin-pop-wx3-btn-ask { margin-left: 3px; padding: 2px 3px; } } @media screen and (max-width: 380px){ .weixin-pop-wx3-btn-text-ask { padding-left: 0; } } /* 微信小号弹窗 */ .banner-wx-new-pop { position: fixed; top: 0; width: 100%; height: 100%; z-index: 103; background-color: rgba(51,51,51,0.6); } .banner-wx-new-pop-box { width: 206px; height: 96px; background-color: #fff; position: absolute; left: 50%; top: 50%; margin-left: -103px; margin-top: -48px; text-align: center; } .banner-wx-new-pop-box-tip { height: 50%; padding-top: 15px; font-size: 14px; margin-left: 0; } .banner-wx-new-pop-box-tip img { width: 22px; height: 31px; margin-left: 2px; vertical-align: text-top; margin-top: -4px; } .banner-wx-new-pop-box-num { height: 50%; padding-top: 15px; background-color: #25c875; color: #fff; font-size: 20px; } .new-result-box { -webkit-user-select: none !important; user-select:none !important; } .banner-wx-new-pop-box { -webkit-user-select: text !important; user-select:text !important; } .banner-wx-new-pop-box-tip { -webkit-user-select: none !important; user-select:none !important; } body #banner-wx-new-pop-box-num { -webkit-user-select: text !important; user-select:text !important; } .banner-wx-new-pop-box-close { position: absolute; right: -1px; top: -50px; width: 28px; padding-top: 4px; height: 28px; border: 1px solid #fff; border-radius: 50%; color: #fff; font-size: 18px; } /* 微信小号弹窗 */ /* 深圳报价结果态 */ .whan-ad div.new-result { display: none; width: 375px; height: 334px; position: absolute; top: 53px; width: 100%; padding: 20px; background-color: #f8f8f8; left: 0; } .new-result-box { border: 1px solid #e3e3e3; border-radius: 5px; padding: 15px; background-color: #fff; } .whan-ad div.new-result-wx { position:
    absolute; width: 116px; bottom: 36px; padding-bottom: 33px; text-align: center; left: 170px; } .whan-ad div.new-result-head { width: 190px; background-color: #fff; position: absolute; left: 50%; margin-left: -95px; top: -23px; text-align: center; } .new-result-head:before { display: block; content: ' '; width: 12px; height: 23px; background: url('<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/76777-2404.png'); position: absolute; left: -5px; top: 10px; } .new-result-head:after { display: block; content: ' '; width: 12px; height: 23px; background: url('<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/76777-2404.png'); position: absolute; right: -5px; top: 10px; } .new-result-content-service-tip { position: absolute; width: 110px; height: 26px; bottom: -18px; left: -11px; color: #333; text-align: center; padding-top: 4px; font-size: 12px; } .new-result-head-title { font-size: 14px; font-weight: bold; line-height: 44px; } .new-result-title { font-size: 15px; font-weight: bold; text-align: center; height: 30px; line-height: 30px; } .new-result-attention { font-size: 12px; color: #ff5e26; text-align: center; height: 43px; line-height: 15px; } .new-result-content { height: 147px; width: 100%; padding-top: 10px; border: 1px solid #f79c33; } .whan-ad div.new-result-content-service { width: 100px; height: 90px; position: absolute; top: 50%; margin-top: -61px; left: 0.23rem; } .whan-ad div.new-result-content-service-name { position: absolute; width: 129px; height: 26px; bottom: -13px; left: -20px; background: url('<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/5461f-8001.png') no-repeat 0 0; background-size: 100% 100%; color: #fff; text-align: center; padding-top: 8px; font-size: 12px; } .new-result-content-service-arrow { position: absolute; right: -0.35rem; bottom: 50%; width: 23px; margin-bottom: -7px; height: 13px; } .new-result-wx-btn-icon { width: 21px; height: 16px; } .new-result-wx-num { display: block; color: #ff5e26; font-weight: bold; line-height: 23px; } body #new-result-wx-num { -webkit-user-select:text !important; user-select:text !important; } .whan-ad div.new-result-wx-btn { position: absolute; width: 143px; left: -26px; padding: 7px; bottom: -6px; border-radius: 5px; background-color: #25c875; } .new-result-head-tip { font-size: 16px; } .new-result-wx-btn-text { color: #fff; padding-left: 6px; font-size: 12px; } .new-result-account { background-color: #fff; text-align: center; padding: 13px; margin-top: 12px; border:1px solid #e3e3e3; border-radius: 5px; color: #333; } .banner-wx-pop { display: none; position: fixed; top: 0; width: 100%; height: 100%; z-index: 103; background-color: rgba(51,51,51,0.6); } .banner-wx-pop-box { width: 206px; height: 96px; background-color: #fff; position: absolute; left: 50%; top: 50%; margin-left: -103px; margin-top: -48px; text-align: center; } .banner-wx-pop-box-tip { height: 50%; padding-top: 15px; font-size: 14px; margin-left: -7px; } .banner-wx-pop-box-tip img { width: 19px; height: 27px; margin-left: 2px; } .banner-wx-pop-box-num { height: 50%; padding-top: 15px; background-color: #25c875; color: #fff; font-size: 20px; } .new-result-box { -webkit-user-select: none !important; user-select:none !important; } .banner-wx-pop-box { -webkit-user-select: text !important; user-select:text !important; } .banner-wx-pop-box-tip { -webkit-user-select: none !important; user-select:none !important; } body #banner-wx-pop-box-num { -webkit-user-select: text !important; user-select:text !important; } .banner-wx-pop-box-close { position: absolute; right: -1px; top: -39px; width: 28px; padding-top: 4px; height: 28px; border: 1px solid #fff; border-radius: 50%; color: #fff; font-size: 18px; } .new-result-content-service-head { margin-top: 12px; margin-left: -13px; } @media screen and (max-width: 325px){ .whan-ad div.new-result { padding: 14px; } .new-result-title { font-size: 13px; } .whan-ad div.new-result-content-service { width: 90px; height: 78px; margin-top: -45px; left: 0.2rem; } .whan-ad div.new-result-content-service-name { width: 108px; left: -11px; bottom: -7px; font-size: 0.1rem; } .whan-ad div.new-result-wx { width: 100px; left: 150px; padding-bottom: 28px; bottom: 39px; } .whan-ad div.new-result-wx-btn { width: 125px; left: -26px; padding: 5px 1px; } .new-result-wx-btn-text { padding-left: 0; } .new-result-content-service-arrow { right: -0.3rem; } .new-result-content-service-head { margin-left: -10px; margin-top: -2px; } } @media screen and (min-width: 400px){ .whan-ad div.new-result-content-service { height: 86px; left: 0.4rem; } .whan-ad div.new-result-wx { left: 204px; bottom: 40px; } .banner-wx-new-text { padding-left: 20px; } .whan-ad div.new-result-content-service-name { left: -17px; font-size: 12px; } .new-result-content-service-tip { left: -8px; } .banner-wx-new-img img { height: 75px; } .new-result-content-service-head { margin-left: -10px; margin-top: 6px; } } /* 深圳报价结果态 */</style>
</div>
<section class="whan-ad whan-ad-ask whan-ad-h70">
    <div>
        <img class='wh-tx1' src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/6a588-4936.png" />
        <h1>装修该花多少钱?</h1>
        <h2>
            <span class="span-ff6c40">10秒</span>获取免费报价</h2>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/2bbe0-3158.png" class="dialog-827img dialog-827img-up"></div>
    <div id="fabiaoqu-ask" class="fabiaoqu-ask">
        <form id="froms" class="zxd-form">
            <div class="download-arrow1">
                <input type="hidden" name="ptag" value="2_1_1_2">
                <input type="text" id="slide_area" placeholder="请选择您的所在城市"></div>
            <div class="touch-input2">
                <input type="number" name="oarea" id="areaInput" placeholder="请输入您的房屋面积">
                <label for="areaInput">m&sup2</label></div>
            <div class="jiting clearfix" id="jiting">
                <label>
                    <select name="" id="secshi" class="needsclick">
                        <option value="1">1&nbsp;室</option>
                        <option value="2">2&nbsp;室</option>
                        <option value="3">3&nbsp;室</option>
                        <option value="4">4&nbsp;室</option>
                        <option value="5">5&nbsp;室</option>
                        <option value="6">6&nbsp;室</option></select>
                </label>
                <label>
                    <select name="" id="secting" class="needsclick">
                        <option value="1">1&nbsp;厅</option>
                        <option value="2">2&nbsp;厅</option>
                        <option value="3">3&nbsp;厅</option>
                        <option value="4">4&nbsp;厅</option>
                        <option value="5">5&nbsp;厅</option>
                        <option value="6">6&nbsp;厅</option></select>
                </label>
                <label>
                    <select name="" id="secchu" class="needsclick">
                        <option value="1">1&nbsp;厨</option>
                        <option value="2">2&nbsp;厨</option>
                        <option value="3">3&nbsp;厨</option>
                        <option value="4">4&nbsp;厨</option>
                        <option value="5">5&nbsp;厨</option>
                        <option value="6">6&nbsp;厨</option></select>
                </label>
                <label style='float: right;'>
                    <select name="" id="secyangtai" class="needsclick">
                        <option value="1">1&nbsp;阳台</option>
                        <option value="2">2&nbsp;阳台</option>
                        <option value="3">3&nbsp;阳台</option>
                        <option value="4">4&nbsp;阳台</option>
                        <option value="5">5&nbsp;阳台</option>
                        <option value="6">6&nbsp;阳台</option></select>
                </label>
            </div>
            <div style="margin: 10px  0 0 0;">
                <input type="tel" id="newPhone" name="phone" placeholder="输入手机号，短信接收详细报价清单"></div>
            <input id="ask-form-submit" class="ptag-set" type="button" dataptag="2_3_9_954" value="立即计算"></form>
    </div>
    <div id="new-result" class="new-result">
        <div class="new-result-box">
            <h4 class="new-result-title">报价短信已发送到您的手机，请注意查收！</h4>
            <p class="new-result-attention holiday-text">*稍后装修管家将回电您，免费提供装修咨询服务</p>
            <div class="new-result-content">
                <div class="new-result-head">
                    <h5 class="new-result-head-title">装修怕上当？问问靠谱的人</h5></div>
                <div class="new-result-content-service">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/bbb05-2766.gif" class="new-result-content-service-head" alt="客服">
                    <div class="new-result-content-service-name">装修顾问-馨馨</div>
                    <div class="new-result-content-service-tip">四年装修行业经验</div>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/c606e-5816.png" alt="" class="new-result-content-service-arrow"></div>
                <div class="new-result-wx">
                    <span class="new-result-wx-name">微信号：</span>
                    <span class="new-result-wx-num" id="new-result-wx-num">13302974452</span>
                    <div class="new-result-wx-btn pulse-btn">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/de4b7-9740.png" alt="" class="new-result-wx-btn-icon">
                        <span class="new-result-wx-btn-text" id="new-result-wx-btn-text">点击加微信好友</span></div>
                </div>
            </div>
        </div>
        <div class="new-result-account" id="new-result-account">重新计算</div></div>
    <div class="shade-click"></div>
</section>
<!-- 微信小号banner优化动效 -->
<div class="banner-wx-new banner-wx-new-ask banner-wx-new-index" id="banner-wx-new-init">
    <div class="banner-wx-new-img">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/63eba-9163.gif" alt="微信小号"></div>
    <div class="banner-wx-new-text">
        <p>添加“
            <span class="banner-wx-new-text-name">深圳装修顾问 馨馨</span>”为好友
            <br/>随时咨询户型设计 装修报价等疑问</p>
        <p>
            <span class="banner-wx-new-text-number">微信号：
                <span class="banner-wx-new-text-ha" id="banner-wx-new-text-ha">13302974452</span>
                <span class="weixin-pop-wx3-btn-ask pulse-btn">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/de4b7-9740.png" alt="" class="weixin-pop-wx3-btn-icon" />
                    <span class="weixin-pop-wx3-btn-text weixin-pop-wx3-btn-text-ask">点击加微信</span></span>
            </span>
        </p>
    </div>
</div>
<!-- 微信小号banner优化动效 --></div>
<div class="banner-wx-pop" id="banner-wx-pop">
    <div class="banner-wx-pop-box">
        <p class="banner-wx-pop-box-tip">长按微信号复制
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/a59a3-5947.gif" alt=""></p>
        <p class="banner-wx-pop-box-num" id="banner-wx-pop-box-num">13302974452</p>
        <span class="banner-wx-pop-box-close">X</span></div>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/plat8rsas.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/zbcommon.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/cookie.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/provincesselect.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/componentsh5.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/fabiao4_dialog.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/appguide.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/common_cityfromip.js"></script>
<script>var slide_start_high = slide_start_high || '';
    var h5_xgt_timing = h5_xgt_timing || ''; (function(slide_start_high) {
        var cityMemory = ''; //存储城市信息 
        var cityPrevious = ''; //上一个城市的信息
        var cityHold_data = ''; //存储接口城市信息
        var wx_flag = false; //微信小号banner出现标识       
        $('#dt-hd-navs-wrap').css('z-index', '10000');
        //调用ip返回城市接口
        getCityFromIp(cityHold); //设置回调方法      
        //执行这个方法
        zxbjObj.init();
        //初始化省市
        ProvincesSelect.initialize({
            targetDom: '#slide_area',
            callback: function() {
                //选择城市为深圳则显示微信小号banner
                var bothName = $('#slide_area').val().split(' ');
                var cityName = '';
                if (bothName) {
                    cityName = bothName[1];
                };
                cityMemory = cityName;
                cityBottom(cityName);
            }
        });
        //点击收起
        var mark = false;
        var us_flag = false; //用户操作标识
        var hl = ''; //定时器 
        var screen_num = $('body').height(); //需要滚动body高度
        var h_control = false; //无高度限制
        var ptag_bg = $('.ptag-set').attr('dataptag') || '';
        var slide_num = false; //一个页面记录一次上滑
        var complete_show = false; //表示全部展示
        ssh(slide_start_high); //通过这个函数处理页面对浮框的控制规则  
        var dom_height = $(document).height();
        $('.cc-box').addClass('cc-box-style');
        function ssh(slide_start_high) {
            if (slide_start_high > 0) {
                screen_num = slide_start_high;
                h_control = true; //有高度限制
            }
            if (slide_start_high == 1) {
                screen_num = 0;
            };
        }
        var show_flag = true; //统计用户是否展示
        $(".shade-click").on('touchmove',
        function(e) {
            mark = true;
        });
        $(".shade-click").on('touchend',
        function(e) {

            //$(this).removeAttr('style');
            //排除滑动触发
            if (mark) {
                mark = false;
                return;
            }
            e.preventDefault();
            us_flag = true;
            if ($('.dialog-827img').hasClass('dialog-827img-up')) {

                stop();
                $('.whan-ad').animate({
                    bottom: '334'
                },
                500,
                function() {
                    $('.dialog-827img').removeClass('dialog-827img-up');
                    $('.dialog-827img').css('top', '45px');
                    show_statistics();
                    clearInterval(hl);
                    //清除弹框的定时器
                    clear_timing(h5_xgt_timing);
                    //未选择城市才执行
                    if (cityMemory.length == 0) {
                        cityBottom(cityHold_data);
                    }
                });
                // 打开浮框并且城市为深圳则显示微信小号banner
                var bothName = $('#slide_area').val().split(' ');
                var cityName = '';
                if (bothName) {
                    cityName = bothName[1];
                };
                if (cityName === '深圳' || cityName === '东莞') {
                    $('.whan-ad-ask .fabiaoqu-ask').height(418);
                    $('.whan-ad').stop().animate({
                        bottom: '418px'
                    },
                    400,
                    function() {
                        $('#banner-wx-new-init').show();
                        //控制箭头逻辑
                        $('.dialog-827img').removeClass('dialog-827img-up');
                        $('.dialog-827img').css('top', '45px');
                        clearInterval(hl);
                    });
                }
            } else {

                // 关闭浮框则隐藏微信小号banner
                $('#banner-wx-new-init').hide();
                $('.whan-ad').height(53);
                $('.whan-ad-ask .fabiaoqu-ask').height(334);

                stop();
                $('.whan-ad').animate({
                    bottom: '0'
                },
                500,
                function() {
                    $('.dialog-827img').addClass('dialog-827img-up');
                    h_setTime();
                    //发过标 并点击下滑
                    if (getCookie('already_fabiao') === 'true' || getCookie('already_fabiao_shenzhen') === 'true' || getCookie('already_fabiao_dongguan') === 'true') {
                        window.appGuide.init({});
                    }
                    //完整展示过一次 并点击下滑按钮 存一个半个小时的cookie
                    if (complete_show) {
                        setCookie1('h5_slide_c', 'true', 1 * 60 * 1000);
                    };
                });
            }
        });
        h_setTime();
        var top = $('.dialog-827img').css('top');
        function h_setTime() {
            hl = setInterval(function() {
                if (!$('.dialog-827img').hasClass('dialog-827img-up')) {
                    $('.dialog-827img').css('top', '45px');
                    return;
                };
                top = $('.dialog-827img').css('top');
                if (top == '45px' || top == '50px') {
                    $('.dialog-827img').css('top', '40px');
                }
                if (top == '40px') {
                    $('.dialog-827img').css('top', '50px');
                };
            },
            1);
        }
        //初始化
        height_control();
        //使底部发标框宽度一致
        var wh_height = $('.whan-ad-ask').width() + 105;
        var haha = -1;
        $('.fabiaoqu-ask,.shade-click').width(wh_height + 'px');
        $(window).resize(function() {
            var wh_height = $('.whan-ad-ask').width() + 105;
            $('.fabiaoqu-ask,.shade-click').width(wh_height + 'px');
        })
        //页面滑动监控
        $(window).scroll(function() {
            height_control();
        }); $('.cc-box-style').scroll(function() {
            height_control();
        })
        //滑动控制
        function height_control() {
            //如果用户自行做了操作 则此处不影响用户操作
            if (us_flag) {
                return;
            }
            //无高度限制则不进这个函数
            if (!h_control) {
                return;
            }
            //出现了微信小号banner则不进这个函数
            if (wx_flag) {
                return;
            };
            //半个小时内完整展示过    全站不自动上滑
            // if (getCookie1('h5_slide_c') == 'true') {
            //     return;
            // }
            //在底部发标登记  5天内全站不自动上滑            
            // if (getCookie('h5_register_c') == 'true') {
            //     return;
            // }
            var win_height = $(window).height(); //窗口高度
            var scr_height = $('.cc-box-style').scrollTop() || $(window).scrollTop() //滚动条滚动的距离
            // var mistake_height = scr_height - screen_num;//相差距离  滚动条滚动的距离-口高度
            var bottom = parseInt($('.whan-ad-ask').css('bottom'));
            //滚动条到最底部的时候
            if (bottom >= 334 && (dom_height <= $(window).height() + scr_height)) {
                $('.whan-ad-ask').css('bottom', '334px');
                $('.dialog-827img').removeClass('dialog-827img-up');
                $('.dialog-827img').css('top', '45px');
                show_statistics();
                clearInterval(hl);
                //未选择城市才执行
                if (cityMemory.length == 0) {
                    cityBottom(cityHold_data);
                }
                return;
            }

            if ((bottom + scr_height - haha) < 0) {
                $('.whan-ad-ask').css('bottom', '0');
                $('.dialog-827img').addClass('dialog-827img-up');
                //发过标 并点击下滑
                if (getCookie('already_fabiao') == 'true' || getCookie('already_fabiao_shenzhen') == 'true' || getCookie('already_fabiao_dongguan')) {
                    window.appGuide.init({});
                }
                h_setTime();
            } else if ((bottom + scr_height - haha) >= 334) {
                $('.whan-ad-ask').css('bottom', '334px');
                $('.dialog-827img').removeClass('dialog-827img-up');
                $('.dialog-827img').css('top', '45px');
                show_statistics();
                clearInterval(hl);
                //未选择城市才执行
                if (cityMemory.length == 0) {
                    cityBottom(cityHold_data);
                }

            } else if (scr_height > screen_num) { //滚动条滚动的距离 大于 窗口高度(超过一屏)                
                $('.whan-ad-ask').css('bottom', (bottom + scr_height - haha) + 'px');
                //清除弹框的定时器
                clear_timing(h5_xgt_timing)
            }

            if (scr_height < haha && (bottom + scr_height - haha) > 0) {
                $('.whan-ad-ask').css('bottom', (bottom + scr_height - haha) + 'px');
                //清除弹框的定时器
                clear_timing(h5_xgt_timing);
                // 关闭浮框则隐藏微信小号banner
                $('#banner-wx-new-init').hide();
                $('.whan-ad').height(53);
                $('.whan-ad-ask .fabiaoqu-ask').height(334);
            }
            haha = scr_height;
        }
        //清除定时器
        function clear_timing(h5_xgt_timing) {
            clearTimeout(h5_xgt_timing);
        }

        //全部展示统计
        function show_statistics() {
            //页面曝光统计
            if (show_flag) { (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag_bg);
                show_flag = false;
            };
            complete_show = true;
        }
        $('#fix-nav').css({
            bottom: '60px'
        });
        //页面来自app的分享
        if (document.location.hash.indexOf('from=app') > -1) {
            var ptag = '';
            if (ptag) {
                $('.zxzs-set').each(function() {
                    $(this).attr('dataptag', ptag);
                    if ($(this).hasClass('zxzs-bj')) {
                        $(this).attr('href', '//m.to8to.com/yezhu/zxbj.php?from=144#point=' + ptag);
                    } else if ($(this).hasClass('zxzs-phoneday')) {
                        $(this).attr('href', '//m.to8to.com/apply/zb/phoneday?ptag=' + ptag);
                    } else if ($(this).hasClass('zxzs-redbag')) {
                        $(this).attr('href', '//m.to8to.com/apply/jc/redbag?ptag=' + ptag);
                    } else if ($(this).hasClass('zxzs-btn')) {
                        $(this).parents('#form_zx').find('input[name=ptag]').val(ptag);
                    }
                });
            }
        }
        $('.zxzs-set').on('click',
        function() {
            var ptag = $(this).attr('dataptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag); //埋点
            var zxzsjson = {
                channel: "",
                path: "",
                title: "",
                url: window.location.href,
                ptag: ptag
            };
            zxzsjson = JSON.stringify(zxzsjson);
            Cookies('zxzsTmpStr', zxzsjson, {
                expires: 20
            });
        });
        //深圳结果态点击重新计算返回表单     
        $(".new-result-account").click(function() {
            $('.dialog-ask-box').remove();
            $('#new-result').hide();
            $('.whan-ad-ask .fabiaoqu-ask').height(418);
            $('.whan-ad').stop().animate({
                bottom: '418px'
            },
            400,
            function() {
                $('#banner-wx-new-init').show();
            });
            $('.zxd-form').css('display', 'block');
        });
        //点击按钮显示微信小号复制蒙层
        $(".new-result-content-service").click(function() {
            var txt = $('#new-result-wx-num').text(); //获得当前地区对应的微信号
            $('#banner-wx-pop-box-num').text(txt); //当前地区对应的微信号  赋值到弹框中去
            $('#banner-wx-pop').show(); (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_1_1_1482');
        });
        $(".new-result-wx-btn").click(function() {
            var txt = $('#new-result-wx-num').text(); //获得当前地区对应的微信号
            $('#banner-wx-pop-box-num').text(txt); //当前地区对应的微信号  赋值到弹框中去
            $('#banner-wx-pop').show(); (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_1_1_1482');
        });
        //点击按钮关闭弹窗
        $(".banner-wx-pop-box-close").click(function() {
            $('#banner-wx-pop').hide();
        });

        //banner优化的微信小号点击加微信按钮
        $('body').on('touchstart', '#banner-wx-new-init',
        function() {
            var cobj = $("#slide_area").val().split(" ");
            var city = cobj[1] || '';
            var phone = '';
            if (city.length < 1) {
                city = cityHold_data; //用户没有选择城市则使用接口提供的城市信息
            };
            if (city === '深圳') {
                phone = '13302974452';
            } else {
                //东莞
                phone = '13302974661';
            }
            var pop = '<div class="banner-wx-new-pop" id="banner-wx-new-pop">' + '<div class="banner-wx-new-pop-box">' + '<p class="banner-wx-new-pop-box-tip">长按微信号复制 <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/a59a3-5947.gif" alt=""></p>' + '<p class="banner-wx-new-pop-box-num" id="banner-wx-new-pop-box-num">' + phone + '</p>' + '<span class="banner-wx-new-pop-box-close">X</span>' + '</div>' + '</div>';
            $('body').append(pop);
        });
        //点击按钮关闭弹窗
        $('body').on('touchend', '.banner-wx-new-pop-box-close',
        function() {
            $('#banner-wx-new-pop').remove();
        });

        function DateUnix1() {
            var year1 = new Date('2017/1/19 18:30:00');    year1_unix = year1.getTime();
            var year2 = new Date('2017/2/2 23:59:59');
            year2_unix = year2.getTime();
            var year = new Date();
            year_unix = year.getTime();
            if (year1_unix <= year_unix && year_unix <= year2_unix) {    $('.holiday-text').html('亲爱的业主，因春节工作人员放假(1.20-2.2)，我们将不能及时与您联系。如未接到电话，我们会在年后第一时间给您回电，请注意接听。祝您新春愉快、阖家幸福。');
                $('.whan-ad-ask').css({
                    'bottom': '355px'
                });
                $('.whan-ad-ask .fabiaoqu-ask').css({
                    'height': '355px'
                });
                $('.new-result-content').css({
                    'margin-top': '22px'
                });
                $('#new-result').css({
                    'height': '355px'
                });
            }
        }
        //传入城市展示不同banner
        function cityBottom(cityName) {
            if ((cityPrevious == cityName) && cityMemory.length > 0) { //与上一个城市相同不变化
                return false;
            } else {
                cityPrevious = cityName;
            }
            if (cityName.length > 0 && cityName === '深圳') {
                //展示banner标记
                wx_flag = true;
                $('.banner-wx-new-text-name').text('深圳装修顾问-馨馨');
                $('#banner-wx-new-text-ha').text('13302974452');
                $('.whan-ad-ask .fabiaoqu-ask').height(418);
                $('.whan-ad').stop().animate({
                    bottom: '418px'
                },
                400,
                function() {
                    $('#banner-wx-new-init').show();
                });
            } else if (cityName.length > 0 && cityName === '东莞') {
                //展示banner标记
                wx_flag = true;
                $('.banner-wx-new-text-name').text('东莞装修顾问-蓉蓉');
                $('#banner-wx-new-text-ha').text('13302974661');
                $('.whan-ad-ask .fabiaoqu-ask').height(418);
                $('.whan-ad').stop().animate({
                    bottom: '418px'
                },
                400,
                function() {
                    $('#banner-wx-new-init').show();
                });
            } else {
                //展示banner标记
                wx_flag = false;
                $('.whan-ad').stop(true);
                $('#banner-wx-new-init').hide();
                $('.whan-ad').css('bottom', '334px');
                $('.whan-ad-ask .fabiaoqu-ask').height(334);
            }
        }
        //先获取接口返回的城市信息
        function cityHold(city) {
            cityHold_data = city; //
        }
    })(slide_start_high);</script>
<div class="pg-ft">
    <ul class="terminal-nav">
        <li>
            <a class="active" href="javascript:void(0)">触屏版</a></li>
        <li>
            <span class="i-sep"></span>
            <a href="http://www.to8to.com/">电脑版</a></li>
        <li>
            <span class="i-sep"></span>
            <a href="http://m.to8to.com/news/article/106823.html">关于我们</a>
            <span class="i-sep"></span>
        </li>
        <li>
            <a href="http://m.to8to.com/question.html">常见问题</a></li>
    </ul>
    <div class="company-info">手机土巴兔：
        <a href="http://m.to8to.com">m.to8to.com</a>&nbsp;粤ICP备08125558号</div></div>
<script>(function() {
        /**
         * 输入状态下隐藏导航栏
         */
        function initInputSelectFocus() {
            var dom_arr = document.querySelectorAll('input[type="text"]');
            var sel_arr = document.querySelectorAll('select');
            var txt_arr = document.querySelectorAll('textarea');
            var dom_len = dom_arr.length;
            var sel_len = sel_arr.length;
            var txt_len = txt_arr.length;
            if (sel_len > 0) {
                for (var i = 0; i < sel_len; i++) {
                    var _i = dom_len + i;
                    dom_arr[_i] = sel_arr[i];
                }
                dom_len += sel_len;
            }
            if (txt_len > 0) {
                for (var i = 0; i < txt_len; i++) {
                    var _i = dom_len + i;
                    dom_arr[_i] = txt_arr[i];
                }
                dom_len += txt_len;
            }
            if (dom_len > 0) {
                var fix_dom = document.querySelector('.footer-fix');
                var screen_dom = document.querySelector('.screen');
                for (var i = 0; i < dom_len; i++) {
                    if (!dom_arr[i]) {
                        continue;
                    }
                    dom_arr[i].addEventListener('focus',
                    function() {
                        fix_dom && fix_dom.style && (fix_dom.style.display = 'none');
                        if (screen_dom) {
                            screen_dom.style.display = 'none';
                        }
                    },
                    false);
                    dom_arr[i].addEventListener('blur',
                    function() {
                        fix_dom && fix_dom.style && (fix_dom.style.display = 'block');
                    },
                    false);
                }
            }
        }
        initInputSelectFocus();
    })();</script>
<script>var browser = {
        versions: function() {
            var u = navigator.userAgent,
            app = navigator.appVersion;
            return { //移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1,
                //IE内核
                presto: u.indexOf('Presto') > -1,
                //opera内核
                webKit: u.indexOf('AppleWebKit') > -1,
                //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/),
                //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
                //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1,
                //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1,
                //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        } ()
    };
    if (browser.versions.iPad) {
        $('head').find('meta[name=viewport]').attr('content', 'initial-scale=1.0,user-scalable=no,maximum-scale=1');
    }</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/iscroll5.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/zxask.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/common.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/2a19dc2ac1471a7470fe7187a5537960_2.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/h5appdownload_sourcecharge.min.js"></script>
