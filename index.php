<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$f3 = \Base::instance();
// Declare controllers and models
$f3->set('AUTOLOAD','system/controllers/;system/models/');
// Declare database in PRODUCTION
// $f3->config('system/database/prod.cfg');
// Declare database conection
require_once "./system/database/dev.php";
require_once "./system/database/conection.php";
// Declare Views
$f3->set('UI','system/views/');
// Declare routes
$f3->config('system/routes.cfg');
// Other variables
// $f3->set('name', );
$f3->run();

?>
