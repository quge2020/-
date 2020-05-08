<?php
namespace Admin\Controller;
use Think\Controller;
class UpdateController extends Controller {
    //判断是否登录
	public function _initialize(){
	    if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
	}
	public function index(){
		$this->selectInfo();
		$this->display();
	}
	public function checkup(){
		$bb=M('system')->where("id=1")->find();
		$url="https://api.tecms.net/checktoolsup?bb=".$bb['bb'];
		$updata=getCheck($url);
		$data=json_decode($updata,true);
		// var_dump($data);
		// var_dump($data['code']);
		if ($data['code']=='success') {
			$this->ajaxReturn(array(
				'status'	=> 1,
				'info'		=>'检查成功',
				'msg'		=>$data['msg'],
				'log'		=>$data['log'],
				'time'		=>$data['uptime'],
				'downurl'	=>$data['downurl'],
				'bb'		=>$data['bb']
			));
		}elseif ($data['code']=='error') {
			$this->ajaxReturn(array(
				'status'	=> 0,
				'info'		=>'检查成功',
				'msg'		=>'当前版本已为最新版本',
			));
		}
	}
	public function updown(){
		$downurl = $_POST['url'];//下载链接
		
		$arr = parse_url($downurl);
		$fname = $arr['path'];
    	$arr1=explode("/",$fname);
    	$save_dir = "Updata";//下载目录
		$filename = $arr1[2];//文件名称
    	$res=$this->getFile($downurl, $save_dir, $filename, 1);
    	if (!empty($res)) {
			$zip = new \ZipArchive; 
    		$re = $zip->open($res['save_path']); //打开下载好的文件
    		$arr3=explode(".",$arr1[2]);
    		$state = rename($arr3[0],'Temp');
    		$result= $zip->extractTo('./'); //解压到文件
	     	$zip->close();
	     	if ($state==TRUE) {
	     		$this->delDirAndFile('./Temp');
	     		$this->delDirAndFile('./Updata');
	     		$data['bb']=$_POST['bb'];
	     		$re=M('system')->where("id=1")->save($data);
	     		$this->ajaxReturn(array(
					'status'	=> 1,
					'info'		=>'更新成功',
				));
	     	}else{
	     		$this->ajaxReturn(array(
					'status'	=> 0,
					'info'		=>'更新失败',
				));
	     	}

    	}
	}
	function selectInfo(){
        $re=M('admin')->where("id=1")->find();
        $this->assign("re",$re);
    }
    
    function getFile($url, $save_dir = '', $filename = '', $type = 0) {
	    if (trim($url) == '') {
	        return false;
	    }
	    if (trim($save_dir) == '') {
	        $save_dir = './';
	    }
	    if (0 !== strrpos($save_dir, '/')) {
	        $save_dir.= '/';
	    }
	    //创建保存目录
	    if (!file_exists($save_dir) && !mkdir($save_dir, 0777, true)) {
	        return false;
	    }
	    //获取远程文件所采用的方法
	    if ($type) {
	        $ch = curl_init();
	        $timeout = 5;
	        curl_setopt($ch, CURLOPT_URL, $url);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
	        $content = curl_exec($ch);
	        curl_close($ch);
	    } else {
	        ob_start();
	        readfile($url);
	        $content = ob_get_contents();
	        ob_end_clean();
	    }
	    $size = strlen($content);
	    //文件大小
	    $fp2 = @fopen($save_dir . $filename, 'a');
	    fwrite($fp2, $content);
	    fclose($fp2);
	    unset($content, $url);
	    ob_clean();
		flush();
	    return array(
	        'file_name' => $filename,
	        'save_path' => $save_dir . $filename
	    );
	}
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
}