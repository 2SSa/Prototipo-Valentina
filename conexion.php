<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$servidor = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "valentina";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
    $tabla_db1 = "paciente"; 	   // tabla de usuarios
    $tabla_db2 = "informacion"; 	   // tabla de usuarios
    $tabla_db3 = "consulta"; 	   // tabla de usuarios
	

	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($servidor,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}
