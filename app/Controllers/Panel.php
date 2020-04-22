<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Panel extends Controller
{
    public function index(){
        return view("panel/index");
    }
}
