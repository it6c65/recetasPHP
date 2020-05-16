<?php

namespace App\Controllers;

use \App\Libraries\Auth as Auth;
use \App\Models\RecModel as Recipe;

class Panel extends BaseController
{
    public function index(){
        $recipes = new Recipe();
        $recipe_list = $recipes->where('users_id', $this->session->identity)->findAll();
        $db = \Config\Database::connect();
        $list_ingredients = $db->table('ingredients')->get()->getResult();
        $user_data = [
            'user' => $this->session->get('username'),
            'recipes' => $recipe_list,
            'ingredients' => $list_ingredients,
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
