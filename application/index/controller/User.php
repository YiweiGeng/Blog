<?php
namespace app\index\controller;

use think\Controller;
use think\Model;

class User extends Controller {
	public function signup() {
		$email = input('email');
		$name = input('name');
		$pwd = input('pwd');

		return model('Users')->signup($email, $name, $pwd);
	}

	public function signin() {
		$email = input('email');
		$pwd = input('pwd');

		$res = model('Users')->signin($email, $pwd);
		if ($res) {
			session('user', $res);
			$this->success('登录系统成功', '/');
		} else {
			$this->error('登录系统失败，请检查相关信息');
		}
	}

	public function logout() {
		session('user', null);
		if (session('user') == null) {
			$this->success('用户注销成功', '/');
		}
	}
}
