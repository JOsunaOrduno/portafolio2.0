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
    <!--<link rel="stylesheet" href="CSS/Estilos.css">-->
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/modal.css">
    <link rel="stylesheet" href="CSS/modal2.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/portafolio.css">
    <link rel="stylesheet" href="CSS/slider.css">
    <link rel="stylesheet" href="CSS/card.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/login2.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>
<div class="loaded"><video src="GIF/logopixel3.mp4"  autoplay muted></video></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <div class="model-container2" id="modal_container2">
        <div class="modal2" id="modal2">
            <span id="closes" class="close">&times;</span>
            <form  action="cerrarS.php" method="POST">
            <div class='UserC'><img src='Img/user.jpg' class='modal2_user'></div>
            <h1>Bienvenid@ a CISTEAM</h1>
            <p><?php 
            if (isset($_SESSION['correo'])) 
            echo $_SESSION['correo'];
            echo "<br>";
            if (isset($_SESSION['nombre'])) 
            echo $_SESSION['nombre'];
            ?>
            </p>
            <button class="btn-p" ><i class="ri-arrow-down-circle-line dowlong"></i>Descargar Contenido</button><br>
            <div class="btn-cont" id="cont" >Contactanos</div>
            <button class="btn-p" name="Cerrar" value="Enviar" >Cerrar Sesion</button>
            </form>
            <!--<button class="btn-p" id="closes">Cerrar</button>-->
        </div>
        <div class="formContac" id="formContac">
            <span id="closes1" class="close1">&times;</span>
            <form method="POST" action="return false" onsubmit="return false">
                <label for="">Ingrese su nombre</label><br>
                <input type="text" class="datos" id="nombreCons"><br>
                <label for="">Ingrese correo con el nos podamos contactar</label><br>
                <input type="text" class="datos" id="correoCons"><br>
                <label for="">Ingrese su telefono</label><br>
                <input type="text" class="datos" id="telefonoCons"><br>
                <label for="">Descripcion del proyecto que quiere realizar</label><br>
                <input type="text" class="descipt" id="temaCons"><br>
                <div style="display:flex;">
                    <button class="btn" id="consultar">Enviar formulario</button>
                    <div class="infoCons" id="infoCons"></div>
                </div>
                
            </form>
            <script>
                $( "#consultar" ).click(function() {
                Validar(document.getElementById('nombreCons').value,document.getElementById('correoCons').value,document.getElementById('telefonoCons').value,document.getElementById('temaCons').value);                        
                });
                function Validar(nombre, correo, telefono, tema){
                    $.ajax({
                        url: 'cont.php',
                        type: 'POST',
                        data: 'nombre='+nombre+'&correo='+correo+'&telefono='+telefono+'&tema='+tema,
                        success: function(resp){
                        $('#infoCons').html(resp);
                    },
                });}
                </script>
        </div>
    </div>
    <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {     
              require("includes/nav.php");
            }
    ?> 
    <main>
    <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {     
              require("includes/portafolio.php");
            }else{
                require("includes/login2.php");
            }
    ?> 
    </main>
    <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {     
              require("includes/footer.php");
            }
    ?> 
    <script src="JS/nav.js"></script>
            <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {
                echo "<script src='JS/script2.js'></script>";
            }
            ?>
</body>

<!--<script type="text/javascript">
    window.addEventListener("scroll",function(){
        var div=document.querySelector("div.card");        
        div.classList.toggle("abajoServ",window.scrollY>600);
    })
</script>-->
<script src="JS/vids.js"></script>

</html>