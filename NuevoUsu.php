<?php
session_start();
require 'database.php';
$db = new Database;
$con = $db->conectar();
$sql = $con ->prepare("SELECT nombre, correo, contraseña FROM usuarios");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


    $nombre = $_POST['nombre'];
    $password = $_POST['clave'];
    $email = $_POST['email'];
    $cont = 0;

    if($password  == "" && $nombre == "" && $email==""){
        echo '<style>#Regis{opacity:1;}</style>Todos los campos deben estar llenos';
    }else{
        echo '<style>#Regis{opacity:1;}</style>';
        foreach($resultado as $row){
            if($row['correo'] == $email){
                echo "El correo ya ha sido registrado<br>";
                $cont++;
            }
        }
        if (strlen($password) < 7) {
            echo "El campo Contraseña no puede estar vacio,<br>";
            echo "ni tener menos de 6 caracteres.<br>";
            $cont++;
        }
        if ($cont > 0){        
            echo "El usuario no ha sido registrado";
        }else{
            //$sql = $con->query("INSERT into usuarios (nombre,correo,contraseña)values('$nombre','$email','$password')");
            //echo '<style> #regis{opacity: 1;}</style>Usuario Registrado';
            $_SESSION['nombre'] = $nombre;
            $_SESSION['correo'] = $email;
            $_SESSION['contra'] = $password;
            echo '<style>#Regis{opacity:0;}</style><script>location.href="confirmacion.php";</script>';
        }
    }
?>