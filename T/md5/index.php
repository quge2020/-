<?php
$Tools_config = array(
	'ver' => 'v1.0 Bulid 1217',//版本
	'name'=> 'MD5加密',	//工具名称
	'key' => 'MD5',	//关键字
	'des' => 'MD5加密是一种不可逆的加密算法.<br />支持32位(大/小写字母)和16位(大/小写字母)生成'	//描述
);

$query = $_GET['q'];
$type  = $_GET['t'];

class HccTools_md5{
	var $str, $type;
	function str($str, $type = 0){
		if($str){
			$md5 = md5($str);
			$md5_16 = substr($md5,8,16);
			switch($type){
				case 0:		//0 32*大
					return strtoupper($md5);
					break;
				case 1:		//1 32*小
					return strtolower($md5);
					break;
				case 2:		//2 16*大 
					return strtoupper($md5_16);
					break;
				case 3:		//3 16*小
					return strtolower($md5_16);
					break;
				default:	//  32*大
					return strtoupper(md5($str));
			}
			
		}else{
			return '请输入查询字符串!';
		}
	}
	
}

header("Content-type: text/html; charset=utf-8");
$md5 = new HccTools_md5;
define(ToolsUrl, $_SERVER['SERVER_NAME']);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo $Tools_config['name'];?></title>
<link type="text/css" href="HccTools/static/css/HccToolsDefault.css" rel="stylesheet" />
</head>

<body>
<div class="wrap">
	<div class="HccToolsMenu">
		<ul>
			<!--
			<li><a href=""><img height="44" src="HccTools/static/images/logo.gif" /></a></li>
			<li id="pc"><a href=""><img height="44" src="HccTools/static/images/logo.gif" /></a></li>
			-->
			<li><a href="//<?php echo ToolsUrl;?>"><?php echo $Tools_config['name'];?></a></li>
			<li><a href="http://cdn.hechaocheng.tk/">前端公共库CDN节点</a></li>
		</ul>
		

	</div>

	<div class="HccTools">
		<div id="HccItemBar">
			<div class="HccTitle"><?php echo $Tools_config['name'];?></div>
			<div class="HccSearch">
			<form action="//www.haosou.com/s" method="get" accept-charset="UTF-8" onSubmit="document.charset='UTF-8'" target="_blank">
				<input type="hidden" name="src" value="lm">
				<input type="hidden" name="ls" value="s7a1b733a7b">
				<input type="text" name="q" id="q" class="HCC_search" $="true" onClick="this.select();" placeholder="查找资料" autocomplete="off" />
			</form>
			</div>
		</div>
		
		<div class="HccTools1" style="text-align:center;">
			<form id="hechaocheng" method="get">
				<span style="font-size:16px;vertical-align:middle"></span>
				<textarea name="q" onclick="this.select();"><?php if(!empty($query)){echo $query;}else{echo '请输入欲加密的字符串.';}?></textarea>
				<div>
					<input type="radio" name="t" id="md32l" value="0" <?php if ($type==0) echo "checked ";?>style="vertical-align:middle" /><label for="md32l">32[大]</label>
					<input type="radio" name="t" id="md32s" value="1" <?php if ($type==1) echo "checked ";?>style="vertical-align:middle" /><label for="md32s">32[小]</label>
					<input type="radio" name="t" id="md16l" value="2" <?php if ($type==2) echo "checked ";?>style="vertical-align:middle" /><label for="md16l">16[大]</label>
					<input type="radio" name="t" id="md16s" value="3" <?php if ($type==3) echo "checked ";?>style="vertical-align:middle" /><label for="md16s">16[小]</label>
					<input type="submit" class="submit" id="sub" value="加 密" style="vertical-align:middle" />
				</div>
			</form>
			<?php if(!empty($_GET['q'])){?>
				<input type="text" style="vertical-align:middle;width:90%;text-align:center" value="<?php echo $md5->str($query,$type);?>" onclick="this.select();" readonly class="input" />
			<?php }?>
			
				
		</div>
</div>
<div><img alt="返回顶部" src='HccTools/static/images/bg_HccToolsGotop.gif' id='gotop' onclick='javascript:scroll(0,0);'/></div>
<script type="text/javascript" src="HccTools/static/js/similar.min.js"></script>
<div style="display:none"><script type="text/javascript" src="http://xslt.alexa.com/site_stats/js/t/a?url=hechaocheng.tk"></script></div>
<script type="text/javascript">
similar.vote('q', ['MD5查询','在线工具','hechaocheng.tk','站长工具'], '5000');
</script>
</body>
</html>