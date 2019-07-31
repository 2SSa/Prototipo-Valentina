<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<?php
	$palabra = $_GET['buscar'];	
	$prueba = "hola";
	include("conexion.php");
	$resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db3 WHERE paciente_idpaciente=$palabra");
	
	for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
		$resultado->data_seek($num_fila);
		$fila = $resultado->fetch_assoc();
		$indice=$fila['idconsulta'];
		echo " id = " . $fila['idconsulta'] .$fila['area']."<br>";
		}
			
	if($indice==null){
		header("Location: busqueda.php?prueba=$prueba");
		
	}
	else{
		header("Location: busqueda.php?indice=$indice&palabra=$palabra");
	}
	?>
</body>
</html>