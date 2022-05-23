<?php
    if(isset($_COOKIE["usuario"])){
		header("location:https://192.168.1.132:8085");

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
</head>
<body >
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
	/* CSS */
	#boton{
	background-color: #EA4C89;
	}
	@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

	body {
	background: #272727;
	font-family: "Montserrat", sans-serif;
	}
</style>
	
		<div  class="d-flex justify-content-center">
			<img src="./logo.jpg" class="img-fluid" alt="Responsive image">
		</div>

		<div class="d-flex justify-content-center">
			<form action="./sesion.php" method="post">
				<div class="form-group">
					<label >nombre </label>
					<input  type="" class="form-control" name="nombre" placeholder="introduce nombre" required></br>
					<label >contraseña </label>
					<input type="password" class="form-control" name="contra" placeholder="introduce contraseña"required></br>
					<div class="d-flex justify-content-center">
						<input type="submit" id="boton"  class="btn " value="iniciar sesion">
					</div>
				</div>
			</form>
		</div>
</body>
</html>