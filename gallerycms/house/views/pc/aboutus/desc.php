<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'new_global_forold', 'global', 'style_new',
];
$this->params['jsFiles'] = [
    'jquery', 'common', 'user_login', 'common_new_forold', 
];
$this->params['formPosition'] = 'aboutus-desc';
$this->params['formPositionName'] = '关于我们';
?>
<div class="header">
    <?= $this->render('@gallerycms' . '/views/common/pc/header-to-top'); ?>
    <?= $this->render('@gallerycms' . '/views/common/pc/header-to-mid'); ?>
    <?= $this->render('@gallerycms' . '/views/common/pc/header-to-nav'); ?>
</div>
<a href="http://hr.to8to.com/xyzp" target="_blank" class="about_nav_bg"></a>
<span class="slider_container"></span>
<div class="about_nav">
    <ul>
        <li class="about_nav_cur notLine">
            <a href="http://www.to8to.com/about/index.html">关于土巴兔</a></li>
        <li>
            <a href="http://www.to8to.com/about/jl_bz.php">质检保障</a></li>
        <li>
            <a href="http://www.to8to.com/about/shangwu.php">商务合作</a></li>
        <li>
            <a href="http://www.to8to.com/about/join_us.php?act=join_us1">加入土巴兔</a></li>
        <li>
            <a href="http://www.to8to.com/about/contact.html">联系我们</a></li>
    </ul>
    <i class="bottom_shadow"></i>
</div>
<div class="w970">
    <div class="grid">
        <div class="about_sidebar sidebar_type1">
            <div class="about_sidebar_title" style="border:0;">
                <i class="circle_pic"></i>
                <h4>关于土巴兔</h4>
                <span>ABOUT TUBATU</span></div>
            <ul>
                <li class="about_sidebar_cur">
                    <a href="">公司简介</a></li>
                <li>
                    <a href="http://to8to.com/about/culture.html">企业文化</a></li>
                <li>
                    <a href="http://www.to8to.com/about/meiti_bd.php">媒体报道</a></li>
                <!-- <li><a href="http://www.to8to.com/about/publicPraise.php?act=5">合作媒体</a></li>-->
                <li>
                    <a href="http://www.to8to.com/about/law.html">法律声明</a></li>
                <li>
                    <a href="http://www.to8to.com/about/yuangong.php">员工风采</a></li>
                <li>
                    <a href="http://www.to8to.com/about/publicPraise.php">业主口碑</a></li>
            </ul>
        </div>
        <div class="about_main">
            <div class="company_intro about_box">
                <div class="about_center_title">
                    <h5 class="noBold">公司简介
                        <span>Company Profile</span></h5>
                </div>
                <ul class="c_intro_list">
                    <li>
                        <div class="c_intro_text fr">
                            <div class="c_intro_img fl">
                                <img src="http://img.to8to.com/front_end/pic/companyBg1.jpg" alt="" width="262" height="184" /></div>
                            <p>　　土巴兔—互联网装修领导者（中国建筑装饰行业协会认证），土巴兔由深圳市彬讯科技有限公司创办，总部位于深圳市南山区科技园，是国家级的高新技术企业。
                                <br/>　　自2008年创办以来，土巴兔始终秉承“用心服务用户来赢得口碑和利益”的经营理念，并始终处于高速而稳健的发展态势。截止目前，土巴兔已开通250个城市分站，汇聚全国近7万多家正规装修公司、95万名室内设计师，已成立北京、上海、广州、武汉、长沙、南京、杭州、厦门、福州等27家分公司，当前拥有员工超过1500人。</p>
                            <p>　　根据百度发布的一份报告显示，中国每天大约有500万人检索装修、家具、建材相关的信息，而土巴兔平台当前每天有超过400万的独立用户，也就是说每2个中国人寻找装修、家具、建材相关的信息，就有超过一个会通过土巴兔平台来完成。2015年，土巴兔获得了全球著名投资基金红杉资本、经纬创投等机构的C轮2亿美金投资，这也是迄今为止，装修家居电子商务领域获得的一笔高额投资。</p>
                            <p>　　土巴兔致力于让天下没有烦心的装修。为实现这个使命，全体土巴兔人不断努力，推动装修、建材、家居市场的规范化，改变着数千万家庭的装修方式和置家理念，为用户创造卓越的互联网装修体验。作为互联网装修企业，土巴兔将通过O2O的模式，为传统装修及家居领域带来新的变革，不断为用户创造价值，推动行业发展。</p>
                            <p>　　打造开放、共赢的装修家居生态系统，推动行业更阳光、更透明。土巴兔用实际行动获得众多的关注，相继受到央视网、光明网、新华网、凤凰网、第一财经周刊、21世纪商业评论、IT经理世界、36氪 等多家媒体的关注与报道。2011年土巴兔和腾讯、华为一并入选《深圳质量报告》当作质量工程典范；2014年当选《中国企业家》主办的“未来之星”100强企业、荣膺“全国工商联家居电商专委会执行会长单位”、“中国互联网诚信示范企业”荣誉称号，同年还获得“21世纪中国最佳商业模式奖”。</p>
                        </div>
                    </li>
                </ul>
                <dl class="dec_cause">
                    <dt>装修怕上当，就上土巴兔</dt>
                    <dd>
                        <div class="cause_img1">
                            <span>收房不上当</span></div>
                        <p>土巴兔通过遍布主流城市的线下质检队伍，免费帮助业主验房，杜绝被收房。</p>
                    </dd>
                    <dd>
                        <div class="cause_img2">
                            <span>装修价格不上当</span></div>
                        <p>通过让业主免费获得多份由正规公司出具的设计方案和报价，再结合土巴兔提供的免费预算审核来榨干水份。</p>
                    </dd>
                    <dd>
                        <div class="cause_img3">
                            <span>选装修公司不上当</span></div>
                        <p>土巴兔平台的装修公司都为正规有资质的装修公司。支持装修满意后付款，来轻松锁定正规装修公司。</p>
                    </dd>
                    <dd>
                        <div class="cause_img4">
                            <span style="padding-top:125px;">装修款不上当</span></div>
                        <p>土巴兔的业主，可以通过申请“装修保”，质检上门配合业主和装修公司签订一个第三方的保障合同。</p>
                    </dd>
                    <dd>
                        <div class="cause_img5">
                            <span style="padding-top:125px;">材料价格不上当</span></div>
                        <p>土巴兔提供“全城材料报价”的查询，业主在下单购买前，可致电土巴兔了解市场价格。我们承诺“差价双倍赔偿”</p>
                    </dd>
                    <dd>
                        <div class="cause_img6">
                            <span style="padding-top:125px;">施工质量不上当</span></div>
                        <p>土巴兔的业主可以在线申请免费质检，土巴兔质检提供免费4次关键节点上门验收服务，帮助业主来验收质量。</p>
                    </dd>
                </dl>
                <div class="about_center_title">
                    <h5 class="noBold">大家眼中的土巴兔
                        <span>TUBATU in Some People's eyes</span></h5>
                </div>
                <div class="people_talk_box">
                    <a href="javascript:;" class="chgRow chgLeft"></a>
                    <a href="javascript:;" class="chgRow chgRight"></a>
                    <div class="people_talk_list_box">
                        <ul class="people_talk_list">
                            <li>
                                <img data-src="http://img.to8to.com/front_end/pic/to8to_people1_cur.jpg" alt="" src="http://img.to8to.com/front_end/pic/to8to_people1.jpg" width="118" height="118" /></li>
                            <li>
                                <img data-src="http://img.to8to.com/front_end/pic/to8to_people2_cur.jpg" alt="" src="http://img.to8to.com/front_end/pic/to8to_people2.jpg" width="118" height="118" /></li>
                            <li>
                                <img data-src="http://img.to8to.com/front_end/pic/to8to_people3_cur.jpg" alt="" src="http://img.to8to.com/front_end/pic/to8to_people3.jpg" width="118" height="118" /></li>
                            <li>
                                <img data-src="http://img.to8to.com/front_end/pic/to8to_people6_cur.jpg" alt="" src="http://img.to8to.com/front_end/pic/to8to_people6.jpg" width="118" height="118" /></li>
                            <li>
                                <img data-src="http://img.to8to.com/front_end/pic/to8to_people7_cur.jpg" alt="" src="http://img.to8to.com/front_end/pic/to8to_people7.jpg" width="118" height="118" /></li>
                            <li>
                                <img data-src="http://img.to8to.com/front_end/pic/to8to_people4_cur.jpg" alt="" src="http://img.to8to.com/front_end/pic/to8to_people4.jpg" width="118" height="118" /></li>
                            <li>
                                <img data-src="http://img.to8to.com/front_end/pic/to8to_people5_cur.jpg" alt="" src="http://img.to8to.com/front_end/pic/to8to_people5.jpg" width="118" height="118" /></li>
                        </ul>
                    </div>
                </div>
                <ul class="p_talkCenter_list">
                    <li>
                        <strong>合伙人 Michael</strong>
                        <span>美国著名风投 MATRIX 基金</span>
                        <p>
                            <i class="l_symbol"></i>土巴兔坚持为广大装修业主创造价值，已经免费为数百万的家庭提供了量房、审核报价、第三方质检 和装修保等服务，广受好评。我们看好土巴兔团队的执行力和持续创新能力，并将一如既往的给予全 方位的支持，期待公司成为中国装修领域一家伟大的互联网公司。
                            <i class="r_symbol"></i></p>
                    </li>
                    <li>
                        <strong>2011年进入土巴兔 Ken</strong>
                        <span>海南师范大学 视觉传达专业 硕士</span>
                        <p>
                            <i class="l_symbol"></i>关于土巴兔，有太多的点可以说，团队精神、务实精神、行动力、创造力等等。我觉得最核心的一点 是：我们是一 个崇尚"正直坦诚"的，富有人情味而且非常快乐的团队；我们也正在以这种正能量说 服，感染，吸纳越来越多的 人和合作方加入到我们的事业中来，这是我坚信土巴兔前景光明的原因。
                            <i class="r_symbol"></i></p>
                    </li>
                    <li>
                        <strong>科源集团总工程师 黄庭</strong>
                        <span>深圳市室内设计师协会首届理事会副会长</span>
                        <p>
                            <i class="l_symbol"></i>初识土巴兔人，你就会强烈地感觉到：这是一群朝气十足的年轻精英；这是一个勇于创新的专业团队， 他们拥有一颗诚挚的敬业之心；他们满怀无私奉献精神服务社会，正是他们，成功了一个又一个普通的设计师；正是他们，成就了土巴兔事业一次又一次的辉煌！土巴兔人——广大设计师的良师益友！
                            <i class="r_symbol"></i></p>
                    </li>
                    <li style="display:block;">
                        <strong>58同城总裁兼CEO 姚劲波</strong>
                        <span>58同城</span>
                        <p>
                            <i class="l_symbol"></i>家装是一个万亿级的市场，我认为将有可能诞生一个巨大的垂直类平台。中国到现在成功的O2O企业不多，但是土巴兔毫无疑问是其中出色的一家。它拥有巨大的市场，能找到用户的痛点，拥有一个独特的团队。有了这些条件，那么这件事情是必成的，我也希望土巴兔能做成在深圳仅次于腾讯的互联网公司。
                            <i class="r_symbol"></i></p>
                    </li>
                    <li>
                        <strong>红杉资本中国基金副总裁 邹家佳</strong>
                        <span>红杉资本</span>
                        <p>
                            <i class="l_symbol"></i>土巴兔正在做一个伟大的事业，在互联网大潮汹涌而至时，它正好赶上了大潮，且站到了风口，被资本看重。我非常高兴看到了Robin和他年轻的团队，运用了最新的互联网技术和思维，努力地帮助老百姓去解决装修痛点。红杉对土巴兔与58同城此次的战略结盟非常看好，希望通过这次的强强联合，使产业服务链更加紧密和完善。
                            <i class="r_symbol"></i></p>
                    </li>
                    <li>
                        <strong>盘石设计董事长 吴文粒</strong>
                        <span>盘石室内设计有限公司</span>
                        <p>
                            <i class="l_symbol"></i>土巴兔，帮助企业实现网上宣传，为业主、设计师、装修公司和商家之间提供了更高效，更绿色，更 和谐的交流平台，实现节约、共享、互助、多赢的目标。无愧于中国装修门户。
                            <i class="r_symbol"></i></p>
                    </li>
                    <li>
                        <strong>尚领装饰总经理 尚树军</strong>
                        <span>深圳市尚领装饰工程有限公司</span>
                        <p>
                            <i class="l_symbol"></i>通过土巴兔的平台桥梁，业主与我司合作的业务量明显增加，且在土巴兔具有丰富的信息资源及全面 的功能模块，签单成功率高；口碑好，订单就会频频而来。土巴兔严格审核确保了业主信息的真实性。土巴兔的"远程管工地"、"看业主预约"等功能，更全面的展示了我司优质服务。
                            <i class="r_symbol"></i></p>
                    </li>
                </ul>
                <div class="about_center_title">
                    <h5 class="noBold">业主眼中的土巴兔
                        <span>TUBATU in Owners'Eyes</span></h5>
                </div>
                <div class="owner_ey">
                    <ul>
                        <li class="pr20">
                            <i>
                            </i>
                            <a class="yz_nick" href="http://www.to8to.com/riji/scenedetail.php?id=2678688&order=jinxuan" target="_blank">业主：蝗虫zZ</a>
                            <p>
                                <a href="http://www.to8to.com/riji/scenedetail.php?id=2678688&order=jinxuan" target="_blank">2015年12月无意间在网上看到土巴兔的网站，也是无意中知道土巴兔除了介绍三个装修公司之外还有工长模式。</a>
                                <a class="search_qw" href="http://www.to8to.com/riji/scenedetail.php?id=2678688&order=jinxuan" target="_blank">查看全文>></a></p>
                        </li>
                        <li class="pl20">
                            <i>
                            </i>
                            <a class="yz_nick" href="http://www.to8to.com/riji/scenedetail.php?id=2479197&order=jinxuan" target="">业主：胡某某某</a>
                            <p>
                                <a href="http://www.to8to.com/riji/scenedetail.php?id=2479197&order=jinxuan" target="_blank">在2015深圳房市不平凡的一年，毅然决然买了套小两房以方便小孩上学！8月16日拿到钥匙，在此之前已经想好装修就找土巴兔！</a>
                                <a class="search_qw" href="http://www.to8to.com/riji/scenedetail.php?id=2479197&order=jinxuan" target="_blank">查看全文>></a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://static.to8to.com/gb_js/about_new.js?20140219" type="text/javascript"></script>
<script src="http://www.to8to.com/count/2a19dc2ac1471a7470fe7187a5537960.js"></script>
<div class="cler"></div>
<?= $this->render('@gallerycms' . '/views/common/pc/footer-to'); ?>
