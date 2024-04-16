<?php
include '../conexion/conexion.php';
$idpersonas =$_POST['id'];

$cadenaEliminar ="UPDATE personas SET ACTIVO='0' WHERE ID='$idpersonas '";
   
   $eliminar = mysqli_query($conexion,$cadenaEliminar);
   echo "ok";

   ?>