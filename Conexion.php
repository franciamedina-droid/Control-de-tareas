<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "control tareas";

$conexion = new mysqli($servidor,$usuario,$password,$bd);

if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}

?>