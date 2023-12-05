
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/7b9ca42581.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,300&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login1.css">
    <title>Login</title>
</head>
<body>
<nav>
<div class="nav">
        <img class="extension" src="imagenes/iconos/icon_menu.svg" alt="">
        <div class="nav_left">
            <img class="logo" src="imagenes/logos/logo_bota_fora.svg" alt="">
            <ul class="nav_items_link">
                <li><a  href="index.php">INICIO</a></li>
                <li><a  href="#">Login</a></li>
                <li><a  href="registro.php">Registro</a></li>
            </ul>
            
        </div>

        <div class="nav_right">
            <ul>
                <!-- <li style="color: #C7C7C7 ; font-size: 17px;">nombre@example.com</li> -->
                <img class="flechita" src="imagenes/iconos/flechita.svg" alt="">
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
        
            <ul class="informacion__" style="position: absolute; bottom:0">
            
                <li class="info"><a class="sign-out" href="#">sing out</a></li>
            </ul>
        </div>
    </div>
</nav>

<main  class="imagen__curva">
    <section class="contenedor__imagenes" style="background: linear-gradient(108deg ,#3DBCD9 ,#8DE8F2 , #F2EBD5);">
    <div class="imagenes__portadas">
        <div class="imagenes__paisaje">
            <!-- <img src="/imagenes/pexels-casia-charlie-2433467.jpg" alt=""> -->
            <img  class = "imagenes imagens--1">
            <i class="fa-sharp fa-regular fa-heart fa-2x"></i>    
        </div>

        <div class="imagenes__paisaje">
            <img  class = "imagenes imagens--2">
        <!-- <img  src="/imagenes/pexels-eberhard-grossgasteiger-1366919.jpg" alt=""> -->
        <i class="fa-sharp fa-regular fa-heart fa-2x"></i>  
        </div>

        <div class="imagenes__paisaje">
            <img  class = "imagenes imagens--3">
        <!-- <img  src="/imagenes/pexels-krivec-ales-547115.jpg" alt=""> -->
        <i class="fa-sharp fa-regular fa-heart fa-2x"></i>  
        </div>

        <div class="imagenes__paisaje">
            <img  class = "imagenes imagens--4">
        <i class="fa-sharp fa-regular fa-heart fa-2x"></i>  
        </div>

        <div class="imagenes__paisaje">
            <img  class = "imagenes imagens--5">
        <!-- <img  src="/imagenes/pexels-nextvoyage-1476880.jpg "alt=""> -->
        <i class="fa-sharp fa-regular fa-heart fa-2x"></i>  
        </div>

        <div class="imagenes__paisaje" >
            <img  class = "imagenes imagens--6">
        <!-- <img  src="/imagenes/pexels-marlon-martinez-1450082.jpg" alt=""> -->
        <i class="fa-sharp fa-regular fa-heart fa-2x"></i>  
        </div>

        <div class="imagenes__paisaje">
            <img  class = "imagenes imagens--7">
        <!-- <img  src="/imagenes/pexels-james-wheeler-414612.jpg" alt=""> -->
        <i class="fa-sharp fa-regular fa-heart fa-2x"></i>  
        </div>

        <div class="imagenes__paisaje">
            <img  class = "imagenes imagens--8">
        <!-- <img  src="/imagenes/pexels-yogendra-singh-1703021.jpg" alt=""> -->
        <i class="fa-sharp fa-regular fa-heart fa-2x"></i>  
        </div>
    </div>
    </section>

    <section class="login">
        <div class="imagen__gota">
            <div class="imagen__vista"></div>
        </div>

        <div class="imagen__logo">
            <img src="imagenes/logos/logo_bota_fora.svg" alt="">
        </div>


        <form action="procesos/verificar.php" method="post" class="form" style="background-color: #fff;">
            <h1>Iniciar sesion</h1>
            <div class="contenedor__form">
                <label for="">Tu correo</label>
                <!-- <input class="input__form" type="text" placeholder="example@gmail.com" name ="txtcorreo" autocomplete="email"  maxlength="25"  required> -->
                <input class="input__form" type="email" placeholder="example@gmail.com" name ="txtemail" placeholder="Escribe tu email aquí"  maxlength="50"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                <label for="">Contraseña</label>
                <input class="input__form" type="password" placeholder="************" name ="txtclave"  maxlength="20"  required>
            </div>
            <div class="contenedor__login">
                <button>iniciar sesion</button>
                <br><br></br>
                <span class="registrarse">no tienes cuenta que esperas 👉👉 <a href="registro.php" style="color:red;">registrate</a></span>
            </div>
        </form>
    </section>
</main>

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
<a href="#footer" class="btn-flotante" style="background-color: #fff;">Mas informacio</a>
</body>
<script src="interaccion/nuevoboton.js"></script>
<script src="interaccion/imagenes.js"></script>
</html>
