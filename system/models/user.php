<?php

$user= DB\SQL\Mapper($db,'users');
$f3->set('result',$db->exec('select username from users'));
