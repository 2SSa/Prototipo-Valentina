<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos</title>


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
		<div>
    </nav>




<div class="container">

    <h1 align="center">¿Cómo te enteraste de Eventos Católicos?</h1>

    <form name="form1" onSubmit="return Validar()"  method="GET" action="servicios.php">
    <!-- Primera Fila -->
        <div class="row">
        
        <!-- Bloque de Audiometría -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem;">
                <img class="card-img-top" src="images/prensa.jpg" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="Prensa" > Prensa
                    </label>
                    </h1>
                </div>
                </div>
            </div>

        <!-- Bloque de Cardiología -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem">
                <img class="card-img-top" src="images/fb.jpg" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="Facebook" > Facebook
                    </label>
                    </h1>
                </div>
                </div>
            </div>

        <!-- Bloque de Cirugía General -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem">
                <img class="card-img-top" src="images/radio.jpg" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="Radio" > Radio
                    </label>
                    </h1>
                </div>
                </div>
            </div>
            
        <!-- Bloque de Cirugía Pediátrica -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem">
                <img class="card-img-top" src="images/tv.png" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="Televisión" > Televisión
                    </label>
                    </h1>
                </div>
                </div>
            </div>
        </div>

    <br>
    <div class="row">
    <!-- Columna en blanco -->
        <div class="col-md-5">
        </div>

    <!-- Bloque de Urología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/pers.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Otra persona" > Otra persona
                </label>
                </h1>
            </div>
            </div>
        </div>

    </div>
        <!-- Fila para el boton -->
        <div class="row">
        <!-- Columna en blanco -->
            <div class="col-md-11">
            </div>

        <!-- Boton -->
            <div class="col-md-1">
                <input type="submit" value="Siguiente" class="btn btn-outline-success" />
            </div>

    </div>

    
    </form>
    <br>
    <br>
</div>
    
<?php
    $opcion = $_GET['options'];
    include("conexion.php");
    

    // se consulta el último dato creado
    $resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db3 ORDER BY idconsulta DESC LIMIT 1");
    $num_fila='0';
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    $ultimoPaciente = $fila['idconsulta'];
    
    mysqli_query($conexion, "UPDATE $tabla_db3 SET area = '$opcion' WHERE idconsulta = $ultimoPaciente");
    
?>
</body>
</html>