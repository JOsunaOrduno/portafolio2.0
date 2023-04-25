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
                echo '<div class="nombreUS">';
                echo $_SESSION['nombre'];
                echo '</div>';            
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
                    <div class="video" id="Interface"></div>
                    <div class="desc">
                        <span class="closeD">&times;</span>
                        <h1>Interface</h1>
                        <p>
                            El cliente requiere una interfaz para el control de ventas 
                            de boletos, busca conocer el tipo de cliente que frecuenta 
                            mayormente el museo, clasificando entre, hombres, mujeres y 
                            niños de distintas edades, cantidades y suma para finalmente 
                            emitir los tickets de acceso al museo. La interfaz se hace con 
                            requerimientos de diseño a medida del cliente.
                        </p>
                    </div>
                    <!--<div class="text">Caption Text</div>-->
                </div>

                <div class="mySlides fade">
                    <div class="video" id="Inventario"></div>
                    <div class="desc">
                        <span class="closeD">&times;</span>
                        <h1>Inventario</h1>
                        <p>
                            Se crea software especializado para la emisión de etiquetas para 
                            el control de inventario, estas llevarán datos del producto así como nombre 
                            del responsable en turno de la generación de las mismas, la etiqueta se pega 
                            en el paquete del producto y lleva un código de barras que ayuda a identificarlo.
                        </p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="video" id="GPS"></div>
                    <div class="desc">
                        <span class="closeD">&times;</span>
                        <h1>GPS</h1>
                        <p>
                            El cliente necesita saber que los vehículos que asignan
                            para sus funciones comerciales no sean utilizados de 
                            manera incorrecta, además de conocer la eficiencia de los 
                            servicios realizados con respecto al gasto que esto implica, 
                            ventas realizadas y control de las ubicaciones de sus equipos de transporte.

                        </p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="video" id="Etiquetado"></div>
                    <div class="desc">
                        <span class="closeD">&times;</span>
                        <h1>Etiquetado</h1>
                        <p>      
                            El cliente necesita tener control sobre el producto terminado para 
                            llevar un inventario más eficiente y evitar duplicado de pedidos. 
                            Por lo que con el desarrollo de un software especializado que 
                            lleva enlace entre un escáner de código de barras, 
                            se resuelven las situaciones mencionadas del cliente.
                        </p>
                    </div>
                </div>

                <a class="prev" id="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" id="next" onclick="plusSlides(1)">❯</a>

            </div>

            <br>
            
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
            </div>
        </section>

            <!-- Contenedor de las tarjetas -->
        <div class="tarjetas">
            <div class = "container2">
                <!--Primer tarjeta-->
                <div class = "card">
                    <h1>MISION</h1>
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
                    <h1>VISION</h1>
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

        <div id="valores">
            <h2>Valores</h2>
            <img src="GIF/planetsVal_.gif" alt="">
            
        </div>
        <div id="final">
            <div id = "clientes">
                <img src="Img/clientes_.gif" alt="">
            </div>
            <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.6871448073616!2d-98.21527652409351!3d19.077488151924463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc14836897bf5%3A0x8e37c6811a1805aa!2sRoble%2072%2C%20Jes%C3%BAs%20Gonz%C3%A1lez%20Ortega%2C%2072040%20Puebla%2C%20Pue.!5e0!3m2!1sen!2smx!4v1682402513641!5m2!1sen!2smx" style="border:0; border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div>
           

                                
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

<footer>
    <div class="Interes">
    <ul>
        <h4>Paginas</h4>
        <li>Hola</li>
        <li>ADIOS</li>
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
<script type="text/javascript">
    window.addEventListener("scroll",function(){
        var div=document.querySelector("div.card");        
        div.classList.toggle("abajoServ",window.scrollY>600);
    })
</script>
<script src="JS/vids.js"></script>

</html>