<?php
use yii\helpers\Url;

Yii::$app->params['tdkInfos'] = [
    'title' => '北京维纳亚科技有限公司-专注装修营销推广及家装CPA效果营销推广解决方案',
    'keyword' => 'weinaya，维纳亚，装修营销，装修获客，装修推广，北京维纳亚科技有限公司',
    //'description' => '【(weinaya) 维纳亚——为装企而生】北京维纳亚科技有限公司，专注装修营销推广及家装CPA效果营销推广解决方案。服务区域：北京、上海、深圳、太原、长沙。',
	'description' => '【(weinaya) 维纳亚——为装企而生】北京维纳亚科技有限公司,专注装修营销推广及家装CPA效果营销推广解决方案。服务类型： ☑SEO ☑SEM ☑CPA ☑CPS ☑自媒体  ☑危机公关 ☑社群 ☑DSP ☑信息流等（服务区域: ☑北京 ☑长沙 ☑深圳☑太原☑上海 ……）',
];

//$merchants = [
    //'wny' => '维纳亚-装修',
    //'ty' => '通用商家-第三方',
    //'tbz' => '兰州家装',
    //'gzjlb' => '工长俱乐部',
//];

$merchants = [
    'jz' => '极装吉住',
    'yzf' => '业之峰',
    'tszs' => '天盛装饰',
    'mzk' => '美宅客',
    'meideni' => '美得你',
    'ldou' => '绿豆家装',
    'op' => '欧派',
    'aikj' => '爱空间',
    'jjjz' => '就近家装',
    //'ypj' => '优品家',
    'jrzj' => '居然之家',
    'tbz' => '兔班长',
    'j50' => '50家',
    'shtczs' => '三好同创装饰',
    'qzsji' => '轻舟世纪',
    'woaiwojia' => '我爱我家装饰',
    'mitangzhuangshi' => '觅糖装饰',
    'dzr' => '大自然',
    'fk' => '梵客家居',
    'jfer' => '局装-居范儿',
    'jsy' => '金三优',
    //'jinz' => '今朝装饰',
    'md' => '闽东装饰',
    'sf' => '盛发装饰',
    'zkx' => '宅快修',
    'sd' => '圣点装饰',
    'jbh' => '一起装修网',
    'lzz' => '中宅装饰',
    'yzw' => '悦装网',
	'dyrsjn' => '东易日盛',
	'pgzs' => '苹果装饰',
	'zfer' => '住范儿',
	'aiys' => '爱易墅',
    'qzxfyj' => '轻舟幸福亿家',
    //'dqzs' => '德秦装饰',
    'tianthc' => '天泰合创',
    'zxhzs' => '山西卓兴和装饰',
    'gaoniao' => '高鸟装饰',
    'beichuangmingju' => '北创铭居装饰',
    'jkj' => '九空间',
];
?>
<?= $this->render('../_banner'); ?>
<div class="main-service scrollme">
    <h4>专注、专业</h4>
    <h6 class="sub-title">专注装修建材企业CPA效果营销服务商</h6>
    <div class="row site-width">
        <div class="small-12 medium-3 columns animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity=".3" data-translatey="50" data-rotatez="0">
            <div class="pic">
                <span class="sms-view"></span>
            </div>
            <h5>CPA服务</h5>
            <p class="summary">以CPA效果付费的合作模式，有效降低装修企业获客成本。</p>
            <p class="sub"><a href="/sp-cpa.html" class="button success radius tiny" title="">了解详情</a></p>
        </div>
        <div class="small-12 medium-3 columns animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity=".3" data-translatey="50" data-rotatez="0">
            <div class="pic">
                <span class="mail-view"></span>
            </div>
            <h5>竞价托管</h5>
            <p class="summary">一对一定制化解决方案，以SEM服务托管为合作模式，降低企业获客成本。</p>
        </div>
        <div class="small-12 medium-3 columns animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity=".3" data-translatey="50" data-rotatez="0">
            <div class="pic">
                <span class="webchat-view"></span>
            </div>
            <h5>网站SEO</h5>
            <p class="summary">提供SEO解决方案，有效提升企业营销力与品牌影响力，以考核SEO流量为目标的全新合作模式。</p>
            <p class="sub"><a href="/sp-seo.html" class="button success radius tiny" title="">了解详情</a></p>
        </div>
        <div class="small-12 medium-3 columns animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity=".3" data-translatey="50" data-rotatez="0">
            <div class="pic">
                <span class="captcha-view"></span>
            </div>
            <h5>企业定制</h5>
            <p class="summary">从网站流量到网站效果，一站式解决方案（企业定制 = 网站建设+SEM培训+SEO指导+SMO）</p>
        </div>
    </div>
</div>
