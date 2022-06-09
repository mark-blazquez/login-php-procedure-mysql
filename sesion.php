<?php
	//lo que pasa el formulario
    $nombre=$_POST["nombre"];
    $contra=$_POST["contra"];


    $dsn = 'mysql:usuarios;host=localhost:3306';
    $usuario = 'mark';
    $contrasena = "password";
	try {
		$con = new PDO($dsn, $usuario, $contrasena);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//mete en la variable la llamada al procedure de la base de datos y le va a pasar las variables
		$sql = "CALL usuarios.seleccionar4(:nombre,:contra)";
		$sentencia = $con->prepare($sql);
		// iguala lo que se le pasa al procedure a la variable de formulario
		$sentencia->bindValue(":nombre", $nombre);
		// iguala lo que se le pasa al procedure a la variable de formulario
		$sentencia->bindValue(":contra", $contra);
		//lo ejecuta
		$sentencia->execute();
		//recorre lo que recoje y lo meto en variables , porque se que solo obtiene una cosa, luego hare las comprobaciones
		foreach ($sentencia as $row) {
			$nombreseguro = $row[0];
			$contrasegura = $row[1];
		}
		//en caso de que el procedure le pases datos incorrectos lo devuelve vacio por lo que aqui hago la comprobacion y si esta vacio te devuelve a la pag de error
		if ($nombreseguro == "") {
			header("location:pagerror.html");
		} else {
			//si ambas variables  coninciden con lo que devuelve el procedure indica que esta bien los datos
			if ($nombre = $nombreseguro) {
				if ($contrasena = $contrasegura) {
					//redirecciona a la pag de gestion symphony
					header("location:https://torre-ubuntu.ddns.net:8085");
					//crear cookie para la verificacion de la pag de symfony
					setcookie("usuario", time() + (365 * 24 * 60 * 60));
				}
			}
		}
	} catch (PDOException $e) {
		echo 'Fallo la conexion:' . $e->GetMessage();
	}


?>