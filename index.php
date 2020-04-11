<?php
require 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->set('AUTOLOAD','system/controllers/');
$f3->set('UI','system/views/');
$f3->set('name','World');
$f3->config('system/routes.cfg');
$f3->run();

?>
