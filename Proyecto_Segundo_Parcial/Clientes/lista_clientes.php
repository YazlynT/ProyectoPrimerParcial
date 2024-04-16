<?php
include '../conexion/conexion.php';
$datos=[];
$cadenaConsulta="SELECT 	ID,NOMBRE,APATERNO,AMATERNO,SEXO,EDAD,FECHANACIMIENTO,CURP,DOMICILIO,CP,CORREO,NUM_TELEFONO,ACTIVO,USUARIO,FECHAHORA FROM clientes where ACTIVO='1'";
$ConsultaSucursal=mysqli_query($conexion,$cadenaConsulta);
while($row=mysqli_fetch_array($ConsultaSucursal)){
    $btnEliminar="<button type='button' class='btn btn-sm btn btn-danger' onclick='eliminar($row[0])' >
    <i class='fa fa-trash' aria-hidden='true'></i></button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "ApPaterno"=>$row[2],
        "ApMaterno"=>$row[3],
        "sexo"=>$row[4],
        "edad"=>$row[5],
        "fecha_nacimiento"=>$row[6],
        "curp"=>$row[7],
        "domicilio"=>$row[8],
        "cp"=>$row[9],
        "correo"=>$row[10],
        "num_Tel"=>$row[11],
        "fecha_hora"=>$row[14],
        "opciones"=>$btnEliminar
        
        
    ];
}
echo json_encode($datos);
?>