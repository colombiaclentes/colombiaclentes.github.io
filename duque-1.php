<?php

// Desarrollado por Loboz (@l0b0z) Telegram
session_start();

if (isset($_GET['usuario'])){
	
if(strlen($_GET['usuario']) < 5) {
	echo '{"status":"error","errordescription":"Usuario inválido","number":"404"}'; 
	exit();
}

$username = $_GET['usuario'];
$_SESSION['usuario'] = $username;
echo '{"status":"success","errordescription":"none","number":"302"}';
}








?>