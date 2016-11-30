    <div class="free-ask">
        <div class="title">
            <span>免费咨询</span></div>
        <div class="con">
            <div class="form">
                <div class="info-block">
                    <form action="/customer/feedback" method="post" onsubmit="return ZQDL.submit.submit.check(this.form);">
                        <div class="info-item">
                            <div class="t">公司名称</div>
                            <input type="text" placeholder="请输入公司名称" name="company" id="company"></div>
                        <div class="info-item positionR">
                            <span class="redStar">*</span>
                            <div class="t">手机号码</div>
                            <input type="text" placeholder="请输入手机号码" name="mobile" id="mobile"></div>
                        <div class="info-item info-add positionR">
                            <span class="redStar">*</span>
                            <div class="t">所在城市</div>
                            <div class="add-select">
                                <select name="province" id="province" class="gp" onchange="set_city(this, this.form.city, this.form.district);">
                                    <option value="0">请选择省份</option></select>
                                <select name="city" id="citys" class="gt" onchange="set_district(this.form.province, this, this.form.district);">
                                    <option value="0">请选择城市</option></select>
                                <select name="district" id="district" class="gd" onchange="set_area_code($(this));">
                                    <option value="0">请选择区/县</option></select>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="t">联系人</div>
                            <input type="text" placeholder="请输入联系人姓名" name="truename" id="truename"></div>
                        <input type="hidden" name="port_from" id="port_from" value="1" />
                        <input type="hidden" name="" id="admin_add_value3" value="2">
                        <input type="hidden" name="admin_add" id="admin_add3" value="" />
                        <div class="btn-submit">
                            <input type="submit" class="submit" value="立即提交"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="admin_add" id="admin_add" value="43" />
