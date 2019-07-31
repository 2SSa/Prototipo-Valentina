<?php
	
	require_once "connect.php";

	$dpi = $_GET['dpi'];
	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellidos'];
	$telefono = $_GET['telefono'];
	$direccion = $_GET['direccion'];
	$fecha = $_GET['fecha'];
/*
	echo $dpi . "<br>";
	echo $nombre . "<br>";
	echo $apellidos . "<br>";
	echo $telefono . "<br>";
	echo $direccion . "<br>";
	echo $fecha . "<br>";
*/

	$query = "INSERT INTO paciente(dpi, nombre, apellidos, telefono, direccion, fecha_nac) VALUES($dpi, '$nombre', '$apellidos', $telefono, '$direccion', '$fecha')";

	if($mysqli->query($query)){
		echo "Datos Guardados";
		header("Location: cajero.php?dpi=$dpi");

	}else{
		echo "Ocurrio un error";
	}


?>