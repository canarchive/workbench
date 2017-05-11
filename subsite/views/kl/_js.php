<script type="text/javascript">
var DateArr = []; //12个月份的总的数组
var phone1, phone2, address, yt, mt, dt;
var coustr = ''; //礼券字符串
var couarr = [];
var productArray = []; //安装物品数组       
$(function(argument) {
    preLoadImg();

})
// 设置宽高
function haw(argument) {
    var mheight = $(window).height();
    var mWidth = $(window).width();
    $(".allb").css({
        "height": mheight,
        "width": mWidth
    }); $('.page2').css({
        "height": mheight * 0.88,
        "width": mWidth
    })
}

function mydate(argument) {
    var myDate = {};
    var moutharr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    var lArr; //每个月份里面的天数的数组
    var mouar;
    for (var i = 1; i <= 12; i++) {
        var z = 30;
        var ljson = {};
        if (i == 2) {
            z = 28;
        } else if (i == 1 || i == 3 || i == 5 || i == 7 || i == 8 || i == 10 || i == 12) {
            z = 31;
        } else {
            z = 30;
        }
        lArr = 'arr' + i;
        mouar = i;
        lArr = [];
        for (var j = 1; j <= z; j++) {
            lArr.push(j); //把对应的天数放入lArr
        }
        ljson[i] = lArr; //把月份与对应的天数放入字典
        DateArr.push(ljson); //把字典放入大数组
    }
}
// 设置时间选择
function mysetDate(argument) {
    // mydate();//创建时间数组函数
    var myDate = new Date();
    var myYear = myDate.getFullYear();
    var myMouth = myDate.getMonth() + 1;
    // $('.mouth span').eq(0).text(myMouth);
    initYear();
    initMouth();
    initday();

    $(".year select").change(function(argument) {
        if ($(this).val() == '请选择') {
            $('.year span').eq(0).text('----');
        } else {
            $('.year span').eq(0).text($('.year select').val());
        }
        $('.mouth select').empty();
        $('.day select').empty();
        initMouth();
        initday();
    }); $(".mouth select").change(function(argument) {
        if ($(this).val() == '请选择') {
            $('.mouth span').eq(0).text('--');
        } else {
            $('.mouth span').eq(0).text($('.mouth select').val());
        }
        $('.day select').empty();
        initday();
    }); $(".day select").change(function(argument) {
        if ($(this).val() == '请选择') {
            $('.day span').eq(0).text('--');
        } else {
            $('.day span').eq(0).text($('.day select').val());
        }

    })
}
// 初始化年份选择
function initYear(argument) {
    var myYear = new Date().getFullYear();
    $('.year select').append('<option>' + '请选择' + '</option>');
    for (var i = myYear; i <= myYear + 1; i++) {
        $('.year select').append('<option value=' + i + '>' + i + '</option>')
    }
}
// 初始化月份选择
function initMouth(argument) {
    var myYear = new Date().getFullYear();
    $('.mouth select').append('<option>' + '请选择' + '</option>');
    if ($('.year span').eq(0).text() == myYear) {
        var myMouth = new Date().getMonth() + 1;
        for (var i = myMouth; i <= 12; i++) {
            $('.mouth select').append('<option value=' + i + '>' + i + '</option>')
        }
    } else {
        for (var i = 1; i <= 12; i++) {
            $('.mouth select').append('<option value=' + i + '>' + i + '</option>')
        }
    }

}
//初始化天数时间选择 
function initday(argument) {
    $('.day select').append('<option>' + '请选择' + '</option>');
    var nummou = $('.mouth span').eq(0).text();
    if (nummou == 2) {
        z = 28;
    } else if (nummou == 1 || nummou == 3 || nummou == 5 || nummou == 7 || nummou == 8 || nummou == 10 || nummou == 12) {
        z = 31;
    } else {
        z = 30;
    }
    for (var i = 1; i <= z; i++) {
        $('.day select').append('<option value=' + i + '>' + i + '</option>')
    }
}
// 产品选择
function prsele(argument) {
    $('.pro-select select').change(function(event) {
        $('.pro-select span').eq(0).text($(this).val());
    });
    $('.add-pro').click(function(argument) {
        var ptext = $('.pro-select-text').text();
        var choosedtext = $('.pro-show p');
        var arry = [];
        $.each(choosedtext,
        function(index, val) {
            arry.push($(this).text());
        });
        if (arry.length == 0) {
            $('.allpro').append('<div class="pro-show"><p>' + ptext + '</p><div class="adre"><div class="pred"><img src="<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/b2.png"></div><div class="pronm">1</div><div class="padd"><img src="<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/b3.png"></div></div></div>');
            // console.log('第一次');
        } else {
            for (var i = 0; i < arry.length; i++) {
                if (ptext == arry[i]) {
                    alert("您已经选择此类产品");
                    return;
                }
            }
            $('.allpro').append('<div class="pro-show"><p>' + ptext + '</p><div class="adre"><div class="pred"><img src="<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/b2.png"></div><div class="pronm">1</div><div class="padd"><img src="<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/b3.png"></div></div></div>');
        }

    }); $(document).on('click', '.padd',
    function(event) {
        event.preventDefault();
        var num = $(this).closest('.pro-show').find('.pronm').text();
        num++;
        $(this).closest('.pro-show').find('.pronm').text(num);
        /* Act on the event */
    });
    $(document).on('click', '.pred',
    function(event) {
        event.preventDefault();
        var num = $(this).closest('.pro-show').find('.pronm').text();
        num--;
        if (num == 0) {
            $(this).closest('.pro-show').remove();
        } else {
            $(this).closest('.pro-show').find('.pronm').text(num);
        }

        /* Act on the event */
    });

}
// 优惠券领取事件
function rececon(argument) {
    // $('.coupon-photos li').click(function (argument) {
    //  var num=$(this).index()+1;
    //  $(this).children('img').attr('src','../images/d2-'+num+'.png')
    // })
    $('.coupon-photos li').click(function(argument) {
        var num = $(this).index() + 1;
        $(this).children('img').attr('src', '<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/d2-' + num + '.png');
        couarr.push($(this).attr('rel'));
        // console.log(couarr);
        couarr = couarr.unique3(); //去重
        coustr = couarr.join(',');
    })
    // $('.coupon-photos li').one('click', function(event) {
    //  var num=$(this).index()+1;
    //  $(this).children('img').attr('src','<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/d2-'+num+'.png');
    //  couarr.push($(this).attr('rel'));
    //  coustr=couarr.join(',');
    // });

}
// 跳转页面
function gotosomepage(argument) {
    $('.share').click(function(argument) {
        $('.mengban').fadeIn();
    }); $('.mengban').click(function(event) {
        $('.mengban').fadeOut();
    });
    // ------------------------最后一个优惠券领取成功页面跳转到预约登记页面
    $('.order2').click(function(event) {
        $('.page5').fadeOut('fast');
        $('.alla').fadeIn('fast');
        $('.page2').fadeIn('fast');
        $('.allb').fadeOut('fast');
        orderInit();
    });
    // -------------------------page4>page5(优惠券手机验证)
    $('.receive-coupon').click(function(argument) {
        phone2 = $('#phoneNumber2').val();
        if (phone2 == "") {
            alert("手机号码不能为空！");
        } else if (!phone2.match(/(^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$)|(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/)) {
            alert("手机号码格式不正确！");
        } else {
            var url = '<?= Yii::getAlias('@keleurl'); ?>' + '/kl-coupon.html';
            $.post(url, {
                phone: phone2,
                cards: coustr,
                _csrf: $('#_csrf').val()
            },
            function(data) {
                // alert(data)
                // return;
                if (data.status == 200) { //领取成功
                    alert('优惠券领取成功!')
                    //领取成功
                    $('.page4').fadeOut('fast');
                    $('.page5').fadeIn('fast');
                } else {
                    alert(data.message);
                    return;
                }
                /*if ($.parseJSON(data).code == 2) { //已经领取过了
                    alert($.parseJSON(data).msg)
                    //领取成功
                    $('.page4').fadeOut('fast');
                    $('.page5').fadeIn('fast');
                };*/

            })

        }
    })
    // -----------------------page3>page4
    $('.receive-btn').click(function(argument) {
        $('.page3').fadeOut('fast');
        $('.page4').fadeIn('fast');
        coupon_init();
    })
    // -----------------------page2>page3
    $('.sub').click(function(event) {
        productArray = []; //安装物品数组
        phone1 = $('#f-phoneNumber').val();
        address = $('#f-address').val();
        yt = $('.year span').eq(0).text();
        mt = $('.mouth span').eq(0).text();
        dt = $('.day span').eq(0).text();
        $.each($('.pro-show'),
        function(index, val) {
            var unitName = $(this).find('p').text();
            var unitNum = $(this).find('.pronm').text();
            // console.log(unitNum);
            var unitDic = {};
            unitDic['num'] = unitNum;
            unitDic['name'] = unitName;
            productArray.push(unitDic);
        });
        if ($('.pro-show').length == 0) {
            alert('请选择一款产品');
        } else if (phone1 == "") {
            alert("手机号码不能为空！");
        } else if (!phone1.match(/(^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$)|(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/)) {
            alert("手机号码格式不正确！");
        } else if (address == "") {
            alert("安装地址不能为空！");
        } else if (yt == '----' || mt == '--' || dt == '--') {
            alert("请检查安装日期");
        } else {
            // alert('111')
            // return;
            var $data ={
                phone: phone1,
                products: productArray,
                address: address,
                date: yt + '-' + mt + '-' + dt,
                _csrf: $('#_csrf').val()
            };
            console.log($data);
            var url = '<?= Yii::getAlias('@keleurl'); ?>' + '/kl-signup.html';
            $.post(url, $data,
            function(data) {
                console.log(data);
                // alert(data)
                // return;
                if (data.status == 200) { //预约成功
                    alert('预约成功')
                    //预约成功
                    $('.alla').fadeOut('fast');
                    $('.allb').fadeIn('fast');
                    $('.page2').fadeOut('fast');
                    $('.page3').fadeIn('fast');
                } else {
                    alert(data.message);
                    return;
                }
                //if ($.parseJSON(data).code == 2) { //提交重复
                    //alert($.parseJSON(data).msg)
                    //          //预约成功
                    //             $('.alla').fadeOut('fast');
                    // $('.allb').fadeIn('fast');
                    // $('.page2').fadeOut('fast');
                    // $('.page3').fadeIn('fast');    
                //};

            })
        }
    });
    // -----------------------page1>page2
    $('.Order').click(function(event) {
        $('.page1').fadeOut('fast');
        $('.page2').fadeIn('fast');
        orderInit();
    });
    $('.online-order').click(function(event) {
        $('.page1').fadeOut('fast');
        $('.page2').fadeIn('fast');
        orderInit();
    });
    // -----------------------page1>page4
    $('.Receive').click(function(event) {
        $('.alla').fadeOut('fast');
        $('.allb').fadeIn('fast');
        $('.page1').fadeOut('fast');
        $('.page4').fadeIn('fast');
        coupon_init();
    });
    $('.receive-coupon2').click(function(event) {
        $('.alla').fadeOut('fast');
        $('.allb').fadeIn('fast');
        $('.page1').fadeOut('fast');
        $('.page4').fadeIn('fast');
        coupon_init();
    });
}

// 横竖屏
function voRH(argument) {
    window.addEventListener("onorientationchange" in window ? "orientationchange": "resize",
    function() {
        // alert(1)
        if (window.orientation === 180 || window.orientation === 0) { //竖屏
            // window.addEventListener('deviceorientation', handleOrientation,false);
            // alert(1);
            $(".hengPin").hide();
            if ($('body').attr('name') == 'a') {
                $(".alla").show();
            } else {
                $(".allb").show();
            }
        }
        if (window.orientation === 90 || window.orientation === -90) { //横屏
            // window.removeEventListener('deviceorientation', handleOrientation,false);
            // alert(2);
            $(".hengPin").show();
            if ($(".alla").is(":visible")) {
                $(".alla").hide();
                $('body').attr('name', 'a');
            } else {
                $(".allb").hide();
                $('body').attr('name', 'b');
            }
        }
    },
    false);
}

function preLoadImg() {
    var images = [];
    for (var i = 1; i <= 10; i++) {
        images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/a" + i + ".png");
    }
    for (var i = 1; i <= 3; i++) {
        images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/b" + i + ".png");
    }
    for (var i = 1; i <= 2; i++) {
        images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/c" + i + ".png");
    }
    for (var i = 1; i <= 8; i++) {
        images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/d1-" + i + ".png");
        images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/d2-" + i + ".png");
    }
    images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/e1.png");
    images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/Qcode.png");
    images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/bg1.jpg");
    images.push("<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/bg2.jpg");
    $.imgpreload(images, {
        all: function() {
            $(".loadFa").fadeOut(1000);
            $(".alla").fadeIn(1200);
            voRH();
            haw();
            prsele();
            mysetDate();
            rececon();
            gotosomepage();
            FastClick.attach(document.body);
        }
    });
}

//预约init
function orderInit(argument) {
    $('.pro-select-text').text('净水器');
    $('#f-phoneNumber').val('');
    $('#f-address').val('');
    $('.allpro').empty();
    $('.year span').eq(0).text('----');
    $('.mouth span').eq(0).text('--');
    $('.day span').eq(0).text('--');
    $('.year select').val('请选择');
    $('.mouth select').val('请选择');
    $('.day select').val('请选择');
}

// 优惠券init
function coupon_init(argument) {

    $.each($('.coupon-photos li'),
    function(index, val) {
        var num = $(this).index() + 1;
        console.log(num);
        $('.coupon-photos li').eq(num - 1).children('img').attr('src', '<?= Yii::getAlias('@asseturl'); ?>/third/kl/images/d1-' + num + '.png')
    });
    $('#phoneNumber2').val('');

}
// 去重
Array.prototype.unique3 = function() {
    var res = [];
    var json = {};
    for (var i = 0; i < this.length; i++) {
        if (!json[this[i]]) {
            res.push(this[i]);
            json[this[i]] = 1;
        }
    }
    return res;
}</script>
