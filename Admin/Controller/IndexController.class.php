<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    //判断是否登录
	public function _initialize(){
	    if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
	}
    public function index(){
        $this->selectInfo();
        $this->getCount();
        $this->display();
    }
    //退出登录
    public function LoginOut(){
        session_destroy();
        $this->success('退出成功',U('Login/index'));
    }
    //数量统计
    function getCount(){
        $toolscount=M('tool')->count();
        $classcount=M('class')->count();
        $menucount=M('menu')->count();
        $linkcount=M('links')->count();
        $this->assign('toolscount',$toolscount);
        $this->assign('classcount',$classcount);
        $this->assign('menucount',$menucount);
        $this->assign('linkcount',$linkcount);
    }
    function selectInfo(){
        $re=M('admin')->where("id=1")->find();
        $this->assign("re",$re);
    }
}