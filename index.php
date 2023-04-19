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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>
<div class="loaded"><img width="100%" height="100%" src="GIF/Comp1.gif" alt=""></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id = "close1">&times;</span>
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form method="POST" action="return false" onsubmit="return false">
                        <h1>Crear cuenta</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"><img src="Img/Tlogo.png" alt="Twitter logo"></i></a>
                        </div>
                        <span>O ingrese correo para el registro</span>
                        <input type="text" name="nombre" id="nombreC" placeholder="Nombre" />
                        <input type="email" name="email"  id="emailC" placeholder="Correo" />
                        <input type="password" name="clave"  id="claveC" placeholder="Contraseña" />
                        <button type="submit" id="registrar">Registrarse</button>
                        <label  class="Noti" id="Regis"></label>
                    </form>
                </div>
                
                <div class="form-container sign-in-container">
                    <form method="POST" action="return false" onsubmit="return false">
                        <h1>Iniciar sesion</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"><img src="Img/Tlogo.png" alt="Twitter logo"></i></a>
                        </div>
                        <span>O ingrese tu cuenta</span>
                        <input type="email" name="usuario" id="usuario" placeholder="Correo" />
                        <input type="password" name="clave" id="clave" placeholder="Contraseña" />
                        <button type="submit" class="btn boton" value="Enviar" id="enviar">Iniciar sesion</button>
                        <label class="Noti" id="Ing">
                        <script>
                            $( "#enviar" ).click(function() {
                            Validar(document.getElementById('usuario').value,document.getElementById('clave').value);                        
                            });
                            $( "#registrar" ).click(function() {
                            Registrar(document.getElementById('nombreC').value,document.getElementById('emailC').value,document.getElementById('claveC').value);                        
                            });
                            function Validar(user, pass){
                            $.ajax({
                                url: 'verificacion.php',
                                type: 'POST',
                                data: 'usuario='+user+'&clave='+pass,
                                success: function(resp){
                                    $('#Ing').html(resp);
                                },
                            });}
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
                        </label>
                    </form>
                    <a href="#">Olvido su contraseña?</a>        
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Mucho gusto!</h1>
                            <p>Ingresa tus datos personales para unirte a nosotros</p>
                            <button class="ghost" id="signIn">Iniciar sesion</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Bienvenido de vuelta!</h1>
                            <p>Para conectarte, inicia sesion con tus datos personales</p>
                            
                            <button class="ghost" id="signUp">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <input type="search" placeholder="type something..." class="buscar_in">
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
                echo "<div class='user'id='hola'><img src='Img/user.jpg' class='user_logo'></div>";
            }else{
                echo "<div class='user' id='myBtn'><i class='ri-map-pin-user-fill serach_user'></i></div>"; 
            }
        ?>
        <i class="ri-close-line cerrar1" id="cerar1"></i>   
    </nav>
 
    <main>
        <section id="videos">      
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="video" id="video1"></div>
                    <div class="desc">
                        <h1>TITULO 1</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            At cum porro, delectus quaerat, similique quo nam dolorem facere accusantium beatae 
                            nihil quam enim natus doloribus vel eveniet dignissimos ullam molestiae?
                        </p>
                    </div>
                    <!--<div class="text">Caption Text</div>-->
                </div>
                
                <div class="mySlides fade">
                    <div class="video" id="video2"></div>
                    <div class="desc">
                        <h1>TITULO 2</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            At cum porro, delectus quaerat, similique quo nam dolorem facere accusantium beatae 
                            nihil quam enim natus doloribus vel eveniet dignissimos ullam molestiae?
                        </p>
                    </div>
                </div>
                
                <div class="mySlides fade">
                    <div class="video" id="video3"></div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                
            </div>

            <br>
            
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            <script src="JS/vids.js"></script>
        </section>  
            <!-- Contenedor de las tarjetas -->
        <div class="tarjetas">
            <div class = "container2">
                <!--Primer tarjeta-->
                <div class = "card">
                    <!--Contenido de la tarjeta, se puede cambiar el texto o la imagen sin problema -->
                    <div class="content">
                        <h2>Mision</h2>
                        <p>
                            Difundir la tecnología sus beneficios y usos a cada hogar, 
                            negocio y empresa con el tacto y profesionalidad que permitirán a cada uno 
                            de nuestros clientes asimilarla y disfrutar de ella.     
                        </p>
                    </div>
                    <img src="Img/misión1.png" class="imgmision">
                </div>
        
                <div class = "card">
                    <div class="content">
                        <h2>Vision</h2>
                        <p>
                            Mejorar el estilo de vida de nuestros 
                            clientes mediante el tacto, profesionalismo, 
                            tecnología & seguimiento necesarios. Logrando
                            Consolidar nuestra empresa como 
                            líder en inovación & difución tecnológica.
                        </p>
                    </div>
                    <img src="Img/visión1.png">
                </div>
        
            </div>
        </div>

        <section id ="valores" class="valor">
            <h2>Valores</h2>
            <img src="GIF/planetsVal_.gif" alt="">
        </section>

        <section id="clientes">
            <h2>Clientes</h2>
            <img src="Img/clientes_.gif" alt="">
        </section>

                                
    </main>
    <script src="JS/nav.js"></script>
            <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {
                echo "<script src='JS/script2.js'></script>";
            }else{
                echo "<script src='JS/script.js'></script> <!--FUNCIONES JS-->";
            }
            ?>
</body>

<script type="text/javascript">
    window.addEventListener("scroll",function(){
        var div=document.querySelector("div.card");        
        div.classList.toggle("abajoServ",window.scrollY>600);
    })
</script>

</html>