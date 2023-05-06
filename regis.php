<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&family=Kodchasan&family=Oswald:wght@200&display=swap" rel="stylesheet">
<head>
<script type="text/javascript" id="www-widgetapi-script" src="https://www.youtube.com/s/player/36754c51/www-widgetapi.vflset/www-widgetapi.js" async="">
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="shortcut icon" href="Img/LogoMini.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/portafolio.css">
    <link rel="stylesheet" href="CSS/login2.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>
<div class="loaded"><video src="GIF/pixelLogo2.mp4"  autoplay muted></video></div>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<main>
<div class="login-cont">
    <div class="letras" style="margin-top:80px;">Bienvenido a Ciste@m</div>
        <DIV class="form-regis-box">
            <div class="form-value">
                <form method="POST" action="return false" onsubmit="return false">
                    <h2>Registro</h2>
                    <label for="">Ingresa su nombre</label><br>
                    <input type="text" name="nombre" id="nombreC" placeholder="Nombre" /><br>
                    <label for="">Ingresa su correo</label><br>
                    <input type="email" name="email"  id="emailC" placeholder="Correo" /><br>
                    <label for="">Ingresa su contraseña</label><br>
                    <input type="password" name="clave"  id="claveC" placeholder="Contraseña" /><br>
                    <div class="g-recaptcha" data-sitekey="6Ldfe-YlAAAAAO7L3ccN4FU-sgoFcx4j-4WBOyRg"></div>
                </form>
            </div>
            <label  class="Noti" id="Regis"></label>
            <button type="submit" id="registrar">Registrarse</button>
            <div class="register"><p>Ya tienes cuenta<a href="index.php"> Ingresa</a></p></div>
            
        </DIV>
</div>
<div class="contenedor_espera" id="mostraEsp">
    <div class="mensaje">
        Sus datos han sido registrados.<br>
        Su solicitud sera revisada en la brevedad por un responsable.<br>
        Porfavor mantenerse al tanto de su correo para obtener una confirmación de ingreso.
    </div>
        <div class="loader">
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
        </div>
    <button onclick="window.location.href='index.php';">Regresar al login</button>
</div>
</main>
            
            <script>
                    var xdd = document.getElementById('mostraEsp');
                    $( "#registrar" ).click(function() {
                        Registrar(document.getElementById('nombreC').value,document.getElementById('emailC').value,document.getElementById('claveC').value);                        
                    });
                    function Registrar(nombre,user, pass,cat){
                        $.ajax({
                            url: 'NuevoUsu.php',
                            type: 'POST',
                            data: 'nombre='+nombre+'&email='+user+'&clave='+pass+'&g-recaptcha-response='+grecaptcha.getResponse(),
                            success: function(resp){
                             
                             if(resp == '<style>#Regis{opacity:1;}</style>Luzverde'){
                                document.getElementById('nombreC').value = '';
                                document.getElementById('emailC').value = '';
                                document.getElementById('claveC').value = '';
                                xdd.classList.add('showSDASDASD');
                             }else{
                                $('#Regis').html(resp);
                             }
                            },
                        });
                    
                    }; 
            </script>

</body>
</html>