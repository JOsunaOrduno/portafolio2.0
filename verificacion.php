<?php 
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$campo = array();

require 'database.php';
$db = new Database;
$con = $db->conectar();
$sql = $con ->prepare("SELECT nombre, correo, contraseña FROM usuarios");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

$message='';

foreach($resultado as $row){
    if($row['correo'] == $usuario && $row['correo'] != '' && $row['contraseña'] == $clave && $row['contraseña']!=''){
        $_SESSION['activo'] = 1;
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['correo'] = $row['correo'];
        $message = '<script>document.location.href="index.php";</script>';
        echo $_SESSION['activo'];
        break;
        //
    }else{
        $message = '<style>#Ing{opacity: 1;}</style>Usuario no comprobado';
    }
}

echo $message;    
?>