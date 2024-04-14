<?php
include '../conexion/conexion.php';
$datos=[];
$cadenaConsulta="SELECT ID,NOMBRE,DIRECCION,TELEFONO,FECHAHORA,ACTIVO,USUARIO FROM sucursal where ACTIVO='1'";
$ConsultaSucursal=mysqli_query($conexion,$cadenaConsulta);
while($row=mysqli_fetch_array($ConsultaSucursal)){
    $btnEliminar="<button type='button' class='btn btn-sm btn btn-danger' onclick='eliminar($row[0])' >
    <i class='fa fa-trash' aria-hidden='true'></i></button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "direccion"=>$row[2],
        "telefono"=>$row[3],
        "fechahora"=>$row[4],
        "activo"=>$row[5],
        "usuario"=>$row[6],
        "opciones"=>$btnEliminar
        
        
    ];
}
echo json_encode($datos);
?>