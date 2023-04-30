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
        <a href="#FooterMain" class="btn-neon">Contacto
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