
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="gb2312">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta name="format-detection" content="telephone=no"/>

<link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/lift.css" />

<link rel="shortcut icon" href=" /favicon.ico" /> 
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php require ('weixin_sdk.php'); ?>

<title>生命计算器</title>
</head>
<body class="l_index">

    <div class="l_title text-center">
        <h1>生逢何时</h1>
    </div> <!-- E l_title -->


    <div class="container">
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" id="date_time" name="date_time" placeholder="出生日期，如19970608" class="form-control input-lg">
                                                <span style="color:#b92c3b;font-weight:bold;display:none;text-align:center;margin:0 auto" id="date_time_error">请按正确的格式填写，如19970608, 1-9月/日请用01-09表示.</span>
                                            </div>

                    <div class="col-sm-12 text-center">
                        <a href="javascript:" id="calculation" class="btn btn-default btn-lg"><strong>开始计算</strong></a>
                    </div>
                </div>
            </form>
    </div> <!-- E container -->

    <div class="music"> </div> <!-- E music -->
    <span id="playbox" style="display:none;" class="btn_music" onclick="playbox.init(this).play();"> </span><!-- E music -->

<script>
function CheckDateTime(str){
    if(!parseInt(str)) return false;
    return true;
}

$("#calculation").on('click', function() {
    var date_time = $("#date_time").val();
    if(date_time) {
        if(CheckDateTime(date_time))
            window.location.href = "view.php?date_time="+date_time;
        else
            $("#date_time_error").show();
    } else {
        $("#date_time_error").show();
    }
});

<!-- E music -->
var html = '<audio id="audio" loop controls autoplay><source src=""  type="audio/mpeg"/></audio>';//  这里修改背景音乐;
$("#playbox").html(html);
playbox.init("playbox");
<!-- E music -->
</script>

	
<script>
function on_weixin_ready2()
{
    wx.onMenuShareAppMessage({
        title   : "这是一次关于生命计算，赶紧试试",
        desc    : "你已经存在这个世界多久？未来你会有多少的光阴？一次简单的计算，让我们更懂珍惜。",
      link: 'http://uixsj.cn/',//        这里设置分享后跳转网址
      imgUrl: 'http://s.uixsj.cn/life-counter-icon.png',//        这里设置分享显示图片
        type    : 'link',
        dataUrl : '',
        success: function () { 
            location.href="<?php echo $weixin_url; ?>";        },
        cancel: function () { 
        }
    });

    wx.onMenuShareTimeline({
        title   : "这是一次关于生命计算，赶紧试试",
      link: 'http://uixsj.cn/',//        这里设置分享后跳转网址
      imgUrl: 'http://s.uixsj.cn/life-counter-icon.png',//        这里设置分享显示图片
        success: function () { 
            location.href="<?php echo $weixin_url; ?>";        },
        cancel: function () { 
        }
    });

	

}

wx.ready(on_weixin_ready2);
</script>
<style type="text/css">
audio{text-index:-999999em;overflow:hidden;}
</style>



</body>
</html>
