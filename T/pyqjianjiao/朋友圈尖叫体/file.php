<?php
//接受数据
 $name = $_GET['name'];
//打开图片
$src="icon.jpg";//这里的图片名字改为自己图片的名字

//获取图片信息
$info=getimagesize($src);
//通过图像的编号来获取图像的类型
$type=image_type_to_extension($info[2],false);
//在内存中创建一个和我们图像类型一样的图像
$fun='imagecreatefrom'.$type;
//把图片复制到我们的内存中
$image=$fun($src);
//设置字体的路径
$font ="msyh.ttf";//这里改为自己字体库的名字
//填写我们的水印内容
$content=$name;//这里改为自己所想要打上的水印内容
//设置字体的颜色RGB和透明度 
$col=imagecolorallocatealpha($image,255,255,255,50);
//写入文字
imagettftext($image,20,0,20,30,$col,$font,$content);
//输出图片
header("Content-type:".$info['mime']);
$func='image'.$type;
$func($image);
$func($image,'newimage'.$type);
?>