<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
    var doctitle = document.title;
    var docdescription = $("meta[name='description']").attr("content");
    var docimage = $("meta[name='image']").attr("content");
    var docurl = window.document.location.href;
    if ($("#shareTitle").length > 0)
        doctitle = $("#shareTitle").val();
    if ($("#shareContent").length > 0)
        docdescription = $("#shareContent").val();
    if ($("#shareImg").length > 0)
        docimage = $("#shareImg").val();
    if ($("#shareLink").length > 0)
        docurl = $("#shareLink").val();

    //alert(docimage);

    $(function() {
        
    
        //微信接口程序
        //"<input id="shareTitle" type="hidden" value="title" />
        //"<input id="shareContent" type="hidden" value="content" />
        //"<input id="shareLink" type="hidden" value="linkurl" />
        //"<input id="shareImg" type="hidden" value="imgurl" />
        wx.ready(function() {
            //分享到朋友圈
            wx.onMenuShareTimeline({
                title: doctitle, // 分享标题
                link: docurl, // 分享链接
                imgUrl: docimage, // 分享图标
                success: function() {

                },
                cancel: function() {

                }
            });


            //分享给朋友
            wx.onMenuShareAppMessage({
                title: doctitle,
                desc: docdescription,
                link: docurl,
                imgUrl: docimage,
                type: '',
                dataUrl: '',
                success: function() {

                },
                cancel: function() {

                }
            });


            //QQ
            wx.onMenuShareQQ({
                title: doctitle,
                desc: docdescription,
                link: docurl,
                imgUrl: docimage,
                success: function() {

                },
                cancel: function() {

                }
            });
            //QQ微博
            wx.onMenuShareWeibo({
                title: doctitle,
                desc: docdescription,
                link: docurl,
                imgUrl: docimage,
                success: function() {

                },
                cancel: function() {

                }
            });
        });
        wx.error(function(res) {
            //alert("Weixin Err:" + res.errMsg);
        });
    }); 
</script>

