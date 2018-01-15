    <a href="tel:4006545010" class="get no1">电话咨询</a>
    <div class="get no2 bms">免费设计</div>
    <div class="copyright" style="display: none;">
        <div class="tc"><?= $this->context->copyStr; ?></div>
        <div class="tc"><?= $this->context->icpStr; ?></div>
    </div>
    <div class="bmbox">
        <ul class="form bg">
            <div class="close">X</div>
            <li class="title bg"></li>
            <li class="tip tipErr">*请填写个人信息</li>
            <form name="formdl" class="formdl">
                <dl>
                    <i class="icon iconfont icon-user"></i>
                    <input name="name" id="name_2" class="inputCommon" type="text" placeholder="您的姓名">
                </dl>
                <dl>
                    <i class="icon iconfont icon-tel"></i>
                    <input name="phone" id="mobile_2" class="inputCommon" type="text" pattern="[0-9]" placeholder="您的手机">
                </dl>
                <dl>
                    <i class="iconfont icon-build"></i>
                    <input name="property" id="note_2" class="inputCommon" type="text" placeholder="请填写您的小区名称">
                </dl>
            </form>
            <a href="javascript:void(0);" onclick="signup('2');" class="btnStyle btn">立即预约抢占名额</a>
        </ul>
    </div>
