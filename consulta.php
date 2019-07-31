<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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

    <div class="container">
            <?php
            include("conexion.php");
            date_default_timezone_set('America/Guatemala');
            $fechaAc = date("Y"). "-" . date("m") . "-" .date("d");

                $resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db3 WHERE fecha='$fechaAc'");
                for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
                    $resultado->data_seek($num_fila);
                    $fila = $resultado->fetch_assoc();
                    $hola = $fila['hora'];
                   
                }
                if($hola==null){
                    echo "<div class='row'>
                                <div class='col-md-4'></div>
                                <div class='col-md-4'>
                                    <div class='alert alert-warning'>No se han registrado pacientes en este día</div>
                                </div>
                        </div>";
                }
                else{
                    echo "<table class='table table-striped'>
                            <thead>
                                <tr>
                                <th scope='col'>Hora</th>
                                <th scope='col'>Expediente</th>
                                <th scope='col'>Área</th>
                                <th scope='col'>Edad</th>
                                </tr>
                            </thead>
                            <tbody>";
                    echo "<tr>";
                    echo "<th scope='row'>".$fila['hora']."</th>";
                    echo "<td>".$fila['paciente_idpaciente']."</td>";
                    echo "<td>". $fila['area'] ."</td>";
                    echo "<td>".$fila['edad']."</td>";
                    echo "</tr>";
                }
            ?>

            
            
        </tbody>
        </table>

    </div>
</body>
</html>