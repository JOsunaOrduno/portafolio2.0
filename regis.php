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
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/portafolio.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/login2.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>
<div class="loaded"><img width="100%" height="100%" src="GIF/Comp1.gif" alt=""></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        <i class="ri-close-line cerrar1" id="cerar1"></i>   
    </nav>

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
                    <label  class="Noti" id="Regis"></label>
                    <button type="submit" id="registrar">Registrarse</button>
                    <div class="register"><p>Ya tienes cuenta<a href="index.php"> Ingresa</a></p></div>
                    <script>
                            $( "#registrar" ).click(function() {
                            Registrar(document.getElementById('nombreC').value,document.getElementById('emailC').value,document.getElementById('claveC').value);                        
                            });
                            function Registrar(nombre,user, pass){
                            $.ajax({
                                url: 'NuevoUsu.php',
                                type: 'POST',
                                data: 'nombre='+nombre+'&email='+user+'&clave='+pass,
                                success: function(resp){
                                    $('#Regis').html(resp);
                                },
                            });}
                        </script>
                </form>
            </div>
        </DIV>
    </div>
    </main>

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
    <script src="JS/nav.js"></script>
</body>



</html>