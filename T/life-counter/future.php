<?php
if (isset($_GET['date_time'])) {
   $date_time=$_GET['date_time'];
}
date_default_timezone_set('PRC'); 
$dob = strtotime($date_time);
$y = date('Y', $dob);
 if (($m = (date('m') - date('m', $dob))) < 0) {
  $y++;
 } elseif ($m == 0 && date('d') - date('d', $dob) < 0) {
  $y++;
 }
$nian= date('Y') - $y;

$d1=strtotime ("now");
$d2=strtotime($date_time);
$nian3=round(($d1-$d2)/3600/24/365);
$nian2=($d1-$d2)/3600/24/365;
$Days=round(($d1-$d2)/3600/24);
$yue=round(($d1-$d2)/3600/24/30);
$zhou=round(($d1-$d2)/3600/24/7);
$xiaoshi=round(($d1-$d2)/3600);
$fen=round(($d1-$d2)/60);
$miao=round(($d1-$d2));
$s_Days=36500-$Days;
$s_fan=$s_Days * 3;
$s_zao=$s_Days / 2;
$s_bing=100 - $nian3;
$s_zhou=round($s_Days / 7);
$s_pi=$s_Days * 5;
$s_meng=$s_Days * 10;
$s_chaojia=round($s_Days / 60);
$s_zhayan=$s_Days * 100;
$s_lei=round($s_Days / 15);
$s_hang=round($s_Days / 7);
$s_zhijia=round($s_Days / 20);
$s_shui=$s_Days * 8;
$s_lanyao=round($s_Days * 5.2);
$s_haqian=round($s_Days * 7.4)
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="gb2312">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta name="format-detection" content="telephone=no"/>


<link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/lift.css" />


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php require ('weixin_sdk.php'); ?>  
    <div class="music"> </div> <!-- E music -->
    <span id="playbox" style="display:none;" class="btn_music" onclick="playbox.init(this).play();"> </span><!-- E music -->

<script>
wx.ready(function () {
  var shareData = {

      title: '�������һ��ŵĵ�<?php echo $Days; ?>��,δ���һ���ӵ��<?php echo $s_Days; ?>��',
      desc: '��ϧ����ж�ÿһ�����������ѣ���������',
      link: 'http://uixsj.cn/',//        �������÷������ת��ַ
      imgUrl: 'http://s.uixsj.cn/life-counter-icon.png',//        �������÷�����ʾͼƬ
      trigger: function (res) {
//        alert('�û�������͸�����');
      },
      success: function (res) {
//        alert('�ѷ���');
        location.href = '<?php echo $weixin_url; ?>';
      },
      cancel: function (res) {
        alert("�������������ö���Ҫ�����ѷ�����");
//        location.href = '<?php echo $weixin_url; ?>';
      },
      fail: function (res) {
//        alert(JSON.stringify(res));
      }
  };
  wx.onMenuShareAppMessage(shareData);
  wx.onMenuShareTimeline(shareData);
  wx.onMenuShareQQ(shareData);
  wx.onMenuShareWeibo(shareData);
});
wx.error(function (res) {
//  alert(res.errMsg);
}); 
<!-- E music -->
var html = '<audio id="audio" loop controls autoplay><source src="http://s.uixsj.cn/���� - �������� (clip).mp3"  type="audio/mpeg"/></audio>';//  �����޸ı�������;
$("#playbox").html(html);
playbox.init("playbox");
<!-- E music -->
</script>

<title>����������</title>
</head>
<body class="l_list l_list2">
    <div class="container">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img alt="64x64"  class="media-object img-circle" style="width: 64px; height: 64px;" src="images/a2.png">
            </a>
          </div>
          <div class="media-body">
            <h5 class="media-heading text-muted">�������ܻ�100�꣬�㻹�ܴ���</h5>
            <h3><strong><?php echo $s_Days; ?>��</strong>
<a href="http://tool.uixsj.cn/life-counter/" class="btn btn-vip btn-default btn-sm pull-right">��ϧ����</a>
</h3>
          </div>
        </div>
      </div>
    </div>
    </div> <!-- E header -->


    <div class="list_area container">
        <ul class="list-unstyled">
            <li class="list_first"> <h6 class="text-muted">ʣ�µ���������Լ����</h6> </li>
            <li> ˯ <strong><?php echo $s_Days; ?></strong> �ξ� </li>
            <li> �� <strong><?php echo $s_fan; ?></strong> �ٷ� </li>
            <li> ϴ <strong><?php echo $s_zao; ?></strong> ���� </li>
            <li> �� <strong><?php echo $s_bing; ?></strong></strong> �β� </li>
             <li> �� <strong><?php echo $s_zhou; ?></strong> ����ĩ </li>
            <li> �� <strong><?php echo $s_pi; ?></strong> ��ƨ </li>
            <li> �� <strong><?php echo $s_meng; ?></strong> ���� </li>
            <li> �� <strong><?php echo $s_chaojia; ?></strong> �μ� </li>
            <li> գ <strong><?php echo $s_zhayan; ?></strong> ���� </li>
            <li> �� <strong><?php echo $s_lei; ?></strong> ���� </li>
            <li> ˵ <strong><?php echo $s_hang; ?></strong> �λ� </li>
            <li> �� <strong><?php echo $s_zhijia; ?></strong> ��ָ�� </li>
            <li> �� <strong><?php echo $s_shui; ?></strong> ��ˮ </li>
            <li> �� <strong><?php echo $s_lanyao; ?></strong>������ </li>
            <li> �� <strong><?php echo $s_haqian; ?></strong>�ι�Ƿ </li>
        </ul>

        <div class="buttons text-center">
            <a href="view.php?date_time=<?php echo $date_time; ?>" class="btn btn-default btn-lg"><strong>����</strong></a>

            <p class="text-muted"><a href="<?php echo $weixin_url; ?>">��עһ�����㿪�ĵ��˺�</a></p>

            <p class="text-muted"><a href="http://tool.uixsj.cn/life-counter/"> ��ϧ���� </a> </p>
        </div> <!-- E buttons -->
   </div> <!-- E list_area -->

</body>
</html>
