<?php

class Home {
    public function display(){
        echo \Template::instance()->render('init.html');
    }
}
