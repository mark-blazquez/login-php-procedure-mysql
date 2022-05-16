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
	
		<div  class="d-flex justify-content-center">
			<img src="https://www.nacionrex.com/__export/1523478000646/sites/debate/img/2018/04/11/cc_2612273_167eb6e50b83410c8b1e00957abd1714_meme_otros_quien_demonios_la_entiende_del_todo_thumb_fb_1.jpg_242310155.jpg" class="img-fluid" alt="Responsive image">
		</div>

		<div class="d-flex justify-content-center">
			<form action="./sesion.php" method="post">
				<div class="form-group">
					<label >nombre </label>
					<input  type="" class="form-control" name="nombre" placeholder="introduce nombre" required></br>
					<label >contraseña </label>
					<input type="password" class="form-control" name="contra" placeholder="introduce contraseña"required></br>

					<input type="submit" class="btn btn-primary" value="iniciar sesion">
				</div>
			</form>
		</div>
</body>
</html>