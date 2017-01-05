<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller {
	public function index() {
		return view('/index');
	}
	public function signup() {
		return view('/signup');
	}
	public function signin() {
		return view('/signin');
	}
}
