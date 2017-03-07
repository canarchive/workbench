<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['dfc20-7370', 'ac6a6-5327', '492e1-6548', '205c9-1932', '9f77a-4233', '9c07e-2206', 'dfc20-7370', '9c07e-2206'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
$this->params['jsStr'] = $this->render('_js-header');//, ['jsFiles' => $jsFiles]);
?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/askbj.js"></script>
<?= $this->render('_header'); ?>
<style type='text/css'>pre { white-space: pre-wrap; word-wrap: break-word; } /* 新增热点 */ .zxask-detail-box h2 .hot-img{ height: 55px; width: 50px; display: inline-block; position: fixed; right: 20px; top: 190px; z-index: 5; }</style>
<section class="zxask-detail-wrap" style="margin-top:45px">
    <?php //echo $this->render('_search'); ?>
    <script>$('.zxask-search-wrap').find('p').remove().end().height(65);</script>
    <div class="zxask-detail-inner-wrap">
        <div class="zxask-detail-box zxask-question-content">
            <i class="icon-zxask-question"></i>
            <h2 class="zxask-detail-title"><?= $info['name']; ?>
                <!--<a href="" rel="nofollow" target="_blank" class="hot-img"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/e0127-4121.jpg" alt=""></a>-->
            </h2>
            <div class="zxask-detail-link clearfix">
                <time><?= date('Y-m-d', $info['created_at']); ?></time>
                <a href='<?= "/{$this->context->currentCityCode}/"; ?>' title="<?= $this->context->currentCityName . '装修网'; ?>"><?= $this->context->currentCityName . '装修网'; ?></a>&gt;
                <a href="<?= "/ask_lm_{$sortInfos['pInfo']['code']}/"; ?>"><?= $sortInfos['pInfo']['name']; ?></a>&gt;
                <a href="<?= "/ask_lm_{$sortInfos['cInfo']['code']}/"; ?>"><?= $sortInfos['cInfo']['name']; ?></a>
            </div>
        </div>
        <?php if (isset($answerInfos['best'])) { $aInfo = $answerInfos['best']; ?>
        <article class="user-question">
            <section style="display: none"></section>
            <section>
                <h1><span></span><?= $info['name'] . '最佳回答'; ?></h1>
                <pre>
                <p style="line-height:1.75em;"><?= $aInfo['description']; ?></p>
                </pre>
                <footer><?= $aInfo['memberInfo']['name']; ?><time><?= date('Y-m-d H:i:s', $aInfo['created_at']); ?></time></footer>
            </section>
        </article>
        <?php } ?>
        <div class="zxask-answer-box answer_num_astrict">
            <h3 class="zxask-answer-title">其他答案</h3>
            <div>
                <pre class="zxask-answer-info">这样字问是没发回答的，材料有质量层次，装修有风格设计和房子面积</pre>
                <p class="zxask-answer-meta">
                    <span>成都天怡美装饰工程有限公司</span>
                    <time>2016-06-26</time></p>
            </div>
            <div>
                <pre class="zxask-answer-info">2、陶瓷类装饰材料:陶瓷外墙里砖牢固耐用,颜色艳丽而具有丰盛的装饰后果,并具有易浑洗、防火、抗水、耐磨、耐腐化和维修用度低的长处。</pre>
                <p class="zxask-answer-meta">
                    <span>杭州蓝冠装饰设计有限公司</span>
                    <time>2016-06-26</time></p>
            </div>
        </div>
        <?php //echo $this->render('_ad-show'); ?>
        <div class="zxask-answer-box zxask-other-questions">
            <h3 class="zxask-answer-title">相关问题</h3>
            <?php foreach ($infos as $info) { ?>
            <a href="<?= "/askshow_{$info['id']}.html"; ?>">
                <p class="zxask-answer-info">
                    <span class="zxask-answer-number"><?= $info['num_answer']; ?>个回答</span>[<?= $sortInfos['sortInfos'][$info['sort']]['name']; ?>]<?= $info['name']; ?></p></a>
            </a>
            <?php } ?>
        </div>
        <!--<div class="zxask-answer-box">
            <h3 class="zxask-answer-title">相关推荐</h3>
            <div class="zxask-answer-info zxask-footer-link">
                <a href=""></a>
            </div>
        </div>-->
    </div>
</section>
<?= $this->render('@gallerycms/views/layouts-m/plat8/_footer'); ?>
