<?php

$hostname = "localhost";
$DB = "testedb";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $DB);
if ($mysqli->connect_error){
    die("Falha ao conectar: " . $mysqli->error);
}