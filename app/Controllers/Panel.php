<?php

namespace App\Controllers;

use \App\Libraries\Auth as Auth;
use \App\Models\RecModel as Recipe;

class Panel extends BaseController
{
    public function index(){
        $recipes = new Recipe();
        $recipe_list = $recipes->where('users_id', $this->session->identity)->findAll();
        $user_data = [
            'user' => $this->session->get('username'),
            'recipes' => $recipe_list,
            'title' => "Panel Recipes"
        ];
        return view("panel", $user_data);
    }
    public function exit(){
        $this->session->logged = FALSE;
        $this->session->destroy();
        return redirect()->to("/");
    }
}
