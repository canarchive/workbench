                <div class="zxbj" style="margin-bottom: 20px;">
                    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/css/460c4-2734.css">
                    <!-- <script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/common_new.js" type="text/javascript"></script> -->
                    <div class="widget-frame">
                        <div class="new-container">
                            <div class="zxbj-calc-wrap zxbj-yqbj">
                                <input type="hidden" value="" name="ptag">
                                <div class="zxbj-calc-header">
                                    <div class="calc-header-total new-calc-header-total new-num-tab">
                                        <em class="new-calc-header-money">万元</em>
                                        <p class="stochastic-price-p1">
                                            <span class="new-calc-header-number new-tab-num11"></span>
                                            <span class="new-calc-header-number new-tab-num12">6</span>
                                            <span class="new-calc-header-number new-tab-num13">.</span>
                                            <span class="new-calc-header-number new-tab-num14">5</span></p>
                                        <p class="stochastic-price-p2">
                                            <span class="new-calc-header-number new-tab-num21"></span>
                                            <span class="new-calc-header-number new-tab-num22"></span>
                                            <span class="new-calc-header-number new-tab-num23"></span>
                                            <span class="new-calc-header-number new-tab-num24"></span>
                                            <span class="new-calc-header-number new-tab-num25"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="zxbj-calc-con" style="display:block">
                                    <div class="element clearfix">
                                        <select class="province" name="User_Shen" id="zxbjcalcUser_Shen" onchange="changeProvince('zxbjcalcUser_Shen','zxbjcalcUser_City','zxbjcalcUser_Town');">
                                            <option value="">省/市</option></select>
                                        <select class="city" name="User_City" id="zxbjcalcUser_City" onchange="changeTown('zxbjcalcUser_Shen','zxbjcalcUser_City','zxbjcalcUser_Town');">
                                            <option value="">市/地区</option></select>
                                        <div style="display:none;">
                                            <select class="langSelect" id="zxbjcalcUser_Town" name="User_Town">
                                                <option>县/区</option></select>
                                        </div>
                                    </div>
                                    <div class="element">
                                        <input class="text area" type="text" name="square" id="bj_square">
                                        <b>房屋面积</b>
                                        <i class="unit">m²</i></div>
                                    <div class="element clearfix szxbj-type">
                                        <select name="shi" id="szxbj_shi">
                                            <option value="1">1室</option>
                                            <option value="2">2室</option>
                                            <option value="3">3室</option>
                                            <option value="4">4室</option>
                                            <option value="5">5室</option>
                                            <option value="6">6室</option></select>
                                        <select name="ting" id="szxbj_ting">
                                            <option value="1">1厅</option>
                                            <option value="2">2厅</option>
                                            <option value="3">3厅</option>
                                            <option value="4">4厅</option>
                                            <option value="5">5厅</option>
                                            <option value="6">6厅</option></select>
                                        <select name="chu" id="szxbj_chu" class="second-line line-chu">
                                            <option value="1">1厨</option>
                                            <option value="2">2厨</option>
                                            <option value="3">3厨</option></select>
                                        <select name="wei" id="szxbj_wei" class="second-line line-wei">
                                            <option value="1">1卫</option>
                                            <option value="2">2卫</option>
                                            <option value="3">3卫</option>
                                            <option value="4">4卫</option>
                                            <option value="5">5卫</option>
                                            <option value="6">6卫</option></select>
                                        <select name="yangtai" id="szxbj_yangtai" class="second-line">
                                            <option value="1">1阳台</option>
                                            <option value="2">2阳台</option>
                                            <option value="3">3阳台</option>
                                            <option value="4">4阳台</option>
                                            <option value="5">5阳台</option>
                                            <option value="6">6阳台</option></select>
                                    </div>
                                    <div class="element">
                                        <input class="text" type="text" name="chkPhone">
                                        <b>输入手机号码，免费报价结果</b>
                                    </div>
                                    <input type="hidden" name="dangci" value="jianzhuang">
                                    <div class="element">
                                        <a class="submit-btn" href="javascript:void(0);" searchtage="">免费报价</a></div>
                                    <!-- 装修日记及装修论坛的功能 -->
                                    <div class="element glideimg" style="display:none">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/13e56-4858.png" alt=""></div>
                                </div>
                                <div class="zxbj-clac-yqbj" style="display:none">
                                    <p class="glide-text">
                                        <span class="glide-text-left">——/</span>
                                        <span class="glide-text-right">/——</span>您家的装修预算为</p>
                                    <p class="glide-unit">
                                        <span id="yqbj_total">?</span>万元</p>
                                    <div>
                                        <ul class="glide-yqbj">
                                            <li>材料费：
                                                <strong id="materials_cost">?</strong>
                                                <span>元</span>
                                                <li>人工费：
                                                    <strong id="labor_cost">?</strong>
                                                    <span>元</span>
                                                    <li>设计费：
                                                        <strong id="design_fees">?</strong>
                                                        <span>元</span>
                                                        <span id="old_design_fees" class="old_fees" style="display:none;">
                                                            <span></span>
                                                            <em>元</em></span>
                                                    </li>
                                                    <li>质检费：
                                                        <strong id="quality_fees">?</strong>
                                                        <span>元</span>
                                                        <span id="old_quality_fees" class="old_fees" style="display:none;">
                                                            <span></span>
                                                            <em>元</em></span>
                                                    </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="zxbj-calc-result" style="display:none">
                                    <p class="calc-call holiday-text">*稍后装修管家将回电您，免费提供装修咨询服务</p>
                                    <p class="calc-explain">*因材料品牌及工程量不同，具体用量以实际施工为准。</p></div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/zxbjwidgetnew.js"></script>
                    <script>(function() {
                            if (location.href.indexOf('company/') > -1) {
                                jq('.widget-frame').css('margin-top', '30px');
                                jq('.zxbj-calc-con .text').css('*width', '213px');
                            };
                            if (location.href.indexOf('scene') > -1 || location.href.indexOf('zwj') > -1) {
                                jq('.widget-frame').css('margin-bottom', '20px');
                            }

                            var year1 = new Date('2017/1/19 18:30:00');    year1_unix = year1.getTime();
                            var year2 = new Date('2017/2/2 23:59:59');
                            year2_unix = year2.getTime();
                            var year = new Date();
                            year_unix = year.getTime();
                            if (year1_unix <= year_unix && year_unix <= year2_unix) {    jq('.holiday-text').html('亲爱的业主，因春节工作人员放假(1.20-2.2)，我们将不能及时与您联系。如未接到电话，我们会在年后第一时间给您回电，请注意接听。祝您新春愉快、阖家幸福。');
                            }
                        })()</script>
                </div>
                <div class="add2" style="margin-bottom: 20px;">
                    <a href="http://mall.to8to.com/cs/sz" hidefocus target="_blank" rel="nofollow">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/4282c-2273.jpg" width="245" height="100" alt="家居商城" /></a>
                </div>
