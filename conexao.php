<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "senhas";

$mysqli= new mysqli($host, $user, $pass, $bd);

//check conexão
if($mysqli->connect_errno){
   echo "Connect failed: " . $mysqli->connect_error;
   exit(); 
}