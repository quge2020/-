<?php
header('Content-type:text/html;charset=utf-8');
/*
 * 唯一丶 qq721796631
 * 2015.12.11
 * PHP5.2以上可用
 * */
require './config.php';
extract($_GET);
$id = intval($id);
if ($id == '0') {
	echo '错误的 操作!';
	exit ;
}
$baseUrl = $website . '/make.php?id=' . $id;
$http -> fetch($baseUrl);
$pregImg = '!<img id="previewimg" src=".([\s\S]+)" border="0" />!';
$result = $http -> results;
//匹配标题
$pregTiele='!<div class="makespan3">([\s\S]+?)<h2>([\s\S]+?)</h2>!';
preg_match($pregTiele, $result,$title);
$title=$title[2];
preg_match($pregImg, $result, $arr);
$img = $arr[1];
$pregBody = '!<div class="ms-s">([\s\S]+)</div>!';
preg_match($pregBody, $result, $body);
$body = $body[1];
$body = preg_replace('!<iframe[\s\S]+?</iframe>!i', '', preg_replace('!<script([\s\S]+?)</script>!i', '', $body));
if(stripos($body, 'input')){
$pregInput = '!<input([\s\S]+?)id="([\s\S]+?)"([\s\S]+?)value="([\s\S]+?)"([\s\S]+?)/>!';
preg_match_all($pregInput, $body, $arr2);
$data[]=$arr2[0];
@$data[] = $arr2[2];
}
if(stripos($body, 'textarea')){
	$pregText='!<textarea([\s\S]+?)id="([\w\d]+?)"([\s\S]+?)</textarea>!i';
	preg_match_all($pregText, $body,$textarea);
	foreach($textarea[0] as $val){
		$data[0][]=$val;
	}
	foreach($textarea[2] as $val){
		$data[1][]=$val;
	}
}
//print_r($data);
for($i=0;$i<2;$i++){
	foreach(@$data[$i] as $val){
		$_temp[$i][]=$val;
	}
}
unset($arr2);
?>
<title><?=$title?></title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<div id="imgs">
			<img id="img" src="<?=$website . $img?>" />
		<div class="p-title">预览图 - <span><?=$title?></span></div>
		</div>
	<div id="down" style="display: none;"><a href="javascript:;" target="_blank">下载图片</a></div>
	<form action="create.php" method="post" onsubmit="return get_img()">
	<input type="hidden" id="id" name="id" value="<?=$id ?>" />
	<?php
	foreach($_temp[0] as $key=>$val):
	echo '<p>输入框'.($key+1).'</p>';
	echo $val;
	endforeach;
	$len=count($_temp[0]);
	 /* 
	$len=count($data[0]);
	for($i=0;$i<$len;$i++):
	?>
	<p>输入框<?=($i + 1) ?>：</p>
	<input id="<?=$data[0][$i] ?>" name="<?=$data[0][$i] ?>" value="<?=$data[1][$i] ?>"/>
	<?endfor; */?>
	
	<!--input type="hidden" name="len" value="<?=$len?>" /-->
	<p>
		<input type="submit" name="submit" value="制作我的举牌照" />
	</p>
</form>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
function get_img() {
	$('#img').attr("src",'./style/load.gif');
//	alert('请稍等，正在紧张制作中。。。')
	var query;
<?php
//print_r($_temp);
$query='';
$query.='id='.$id.'&';
for ($i = 0; $i < $len; $i++) {
echo 'var ' . $_temp[1][$i] . '=$("#' . $_temp[1][$i] . '").val();' . PHP_EOL;
$query.=$_temp[1][$i].'="+'.rawurlencode($_temp[1][$i]).'+"&';
}
echo 'var post = "'.$query.'";';
?>

//console.log(text1);
//return false;
$.post('./create.php',post,function(msg){
	$('#img').attr("src",msg.url);
	console.log(msg);
	$('.p-title').hide();
	$('#down').show().find('a').html('<a href="./down.php?url='+msg.url+'">下载图片</a>');
	},"json");
return false;
}
</script>
