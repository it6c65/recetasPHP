<?php namespace App\Controllers;

use \App\Libraries\Auth as Auth;
use \App\Models\UserModel as User;

class Login extends BaseController
{

	public function index()
	{
		return view('enter', [ 'title' => 'Login' ]);
	}
	public function register()
	{
		if($this->request->getMethod() == "post"){
			$this->addUser();
			if($this->warning_create_user == NULL){
				$this->session->setFlashdata('create_user', 'Welcome, enjoy you new account');
				return redirect()->to("/");
			}else{
				return view('register', [ "title" => "Register", "errors" => $this->warning_create_user]);
			}
		}else{
			return view('register', [ "title" => "Register" ]);
		}
	}
	public function auth()
	{
		$usr = $this->request->getPost('username');
		$pw = $this->request->getPost('password');
		$authentication = new Auth($usr,$pw);
		if($authentication->validate){
			$logUser = [
				'username' => $usr,
				'identity' => $authentication->user_id,
				'logged' => TRUE
			];
			$this->session->set($logUser);
			return redirect()->to("/panel");
		}else{
			return redirect()->to("/login");
		}
	}
	private function addUser(){
		$username = $this->request->getPost('new_user');
		$password = $this->request->getPost('new_password');
		$test_password = $this->request->getPost('test_password');
		$user = new User();
		$new_user = [
			'username' => $username,
			'password' => $password,
			'test_password' => $test_password
		];
		if($user->save($new_user) === FALSE){
			$this->warning_create_user = $user->errors();
		}else{
			$this->warning_create_user = NULL;
		}
	}
}
