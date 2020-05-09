<?php
header('Content-type:text/html;charset=utf-8');
require './config.php';
set_time_limit(10);
if($_SERVER['REQUEST_METHOD']=='POST'):
	$res=$_POST;
extract($res);
$id=@intval($id);
if($id=='0'){
	echo '错误的 操作!';
	exit;
}
unset($res['submit']);
$res['rnd']=mt_rand();
//print_r($res);

$query='';
foreach($res as $k=>$v){
	$query.=$k.'='.rawurlencode($v).'&';
}
//echo $query;
//exit;
//$query=http_build_query($query);
$url='http://tp.388g.com/aosbegin00006.php?'.$query;
$http->fetchtext($url);
$result=$http->results;
$http->results=null;
$pregImg='!./([\s\S]+?).gif!';
preg_match($pregImg, $result,$arr);
$data=$website.'/'.$arr[1].'.gif';
//echo '<img src="'.$data.'" />';
$fname='./temp/'.uniqid('temp_').'-'.date('Y-m-d').'.png';
$hp=fopen($data, 'r');
$fp=fopen($fname, 'w');
while(!feof($hp)){
	fwrite($fp, fread($hp, 500));
}
fclose($hp);
fclose($fp);
$json['state']=true;
$json['url']=$fname;
echo json_encode($json);
else:
$json['state']=false;
echo json_encode($json);
endif;
?>

