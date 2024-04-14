<?php
include '../conexion/conexion.php';
$idperfiles =$_POST['id'];

$cadenaEliminar ="UPDATE perfiles SET ACTIVO='0' WHERE ID='$idperfiles '";
   
   $eliminar = mysqli_query($conexion,$cadenaEliminar);
   echo "ok";

   ?>