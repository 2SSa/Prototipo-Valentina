<?php

//definición de credenciales de la BD
define('DB_SERVER','localhost');
define('DB_NAME','valentina');
define('DB_USER','root');
define('DB_PASS','');

date_default_timezone_set('America/Guatemala');

	$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if(mysqli_connect_errno()){
			//printf("Conexion fallida");
			echo "Este sitio esta presentando problemas";
		}

		$mysqli->set_charset("utf8"); 
?>