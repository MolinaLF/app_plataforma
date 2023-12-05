<!DOCTYPE html>
<?php 

    session_start();// llamamos a la sesion abierta
    // error_reporting(0);

    // creamos una variable para session:
    $var_ses= $_SESSION['nombre'];
    $var_id = $_SESSION['id'];

// FALTA ENCRIPTAR ARCHIVOS.PHP
// LLAS RUTAS ENCRIPTAR
// CONTRASEÑA ENCRIPTAR
// procedimientos almacenados

    // Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
    $var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
    $var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);

    
    // verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
    if(($var_ses == null || $var_ses == '')||($var_id == null || $var_id == '')){

        header("location:../index.php");
        die();//con este die() ->detener la ejecución del código y evitar que se muestre el resto de la página.
    }


?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bienvenido/a</title>
	<link rel="stylesheet" href="../css/bienvenido.css">
</head>
<body>
	<header>
		<h1>Bienvenido/a usuario/<?php echo $_SESSION['nombre'];?></h1>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="cuenta.php">CUENTA</a></li>
				<li><a href="../procesos/cerrar.php">CERRAR</a></li>
				<li><a href="#">Galería</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Reservas</a></li>
				<li><a href="#">Ofertas</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="cards">
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 1">
				<h2>Lugar turístico 1</h2>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 2">
				<h2>Lugar turístico 2</h2>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 3">
				<h2>Lugar turístico 3</h2>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 4">
				<h2>Lugar turístico 4</h2>
			</div>
		</section>
		<section class="text-image">
			<p>Perú es un país lleno de lugares turísticos espectaculares, desde la costa hasta la sierra y la selva. En sus paisajes podemos encontrar una gran diversidad de culturas, historia, gastronomía, aventura y mucha diversión. ¡Ven y disfruta de todo lo que Perú tiene para ofrecer!</p>
			<img src="https://via.placeholder.com/300x200" alt="Imagen de Perú">
		</section>
	</main>
	<footer>
		<p>Derechos reservados 2023 &copy; Mi Empresa S.A.C.</p>
	</footer>
</body>
</html>