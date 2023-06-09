
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                <span class="closeO">&times;</span>
                <h1>Equipo Cisteam</h1>
                </div>
                <div class="modal-body">
                    <img src="GIF/organigrama.gif" alt="">
                </div>
            </div>
        </div>
        
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

                <div class="mySlides fade">
                    <div class="video" id="SICOINReporte"></div>
                    <div class="desc">
                        <span class="closeD">&times;</span>
                        <h1>Sicoin Reporte</h1>
                        <p>      
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente 
                            laboriosam ipsa quasi totam saepe deserunt illo fugiat officiis distinctio
                             consequuntur quae expedita odio quibusdam vitae earum, facere dolorem, enim non.
                        </p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="video" id="SICOINLogistica"></div>
                    <div class="desc">
                        <span class="closeD">&times;</span>
                        <h1>Sicoin Logistica</h1>
                        <p>      
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Maxime illum molestiae consequatur blanditiis molestias quos dignissimos adipisci necessitatibus 
                            laborum. Nulla quos veniam molestias numquam distinctio ipsam explicabo accusamus fuga odit.
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
                <span class="dot" onclick="currentSlide(5)"></span> 
                <span class="dot" onclick="currentSlide(6)"></span> 
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

        <div class="tarjetas" id="TARJETAS2">
            <div class = "container2">
                <!--Primer tarjeta-->
                <div class = "card">
                    <h1>ORGANIGRAMA</h1>
                    <!--Contenido de la tarjeta, se puede cambiar el texto o la imagen sin problema -->
                    <div class="content">
                        <a id="orgBtn"><div  class="cardBtns">Organigrama</div></a>
                    </div>
                    <img src="Img/organim.png" class="imgmision">
                </div>
        
                <div class = "card">
                    <h1>DATOS</h1>
                    <div class="content">
                        <a download="REQUISITOS" href="dowlog/REQUISITOS.zip"><div  class="cardBtns">Datos del proveedor</div></a>
                    </div>
                    <img src="Img/datosprov.png">
                </div>
                
                
            </div>
        </div>

        <!--Planeta de los valores centrado para el circulo -->
        <div id="circulo">
            <div id="valor">
                <h2>Valores</h2>
                <img src="GIF/valoresNav.gif" alt="">
            </div>
            <!--<div id="organiImagen"><img src="GIF/organigrama.gif" id="org" alt=""></div>-->
        </div>
        <div id="final">
            <div id = "clientes">
                <img src="Img/clientes_.gif" alt="">
            </div>
            <!--<div id="organigrama">organigrama</div>-->
        </div>