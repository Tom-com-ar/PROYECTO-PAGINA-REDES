<?php

$conexion = new mysqli('localhost','root','','cine starlight');

if(!$conexion){
    die('Error de conexión'.mysql_error());
}

else{
    echo  "Conexion realiza con exito ";
}

$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$telefono = $_POST['Teléfono'];
$email = $_POST['Email'];
$mensaje = $_POST['Mensaje'];

$sql = "INSERT INTO `comentarios`(`Nombre`, `Apellidos`, `Teléfono`, `Email`, `Mensaje`) VALUES ('$nombre','$apellidos','$telefono','$email','$mensaje')";

if(mysqli_query($conexion, $sql)){
    $sucess = "El ingreso ha sido satisfactorio ";
    echo $sucess;
}else{
    echo "Error al ingresar datos ".mysqli_error($conexion);
}

mysqli_close($conexion);

?>