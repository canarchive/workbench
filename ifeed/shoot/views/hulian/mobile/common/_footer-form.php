<form id="mobile_form">
    <div class="eventbm">
        <div class="bm">
            <!--表单start-->
            <!--选择类别-->
            <p class="bm_title">选择类型，快速预约！</p>
            <ul>
                <li data-type="1">汽车摄影</li>
                <li  data-type="2" class="cur">电器摄影</li>
                <li data-type="3">服装摄影</li>
                <li data-type="4">静物摄影</li>
                <li data-type="5">美食摄影</li>
                <li data-type="0">类别不限</li>
            </ul>
            <!--姓名：-->
            <input type='text' name='yname' id='yname' class='in' placeholder="您的称呼" />
            <br/>
            <!--<br/>-->
            <!--手机号码：-->
            <input type='text' name='ytel' id='ytel' class='in' placeholder="您的电话" />
            <br/>
            <!--<br/>-->
            <p class="err_tips" style="color: red;margin-top: 0.5rem"></p>
            <a onclick="phoneCheck($(this))" class='btn'>立即预约</a>
        </div>
    </div>
</form>
