<?php
require_once "public.php";
error_reporting(0); 

?><style>
.follow{font-size:20px;line-height:30px;color:#fff;text-align:center;padding-top:30%;z-index:2000;position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.9);display:none;}
.follow span{font-size:40px;position:absolute;top:10px;left:10px;}
.follow img{width:180px;margin-top:10px;}
</style>
	<div style="padding:20px 15px; height:110px;"><a class="ui-btn-lg ui-btn-danger" href="#" target="_blank"><?php echo "$gz3";?></a></div>
</div>
<footer class="ui-footer ui-footer-btn">
	<ul class="ui-tiled ui-border-t">
	<!-- 跳转方式 -->
		<li class="ui-border-r"><a href="../"><div><?php echo "$gz1";?></div></a></li>
	<!-- 弹二维码方式 -->
		<li class="ui-border-r"><a onClick="show()"><div><?php echo "$gz2";?></div></a></li>
	</ul>
</footer>

<div id="follow" class="follow">
	<span class="close" onClick="hide()">×</span>
	<p>长按下方二维码图片</p>
	<p>点选识别图中二维码</p>	<img src="../ew.jpg">
	
</div>
<script type="text/javascript">
function show(){
	document.getElementById("follow").style.display = "block"; 
}
function hide(){
	document.getElementById("follow").style.display = "none"; 

}
</script>
</body>
</html>