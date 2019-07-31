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
	include("conexion.php");
	$resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db1 WHERE dpi=$palabra");
        
            $num_fila='0';
            $resultado->data_seek($num_fila);
            $fila = $resultado->fetch_assoc();
			$indice = $fila['dpi'];
			$expediente = $fila['idpaciente'];
			$nombre=$fila['nombre'];
			$apellido= $fila['apellidos'];
			$telefono = $fila['telefono'];
			$direccion = $fila['direccion'];
			$fecha = $fila['fecha_nac'];
            
			echo $indice;
			
	if($indice!=null){
		header("Location: nuevoPaciente1.php?indice=$indice&expediente=$expediente&nombre=$nombre&apellido=$apellido&telefono=$telefono&direccion=$direccion&fecha=$fecha");
	}
	else{
		header("Location: buscarcli.php?palabra=$palabra");
	}
	?>
</body>
</html>