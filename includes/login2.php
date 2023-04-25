

<div class="login-cont">
    <div class="letras">Bienvenido a Ciste@m</div>
        <DIV class="form-box">
            <div class="form-value">
                <form method="POST" action="return false" onsubmit="return false">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="usuario" id="usuario" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password"  name="clave" id="clave" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label class="Noti" id="Ing">   
                </div>
                <button value="Enviar" id="enviar">Ingresa</button>
                <div class="register"><p>No tienes cuenta<a href="regis.php"> Registrate</a></p></div>
                <script>
                            $( "#enviar" ).click(function() {
                            Validar(document.getElementById('usuario').value,document.getElementById('clave').value);                        
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
                        </script>
            </form>
            </div>
        </DIV>
    </div>