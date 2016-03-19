<?php 
	
	//Conexión a la base de datos
	
	$servername = "mysql2.000webhost.com";
	$username = "a9409088_admin";
	$password = "fmachete1";
	$db = "a9409088_fmachet";
	
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	if ($conn->connect_error) {
		die("Falló la conexión a la base de datos");
	}
	
?>