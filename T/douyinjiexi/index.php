<?php
$surl = @$_GET['url'];
$urls = "https://dwz.98api.cn/free/dyjx.php?url=".$surl;
$data =file_get_contents($urls);
$data = json_decode($data,true);
$url = $data['url'];
$author = $data['author'];
$avator = $data['avator'];
$out0 = 
<<<EOF
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>抖音短视频无水印解析</title>
    <meta name="description" content="抖音小视频在线解析下载工具支持解析抖音短视频,并且解析出来的视频没有水印.">
    <meta name="keywords" content="抖音短视频下载">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="shortcut icon" href="https://s3.bytecdn.cn/aweme/resource/web/static/image/logo/favicon_v2_7145ff0.ico">
    <style>
        html,body,div {
            margin:0;
            padding:0;
            border:0;
            font-size:100%;
            font:inherit;
            vertical-align:baseline;
        }
        body {
            margin:0;
            padding:0;
            font-family: 'Tahoma', sans-serif;
            background-size:100% 100%;
            background-attachment: fixed;
            background-position: center;
            background-image: url(https://up.enterdesk.com/edpic_source/f8/79/a4/f879a4cf98abbdb3ec61053ff7005bcf.jpg);
        }
        .icon {
            padding:15px;
            margin:2% auto;
        }
        .icon img {
            display:block;
            margin:auto;
        }
        .shuru {
            text-align:center;
            margin:2% auto;
            Margin: auto;
        }
        .shuru p {
            color:#048698;
            font-size:20px;
            font-weight:600;
        }
        .shuchu {
            width: 75%;
            padding: 15px;
            color: #666;
            font-size: 17px;
            outline: none;
            background: rgba(255, 255, 255, 0.8);
            border: none;
            margin:3% auto;
            border-radius:4px;
            Margin: auto;
        }
        .shuchu p {
            color:#048698;
            font-size:20px;
            font-weight:600;
        }
        input.url {
            width: 65%;
            padding: 15px;
            color: #333;
            font-size: 17px;
            outline: none;
            background: rgba(255, 255, 255, 0.8);
            border: none;
            margin:3% auto;
            border-radius:4px;
        }
        input[type="submit"] {
            width: 10%;
            border: none;
            outline: none;
            padding: 16px 0px;
            cursor: pointer;
            color:#fff;
            background: #27b1ed;
            font-size:16px;
            margin-left:1%;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background:#008dcc;
            transition:all 0.5s ease-in-out;
        }

        ::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color:    #909;
        }
:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color:    #909;
        }
        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color:    #909;
        }
:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color:    #909;
        }
        input,button,select,textarea {
            outline:none
        }
        textarea {
            resize:none
        }
    </style>
    <style type="text/css">
        a:link {
            color: #27b1ed
        }
        /* 未访问的链接 */
        a:visited {
            color: #27b1ed
        }
        /* 已访问的链接 */
        a:hover {
            color: #27b1ed
        }
        /* 鼠标移动到链接上 */
        a:active {
            color: #27b1ed
        }
        /* 选定的链接 */
    </style>
    <script>
        function Jump() {
            var link = document.getElementById('link').value;
            location.href = 'index.php?url=' + link;
        }
    </script>
</head>
<body>
    <div class="icon">
      
    </div>
    <div class="shuru">
        <input type="text" id="link"class="url" placeholder="粘贴抖音分享的视频地址" value="">
        <input type="submit" value="        确定        " onclick="Jump()">
    </div>
    
            <div class="shuchu">请输入抖音分享的地址，如：http://v.douyin.com/FEXCBV/
            <script type="text/javascript">
                function copyUrl2() {
                    var Url2 = document.getElementById("biao1");
                    Url2.select();
                    document.execCommand("Copy");
                    alert("已复制好，可贴粘。");
                }
            </script>
  
        </body>
    </html>
EOF;

$out1 = 
  
<<<EOF
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>抖音短视频无水印解析</title>
    <meta name="description" content="抖音小视频在线解析下载工具支持解析抖音短视频,并且解析出来的视频没有水印.">
    <meta name="keywords" content="抖音短视频下载">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="shortcut icon" href="https://s3.bytecdn.cn/aweme/resource/web/static/image/logo/favicon_v2_7145ff0.ico">
    <style>
        html,body,div {
            margin:0;
            padding:0;
            border:0;
            font-size:100%;
            font:inherit;
            vertical-align:baseline;
        }
        body {
            margin:0;
            padding:0;
            font-family: 'Tahoma', sans-serif;
            background-size:100% 100%;
            background-attachment: fixed;
            background-position: center;
            background-image: url(https://up.enterdesk.com/edpic_source/f8/79/a4/f879a4cf98abbdb3ec61053ff7005bcf.jpg);
        }
        .icon {
            padding:15px;
            margin:2% auto;
        }
        .icon img {
            display:block;
            margin:auto;
        }
        .shuru {
            text-align:center;
            margin:2% auto;
            Margin: auto;
        }
        .shuru p {
            color:#048698;
            font-size:20px;
            font-weight:600;
        }
        .shuchu {
            width: 75%;
            padding: 15px;
            color: #666;
            font-size: 17px;
            outline: none;
            background: rgba(255, 255, 255, 0.8);
            border: none;
            margin:3% auto;
            border-radius:4px;
            Margin: auto;
            text-align:center;
        }
        .shuchu p {
            color:#048698;
            font-size:20px;
            font-weight:600;
        }
        input.url {
            width: 65%;
            padding: 15px;
            color: #333;
            font-size: 17px;
            outline: none;
            background: rgba(255, 255, 255, 0.8);
            border: none;
            margin:3% auto;
            border-radius:4px;
        }
        input[type="submit"] {
            width: 10%;
            border: none;
            outline: none;
            padding: 16px 0px;
            cursor: pointer;
            color:#fff;
            background: #27b1ed;
            font-size:16px;
            margin-left:1%;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background:#008dcc;
            transition:all 0.5s ease-in-out;
        }

        ::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color:    #909;
        }
:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color:    #909;
        }
        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color:    #909;
        }
:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color:    #909;
        }
        input,button,select,textarea {
            outline:none
        }
        textarea {
            resize:none
        }
    </style>
    <style type="text/css">
        a:link {
            color: #27b1ed
        }
        /* 未访问的链接 */
        a:visited {
            color: #27b1ed
        }
        /* 已访问的链接 */
        a:hover {
            color: #27b1ed
        }
        /* 鼠标移动到链接上 */
        a:active {
            color: #27b1ed
        }
        /* 选定的链接 */
    </style>
    <script>
        function Jump() {
            var link = document.getElementById('link').value;
            location.href = 'index.php?url=' + link;
        }
    </script>
</head>
<body>
    <div class="icon">
        
    </div>
    <div class="shuru">
        <input type="text" id="link"class="url" placeholder="粘贴抖音分享的视频地址" value="">
        <input type="submit" value="        确定        " onclick="Jump()">
    </div>
    
            
                <div class="shuchu">
                分享用户：$author<HR>
                <img src="$avator" height="200" width="200"/><HR>
                视频地址： <textarea readonly="readonly" cols="100%" rows="1" id="biao1"style="color:#666;background-color: #ffffff00;text-align: center;margin-top: 10px;">$url</textarea>
                <a href="$url"target="_blank"style=" color:#666;">下载</a>
                <a href="javascript:void(0);" onclick="copyUrl2();"style=" color:#666;">复制链接</a><br>
                </div>
            <script type="text/javascript">
                function copyUrl2() {
                    var Url2 = document.getElementById("biao1");
                    Url2.select();
                    document.execCommand("Copy");
                    alert("已复制好，可贴粘。");
                }
            </script>
        </body>
    </html>
EOF;

if (strstr($surl,"v.douyin.com")) {
echo ($out1);
}else{
echo ($out0);
}

?>