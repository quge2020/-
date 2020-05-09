<?php
extract($_GET);
if(empty($url)) die();
preg_match('!./temp/temp_([\s\S]+).png!i', $url,$fa);
if(empty($fa)) die();
$path='./temp/temp_'.$fa[1].'.png';	
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=".basename($path)); 
header("Pragma: no-cache");
header("Content-Length: ".filesize($path)); 
readfile($path);