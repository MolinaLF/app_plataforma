<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,300&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b9ca42581.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>



<!-- navegacion reponsibe  -->
<nav>
    <div class="nav">
        <img class="extension" src="imagenes/iconos/icon_menu.svg" alt="">
        <div class="nav_left">
            <img class="logo" src="imagenes/logos/logo_bota_fora.svg" alt="">
            <ul class="nav_items_link">
               <li><a  href="#">INICIO</a></li>
                <li><a  href="login.php">Login</a></li>
                <li><a  href="registro.php">Registro</a></li>
            </ul>
            
        </div>

        <div class="nav_right">
            <ul>
                <li style="color: #C7C7C7 ; font-size: 17px;"></li>
                <img class="flechita" src="../imagenes/iconos/flechita.svg" alt="">
            </ul>
        </div>
    

        <div class="desktop-menu  desktop__menu--remove">
            <ul>
                <li><a href="/" class="asignacion">my order</a></li>
                <li><a href="/" class="asignacion">my account</a></li>
                <hr>
                <li><a href="/" class="title">sing unp</a></li>
            </ul>
        </div>
        
    </div>

    <div class="plo">
        <div class="mobil__menu  mobil__menu--remove">

            <ul class="mobil_items_link">
                <li class="mobil_items"><a class="mobil_link" href="/">restaurante</a></li>
                <li class="mobil_items"><a class="mobil_link" href="/">playas</a></li>
                <li class="mobil_items"><a class="mobil_link" href="/">discoteca</a></li>
            </ul>
            <ul lclass="mobil_items_link">
                <li class="mobil_items my--orde"><a class="mobil_link" href="#">my orderns</a></li>
                <li class="mobil_items my--orde"><a class="mobil_link" href="#">my accounts</a></li>
            </ul>
        
            <ul class="informacion__" style="position: absolute; bottom: 10px;">
                <li class="info"><a class="email" href="#"></a>
                </li>
                <li class="info"><a class="sign-out" href="#">sing out</a></li>
            </ul>
        </div>
    </div>
</nav>

 <!-- main -->
<main class="llamar">
 <section class="slider">
    
    <input type="radio" name="image-slider" id="sld-1" hidden>
    <input type="radio" name="image-slider" id="sld-2" hidden>
    <input type="radio" name="image-slider" id="sld-3" hidden>
    <input type="radio" name="image-slider" id="sld-4" hidden>
    
    <ul class="menu">
        <li><img class="slider-item" src="imagenes/slider/slider1.jpg"></li>
        <li><img class="slider-item" src="imagenes/slider/slider2.jpg"></li>
        <li><img class="slider-item" src="imagenes/slider/slider3.jpg"></li>
        <li><img class="slider-item" src="imagenes/slider/slider4.jpg"></li>     
    </ul>

    <div class="pagination-slider">
        <label class="pagination-slider__item" for="sld-1">
            <img class="slider-img" src="../imagenes/slider/slider1.jpg">
        </label>
        <label class="pagination-slider__item" for="sld-2">
            <img class="slider-img" src="../imagenes/slider/slider2.jpg">
        </label>
        <label class="pagination-slider__item" for="sld-3">
            <img class="slider-img" src="../imagenes/slider/slider3.jpg">
        </label>
        <label class="pagination-slider__item" for="sld-4">
            <img  class="slider-img" src="../imagenes/slider/slider4.jpg">
        </label>
    </div>

</section>

<section class="section__informacion">
    <div class="frase">
        <h3>Vive la aventura de vivir tu vida como tu quieras confia en nuestro planes de turismo</h3>
    </div>
    <div class="frase__imagen">
        <img src="https://www.eluniverso.com/resizer/EQATwn4PR30WCHwF0m8Zu9mFu-o=/639x427/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/4PTVUUGTPVEBZCEJCLTWUONKCI.jpg" alt="">
    </div>
</section>


<section class="section__informacion">

    <div class="tours__informacion tours__imagen--piura">
        <div>
        <p>texto de piura</p>
        <p> $ 100</p>
        </div>
    </div>

    <div class="tours__informacion tours__imagen--arequipa">
        <div>
        <p>texto de arequipa</p>
        <p> $ 100</p>
        </div>
    </div>

    <div class="tours__informacion tours__imagen--puno">
        <div>
        <p>texto de puno</p>
        <p> $ 100</p>
        </div>
    </div>

    <div class="tours__informacion tours__imagen--cuzco">
        <div>
        <p>texto de cuzco</p>
        <p> $ 100</p>
        </div>
    </div>
</section>
</main>
<!--*************************** FOOTER *******************************************-->

<footer id="footer" class="footer footer_activo">
    <div class="contenedor">
            <div class="nav-footer">
                <h3 class="titulo-footer">MiViaje.com</h3>
                <nav class="menu">
                    <a href="#">Empleo</a>
                    <a href="#">Prensa</a>
                    <a href="#">Politicas</a>
                    <a href="#">Ayuda</a>
                </nav>
            </div>

            <div class="nav-footer">
                <h3 class="titulo-footer">Descubre MiViaje.com</h3>
                <nav class="menu">
                    <a href="#">Confianza y Seguridad</a>
                    <a href="#">Crédito de Viajero</a>
                    <a href="#">AirBNB Citizen</a>
                    <a href="#">Viaje de negocios</a>
                </nav>
            </div>

            <div class="nav-footer">
                <h3 class="titulo-footer">Hospedaje</h3>
                <nav class="menu">
                    <a href="#">Razones para Hospedar</a>
                    <a href="#">Hospitalidad</a>
                    <a href="#">Ser un anfitrión responsable</a>
                    <a href="#">Centro de la Comunidad</a>
                </nav>
            </div>

            <div class="nav-footer">
                <div class="navegacion-imagenes">
                    <h4>visitanos en:</h4>
                    <div class="twiter">
                       <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    </div>
                    <div class="twiter">
                       <a href="#"><i class="fa-brands fa-youtube fa-2x"></i></a>
                    </div>
                    <div class="twiter">
                       <a href="#"><i class="fa-brands fa-discord fa-2x"></i></a>
                    </div>
       
                    <div class="twiter">
                       <a href="#"><i class="fa-brands fa-github  fa-2x"></i></a>
                    </div>
                    <div class="twiter">
                       <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    </div>
            </div>
    </div>
</footer>
<a href="#footer" class="btn-flotante" style="background-color: #fff;">Mas informacion</a>
<script src="interaccion/nuevoboton.js"></script>
<script src="interaccion/slider.js"></script>
</body>
</html>