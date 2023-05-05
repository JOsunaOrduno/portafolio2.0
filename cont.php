<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tema = $_POST['tema'];

if($nombre!= "" && $correo!= "" && $tema != ""){
    echo "Solicitud Enviada";
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
    $mail->AddAddress("pedro_q_s45@hotmail.com");
    // Aquí van los datos que apareceran en el correo que reciba
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);  
    $mail->Subject  =  "Contacto del Usuario";
    $mail->Body     = "El usuario envio una solicitud de proyecto para ser analizada\n<br /><br /> ".
                "El usuario registro los siguientes datos.\n<br /> ".
                "Nombre: 	$nombre \n<br />".
                "Correo: 	$correo \n<br />".
                "Tema: 	            \n<br />\n<br />".
                "$tema              \n<br />\n<br />".
                "El usuario espera una contestacion con la confirmacion de su ingreso\n<br />\n<br />";       
    $mail->Send();
}else{
    echo "Todos los campos deben estar llenos";
}

?>
