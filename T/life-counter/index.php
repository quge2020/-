
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

<title>����������</title>
</head>
<body class="l_index">

    <div class="l_title text-center">
        <h1>�����ʱ</h1>
    </div> <!-- E l_title -->


    <div class="container">
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" id="date_time" name="date_time" placeholder="�������ڣ���19970608" class="form-control input-lg">
                                                <span style="color:#b92c3b;font-weight:bold;display:none;text-align:center;margin:0 auto" id="date_time_error">�밴��ȷ�ĸ�ʽ��д����19970608, 1-9��/������01-09��ʾ.</span>
                                            </div>

                    <div class="col-sm-12 text-center">
                        <a href="javascript:" id="calculation" class="btn btn-default btn-lg"><strong>��ʼ����</strong></a>
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
var html = '<audio id="audio" loop controls autoplay><source src=""  type="audio/mpeg"/></audio>';//  �����޸ı�������;
$("#playbox").html(html);
playbox.init("playbox");
<!-- E music -->
</script>

	
<script>
function on_weixin_ready2()
{
    wx.onMenuShareAppMessage({
        title   : "����һ�ι����������㣬�Ͻ�����",
        desc    : "���Ѿ�������������ã�δ������ж��ٵĹ�����һ�μ򵥵ļ��㣬�����Ǹ�����ϧ��",
      link: 'http://uixsj.cn/',//        �������÷������ת��ַ
      imgUrl: 'http://s.uixsj.cn/life-counter-icon.png',//        �������÷�����ʾͼƬ
        type    : 'link',
        dataUrl : '',
        success: function () { 
            location.href="<?php echo $weixin_url; ?>";        },
        cancel: function () { 
        }
    });

    wx.onMenuShareTimeline({
        title   : "����һ�ι����������㣬�Ͻ�����",
      link: 'http://uixsj.cn/',//        �������÷������ת��ַ
      imgUrl: 'http://s.uixsj.cn/life-counter-icon.png',//        �������÷�����ʾͼƬ
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
