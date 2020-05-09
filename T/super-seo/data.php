<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uixsj.cn</title>
<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
<link type="text/css" href="css/main.css" rel="stylesheet" />
</head>
<body style="background: #fafafa;">
<?php if($p=='1'){
  //echo 	'<span id="loading" style="text-align:center"><img src="loading.gif" /></span>';
}
?>

<?php
$urls = file('urls.txt');
$count = count($urls);
$maxpage = ceil($count/10);
if(isset($_GET['dn'])){
	$dn = $_GET['dn'];
}
if(isset($_GET['p'])){
	$p = $_GET['p'];
	if($p<1){
	  $p=1;
}
if($p>$maxpage){
	echo '<div style="color:red; text-align:center">工作完毕！</div>';
	exit;
}
?>
	<div class="alert alert-warning" role="alert">（<?php echo ($p*10).'/'.$count;?>）请不要关闭页面，<span id="endtime">15</span>秒后跳到下一页!</div>
	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo round(($p*10)/$count*100);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($p*10)/$count*100);?>%;">
		<span><?php echo round(($p*10)/$count*100)."%";?></span>
	  </div>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>外链目标网址</th>
				<th style="width: 88px;">状态</th>
			</tr>
		</thead>
		<tbody>
	<?php

		$ii = ($p*10)-10;
		$jj = $p*10;
		for($i=$ii;$i<$jj;$i++){
			$link = str_replace('***',$dn,$urls[$i]);
			$link = str_replace('\n','',$link);
			$link = str_replace('\r\n','',$link);
			$link = str_replace(' ','',$link);
			
			echo "<tr><td><span class=\"num\">".($i+1)."</span></td><td><a target='_blank' href=\"".$link."\">".$link."</a></td><td><span class=\"status\"><iframe src='url.htm?".$link."' height='20' width='64' marginwidth='0' marginheight='0' hspace='0' vspace='0' frameborder='0' scrolling='no'></iframe></span></td></tr>";
		}
	}

	?>
		</tbody>
	</table>

<script language="javascript" type="text/javascript">
<!--
//document.getElementById("loading").style.display="none";
var lc = "10";
var p = "<?php echo $p+1;?>";
var k = "<?php echo $dn;?>";
var second=15;
var timer;
function change()
{
	second--;
	if(second>-1)
	{
		document.getElementById("endtime").innerHTML=second;
		timer = setTimeout('change()',1000);
	}
	else
	{
		clearTimeout(timer);
	}
}
timer = setTimeout('change()',1000); 
setTimeout('ourl()',1000*second);

function ourl()
{
	location.href='data.php?p='+p+'&dn='+k;
}
-->
</script>

</body>
</html>