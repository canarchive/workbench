<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['3cdab-6033', '355e9-6276', 'e6610-7846', 'city'];
$jsFiles = ['jquery', 'common'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);
?>

<div class="choose_city">
    <!--热门城市-->
    <div class="rmcs" id="Div1">
        <div class="title_type1">热门城市</div>
        <div class="xzcs_dt">
            <span>
                <a target="_blank" href="http://bj.to8to.com" title="北京装修网">北京</a></span>
            <span>
                <a target="_blank" href="http://sh.to8to.com" title="上海装修网">上海</a></span>
            <span>
                <a target="_blank" href="http://gz.to8to.com" title="广州装修网">广州</a></span>
            <span>
                <a target="_blank" href="http://sz.to8to.com" title="深圳装修网">深圳</a></span>
            <span>
                <a target="_blank" href="http://nj.to8to.com" title="南京装修网">南京</a></span>
            <span>
                <a target="_blank" href="http://suzhou.to8to.com" title="苏州装修网">苏州</a></span>
            <span>
                <a target="_blank" href="http://hz.to8to.com" title="杭州装修网">杭州</a></span>
            <div class="rm_gkt">共开通了
                <i>250</i>个城市站</div>
        </div>
    </div>
    <!--快速查找-->
    <!--<div class="rm_cz">
        <strong class="title_type1">快速查找</strong>
        <select name="shen" id="shen" onchange="changeShen(this,'city')">
            <option value="14">A 安徽</option>
            <option value="4">Z 浙江</option></select>
        <select onchange="changeCity()" id="city" name="city">
            <option value="0">合肥</option>
            <option value="1">芜湖</option>
            <option value="12">淮北</option></select>
        <input name="hidden_tcode" id="hidden1" value="hf" type="hidden">
        <input class="smt" value="进入" onclick="goto_index_fz()" type="submit"></div>-->
    <!--拼音查找城市-->
    <!--<div class="letter_search">
        <strong class="title_type2">按拼音首字母选择</strong>
        <div class="letter_list" id="letter_list">
            <a href="javascript:;">A</a>
        </div>
    </div>-->
    <!--<div id="city_box">
        <!--华北-->
        <div class="cs_zs">
            <div class="title_type2">华北地区</div>
            <div class="xzcs_dt">
                <span>
                    <a target="_blank" href="http://bj.to8to.com/" title="北京装修网">北京</a></span>
                <span>
                    <a target="_blank" href="http://tj.to8to.com/" title="天津装修网">天津</a></span>
                <a target="_blank" href="http://sy.to8to.com/" title="沈阳装修网">沈阳</a>
            </div>
        </div>
        <i class="city_bg"></i>
    </div>-->
</div>
<div class="decoration_style limit_w">
    <div class="mod_title">
        <div class="mod_plate_list mt5">
            <a target="_blank" href="http://www.to8to.com/yezhu/list-h2s4">如何找装修公司</a>丨
            <a target="_blank" href="http://www.to8to.com/yezhu/list-h2s3">装修预算的猫腻</a>丨
            <a target="_blank" href="http://www.to8to.com/yezhu/list-h2s5">如何签订装修合同</a>丨
            <a target="_blank" href="http://www.to8to.com/yezhu/list-h9s4">装修风水</a>
            <a class="more_txt" href="http://www.to8to.com/yezhu/">更多&gt;&gt;</a></div>
        <strong>家庭装修注意事项</strong>
        <a href="javascript:;" class="update_num">每日更新</a></div>
    <ul class="zb_cj notice">
        <li>
            <a href="http://www.to8to.com/yezhu/z11259.html" hidefocus="" target="_blank" rel="nofollow">
                <img src="http://pic.to8to.com/hot/342_4538.jpg?1427078148" alt="新房装修开工手续" width="145" height="175"></a>
            <span>新房装修开工手续</span>
            <em class="mask" style="opacity: 0; display: none;"></em>
        </li>
        <li>
            <a href="http://www.to8to.com/yezhu/z22588.html" hidefocus="" target="_blank" rel="nofollow">
                <img src="http://pic.to8to.com/hot/342_4539.jpg?1427078158" alt="如何判断装修报价是否合理" width="145" height="175"></a>
            <span>如何判断装修报价是否合理</span>
            <em class="mask" style="opacity: 0; display: none;"></em>
        </li>
        <li>
            <a href="http://www.to8to.com/yezhu/z8360.html" hidefocus="" target="_blank" rel="nofollow">
                <img src="http://pic.to8to.com/hot/342_4565.jpg?1427078166" alt="如何判断装修监理是否专业公正" width="145" height="175"></a>
            <span>如何判断装修监理是否专业公正</span>
            <em class="mask" style="opacity: 0; display: none;"></em>
        </li>
        <li>
            <a href="http://www.to8to.com/yezhu/z22288.html" hidefocus="" target="_blank" rel="nofollow">
                <img src="http://pic.to8to.com/hot/342_4533.jpg?1427078176" alt="装修10大错误盘点" width="145" height="175"></a>
            <span>装修10大错误盘点</span>
            <em class="mask" style="opacity: 0; display: none;"></em>
        </li>
        <li>
            <a href="http://www.to8to.com/yezhu/z4249.html" hidefocus="" target="_blank" rel="nofollow">
                <img src="http://pic.to8to.com/hot/342_4532.jpg?1427078184" alt="家装验收要注意什么" width="145" height="175"></a>
            <span>家装验收要注意什么</span>
            <em class="mask" style="opacity: 0; display: none;"></em>
        </li>
        <li>
            <a href="http://www.to8to.com/yezhu/z460.html" hidefocus="" target="_blank" rel="nofollow">
                <img src="http://pic.to8to.com/hot/342_4534.jpg?1427078192" alt="如何避免装修污染" width="145" height="175"></a>
            <span>如何避免装修污染</span>
            <em class="mask" style="opacity: 0; display: none;"></em>
        </li>
    </ul>
</div>
<div class="new_list limit_w">
    <dl>
        <dt>
            <a target="_blank" href="http://sz.to8to.com/zb/" id="zb_url">
                <i class="new_zb"></i>最新招标</a>
        </dt>
        <dd>
            <a href="http://hz.to8to.com/zb/v16437641.html" target="_blank">杭州市拱墅区大家运河之星住宅公寓装修</a>
            <span>2017-01-04</span></dd>
        <dd>
            <a href="http://guilin.to8to.com/zb/v16428384.html" target="_blank">桂林市七星区建干路住宅公寓装修</a>
            <span>2017-01-04</span></dd>
        <dd>
            <a href="http://nb.to8to.com/zb/v16450175.html" target="_blank">宁波市鄞州区隐学山庄别墅装修</a>
            <span>2017-01-04</span></dd>
        <dd>
            <a href="http://qd.to8to.com/zb/v16453177.html" target="_blank">青岛市城阳区智慧之城住宅公寓装修</a>
            <span>2017-01-04</span></dd>
        <dd>
            <a href="http://shaoguan.to8to.com/zb/v3438947.html" target="_blank">韶关市武江区御龙湾住宅公寓装修</a>
            <span>2017-01-04</span></dd>
    </dl>
    <dl class="white_bg">
        <dt>
            <a target="_blank" href="http://www.to8to.com/riji/?order=last">
                <i class="new_bbs"></i>装修日记精选</a>
        </dt>
        <dd>
            <a href="http://www.to8to.com/riji/3878283/" target="_blank">硬装预算15万的暖暖地中海风</a>
            <span>2017-01-03</span></dd>
        <dd>
            <a href="http://www.to8to.com/riji/48172/" target="_blank">纪念我的装修</a>
            <span>2017-01-03</span></dd>
        <dd>
            <a href="http://www.to8to.com/riji/3988647/" target="_blank">佛山南海上林苑，漫漫装修路</a>
            <span>2017-01-03</span></dd>
        <dd>
            <a href="http://www.to8to.com/riji/3164216/" target="_blank">把muji搬回家</a>
            <span>2016-12-30</span></dd>
        <dd>
            <a href="http://www.to8to.com/riji/304855/" target="_blank">拉普达之梦----六室三厅的空中之城</a>
            <span>2016-12-30</span></dd>
    </dl>
    <dl>
        <dt>
            <a target="_blank" href="http://www.to8to.com/ask/">
                <i class="new_ask"></i>室内装修常见问题</a>
        </dt>
        <dd>
            <a href="http://www.to8to.com/ask/k6337570.html" target="_blank">可声教学扩音器和传统扩音器相比有哪些优势？</a>
            <span>2017-01-03</span></dd>
        <dd>
            <a href="http://www.to8to.com/ask/k6337568.html" target="_blank">东远芯睿的水冷头怎么样</a>
            <span>2017-01-03</span></dd>
        <dd>
            <a href="http://www.to8to.com/ask/k6337567.html" target="_blank">厦门_可声红外线扩音器肿么样？</a>
            <span>2017-01-03</span></dd>
        <dd>
            <a href="http://www.to8to.com/ask/k6337565.html" target="_blank">扩音器选可声怎么样？</a>
            <span>2017-01-03</span></dd>
        <dd>
            <a href="http://www.to8to.com/ask/k6337564.html" target="_blank">可声教学无线扩音器怎么样？</a>
            <span>2017-01-03</span></dd>
    </dl>
</div>
