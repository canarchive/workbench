<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['fc001-1027', 'f565b-1682', 'a398c-6484', '36c62-5795', 'a7311-6598', 'b8040-5022'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('_js-header');//, ['jsFiles' => $jsFiles]);
?>
<!-- 头部 -->
<?php echo $this->render('_header'); ?>
<!-- 页面主题 start -->
<div class="main offerpath clearfix">
    <a href="http://www.17house.com/" class="a666">北京装修网</a>&gt;
    <a href="/baojia/b0a0o0/" class="a666">北京装修报价</a>&gt;
	<strong class="cGray">北京雷捷时代广场130㎡新古典风格装修报价</strong>
</div>
<!-- 精装简装套餐 start -->
<section class="detail-offer">
    <div class="main">
        <div class="top-share clearfix">
            <div class="wrap">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/95d6d-2970.jpg" class="share-icon">
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
    <h2 class="title-h2">
        <i>
        </i>装修明细</h2>
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
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/fde16-7385.jpg" class="threeimg"></i>精装修</span>
                <span class="jz-btn">
                    <i class="three">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/fde16-7385.jpg" class="threeimg"></i>简装修</span>
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
<!-- 市场图表 start -->
<!-- <section class="main mt20">
<div class="detail-chart">
<div class="duibi">
<div class="x-line"></div>
<div class="hot17 anima"><img src="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/48b1c-1151.jpg" class="hot17img" alt=""></div>
<div class="zhu-base zhu1 anima bg-orange-light">
<p class="zhu-money cOrange js-half">¥ 36079</p>
<p class="zhu-name cWhite js-half">半包</p></div>
<div class="zhu-base zhu2 anima bg-orange">
<p class="zhu-money cOrange js-full">¥ 85089</p>
<p class="zhu-name cWhite js-full">全包</p></div>
<div class="zhu-base zhu3 anima bg-blue-light">
<p class="zhu-money cGray js-half">¥ 40769</p>
<p class="zhu-name cWhite js-half">半包</p></div>
<div class="zhu-base zhu4 anima bg-blue">
<p class="zhu-money cGray js-full">¥ 96150</p>
<p class="zhu-name cWhite js-full">全包</p></div>
<div class="zhu-base zhu5 anima bg-blue-light">
<p class="zhu-money cGray js-half">¥ 44377</p>
<p class="zhu-name cWhite js-half">半包</p></div>
<div class="zhu-base zhu6 anima bg-blue">
<p class="zhu-money cGray js-full">¥ 104659</p>
<p class="zhu-name cWhite js-full">全包</p></div>
<div class="p-base p12 f18 fB tc">一起装修网报价</div>
<div class="p-base p34 f18 fB tc">市场预估价格</div>
<div class="p-base p56 f18 fB tc">装修公司价格</div></div>
<div class="detail-chart-title tc cGray f16">北京雷捷时代广场130㎡新古典风格装修报价</div></div>
</section> -->
<!-- 市场图表 end -->
<!-- 装修设计图推荐 start -->
<section class="detail-design main  f14 clearfix">
    <h2 class="title-h2 mb10">
        <i>
        </i>装修设计图推荐</h2>
    <ul class="clearfix">
        <li>
            <a href="http://tuku.17house.com/44.html" target="_blank">
                <img data-original="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/409f8-9450.jpg" class="img" alt="新中式实木餐厅储物区装修效果图欣赏"></a>
            <p class="title">
                <a class="cWhite">新中式实木餐厅储物区装修效果图欣赏</a></p>
        </li>
        <li>
            <a href="http://tuku.17house.com/45.html" target="_blank">
                <img data-original="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/18f7a-2779.jpg" class="img" alt="素雅风格跃层休闲储物区装修效果图"></a>
            <p class="title">
                <a class="cWhite">素雅风格跃层休闲储物区装修效果图</a></p>
        </li>
        <li>
            <a href="http://tuku.17house.com/46.html" target="_blank">
                <img data-original="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/8bcd5-7874.jpg" class="img" alt="时尚白色卧室储物区装修效果图2014"></a>
            <p class="title">
                <a class="cWhite">时尚白色卧室储物区装修效果图2014</a></p>
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
                    <a href="http://beijing.17house.com/dt/lp_4025.html" target="_blank">八里桥市场到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4032.html" target="_blank">北京射击场到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4151.html" target="_blank">次渠到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4152.html" target="_blank">次渠北里北口到官园公寓二期</a></li>
                <li class="last">
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4184.html" target="_blank">陈留村到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4245.html" target="_blank">大厂交通局到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4273.html" target="_blank">大红门锦苑小区北到官园公寓二期</a></li>
                <li>
                    <i>
                    </i>
                    <a href="http://beijing.17house.com/dt/lp_4526.html" target="_blank">京师园北门到官园公寓二期</a></li>
            </ul>
        </div>
        <!-- 相关地图路线 end -->
        <!-- 相关百科 start -->
        <div class="detail-baike clearfix mt30">
            <h2 class="title-h2">相关百科</h2>
            <ul>
                <li>
                    <a href="http://baike.17house.com/doc-view-452746.html" target="_blank">上海适佳装饰设计</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452997.html" target="_blank">上海安聚装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453227.html" target="_blank">装修之家</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452871.html" target="_blank">北京徽华金典装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452962.html" target="_blank">上海秦颂建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453017.html" target="_blank">济南店面装修</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453136.html" target="_blank">上海意熙建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-262459.html" target="_blank">石家庄众都装饰设计</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453636.html" target="_blank">济南沣德装修</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452995.html" target="_blank">上海万涛建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453632.html" target="_blank">上海JUK建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452982.html" target="_blank">石家庄方成装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453093.html" target="_blank">成都恒雅居建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-262472.html" target="_blank">成都禹衡建筑装饰设计</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453317.html" target="_blank">成都百年居装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-452952.html" target="_blank">上海苏华装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453234.html" target="_blank">上海悦轩建筑装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453338.html" target="_blank">天津兰麝香装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453655.html" target="_blank">济南美家装饰</a></li>
                <li>
                    <a href="http://baike.17house.com/doc-view-453662.html" target="_blank">上海翌恒建筑装修</a></li>
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
                    <a href="/baojia/398636.html" target="_blank">雷捷时代广场70㎡新古典风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/471485.html" target="_blank">雷捷时代广场90㎡欧式风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/42296.html" target="_blank">雷捷时代广场140㎡美式风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/101376.html" target="_blank">雷捷时代广场150㎡中式风格装修报价</a></li>
                <li class="last">
                    <i>
                    </i>
                    <a href="/baojia/231546.html" target="_blank">雷捷时代广场180㎡现代风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/237009.html" target="_blank">雷捷时代广场180㎡混搭风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/269480.html" target="_blank">雷捷时代广场190㎡田园风格装修报价</a></li>
                <li>
                    <i>
                    </i>
                    <a href="/baojia/311897.html" target="_blank">雷捷时代广场200㎡东南亚风格装修报价</a></li>
            </ul>
        </div>
        <!-- 相关报价 end -->
        <!-- 相关问答 start -->
        <div class="detail-ask clearfix mt30 pb30">
            <h2 class="title-h2">相关问答</h2>
            <ul>
                <li>
                    <a href="http://ask.17house.com/q-3053516.html" target="_blank">移动电源价格如何？</a>
                    <p class="cGray">推荐小米品牌的产品，做工好，具有很好的耐腐蚀，耐高温，抗老化的特点，同时内部结构稳定，容量大，充电用时短，续航能力强，且价格合理，一般为60元左右，品质有保证。</p></li>
                <li>
                    <a href="http://ask.17house.com/q-3053506.html" target="_blank">广州购房限购政策哪位清楚？</a>
                    <p class="cGray">本地家庭限购第三套房非本市户籍居民家庭需提交1年以上个人所得税缴纳证明或社会保险缴纳证明限购一套
                        <br>根据规定，在一定时期内，暂定对在本市已拥有一套住房的本市户籍居民家庭、能提供自购房之日起算的前两年内在本市累计缴纳一年以上个人所得税缴纳证明或社会保险缴纳证明的非本市户籍居民家庭，限购一套住房。同时，对于已有两套及以上住房的本市居民家庭、拥有一套及以上住房的非本市户籍居民家庭和不能提供两年内在本市缴纳一年以上个人所得税缴纳证明或社会保险缴纳证明的非本市户籍居民家庭，暂停在本市向其售房。</p></li>
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
    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat1/img/c8a04-9978.png" class="img">
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
<?php //echo $this->render('_right_sao'); ?>
<!-- 页脚 start -->
<?php echo $this->render('_footer'); ?>
