-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019-12-20 10:31:44
-- 服务器版本： 5.5.62-log
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tools`
--

-- --------------------------------------------------------

--
-- 表的结构 `ms_tools_admin`
--

CREATE TABLE IF NOT EXISTS `ms_tools_admin` (
  `id` int(255) unsigned NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `ms_tools_admin`
--

INSERT INTO `ms_tools_admin` (`id`, `email`, `password`, `name`, `qq`) VALUES
(1, 'zye.cc', 'b8d9ab78f76573b3d753547c9ce28b12', '白帆', '1015012029');

-- --------------------------------------------------------

--
-- 表的结构 `ms_tools_class`
--

CREATE TABLE IF NOT EXISTS `ms_tools_class` (
  `id` int(200) unsigned NOT NULL,
  `classname` varchar(200) DEFAULT NULL,
  `classid` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ms_tools_class`
--

INSERT INTO `ms_tools_class` (`id`, `classname`, `classid`) VALUES
(1, '有趣网站', 'fun'),
(2, '实用工具', 'tools'),
(3, '网页特效', 'web'),
(4, '微信应用', 'wx'),
(5, 'API应用', 'api'),
(6, '网页游戏', 'game');

-- --------------------------------------------------------

--
-- 表的结构 `ms_tools_links`
--

CREATE TABLE IF NOT EXISTS `ms_tools_links` (
  `id` int(20) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `ms_tools_menu`
--

CREATE TABLE IF NOT EXISTS `ms_tools_menu` (
  `id` int(10) unsigned NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `ms_tools_system`
--

CREATE TABLE IF NOT EXISTS `ms_tools_system` (
  `id` int(5) unsigned NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL,
  `t1` varchar(255) DEFAULT NULL,
  `t2` varchar(255) DEFAULT NULL,
  `t3` varchar(255) DEFAULT NULL,
  `t4` varchar(255) DEFAULT NULL,
  `t5` varchar(255) DEFAULT NULL,
  `t6` varchar(255) DEFAULT NULL,
  `ftitle` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `wx` varchar(255) DEFAULT NULL,
  `weibo` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `bb` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `ms_tools_system`
--

INSERT INTO `ms_tools_system` (`id`, `logo`, `title`, `keyword`, `descc`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `ftitle`, `qq`, `wx`, `weibo`, `footer`, `bb`, `template`) VALUES
(1, '白帆工具', '白帆在线工具箱', '白帆工具箱在线工具白帆工作室白帆资源库', '在线工具箱|实用工具-有趣工具-微信工具-zye.cc-分享有趣', '白', '帆', '的', '工', '具', '箱', '回归现实-发现有趣', '3494490', '3494490', '不知道', 'Copyright   2019 <a href="" title="备案" target="_blank"></a>', '2.0.1', 'index/index');

-- --------------------------------------------------------

--
-- 表的结构 `ms_tools_temp`
--

CREATE TABLE IF NOT EXISTS `ms_tools_temp` (
  `id` int(255) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ms_tools_temp`
--

INSERT INTO `ms_tools_temp` (`id`, `name`, `url`, `img`) VALUES
(1, '官方模版', 'index/index', '/Public/images/temp2.jpg'),
(2, '杨小杰工具箱模版', 'boot/index', '/Public/images/temp1.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `ms_tools_tool`
--

CREATE TABLE IF NOT EXISTS `ms_tools_tool` (
  `id` int(255) unsigned NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `cid` int(255) DEFAULT NULL,
  `color` varchar(120) DEFAULT NULL,
  `zan` int(255) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `ms_tools_tool`
--

INSERT INTO `ms_tools_tool` (`id`, `logo`, `title`, `yd`, `url`, `author`, `cid`, `color`, `zan`) VALUES
(1, '球', '玩个球吧', '0', '/T/qiu/', '白帆', 1, 'open open5', 1),
(2, '百', '让我帮你百度', '0', '/T/baidu/', '默笙', 1, 'open open4', 1),
(3, '光', '在线光效生成', '0', '/T/gxsc/', '默笙', 3, 'open open1', 2),
(4, '字', '3D字体生成', '0', '/T/3dfont/', '默笙', 1, 'open open2', 0),
(5, '九', '九宫格解锁', '0', '/T/NineSquares/', '默笙', 1, 'open open3', 0),
(6, '滑', '全屏滑稽', '0', '/T/doge/', '默笙', 1, 'open open4', 0),
(7, '摩', '摩斯密码', '0', '/T/fumosi/', '默笙', 2, 'open open5', 0),
(8, '飞', '飞行棋', '0', '/T/fxq/', '默笙', 6, 'open open6', 0),
(9, '鬼', '在线鬼畜', '0', '/T/guichu/', '默笙', 2, 'open open3', 0),
(10, '进', '在线进制转换', '0', '/T/hexconvert/', '默笙', 2, 'open open1', 0),
(11, '图', '在线图片转换', '0', '/T/imgbase64/', '默笙', 2, 'open open4', 0),
(47, '墙', '3D照片墙', '0', '/T/3Dzhapp/', '白帆', 3, 'open open5', 0),
(13, 'J', '在线Json格式化', '0', '/T/json/', '默笙', 2, 'open open6', 0),
(14, '雷', '雷达扫描特效', '0', '/T/leida/', '默笙', 3, 'open open1', 0),
(15, '加', '在线MD5加密', '0', '/T/md5/', '默笙', 2, 'open open3', 0),
(16, '迷', '迷宫', '0', '/T/mg/', '默笙', 1, 'open open2', 0),
(17, '听', '在线听歌', '0', '/T/mkplayer/', '默笙', 2, 'open open5', 0),
(18, '搜', '在线搜索音乐', '0', '/T/music-master/', '默笙', 2, 'open open4', 0),
(19, 'P', '在线PS', '0', '/T/photoshop/', '默笙', 2, 'open open3', 0),
(36, '扑', '炫酷扑克牌', '0', '/T/pokercards/', '白帆', 1, 'open open3', 0),
(21, '色', '色盲测试', '0', '/T/smcs/', '白帆', 6, 'open open2', 0),
(22, '视', '在线视频解析', '0', '/T/stonetv/', '默笙', 2, 'open open4', 0),
(23, '贪', '贪吃蛇', '0', '/T/tcs/', '默笙', 6, 'open open3', 0),
(24, '弹', '弹跳球', '0', '/T/ttq/', '默笙', 1, 'open open1', 0),
(25, '床', '在线图床', '0', '/T/tuchuang/', '默笙', 2, 'open open5', 0),
(26, '文', '在线文本对比', '0', '/T/wbdb/', '默笙', 2, 'open open2', 0),
(27, '悦', '在线音悦台解析', '0', '/T/yinyuetai/', '默笙', 2, 'open open3', 0),
(28, '整', '在线生成整人', '0', '/T/zhengren/', '默笙', 2, 'open open6', 0),
(29, '纸', '胜利纸牌', '0', '/T/zhipai/', '默笙', 1, 'open open1', 0),
(30, '二', '在线生成二维码', '0', '/T/zxewm/', '默笙', 2, 'open open4', 0),
(31, '爆', '爆炸代码', '0', '/T/bzdm/', '默笙', 1, 'open open2', 0),
(32, '姐', '随机抖音快手小姐姐', '0', '/T/sjxjj/', '白帆', 1, 'open open6', 0),
(34, '表', '抖音上很火的网页表白', '0', '/T/bblove/', '白帆', 1, 'open open6', 0),
(35, '扎', '扎心短句', '0', '/T/zxdj/', '白帆', 1, 'open open1', 0),
(45, '千', '千寻导航', '0', '/T/qianxundaohang/', '白帆', 1, 'open open5', 0),
(38, '码', '二维码生成', '0', '/T/code/', '白帆', 2, 'open open3', 0),
(39, '评', '扫出什么就评论什么_图片版', '0', '/T/sdsmplsm/', '白帆', 1, 'open open3', 0),
(40, '扫', '扫出什么就评论什么_文字版', '0', '/T/sdsmplsm1/', '白帆', 1, 'open open4', 0),
(41, '微', '微信聊天截图自定义生成器', '0', '/T/weixinjietu/', '白帆', 4, 'open open5', 0),
(42, '缩', '网站缩略图演示', '0', '/T/suoluetu/', '白帆', 3, 'open open1', 0),
(43, '倒', '8种网页倒计时', '0', '/T/djs/', '白帆', 3, 'open open4', 0),
(44, '代', '网页代码在线查看器', '0', '/T/ckcode/', '白帆', 2, 'open open2', 0),
(46, '尖', '朋友圈尖叫字体', '0', '/T/pyqjianjiao/', '白帆', 4, 'open open5', 0),
(48, '动', '让你的照片动起来', '0', '/T/rndzpdql/', '白帆', 1, 'open open2', 0),
(49, '幻', '视幻', '0', '/T/shhuan/', '白帆', 1, 'open open5', 0),
(50, '黑', '黑白简引导页-一言', '0', '/T/heibaiyindao/', '白帆', 3, 'open open6', 0),
(51, '客', '黑客帝国', '0', '/T/hack-html5/', '白帆', 3, 'open open6', 0),
(52, '举', '举牌照在线制作', '0', '/T/jupai/', '白帆', 2, 'open open2', 0),
(53, '导', '简约漂亮二次元引导页', '0', '/T/piaolyd/', '白帆', 3, 'open open2', 0),
(54, '表', '3D炫酷元素周期表', '0', '/T/3Dyszqb/', '白帆', 1, 'open open1', 0),
(55, '群', 'QQ群装逼昵称在线生成', '0', '/T/QQqunming/', '白帆', 2, 'open open6', 0),
(56, '链', '超级外链工具', '0', '/T/super-seo/', '白帆', 2, 'open open6', 0),
(57, '酷', '酷炫黑客导航', '0', '/T/heikedaoh/', '白帆', 3, 'open open2', 0),
(58, '斗', '斗地主', '0', '/T/ddz0/', '白帆', 6, 'open open3', 0),
(59, '壁', '电脑壁纸', '0', '/T/wallpaper/', '白帆', 2, 'open open2', 0),
(60, '缘', '姓名缘分测试', '0', 'http://yf.baifan97.cn/', '白帆', 1, 'open open3', 0),
(61, '影', '影视搜索', '0', 'http://ys.baifan97.cn/', '白帆', 2, 'open open4', 0),
(62, '导', '极客导航', '0', 'http://baifan97.cn/', '白帆', 2, 'open open4', 0),
(63, '聊', '小蝌蚪聊天室', '0', '/T/kedou/', '白帆', 1, 'open open4', 0),
(64, '生', '生命计算器', '0', '/T/life-counter/', '白帆', 2, 'open open1', 0),
(65, '维', '在线二维码生成器', '0', '/T/ewm/', '白帆', 2, 'open open5', 0),
(66, '密', '随机密码生成', '0', '/T/password/', '白帆', 2, 'open open5', 0),
(67, '头', '在线查看任意QQ头像', '0', '/T/QQtx/', '白帆', 2, 'open open4', 0),
(68, '蚁', '爬动的蚂蚁', '0', '/T/mayi/', '白帆', 3, 'open open2', 0),
(69, '大', '键盘输入放大显示特效', '0', '/T/jpfd/', '白帆', 3, 'open open2', 0),
(70, '抖', '抖音去水印解析', '0', '/T/douyinjiexi/', '白帆', 2, 'open open3', 0),
(71, '磁', '在线磁力链接边下边播', '0', '/T/zxclbxbb/', '白帆', 2, 'open open3', 0),
(72, '诞', '给自己头像加个圣诞帽', '0', '/T/sdkl/', '白帆', 2, 'open open3', 0),
(73, '强', 'QQ强制聊天', '0', '/T/qzlt/', '白帆', 2, 'open open3', 0),
(74, '彩', '彩字生成器', '0', '/T/caisezi/', '白帆', 2, 'open open1', 0),
(75, '图', 'ico图标在线制作', '0', '/T/icozhuan/', '白帆', 2, 'open open3', 0),
(76, '签', '鸟语花香街头签名制作', '0', '/T/nyhxqm/', '白帆', 2, 'open open3', 0),
(77, '雇', '叙利亚雇佣兵合同生成', '0', '/T/gybsc/', '白帆', 2, 'open open1', 0),
(78, '刷', '微信在线刷步数', '0', '/T/wxzaixsbs/', '白帆', 4, 'open open1', 0),
(80, '球', 'cxk在线打篮球', '0', '/T/cxk-ball-master/', '白帆', 1, 'open open6', 0),
(82, '斜', '3D页面倾斜侧边菜单', '0', '/T/3Dside/', '白帆', 3, 'open open2', 0),
(83, '简', '一个会动的简历', '0', '/T/animating-resume/', '白帆', 1, 'open open2', 0),
(84, '按', '按来按去的小游戏', '0', '/T/click-game/', '白帆', 1, 'open open2', 0),
(85, '随', '点击随机话语', '0', '/T/click-word/', '白帆', 1, 'open open5', 0),
(87, '言', '一言美化版', '0', '/T/hitokoto-color/', '白帆', 1, 'open open6', 0),
(88, '键', '键盘导航', '0', '/T/keyboard/', '白帆', 1, 'open open6', 0),
(89, '隐', '文字隐写术', '0', '/T/pixels/', '白帆', 1, 'open open5', 0),
(90, '轰', '邮件轰炸机', '0', '/T/spam-mail/', '白帆', 1, 'open open2', 0),
(91, '美', '惊人的美丽', '0', '/T/staggering-beauty/', '白帆', 1, 'open open5', 0),
(92, '解', 'vip视频解析', '0', '/T/vip/', '白帆', 1, 'open open1', 0),
(93, '站', '站长工具', '0', '/T/zzym130/', '白帆', 2, 'open open1', 0),
(94, '稽', 'win10滑稽', '0', '/T/win10doge/', '白帆', 1, 'open open6', 0),
(95, '端', '端口开放情况扫描', '0', '/T/dksm/', '白帆', 2, 'open open2', 0),
(96, '动', '3D动态粒子文字动画', '0', '/T/lz3Ddt/', '白帆', 1, 'open open5', 0),
(97, '圈', '一键秒拉圈圈', '0', '/T/qqzs/', '白帆', 1, 'open open1', 0),
(98, '翻', '感知方向图片翻转动画特效', '0', '/T/fxgztp/', '白帆', 3, 'open open4', 0),
(99, '炫', '带音效的炫酷虚拟键盘', '0', '/T/xkxnjp/', '白帆', 3, 'open open2', 0),
(100, '速', '网站路线速度检测', '0', '/T/zdwzsdjc/', '白帆', 2, 'open open5', 0),
(101, '玩', '好玩的Tap', '0', '/T/tap1/', '白帆', 1, 'open open5', 0),
(105, '插', '见缝插针', '0', '/T/jfcz/', '白帆', 6, 'open open1', 0),
(104, '吃', '火爆朋友圈的中午吃什么', '0', '/T/chism/', '白帆', 1, 'open open6', 0),
(106, '闪', '文字闪光滑过动画', '0', '/T/wzsghgtx/', '白帆', 3, 'open open1', 0),
(107, '蓝', '蓝色炫酷碎粒子导航', '0', '/T/lszkdh/', '白帆', 3, 'open open3', 0),
(108, '表', '表白墙', '0', '/T/bbq123/', '白帆', 1, 'open open3', 0),
(109, '网', '在线个人网页制作', '0', 'http://make.baifan97.cn/', '白帆', 2, 'open open5', 0),
(110, '圆', '浮动的圆形导航菜单', '0', '/T/fdyxdh/', '白帆', 3, 'open open1', 0),
(111, '航', '15种二级下拉导航加载动画', '0', '/T/xialadaoh/', '白帆', 3, 'open open2', 0),
(112, '影', '影视搜索', '0', 'https://tool.baifan97.cn/T/ysjx', '白帆', 2, 'open open6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_tools_admin`
--
ALTER TABLE `ms_tools_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_tools_class`
--
ALTER TABLE `ms_tools_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_tools_links`
--
ALTER TABLE `ms_tools_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_tools_menu`
--
ALTER TABLE `ms_tools_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_tools_system`
--
ALTER TABLE `ms_tools_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_tools_temp`
--
ALTER TABLE `ms_tools_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_tools_tool`
--
ALTER TABLE `ms_tools_tool`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_tools_admin`
--
ALTER TABLE `ms_tools_admin`
  MODIFY `id` int(255) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ms_tools_class`
--
ALTER TABLE `ms_tools_class`
  MODIFY `id` int(200) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ms_tools_links`
--
ALTER TABLE `ms_tools_links`
  MODIFY `id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_tools_menu`
--
ALTER TABLE `ms_tools_menu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_tools_system`
--
ALTER TABLE `ms_tools_system`
  MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ms_tools_temp`
--
ALTER TABLE `ms_tools_temp`
  MODIFY `id` int(255) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ms_tools_tool`
--
ALTER TABLE `ms_tools_tool`
  MODIFY `id` int(255) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
