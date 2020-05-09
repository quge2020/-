<?php
ob_start();
session_start();
header('Content-type: text/html; charset=utf-8');
date_default_timezone_set('PRC');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
function title($title,$description=null,$keywords=null){
$title = empty($title) ? '标题未定义' : $title;
$description = empty($description) ? '描述未定义' : $description;
$keywords = empty($keywords) ? '关键字未定义' : $keywords;
echo <<<HTML
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>{$title} - 白帆工具箱</title>
  <meta name="description" content="{$description}"/>
  <meta name="keywords" content="现实君,现实君小工具,PHP工具,{$keywords}"/>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
HTML;
}
function footer(){
echo <<<HTML
<div class="footer"><div style="text-align:center;font-size:12px;color:#fdfdfd">&copy; Powered by <a href="http://tool.zye.cc/" style="color:#fdfdfd">工具箱</a></div>

</div>
</body></html>
HTML;
ob_end_flush();
}
?>