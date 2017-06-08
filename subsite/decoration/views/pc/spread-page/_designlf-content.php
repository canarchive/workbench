<?php
Yii::$app->params['tdkInfos']['title'] = '装修免费设计，免费量房';
Yii::$app->params['tdkInfos']['description'] = '装修设计,量房';
Yii::$app->params['tdkInfos']['keyword'] = '装修设计量房';
$merchants = [
    'fkjz' => ['name' => '梵客家居', 'pcode' => '1'],
    'jzjz' => ['name' => '极装吉住', 'pcode' => '2'],
    'jzzs' => ['name' => '今朝装饰', 'pcode' => '3'],
    'jsy' => ['name' => '金三优', 'pcode' => '4'],
    'mzk' => ['name' => '美宅客', 'pcode' => '5'],
    'tszs' => ['name' => '天盛装饰', 'pcode' => '6'],
    'yzf' => ['name' => '业之峰', 'pcode' => '7'],
    'zkx' => ['name' => '宅快修', 'pcode' => '8'],
];
?>
<section class="active_container clearfloat">
    <!--服务流程-->
    <div class="active_flow">
        <ul class="clearfloat">
            <li>
                <em>服务流程</em>
                <!--<i class="active_arrows"></i>-->
            </li>
            <li>
                <span class="step_num">1</span><span class="step_title">提交信息</span>

                <p>在线提交房屋信息</p>
                <i class="active_arrows"></i>
            </li>
            <li>
                <span class="step_num">2</span><span class="step_title">免费上门</span>

                <p>量房、设计、报价</p>
                <i class="active_arrows"></i>
            </li>
            <li>
                <span class="step_num">3</span><span class="step_title">开始装修</span>

                <p>选定方案进行装修</p>
                <i class="active_arrows"></i>
            </li>
            <li>
                <span class="step_num">4</span><span class="step_title">验收入住</span>

                <p>装修完毕，验收</p>
            </li>
        </ul>
    </div>
    <!--对比列表-->
    <div class="active_compare clearfloat">
        <p>
            <span>兔班长</span>
            <i>pk</i>
            <span>传统装修</span>
        </p>
        <ul class="compare_lf lf">
            <li>兔班长</li>
            <li><i></i>免费上门量房，帮您规划合理的采光与空间布局</li>
            <li><i></i>专业设计师免费出装修报价方案，满意为止</li>
            <li><i></i>多家设计方案报价对比，谁好谁坏一目了然</li>
            <li><i></i>可轻松避开装修猫腻，让空间更合理，装修更省钱</li>

        </ul>
        <ul class="compare_rt lf">
            <li>传统装修</li>
            <li><i></i>空间布局不合理，恶意增项无止境</li>
            <li><i></i>部分方案收费，捆绑利润链条，内藏装修猫腻</li>
            <li><i></i>装修公司水平参差不齐，好坏难辨</li>
            <li><i></i>偷工减料，以次充好，预算难以控制</li>
        </ul>
    </div>
    <!--上门量房好处-->
    <div class="active_info clearfloat">
        <p>申请免费上门量房的几大好处</p>
        <span>我们承诺：凡提交报名预约量房的业主，将获得免费上门量房、设计、报价方案服务，全程绝不产生任何费用，为了您的利益以及我们的口碑，您的隐私将被严格保密。</span>
        <dl class="lf">
            <dt>
                <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/active_01.jpg"/>
            </dt>
            <dd class="info_title">
                1.让空间布局更合理
            </dd>
            <dd class="info_detail">
                专业设计师上门量房，可精准测量尺寸同时通过现场沟通了解您的需求，并通过户型采光与您的需求来合理布局整体空间，让您的整体空间利用率更高。
            </dd>
        </dl>
        <dl class="lf">
            <dt>
                <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/active_02.jpg"/>
            </dt>
            <dd class="info_title">
                2.轻松避开恶意增项
            </dd>
            <dd class="info_detail">
                通过精准的房屋测量与您对装修效果的需求，给您出免费装修方案，不满意可重复修改，满意为止，并可通过多家装修设计报价方案对比，挤干水份，避免价格陷阱与恶意增项。

            </dd>
        </dl>
        <dl class="lf">
            <dt>
                <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/active_03.jpg"/>
            </dt>
            <dd class="info_title">
                3.通过量房获得精准报价
            </dd>
            <dd class="info_detail">
                根据您的装修需求与实际测量后，即可获得相应的设计方案与精准报价，可防止后续装修过程中的增项无止境，预算控制超标等系列恶意增项问题。

            </dd>
        </dl>

    </div>

    <!--收集信息-->
    <div class="active_collect clearfloat">
        <!--第一步-->
        <div class="collect_title clearfloat" id="form_list">
            <h3>
                <i>第一步</i>
                请选择装修公司
            </h3>
            <span>(获取靠谱装修方案，坐等装修公司免费上门量房)</span>
        </div>
        <div class="active_company clearfloat">
            <ul class="clearfloat">
                <?php foreach ($merchants as $mCode => $merchant) { ?>
                <li>
                    <a href="javascript:;">
                        <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/company_0<?= $merchant['pcode']; ?>.jpg"/>

                        <p>
                            <input value="<?= $merchant['name']; ?>" type="checkbox"/>
                            <?= $merchant['name']; ?>

                        </p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!--第二步-->
        <div class="collect_title clearfloat">
            <h3>
                <i>第二步</i>
                填写装修报名表
            </h3>
            <span>(请尽量填写详细，方便后续设计师与您联系)</span>
            <em class="order_num">已有 <font>8351440</font>户成功申请</em>
        </div>
        <div class="collect_phone lf">
            <p class="phone_title">与装修客服免费通话</p>

            <p class="phone_add">无需话费，立即沟通！</p>
            <input type="text" id="telInput" placeholder="在此输入您的手机号码(或固定电话)"/>
            <a href="javascript:void(0);" id="callBtn">点击通话</a>

            <div>
                <span>温馨提示：</span>

                <p class="phone_text">
                    此次通话，您的电话处于接听状态，无需承担任何费用。系统会自动连接与您通话。如不方便接听电话，可以填写右侧表单，预约设计师上门量房服务。
                </p>
            </div>
        </div>
        <form class="collect_form rt">
            <p>您的姓名：<input name="uname" type="text"/><span>(必填)</span></p>

            <p>您的电话：<input name="uphone" type="text"/><span>(必填)</span></p>

            <p>房屋面积：<input name="umeter" type="text"/><span>(必填)</span></p>

            <p>
                户型结构：
                <select class="house_style">
                    <option value="一室">一室</option>
                    <option value="二室">二室</option>
                    <option value="三室">三室</option>
                    <option value="四室">四室</option>
                    <option value="五室">五室</option>
                    <option value="复式">复式</option>
                    <option value="别墅">别墅</option>
                    <option value="工装">工装</option>
                    <option value="其它">其它</option>

                </select>
                装修预算：
                <select class="house_price">
                    <option value="5万以下">5万以下</option>
                    <option value="5万~10万">5万~10万</option>
                    <option value="10万~20万">10万~20万</option>
                    <option value="20万~50万">20万~50万</option>
                    <option value="50万以上">50万以上</option>
                    <option value="面议">面议</option>
                </select>
            </p>
            <p>
                回访时间：
                <input value="9:00-18:00" name="visited_time" type="radio"/> 上班时间(9:00-18:00)
                <input value="18:00 以后" name="visited_time" type="radio"/> 下班时间(18:00 以后)
                <input value="随时" name="visited_time" checked type="radio"/> 随时
            </p>

            <p class="err_tips">
                <!--错误提示-->
            </p>

            <a onclick="activeCheck($(this))" href="javascript:;">填写完毕，立即申请</a>

        </form>
    </div>
    <!--
        <a href="#form_list" class="active_icon"></a>
        <p class="active_border"></p>
        -->
</section>
