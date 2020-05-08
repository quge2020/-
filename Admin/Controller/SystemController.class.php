<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller {
    //判断是否登录
	public function _initialize(){
	    if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
	}
	//首页
	public function index(){
		$this->selectInfo();
		$info=M('system')->where("id=1")->find();
		$this->assign('info',$info);
		$this->display();
	}
	public function upsys(){
		if (!IS_AJAX) {
			$this->error("提交方式错误");
		}else{
			$data['logo']=trim(remove_xss($_POST['logo']));
			$data['title']=trim(remove_xss($_POST['title']));
			$data['keyword']=trim(remove_xss($_POST['ky']));
			$data['descc']=trim(remove_xss($_POST['de']));
			$tt = explode(',',trim($_POST['t1']));
			$data['t1']=$tt['0'];
			$data['t2']=$tt['1'];
			$data['t3']=$tt['2'];
			$data['t4']=$tt['3'];
			$data['t5']=$tt['4'];
			$data['t6']=$tt['5'];
			$data['ftitle']=trim(remove_xss($_POST['ftitle']));
			$data['footer']=trim($_POST['bq']);
			$re=M('system')->where("id=1")->save($data);
			if (!empty($re)) {
				$this->success("修改成功",U('system/index'));
			}else{
				$this->error("修改失败");
			}
		}
	}
	public function upinfo(){
		if (!IS_AJAX) {
			$this->selectInfo();
			$this->display();
		}else{
			//var_dump($_POST);
			$pass=trim(remove_xss($_POST['pass']));
			if (empty($pass)) {
				$data['email']=trim(remove_xss($_POST['email']));
				$data['name']=trim(remove_xss($_POST['name']));
				$data['qq']=trim(remove_xss($_POST['qq']));
			}else{
				$data['email']=trim(remove_xss($_POST['email']));
				$data['password']=jmppwd(trim(remove_xss($_POST['pass'])));
				$data['name']=trim(remove_xss($_POST['name']));
				$data['qq']=trim(remove_xss($_POST['qq']));
			}
			$re=M('admin')->where("id=1")->save($data);
			if (!empty($re)) {
				$this->success("修改成功",U('system/upinfo'));
			}else{
				$this->error("修改失败");
			}
		}
	}
	public function temp(){
		$this->selectInfo();
		$temp=M('temp')->select();
		$this->assign('temp',$temp);
		$nowtemp=M('system')->where("id=1")->find();
		$nowtemp=$nowtemp['template'];
		$this->assign('nowtemp',$nowtemp);
		$this->assign('temp',$temp);
		$this->display();
	}
	public function usetemp(){
		if (!IS_AJAX) {
			$this->error("提交方式错误");
		}else{
			$data['template']=trim(remove_xss($_POST['te']));
			$re=M('system')->where("id=1")->save($data);
			if (!empty($re)) {
				$this->success("设置成功",U('system/temp'));
			}else{
				$this->error("设置失败");
			}
		}
	}
	function selectInfo(){
        $re=M('admin')->where("id=1")->find();
        $this->assign("re",$re);
    }
}