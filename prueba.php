<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
		function Validar(){
			if(document.form1.options[0].checked==false && document.form1.options[1].checked==false && document.form1.options[2].checked==false && document.form1.options[3].checked==false &&
            document.form1.options[4].checked==false && document.form1.options[5].checked==false && document.form1.options[6].checked==false && document.form1.options[7].checked==false &&
            document.form1.options[8].checked==false && document.form1.options[9].checked==false && document.form1.options[10].checked==false && document.form1.options[11].checked==false &&
            document.form1.options[12].checked==false && document.form1.options[13].checked==false && document.form1.options[14].checked==false && document.form1.options[15].checked==false &&
            document.form1.options[16].checked==false && document.form1.options[17].checked==false && document.form1.options[18].checked==false && document.form1.options[19].checked==false &&
            document.form1.options[20].checked==false && document.form1.options[21].checked==false && document.form1.options[22].checked==false && document.form1.options[23].checked==false &&
            document.form1.options[24].checked==false && document.form1.options[25].checked==false && document.form1.options[26].checked==false && document.form1.options[27].checked==false &&
            document.form1.options[28].checked==false
            
            ){
			
            alert("Seleccione un campo");
				return false;
			}
		
			return true
		}
    </script>

</head>
<body>
<!-- Menu superior -->
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

<h1 align="center">¿A qué área vienes?</h1>

<form name="form1" onSubmit="return Validar()"  method="GET" action="eventos.php">
<!-- Primera Fila -->
    <div class="row">
    
    <!-- Bloque de Audiometría -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="images/audiometria.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Audiometrías" > Audiometrías
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Cardiología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/cardio.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Cardiología" > Cardiología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Cirugía General -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/ciru.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Cirugía General" > Cirugía General
                </label>
                </h1>
            </div>
            </div>
        </div>
        
    <!-- Bloque de Cirugía Pediátrica -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/pedia.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Cirugía Pediátrica" > Cirugía Pediátrica
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- Segunda Fila -->
    <br>
    <br>
    <div class="row">
    <!-- Bloque de Dermatología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="images/derma.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Dermatología" > Dermotología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Endodoncia -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/endo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Endodoncia" > Endodoncia
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Fisioterapia -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/fisio.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Fisioterapia" > Fisioterapia
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Flebología-->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/flebo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Flebología" > Flebología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- fila 3 -->
    <br>
    <br>
    <div class="row">

    <!-- Bloque de Gastroenterología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="images/gastro.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Gastroenterología" > Gastroenterología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Gineco-Obstetra -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/gineco.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Gineco-Obstetra" > Gineco-Obstetra
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Medicina General -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/medige.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Medicina General" > Medicina General
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Neumología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/neumo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Neumología" > Neumología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- Fila 4 -->
    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="images/neuroci.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Neurocirugía" > Neurocirugía
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/neurolo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Neurología" > Neurología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/nutri.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Nutrición" > Nutrición
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/odonto.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Odontología" > Odontología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="images/odonpe.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="images/options" id="option1" autocomplete="off" value="Ondontopediatría" > Odontopediatría
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/ofta.png" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Oftalmología" > Oftalmología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/oftame.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Optometría" > Optometría
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/ortodo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Ortodoncia" > Ortondoncia
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="images/otorri.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Otorrinolaringología" > Otorrinolaringología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/pediatria.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Pediatría" > Pediatría
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/psicolo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Psicología" > Psicología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/psiquia.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Psiquiatría" > Psiquiatría
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- Fila 7 -->
    <br>
    <br>
    <div class="row">

    <!-- Bloque de Radiología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="images/radiologo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Radiología" > Radiología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Reumatología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/reuma.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Reumatología" > Reumatología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Terapia del Habla -->    
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/teraHabla.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Terapia del Habla" > Terapia del Habla
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Traumatología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/trauma.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Traumatología" > Traumatología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>


<!-- Fila 8 -->
    <br>
    <br>
    <div class="row">
    <!-- Columna en blanco -->
        <div class="col-md-5">
        </div>

    <!-- Bloque de Urología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="images/urolo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="Urología" > Urología
                </label>
                </h1>
            </div>
            </div>
        </div>

    </div>

    <br>
    <!-- Fila para el boton -->
    <div class="row">
    <!-- Columna en blanco -->
        <div class="col-md-11">
        </div>

    <!-- Boton -->
        <div class="col-md-1">
            <input type="submit" value="Siguiente" class="btn btn-outline-success"/>
        </div>

    </div>

    
    </form>
    <br>
    <br>

</div>

<?php 
   $do=$_GET['dpi'];
    
    date_default_timezone_set('America/Guatemala');
    $fechaAc = date("Y"). "/" . date("m") . "/" .date("d"); 
    $hora = date("G").":".date("i").":".date("s");

    include("conexion.php");
	$resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db1 WHERE dpi=$do");
        
            $num_fila='0';
            $resultado->data_seek($num_fila);
            $fila = $resultado->fetch_assoc();
            $indice = $fila['dpi'];
            $exp = $fila['idpaciente'];
            $fecha = $fila['fecha_nac'];
            $edad = $fechaAc - $fecha;
           $conexion->query("INSERT INTO $tabla_db3(paciente_idpaciente,fecha,hora,edad) values ('$exp','$fechaAc','$hora','$edad')");
    
?>

</body>
</html>