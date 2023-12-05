<!DOCTYPE html>
<?php
require_once '../conBd/conexion.php';
require_once '../metodo/MetodoPrincipal.php';


session_start(); // llamamos a la sesion abierta
// error_reporting(0);

// creamos una variable para session:
$var_ses = $_SESSION['nombre'];
$var_id = $_SESSION['id'];

// Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
$var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
$var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);

// verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
if (($var_ses == null || $var_ses == '') || ($var_id == null || $var_id == '')) {

    header("location:../index.php");
    die(); //con este die() ->detener la ejecución del código y evitar que se muestre el resto de la página.
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
        <a href="inicio1.php">Inicio</a>
            <a href="casas1.php">Casas de Campo</a>
            <a href="#">Hoteles</a>
            <a href="playas1.php">Playas</a>
            <a href="restaurantes1.php">Restaurantes</a>
            <a href="cuenta1.php">Cuenta</a>
            <a href="../procesos/cerrar.php">Cerrar  </a>
            <a>usuario:<?php echo $_SESSION['nombre'];?></li></a>
        </nav>
        <section class="textos-header">
            <h1>Hoteles | Todo incluido</h1>
            <h2>Te ofrecemos hoteles con paquete todo incluido, nos busques más, reserva ya.</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" 
                style="stroke: none; fill: white;"></path></svg>
            </div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Tómate unas buenas Vacaciones</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="../img/hoteles/hotel0.jpg" alt="" class="imagen-about-us">
                    <div class="contenido-textos">
                        <h3><span>1</span>Nos encargamos de todo</h3>
                        <p>Gestionamos todo, la estadia, la comida, el destino, y más.</p>
                        <h3><span>2</span>Aventurero | Aventurera</h3>
                        <p>Haremos que conozcas varios destinos turísticos, y sin preocupaciones.</p>
                    </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Hoteles | Destinos</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../img/hoteles/hotel1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Mancora</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/hoteles/hotel 2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Cusco</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/hoteles/hotel 3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Paracas</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../img/hoteles/hotel 4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../img/icono1.png" alt="">
                            <p>Trujillo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="clientes contenedor">
                <h2 class="titulo">OFERTITAS</h2>
                <div class="cards">
                    <div class="card">
                        <div class="contenido-texto-card">
                            <h4>Paquete Doble</h4>
                            <p>Tenemos una OFERTA para ti!<br>
                                El jueves 6 y viernes 7 de Abril, los paquetes doble tendrán el 15% de Dscto |
                                Valido para cualquier Destino
                            </p>
                            <input class="boton" type="button" value="Reservar">
                        </div>
                    </div>
                    <div class="card">
                        
                        <div class="contenido-texto-card">
                            <h4>Paquete Familiar</h4>
                            <p>Queremos que te diviertas un tiempo considerable !<br>
                                Por eso, te regalamos 2 días de estadia adicional.
                            </p>
                            <input class="boton" type="button" value="Reservar">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Contactanos y Reserva</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="../img/hoteles/email.png" alt="">
                        <h3>Primer Paso</h3>
                        <p>Envianos un mensaje por Correo Electrónico o por WhatsApp, especificando el destino,
                            día de salida y llegada, para poder agendar tu viaje.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="../img/hoteles/check.png" alt="">
                        <h3>Segundo Paso</h3>
                        <p>Te responderemos después de 30 minutos a 1 hora, confirmando tu 
                            pedido viajero.
                        </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="../img/hoteles/soles.png" alt="">
                        <h3>Tercer Paso</h3>
                        <p>Luego de haber confirmado todo, deberás cancelar el monto acordado, y eso seria todo.<br>
                            Podrás disfrutar de tu vaije con seguridad, confianza y felicidad.
                        </p>
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
</body>
</html>