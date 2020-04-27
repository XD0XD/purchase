<?php

$dsn = 'mysql:host=localhost;dbname=pharmacy';
$user = 'root';
$pass = '';
$option = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {

    $conn = new PDO($dsn, $user, $pass, $option);

    echo 'yes connect';
} catch (Exception $E) {

    echo $E->getMessage();
}
