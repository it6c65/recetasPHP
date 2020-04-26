<?php

namespace App\Controllers;
use \App\Models\RecModel as Recipe;

class Recipes extends BaseController {
    public function new(){
		helper(['form','html']);
        $user_data = [
            'user' => $this->session->get('username')
        ];
        return view("panel/create_recipe", $user_data);
    }
    public function create(){
        $rec = [
           'recname' => $this->request->getPost('recname'),
           'estimated' => $this->request->getPost('estimated'),
           'estimated_type' => $this->request->getPost('estimated_type'),
           'preparation' => $this->request->getPost('order'),
        ];
        $new_recipe = new Recipe();
        if($new_recipe->insert($rec) === FALSE){
            return view('panel/create_recipe', ['errors' => $new_recipe->errors()]);
        }else{
            $this->session->setFlashdata('create_recipe', 'You have a new Recipe');
            return redirect()->to("/panel");
        }
    }
    public function index(){
    }
    public function show($id = null){
        $recipe = new Recipe();
        $current_recipe = $recipe->find(1);
        return view("panel/show_recipes", [ 'recipes' => $current_recipe]);
    }
    public function edit($id = null){
    }
    public function update($id = null){
        $update_recipe = new Recipe();
        $rec = [
            'recname' => $this->request->getPost('rec_name'),
            'estimated' => $this->request->getPost('time'),
            'preparation' => $this->request->getPost('order')
        ];
        $update_recipe->update($id,$rec);
    }
    public function delete($id = null){
        $delete_recipe = new Recipe();
        $delete_recipe->delete($id);
    }
}
