<!DOCTYPE html>
<?php 

    session_start();// . Esto permite al programa acceder a variables de sesión almacenadas previamente.
    // error_reporting(0);
    // creamos una variable para session:
    $var_ses= $_SESSION['nombre'];
    $var_id = $_SESSION['id'];

    // Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
    $var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
    $var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);

    
    // verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
    if(($var_ses == null || $var_ses == '')||($var_id == null || $var_id == '')){

        header("location:../index.php");
        die();//función die() para evitar que se muestre el resto de la página después de la redirección.
    }

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web | Senati</title>
    <link rel="shortcut icon" href="img/fuego.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="casas1.php">Casas de Campo</a>
            <a href="hoteles1.php">Hoteles</a>
            <a href="playas1.php">Playas</a>
            <a href="restaurantes1.php">Restaurantes</a>
            <a href="cuenta1.php">Cuenta</a>
            <a href="../procesos/cerrar.php">Cerrar  </a>
            <a>usuario:<?php echo $_SESSION['nombre'];?></li></a>
            <!-- -------------- -->
             
        <!-- ------------ -->
        </nav>
        <section class="textos-header">
            <h1>Viajes Vacacionales o Turisticos</h1>
            <h2>Somos tu mejor opción para una escapadita de lo rutinario</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" 
                style="stroke: none; fill: white;"></path></svg>
            </div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Somos tu mejor opción</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="../img/ilustracion1.png" alt="" class="imagen-about-us">
                    <div class="contenido-textos">
                        <h3><span>1</span>Ofrecemos los mejores paquetes turísticos</h3>
                        <p>Reserva tus actividades sin estrés. Puedes cancelar con hasta 24 horas de antelación.</p>
                        <h3><span>2</span>Aventurero | Aventurera</h3>
                        <p>Haremos que conozcas varios destinos turísticos, y sin preocupaciones.</p>
                    </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Destinos Maravillosos</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../img/paracas.png" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/huacachina.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/img3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/img4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/img5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/img6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/img7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/img8.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Destino</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="clientes contenedor">
                <h2 class="titulo">Que dicen nuestros clientes</h2>
                <div class="cards">
                    <div class="card">
                        <img src="../img/face1.png" alt="">
                        <div class="contenido-texto-card">
                            <h4>Emilio</h4>
                            <p>Recomendadísimo, Explore More ofrece 
                                buenos paquetes turiticos, precios cómodos 
                                y una buena atención.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../mg/face2.jpg" alt="">
                        <div class="contenido-texto-card">
                            <h4>Fatima</h4>
                            <p>Recomendadísimo, Explore More ofrece 
                                buenos paquetes turiticos, precios cómodos 
                                y una buena atención.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros Servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="../img/oferta.png" alt="">
                        <h3>Ofertas</h3>
                        <p>Cada quincena, lanzamos ofertas con paquetes dobles, o familiares.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="../img/incluido.png" alt="">
                        <h3>Todo Incluido</h3>
                        <p>Garantizamos tu diversión, por eso tenemos paquetes todo incluido.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="../img/seguro.png" alt="">
                        <h3>Seguro</h3>
                        <p>Somos una empresa segura, laborando desde hace 3 años, 
                            confia en nosotros y tómate unas vacaciones..</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>939552415</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>example@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Agencia</h4>
                <p>Terminal Terrestre - Plaza Norte</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; derechos reservados</h2>
    </footer>
    <script src="../interaccion/boton.js"></script>
</body>
</html>