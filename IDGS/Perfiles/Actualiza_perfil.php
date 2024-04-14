<?php

include '../conexion/conexion.php';
$idpersona = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];


$cadenaActualizar ="UPDATE perfiles SET nombre='$nombre', descripcion='$descripcion', fechahora='$fechahora', activo='1', usuario='1' WHERE ID='$idperfil'";

$Actualizar = mysqli_query($conexion,$cadenaActualizar);
echo "ok";
?>