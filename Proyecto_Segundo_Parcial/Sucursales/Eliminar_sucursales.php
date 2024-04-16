<?php
include '../conexion/conexion.php';
$idsucursal =$_POST['id'];

$cadenaEliminar ="UPDATE sucursal SET ACTIVO='0' WHERE ID='$idsucursal '";
   
   $eliminar = mysqli_query($conexion,$cadenaEliminar);
   echo "ok";

   ?>