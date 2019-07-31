	<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>Cajero</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet/less" type="text/css" href="styles.less" />
		<meta charset="utf-8">
	</head>

	<body>
	<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#96cf07;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <img src="images/logo.png" alt="Card image cap" width="100 px" height="50 px">
				<a class="navbar-brand">Analysts Next Level</a>
                
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>
				</ul>   
			</div>
		</nav>
	</nav>

		<br>
<div class="container">

		<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Ingrese el DPI a buscar</h5>
    			<form action="buscar1.php" method="GET" autocomplete="off">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
    				<input type="text" class="form-control form-control-lg" id="buscar" placeholder="Ingrese DPI del paciente" name="buscar" minlength="13" maxlength="14" required><br>
    				<input type="submit" value="Buscar" class="btn btn-primary btn-lg">
    			</form>
    				<?php
						// if(isset($_GET['buscar'])){
						// 	require_once "connect.php";
						// 	require_once "buscar.php";
						// }
					?>
  			</div>
		</div>

<br><br>
</div>

	<?php
				if(isset($_GET['indice'])){
					echo '<script type="text/javascript">';
					echo 'alert("El paciente ya se encuentra registrado");'; 
					echo '</script>';
				}

				else if(isset($_GET['palabra'])){
					echo '<script type="text/javascript">';
					echo 'alert("El DPI no existe");'; 
					echo '</script>';
				}
				if(isset($_GET['ultimoPaciente'])){
					echo '<script type="text/javascript">';
					echo 'alert("El formulario se ha completado con exito");'; 
					echo '</script>';
				}
		?>
	</body>
	</html>