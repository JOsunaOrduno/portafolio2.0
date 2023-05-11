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

    <link rel="stylesheet" href="CSS/footer2.css">

    <link rel="stylesheet" href="CSS/login2.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    

</head>

<body>

<div class="loaded"><video src="GIF/pixelLogo2.mp4"  autoplay muted></video></div>

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

            <button class="btn-p" name="Cerrar" value="Enviar" >Cerrar Sesion</button>

            </form>

            <!--<button class="btn-p" id="closes">Cerrar</button>-->

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

              require("includes/footer2.php");

            }

    ?> 

    <script src="JS/nav.js"></script>
            <?php

            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {

                echo "<script src='JS/modals.js'></script>";

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