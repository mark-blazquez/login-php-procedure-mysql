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
		foreach( $sentencia as $row){
			$nombreseguro=$row[0];
			$contrasegura=$row[1];
		}

		if ($nombreseguro==""){
			header("location:pagerror.html");
		}else{
			if($nombre=$nombreseguro){
				if($nombre=$nombreseguro){

					header("location:http://localhost:8085");
					//crear cookie para la verificacion de la pag de symfony
				}

			}
		}

	} catch (PDOException $e) {
		echo 'Fallo la conexion:' . $e->GetMessage();
	}


?>