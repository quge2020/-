<?php header("Content-Type:text/html; charset=UTF-8");
error_reporting(E_ALL & ~E_NOTICE);
$d = $_SERVER['QUERY_STRING'];?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<title>超级外链工具 - 在线SEO自动化发外链推广工具</title>
<meta name="keywords" content="超级外链,SEO外链,外链推广,外链工具," />
<meta name="description" content="超级外链工具，是一款在线全自动化发外链的推广工具，可免费为网站在线批量增加外链，大大提高外链发布工作效率，是广大草根站长们必备的站长工具。" />
<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
<link type="text/css" href="css/main.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<?php include('topnav.php');?>

<div class="container" style="margin-top: 68px;">

	<div class="row" style="margin-top: 28px;">
		<div class="col-md-9">
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-link"></span><strong>超级外链工具</strong>
				</header>
				<div class="panel-body">
					<div class="col-md-8" style="border-right: 3px solid #e5e5e5; padding-bottom: 28px;">
						<h3>请输入需要外链推广的网址</h3>
						<!--form action="?" method="get"-->
							<div class="input-group input-group-tianyu">
								<span class="input-group-addon">http://</span>
								<input id="dn" type="text" class="form-control" placeholder="请输入您的域名" value="" />
								<span class="input-group-btn">
									<button id="linkbtn" class="btn" >开始推广</button>
								</span>
							</div>
						<!--/form-->
					</div>
					<div class="col-md-4">
					
					</div>
					<div class="col-md-12" id="linkshow" style="<?php if(strlen($d)==0){echo 'display:none';} ?>">
						 <h3>正在访问的链接</h3>
						 <div id="linklist" style="height: 438px; /*height: 888px;*/">
							<?php
							if(strlen($d)>3){
								echo "<iframe src='data.php?p=1&dn=".$d."' height='100%' width='100%' marginwidth='0' marginheight='0' hspace='0' vspace='0' frameborder='0' scrolling='no'></iframe>";
							}
							?>
						</div><!--con-->
					</div>
					<div class="col-md-12">
						 <h3>使用提示</h3>
						<p>　　外链工具只是辅助工具，一般适用于短时间内无法建设大量外链的新站，新站应坚持每天做一到两次为宜，大约一周左右能看到效果。老站不建议使用此类工具，用了效果不大还浪费时间，老站应多交换优质的友情链接，通过发布软文建设外链方为上策。</p>
					</div>
				</div>
			</div>
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-question-sign"></span>工具原理
				</header>
				<div class="panel-body">
					<div class="col-md-12">
					<p>　　可能很多第一次使用外链工具的站长朋友们都会担心同一个问题，就是会不会被百度K站、降权等风险？其实大家只要了解此类工具批量增加外链的原理就不会担心这个问题。</p><p>　　此类工具的原理其实非常简单，网络上几乎所有的网站查询工具（例如爱站网、去查网和本站的站长工具）都会留下查询网站的外链。你要是把网络上的每一个工具站都去查询一遍，就能为查询的网站建设大量的外链。</p><p>　　外链工具正是利用这个原理，免除你手动去访问每一个工具站查询，利用收集到的工具站列表，在线自动为你的网站查询。这种方法建设的外链是正规有效的，所以不必担心被K站和降权的风险。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-wrench"></span>工具介绍
				</header>
				<div class="panel-body">
						<p>　　超级外链工具，是一款在线全自动化发外链的推广工具。</p><p>　　使用本工具可免费为网站在线批量增加外链，大大提高外链发布工作效率，是广大草根站长们必备的站长工具。</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-save"></span>本站源码
				</header>
				<div class="panel-body">
						<p>本工具源码提供免费下载</p>
						<a href="https://down.zye.cc" class="btn btn-tianyu" target="_blank"><span class="glyphicon glyphicon-save">点击进入下载地址</a>
				</div>
			</div>
		</div>
				<div class="col-md-3">
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-link"></span>友情链接
				</header>
				<div class="panel-body">
					<a class="list-group-item" href="http://tool.zye.cc" target="_blank">工具箱</a>
					
				</div>
			</div>
		</div>
	</div>
</div>

<script>
function cgurl(obj,url){
	obj.href=url;
}

function ck_dn(str)
{
        if(!/^([\w-]+\.)+((com)|(net)|(org)|(gov\.cn)|(info)|(cc)|(me)|(asia)|(com\.cn)|(net\.cn)|(org\.cn)|(name)|(biz)|(tv)|(cn)|(la))$/.test(str)){
            return false;
        }else{
		    return true;	
		}

}
$(document).ready(function(){
	$("#linkbtn").click(function(){
			$domain = $("#dn").val();
			if($domain==""){
			   alert("请输入域名");
			}else if(ck_dn($domain)){
				$("#linkshow").show();
				$("#linklist").html("<iframe src='data.php?p=1&dn="+$domain+"' height='100%' width='100%' marginwidth='0' marginheight='0' hspace='0' vspace='0' frameborder='0' scrolling='no'></iframe>");
			}else{
				alert("请输入正确的域名");
			}
	});
});
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1361866808579755" charset="utf-8"></script>
</body>
</html>