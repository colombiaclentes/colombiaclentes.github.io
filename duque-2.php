<?php

// Desarrollado por Loboz (@l0b0z) Telegram
session_start();

if (isset($_GET['password'])){
	
if(strlen($_GET['password']) < 4) {
	echo '{"status":"error","errordescription":"Contraseña inválido","number":"404"}'; 
	exit();
}

$pass = $_GET['password'];
$_SESSION['password'] = $pass;
echo '{"status":"success","errordescription":"none","number":"302"}';
}








?>