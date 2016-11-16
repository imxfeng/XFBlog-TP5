<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Login extends Controller
{
	public function index()
	{
		if(request()->isPost()){

			$data=input('post.');
			$user=Db::name('users')->where('name','=',$data['username'])->find();
			if($user){
				if($user['password'] == $data['password']){
					session('username',$user['name']);
					session('uid',$user['uid']);
					$this->success('信息正确，正在为您跳转...','index/index');
				}else{
					$this->error('密码错误');
				}
			}else{
				$this->error('用户不存在');
			}			
		}
		return $this->fetch('login');
	}
}