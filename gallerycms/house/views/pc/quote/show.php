<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'quote1-common_pc', 'quote1-poplayer', 'quote1-animate.min', 'quote1-poplunbo', 'quote1-offer', 'quote1-common',
];
$this->params['jsFiles'] = [
    'quote1-jquery-1.11.3.min', 'quote1-common', 'quote1-jquery.lazyload.min', 
    'quote1-provinces', 'quote1-poplayer', 'quote1-poplunbo', 'quote1-offer',
];
?>
<?php echo $this->render('_header'); ?>
<!-- 路径 start -->
<div class="main offerpath clearfix">
    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/" class="a666"><?= Yii::$app->params['currentCompany']['name']; ?>装修网</a>&gt;
    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/quote/" class="a666"><?= Yii::$app->params['currentCompany']['name']; ?>装修报价</a>&gt;
    <strong class="cGray"><?= ''; ?>北京雷捷时代广场130㎡新古典风格装修报价</strong>
</div>
<!-- 精装简装套餐 start -->
<section class="detail-offer">
    <div class="main">
        <div class="top-share clearfix">
            <div class="wrap">
                <img src="http://s1.17house.com/znbj/images/sao_share.jpg" class="share-icon">
                <span class="share-txt">分享：</span>
                <div class="bdsharebuttonbox l" data-tag="share_1">
                    <a class="bds_tsina" data-cmd="tsina" title="新浪微博"></a>
                    <a class="bds_tqq" data-cmd="tqq" title="腾讯微博"></a>
                    <a class="bds_qzone" data-cmd="qzone" title="QQ空间"></a>
                    <a class="bds_douban" data-cmd="douban" title="豆瓣网"></a>
                    <a class="bds_renren" data-cmd="renren" title="人人网"></a>
                </div>
            </div>
        </div>
        <div class="house-property cWhite">
            <h1 class="f24">北京雷捷时代广场130㎡新古典风格装修报价</h1>
            <p class="f18 mt20">
                <span class="num">6</span>室
                <span class="num">2</span>厅
                <span class="num">1</span>厨
                <span class="num">3</span>卫
                <span class="num">2</span>
                <span class="mr20">阳台</span>
                <span class="btn-gray">别墅</span>
                <span class="btn-gray">新古典风格</span>
                <span class="f14">准备装修</span></p>
        </div>
        <div id="bd-share"></div>
        <div class="hardcover f18">
            <h2 class="f20 mt30">精装价格</h2>
            <ul class="mt5">
                <li>半包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>39543</span></li>
                <li>全包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>88553</span></li>
            </ul>
        </div>
        <div class="simple f18">
            <h2 class="f20 mt30">简装价格</h2>
            <ul class="mt5">
                <li>半包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>36079</span></li>
                <li>全包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>85089</span></li>
            </ul>
        </div>
    </div>
    <div class="zztc" style="display:none;">
        <p class="main">
            <span class="tc-title f18 fB">有两款装修套餐报价更加合算</span>
            <a href="http://beijing.17zhuangxiu.com/zhucai/" class="tc-677" rel="nofollow" target="_blank">377元/㎡主材套餐</a>
            <a href="http://beijing.17zhuangxiu.com/zhengzhuang/" class="tc-377" rel="nofollow" target="_blank">677元/㎡整装套餐</a></p>
    </div>
</section>
<!-- 精装简装套餐 end -->
<!-- 装修明细 start -->
<section class="main detail-d">
    <h2 class="title-h2"><i></i>装修明细</h2>
    <div class="aa-area">
        <ul class="aa-area-head">
            <li>
                <span class="ml190 w60">主卧</span>
                <span class="w60">次卧</span>
                <span class="w60">其它卧室</span>
                <span class="w60">客厅</span>
                <span class="w60">厨房</span>
                <span class="w60">卫生间</span>
                <span class="w60">阳台</span></li>
            <li class="f18">
                <form method="get" action="" class="form-offer-detail" id="createForm">房屋面积：
                    <span class="f30 cBRed mr10 " id="houseArea">130㎡</span>
                    <input type="hidden" name="type" id="type" value="1" />
                    <input type="hidden" name="square" id="all" value="130" / readonly>
                    <input type="text" name="zhuwo" id="zhuwo" value="28" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="ciwo" id="ciwo" value="19" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="kewo" id="kewo" value="37" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="ting" id="keting" value="19" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="chu" id="chufang" value="6" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="wei" id="weishengjian" value="12" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="yangtai" id="yangtai" value="9" class="input " maxlength="2" autocomplete="off" readonly>
                    <span class="f14 cGray">（单位：㎡）</span>
                    <input type="hidden" class="btn btn-orange" id="btn_detail" value="我也去算一下">
                    <a href="" class="btn btn-orange">我也去算一下</a></form>
            </li>
            <li class="tc f18 mt20">
                <span class="jz-btn active">
                    <i class="three">
                        <img src="http://s1.17house.com/znbj/images/detail_three_active.jpg" class="threeimg"></i>精装修</span>
                <span class="jz-btn">
                    <i class="three">
                        <img src="http://s1.17house.com/znbj/images/detail_three_active.jpg" class="threeimg"></i>简装修</span>
            </li>
        </ul>
        <!-- 精装修表格 start -->
        <div class="aa-area-con active clearfix" id="show_jing">
            <p class="total-price tc">
                <span class="f18 fB">总价格:</span>
                <span class="cBRed mr10 vm">
                    <i class="f14">¥</i>
                    <span class="f36">39543</span></span>以下是《施工报价清单》（即除主材外的半包明细）</p>
            <div class="aa-area-detail clearfix">
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon bedroom"></i>
                    <span class="f24">主卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">28</span>单项合计金额：
                        <span class="cBRed">¥6958</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>70</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>70</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>70</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>70</td>
                            <td>30</td>
                            <td class="tl">都芳钻石系列、多乐士至尊五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="5">顶面</td>
                            <td>铲除顶面腻子层</td>
                            <td>28</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>28</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>28</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>28</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td>石膏板吊顶</td>
                            <td>1</td>
                            <td>195</td>
                            <td class="tl">轻钢龙骨石膏板回型吊顶，带反光灯带。龙牌石膏板。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon s-bedroom"></i>
                    <span class="f24">次卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥4720</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>47</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>47</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>47</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>47</td>
                            <td>30</td>
                            <td class="tl">都芳钻石系列、多乐士至尊五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="5">顶面</td>
                            <td>铲除顶面腻子层</td>
                            <td>19</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>19</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>19</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>19</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td>石膏板吊顶</td>
                            <td>1</td>
                            <td>195</td>
                            <td class="tl">轻钢龙骨石膏板回型吊顶，带反光灯带。龙牌石膏板。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon guest-bedroom"></i>
                    <span class="f24">客卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">37</span>单项合计金额：
                        <span class="cBRed">¥9193</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>92</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>92</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>92</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>92</td>
                            <td>30</td>
                            <td class="tl">都芳钻石系列、多乐士至尊五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="5">顶面</td>
                            <td>铲除顶面腻子层</td>
                            <td>37</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>37</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>37</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>37</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td>石膏板吊顶</td>
                            <td>1</td>
                            <td>195</td>
                            <td class="tl">轻钢龙骨石膏板回型吊顶，带反光灯带。龙牌石膏板。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon guest-room"></i>
                    <span class="f24">客厅</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥7554</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>47</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>47</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>47</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>47</td>
                            <td>30</td>
                            <td class="tl">都芳钻石系列、多乐士至尊五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="6">顶面</td>
                            <td>石膏线</td>
                            <td>15</td>
                            <td>29</td>
                            <td class="tl">泰丽雅石膏大花线（15cm），快粘粉粘贴。直线型石膏线。</td></tr>
                        <tr>
                            <td>铲除顶面腻子层</td>
                            <td>19</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>19</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>19</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>19</td>
                            <td>30</td>
                            <td class="tl">都芳钻石系列、多乐士至尊五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td>石膏板吊异形顶</td>
                            <td>9</td>
                            <td>245</td>
                            <td class="tl">轻钢龙骨吊弧形顶，带反光灯带。龙牌石膏板</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">阳台</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">9</span>单项合计金额：
                        <span class="cBRed">¥1876</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">墙面</td>
                            <td>墙面刮腻子</td>
                            <td>18</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>18</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="2">顶面</td>
                            <td>顶面刮腻子</td>
                            <td>9</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>9</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="1">地面</td>
                            <td>铺贴地砖</td>
                            <td>9</td>
                            <td>54</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon kitchen"></i>
                    <span class="f24">厨房</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">6</span>单项合计金额：
                        <span class="cBRed">¥2236</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">墙面</td>
                            <td>铺贴墙砖</td>
                            <td>24</td>
                            <td>55</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>墙面防水处理</td>
                            <td>1</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，墙面清理干净平整；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                        <tr>
                            <td rowspan="3">顶面</td>
                            <td>铺贴地砖</td>
                            <td>6</td>
                            <td>54</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>铺贴贴过门石</td>
                            <td>1</td>
                            <td>47</td>
                            <td class="tl">人工及沙子水泥铺贴</td></tr>
                        <tr>
                            <td>地面防水处理</td>
                            <td>6</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，地面清理干净；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon toilet"></i>
                    <span class="f24">卫生间</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">12</span>单项合计金额：
                        <span class="cBRed">¥4473</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">墙面</td>
                            <td>铺贴墙砖</td>
                            <td>48</td>
                            <td>55</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>墙面防水处理</td>
                            <td>3</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，墙面清理干净平整；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                        <tr>
                            <td rowspan="3">地面</td>
                            <td>铺贴地砖</td>
                            <td>12</td>
                            <td>54</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>铺贴贴过门石</td>
                            <td>1</td>
                            <td>47</td>
                            <td class="tl">人工及沙子水泥铺贴</td></tr>
                        <tr>
                            <td>地面防水处理</td>
                            <td>12</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，地面清理干净；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                        <tr>
                            <td rowspan="2">安装</td>
                            <td>地漏及安装</td>
                            <td>2</td>
                            <td>122</td>
                            <td class="tl">潜水艇不锈钢地漏及人工费用</td></tr>
                        <tr>
                            <td>五金配件安装安装（毛巾杆、浴巾架等）</td>
                            <td>1</td>
                            <td>89</td>
                            <td class="tl">（浴配件自购：毛巾杆、浴巾架，马桶杯架等），安装</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">其它</span>
                    <span class="cDGray fN ml5">
                        <span class="cBRed mr5"></span>单项合计金额：
                        <span class="cBRed">¥2533</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="7">其它</td>
                            <td>包立管</td>
                            <td>1</td>
                            <td>350</td>
                            <td class="tl">轻体砖包立管。（325水泥，沙子抹平）</td></tr>
                        <tr>
                            <td>灯具安装</td>
                            <td>1</td>
                            <td>255</td>
                            <td class="tl">人工费用；水晶灯或高档灯具不包含。此价格为2居室价格，每增加一居室增加50元。</td></tr>
                        <tr>
                            <td>人工开孔费（空调等）</td>
                            <td>4</td>
                            <td>102</td>
                            <td class="tl">人工机械打洞(按实计算)</td></tr>
                        <tr>
                            <td>工程管理费</td>
                            <td>1</td>
                            <td>1000</td>
                            <td class="tl">通常为工程总造价的3%-5%。</td></tr>
                        <tr>
                            <td>材料搬运费</td>
                            <td>1</td>
                            <td>0</td>
                            <td class="tl">不含甲方自购材料，将乙方所购材料搬运至施工地点</td></tr>
                        <tr>
                            <td>垃圾清运费</td>
                            <td>1</td>
                            <td>300</td>
                            <td class="tl">清运到物业指定地点。外运费用350-500每车。</td></tr>
                        <tr>
                            <td>开关面板安装</td>
                            <td>1</td>
                            <td>220</td>
                            <td class="tl">人工费用；此价格为2居室价格，每增加一居室增加50元。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <span class="r mt20">
                    <a href="javascript:window.print();" class="btn btn-print mr10">打印</a>
                    <a href="detail.php?action=excel&flag=1&area=130&shi=6" class="btn btn-down">下载</a></span>
            </div>
        </div>
        <!-- 精装修表格 end -->
        <!-- 简装修表格 start -->
        <div class="aa-area-con clearfix" id="show_jian">
            <p class="total-price tc">
                <span class="f18 fB">总价格:</span>
                <span class="cBRed mr10 vm">
                    <i class="f14">¥</i>
                    <span class="f36">36079</span></span>以下是《施工报价清单》（即除主材外的半包明细）</p>
            <div class="aa-area-detail clearfix">
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon bedroom"></i>
                    <span class="f24">主卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">28</span>单项合计金额：
                        <span class="cBRed">¥6713</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>70</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>70</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>70</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>70</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="4">顶面</td>
                            <td>铲除顶面腻子层</td>
                            <td>28</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>28</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>28</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>28</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon s-bedroom"></i>
                    <span class="f24">次卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥4553</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>47</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>47</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>47</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>47</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="4">顶面</td>
                            <td>铲除顶面腻子层</td>
                            <td>19</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>19</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>19</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>19</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon guest-bedroom"></i>
                    <span class="f24">客卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">37</span>单项合计金额：
                        <span class="cBRed">¥8869</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>92</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>92</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>92</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>92</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="4">顶面</td>
                            <td>铲除顶面腻子层</td>
                            <td>37</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>37</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>37</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>37</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon guest-room"></i>
                    <span class="f24">客厅</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥4826</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">墙面</td>
                            <td>铲除墙面腻子层</td>
                            <td>47</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>墙面处理</td>
                            <td>47</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>墙面刮腻子</td>
                            <td>47</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>47</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="5">顶面</td>
                            <td>石膏线</td>
                            <td>15</td>
                            <td>18</td>
                            <td class="tl">泰丽雅石膏素线（10cm以内），快粘粉粘贴。直线型石膏线。若顶面需要吊顶单算费用，直线型或平顶单价130-180元每平米/延米不等，弧形等异形费用较高。</td></tr>
                        <tr>
                            <td>铲除顶面腻子层</td>
                            <td>19</td>
                            <td>10</td>
                            <td class="tl">清水腻子，人工费用，装袋堆放指定地点；耐水腻子增加6元每平方</td></tr>
                        <tr>
                            <td>顶面处理</td>
                            <td>19</td>
                            <td>7</td>
                            <td class="tl">滚涂美巢界面剂（QG500）</td></tr>
                        <tr>
                            <td>顶面刮腻子</td>
                            <td>19</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>19</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">阳台</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">9</span>单项合计金额：
                        <span class="cBRed">¥1876</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">墙面</td>
                            <td>墙面刮腻子</td>
                            <td>18</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>墙面刷乳胶漆</td>
                            <td>18</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="2">顶面</td>
                            <td>顶面刮腻子</td>
                            <td>9</td>
                            <td>25</td>
                            <td class="tl">墙面批刮内墙腻子2遍使用美巢800易刮平。（若原基面平整度误差超过115㎜时需找平，费用另计20元每平方）</td></tr>
                        <tr>
                            <td>顶面刷乳胶漆</td>
                            <td>9</td>
                            <td>26.5</td>
                            <td class="tl">立邦金牌竹炭净味五合一，人工打磨墙面，滚涂墙面乳胶漆滚刷底漆一遍，滚刷面漆两遍，滚筒,砂皮,刷把，纱布等</td></tr>
                        <tr>
                            <td rowspan="1">地面</td>
                            <td>铺贴地砖</td>
                            <td>9</td>
                            <td>54</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon kitchen"></i>
                    <span class="f24">厨房</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">6</span>单项合计金额：
                        <span class="cBRed">¥2236</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">墙面</td>
                            <td>铺贴墙砖</td>
                            <td>24</td>
                            <td>55</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>墙面防水处理</td>
                            <td>1</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，墙面清理干净平整；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                        <tr>
                            <td rowspan="3">顶面</td>
                            <td>铺贴地砖</td>
                            <td>6</td>
                            <td>54</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>铺贴贴过门石</td>
                            <td>1</td>
                            <td>47</td>
                            <td class="tl">人工及沙子水泥铺贴</td></tr>
                        <tr>
                            <td>地面防水处理</td>
                            <td>6</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，地面清理干净；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon toilet"></i>
                    <span class="f24">卫生间</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">12</span>单项合计金额：
                        <span class="cBRed">¥4473</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">墙面</td>
                            <td>铺贴墙砖</td>
                            <td>48</td>
                            <td>55</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>墙面防水处理</td>
                            <td>3</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，墙面清理干净平整；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                        <tr>
                            <td rowspan="3">地面</td>
                            <td>铺贴地砖</td>
                            <td>12</td>
                            <td>54</td>
                            <td class="tl">人工辅料费用包含勾缝；正铺，如异形铺贴费用会增加（菱形，斜铺，马赛克等）；强度32.5R普通硅酸盐水泥。（钻牌/金隅/海螺水泥）；水泥，沙子，胶，勾缝剂。</td></tr>
                        <tr>
                            <td>铺贴贴过门石</td>
                            <td>1</td>
                            <td>47</td>
                            <td class="tl">人工及沙子水泥铺贴</td></tr>
                        <tr>
                            <td>地面防水处理</td>
                            <td>12</td>
                            <td>76</td>
                            <td class="tl">东方雨虹防水，地面清理干净；做24小时闭水实验，按涂刷实际面积计算工程量。</td></tr>
                        <tr>
                            <td rowspan="2">安装</td>
                            <td>地漏及安装</td>
                            <td>2</td>
                            <td>122</td>
                            <td class="tl">潜水艇不锈钢地漏及人工费用</td></tr>
                        <tr>
                            <td>五金配件安装安装（毛巾杆、浴巾架等）</td>
                            <td>1</td>
                            <td>89</td>
                            <td class="tl">（浴配件自购：毛巾杆、浴巾架，马桶杯架等），安装</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">其它</span>
                    <span class="cDGray fN ml5">
                        <span class="cBRed mr5"></span>单项合计金额：
                        <span class="cBRed">¥2533</span></span>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th1">工程项目</th>
                            <th class="th2">项目明细</th>
                            <th class="th3">施工数量</th>
                            <th class="th4">单价</th>
                            <th class="th5">工艺标准及材料说明(不含拆除及水电工程费用)</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="7">其它</td>
                            <td>包立管</td>
                            <td>1</td>
                            <td>350</td>
                            <td class="tl">轻体砖包立管。（325水泥，沙子抹平）</td></tr>
                        <tr>
                            <td>灯具安装</td>
                            <td>1</td>
                            <td>255</td>
                            <td class="tl">人工费用；水晶灯或高档灯具不包含。此价格为2居室价格，每增加一居室增加50元。</td></tr>
                        <tr>
                            <td>人工开孔费（空调等）</td>
                            <td>4</td>
                            <td>102</td>
                            <td class="tl">人工机械打洞(按实计算)</td></tr>
                        <tr>
                            <td>工程管理费</td>
                            <td>1</td>
                            <td>1000</td>
                            <td class="tl">通常为工程总造价的3%-5%。</td></tr>
                        <tr>
                            <td>材料搬运费</td>
                            <td>1</td>
                            <td>0</td>
                            <td class="tl">不含甲方自购材料，将乙方所购材料搬运至施工地点</td></tr>
                        <tr>
                            <td>垃圾清运费</td>
                            <td>1</td>
                            <td>300</td>
                            <td class="tl">清运到物业指定地点。外运费用350-500每车。</td></tr>
                        <tr>
                            <td>开关面板安装</td>
                            <td>1</td>
                            <td>220</td>
                            <td class="tl">人工费用；此价格为2居室价格，每增加一居室增加50元。</td></tr>
                    </tbody>
                </table>
                <!-- 主卧 end -->
                <span class="r mt20">
                    <a href="javascript:window.print();" class="btn btn-print mr10">打印</a>
                    <a href="detail.php?action=excel&flag=1&area=130&shi=6" class="btn btn-down">下载</a></span>
            </div>
        </div>
        <!-- 简装修表格 end --></div>
</section>
<!-- 装修明细 end -->
<!-- 装修设计图推荐 start -->
<section class="detail-design main  f14 clearfix">
    <h2 class="title-h2 mb10">
        <i>
        </i>装修设计图推荐</h2>
    <ul class="clearfix">
        <li>
            <a href="http://tuku.17house.com/14.html" target="_blank">
                <img data-original="http://static-xiaoguotu.17house.com/000/000/201405080935425371.jpg" class="img" alt="新古典风格别墅儿童房飘窗窗帘效果图欣赏"></a>
            <p class="title">
                <a class="cWhite">新古典风格别墅儿童房飘窗窗帘效果图欣赏</a></p>
        </li>
        <li>
            <a href="http://tuku.17house.com/648218.html" target="_blank">
                <img data-original="http://static-xiaoguotu.17house.com/001/07/081/14376734189929.jpg" class="img" alt="混搭风格复式50平米玄关玄关柜图片"></a>
            <p class="title">
                <a class="cWhite">混搭风格复式50平米玄关玄关柜图片</a></p>
        </li>
        <li>
            <a href="http://tuku.17house.com/17.html" target="_blank">
                <img data-original="http://static-xiaoguotu.17house.com/000/000/201405080935559868.jpg" class="img" alt="复式楼客厅进门玄关过道装修效果图"></a>
            <p class="title">
                <a class="cWhite">复式楼客厅进门玄关过道装修效果图</a></p>
        </li>
    </ul>
</section>
<!-- 装修设计图推荐 end -->
<div class="main">
    <p class="tr f14 cEGray mt5 mb15">北京雷捷时代广场130㎡新古典风格装修报价
        <span class="cEGray seo-switch-btn">相关信息</span></p>
</div>
<!-- seo start -->
<section class="bg-gray clearfix detail-houses-seo" style="display:block;">
    <div class="main f14">
        <!-- 相关楼盘 start -->
        <div class="detail-houses clearfix">
            <h2 class="title-h2">相关楼盘</h2>
            <ul></ul>
        </div>
        <!-- 相关地图路线 start -->
        <div class="detail-item clearfix mt30">
            <h2 class="title-h2">相关地图路线</h2>
            <ul>
                <li class="last">
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4065.html" target="_blank">北潞园到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4254.html" target="_blank">大安山村到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4270.html" target="_blank">大红罗厂西口到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4456.html" target="_blank">河庄营到官园公寓二期</a></li>
                <li class="last">
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4665.html" target="_blank">莲花晴园到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4679.html" target="_blank">龙庆峡到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4936.html" target="_blank">四马台水泉到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_5031.html" target="_blank">天洋城小区南到官园公寓二期</a></li>
            </ul>
        </div>
        <!-- 相关地图路线 end -->
        <!-- 相关百科 start -->
        <div class="detail-baike clearfix mt30">
            <h2 class="title-h2">相关百科</h2>
            <ul>
                <li>
                    <a href="http://baike.17house.com/doc-view-452923.html" target="_blank">上海闵行装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453243.html" target="_blank">北京办公室装修</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452678.html" target="_blank">苏州富而特_苏州富而特装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453696.html" target="_blank">西安威博建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452651.html" target="_blank">昆山鼎成_昆山鼎成装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453105.html" target="_blank">上海办公室装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453322.html" target="_blank">石家庄东宏装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452765.html" target="_blank">济南江苏天原工创装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453032.html" target="_blank">录音棚装修</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453013.html" target="_blank">成都大音堂装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453163.html" target="_blank">西安金新装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453688.html" target="_blank">西安生活家家居装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453130.html" target="_blank">上海千巨建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452971.html" target="_blank">石家庄禹创建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453475.html" target="_blank">济南风之林装修</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453390.html" target="_blank">上海装饰年代</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452899.html" target="_blank">石家庄冠盛家居装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453149.html" target="_blank">成都禹衡建筑装修</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453132.html" target="_blank">上海艾纹装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453318.html" target="_blank">石家庄城人家装饰</a></li>
            </ul>
        </div>
        <!-- 相关百科 end -->
        <!-- 相关报价 start -->
        <div class="detail-item clearfix mt30">
            <h2 class="title-h2">相关报价</h2>
            <ul>
                <li class="last">
                    <i>
                    </i>
                    <a href="/baojia/388642.html" target="_blank">雷捷时代广场70㎡美式风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/423277.html" target="_blank">雷捷时代广场80㎡混搭风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/485658.html" target="_blank">雷捷时代广场90㎡新古典风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/580779.html" target="_blank">雷捷时代广场120㎡地中海风格装修报价</a></li>
                <li class="last">
                    <i>
                    </i>
                    <a href="/baojia/77925.html" target="_blank">雷捷时代广场150㎡现代风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/113021.html" target="_blank">雷捷时代广场160㎡东南亚风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/247896.html" target="_blank">雷捷时代广场180㎡美式风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/215074.html" target="_blank">雷捷时代广场180㎡东南亚风格装修报价</a></li>
            </ul>
        </div>
        <!-- 相关报价 end -->
        <!-- 相关问答 start -->
        <div class="detail-ask clearfix mt30 pb30">
            <h2 class="title-h2">相关问答</h2>
            <ul>
                <li>
                    <a href="http://ask.17house.com/q-.html" target="_blank"></a>
                    <p class="cGray"></p>
                </li>
                <li>
                    <a href="http://ask.17house.com/q-.html" target="_blank"></a>
                    <p class="cGray"></p>
                </li>
            </ul>
        </div>
        <!-- 相关报价 end --></div>
</section>
<!-- seo end -->
<!-- 页面主题 end -->
<!-- 弹框 start -->
<!-- 生成报价 start -->
<div class="poplayer pop-offer-buliding">
    <span class="close js-close">&#10005</span>
    <div class="layout430">
        <div class=" clearfix cGray">
            <p class="offer-buliding-title f22 tc fB cMdGray">生成报价</p>
            <form class="form-offer-buliding-detail">
                <input type="hidden" name="all" value="">
                <input type="hidden" name="zhuwo" value="">
                <input type="hidden" name="ciwo" value="">
                <input type="hidden" name="kewo" value="">
                <input type="hidden" name="keting" value="">
                <input type="hidden" name="chufang" value="">
                <input type="hidden" name="weishengjian" value="">
                <input type="hidden" name="yangtai" value="">
                <p class="f14 tc fB cGray mb10">我们将把方案发到您的手机，方便随时查询</p>
                <p class="iptbox mb20">
                    <input type="text" class="ipt w100" name="phone" value="" data-value="您的手机" maxlength="11" autocomplete="off"></p>
                <p class="iptbox clearfix">
                    <input type="text" name="code" value="" data-value="验证码" maxlength="6" autocomplete="off" class="ipt ipt-code l">
                    <input type="button" name="getcode" value="获取验证码" class="btn-pop btn-cancel getcode f12 l"></p>
                <p class="error-tip"></p>
                <p class="mb20 tc">
                    <button type="submit" id="" class="btn-pop btn-ok w100 radius5">免费获得装修报价</button></p>
            </form>
        </div>
    </div>
</div>
<!-- 生成报价 end -->
<!-- 倒计时1.5秒 start -->
<div class="poplayer pop-countdown1500">
    <img src="http://s1.17house.com/znbj/images/second.png" class="img">
    <div class="clips-box">
        <h5 class="txt-loading">
            <span class="txt">0</span>
            <span class="f16">%</span></h5>
        <div class="clip-box clip-r1"></div>
        <div class="clip-box clip-r2"></div>
        <div class="clip-box clip-l"></div>
    </div>
    <div class="txt-zz">正在为您生成报价</div></div>
<!-- 倒计时1.5秒 end -->
<!-- 弹框 end -->
<!-- fixed右侧板子 start -->
<?php //echo $this->render('_right_sao'); ?>
<!-- 页脚 start -->
<?php echo $this->render('_footer'); ?>
