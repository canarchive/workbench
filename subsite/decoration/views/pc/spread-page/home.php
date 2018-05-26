<?php
use yii\helpers\Url;

$cssFiles = [
    '5166c-3271', '64701-9059',
];
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'spread/house/collect/css/']);
$jsFiles = [
    'jquery-1.9.1.min', 'common', 
];
$this->params['jsStr'] = $this->render('@common/views/base/_css-js', ['type' => 'js', 'files' => $jsFiles, 'path' => 'spread/house/collect/js/']);
$urls = $this->context->navUrls;

Yii::$app->params['tdkInfos']['title'] = '装修免费设计，免费量房';
Yii::$app->params['tdkInfos']['description'] = '装修设计,量房';
Yii::$app->params['tdkInfos']['keyword'] = '装修设计量房';
$currentSiteInfo = $this->context->currentSiteInfo;
?>

<div class="al1l w">
    <div class="home_top">
        <div class="top_t w">
            <div class="w1">
                <div class="top_t_i fl">
                    <span class="icon_person"></span>
                    <!--<a href="<?= $urls['index']; ?>" title="首页">首页</a>
                    <a href="<?= $urls['merchant']; ?>" title="装修公司">装修公司</a>
                    <a href="<?= $urls['sample']; ?>" title="装修案例">装修案例</a>
                    <a href="<?= $urls['ask']; ?>" title="装修问答">装修问答</a>
                    <a href="<?= $urls['quote']; ?>" title="装修报价">装修报价</a>--></div>
                <!--<div class="top_t_z fr">
                    <a href="javascript: void(0);" class="gr" rel="nofollow">咨询电话</a>
                    <span class="line">|</span>
                    <a href="javascript:void(0);"><?php echo Yii::$app->params['siteHotline']; ?></a>
                    <span class="line">|</span></div>-->
            </div>
        </div>
    </div>
    <!--头部CSS 结束-->
    <link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/css/df018-9721.css" rel="stylesheet" type="text/css" media="all" />
    <div class="sj_banner">
        <div class="sj_banner_c">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/648dd-8363.jpg">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/4d9de-8634.jpg">
            <div class="sj_banner_c1">
                <form method="post">
                    <div class="item">
                        <label class="pop-label">您的称呼：
                            <em class="pop-label-start">*</em></label>
                        <input name="chenghu" data-value="您的称呼" placeholder="您的称呼" type="text"></div>
                    <div class="item">
                        <label class="pop-label">手机号码：
                            <em class="pop-label-start">*</em></label>
                        <input name="mobile" data-value="手机号码（必填）" placeholder="手机号码（必填）" type="text"></div>
                    <div class="item">
                        <label class="pop-label">房屋面积：
                            <em class="pop-label-start">*</em></label>
                        <input placeholder="房屋面积" data-value="房屋面积" name="square" type="text"></div>
                    <!--<div class="item">
                        <label class="pop-label">您的地址：
                            <em class="pop-label-start">*</em></label>
                        <select name="province" id="province" class="inppp">
                            <option value="0">-选择省份-</option>
                            <option value="340000">A 安徽</option>
                            <option value="110000">B 北京</option>
                            <option value="500000">C 重庆</option>
                            <option value="350000">F 福建</option>
                            <option value="440000">G 广东</option>
                            <option value="450000">G 广西</option>
                            <option value="520000">G 贵州</option>
                            <option value="620000">G 甘肃</option>
                            <option value="130000">H 河北</option>
                            <option value="230000">H 黑龙江</option>
                            <option value="410000">H 河南</option>
                            <option value="420000">H 湖北</option>
                            <option value="430000">H 湖南</option>
                            <option value="460000">H 海南</option>
                            <option value="220000">J 吉林</option>
                            <option value="320000">J 江苏</option>
                            <option value="360000">J 江西</option>
                            <option value="210000">L 辽宁</option>
                            <option value="150000">N 内蒙古</option>
                            <option value="640000">N 宁夏</option>
                            <option value="630000">Q 青海</option>
                            <option value="140000">S 山西</option>
                            <option value="310000">S 上海</option>
                            <option value="370000">S 山东</option>
                            <option value="510000">S 四川</option>
                            <option value="610000">S 陕西</option>
                            <option value="120000">T 天津</option>
                            <option value="910000">T 台湾</option>
                            <option value="540000">X 西藏</option>
                            <option value="650000">X 新疆</option>
                            <option value="810000">X 香港</option>
                            <option value="530000">Y 云南</option>
                            <option value="330000">Z 浙江</option></select>
                        <select name="city" id="city" class="inppp">
                            <option value="1">-选择市/区-</option></select>
                    </div>-->
                    <div class="item">
                        <input value="46" name="position" type="hidden">
                        <a class="btn" id="bidBtn2">抢免费设计，装修立省35%</a></div>
                </form>
            </div>
        </div>
    </div>
    <div class="sj_content w1200">
        <div class="sj_box">
            <ul>
                <li>
                    <i class="i1"></i>
                    <p>你装修，我保障!</p>
                    <span>最高可获得500万装修赔付</span></li>
                <li>
                    <i class="i2"></i>
                    <p>行业优惠价格</p>
                    <span>申请装修，立马省35%</span></li>
                <li>
                    <i class="i3"></i>
                    <p>质量有保障</p>
                    <span>第三方监理全程跟进，保证质量</span></li>
                <li>
                    <i class="i4"></i>
                    <p>优惠活动</p>
                    <span>现在申请，再送你家电大礼包</span></li>
            </ul>
        </div>
        <div class="case_0413">
            <div class="title_0413">
                <h3>【 精美效果图 】</h3></div>
            <div class="title_04131 mt20">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/49ffa-9473.jpg"></div>
            <p>现代简约风格由曲线和和非对称线条构成，体现在墙面、栏杆、家具等整体装饰上，色彩明快跳跃，外立面简洁流畅，立面立体层次感较强，外飘窗台外挑阳台或内置阳台，合理运用色块色带处理。体现时代特征为主，没有过分的装饰，一切从功能出发，讲究造型比例适度、空间结构图明确美观，强调外观的明快、简洁。</p>
            <div class="title_0413_content">
                <div class="pic01">
                    <div class="pic01_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/6253b-4444.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/162bb-9729.jpg"></div>
                    <div class="pic01_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/f2a9e-6557.jpg"></div>
                </div>
                <div class="pic02">
                    <div class="pic02_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/1a177-1734.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/d6c00-4238.jpg"></div>
                    <div class="pic02_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/e2a45-2720.jpg"></div>
                </div>
            </div>
        </div>
        <div class="case_0413">
            <div class="title_04131 mt20">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/efcf1-4369.jpg"></div>
            <p>美式田园风格又称美式乡村风格，倡导“回归自然”，田园风格在美学上推崇自然、结合自然，在室内环境中力求表现悠闲、舒畅、自然的田园生活情趣，也常运用天然木、石、藤、竹等材质质朴的纹理。宽敞而富有历史气息的。摒弃了繁琐和豪华，并将不同风格中优秀元素汇集融合，以舒适为向导，强调“回归自然”，使这种风格变得舒适、轻松。</p>
            <div class="title_0413_content">
                <div class="pic03">
                    <div class="pic03_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/35d2e-1249.jpg"></div>
                    <div class="pic03_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/4bd6a-5239.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/3f3d7-6204.jpg"></div>
                </div>
                <div class="pic04">
                    <div class="pic04_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/1c09b-5491.jpg"></div>
                    <div class="pic04_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/9d213-6170.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/55ef3-8336.jpg"></div>
                </div>
            </div>
        </div>
        <div class="case_0413">
            <div class="title_04131 mt20">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/f17db-8089.jpg"></div>
            <p>新中式风格在设计上延续了明清时期家居配饰理念，提炼其中经典元素加以简化和丰富、提取传统家居的精华元素和生活符号进行合理的搭配，在家居形态上更加简洁清秀，布局，在整体的家居设计中既有中式家居的传统韵味又更多的符合了现代人居住的生活特点，让古典与现代完美结合，传统与时尚并存。</p>
            <div class="title_0413_content">
                <div class="pic01">
                    <div class="pic01_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/74724-7323.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/d3fe7-9940.jpg"></div>
                    <div class="pic01_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c886b-9131.jpg"></div>
                </div>
                <div class="pic02">
                    <div class="pic02_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/18733-1901.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/e9a9f-7849.jpg"></div>
                    <div class="pic02_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/9a253-1747.jpg"></div>
                </div>
            </div>
        </div>
        <div class="case_0413">
            <div class="title_04131 mt20">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/b7c6f-1279.jpg"></div>
            <p>欧式复古风格它在形式上以浪漫主义为基础，装修材料常用大理石、多彩的织物、精美的地毯，精致的法国壁挂，整个风格豪华、富丽，充满强烈的动感效果。最大的特点是在造型上极其讲究，给人的感觉端庄典雅、高贵华丽，具有浓厚的文化气息。在家具选配上，一般采用宽大精美的家具，配以精致的雕刻，整体营造出一种华丽、高贵、温馨的感觉。</p>
            <div class="title_0413_content">
                <div class="pic03">
                    <div class="pic03_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/2f8a5-2663.jpg"></div>
                    <div class="pic03_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a50c4-5857.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/d2632-5161.jpg"></div>
                </div>
                <div class="pic04">
                    <div class="pic04_1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/713e6-7373.jpg"></div>
                    <div class="pic04_2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/10a50-7914.jpg">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/6fb56-1425.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-hd clearfix">
            <div class="box">
                <!--<div class="about">
                    <div class="item_about rd">
                        <dl>
                            <dt>
                                <span class="a1">关于我们</span></dt>
                            <dd>
                                <span class="a2"><a href="<?= $urls['desc']; ?>" rel="nofollow">公司介绍</a></span>
                            </dd>
                            <dd>
                                <span class="a2"><a href="<?= $urls['contactus']; ?>" rel="nofollow">联系我们</a></span>
                            </dd>
                            <dd>
                                <span class="a2"><a href="<?= $urls['statement']; ?>" rel="nofollow">声明</a></span>
                            </dd>
                        </dl>
                    </div>
                    <div class="item_about rd">
                        <dl>
                            <dt>
                                <span class="a1">我要装修</span></dt>
                            <dd>
                                <span class="a2"><a href="<?= $urls['merchant']; ?>">装修公司</a></span>
                            </dd>
                            <dd>
                                <span class="a2"><a href="<?= $urls['ask']; ?>">装修问答</a></span>
                            </dd>
                            <dd>
                                <span class="a2"><a href="<?= $urls['quote']; ?>">装修报价</a></span>
                            </dd>
                        </dl>
                    </div>
                    <div class="item_about rd">
                        <dl>
                            <dt><span class="a1">我是装修公司</span></dt>
                            <dd>
                                <span class="a2">
                                    <a href="http://www.weinaya.com/" rel="nofollow">商家服务</a></span>
                            </dd>
                        </dl>
                    </div>
                </div>-->
                <!--<div class="weibo">
                    <div class="wb_tel">
                        <ul>
                            <li><span>联系客服</span></li>
                            <li>周一至周日：08:00-22:00</li>
                            <li>全国统一服务热线：</li>
                            <li><?= Yii::$app->params['siteHotline']; ?></li></ul>
                    </div>
                    <div class="wb_pub">
                        <p class="t1">微信公众号</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/images/company_logo.png" width="96" height="96" /></p>
                        <p class="t2">在微信上关注我们！</p></div>
                    <div class="wb_pub">
                        <p class="t1">家装网APP下载</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/5996f-6277.jpg" width="96" height="96" /></p>
                        <p class="t2">下载APP获得更多服务！</p></div>
                </div>-->
            </div>
        </div>
        <!-- end box -->
        <div class="box">
            <div class="icon">
                <div class="list">
                    <a href="javascript:void(0);" rel="nofollow">
                        <i class="icon1"></i>免费量房
                        <em></em></a>
                    <a href="javascript:void(0);" rel="nofollow">
                        <i class="icon2"></i>免费设计
                        <em></em></a>
                    <a href="javascript:void(0);" rel="nofollow">
                        <i class="icon3"></i>免费报价
                        <em></em></a>
                    <a href="javascript:void(0);" rel="nofollow">
                        <i class="icon4"></i>先行赔付
                        <em></em></a>
                    <a href="javascript:void(0);" rel="nofollow">
                        <i class="icon5"></i>业主监督
                        <em></em></a>
                    <a href="javascript:;">
                        <i class="icon6"></i>装修保障</a>
                </div>
            </div>
            <div class="copyright">
                <ul>
                    <li>免责声明：本网站部分内容由用户自行上传，如权利人发现存在误传其作品情形，请及时与本站联系</li>
                    <li><?= $currentSiteInfo['copy']; ?></li>
					<?php if (isset($currentSiteInfo['address'])) { ?><li>地址：<?= $currentSiteInfo['address']; ?></li><?php } ?>
					<?php if (isset($currentSiteInfo['hotline'])) { ?><li>电话: <?= $currentSiteInfo['hotline']; ?></li><?php } ?>
                    <li><?= $currentSiteInfo['icp']; ?></li>
            </div>
            <div class="icpico">
                <a href="javascript:;" class="ico1"></a>
                <a href="javascript:;" class="ico2"></a>
                <a href="javascript:;" class="ico3"></a>
            </div>
        </div>
    </div>
</div>
<!-- end warp -->
<div class="floating_ck" style="display: none">
    <dl>
        <dd class="return">
            <div onClick="window.scrollTo(0,0);return false;">
                <i class="con_04"></i>
                <span>返回顶部</span></div>
        </dd>
    </dl>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/layer.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/all_layer.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/jquery.lazyload.js"></script>
<!--<div style="left: -150%;" class="bottom_fiexd_box zxbj-apply-bottom-bar">
    <form name="zxbj_area_form">
        <ul style="display: none" name="zxbj_area_box"></ul>
    </form>
    <input type="hidden" name="ptag" value="1_1_1_99">
    <div class="bottom_sjybj_bg"></div>
    <div class=" bottom_fiexd_sjybj ">
        <div class="container clearfix">
            <div class="bottom_sjybj_left">
                <em class="sjybj_mx"></em>
            </div>
            <div class="bottom_sjybj_center cl">
                <div style="" class="bottom_sjybj_content step1">
                    <p>今日已有
                        <span class="apply_mn">440</span>位业主预约</p>
                    <div class="elment mt20b5">
                        <input type="text" class="inp1" name="bottom_input_name">
                        <em class="placeholder" data-value="您的称呼">您的称呼</em>
                        <input type="text" class="inp01" name="bottom_input_phone">
                        <em class="placeholder01" data-value="你的手机号码">你的手机号码</em></div>
                    <div class="elment mb7 cl">
                        <select id="Bottom_Huxing" name="User_Bottom_Huxing" class="sel2">
                            <option value="0">房屋户型</option>
                            <option value="4">一居室</option>
                            <option value="5">两居室</option>
                            <option value="6">三居室</option>
                            <option value="7">四居室</option>
                            <option value="37">别墅</option>
                            <option value="39">工装</option>
                            <option value="46">复式楼</option></select>
                        <select id="Bottom_Budget" name="User_Bottom_Budget" class="sel2">
                            <option value="0">装修预算</option>
                            <option value="10">3万以下</option>
                            <option value="11">3-5万</option>
                            <option value="12">5-8万</option>
                            <option value="13">8-10万</option>
                            <option value="14">10-12万</option>
                            <option value="15">12-15万</option>
                            <option value="38">15-30万</option>
                            <option value="47">30万以上</option></select>
                        <a searchtage="first" class="btn_ffa00b" href="javascript:void(0);">立即申请</a></div>
                    <div class="erro" style="display:none"></div>
                </div>
                <div class="bottom_sjybj_right">
                    <div class="sjybj_txt">扫一扫，关注有礼</div>
                    <em class="two_code"></em>
                    <em class="icn_tip_close"></em>
                </div>
            </div>
        </div>
    </div>
</div>-->
<a class="bottom_show_left zxbj-apply-bottom-bar-link" href="javascript:void(0);" style="left: -40px"></a>
<script>//弹出一个页面层
    $('a[link="topLogin"]').on('click',
    function() {
        login();
    });
    function login() {
        layer.open({
            title: '欢迎登录',
            type: 1,
            area: ['435px', '320px'],
            shadeClose: true,
            //点击遮罩关闭
            content: $('.login_popup')
        });
    }
    $('#loginBtn').click(function() {
        var name = $('[name="loginName"]').val();
        if (name.length < 8) {
            layer.alert('请输入正确的登录账号!', {
                title: '登录提示',
                time: 1500,
                end: function() {
                    $('[name="loginName"]').focus();
                }
            });
            return;
        }
        var pwd = $('[name="loginPwd"]').val();
        if (pwd.length < 6) {
            layer.alert('请输入登录密码!', {
                title: '登录提示',
                time: 1500,
                end: function() {
                    $('[name="loginPwd"]').focus();
                }
            });
            return;
        }
        var data = {};
        data.username = name;
        data.password = pwd;
        $.ajax({
            type: 'post',
            url: '/public/ajaxLogin/',
            data: data,
            dataType: 'json',
            success: function(result) {
                if (result.status == 1) {
                    layer.alert(result.msg, {
                        title: '登录提示',
                        time: 1500,
                        end: function() {
                            window.location.reload();
                        }
                    });
                } else {
                    layer.alert(result.msg, {
                        time: 1500
                    });
                }
            }
        })
    });
    $('a[link="topLogout"]').on('click',
    function() {
        $.post('/public/ajaxLogout/', {},
        function(result) {
            if (result.url) {
                window.location.reload();
            }
        },
        'json');
    });</script>
<script type="text/javascript">$(window).on('scroll resize',
    function() {
        $('.floating_ck').show();
        if ($(window).scrollTop() > 273) {
            $('.return').show();
        } else {
            $('.return').hide();
        }
    });
    $('a[id="changeCity"]').click(function() {
        $.cookie('jia_wdefaultID', null, {
            domain: '.weinaya.com',
            path: '/'
        });
        window.location.href = 'http://www.weinaya.com';
    });

    $(function() {
        $("img.lazy").lazyload({
            threshold: 400,
            effect: "fadeIn",
            placeholder: '<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/images/load.png'
        });
        var url = window.location.search; //获取?号和问号后的参数
        var str = url.substring(1, 9); //截取从某处开始的字符串
        if (str == 'url_from' || str == 'from_url') {
            var tg = url.substring(10); //截取从某处开始的字符串
            $.cookie('jia_wformurl', tg, {
                expires: 7,
                path: '/'
            });
        }
    });</script>
<div style="display: none">
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/bidding.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/bottom_left.js"></script>
<script type="text/javascript">
/*$('[name="province"]').change(function() {
$('#city').html('');
var id = $(this).val();
$.ajax({
    type: 'get',
    url: '/Public/getArea/',
    data: {
        area: id
    },
    dataType: 'json',
    success: function(result) {
        var html = '';
        for (var i in result) {
            if (result[i] !== null) {
                html += '<option value="' + result[i]['id'] + '">' + result[i]['name'] + '</option>'
            }
        }
        $('#city').append(html);
    }
});
});*/
$(function() {
var url = window.location.search; //获取?号和问号后的参数
var str = url.substring(1, 9); //截取从某处开始的字符串
if (str == 'url_from' || str == 'from_url') {
    var tg = url.substring(10); //截取从某处开始的字符串
    $.cookie('jia_wformurl', tg, {
        expires: 7,
        path: '/'
    });
}
});</script>
