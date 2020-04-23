<?php

namespace App\Controllers;

use \App\Libraries\Auth as Auth;

class Panel extends BaseController
{
    public function index(){
		helper(['form','html']);
        $user_data = [
            'user' => $this->session->get('username')
        ];
        return view("panel/index", $user_data);
    }
    public function exit(){
        $this->session->logged = FALSE;
        $this->session->destroy();
        return redirect()->to("/");
    }
}
