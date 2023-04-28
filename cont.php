<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$tema = $_POST['tema'];

if($nombre!= "" && $correo!= "" && $telefono != "" && $tema != ""){
    echo "Todos los campos estan llenos";
}else{
    echo "Todos los campos deben esta llenos";
}

?>
