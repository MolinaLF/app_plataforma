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
    <link rel="stylesheet" href="../css/cuenta1.css">
    <style>
        .container {
  position: relative;
  min-height: 100vh;
}

footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: #414141;
}

main {
  margin-bottom: 100px; /* ajusta la altura del pie de página según sea necesario */
}

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td.editar-clave {
            text-align: center;
        }

        td.editar-clave a {
            text-decoration: none;
            color: blue;
        }

        td.editar-clave a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <a href="inicio1.php">Inicio</a>
            <a href="casas1.php">Casas de Campo</a>
            <a href="hoteles1.php">Hoteles</a>
            <a href="playas1.php">Playas</a>
            <a href="restaurantes1.php">Restaurantes</a>
            <a href="#">Cuenta</a>
            <a href="../procesos/cerrar.php">Cerrar </a>
            <a> usuario:
                <?php echo $_SESSION['nombre']; ?>
                </li>
            </a>
        </nav>
        <section class="textos-header">
            <h1>CUENTA USUARIO</h1>
            <h2></h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: white;"></path>
            </svg>
        </div>
    </header>
    <div class="container">
    <main>


        <?php
        $obj = new usuario(); //se instancia un objeto de la clase usuario
        $sql = "SELECT id, nombre, apellido, dni, email FROM usuarios WHERE id = $var_id;"; //crea la cnsulta sql
        $datos = $obj->mostrarRegistro($sql); ////$obj llama al metodo mostrarregistro
        // guardados en $datos usando el foreach itera cada registro ,
        // $datos es la variable que contiene los datos devueltos por la consulta SQL y "as" es una palabra clave 
        // utilizada para asignar cada valor del array de $datos a una variable temporal llamada $key.
        foreach ($datos as $key) {
            ?>
            <!-- En cada iteración del bucle, se asigna el siguiente valor del array de $datos 
            a la variable $key, lo que permite acceder a cada campo de cada registro en la 
            consulta SQL utilizando la sintaxis de matriz asociativa, por ejemplo, $key['nombre'] 
            para obtener el valor del campo "nombre" de cada registro. -->
            <!--  -->
            <table>
                <tr>
                    <th>Id</th>
                    <td>
                        <?php echo $key['id']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td>
                        <?php echo $key['nombre']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Apellido</th>
                    <td>
                        <?php echo $key['apellido']; ?>
                    </td>
                </tr>
                <tr>
                    <th>DNI</th>
                    <td>
                        <?php echo $key['dni']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <?php echo $key['email']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Clave</th>
                    <td>**********</td>
                    <!-- se está creando un enlace <a> que lleva a la página editar.php y 
                le pasa el parámetro id mediante la URL-->
                    <td><a href="../procesos/editar.php?id=<?php echo $key['id']; ?>">Editar clave </a></td>
                </tr>
                <?php
        }
        ?>

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
    </div>
</body>

</html>