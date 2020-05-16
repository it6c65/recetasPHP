<?php

namespace App\Controllers;
use \App\Models\RecModel as Recipe;

class Recipes extends BaseController {
    public function new(){
        $user_data = [
            'user' => $this->session->get('username'),
            'title' => "Create Recipes"
        ];
        return view("recipes/create", $user_data);
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
            return view('recipes/create', ['errors' => $new_recipe->errors()]);
        }else{
            $ingredients = $this->request->getPost('ingredients');
            $number_ings = sizeof($ingredients["name"]);
            $db = \Config\Database::connect();
            $list_recipes = $db->table("recipes");
            $last_recipe = $list_recipes->orderBy('id', 'DESC')->get(1)->getRow();
            $add_ingredients = $db->table('ingredients');
            for ($i = 0; $i < $number_ings; ++$i) {
                $add_ingredients->insert(
                    [
                        'name' => $ingredients["name"][$i],
                        'recipes_id' => $last_recipe->id,
                        'quantity' => $ingredients["quantity"][$i]
                    ]
                );
            }

            $this->session->setFlashdata('create_recipe', 'You have a new Recipe');
            return redirect()->to("/panel");
        }
    }
    public function edit($id = null){
        $recipe = new Recipe();
        $user_data = [
            'user' => $this->session->get('username'),
            'current_recipe' => $recipe->find($id),
            'title' => "Editing " . $recipe->recname
        ];
        return view("recipes/edit", $user_data);
    }
    public function update($id = null){
        $update_recipe = new Recipe();
        $rec = [
            'recname' => $this->request->getPost('recname'),
            'estimated' => $this->request->getPost('estimated'),
            'estimated_type' => $this->request->getPost('estimated_type'),
            'preparation' => $this->request->getPost('order')
        ];
        $update_recipe->update($id,$rec);
        return redirect()->to("/panel");
    }
    public function delete($id = null){
        $delete_recipe = new Recipe();
        $delete_recipe->delete($id);
    }
}
