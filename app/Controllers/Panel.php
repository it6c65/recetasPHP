<?php

namespace App\Controllers;

use \App\Libraries\Auth as Auth;
use \App\Models\RecModel as Recipe;

class Panel extends BaseController
{
    public function index(){
		helper(['form','html']);
        $recipes = new Recipe();
        $recipe_list = $recipes->findAll();
        $user_data = [
            'user' => $this->session->get('username'),
            'recipes' => $recipe_list
        ];
        return view("panel/index", $user_data);
    }
    public function exit(){
        $this->session->logged = FALSE;
        $this->session->destroy();
        return redirect()->to("/");
    }
}
