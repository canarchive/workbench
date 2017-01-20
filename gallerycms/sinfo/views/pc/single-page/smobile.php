<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'haiwaituiguang'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="section">
    <div class="vone_main">
        <div class="topimg-360" style="background:url(<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/banner/smobile_<?= $this->context->siteCode; ?>.jpg) no-repeat top center">
            <div class="topimg-con vone-img gwtg-img pop_zixun">
                <a value="1" href="javascript:void(0);">立即拥有</a></div>
        </div>
        <div class="vone-part">
            <div class="vone-con">
                <h2 class="gwtg-title gwtg-title01">网站访客手机号抓取</h2>
                <div class="zmail-p-con">
                    <div class="img floatR">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/guowaituiguang-01.png" alt=""></div>
                    <div class="word word-01 floatL">
                        <div class="gwtg-left">
                            <div class="t t01">
                                <span></span>一段神奇的代码，改变了世界</div>
                            <div class="con">当有访客用手机访问你的移动站时，系统会自动获取访客的手机号码、搜索关键词、地区，等相关访客信息。三网通关、全国首套精准移动客户跟单系统，助您成交率直线上升。</div></div>
                        <div class="gwtg-left">
                            <div class="t t01">
                                <span></span>好消息</div>
                            <div class="con">现在购买“专业版”赠送60个免费手机配额，购买“旗舰版”赠送120个免费手机配额。（手机配额是专门抓手机号的）目前正式开通产品的用户,我们还将免费赠送价值超过两万元的销售技巧教程,请开通后联系客服索取! </div></div>
                        <div class="gwtg-jg"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="vone-part bg-f5f6fa">
            <div class="vone-con">
                <h2 class="gwtg-title gwtg-title01"><?= $this->context->currentSiteInfo['name']; ?>功能</h2>
                <div class="zmail-p-con">
                    <div class="img floatL">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/guowaituiguang-02.png"></div>
                    <div class="word word-01 floatR">
                        <div class="jg-02"></div>
                        <div class="gwtg-left">
                            <div class="t t02">注意事项</div>
                            <div class="con">注册后，我们一个有三个套餐，基础套餐、专业套餐、旗舰套餐，其中基础套餐只能统计QQ号码，如想抓取手机号访客，请使用专业套餐或者旗舰套餐，此二款可以同时抓取手机号码和QQ号码，<b>需要抓取手机号码的请一定要注意选择专业套餐或旗舰套餐。</b></div></div>
                        <div class="gwtg-jg"></div>
                        <div class="gwtg-left">
                            <div class="t t02">
                                <span></span>抓取率如何？</div>
                            <div class="con">手机号抓取<b>开通超级接口</b>后大约在<b>15%到20%</b>甚至更多，抓取率主要取决于客户的访问渠道，如果都是使用手机本身流量来访问的话，抓取率会更高。我们说的15%到%是一个综合对比的概率。<b>建议您免费体验自己测试一下</b>，看看效果。另外QQ号码的抓取率在20%到40%左右，不同漏洞的接口抓取率不一样。</div></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="vone-part">
            <div class="vone-con">
                <h2 class="gwtg-title gwtg-title03">安装方法</h2>
                <div class="zmail-p-con">
                    <div class="img img-03 floatR">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/guowaituiguang-03.png"></div>
                    <div class="word word-01 floatL">
                        <div class="gwtg-jg"></div>
                        <div class="gwtg-left">
                            <!--<div class="t t03"><span>安装方法</span></div>-->
                            <div class="con">安装时，建议代码添加在网站所有页面头部&lt;/head&gt;标签前面，这样更利于代码加载，有助于号码抓取。特别是移动站，一定要加在页面的头部。另外，我们服务器带宽充足，同时做过CDN加速处理，不会影响网站速度，请放心使用！</div>
                            <div class="con">注意：安装时代码默认抓取的是所有区域，如填写推广区域，则只抓取推广区域的访客。请按自己实际推广需求决定是否填写区域。</div></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="vone-part gwtg-part bg-f5f6fa">
            <div class="vone-con">
                <h2 class="gwtg-title gwtg-title04">为营销而生</h2>
                <div class="gwtg-wrap">
                    <ul class="service-f01 gwtg-btn">
                        <li class="current">
                            <a href="javascript:;">精准营销</a>
                            <em></em>
                        </li>
                        <li>
                            <a href="javascript:;">客户无限</a>
                            <em></em>
                        </li>
                        <li>
                            <a href="javascript:;">客户管理</a>
                            <em></em>
                        </li>
                        <li>
                            <a href="javascript:;">营销闭环</a>
                            <em></em>
                        </li>
                    </ul>
                    <div class="gwtg-content">
                        <!--1-->
                        <div class="gwtg-c-main" style="display:block">
                            <div class="zmail-p-con">
                                <div class="img img-01 floatR">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/gwtg-04.png"></div>
                                <div class="word word-02 floatL">
                                    <div class="gwtg-left">
                                        <div class="t t01">
                                            <span>精准营销，抢占先机</span></div>
                                        <div class="con">轻松获取访客手机号及访客来源，从而掌握客户需求，实现精准营销</div></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <!--2-->
                        <div class="gwtg-c-main">
                            <div class="zmail-p-con">
                                <div class="img img-02 floatL">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/gwtg-05.png"></div>
                                <div class="word word-02 floatR">
                                    <div class="gwtg-left">
                                        <div class="t t01">
                                            <span>市场广泛，客户无限</span></div>
                                        <div class="con">访客手机号码抓取，三网通关，获取无碍，成本低廉，高性价比</div></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <!--3-->
                        <div class="gwtg-c-main">
                            <div class="zmail-p-con">
                                <div class="img img-01 floatR">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/gwtg-06.png"></div>
                                <div class="word word-02 floatL">
                                    <div class="gwtg-left">
                                        <div class="t t01">
                                            <span>CRM客户管理系统</span></div>
                                        <div class="con">通过对您网站访客的抓取,对有意向客户进行跟进,大大提升成交量</div></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <!--4-->
                        <div class="gwtg-c-main">
                            <div class="zmail-p-con">
                                <div class="img img-02 floatL">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/gwtg-07.png"></div>
                                <div class="word word-02 floatR">
                                    <div class="gwtg-left">
                                        <div class="t t01">
                                            <span>打造营销闭环</span></div>
                                        <div class="con">依托于强大CRM管理系统，对抓取的数据设置加微信好友与邮件推送服务</div></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->render('../common/_ask'); ?>
    </div>
</div>
