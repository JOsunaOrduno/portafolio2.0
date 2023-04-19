<?php
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function generate_string($input, $strength = 16) {
     $input_length = strlen($input);
     $random_string = '';
     for($i = 0; $i < $strength; $i++) {
         $random_character = $input[mt_rand(0, $input_length - 1)];
         $random_string .= $random_character;
         }
     return $random_string;
    }
    $hola= generate_string($permitted_chars, 20);
    $nombre = "Pedro Quiroz";
    $correo ="pedro_q_s45@hotmail.com";
    require("includes/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->From="pedro@cisteam.com.mx";    // Correo Electronico para SMTP
            // Datos del servidor SMTP
    $mail->IsSMTP(); 									
    $mail->Host = "cisteam.com.mx";  // mail. o solo dominio - Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "pedro@cisteam.com.mx";  // Correo Electrónico para SMTP
    $mail->Password = "200412771Pedro"; // Contraseña para SMTP
    $mail->FromName = $nombre; 
    $mail->AddAddress($correo); // Dirección a la que llegaran los mensajes.
    $mensaje =       "Utilizalos para Logearte en nuestra pagina. \n<br />www.cisteam.com.mx/RPS";
    // Aquí van los datos que apareceran en el correo que reciba
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Bienvenido al Portafolio de Presentacion.";
    $mail->Body     = "Este es un correo de confirmacion para verificar los datas de usarios.\n<br />n<br /> ".
                    "Tu usuario y contraseña son vitales para tu inicio de sesion en nuestro sitio.\n<br /> ".
                    "Nombre: 	$nombre \n<br />".
                    "Usuario: 	 \n<br />".
                    "Password: 	 \n<br />\n<br />".
                    "Si los datos de usuarios son correctos, utiliza el siguiente codigo registrar tu usuario\n<br />\n<br />".
                    "$hola\n<br />";
                    
    if ($mail->Send())
    {
        echo $correo;
        echo "Correo Enviado";				
    }	
    else 
    echo "Menaje enviado";
?>