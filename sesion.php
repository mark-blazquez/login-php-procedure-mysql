<?php
    $nombre=$_POST["nombre"];
    $contra=$_POST["contra"];


    $dsn = 'mysql:usuarios;host=localhost:3306';
    $usuario = 'mark';
    $contrasena = "password";
	try {
		$con = new PDO($dsn, $usuario, $contrasena);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "CALL usuarios.seleccionar4(:nombre,:contra)";

		$sentencia = $con->prepare($sql);
		$sentencia->bindValue(":nombre", $nombre);
		$sentencia->bindValue(":contra", $contra);
		$sentencia->execute();
		foreach ($sentencia as $row) {
			$nombreseguro = $row[0];
			$contrasegura = $row[1];
		}

		if ($nombreseguro == "") {
			header("location:pagerror.html");
		} else {
			if ($nombre = $nombreseguro) {
				if ($contrasena = $contrasegura) {
					header("location:https://192.168.1.132:8085");
					//crear cookie para la verificacion de la pag de symfony
					setcookie("usuario", time() + (365 * 24 * 60 * 60));
				}
			}
		}
	} catch (PDOException $e) {
		echo 'Fallo la conexion:' . $e->GetMessage();
	}


?>