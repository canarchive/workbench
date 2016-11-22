<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'nav-next'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = $controllerId;
$this->params['formPositionName'] = $view;
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="content">
    <div class="con-inner">
        <ul class="con-left floatL">
            <li class="con-item con-item1">
                <div class="item-inner">
                    <h2>企业级门户网站</h2>
                    <p>基于云平台的功能化建站产品，帮助中小企业建设功能强大
                        <br>灵活多样、具备企业网站所需的
                        <br>全部基础功能的官方网站</p>
                    <div class="dot">
                        <span>·</span>
                        <span>·</span>
                        <span>·</span></div>
                    <div class="btm_link">
                        <a href="/guanwang.html" class="more" target="_blank">了解更多</a></div>
                    <div class="btm_ask">
                        <div class="btm_bg"></div>
                        <a class="zixun_pop" value="1">免费咨询</a></div>
                </div>
            </li>
            <li class="con-item con-item3">
                <div class="item-inner">
                    <h2>O2O全网零售平台</h2>
                    <p>企业级O2O全网零售平台 ，多平台、多渠道全网覆盖式
                        <br>营销，打通线上线下渠道，无缝实现O2O
                        <br>全面服务保障</p>
                    <div class="dot">
                        <span>·</span>
                        <span>·</span>
                        <span>·</span></div>
                    <div class="btm_link">
                        <a href="/shangcheng.html" class="more" target="_blank">了解更多</a></div>
                    <div class="btm_ask">
                        <div class="btm_bg"></div>
                        <a class="zixun_pop" value="3">免费咨询</a></div>
                </div>
            </li>
            <li class="con-item con-item5">
                <div class="item-inner">
                    <h2>限次·免费体验机会</h2>
                    <p>30万行业案例供您免费体验</p>
                    <div class="dot">
                        <span>·</span>
                        <span>·</span>
                        <span>·</span></div>
                    <div class="btm_link">
                        <a href="/zero.html" class="more" target="_blank">了解更多</a></div>
                    <div class="btm_ask">
                        <div class="btm_bg"></div>
                        <a class="zixun_pop" value="5">免费咨询</a></div>
                </div>
            </li>
        </ul>
        <ul class="con-right floatL">
            <li class="con-item con-item2">
                <div class="item-inner">
                    <h2>全网营销型建站</h2>
                    <p>以营销为导向的建站产品，整合PC网站、手机网站、安卓客户
                        <br>端，帮助企业建立全网营销型官网
                        <br>打通全网营销渠道</p>
                    <div class="dot">
                        <span class="dot1">·</span>
                        <span class="dot2">·</span>
                        <span class="dot3">·</span></div>
                    <div class="btm_link">
                        <a href="/quanwangyingxiao.html" class="more" target="_blank">了解更多</a></div>
                    <div class="btm_ask">
                        <div class="btm_bg"></div>
                        <a class="zixun_pop" value="2">免费咨询</a></div>
                </div>
            </li>
            <li class="con-item con-item4">
                <div class="item-inner">
                    <h2>企业移动营销平台</h2>
                    <p>企业移动营销平台，助力“互联网+传统企业”全面升级
                        <br>覆盖移动领域4大圈子，多终端访问无障碍
                        <br>全方位多入口随时随地获取意向客户</p>
                    <div class="dot">
                        <span>·</span>
                        <span>·</span>
                        <span>·</span></div>
                    <div class="btm_link">
                        <a href="/yidongyingxiao.html" class="more" target="_blank">了解更多</a></div>
                    <div class="btm_ask">
                        <div class="btm_bg"></div>
                        <a class="zixun_pop" value="4">免费咨询</a></div>
                </div>
            </li>
            <li class="con-item con-item6">
                <div class="item-inner">
                    <h2>免费报价，不再吃亏</h2>
                    <p>了解建站价格详情</p>
                    <div class="dot">
                        <span>·</span>
                        <span>·</span>
                        <span>·</span></div>
                    <div class="btm_link">
                        <a href="/free.html" class="more" target="_blank">了解更多</a></div>
                    <div class="btm_ask">
                        <div class="btm_bg"></div>
                        <a class="zixun_pop" value="6">免费咨询</a></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<?= $this->render('../common/_ask'); ?>
