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
    			<h5 class="card-title">Ingrese el número de expediente</h5>
    			<form action="buscaHistorial.php" method="GET" autocomplete="off">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
    				<input type="text" class="form-control form-control-lg" id="buscar" placeholder="Número de expediente" name="buscar" minlength="1" maxlength="14" required><br>
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
		include("conexion.php");

		if(isset($_GET['palabra'])){
			$palabra = $_GET['palabra'];

			$resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db1 WHERE idpaciente=$palabra");
        
            $num_fila='0';
            $resultado->data_seek($num_fila);
            $fila = $resultado->fetch_assoc();
			$nombre = $fila['nombre'];
			$apellido = $fila['apellidos'];

			echo "
			<div class='container'>
			<div class='row'>
				<div class='col-md-3'>
					<h3>Paciente: </h3>
				</div>
				<div class='col-md-6'>
					<h3>".$nombre." ".$apellido."</h3>
				</div>
			</div>
			<table class='table table-striped'>
			<thead>
				<tr>
				<th scope='col'>Fecha</th>
				<th scope='col'>Hora</th>
				<th scope='col'>Área</th>
				
				</tr>
			</thead>
			<tbody>";
				
	
			$resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db3 WHERE paciente_idpaciente=$palabra");
	
			for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
				$resultado->data_seek($num_fila);
				$fila = $resultado->fetch_assoc();
				echo "<tr>";
						echo "<th scope='row'>".$fila['fecha']."</th>";
						echo "<td>".$fila['hora']."</td>";
						echo "<td>". $fila['area'] ."</td>";
						
						echo "</tr>";
				
				}
						
					

			echo "</tbody>
			</table>
			</div>";
			
				
		}
				
		else if(isset($_GET['prueba'])){
			echo '<script type="text/javascript">';
			echo 'alert("El expediente no existe");'; 
			echo '</script>';
		}
		?>
	</body>
	</html>