<?php
header('Content-type:text/html;charset=utf-8');
require './config.php';
$page = 1;
extract($_GET);
$page = intval($page);
$page = $page<1?1:$page;
$page = $page>26?26:$page;
$baseeUrl = $website . '/default.php?cateid=20&catesubid=29&pagesize=10&page=' . $page;
$http -> fetch($baseeUrl);
/*if(!file_exists('./temp/')){
 mkdir('./temp');
 }*/
//print_r($http->results);
//exit;
$result = preg_replace('!<script([\s\S]+?)</script>!', '', $http -> results);
//$fname='./temp/'.uniqid('temp_').'-'.date('Y-m-d').'.txt';
$pregList = '!<div class="photolist">([\s\S]+)</div>!';
preg_match($pregList, $result, $body);
$result = $body[1];
$preg = '!<a href="make.php\?id=([\d]+?)" class="([\s\S]+?)">([\s\S]+?)</a>!i';
preg_match_all($preg, $result, $data);
$imgUrl = $urlName = '';
foreach ($data[3] as $val) {
	$imgUrl .= $val;
}
$len = count($data[0]);
for ($i = 0; $i < $len; $i++) {
	if ($i % 2) {
		$urlName .= $data[0][$i];
	}
}
//echo $urlName;
$pregImg = '!<img class=imgautofix src="([\s\S]+?)" border="0" />!';
preg_match_all($pregImg, $imgUrl, $arr2);
$pregName = '!<a([\s\S]+?)class="title">([\s\S]+?)</a>!';
preg_match_all($pregName, $urlName, $arr3);
$data[] = str_replace('./', '/', $arr2[1]);
$data[] = $arr3[2];
$idList = array_flip(array_flip($data[1]));
foreach ($idList as $val) {
	$id[] = $val;
}
$results['id'] = $id;
$results['img'] = $data[4];
$results['title'] = $data[5];
unset($data);
$data = $results;
//print_r($data);
$lens = count($data['id']);
$view =  PHP_EOL;
$banner = array();
for ($b = 0; $b < 4; $b++) {
	$banner['id'][] = $data['id'][mt_rand(1, $lens - 1)];
	$banner['title'][] = $data['title'][mt_rand(1, $lens - 1)];
	$banner['img'][] = $data['img'][mt_rand(1, $lens - 1)];
}
//exit;
for ($i = 0; $i < $lens; $i++) {
	$view .= '<li>';
	$view .= '<a href="./view.php?id=' . $data['id'][$i] . '"><img src="' . $website . $data['img'][$i] . '" alt="' . $data['title'][$i] . '" /></a>';
	$view .= '<p><a href="./view.php?id=' . $data['id'][$i] . '">'.$data['title'][$i].'</a></p>';
	$view .= '</a></li>' . PHP_EOL;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" type="text/css" href="./style/style.css"/>
		<title>
			第<?=$page ?>页
			- 在线举牌照制作
		</title>
	</head>
	<body>
		<div id="bBox">
			<div class="slider">
				<div class="show">
					<a href="./view.php?id=<?=$banner['id'][0]?>">
						<img src="<?=$website.$banner['img'][0]?>" />
					</a>
				</div>
				<div>
					<a href="./view.php?id=<?=$banner['id'][1]?>">
						<img src="<?=$website.$banner['img'][1]?>" />
					</a>
				</div>
				<div>
					<a href="./view.php?id=<?=$banner['id'][2]?>">
						<img src="<?=$website.$banner['img'][2]?>" />
					</a>
				</div>
				<div>
					<a href="./view.php?id=<?=$banner['id'][3]?>">
						<img src="<?=$website.$banner['img'][3]?>" />
					</a>
				</div>
			</div>
			<div class="bTitle">
				<p class="show">
					<a href="./view.php?id=<?=$banner['id'][0]?>">
						<?=$banner['title'][0]?>
					</a>
				</p>
				<p>
					<a href="./view.php?id=<?=$banner['id'][1]?>">
						<?=$banner['title'][1]?>
					</a>
				</p>
				<p>
					<a href="./view.php?id=<?=$banner['id'][2]?>">
						<?=$banner['title'][2]?>
					</a>
				</p>
				<p>
					<a href="./view.php?id=<?=$banner['id'][3]?>">
						<?=$banner['title'][3]?>
					</a>
				</p>
			</div>
			<div class="bNav">
				<span class="on">1</span>
				<span>2</span>
				<span>3</span>
				<span>4</span>
			</div>
		</div>
		<div class="clear"></div>
		<div id="photo">
			<ul>
				<?=$view?>
				<div class="clear">
				</ul>
				</div>
				</div>
		<div class="page">
			<table>
				<tr>
					<td class="prev">
						<a href="?page=<?=($page-1)?>">
							上一页
						</a>
					</td>
					<td>
						第<?=$page?>页
					</td>
					<td class="next">
						<a href="?page=<?=($page+1)?>">
							下一页
						</a>
					</td>
				</tr>
			</table>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">$(document).ready(function() {
	var _times = 0; //储存自动运行
	var _play = 0; //储存自动运行
	var _time = 2000; //设置动画间隔时长
	var len = $('#bBox .slider div').length //自动获取图片数量
	function Player(_eq) { //执行切换动画
		//					$('#bBox .slider div').eq(_eq).stop()
		$('#bBox .slider div').eq(_eq).fadeIn(1000).siblings().fadeOut(0); //显示大图动画
		//					$('#bBox .slider div').eq(_eq).addClass('show').siblings().removeClass('show');
		$('#bBox .bNav span').eq(_eq).addClass('on').siblings().removeClass('on'); //给导航条显示样式
		$('#bBox .bTitle p').eq(_eq).addClass('show').siblings().removeClass('show'); //显示标题
	}

	function autoPlays() { //自动切换
		_play++;
		if (_play >= len) {
			_play = 0;
		}
		Player(_play) //执行切换动画
	}

	function autoPlay() { //自动切换索引
		_times = setInterval(autoPlays, _time);
	}
	$('#bBox .bNav span').mouseover(function() { //鼠标放上去是跳转到对应图片
		var _play = $(this).index();
		Player(_play); //执行切换动画
		clearInterval(_times); //停止自动切换
	}).mouseout(function() { //鼠标移开之后开始自动切换
		var _play = $(this).index();
		autoPlay(_play); //自动切换
	});
	$('.slider div').mouseover(function() { //鼠标移动到图片上面时停止动画
		clearInterval(_times); //停止动画切换
	}).mouseout(function() { //鼠标移开之后开始自动切换
		autoPlay(_play); //自动切换开始
	});
	autoPlay();
});</script>
	</body>
</html>