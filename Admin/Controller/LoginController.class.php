<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    //判断是否登录
	public function _initialize()
    {
	    if ($_SESSION['admin']['id']!="") {
           $this->redirect('index/index');
        }
	}
    public function index()
    {
        $this->display();
    }
    public function ajaxLogin()
    {
        if (!IS_AJAX) {
            $this->display();
        }else{
            $verify = new\Think\Verify();
            $a= remove_xss(I('post.name','','strip_tags'));
            $b= remove_xss(jmppwd(I('post.pass','','strip_tags')));
            $code=remove_xss(trim(($_POST['code'])));
           
            $res=$verify->check($code,1);
            if ($res===false) {
                $this->error('验证码错误!');
            }
            $au=M('admin');
            $admin=$au->where(array('email'=>$a,'password'=>$b))->find();
            ///echo $au->getLastsql();
            if(!empty($admin)){
                    $_SESSION['admin']['id']=$admin['id'];
                    $this->success('正在登录',U('index/index'),true,'2');
            }else{
                $this->error('账号密码错误!');
            }
        }
    }
    //生成验证码
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->lenth =4;
        $Verify->entry(1);
    }
    public function test(){
        echo "更新成功ZYE.CC!";
    }
}