<?php
session_start();
require 'database.php';
$db = new Database;
$con = $db->conectar();
$sql = $con ->prepare("SELECT nombre, correo, contraseña FROM usuarios");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

$nombre = $_SESSION['nombre'];
$password = $_SESSION['contra'];
$email = $_SESSION['correo'];
$codigo = $_POST['codigo'];
$code = $_SESSION['codeee'];


    if( $codigo == $code){
        $sql = $con->query("INSERT into usuarios (nombre,correo,contraseña)values('$nombre','$email','$password')");
        echo '<script>location.href="index.php";</script>';
    }
    else{
        echo "<style>.error{opacity: 1;}</style>!Codigo Invalido!";
    }
?>