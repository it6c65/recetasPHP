<?php namespace App\Controllers;

use \App\Libraries\Auth as Auth;

class Login extends BaseController
{

	public function index()
	{
		helper(['form','html']);
		return view('enter');
	}
	public function register()
	{
		return view('register');
	}
	public function auth()
	{
		$usr = $this->request->getPost('username');
		$pw = $this->request->getPost('password');
		$authentication = new Auth($usr,$pw);
		if($authentication->validate){
			route_to("/panel");
		}else{
			route_to("/login");
		}
	}

}
