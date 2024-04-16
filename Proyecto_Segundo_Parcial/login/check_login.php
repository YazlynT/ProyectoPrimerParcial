<?php


require '../conexion/conexion.php';


$nombreUsuario = $_POST['nombreUsuario'];
$password = $_POST['password'];


if (empty($nombreUsuario) || empty($password)) {
   
    header("Location: index.php?error=empty");
    exit();
}


$sql = "SELECT * FROM usuarios WHERE nombreUsuario='$nombreUsuario'";
$result = $conexion->query($sql);


if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();

    if ($password == $row['password']) {
       
        if ($row['activo'] == 1) {
          
            header("Location: inicio.php");
            exit();
        } else {
       
            header("Location: login.php?error=El usuario no fue encontrado");
            exit();
        }
    } else {
    
        header("Location: login.php?error=Contraseña incorrecta");
        exit();
    }
} else {
    header("Location: login.php?error=userio no encontrado");
    exit();
}

$conexion->close();
?>