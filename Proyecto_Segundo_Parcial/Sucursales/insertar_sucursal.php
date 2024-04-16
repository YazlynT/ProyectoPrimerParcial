<?php
include '../conexion/conexion.php';

date_default_timezone_set('America/Monterrey');
$fechahora = date('Y-m-d H:i:s');
//Variable post 
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];


$cadenaInsertar ="INSERT INTO sucursal (NOMBRE,DIRECCION,TELEFONO,FECHAHORA,ACTIVO,USUARIO) VALUES (
 '$nombre','$direccion','$telefono','$fechahora','1','1' )";

$insertar = mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>