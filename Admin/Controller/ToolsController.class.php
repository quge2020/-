<?php
namespace Admin\Controller;
use Think\Controller;
class ToolsController extends Controller {
    //判断是否登录
	public function _initialize(){
	    if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
	}
	//首页
	public function index(){
		$this->selectInfo();
		$list=M('tool')->select();
		$this->assign('list',$list);
		$this->display();
	}
	//打开首页文件
	public function tooleditindex(){
		$this->selectInfo();
		$uid=(int)trim(remove_xss($_GET['id']));
		$ml=trim(remove_xss($_GET['ml']));
		$tml=".".$ml;
		$files=scandir($tml);
		//先查目录下有没有index.html文件
		$isin = array_search("index.html",$files);
		if ($isin===false) {
			//再查有没有index.php文件
			$isin_php = array_search("index.php",$files);
			if ($isin_php===false) {
				$code="暂时没有发现首页文件，请您手动去目录下修改";
			}else{
				//在这里打开目录下index.php的文件
				$index_php = $tml."index.php";
				$myfile = fopen($index_php, "r") or die("Unable to open file!");
				$code=fread($myfile,filesize($index_php));
				$code=htmlentities($code);
				$filepath=$index_php;
			}
		}else{
			//在这里打开目录下为index.html的文件
			$index_html = $tml."index.html";
			//echo "$index_html";
			$myfile = fopen($index_html, "r") or die("Unable to open file!");
			$code=fread($myfile,filesize($index_html));
			$code=htmlentities($code);
			$filepath=$index_html;
		}
		$this->assign('filepath',$filepath);
		$this->assign('code',$code);
		$this->display();
	}
	//执行修改首页文件
	public function upindexdata(){
		if (!IS_AJAX) {
			$this->error("提交方式错误");
		}else{
			$filepath = trim(remove_xss($_POST['filepath']));
			//$filename = '/path/to/foo.txt'; 
			if (file_exists($filepath)) { 
				$myfile = fopen($filepath, "w") or die("Unable to open file!"); 
				$data=$_POST['data'];
				$re=fwrite($myfile, $data); 
				if (!empty($re)) {
					$this->success("文件保存成功",U('tools/index'));
				}else{
					$this->error("文件写入，请检查权限！",U('tools/index'));
				}
			} else { 
				$this->error("文件丢失，请检查！");
			} 
		}
	}
	//添加工具页面
	public function add(){
		$this->selectInfo();
		$class=M('class')->select();
		$this->assign('class',$class);
		$this->display();
	}
	//执行添加工具
	public function addtools(){
		
		if ($_FILES["file"]["size"]===0) {
			$re=M('admin')->where("id=1")->find();
			$data['title'] = trim(remove_xss($_POST['name']));
			$data['logo'] = trim(remove_xss($_POST['logo']));
			$data['cid'] = (int)$_POST['classid'];
			$data['url'] = trim(remove_xss($_POST['link']));
			$data['author'] = $re['name'];
			$data['color'] = "open open".rand(1,6);
			$add=M('tool')->add($data);
			if (!empty($add)) {
				$this->success('新增站外链接成功！');
			}else{
				$this->success('新增站外链接失败！');
			}
			//echo "1111";die;
		}
		$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     41943040 ;// 设置附件上传大小
	    $upload->exts      =     array('zip');// 设置附件上传类型
	    $upload->rootPath  =     './T/'; // 设置附件上传根目录
	    $upload->autoSub   =     false;
	    $upload->saveName  =     false;
	    // 上传文件
	    $info   =   $upload->upload();
	    $fn = $info['file']['savename'];
		if(!$info) {
	    	// 上传错误提示错误信息
	    	$this->error($upload->getError());
	    }else{
	    	// 上传成功
	    	$filesavepath = "./T/".$fn;
	    	$zip = new \ZipArchive; 
 			$re = $zip->open($filesavepath); //打开下载好的文件
 			if ($re === TRUE) {
 				$arr=explode(".",$fn);
 				$savepath="./T/".$arr[0];
	    		$zip->extractTo($savepath); //解压到文件
	     		$zip->close();
	     		unlink($filesavepath);
	     		$re=M('admin')->where("id=1")->find();
				$data['title'] = trim(remove_xss($_POST['name']));
				$data['logo'] = trim(remove_xss($_POST['logo']));
				$data['cid'] = (int)$_POST['classid'];
				$data['url'] = "/T/".$arr[0]."/";
				$data['author'] = $re['name'];
				$data['color'] = "open open".rand(1,6);
				$add=M('tool')->add($data);
				if (!empty($add)) {
					$this->success('上传成功！');
				}else{
					$this->success('安装失败！');
				}
	     	}else{
 				$this->error("打开ZIP包失败，请重试");
 			}
	        //$this->success('上传成功！');
	    }
	}
	//编辑工具信息
	public function tooledit(){
		if(!IS_AJAX){
			$this->selectInfo();
			$uid=(int)$_GET['uid'];
			$info=M('tool')->where("id=$uid")->find();
			
			$classid=(int)$info['cid'];
			$cn=M('class')->where("id=$classid")->find();
			$class=M('class')->select();
			$this->assign('cn',$cn);
			$this->assign('class',$class);
			$this->assign('info',$info);
			$this->display();
		}else{
			//var_dump($_POST);
			$id=(int)remove_xss(trim($_POST['id']));
			$data['logo']=remove_xss(trim($_POST['logo']));
			$data['title']=remove_xss(trim($_POST['name']));
			$data['url']=remove_xss(trim($_POST['path']));
			$data['author']=remove_xss(trim($_POST['author']));
			$data['cid']=(int)remove_xss(trim($_POST['classid']));
			$re=M('tool')->where("id=$id")->save($data);
			if (!empty($re)) {
				$this->success("修改成功");
			}else{
				$this->error("修改失败");
			}
		}
	}
	//删除工具
	public function toolsdel(){
		//var_dump($_POST);
		if (!IS_AJAX) {
			$this->error("非法请求");
		}else{
			$id=(int)trim($_POST['id']);
			$url=".".remove_xss(trim($_POST['url']));
			//先删除数据库里的数据
			$deldata=M('tool')->where("id=$id")->delete();
			//删除应用目录
			$this->delDirAndFile($url);
			if (empty($delete)) {
				$this->success("删除成功！");
			}else{
				$this->error("删除失败！");
			}
		}
	}
	//删除函数
	function delDirAndFile( $dirName ){
      if($handle=opendir($dirName)){
          while(false!==($item=readdir($handle))){
              if($item!="."&&$item!=".."){
                  if(is_dir("$dirName/$item")){
                      $this->delDirAndFile("$dirName/$item");
                  }else{
                      unlink("$dirName/$item");
                  }
              }
          }
          closedir($handle);
          rmdir($dirName);
      }
  	}
	//分类首页
	public function classe(){
		$this->selectInfo();
		$list=M('class')->order("id DESC")->select();
		$this->assign('list',$list);
		$this->display();
	}
	//分类修改
	public function classedit(){
		if (!IS_AJAX) {
			$this->selectInfo();
			$cid=(int)remove_xss(trim($_GET['cid']));
			$val=M('class')->where("id=$cid")->find();
			$this->assign('val',$val);
			$this->display();
		}else{
			$cid=(int)remove_xss(trim($_POST['cid']));
			$data['classname']=remove_xss(trim($_POST['name']));
			$data['classid']=remove_xss(trim($_POST['classid']));
			$re=M('class')->where("id=$cid")->save($data);
			if (!empty($re)) {
				$this->success("修改成功",U('tools/classe'));
			}else{
				$this->error("修改失败");
			}
		}
	}
	//分类删除
	public function classedel(){
		if (!IS_AJAX) {
			$this->success("非法请求");
		}else{
			$id=(int)remove_xss(trim($_POST['id']));
			//先删除分类
			$cdel=M('class')->where("id=$id")->delete();
			//再删除工具
			$tooldel=M('tool')->where("cid=$id")->delete();
			if (!empty($cdel)) {
				$this->success("删除成功");
			}else{
				$this->success("删除失败");
			}
		}
	}
	//新增分类
	public function classadd(){
		if (!IS_AJAX) {
			$this->display();
		}else{
			$data['classname']=remove_xss(trim($_POST['name']));
			$data['classid']=remove_xss(trim($_POST['classid']));
			$re=M('class')->add($data);
			if (!empty($re)) {
				$this->success("新增成功",U('tools/classe'));
			}else{
				$this->error("新增失败");
			}
		}
	}
	//友链管理
	public function link(){
		$this->selectInfo();
		$list=M('links')->order("id")->select();
		$this->assign('list',$list);
		$this->display();
	}
	//新增友链
	public function linkadd(){
		if (!IS_AJAX) {
			$this->selectInfo();
			$this->display();
		}else{
			//var_dump($_POST);
			$data['title']=remove_xss(trim($_POST['name']));
			$data['link']=remove_xss(trim($_POST['link']));
			$data['descc']=remove_xss(trim($_POST['desc']));
			$re=M('links')->add($data);
			if (!empty($re)) {
				$this->success("新增成功",U('tools/link'));
			}else{
				$this->error("新增失败");
			}
		}
	}
	//友链删除
	public function linkdel(){
		if (!IS_AJAX) {
			$this->success("非法请求");
		}else{
			//var_dump($_POST);
			$id=(int)remove_xss(trim($_POST['id']));
			$re=M('links')->where("id=$id")->delete();
			if (!empty($re)) {
				$this->success("删除成功",U('tools/link'));
			}else{
				$this->error("删除失败");
			}
		}
	}
	//友链编辑
	public function linkedit(){
		if (!IS_AJAX) {
			$this->selectInfo();
			$id=(int)$_GET['id'];
			$info=M('links')->where("id=$id")->find();
			$this->assign('info',$info);
			$this->display();
		}else{
			//var_dump($_POST);
			$id=(int)remove_xss(trim($_POST['id']));
			$data['title']=remove_xss(trim($_POST['name']));
			$data['link']=remove_xss(trim($_POST['link']));
			$data['descc']=remove_xss(trim($_POST['desc']));
			$re=M('links')->where("id=$id")->save($data);
			if (!empty($re)) {
				$this->success("修改成功",U('tools/link'));
			}else{
				$this->error("修改失败");
			}
		}
	}
	//导航
	public function menu(){
		$this->selectInfo();
		$list=M('menu')->order("id")->select();
		$this->assign('list',$list);
		$this->display();
	}
	//新增导航
	public function menuadd(){
		if (!IS_AJAX) {
			$this->selectInfo();
			$this->display();
		}else{
			//var_dump($_POST);
			$data['menu']=remove_xss(trim($_POST['name']));
			$data['link']=remove_xss(trim($_POST['link']));
			$data['descc']=remove_xss(trim($_POST['desc']));
			$re=M('menu')->add($data);
			if (!empty($re)) {
				$this->success("新增成功",U('tools/menu'));
			}else{
				$this->error("新增失败");
			}
		}
	}
	//导航删除
	public function menudel(){
		if (!IS_AJAX) {
			$this->success("非法请求");
		}else{
			//var_dump($_POST);
			$id=(int)remove_xss(trim($_POST['id']));
			$re=M('menu')->where("id=$id")->delete();
			if (!empty($re)) {
				$this->success("删除成功",U('tools/link'));
			}else{
				$this->error("删除失败");
			}
		}
	}
	//导航编辑
	public function menuedit(){
		if (!IS_AJAX) {
			$this->selectInfo();
			$id=(int)$_GET['id'];
			$info=M('menu')->where("id=$id")->find();
			$this->assign('info',$info);
			$this->display();
		}else{
			//var_dump($_POST);
			$id=(int)remove_xss(trim($_POST['id']));
			$data['menu']=remove_xss(trim($_POST['name']));
			$data['link']=remove_xss(trim($_POST['link']));
			$data['descc']=remove_xss(trim($_POST['desc']));
			$re=M('menu')->where("id=$id")->save($data);
			if (!empty($re)) {
				$this->success("修改成功",U('tools/menu'));
			}else{
				$this->error("修改失败");
			}
		}
	}
	function selectInfo(){
        $re=M('admin')->where("id=1")->find();
        $this->assign("re",$re);
    }
}