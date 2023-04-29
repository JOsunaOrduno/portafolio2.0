<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Oswald:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Titillium Web" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="shortcut icon" href="Img/LogoMini.png" type="image/x-icon">
    <!--<link rel="stylesheet" href="CSS/Estilos.css">-->
    <link rel="stylesheet" href="CSS/confirmacion.css">
    <link rel="stylesheet" href="CSS/portafolio.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>
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
        $CODIGO = generate_string($permitted_chars, 10);
        $_SESSION['codeee']=$CODIGO;
        $nombre = $_SESSION['nombre'];
        $correo = $_SESSION['correo'];
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
        $mail->AddAddress($correo); // Dirección a la que llegaran los mensajes.
        $mensaje =       "Utilizalos para Logearte en nuestra pagina. \n<br />www.cisteam.com.mx/RPS";
        // Aquí van los datos que apareceran en el correo que reciba
        $mail->WordWrap = 50; 
        $mail->IsHTML(true);  
        $mail->Subject  =  "Bienvenido al Portafolio de Presentacion.";
        $mail->Body     = "Este es un correo de confirmacion para verificar los datas de usarios.\n<br /><br /> ".
                    "Tu usuario y contrasena son vitales para tu inicio de sesion en nuestro sitio.\n<br /> ".
                    "Nombre: 	$nombre \n<br />".
                    "Correo: 	$correo\n<br />".
                    "Password: 	 ******\n<br />\n<br />".
                    "Si los datos de usuarios son correctos, utiliza el siguiente codigo registrar tu usuario\n<br />\n<br />".
                    "$CODIGO\n<br />";       
        $mail->Send()                
        ?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div class="model-container2" id="modal_container2">
        <div class="modal2">
            <h3>CONFIRMACIÓN DE USUARIO</h1>
            <p>Proceso de autentificación. <br> Se ha enviado un correo con un código de confirmación al correo que utilizo para realizar el 
            registro. <br></p>
            <form method="POST" action="return false" onsubmit="return false">
                <input type="text" class="codigo" id="codigo" value="">
                <?php ?>
                <br> <div class="error" id="error">Error</div> <br>
                <br>
                <button class="confirmacion" id="confirma">Confirmar</button>
                <br>
                <a href="confirmacion.php" class="link" id="ild">Volver a enviar el correo de confirmacion</a>
            </form>
            <script>
            $( "#confirma" ).click(function() {
                confirmar(document.getElementById('codigo').value);                        
                });
                function confirmar(numero){
                    $.ajax({
                    url: 'registrar.php',
                    type: 'POST',
                    data: 'codigo='+numero,
                    success: function(resp){
                    $('#error').html(resp);
                    },
                    });}
                    
            </script>
        </div>
    </div>
</body>
</html>