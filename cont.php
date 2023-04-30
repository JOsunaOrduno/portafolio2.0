<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tema = $_POST['tema'];

if($nombre!= "" && $correo!= "" && $tema != ""){
    echo "Todos los campos estan llenos";
}else{
    echo "Todos los campos deben esta llenos";
}

?>
