<?php namespace App\Controllers;


class Login extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function register()
	{
		return view('register');
	}
	public function auth()
	{
		return view('enter');
	}

	//--------------------------------------------------------------------

}
