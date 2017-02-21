    <style>.zxask-search-wrap form{ margin-top:14px; height:36px; } .zxask-search-wrap .input-append{ border:none; } .zxask-search-wrap .input-append input{ position: relative; z-index: 2; width:80%; border: 1px solid #0baf4d; -webkit-border-radius: 4px; -o-border-radius: 4px; -moz-border-radius: 4px; -ms-border-radius: 4px; border-radius: 4px; padding-right:36px; } .icon-search{ display: block; position:absolute; z-index: 2; right:22%; top:10px; width:23px; height:22px; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platy/m/img/c84eb-1512.png) no-repeat -60px -1014px; } .icon-search-input{ background-position-y:-1045px; } .zxask-search-wrap .input-append .add-on{ width:17%; -webkit-border-radius: 4px; -o-border-radius: 4px; -moz-border-radius: 4px; -ms-border-radius: 4px; border-radius: 4px; }</style>
    <script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/hammer.min.js" type="text/javascript"></script>
    <script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/componentsh5.js" type="text/javascript"></script>
    <div class="zxask-search-wrap">
        <form action="">
            <div class="input-append">
                <input id="askSearchKey" type="search" placeholder="输入您的装修问题">
                <i id="askSearchBtn" class="icon-search" data-url="/ask/search.php?act=2&amp;keyword="></i>
                <a id='ask_entrydetail' class="add-on" href="http://m.to8to.com/ask/ask_question.php">提问</a></div>
        </form>
        <p>已有<em>&nbsp;5095545</em>&nbsp;位业主得到满意答案</p></div>
    <script>$('#askSearchKey').on('keyup keydown',
        function() {
            if ($(this).val().length <= 30) {
                if ($(this).val().length > 0) {
                    $('.icon-search').addClass('icon-search-input');
                } else {
                    $('.icon-search').removeClass('icon-search-input');
                }
            } else {
                $(this).val($(this).val().substr(0, 30));
            }
        });
        // 输入框聚焦时遮盖提问
        $('#askSearchKey').on('focus',
        function() {
            $('#askSearchKey').animate({
                width: '100%'
            });
            $('#askSearchBtn').animate({
                right: '2%'
            });
        });
        // 输入款失焦时缩回
        $('#askSearchKey').on('blur',
        function() {
            $('#askSearchKey').animate({
                width: '80%'
            });
            $('#askSearchBtn').animate({
                right: '22%'
            });
        });
        var clickAskDetail = new Hammer(document.getElementById('ask_entrydetail'));
        clickAskDetail.on('tap',
        function() {
            if (getCookie('askQuestionTenMin') === '1') {
                window.Components.simplepop();
                $('#alertOveryLayer').css('z-index', '101').show().find('.overlay-bd').html('您操作太频繁，请十分钟后再提问');
                $('body').on('touchstart', '.overlay-btn-ok',
                function() {
                    setTimeout(function() {
                        $('#alertOveryLayer').remove();
                    },
                    300);
                }); return false;
            }
        });</script>
