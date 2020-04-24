<?php

namespace App\Libraries;

class Auth {
    protected $user, $password;
    public $validate;
    public function __construct($user, $pass){
        $this->user = $user;
        $this->password = $pass;
        $db = \Config\Database::connect();
        $query = $db->table('users')
               ->where('username',$user)
               ->get(1);
        if(count($query->getResultArray()) === 1){
            $this->user_exists = TRUE;
            $current_user = $query->getRow();
            if(password_verify($this->password, $current_user->password)){
                $this->validate = TRUE;
            }else{
                $this->validate = FALSE;
            }
        }else {
            $this->user_exists = FALSE;
        }
    }
}
