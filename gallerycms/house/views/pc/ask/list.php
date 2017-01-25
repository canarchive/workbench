<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['768a5-2994', '2a61f-3180', '89183-8983'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('_js-header');
$this->params['bodyClass'] = 'class="narrow_980"';
?>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/ask.js"></script>
<div class="ask_class">
    <div class="global_pie">
        <div class="global_pie_container">
            <ul>
                <li class="has_arrow">
                    <a href="http://www.to8to.com/gonglve/">装修攻略</a>
                    <span class="nav_arrow_right"></span>
                </li>
                <li class="has_arrow">
                    <a href="http://www.to8to.com/ask/">问答</a>
                    <span class="nav_arrow_right"></span>
                </li>
                <li class="has_arrow">
                    <a href="http://www.to8to.com/ask/more-h2i5">家装设计</a>
                    <span class="nav_arrow_right"></span>
                </li>
                <li>客厅</li></ul>
        </div>
    </div>
    <div class="container clear">
        <div class="col2_1">
            <div class="mod_tab ask_classtab">
                <div class="mod_tab_hd">
                    <ul class="clear">
                        <li class="on">
                            <a href="more-h2i5">家装设计</a></li>
                        <li>
                            <a href="more-h3i5">装修流程</a></li>
                        <li>
                            <a href="more-h4i5">家居产品</a></li>
                        <li>
                            <a href="more-h5i5">装饰材料</a></li>
                        <li>
                            <a href="more-h6i5">公装设计</a></li>
                        <li>
                            <a href="more-h7i5">房产知识</a></li>
                        <li>
                            <a href="more-h8i5">技术专区</a></li>
                    </ul>
                </div>
                <div class="mod_tab_bd">
                    <div class="mod_tab_bditem">
                        <a href="more-h2s0i5" class="class_lnk">装修风水</a>
                        <a href="more-h2s1i5" class="class_lnk">装修风格</a>
                        <a href="more-h2s2i5" class="class_lnk class_lnk_on">客厅</a>
                        <a href="more-h2s3i5" class="class_lnk">玄关</a>
                        <a href="more-h2s4i5" class="class_lnk">过道</a>
                        <a href="more-h2s5i5" class="class_lnk">卧室</a>
                        <a href="more-h2s6i5" class="class_lnk">书房</a>
                        <a href="more-h2s7i5" class="class_lnk">餐厅</a>
                        <a href="more-h2s8i5" class="class_lnk">厨房</a>
                        <a href="more-h2s9i5" class="class_lnk">阳台</a>
                        <a href="more-h2s10i5" class="class_lnk">花园</a>
                        <a href="more-h2s11i5" class="class_lnk">卫生间</a>
                        <a href="more-h2s12i5" class="class_lnk">儿童房</a>
                        <a href="more-h2s13i5" class="class_lnk">衣帽间</a>
                        <a href="more-h2s14i5" class="class_lnk">别墅</a>
                        <a href="more-h2s15i5" class="class_lnk">小户型</a>
                        <a href="more-h2s16i5" class="class_lnk">二手房装修</a>
                        <a href="more-h2s17i5" class="class_lnk">复式</a>
                        <a href="more-h2s18i5" class="class_lnk">样板间</a>
                        <a href="more-h2s19i5" class="class_lnk">装饰柜</a>
                        <a href="more-h2s20i5" class="class_lnk">其他</a></div>
                    <div class="mod_tab_bditem" style="display: none;">
                        <a href="more-h3s0i5" class="class_lnk">新房验收</a>
                        <a href="more-h3s1i5" class="class_lnk">收费咨询</a>
                        <a href="more-h3s2i5" class="class_lnk">装修预算</a>
                        <a href="more-h3s3i5" class="class_lnk">装修合同</a>
                        <a href="more-h3s4i5" class="class_lnk">施工工艺</a>
                        <a href="more-h3s5i5" class="class_lnk">业主维权</a>
                        <a href="more-h3s6i5" class="class_lnk">环保检测</a>
                        <a href="more-h3s7i5" class="class_lnk">装修公司</a>
                        <a href="more-h3s8i5" class="class_lnk">完工验收</a>
                        <a href="more-h3s9i5" class="class_lnk">水电改造</a>
                        <a href="more-h3s10i5" class="class_lnk">维护保养</a>
                        <a href="more-h3s11i5" class="class_lnk">其它</a></div>
                    <div class="mod_tab_bditem" style="display: none;">
                        <a href="more-h4s0i5" class="class_lnk">家具</a>
                        <a href="more-h4s1i5" class="class_lnk">卫浴设备</a>
                        <a href="more-h4s2i5" class="class_lnk">灯具/照明</a>
                        <a href="more-h4s3i5" class="class_lnk">儿童家具/用品</a>
                        <a href="more-h4s4i5" class="class_lnk">家用电器</a>
                        <a href="more-h4s5i5" class="class_lnk">橱柜</a>
                        <a href="more-h4s6i5" class="class_lnk">厨卫电器</a>
                        <a href="more-h4s7i5" class="class_lnk">厨房用具</a>
                        <a href="more-h4s8i5" class="class_lnk">地毯</a>
                        <a href="more-h4s9i5" class="class_lnk">饰品</a>
                        <a href="more-h4s10i5" class="class_lnk">庭院/花园</a>
                        <a href="more-h4s11i5" class="class_lnk">暖气设备</a>
                        <a href="more-h4s12i5" class="class_lnk">家庭影院</a>
                        <a href="more-h4s13i5" class="class_lnk">壁炉/火炉</a>
                        <a href="more-h4s14i5" class="class_lnk">天花板/吊顶</a>
                        <a href="more-h4s15i5" class="class_lnk">床上用品</a>
                        <a href="more-h4s16i5" class="class_lnk">窗帘/配件</a>
                        <a href="more-h4s17i5" class="class_lnk">日杂用品</a>
                        <a href="more-h4s18i5" class="class_lnk">其他</a>
                        <a href="more-h4s19i5" class="class_lnk">家居生活</a>
                        <a href="more-h4s20i5" class="class_lnk">婚嫁</a></div>
                    <div class="mod_tab_bditem" style="display: none;">
                        <a href="more-h5s0i5" class="class_lnk">夹板木材</a>
                        <a href="more-h5s1i5" class="class_lnk">地板</a>
                        <a href="more-h5s2i5" class="class_lnk">涂料/油漆</a>
                        <a href="more-h5s3i5" class="class_lnk">瓷砖/石材</a>
                        <a href="more-h5s4i5" class="class_lnk">门窗</a>
                        <a href="more-h5s5i5" class="class_lnk">五金</a>
                        <a href="more-h5s6i5" class="class_lnk">壁纸</a>
                        <a href="more-h5s7i5" class="class_lnk">水龙头</a>
                        <a href="more-h5s8i5" class="class_lnk">建筑构件</a>
                        <a href="more-h5s9i5" class="class_lnk">管材管件</a>
                        <a href="more-h5s10i5" class="class_lnk">其他</a></div>
                    <div class="mod_tab_bditem" style="display: none;">
                        <a href="more-h6s0i5" class="class_lnk">办公楼</a>
                        <a href="more-h6s1i5" class="class_lnk">商场</a>
                        <a href="more-h6s2i5" class="class_lnk">专卖店</a>
                        <a href="more-h6s3i5" class="class_lnk">酒店宾馆/客房</a>
                        <a href="more-h6s4i5" class="class_lnk">餐饮酒吧</a>
                        <a href="more-h6s5i5" class="class_lnk">歌舞迪厅</a>
                        <a href="more-h6s6i5" class="class_lnk">休闲健身</a>
                        <a href="more-h6s7i5" class="class_lnk">体育场馆</a>
                        <a href="more-h6s8i5" class="class_lnk">会展剧场</a>
                        <a href="more-h6s9i5" class="class_lnk">博物馆</a>
                        <a href="more-h6s10i5" class="class_lnk">图书馆</a>
                        <a href="more-h6s11i5" class="class_lnk">学校</a>
                        <a href="more-h6s12i5" class="class_lnk">医院</a>
                        <a href="more-h6s13i5" class="class_lnk">机场车船站</a>
                        <a href="more-h6s14i5" class="class_lnk">工厂</a>
                        <a href="more-h6s15i5" class="class_lnk">公园广场</a>
                        <a href="more-h6s16i5" class="class_lnk">会所</a>
                        <a href="more-h6s17i5" class="class_lnk">园林</a>
                        <a href="more-h6s18i5" class="class_lnk">其他</a></div>
                    <div class="mod_tab_bditem" style="display: none;">
                        <a href="more-h7s0i5" class="class_lnk">购房资格</a>
                        <a href="more-h7s1i5" class="class_lnk">购房税费</a>
                        <a href="more-h7s2i5" class="class_lnk">委托担保</a>
                        <a href="more-h7s3i5" class="class_lnk">交易流程</a>
                        <a href="more-h7s4i5" class="class_lnk">产权产证</a>
                        <a href="more-h7s5i5" class="class_lnk">购房首付</a>
                        <a href="more-h7s6i5" class="class_lnk">贷款利率</a>
                        <a href="more-h7s7i5" class="class_lnk">贷款流程</a>
                        <a href="more-h7s8i5" class="class_lnk">贷款类型</a>
                        <a href="more-h7s9i5" class="class_lnk">公积金</a>
                        <a href="more-h7s10i5" class="class_lnk">商品房</a>
                        <a href="more-h7s11i5" class="class_lnk">限价房</a>
                        <a href="more-h7s12i5" class="class_lnk">经适保障房</a>
                        <a href="more-h7s13i5" class="class_lnk">民房土地</a>
                        <a href="more-h7s14i5" class="class_lnk">房产政策</a>
                        <a href="more-h7s15i5" class="class_lnk">合同协议</a>
                        <a href="more-h7s16i5" class="class_lnk">房屋性质</a>
                        <a href="more-h7s17i5" class="class_lnk">其他</a></div>
                    <div class="mod_tab_bditem" style="display: none;">
                        <a href="more-h8s0i5" class="class_lnk">3DMAX</a>
                        <a href="more-h8s1i5" class="class_lnk">VR</a>
                        <a href="more-h8s2i5" class="class_lnk">LS</a>
                        <a href="more-h8s3i5" class="class_lnk">AutoCAD</a>
                        <a href="more-h8s4i5" class="class_lnk">Photoshop</a>
                        <a href="more-h8s5i5" class="class_lnk">电脑网络问题</a>
                        <a href="more-h8s6i5" class="class_lnk">模型材质</a>
                        <a href="more-h8s7i5" class="class_lnk">培训认证</a>
                        <a href="more-h8s8i5" class="class_lnk">手机问题</a></div>
                </div>
            </div>
            <div class="mod_sort">
                <ul class="sort_type">
                    <li>
                        <a href="more.php?btype=2&amp;stype=2&amp;id=5&amp;npaixu=1" rel="nofollow">按回答数排序
                            <i class="ico_sort_downoff"></i></a>
                    </li>
                    <li class="on">
                        <a href="more.php?btype=2&amp;stype=2&amp;id=5&amp;tpaixu=2" rel="nofollow">按时间排序
                            <i class="ico_sort_downon"></i></a>
                    </li>
                </ul>
                <div class="sort_state">
                    <a href="javascript:;" rel="nofollow" class="state_on">全部
                        <i class="triangle_down"></i></a>
                    <ul class="state_list">
                        <li>
                            <a href="more-h2s2i5" rel="nofollow">全部</a></li>
                        <li>
                            <a href="more-h2s2i7" rel="nofollow">已解决</a></li>
                        <li>
                            <a href="more-2s2i3" rel="nofollow">待解决</a></li>
                        <li>
                            <a href="more-h2s2i6" rel="nofollow">已关闭</a></li>
                    </ul>
                </div>
            </div>
            <div class="question_list">
                <ul>
                    <li>
                        <div class="question_hd">
                            <a href="k6318507.html" target="_blank" class="ect">[客厅]求大神解答电视墙怎么做简单好看</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-02 19:03:19</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6317735.html" target="_blank" class="ect">[客厅]没有电视的客厅如何设计了解的亲说下</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2017-01-02 18:11:38</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6334957.html" target="_blank" class="ect">[客厅]麻烦解释下农村平房客厅门有几个好？</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-02 16:46:47</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6319089.html" target="_blank" class="ect">[客厅]客厅砖什么颜色好谁能说下</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2017-01-02 12:47:37</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6330160.html" target="_blank" class="ect">[客厅]各位觉得电视墙蝴蝶贴一只好吗？</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-01 18:45:04</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6308726.html" target="_blank" class="ect">[客厅]细长的客厅怎样装修谁了解的说下</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2017-01-01 14:17:45</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6334225.html" target="_blank" class="ect">[客厅]求解电视墙用啥材料好</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-01 13:40:58</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6305046.html" target="_blank" class="ect">[客厅]求解客厅和饭厅连在一起怎么装修</a></div>
                        <div class="question_bd ect">用艺术品来隔断。艺术品是客厅与餐厅隔断装修方法中非常不错的一个。艺术品不仅能够美化室内环境，还能够提高装修品味。同时运用得好也可以做好客厅和餐厅的隔断效果。例如可以用一个大花瓶、壁画或者屏风等来进行隔断。另外，水能生财，采用鱼缸隔断也有不错的效果。 希望我的回答对你有帮助</div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2017-01-01 13:03:50</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6312540.html" target="_blank" class="ect">[客厅]求告知卧室客厅怎么装修</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2017-01-01 12:12:18</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6330683.html" target="_blank" class="ect">[客厅]电视墙底柜应该如何装饰？</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-01 11:35:11</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6333345.html" target="_blank" class="ect">[客厅]客厅墙上搁板怎么装修效果比较好？</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-01 11:09:02</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6331990.html" target="_blank" class="ect">[客厅]哪个了解电视墙用啥材料好</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-01 11:04:41</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6331441.html" target="_blank" class="ect">[客厅]有石膏线的电视墙怎么弄得比较好看？</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2017-01-01 11:03:45</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6326546.html" target="_blank" class="ect">[客厅]客厅挂的钟表有哪些讲究？</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2016-12-31 18:06:46</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6300099.html" target="_blank" class="ect">[客厅]谁知道客厅电视放哪边好</a></div>
                        <div class="question_bd ect">电视应该放在一进门客厅的左边，而沙发会客区则安排在右边。原因是：1、沙发会客区需要的宽度比电视背景要大些，因为左边卧室的门会限制沙发会客区的宽度，影响其走道；而左边作为电视背景，虽然角上有落地窗，但装修设计时可以将左边墙上的卧室门整体考虑在电视背景中；2、沙发会客区放在右边，左边墙的落地窗可以更好地发挥，将室外景引至室内，视野会比较好。3、即使不用落地屏风挡住沙发，沙发会客区配置好也可以自成一体，自我隔断；空调靠近沙发会客区的角部会比在电视背景前效果更好，更合适。</div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2016-12-31 17:15:11</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6302385.html" target="_blank" class="ect">[客厅]我想问下客厅是斜的怎么装修</a></div>
                        <div class="question_bd ect">如果餐厅的哪个是进户门的话。装修时就要打一个隔断。搞成中式的博古架形式的隔断。让人进屋后右拐走。隔断的虚门要留在进门的右手边。大概要1.2米左右。在进门左手的那面墙上。也就是隔断后做电视背景墙。沙发就去定做吧。便宜又放心。</div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2016-12-31 16:12:21</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6301175.html" target="_blank" class="ect">[客厅]新房客厅摆什么花好谁可以告诉我</a></div>
                        <div class="question_bd ect">你好，新房的客厅最好还是摆放 绿萝、马蹄莲,虎皮令箭之类的植物，因为这类植物具有吸收甲醛净化空气的作用，这对于新房来说，还是非常有作用的。希望我的回答能够给您带来帮助。</div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2016-12-31 15:59:21</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6322524.html" target="_blank" class="ect">[客厅]有镜子的电视墙装修注意事项有哪些</a></div>
                        <div class="question_bd ect"></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2016-12-31 14:45:37</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6292068.html" target="_blank" class="ect">[客厅]我想知道小型客厅如何装修</a></div>
                        <div class="question_bd ect">1.多购置收纳式家具，狭小空间有更强收纳功能 小房子客厅的装修不讲究豪华，讲究的是实用与合理，本来空间就不大，没必要随波逐流。摆在客厅的家具要根据自己装修设计尽可能地选择收纳式，这样可以让客厅小的空间变得相对较大，看上去更舒服。 2.使用中小型家具，大家具放在客厅的角落 客厅是装修中最能给人留下深刻印象的地方，这里常常是接待客人最多的地方，一定要显得大方得体，对于小型房屋来说，大家具是不适合的，应多选用小型家具，最好是折叠式，用的时候展开，不用的时候折叠。实在要选择大型家具的话最好是摆放在墙角，利用墙角的转角优势，尽可能的少占地方。</div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">3</em>个回答</div>
                            <div class="col_r">2016-12-30 20:46:35</div></div>
                    </li>
                    <li>
                        <div class="question_hd">
                            <a href="k6288919.html" target="_blank" class="ect">[客厅]各位觉得客厅三角花架怎么设计更好看？</a></div>
                        <div class="question_bd ect">客厅三角花架这样设计试试吧。 简单的白色金属长形花架和白色花盆正好想搭，再配上五颜六色的盛开的花朵，整个露台立马就明亮了起来，而且这种设计可以将花架挂在护栏外端，中间采用镂空的花式装饰，使得整个花架春天气息十分浓郁。</div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                                <em class="ans_num">1</em>个回答</div>
                            <div class="col_r">2016-12-30 20:08:07</div></div>
                    </li>
                </ul>
            </div>
            <div class="pages">
                <em>共有
                    <b>10000</b>
                </em>
                <strong>1</strong>
                <a href="more-2s2i5p2">2</a>
                <a href="more-2s2i5p3">3</a>
                <a href="more-2s2i5p4">4</a>
                <a href="more-2s2i5p5">5</a>
                <i>...</i>
                <a href="more-2s2i5p500" class="last">500</a>
                <a href="more-2s2i5p2" class="next" id=nextpageid>下一页
                    <b></b>
                </a>
            </div>
            <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/globalprovinces.js" xmlns="http://www.w3.org/1999/html"></script>
            <link rel="stylesheet" type="text/css" href="http://60.205.145.0/filesys/spider/pages/asset/plat8/css/67379-7523.css">
            <div id='HotArea' style='display: block;'></div>
        </div>
        <div class="col2_2">
            <div class="ask_side ask_user">
                <div class="ask_user_top">
                    <div class="user_log clear" style="display:none;">
                        <div class="user_info clear">
                            <a href="http://www.to8to.com/my/" target="_blank" class="user_img">
                                <img src="" width="60" height="60"></a>
                            <div class="user_name">
                                <a href="http://www.to8to.com/my/" target="_blank" class="ect"></a>
                                <div class="user_jiffen">积分：</div></div>
                        </div>
                        <div class="user_data clear">
                            <a href="http://www.to8to.com/my/ask.php" target="_blank" class="user_data_first">
                                <em>问过</em>
                                <span id="wenguo"></span>
                            </a>
                            <a href="http://www.to8to.com/my/zxgs_answer.php" target="_blank">
                                <em>答过</em>
                                <span id="daguo"></span>
                            </a>
                            <a href="http://www.to8to.com/my/zxgs_answer.php" target="_blank">
                                <em>采纳</em>
                                <span id="caina"></a>
                            </span>
                        </div>
                    </div>
                    <div class="user_unlog">
                        <div class="answer_sum clear"></div>
                        <div class="answer_num_des">位业主已在问吧找到答案</div></div>
                </div>
                <div class="ask_user_btn clear">
                    <a href="http://www.to8to.com/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a>
                    <a href="http://www.to8to.com/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a></div>
            </div>
            <div class="ask_side ask-weixin-tuijian">
                <div class="side_hd ask-weixin-tuijian-hd">热门推荐</div>
                <div class="side_bd side_list">
                    <div class="need_case">
                        <a href="javascript:;" target="_blank" id="erweima01">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/91fff-7993.jpg" alt="">
                            <p>脑子进水造成的12大装修遗憾，你流泪了吗？</p>
                        </a>
                    </div>
                    <div class="need_case mar-20">
                        <a href="javascript:;" target="_blank" id="erweima02">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/3c41d-7973.jpg" alt="">
                            <p>为什么我家装修完看起来这么&quot;廉价&quot;？</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ask_side_opa">
                <a id="autourl" href="http://mall.to8to.com/temai/zt539" hidefocus="" target="_blank" rel="nofollow">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff04f-1328.jpg" width="240" height="130"></a>
            </div>
            <div class="ask_side spceil">
                <div class="side_hd">最新标签</div>
                <div class="new_tag ">
                    <a href="http://www.to8to.com/ask/search/80862" target="_blank">德国家具</a>
                    <a href="http://www.to8to.com/ask/search/80897" target="_blank">消毒柜使用说明</a>
                    <a href="http://www.to8to.com/ask/search/81004" target="_blank">德国双立人</a>
                    <a href="http://www.to8to.com/ask/search/81206" target="_blank">复合地板维修</a>
                    <a href="http://www.to8to.com/ask/search/81087" target="_blank">淋浴房要多少钱</a>
                    <a href="http://www.to8to.com/ask/search/81204" target="_blank">门禁控制器原理</a>
                    <a href="http://www.to8to.com/ask/search/81062" target="_blank">sd卡受损</a>
                    <a href="http://www.to8to.com/ask/search/80793" target="_blank">复合地板颜色</a>
                    <a href="http://www.to8to.com/ask/search/80950" target="_blank">不锈钢三通</a>
                    <a href="http://www.to8to.com/ask/search/81076" target="_blank">佛山橱柜</a>
                    <a href="http://www.to8to.com/ask/search/81233" target="_blank">不锈钢双槽</a>
                    <a href="http://www.to8to.com/ask/search/80777" target="_blank">电脑机箱热</a>
                    <a href="http://www.to8to.com/ask/search/81021" target="_blank">佛山瓷砖胶</a>
                    <a href="http://www.to8to.com/ask/search/80857" target="_blank">笔记本屏幕排线</a>
                    <a href="http://www.to8to.com/ask/search/81027" target="_blank">复合地板环保</a>
                    <a href="http://www.to8to.com/ask/search/81150" target="_blank">干衣机品牌</a>
                    <a href="http://www.to8to.com/ask/search/81164" target="_blank">格兰仕冰箱</a>
                    <a href="http://www.to8to.com/ask/search/81161" target="_blank">佛山灯</a>
                    <a href="http://www.to8to.com/ask/search/81156" target="_blank">钢门板</a>
                    <a href="http://www.to8to.com/ask/search/80985" target="_blank">ibm笔记本无线</a></div>
            </div>
        </div>
        <script type='text/javascript'>var href = jq('#HotArea a').attr('href');
            if (!href) {
                jq('#HotArea a').attr('href', 'javascript:void(0);');
            }

            //右侧新增热门推荐
            var ewmhtml = '<div class="ewm-msg-layout">\
<div class="ewm-msg-box clear">\
<div class="wem-img"><img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/e8cd2-1545.png"></div>\
<div class="ewm-msg-text"><p>微信扫一扫</p><p>关注<em>土巴兔装修家居</em>公众号</p><p>发送<em>rm01</em>阅读</p></div>\
<i class="ico-ewm-remov"></i>\
</div>\
</div>';
            jq('#erweima01').on('click',
            function() {
                jq('body').append(ewmhtml);
            });
            jq('body').on('click', '.ewm-msg-box > .ico-ewm-remov',
            function() {
                jq('.ewm-msg-layout').remove();
            }) var ewmhtml01 = '<div class="ewm-msg-layout">\
<div class="ewm-msg-box clear">\
<div class="wem-img"><img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/373c5-5471.png"></div>\
<div class="ewm-msg-text"><p>微信扫一扫</p><p>关注<em>土巴兔装修家居</em>公众号</p><p>发送<em>rm02</em>阅读</p></div>\
<i class="ico-ewm-remov"></i>\
</div>\
</div>';
            jq('#erweima02').on('click',
            function() {
                jq('body').append(ewmhtml01);
            });
            jq('body').on('click', '.ewm-msg-box > .ico-ewm-remov',
            function() {
                jq('.ewm-msg-layout').remove();
            }) if (typeof(ids) != 'undefined') {
                var anidstr = ids.substring(0, ids.lastIndexOf(','));
            } else {
                var anidstr = '';
            }
            jq(function() {
                jq.ajax({
                    'type': 'post',
                    'url': 'http://www.to8to.com/ask/ask_post.php',
                    'dataType': 'json',
                    'data': {
                        action: 'new_action_type',
                        anidstr: anidstr
                    },
                    'success': function(data) {
                        if (anidstr != '') {
                            var key = 0;
                            for (key in data.newzan) {
                                if (data.newzan[key]['status']) {
                                    jq('#class' + key).attr('class', 'ico_praise_new');
                                    jq('#show' + key).parents('a').css('color', "#f25618");
                                }
                                if (data.newzan[key]['num'] > 0) {
                                    jq('#show' + key).text(data.newzan[key]['num']);
                                }
                            }
                        }
                        if (data.status == 'nologin') {
                            jq('.user_log').hide();
                            jq('.user_unlog').show();
                            jq('.user_unlog .answer_sum').html(data.solvenum);
                            jq('.ask_user_btn').html('<a href="http://www.to8to.com/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="http://www.to8to.com/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                        } else if (data.status == 'login') {
                            jq('.user_log').show();
                            jq('.user_unlog').hide();
                            jq('.user_log .user_img img').attr('src', data.photo);
                            jq('.user_log .user_name .ect').html(data.username);
                            jq('.user_log .user_name .user_jiffen').html('积分：' + data.credits);
                            jq('#wenguo').html(data.asknum);
                            jq('#daguo').html(data.answernum);
                            jq('#caina').html(data.acceptnum);
                            jq('.ask_user_btn').html('<a href="k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                        }
                    }
                })
            })</script>
    </div>
    <script>(function() {
            jq('.state_on').click(function() {
                jq('.state_list').toggle();
            }) var fixObj = jq('#zxbjFrame'),
            rightWrap = jq('.col2_2'),
            fixObjPh = rightWrap.offset().top + rightWrap.height(),
            origWidth = rightWrap.width(),
            bwer = checkBrowser(),
            ie6 = false;
            if (bwer.name == "msie" && bwer.version == 6) {
                ie6 = true;
            };
            jq(window).bind('scroll',
            function() {
                var sh = document.documentElement.scrollTop || document.body.scrollTop;

                if (fixObjPh <= sh && !ie6) {
                    fixObj.addClass('fm_locate').css('width', origWidth + 'px');
                } else {
                    fixObj.removeClass('fm_locate');
                }
            });
        })();</script>
</div>
<script type="text/javascript">var voluntarily_slide = true;
    var slide_show_ptag = '1_3_9_1025';</script>
<script>if (!window.tender) {
        jq.getScript('http://static.to8to.com/gb_js/tender.js?v=1464789987');
    }</script>
<div class="footer" id="footerHeight">
