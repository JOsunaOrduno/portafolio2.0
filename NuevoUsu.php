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

    if($password == "" || $nombre == "" || $email==""){
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
            echo "Contraseña Invalida<br>";

            $cont++;
        }
        if ($cont > 0){        
            echo "El usuario no ha sido registrado";
        }else{
            if($_POST['g-recaptcha-response']) {
                $captcha = $_POST['g-recaptcha-response'];
                $secret = "6Lc6n-olAAAAAIBz4t9-yQlUkorOzlqRpPShf4_M";
                $json = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret.'&response='.$captcha), true);
                if($json['success']) {
                    /*
                    $correo ="administracion@cisteam.com.mx";
                    echo 'Sus datos se han enviado<br> Su solicitud sera revisada por un responsable';
                    require("includes/class.phpmailer.php");
                    $mail = new PHPMailer();
                    $mail->From="pedro@cisteam.com.mx";    // Correo Electronico para SMTP
                            // Datos del servidor SMTP
                    $mail->IsSMTP(); 									
                    $mail->Host = "cisteam.com.mx";  // mail. o solo dominio - Servidor de Salida.
                    $mail->SMTPAuth = true; 
                    $mail->Username = "pedro@cisteam.com.mx";  // Correo Electrónico para SMTP
                    $mail->Password = "200412771Pedro"; // Contraseña para SMTP
                    $mail->FromName = "Cisteam-Portafolio"; 
                    $mail->AddAddress("administracion@cisteam.com.mx"); // Dirección a la que llegaran los mensajes.
                    $mail->AddAddress("facturacioncisteam@gmail.com");
                    // Aquí van los datos que apareceran en el correo que reciba
                    $mail->WordWrap = 50; 
                    $mail->IsHTML(true);  
                    $mail->Subject  =  "Solicitud de Nuevo Usuario.";
                    $mail->Body     = "Un nuevo usuario mando una solcitud para ingresar a la pagina\n<br /><br /> ".
                                "El usuario registro los siguientes datos.\n<br /> ".
                                "Nombre: 	$nombre \n<br />".
                                "Correo: 	$correo\n<br />".
                                "Password: 	$password\n<br />\n<br />".
                                "El usuario espera una contestacion con la confirmacion de su ingreso\n<br />\n<br />";       
                    $mail->Send();
                    */
                    echo "Luzverde";
                } else {
                    echo "Captacha Error";
                }
              }  else {
                  echo "Marcar el captacha";
              }
        }
    }
?>