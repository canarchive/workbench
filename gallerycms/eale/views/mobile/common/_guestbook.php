<div class="row liuyan">
    <form method="post" action="/guestbook.html" id="form1">
        <div id="MessageBoard1"></div>
        <input type="hidden" name="site_code" id="site_code" value="<?= $this->context->siteCode; ?>" />
        <input type="hidden" name="page" id="page" value="<?= $this->context->currentPage; ?>" />
        <div class="col-sm-12 col-md-7 col-xs-12 left">
        <div class="col-sm-12 col-md-7 col-xs-12 left">

            <div class="input-group">
                <span class="input-group-addon aa">姓名：</span>
                <input name="MessageBoard1_userName" id="MessageBoard1_userName" name="MessageBoard1_userName" type="name" class="form-control" aria-describedby="MessageBoard2_userName" /></div>
            <span class="desc">*请填写您的真实姓名</span>
            <div class="input-group">
                <span class="input-group-addon">电话：</span>
                <input name="MessageBoard1_telephone" id="MessageBoard1_telephone" name="MessageBoard1_telephone" type="dh" class="form-control" aria-describedby="MessageBoard1_telephone" /></div>
            <span class="desc">请填写您的手机号或者座机号</span>
            <div class="input-group">
                <span class="input-group-addon">回访：</span>
                <div class="form-control form-control1">
                    <select name="MessageBoard1_int1" id="MessageBoard1_int1" class="input">
                        <option value="0">&#160;&#160; 随时</option>
                        <option value="1">上班时间</option>
                        <option value="2">下班时间</option></select>
                </div>
            </div>
            <span class="desc">请选择回访时间</span>
            <div class="input-group">
                <span class="input-group-addon">邮箱：</span>
                <input name="MessageBoard1_eMail" id="MessageBoard1_eMail" name="tb_eMail" type="text" class="form-control" aria-describedby="MessageBoard1_eMail" /></div>
            <span class="desc">便于查收电子邮件</span>
            <div class="input-group">
                <span class="input-group-addon">地址：</span>
                <input name="MessageBoard1_address" id="MessageBoard1_address" name="tb_address" type="text" class="form-control" aria-describedby="MessageBoard1_address" /></div>
            <span class="desc">*方便为您邮寄资料</span>
            <div class="input-group">
                <span class="input-group-addon qq">QQ：</span>
                <input name="MessageBoard1_char1" id="MessageBoard1_char1" name="tb_char1" type="text" class="form-control" aria-describedby="MessageBoard1_char1" /></div>
            <span class="desc">*方便线上第一时间联系上您</span></div>
        <div class="col-sm-12 col-md-5 col-xs-12 right">
            <span id="basic-addon6">留言板：</span>
            <textarea name="MessageBoard1_body" id="MessageBoard1_body" cols="20" rows="5" class="form-control"></textarea>
            <a class="btn" href="javascript:void(0)" onclick="UpMessageBoard('MessageBoard1');" role="button" title="提交留言">&nbsp&nbsp 提交留言 &nbsp&nbsp</a></div>
    </form>
</div>
