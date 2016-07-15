<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller{

	public function login(){
// 		var_dump(U('home/admin/admin_login'));exit;
		$this->display('login');
	}
	
	public function admin_Login(){
		$db_user = D('user');
		$user = $db_user->where(array('user'=>I('post.user')))->find();
		if (!$user || $user['passwd'] !== I('post.passwd','','md5')) {
			$this->assign('error','用户名或密码错误');
			$this->display('login');
		}else {
			session_start();
			session('uid',$user['id']);
			session('user',$user['user']);
			session('login_time',date('Y-m-d h:i:s', time()));
			session('uip',get_client_ip());
			$this->redirect('index/index');
		}
	}
	
	public function logout(){
		session_unset();
		session_destroy();
		$this->display('Index/hello');
	}
	
	public function admin(){
		$this->display('admin');
	}
}