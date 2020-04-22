<?php

namespace App\Libraries;
use CodeIgniter\Events\Events;
use CodeIgniter\HTTP\Request as request;
use CodeIgniter\HTTP\Message as response;

class Auth {
    protected $user, $password;
    public $validate;
    public function __construct($user, $pass){
        $this->user = $user;
        $this->password = $pass;
        $db = \Config\Database::connect();
        $query = $db->table('users')
               ->where('username',$user)
               ->where('password', $pass)
               ->get(1);
        if(count($query->getResultArray()) === 1){
            $this->validate = true;
        }else {
            $this->validate = false;
        }
    }
}
