<?php

$db_host = $f3->get("db.host");
$db_port = $f3->get("db.port");
$db_name = $f3->get("db.name");
$db_user = $f3->get("db.user");
$db_pass = $f3->get("db.password");

$db = new DB\SQL(
    "mysql:".
    "host=$db_host;".
    "port=$db_port;".
    "dbname=$db_name;",
    $db_user,
    $db_pass
);
