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
<div class="loaded"><img width="100%" height="100%" src="GIF/Comp1.gif" alt=""></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <div class="model-container2" id="modal_container2">
        <div class="modal2">
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
            <button class="btn-p" name="Cerrar" value="Enviar" >Cerrar Sesion</button>
            </form>
            <!--<button class="btn-p" id="closes">Cerrar</button>-->
        </div>
    </div>
    <div class="nav-lab" id="menuDe"></div>
    <div class="display" id="display"><i class="ri-bar-chart-horizontal-line barras"></i></div>
    <form action="" class="buscar_cont" id="buscar_bar">
            <input type="search" placeholder="Busqueda" class="buscar_in">
            <div class="buscar_boton" id="buscar_boton">
                <i class="ri-search-2-line search_icon"></i>
                <i class="ri-close-line search_close"></i>
            </div>
    </form>  
    <nav id="nav">
        <img src="Img/cisteam_aguila.png" alt=""  class="logo">
        <a href="#" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>    
        Inicio
        </a>
        <a href="#" class="btn-neon">Nosotros
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        </a>        
        <a href="#" class="btn-neon">Servicios
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        </a>
        <a href="#" class="btn-neon">Contacto
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        </a>
        <a href="#" class="btn-neon">Clientes
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        </a> 
       <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {     
                echo '<div class="nombreUS">';
                echo $_SESSION['nombre'];
                echo '</div>';            
                echo "<div class='user'id='hola'><img src='Img/user.jpg' class='user_logo'></div>";
            }
        ?>        
        <i class="ri-close-line cerrar1" id="cerar1"></i>   
    </nav>
    <main>
    <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {     
              require("includes/portafolio.php");
            }else{
                require("includes/login2.php");
            }
    ?> 
    </main>
    <script src="JS/nav.js"></script>
            <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {
                echo "<script src='JS/script2.js'></script>";
            }
            ?>
</body>

<footer>
<div class="Interes">
<ul>
    <h4>Paginas</h4>
    <li>Inicio</li>
    <li>Nosotros</li>
</ul>
</div>
<div class="Interes">
<ul>
    <h4 style="opacity:0;">s</h4>  
    <li>Servicios</li>
    <li>Clientes</li>
</ul>
</div>
<div class="contactos">
<ul>
    <h4>Contactanos</h4>
    <li>Hola</li>
    <li>ADIOS</li>
</ul>
</div>
<div class="direccion">
<ul>
    <h4>Dirrecion</h4>
    <li>Hola</li>
    <li>ADIOS</li>
</ul>
</div>
</footer>
<div class="foo">2023 @CISTEAM</div>
<!--<script type="text/javascript">
    window.addEventListener("scroll",function(){
        var div=document.querySelector("div.card");        
        div.classList.toggle("abajoServ",window.scrollY>600);
    })
</script>-->
<script src="JS/vids.js"></script>

</html>