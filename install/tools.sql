/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : tools

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2019-04-01 18:40:27
*/

SET FOREIGN_KEY_CHECKS=0;
--
-- Table structure for table `ms_tools_admin`
--

DROP TABLE IF EXISTS `ms_tools_admin`;
CREATE TABLE `ms_tools_admin` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;


--
-- Dumping data for table `ms_tools_admin`
--

INSERT INTO `ms_tools_admin` VALUES (1,'zye.cc','b8d9ab78f76573b3d753547c9ce28b12','zye.cc','10000');

--
-- Table structure for table `ms_tools_class`
--

DROP TABLE IF EXISTS `ms_tools_class`;

CREATE TABLE `ms_tools_class` (
  `id` int(200) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(200) DEFAULT NULL,
  `classid` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;


--
-- Records of ms_tools_class
--

INSERT INTO `ms_tools_class` VALUES ('1', '有趣网站', 'fun');
INSERT INTO `ms_tools_class` VALUES ('2', '实用工具', 'tools');
INSERT INTO `ms_tools_class` VALUES ('3', '网页特效', 'web');
INSERT INTO `ms_tools_class` VALUES ('4', '微信应用', 'wx');
INSERT INTO `ms_tools_class` VALUES ('5', 'API应用', 'api');
INSERT INTO `ms_tools_class` VALUES ('6', '网页游戏', 'game');

--
-- Table structure for `ms_tools_links`
--

DROP TABLE IF EXISTS `ms_tools_links`;

CREATE TABLE `ms_tools_links` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;


--
-- Dumping data for table `ms_tools_links`
--


--
-- Table structure for table `ms_tools_menu`
--

DROP TABLE IF EXISTS `ms_tools_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ms_tools_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_tools_menu`
--


--
-- Table structure for table `ms_tools_system`
--

DROP TABLE IF EXISTS `ms_tools_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ms_tools_system` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
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
  `template` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_tools_system`
--

LOCK TABLES `ms_tools_system` WRITE;
/*!40000 ALTER TABLE `ms_tools_system` DISABLE KEYS */;
INSERT INTO `ms_tools_system` VALUES (1,'WhiteFan工具','WhiteFan在线工具箱','WhiteFan工具箱在线工具WhiteFan工作室WhiteFan资源库','在线工具箱|实用工具-有趣工具-微信工具-资源e站-www.zye.cc-分享有趣','白','帆','的','工','具','箱','本站收录各种网站程序，欢迎 留言','3494490','3494490','不知道','Copyright   2019-2020 <a href=\"\" title=\"备案\" target=\"_blank\"> 冀ICP备xxxxx号 </a>','2.0.1','index/index');
/*!40000 ALTER TABLE `ms_tools_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_tools_temp`
--

DROP TABLE IF EXISTS `ms_tools_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ms_tools_temp` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_tools_temp`
--

LOCK TABLES `ms_tools_temp` WRITE;
/*!40000 ALTER TABLE `ms_tools_temp` DISABLE KEYS */;
INSERT INTO `ms_tools_temp` VALUES (1,'官方模版','index/index','/Public/images/temp2.jpg'),(2,'杨小杰工具箱模版','boot/index','/Public/images/temp1.jpg');
/*!40000 ALTER TABLE `ms_tools_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_tools_tool`
--

DROP TABLE IF EXISTS `ms_tools_tool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ms_tools_tool` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `cid` int(255) DEFAULT NULL,
  `color` varchar(120) DEFAULT NULL,
  `zan` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_tools_tool`
--

LOCK TABLES `ms_tools_tool` WRITE;
/*!40000 ALTER TABLE `ms_tools_tool` DISABLE KEYS */;
INSERT INTO `ms_tools_tool` VALUES (1,'球','玩个球吧','0','/T/qiu/','WhiteFan',1,'open open5',1),(2,'百','让我帮你百度','0','/T/baidu/','WhiteFan',1,'open open4',1),(3,'光','在线光效生成','0','/T/gxsc/','WhiteFan',3,'open open1',2),(4,'字','3D字体生成','0','/T/3dfont/','WhiteFan',1,'open open2',0),(5,'九','九宫格解锁','0','/T/NineSquares/','WhiteFan',1,'open open3',0),(6,'滑','全屏滑稽','0','/T/doge/','WhiteFan',1,'open open4',0),(7,'摩','摩斯密码','0','/T/fumosi/','WhiteFan',2,'open open5',0),(8,'飞','飞行棋','0','/T/fxq/','WhiteFan',6,'open open6',0),(9,'鬼','在线鬼畜','0','/T/guichu/','WhiteFan',2,'open open3',0),(10,'进','在线进制转换','0','/T/hexconvert/','WhiteFan',2,'open open1',0),(11,'图','在线图片转换','0','/T/imgbase64/','WhiteFan',2,'open open4',0),(47,'墙','3D照片墙','0','/T/3Dzhapp/','WhiteFan',3,'open open5',0),(13,'J','在线Json格式化','0','/T/json/','WhiteFan',2,'open open6',0),(14,'雷','雷达扫描特效','0','/T/leida/','WhiteFan',3,'open open1',0),(15,'加','在线MD5加密','0','/T/md5/','WhiteFan',2,'open open3',0),(16,'迷','迷宫','0','/T/mg/','WhiteFan',1,'open open2',0),(17,'听','在线听歌','0','/T/mkplayer/','WhiteFan',2,'open open5',0),(18,'搜','在线搜索音乐','0','/T/music-master/','WhiteFan',2,'open open4',0),(19,'P','在线PS','0','/T/photoshop/','WhiteFan',2,'open open3',0),(36,'扑','炫酷扑克牌','0','/T/pokercards/','WhiteFan',1,'open open3',0),(21,'色','色盲测试','0','/T/smcs/','WhiteFan',6,'open open2',0),(22,'视','在线视频解析','0','/T/stonetv/','WhiteFan',2,'open open4',0),(23,'贪','贪吃蛇','0','/T/tcs/','WhiteFan',6,'open open3',0),(24,'弹','弹跳球','0','/T/ttq/','WhiteFan',1,'open open1',0),(25,'床','在线图床','0','/T/tuchuang/','WhiteFan',2,'open open5',0),(26,'文','在线文本对比','0','/T/wbdb/','WhiteFan',2,'open open2',0),(27,'悦','在线音悦台解析','0','/T/yinyuetai/','WhiteFan',2,'open open3',0),(28,'整','在线生成整人','0','/T/zhengren/','WhiteFan',2,'open open6',0),(29,'纸','胜利纸牌','0','/T/zhipai/','WhiteFan',1,'open open1',0),(30,'二','在线生成二维码','0','/T/zxewm/','WhiteFan',2,'open open4',0),(31,'爆','爆炸代码','0','/T/bzdm/','WhiteFan',1,'open open2',0),(32,'姐','随机抖音快手小姐姐','0','/T/sjxjj/','WhiteFan',1,'open open6',0),(34,'表','抖音上很火的网页表白','0','/T/bblove/','WhiteFan',1,'open open6',0),(35,'扎','扎心短句','0','/T/zxdj/','WhiteFan',1,'open open1',0),(45,'千','千寻导航','0','/T/qianxundaohang/','WhiteFan',1,'open open5',0),(38,'码','二维码生成','0','/T/code/','WhiteFan',2,'open open3',0),(39,'评','扫出什么就评论什么_图片版','0','/T/sdsmplsm/','WhiteFan',1,'open open3',0),(40,'扫','扫出什么就评论什么_文字版','0','/T/sdsmplsm1/','WhiteFan',1,'open open4',0),(41,'微','微信聊天截图自定义生成器','0','/T/weixinjietu/','WhiteFan',4,'open open5',0),(42,'缩','网站缩略图演示','0','/T/suoluetu/','WhiteFan',3,'open open1',0),(43,'倒','8种网页倒计时','0','/T/djs/','WhiteFan',3,'open open4',0),(44,'代','网页代码在线查看器','0','/T/ckcode/','WhiteFan',2,'open open2',0),(46,'尖','朋友圈尖叫字体','0','/T/pyqjianjiao/','WhiteFan',4,'open open5',0),(48,'动','让你的照片动起来','0','/T/rndzpdql/','WhiteFan',1,'open open2',0),(49,'幻','视幻','0','/T/shhuan/','WhiteFan',1,'open open5',0),(50,'黑','黑白简引导页-一言','0','/T/heibaiyindao/','WhiteFan',3,'open open6',0),(51,'客','黑客帝国','0','/T/hack-html5/','WhiteFan',3,'open open6',0),(52,'举','举牌照在线制作','0','/T/jupai/','WhiteFan',2,'open open2',0),(53,'导','简约漂亮二次元引导页','0','/T/piaolyd/','WhiteFan',3,'open open2',0),(54,'表','3D炫酷元素周期表','0','/T/3Dyszqb/','WhiteFan',1,'open open1',0),(55,'群','QQ群装逼昵称在线生成','0','/T/QQqunming/','WhiteFan',2,'open open6',0),(56,'链','超级外链工具','0','/T/super-seo/','WhiteFan',2,'open open6',0),(57,'酷','酷炫黑客导航','0','/T/heikedaoh/','WhiteFan',3,'open open2',0),(58,'斗','斗地主','0','/T/ddz0/','WhiteFan',6,'open open3',0),(59,'壁','电脑壁纸','0','/T/wallpaper/','WhiteFan',2,'open open2',0),(60,'缘','姓名缘分测试','0','http://yf.baifan97.cn/','WhiteFan',1,'open open3',0),(61,'影','影视搜索','0','http://ys.baifan97.cn/','WhiteFan',2,'open open4',0),(62,'导','资源e站','0','http://zye.cc/','WhiteFan',2,'open open4',0),(63,'聊','小蝌蚪聊天室','0','/T/kedou/','WhiteFan',1,'open open4',0),(64,'生','生命计算器','0','/T/life-counter/','WhiteFan',2,'open open1',0),(65,'维','在线二维码生成器','0','/T/ewm/','WhiteFan',2,'open open5',0),(66,'密','随机密码生成','0','/T/password/','WhiteFan',2,'open open5',0),(67,'头','在线查看任意QQ头像','0','/T/QQtx/','WhiteFan',2,'open open4',0),(68,'蚁','爬动的蚂蚁','0','/T/mayi/','WhiteFan',3,'open open2',0),(69,'大','键盘输入放大显示特效','0','/T/jpfd/','WhiteFan',3,'open open2',0),(70,'抖','抖音去水印解析','0','/T/douyinjiexi/','WhiteFan',2,'open open3',0),(71,'磁','在线磁力链接边下边播','0','/T/zxclbxbb/','WhiteFan',2,'open open3',0),(72,'诞','给自己头像加个圣诞帽','0','/T/sdkl/','WhiteFan',2,'open open3',0),(73,'强','QQ强制聊天','0','/T/qzlt/','WhiteFan',2,'open open3',0),(74,'彩','彩字生成器','0','/T/caisezi/','WhiteFan',2,'open open1',0),(75,'图','ico图标在线制作','0','/T/icozhuan/','WhiteFan',2,'open open3',0),(76,'签','鸟语花香街头签名制作','0','/T/nyhxqm/','WhiteFan',2,'open open3',0),(77,'雇','叙利亚雇佣兵合同生成','0','/T/gybsc/','WhiteFan',2,'open open1',0),(78,'刷','微信在线刷步数','0','/T/wxzaixsbs/','WhiteFan',4,'open open1',0),(80,'球','cxk在线打篮球','0','/T/cxk-ball-master/','WhiteFan',1,'open open6',0),(82,'斜','3D页面倾斜侧边菜单','0','/T/3Dside/','WhiteFan',3,'open open2',0),(83,'简','一个会动的简历','0','/T/animating-resume/','WhiteFan',1,'open open2',0),(84,'按','按来按去的小游戏','0','/T/click-game/','WhiteFan',1,'open open2',0),(85,'随','点击随机话语','0','/T/click-word/','WhiteFan',1,'open open5',0),(87,'言','一言美化版','0','/T/hitokoto-color/','WhiteFan',1,'open open6',0),(88,'键','键盘导航','0','/T/keyboard/','WhiteFan',1,'open open6',0),(89,'隐','文字隐写术','0','/T/pixels/','WhiteFan',1,'open open5',0),(90,'轰','邮件轰炸机','0','/T/spam-mail/','WhiteFan',1,'open open2',0),(91,'美','惊人的美丽','0','/T/staggering-beauty/','WhiteFan',1,'open open5',0),(92,'解','vip视频解析','0','/T/vip/','WhiteFan',1,'open open1',0),(93,'站','站长工具','0','/T/zzym130/','WhiteFan',2,'open open1',0),(94,'稽','win10滑稽','0','/T/win10doge/','WhiteFan',1,'open open6',0),(95,'端','端口开放情况扫描','0','/T/dksm/','WhiteFan',2,'open open2',0),(96,'动','3D动态粒子文字动画','0','/T/lz3Ddt/','WhiteFan',1,'open open5',0),(97,'圈','一键秒拉圈圈','0','/T/qqzs/','WhiteFan',1,'open open1',0),(98,'翻','感知方向图片翻转动画特效','0','/T/fxgztp/','WhiteFan',3,'open open4',0),(99,'炫','带音效的炫酷虚拟键盘','0','/T/xkxnjp/','WhiteFan',3,'open open2',0),(100,'速','网站路线速度检测','0','/T/zdwzsdjc/','WhiteFan',2,'open open5',0),(101,'玩','好玩的Tap','0','/T/tap1/','WhiteFan',1,'open open5',0),(105,'插','见缝插针','0','/T/jfcz/','WhiteFan',6,'open open1',0),(104,'吃','火爆朋友圈的中午吃什么','0','/T/chism/','WhiteFan',1,'open open6',0),(106,'闪','文字闪光滑过动画','0','/T/wzsghgtx/','WhiteFan',3,'open open1',0),(107,'蓝','蓝色炫酷碎粒子导航','0','/T/lszkdh/','WhiteFan',3,'open open3',0),(108,'表','表白墙','0','/T/bbq123/','WhiteFan',1,'open open3',0),(109,'网','在线个人网页制作','0','http://make.baifan97.cn/','WhiteFan',2,'open open5',0),(110,'圆','浮动的圆形导航菜单','0','/T/fdyxdh/','WhiteFan',3,'open open1',0),(111,'航','15种二级下拉导航加载动画','0','/T/xialadaoh/','WhiteFan',3,'open open2',0),(112,'影','影视搜索','0','/T/ysjx','WhiteFan',2,'open open6',0),(113,'泡','QQ超长气泡','0','/T/在线生成QQ超长气泡源码/','WhiteFan',1,'open open2',0),(114,'病','全国新型冠状病毒实时分布图','0','/T/yiqing/','WhiteFan',2,'open open3',0);
