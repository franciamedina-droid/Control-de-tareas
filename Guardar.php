<?php

include("Conexion.php");

$Codigo = $_POST['Codigo'];
$Tarea = $_POST['Tarea'];
$Asignacion = $_POST['Asignacion'];
$Docente = $_POST['Docente'];
$Fecha_Entrega = $_POST['Fecha_Entrega'];
$Observaciones = $_POST['Observaciones'];

$sql = "INSERT INTO resgistro (Codigo,Tarea,Asignacion,Docente,Fecha_Entrega,Observaciones)
VALUES ('$Codigo','$Tarea','$Asignacion','$Docente','$Fecha_Entrega','$Observaciones')";

if($conexion->query($sql)){
    echo "Datos guardados correctamente";
}else{
    echo "Error: " . $conexion->error;
}

?>