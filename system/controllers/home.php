<?php

class Home {
    public function display(){
        echo \Template::instance()->render('init.html');
    }
    public function register(){
        echo \Template::instance()->render('register.html');
    }
    public function panel(){
        echo \Template::instance()->render('panel/index.html');
    }
}
