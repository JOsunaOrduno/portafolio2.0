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