<?php

class Home {
    public function display(){
        echo \Template::instance()->render('home.html');
    }
    public function register(){
        echo \Template::instance()->render('register.html');
    }
    public function panel(){
        echo \Template::instance()->render('panel/index.html');
    }
    public function auth(){
        $user = new \DB\SQL\Mapper($db, 'users');
        $auth = new \Auth($user, array('id'=>'id', 'pw'=>'password'));
        $auth->basic();
    }
}
