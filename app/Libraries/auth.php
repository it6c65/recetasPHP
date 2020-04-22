<?php

namespace App\Libraries;
use CodeIgniter\Events\Events;
use CodeIgniter\HTTP\Request as request;
use CodeIgniter\HTTP\Message as response;

class Auth {
    protected $user, $password;
    public function __construct($user, $pass){
        $this->user = $user;
        $this->password = $pass;
        $reqs = request;
        $reqs->getServer('PHP_AUTH_USER');
        $reqs->getServer('PHP_AUTH_PW');

        return true;
    }
    public function log(){
		response()
            ->setStatusCode(401)
            ->setHeader('WWW-Authenticate', 'Basic');
    }

}
