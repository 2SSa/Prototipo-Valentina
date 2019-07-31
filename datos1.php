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

    $valoracion = $_GET['options'];
    echo $valoracion;
 
    include("conexion.php");
    $resultado=mysqli_query($conexion,"SELECT* FROM $tabla_db2 ORDER BY idinformacion DESC LIMIT 1");
    $num_fila='0';
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    $ultimoPaciente = $fila['idinformacion'];
    echo $ultimoPaciente;


    
    

    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    $ultimoPaciente = $fila['idinformacion'];

    mysqli_query($conexion, "UPDATE $tabla_db2 SET valoracion = '$valoracion' WHERE 	idinformacion = $ultimoPaciente");
    if($ultimoPaciente!= null){
        header("Location: buscarcli.php?ultimoPaciente=$ultimoPaciente");
    }
?>
    
</body>
</html>