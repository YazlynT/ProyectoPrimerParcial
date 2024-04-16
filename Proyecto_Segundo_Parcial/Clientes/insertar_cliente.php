<?php
include '../conexion/conexion.php';

date_default_timezone_set('America/Monterrey');
$fechahora = date('Y-m-d H:i:s');
//Variable post 
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$sexo = $_POST['sexo'];
$Edades = $_POST['Edades'];
$fechanacimiento = $_POST['fechanacimiento'];
$curp = $_POST['curp'];
$domicilio = $_POST['domicilio'];
$cp = $_POST['cp'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];


$cadenaInsertar ="INSERT INTO clientes (NOMBRE,APATERNO,AMATERNO,SEXO,EDAD,FECHANACIMIENTO,CURP,DOMICILIO,CP,CORREO,NUM_TELEFONO,ACTIVO,USUARIO,FECHAHORA)
 VALUES ('$nombre','$ap_paterno','$ap_materno','$sexo','$Edades','$fechanacimiento','$curp','$domicilio','$cp','$correo','$telefono','1','1','$fechahora' );";

$insertar = mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>