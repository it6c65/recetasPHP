<?php namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		$data = [
			'create_user' => $this->session->create_user,
			'title' => 'Welcome RecAdmin'
		];
		return view('home', $data);
	}
}
