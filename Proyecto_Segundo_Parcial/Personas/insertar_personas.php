<?php
include '../conexion/conexion.php';

date_default_timezone_set('America/Monterrey');
$fechahora = date('Y-m-d H:i:s');
//Variable post 
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$sexo = $_POST['sexo'];
$curp = $_POST['curp'];

$cadenaInsertar ="INSERT INTO personas (NOMBRE,AP_PATERNO,AP_MATERNO,SEXO,CURP,FECHAHORA,ACTIVO,USUARIO) VALUES (
 '$nombre','$ap_paterno','$ap_materno','$sexo','$curp','$fechahora','1','1' )";

$insertar = mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>