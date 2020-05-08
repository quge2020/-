<html data-n-head-ssr="" lang="zh-cn" data-n-head="lang"><head data-n-head="">
<title data-n-head="true">在线一键生成QQ超长DIY气泡</title>
<meta data-n-head="true" charset="utf-8">
<meta data-n-head="true" data-hid="viewport" name="viewport" content="width=device-width,initial-scale=1" id="mixia_vpid">
<meta data-n-head="true" data-hid="keywords" name="keywords" content="QQ自定义气泡在线生成器,在线即可生成个性气泡！">
<meta data-n-head="true" data-hid="description" name="description" itemprop="description" content="QQ自定义气泡在线生成器">
<link rel="stylesheet" href="index.css">
</head>
<body data-n-head="">
<div data-server-rendered="true" id="__nuxt">
  <div id="__layout">
    <div class="index_page">
      <main>
      <div class="navbar">
        <header>
        <h1 class="title">
        <a href="https://qia.la" target="_blank" class="nuxt-link-exact-active nuxt-link-active">
        在线一键生成QQ超长DIY气泡
        </a>
        </h1>
        </header>
      </div>
<br>

<fieldset class="nya-container transparent">
<legend class="nya-title">
<span>
QQ自定义气泡在线生成器
</span>
</legend>
<center>
<div id="container">
<div class="nya-select">
    <form action="" method="get"> 
    <label>选择DIY气泡：</label>   
    <select id="selectid">
    <option value="2271">纯白蕾丝</option>
    <option value="2551">环游太空</option>
    <option value="2514">萌系虫虫</option>
    <option value="2516">折纸</option>
    <option value="2493">热气球</option>
    <option value="2494">忍者</option>
    <option value="2464">香甜西瓜</option>
    <option value="2465">小小动物</option>
    <option value="2428">火龙果</option>
    <option value="2427">海盗船</option>
    <option value="2426">传送门</option>
    <option value="2351">浪漫星云</option>
    <option value="2319">冰淇淋</option>
    <option value="2320">可爱小动物</option>
    <option value="2321">紫色梦幻</option>
    <option value="2232">简约金属</option>
    <option value="2239">梦幻之红</option>
    <option value="2240">清新绿色</option>
    <option value="2276">雨蛙呱呱</option>
    <option value="2275">颜文字</option>
    <option value="2274">天使之翼</option>
    <option value="2273">黑色蕾丝</option>
    <option value="2272">恶魔之翼</option>
    </select>
    </form>
    <p>

<input type="text" class="nya-btn" style="text-align:center" placeholder="请输入想要显示的文字" id="link">
<br><br>
<button class="nya-btn" onclick="Jump()">立即生成</button>
</p></div>
</fieldset>
<fieldset class="nya-container transparent">
    <legend class="nya-title"><!----> <span>说明帮助</span> </legend> 
      <p>在线一键生成QQ超长DIY气泡,设置需要有超级会员哦!</p>



  </fieldset>
<script>
function Jump(){
    var sel1 = document.getElementById('selectid');// 取得下拉选项的值
    var index = sel1.selectedIndex;
    var value=sel1.options[index].value;
    
    var link = document.getElementById('link').value; // 取得文本框的值
    $host = "https://zb.vip.qq.com/collection/aio?diyText=";
    $get = "&_wv=16778243&id=";
    $null = "&adtag=mvip.gongneng.android.bubble.collection_aio&_preload=1&type=bubble&_wvx=3&adtag=mvip.gongneng.android.bubble.index_dynamic_tab";
    location.href = $host + link  + $get + value + $null;
 // 知道限制，无法输入链接，用文字代替了
}
</script>

</body>
</html>
</div>
  <!---->