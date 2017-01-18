<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'askbase-new_global_forold', 'askbase-global', 'askbase-k306_style_new',
    'askbase-consult_online',
];
$this->params['jsFiles'] = [
    'askbase-jquery-1.10.2.min', 'askbase-jq', 'askbase-to8torsas', 
    'askbase-tender', 'askbase-common',
];
?>
<div class="global_wrap" id='gloWrap'>
    <?= $this->render('_nav', ['navs' => $navs, 'view' => $view]); ?>
    <div class="limit_w about_centent">
        <div class="about_left">
            <!--<p class="new_link_p">友情链接<span>Links</span></p>
            <div class="block_content block_freind_list1">
                <a target="" href="http://www.bidchance.com">中国招标网</a>
            </div>
            <div class="cler"></div>-->
            <p class="new_link_p">链接代码
                <span>Link Code</span></p>
            <div class="new_link">
                <p class="new_code_p">文字链接：
                    <em><?= Yii::$app->params['siteNameBase']; ?>装修网</em>链接地址：
                    <a target="_blank" href="http://www.to8to.com">http://www.to8to.com</a></p>
                <p class="pic_link_p">
                    <span>图片链接：</span>
                    <img src="http://img.to8to.com/front_end/pic/about_us_flink.png?v=1456423494" style=" vertical-align:top;" />
                    <span style="margin-left:111px;">链接示例：</span>
                    <textarea readonly="readonly">
                        <a title="更专业的装修门户和设计师社区" href="http://www.to8to.com" target="_blank">
                            <img src="http://www.to8to.com/img/logo/logo.gif" alt="更专业的装修门户和设计师社区"></a>
                    </textarea>
                </p>
            </div>
            <p class="new_link_p">关于合作
                <span>Cooperation</span></p>
            <div class="new_block_freind">
                <p class="new_p1"><?= Yii::$app->params['siteNameBase']; ?>愿与装修家居类、媒体、行业协会、家居企业等各类优秀网站建立合作，以促进双方网站的共同发展。</p>
                <p class="new_p2">
                    <strong>合作方式：</strong>
                    <br/>友情链接交换：请您先做好本站的链接，并与我们联系，我们审核后将在1个工作日给与您回复。</p>
                <p class="new_p2">
                    <strong>合作要求：</strong>
                    <br/>“首页”友情链接，网站Google PageRank PR值不低于5，世界排名不低于5W名，搜索引擎快照更新正常，收录不低于5000页。</p>
                <p class="new_p2">
                    <strong>联系方式：</strong>
                    <br/>友链QQ:895278840,装修咨询QQ:4006900282
                    <br>[如您有疑问或其它合作方式，欢迎致电，共同商榷。]</p></div>
        </div>
    </div>
    <div class="cler"></div>
    <div id="small_window"></div>
</div>
