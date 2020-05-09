<?php

header("content-type:image/jpeg");
// header("Content-type:text/html;charset=utf-8");
$name = $_GET['name'];
$im = imagecreatetruecolor(490, 160);
$bg = imagecreatefromjpeg('1.jpg');//被拷贝的
imagecopy($im,$bg,0,0,0,0,490,160);
imagedestroy($bg);
$black = imagecolorallocate($im, 255, 255, 255);

// }
if (strlen($name) <= 6) {
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 50, 0, 5, 60, $black, $font, $text);
		imagettftext($im, 70, 0, 70, 77, $black, $font, $text1);	 	
}else if (strlen($name) <= 9) {
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$text2 = mb_substr($name,2,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 50, 0, 5, 60, $black, $font, $text);
		imagettftext($im, 55, 0, 70, 65, $black, $font, $text1);
		imagettftext($im, 70, 0, 140, 80, $black, $font, $text2);
}else if (strlen($name) <= 12) {
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$text2 = mb_substr($name,2,1,'utf-8');
		$text3 = mb_substr($name,3,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 45, 0, 5, 52, $black, $font, $text);//70
		imagettftext($im, 50, 0, 70, 60, $black, $font, $text1);//80
		imagettftext($im, 55, 0, 140, 65, $black, $font, $text2);//90
		imagettftext($im, 70, 0, 210, 80, $black, $font, $text3);//100
}else if (strlen($name) <= 15) {
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$text2 = mb_substr($name,2,1,'utf-8');
		$text3 = mb_substr($name,3,1,'utf-8');
		$text4 = mb_substr($name,4,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 40, 0, 5, 46, $black, $font, $text);//60
		imagettftext($im, 45, 0, 70, 52, $black, $font, $text1);//70
		imagettftext($im, 50, 0, 140, 60, $black, $font, $text2);//80
		imagettftext($im, 55, 0, 210, 65, $black, $font, $text3);//90
		imagettftext($im, 70, 0, 280, 80, $black, $font, $text4);//100
}else if (strlen($name) <= 18) {
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$text2 = mb_substr($name,2,1,'utf-8');
		$text3 = mb_substr($name,3,1,'utf-8');
		$text4 = mb_substr($name,4,1,'utf-8');
		$text5 = mb_substr($name,5,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 35, 0, 5, 42, $black, $font, $text);//60
		imagettftext($im, 40, 0, 70, 46, $black, $font, $text1);//60
		imagettftext($im, 45, 0, 140, 52, $black, $font, $text2);//70
		imagettftext($im, 50, 0, 210, 60, $black, $font, $text3);//80
		imagettftext($im, 55, 0, 280, 65, $black, $font, $text4);//90
		imagettftext($im, 70, 0, 360, 80, $black, $font, $text5);//100
}else if (strlen($name) <= 21) {
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$text2 = mb_substr($name,2,1,'utf-8');
		$text3 = mb_substr($name,3,1,'utf-8');
		$text4 = mb_substr($name,4,1,'utf-8');
		$text5 = mb_substr($name,5,1,'utf-8');
		$text6 = mb_substr($name,6,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 30, 0, 5, 35, $black, $font, $text);//50
		imagettftext($im, 35, 0, 50, 42, $black, $font, $text1);//60
		imagettftext($im, 40, 0, 100, 46, $black, $font, $text2);//60
		imagettftext($im, 45, 0, 150, 52, $black, $font, $text3);//70
		imagettftext($im, 50, 0, 210, 55, $black, $font, $text4);//80
		imagettftext($im, 55, 0, 275, 60, $black, $font, $text5);//90
		imagettftext($im, 70, 0, 345, 77, $black, $font, $text6);//100
}else if (strlen($name) <= 24) {
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$text2 = mb_substr($name,2,1,'utf-8');
		$text3 = mb_substr($name,3,1,'utf-8');
		$text4 = mb_substr($name,4,1,'utf-8');
		$text5 = mb_substr($name,5,1,'utf-8');
		$text6 = mb_substr($name,6,1,'utf-8');
		$text7 = mb_substr($name,7,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 20, 0, 5, 25, $black, $font, $text);//40
		imagettftext($im, 30, 0, 40, 35, $black, $font, $text1);//50
		imagettftext($im, 35, 0, 85, 42, $black, $font, $text2);//60
		imagettftext($im, 40, 0, 135, 46, $black, $font, $text3);//60
		imagettftext($im, 45, 0, 190, 52, $black, $font, $text4);//70
		imagettftext($im, 50, 0, 245, 55, $black, $font, $text5);//80
		imagettftext($im, 55, 0, 315, 60, $black, $font, $text6);//90
		imagettftext($im, 70, 0, 390, 77, $black, $font, $text7);//100
}else{
		$text = mb_substr($name,0,1,'utf-8');
		$text1 = mb_substr($name,1,1,'utf-8');
		$text2 = mb_substr($name,2,1,'utf-8');
		$text3 = mb_substr($name,3,1,'utf-8');
		$text4 = mb_substr($name,4,1,'utf-8');
		$text5 = mb_substr($name,5,1,'utf-8');
		$text6 = mb_substr($name,6,1,'utf-8');
		$text7 = mb_substr($name,7,1,'utf-8');
		$text8 = mb_substr($name,8,1,'utf-8');
		$font = './font/FZZYJW_0.TTF';
		$black = imagecolorallocate($im, 0, 0, 0);
		//第一个参数为字体大小
		//第二个参数为旋转度数
		//第三个参数为X坐标
		//第四个参数为Y坐标
		imagettftext($im, 15, 0, 5, 20, $black, $font, $text); 
		imagettftext($im, 20, 0, 25, 25, $black, $font, $text1);//40
		imagettftext($im, 30, 0, 55, 35, $black, $font, $text2);//50
		imagettftext($im, 35, 0, 95, 42, $black, $font, $text3);//60
		imagettftext($im, 40, 0, 140, 46, $black, $font, $text4);//60
		imagettftext($im, 45, 0, 190, 52, $black, $font, $text5);//70
		imagettftext($im, 50, 0, 250, 55, $black, $font, $text6);//80
		imagettftext($im, 55, 0, 315, 60, $black, $font, $text7);//90
		imagettftext($im, 70, 0, 385, 77, $black, $font, $text8);//100
		}

imagejpeg($im);
imagedestroy($im);

?>