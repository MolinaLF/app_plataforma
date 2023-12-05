<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,300&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b9ca42581.js" crossorigin="anonymous"></script>
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>



<!-- navegacion reponsibe  -->
<nav>
    <div class="nav">
        <img class="extension" src="imagenes/iconos/icon_menu.svg" alt="">
        <div class="nav_left">
            <img class="logo" src="imagenes/logos/logo_bota_fora.svg" alt="">
            <ul class="nav_items_link">
                <li><a  href="index.php">INICIO</a></li>
                <li><a  href="login.php">Login</a></li>
                <li><a  href="#">Registro</a></li>
            </ul>
            
        </div>

        <div class="nav_right">
            <ul>
                <li style="color: #C7C7C7 ; font-size: 17px;"></li>
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
        
            <ul class="informacion__" style="position: absolute; bottom: 10px;">
                <li class="info"><a class="email" href="#">pepito@nalgas.com</a>
                </li>
                <li class="info"><a class="sign-out" href="#">sing out</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- *********************************************** -->






<!--  todo lo que es main  -->

<main class="imagen__curva imagen__scroll">
    <div class="centrar">
    <section class="eliminar">
            <div class="conteiner__img">   
                <img class="img" src="imagenes/paisaje1.jpg" alt="">
                <img class="img" src="imagenes/paisaje2.jpg" alt="">
                <img class="img" src="imagenes/paisaje3.jpg" alt="">
                <img class="img" src="imagenes/paisaje4.jpg"alt="">
                <img class="img" src="imagenes/paisaje5.jpg">
            </div>
    </section>

    <section class="section_login">
        <div class="login">
        <div class="imagen__gota">
            <div class="imagen__vista"></div>
        </div>

        <div class="imagen__logo">
            <img src="imagenes/logos/logo_bota_fora.svg" alt="">
        </div>


        <form action="procesos/insertar.php" class="form" method="post" style="background-color: #fff;">
            <h1>Crea tu cuenta gratis</h1>
            <div class="contenedor__form">
                <div class="edit">
                    <label for="">Nombre</label>
                    <input class="input__form edit_1" type="text" placeholder="nombre" name ="txtnombre"  placeholder="nombre"  maxlength="25"  required>
                
                    <label for="">apellido</label>
                    <input class="input__form edit_1" type="text" placeholder="apellido" name ="txtapellido"  maxlength="25" required>
                </div>

                <label for="">Dni</label>
                <input class="input__form" type="text" placeholder="Escribe tu Dni aquí" name ="txtdni"  maxlength="8" required pattern="\d+"  required>
                
                <label for="">correo electronivo</label>
                <input class="input__form" type="email" placeholder="example@gmail.com" name ="txtemail" placeholder="Escribe tu email aquí"  maxlength="50"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                <label for="">contraseña</label>
                <input class="input__form" type="password" placeholder="************" name ="txtclave"  maxlength="20"  required>
            </div>

            <div class="contenedor__login">
                <button>Registrarse</button>
                
            </div>
            <br>
            <span class="registrarse">Ya tienes cuenta que esperas¡¡ 👉👉 <a href="login.php" style="color:red;">inicia sesion</a></span>
            <!-- <p>¿Ya tienes una cuenta?</p>
        <button type="button"><a href="login.php">INICIAR SESION</a></button> -->
        </form>
    </div>
    
    </section>
    <!-- <div class="login-container">
        
      </div> -->
</main>
<!--***********************************************************************-->

<!--*************************** FOOTER *******************************************-->
<footer id="footer" class="footer" >
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
<a href="#footer" class="btn-flotante" style="background-color: #fff;">Idioma y Moneda</a>
<!--***********************************************************************-->
<script src="./interaccion/boton.js"></script>
</body>
</html>