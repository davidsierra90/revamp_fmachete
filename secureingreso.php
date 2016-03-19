<?php
	
	header('Content-Type: text/html; charset=UTF-8');
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	if($user == "admin"
	&& $pass == "fmachete1")
	{
        include("nuevoregistro.php");
	}
	else
	{
		if(isset($_POST))
		{?>
		<html lang="es">
			<head>
				<title>Autenticación de usuario</title>
			</head>
			<body>
				<form method="POST" action="secureingreso.php">
					Usuario <input type="text" name="user"></input><br/>
					Contraseña <input type="password" name="pass"></input><br/>
					<input type="submit" name="submit" value="Ingresar"></input>
				</form>
			</body>
		</html>
		<?}
	}
?>
