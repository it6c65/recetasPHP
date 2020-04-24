<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
   protected $table = 'users';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $allowedFields = ['username','password'];
   protected $validationRules = [
      'username' => 'required|alpha_numeric|max_length[30]|min_length[3]|is_unique[users.username]',
      'password' => 'required|min_length[8]',
      'test_password' => 'required|matches[password]'
   ];
   protected $validationMessages = [
      'username' => [
         'required' => 'It is necessary have a user name',
         'alpha_numeric' => 'Your name do not have strange characters',
         'max_lenght' => 'You have passed at limited of characters',
         'min_length' => 'Your name do not to be so short!',
         'is_unique' => 'Your name must unique!'
      ],
      'password' => [
         'required' => 'It is necessary have a password for segurity',
         'min_lenght' => 'Your password is too short'
      ]
   ];
}
