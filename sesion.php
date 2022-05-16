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
		//$publishers = [];

		$sentencia = $con->prepare($sql);
		$sentencia->bindValue(":nombre", $nombre);
        $sentencia->bindValue(":contra", $contra);
		//$sentencia->bindParam(':nombre', $nombre, PDO::PARAM_INT);
		$sentencia->execute();
		foreach( $sentencia as $row){
			$nombreseguro=$row[0];
			$contrasegura=$row[1];
		}
		if ($nombreseguro==""){
			header("location:pagerror.html");
		}else{
			if($nombre=$nombreseguro){
			header("location:pagebien.html");

			}
		}
		//$publishers = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		//print_r($publishers);
		/*$sql ='SELECT nombre,contra,nombre FROM supermercado.prueba where nombre=:nombre and contra=:contra';
            $sentencia=$con->prepare($sql);
            $sentencia->bindValue(":nombre", $nombre);
            $sentencia->bindValue(":contra", $contra);
            $sentencia->execute();
            foreach( $sentencia as $row){
                $nombreseguro=$row[0];
                $contrasegura=$row[1];
                $row[2];
            }
            
            if (!$sentencia) {
                echo "<p>Error en la consulta.</p>";
            }
            else
            { 
                if(isset($nombre)){
                    if($nombre === $nombreseguro){
                        if(isset($contra)){
                            if($contra === $contrasegura){
                                session_start();
                                $_SESSION["usuario"]=$_POST["nombre"];
                                
                                setcookie("tiempo$row[2]",serialize($momento),time()+(365*24*60*60));
                                echo "hola  $row[2] "; 
                                if(isset($_COOKIE["tiempo$row[2]"])){
                                    $fechas=$_COOKIE["tiempo$row[2]"];
                                    $fecha=unserialize($fechas);
                                    echo ", su ultima visita fue el $fecha ";
                                }else{
                                    echo ",no hay datos de su ultimo inicio de sesion";
                                }
                                
                                if(isset($seguir)){
                                    $guardar=array($nombre,$contra);
                                    setcookie("usuario",serialize($guardar),time()+(365*24*60*60));
                                    
                                }
                                ?>
                                    </br><a href="./cierre.php"><input type="button" value="cerrar sesion">
                                    <a href="./index.php"><input type="button" value="volver a inicio">

                                <?php
                            }else{
                                header("location:pagerror.html");
                            } 
                        }else{
                            header("location:pagerror.html");
                        } 

                    }else{
                        header("location:pagerror.html");
                    } 
                }else{
                    header("location:pagerror.html");
                } 
            }	*/
	} catch (PDOException $e) {
		echo 'Fallo la conexion:' . $e->GetMessage();
	}


?>