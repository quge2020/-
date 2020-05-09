<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在线随机密码生成工具 - 强化密码安全</title>
		<meta http-equiv="Pragma" content="no-cache">
	<link rel="STYLESHEET" type="text/css" href="images/style.css">
		</head>

<body>
<?
$char1 = 10;// 密码长度
$possible1 = "0123456789bcdfghjkmnpqrstvwxyz"; // 出现的字符
function generatePassword ($length, $possible1)
{
 if ($lenght == "" OR !is_numeric($lengh)){
  $lenght = 10; 
 }
  srand(make_seed());
 $i = 0; 
 $password = "";    
 while ($i < $length) { 
  $char1 = substr($possible1, rand(0, strlen($possible1)-1), 1);
  if (!strstr($password, $char1)) { 
   $password .= $char1;
   $i++;
   }
   }
 echo $password;
}

$char2 = 10;// 密码长度
$possible2 = "0123456789ABCDEFGHIJKLMNOPQRESTUVWXYZ"; // 出现的字符
function generatePassword2 ($length, $possible2)
{
 if ($lenght == "" OR !is_numeric($lengh)){
  $lenght = 10; 
 }
  srand(make_seed());
 $i = 0; 
 $password2 = "";    
 while ($i < $length) { 
  $char2 = substr($possible2, rand(0, strlen($possible2)-1), 1);
  if (!strstr($password2, $char2)) { 
   $password2 .= $char2;
   $i++;
   }
   }
 echo $password2;
}

$char3 = 12;// 密码长度
$possible3 = "0123456789bcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRESTUVWXYZ"; // 出现的字符
function generatePassword3 ($length, $possible3)
{
 if ($lenght == "" OR !is_numeric($lengh)){
  $lenght = 12; 
 }
  srand(make_seed());
 $i = 0; 
 $password3 = "";    
 while ($i < $length) { 
  $char3 = substr($possible3, rand(0, strlen($possible3)-1), 1);
  if (!strstr($password3, $char3)) { 
   $password3 .= $char3;
   $i++;
   }
   }
 echo $password3;
}

$char4 = 16;// 密码长度
$possible4 = "0123456789bcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRESTUVWXYZ%^#$@&*^"; // 出现的字符
function generatePassword4 ($length, $possible4)
{
 if ($lenght == "" OR !is_numeric($lengh)){
  $lenght = 10; 
 }
  srand(make_seed());
 $i = 0; 
 $password4 = "";    
 while ($i < $length) { 
  $char4 = substr($possible4, rand(0, strlen($possible4)-1), 1);
  if (!strstr($password4, $char4)) { 
   $password4 .= $char4;
   $i++;
   }
   }
 echo $password4;
}

function make_seed()
{
 list($usec, $sec) = explode(' ', microtime());
 return (float) $sec + ((float) $usec * 100000);
}
?>
<br/><br/><br/><br/>
<div id="container">
	<div id="top"></div>
	
	<div id="content">
		<h1>在线随机密码生成工具 - (V2.0)</h1>
		<p>　　为了加强我们网站和注册账户的密码安全，往往我们自己随意输入的密码带有很强的共同性。因此，拥有一款方便的密码生成小工具是必要的，这样我们在注册账户和设置网站密码，生成后复制使用，这样的密码才是较为安全的。<br/>　　这款在线随机密码生成工具可以帮助我们解决密码简单问题，强化安全密码。</p>
		
		<div id="password-area">
		随机密码生成:(数字+小写字母)<br>
		<input name="random_password" type="text" value="<? echo generatePassword($char1, $possible1);?>" onclick="this.select();" class="password-form"><br>
		<br>
		随机密码生成:(数字+大写字母)<br>
		<input name="random_password" type="text" value="<? echo generatePassword($char2, $possible2);?>" onclick="this.select();" class="password-form"><br>
		<br>
		随机密码生成:(数字+大小写字母)<br>
		<input name="random_password" type="text" value="<? echo generatePassword($char3, $possible3);?>" onclick="this.select();" class="password-form"><br>
		<br>
		随机密码生成:(数字+大小写字母+符号)<br>
		<input name="random_password" type="text" value="<? echo generatePassword($char4, $possible4);?>" onclick="this.select();" class="password-form"><br>
		<br>
		<button onclick="javascript:location.reload()" id="generate-button">重新生成一组新密码</button><br>
		</div>

		<br/>
		<div id="bottom-text">
			<div class="bookmark-link">
			<a href="http://zye.cc/">如果你认为这款工具有用，(Ctrl+D)收藏一下吧</a>
			</div>
			
						
					</div>
	</div>
	<div id="bottom"></div>
</div>

<div id="footer">
All Rights Reserved.<a href="http://tool.zye.cc/password">在线随机密码生成工具</a> - Baifan
</div>
</body></html>