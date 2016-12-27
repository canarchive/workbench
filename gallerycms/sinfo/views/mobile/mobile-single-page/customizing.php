<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'swiper.min', 'common-mobile', 'style-m', 'submit',
];
$this->params['jsFiles'] = [
	'jquery-1.8.3.min', 'swiper.min', 'public-m', 'common-m', 'createCity', 'position-m', 'city-select', 'count',
];
//$this->context->pcMappingUrl = '';
$ourDatas = [
    'SEM托管', 'SEO优化', 'SMO优化', '网站建设', '服务器托管', '渠道开户',
    '微信开发', '微博营销', '微信营销', '自媒体营销', '新闻营销',
    '危机公关', '企业内训', 'DSP', '智慧推', '广点通', '信息流广告', '全网营销',
];
$colors = ['blue', 'purple', 'green'];

?>
<section class="content newz-content">
    <div class="top-banner">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/mobile-banner21.png" alt=""></div>
    <div class="vone-range m-part vone-part zshop-part">
        <h2>定制化功能全面<em>18大功能任意选</em></h2>
        <div class="m-con">
            <div class="newz-func-main">
                <ul class='clearfix'>
                    <?php $j = $i = 0; foreach ($ourDatas as $ourData) { ?>
                    <?php if (($i % 3) == 0) { ?><li class='icon-<?= $colors[($j % 3)]; ?>'><div class="li-inner"><?php $j++;} ?>
                        <div class="new-func-list"><em></em><?= $ourData; ?></div>
                    <?php if (($i % 3) == 2) { ?></div></li><?php } ?>
                    <?php $i++; } ?>
                </ul>
            </div>
            <div class="center-rhomh"></div>
        </div>
    </div>
    <div class="conmmon-part vone-part newz-ld">
        <h2>六步营销　赚取大把订单</h2>
        <div class="m-con">
            <div class="newz-ld-img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-img1.png" alt=""></div>
            <ul class='clearfix'>
                <li>
                    <div class="newz-ld-t">
                        <em>1</em>主动营销 请来客户</div>
                    <div class="newz-ld-d">邮件、短信、SEO免费搜索引擎优化</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>2</em>客户上门 热情接待</div>
                    <div class="newz-ld-d">多种获客工具，全方位服务每一个客户</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>3</em>产品展厅 留住客户</div>
                    <div class="newz-ld-d">优化着陆页提升用户体验</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>4</em>销售管理 订单不丢</div>
                    <div class="newz-ld-d">客户管理系统帮企业开展“数据库营销”</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>5</em>流量分析 赢在决策</div>
                    <div class="newz-ld-d">数据分析支撑市场营销策略，创造最大生意价值</div></li>
                <li>
                    <div class="newz-ld-t">
                        <em>6</em>定期总结，赢在未来</div>
                    <div class="newz-ld-d">定期的全流程分析总结，提升每个节点的效率</div></li>
            </ul>
        </div>
    </div>
    <!--<div class="case-list case-enjoy conmmon-part vone-part newx-case">
        <h2>客户案例</h2>
        <ul class="clearfix">
            <li>
                <a href="/case/857.html">
                    <div class="img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/49.jpg" alt=""></div>
                    <p class="case-name">并行科技 网站建设</p>
                    <p class="case-trade case-glance">
                        <em></em>15394</p>
                </a>
            </li>
            <li>
                <a href="/case/941.html">
                    <div class="img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/164.jpg" alt=""></div>
                    <p class="case-name">南通吉安时装有限公司</p>
                    <p class="case-trade case-glance">
                        <em></em>22635</p>
                </a>
            </li>
            <li>
                <a href="/case/899.html">
                    <div class="img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/113.jpg" alt=""></div>
                    <p class="case-name">广东连坚集团有限公司</p>
                    <p class="case-trade case-glance">
                        <em></em>22080</p>
                </a>
            </li>
            <li>
                <a href="/case/1221.html">
                    <div class="img">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/201571013133544157s.jpg" alt=""></div>
                    <p class="case-name">哈尔滨予泰兴邦工贸有限公司</p>
                    <p class="case-trade case-glance">
                        <em></em>18580</p>
                </a>
            </li>
        </ul>
    </div>-->
    <div class="m-part vone-part newz-five">
        <h2>服务与保障<em>80%的客户来源于口碑</em></h2>
        <div class="m-con">
            <ul class="good-list">
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist1.png" alt=""></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>1.6大服务实力，提升企业销售业绩</h3>
                        <p>专业的SEM服务团队，依赖顶尖的产品技术团队，为多行业多领域的客户提供全方位的账户优化服务。</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist2.png" alt=""></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>2.顶尖的技术团队</h3>
                        <p>有专门的BI团队研究，提供丰富的账户优化策略，方案。有业内最顶尖的产品研发团队，致力于数字广告系统研发、消费者行为分析等给优化团队提供强有力的技术支持。</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist3.png" alt=""></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>3.丰富的行业经验</h3>
                        <p>多年深耕教育、电商零售、金融、旅游等行业；服务智联招聘、搜狐焦点、苏宁易购等几千万级的大客户，为客户提供精细化执行方案</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist4.png" alt=""></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>4.24小时客服热线</h3>
                        <p>为企业提供全年365天的 7x24小时“一站式”服务</p>
                    </div>
                </li>
                <li>
                    <span class="zm-good-icon good-icon">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/newz-goodlist5.png" alt=""></span>
                    <div class="zm-goog-txt good-txt">
                        <h3>5.客户培训服务</h3>
                        <p>为企业客户定制专属SEM和SEO培训课程，提升企业销售业绩，降低企业获客成本</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--<div class="m-part vone-part newz-service">
        <h2>服务保障
            <em>保证您的网站高效、快速、稳定运行</em></h2>
        <div class="m-con">
            <div class="swiper-container swiper-container-horizontal" id="swiper-container1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>01</span>
                                    <h3>电信级IDC机房</h3>
                                    <p>6大电信级机房，带宽拥有量超过50G，3000多组高性能集群服务器，与中国电信、新联通和教育网三线互通。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>02</span>
                                    <h3>集群部署</h3>
                                    <p>服务器群组的集成部署（Web服务器集群 应用服务器集群、论坛服务器集群、制作服务器集群）应用服务器分离，拥有负载均衡设备和专用的NAS储存。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>03</span>
                                    <h3>网络安全保障</h3>
                                    <p>采用先进的防火墙、负载均衡，防DDOS攻击； IDS设备定期安全扫描，及时发现漏洞，实时安全 分析。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>04</span>
                                    <h3>数据备份保障</h3>
                                    <p>所有网络设备采用双点备份，避免单点故障，确保在系统信息发生问题时可以快速恢复系统正常。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>05</span>
                                    <h3>网络连通性保障</h3>
                                    <p>双光纤直连ChinaNet骨干节点，各中心均拥有4G以上ChinaNet出口带宽，有效保障网络的稳 定性和高速性。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>06</span>
                                    <h3>客户服务保障</h3>
                                    <p>标准服务等级协议(SLA)，保障您轻松无忧；7天×24小时客服热线，及时为您排忧解难；完整服务指标体系，让您的网络营销平台高枕无忧。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>07</span>
                                    <h3>智能终端 移动商务</h3>
                                    <p>支持计算机的常规浏览和手机、PDA在内的无线终端设备对企业网站的浏览，客户可以随时随地、不受限制地访问您的网站。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide blue-slide swiper-slide-active">
                        <ul class="good-list">
                            <li>
                                <div class="zm-goog-txt good-txt">
                                    <span class='ser-num'>08</span>
                                    <h3>海外镜像</h3>
                                    <p>提高海外用户访问速度，加强网站的海外影响力，提升企业品牌国际影响力，海外实时监控服务器状态，随时处理突发事件。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-bullets" id="swiper-pagination1"></div>
            </div>
        </div>
    </div>-->
    <?= $this->render('../common/_product'); ?>
    <?= $this->render('../common/_ask_inner'); ?>
</section>
