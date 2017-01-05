<?php
namespace app\index\model;

use think\Model;

class Users extends Model {

	public function check($attr, $val) {
		$user = model('Users');
		return $user->where($attr, $val)->find();
	}

	public function signup($email, $name, $pwd) {
		$user = model('Users');
		// 模型对象赋值
		$user->data([
			'email' => $email,
			'name' => $name,
			'pwd' => MD5($pwd),
		]);
		return $user->save();
	}

	public function signin($email, $pwd) {
		$user = model('Users');
		$res = $user->where('email', $email)->where('pwd', MD5($pwd))->find();
		return $res;
	}

}
