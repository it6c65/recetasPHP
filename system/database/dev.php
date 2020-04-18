<?php

$f3->set('db', array(
    'name' => getenv("DB_NAME"),
    'user' => getenv("DB_USER"),
    'password' => getenv("DB_PASS"),
    'port' => getenv("DB_PORT"),
    'host' => getenv("DB_HOST")
));
