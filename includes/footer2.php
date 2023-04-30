<footer id="FooterMain">
<div class="iconCont">
    <i class="ri-map-2-line icon-fote" id="map2"></i>
    <i class="ri-customer-service-2-line icon-fote" id="cntar"></i>
    <i class="ri-pages-fill icon-fote" id="pag2"></i>
</div>

<div class="foterCont">
    <div class="foo-sect concta2" id="concta2"> 
        <div class="texto1"> 
            <ul>
            <li><h4>Contactanos</h4></li>
            <li>Email</li>
            <li>administracion@cisteam.com.mx</li>
            <li>Contacto</li>
            <li>2222 0084 67 </li>
            </ul>
        </div>
        <div class="form"> 
                <form method="POST" action="return false" onsubmit="return false">
                <div style="display:flex;">
                        <label for="">Ingrese su nombre</label>
                        <input type="text"  id="nombreCons">
                        <label for="">Ingrese su correo</label>
                        <input type="text"  id="correoCons">
                        <div class="btn-foo" id="consultar"><i class="ri-mail-send-line iconcont"></i><div class="btn-tex-cont">Enviar formulario</div></div>
                </div>
                <div style="display:flex;">
                    <input type="text" id="temaCons" placeholder="Ingrese la descripcion de su proyecto"><br>
                    <div id="infoCons"></div>
                </div>
                
            </form>
            <script>
                $( "#consultar" ).click(function() {
                sendForm(document.getElementById('nombreCons').value,document.getElementById('correoCons').value,document.getElementById('temaCons').value);                        
                });
                function sendForm(nombre, correo, tema){
                    $.ajax({
                        url: 'cont.php',
                        type: 'POST',
                        data: 'nombre='+nombre+'&correo='+correo+'&tema='+tema,
                        success: function(resp){
                        $('#infoCons').html(resp);
                    },
                });}
                </script>
        </div>
    </div>

    <div class="foo-sect dired" id="map-fot">
        <div class="texto1"> 
            <ul>
                <li><h4>Dirreción</h4></li>
                <li>Dirección - Calle Roble #72 Col.2a sección González Ortega Puebla, Pue.</li>
                <li>C.P. 72040</li>
                <li>Régimen - Régimen General de Ley de Personas Morales</li>
            </ul>
        </div>
        <iframe class="maps" id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.6871448073616!2d-98.21527652409351!3d19.077488151924463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc14836897bf5%3A0x8e37c6811a1805aa!2sRoble%2072%2C%20Jes%C3%BAs%20Gonz%C3%A1lez%20Ortega%2C%2072040%20Puebla%2C%20Pue.!5e0!3m2!1sen!2smx!4v1682402513641!5m2!1sen!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
    </div>

    <div class="foo-sect pag" id='pagls'> 
        <div class="paginas">
                <div class="title">Inicio</div>
                <div class="title">Nosotros</div>
                <div class="title">Servicios</div>
                <div class="title">Clientes</div>
            </ul>
        </div>
    </div>
</div>
<script src="JS/footer.js"></script>
</footer>
<div class="foo">2023 @CISTEAM</div>