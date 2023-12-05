<?php
session_start();//  inicia una sesión de PHP

require_once '../conBd/conexion.php';
require_once '../metodo/MetodoPrincipal.php';

// Es importante limpiar y filtrar los datos recibidos de fuentes externas, 
// como formularios o variables de sesión, para prevenir vulnerabilidades de seguridad en el código.

// Función filter_input()-> Asegura que los datos recibidos estén en el formato correcto y sean seguros para su uso en la aplicación.
// INPUT_POST -> indica que los datos se recibieron mediante una petición HTTP POST.
// txtemail ->nombre del campo que se va a filtrar.
// FILTER_SANITIZE_EMAIL -> elimina todos los caracteres no válidos del correo electrónico.
// FILTER_SANITIZE_STRING -> elimina todos los caracteres no válidos de una cadena. 
$email = filter_input(INPUT_POST, 'txtemail', FILTER_SANITIZE_EMAIL);
$clave = filter_input(INPUT_POST, 'txtclave', FILTER_SANITIZE_STRING);

    $datos=array(// Guardar datos en array
        $email,//[0]
        $clave//[1]
    );

    $obj = new usuario();// Instanciando  un obj de clase usuario
    // $obj accede al metodo verificarResgistro y envia $datos
    $comprobar1 = $obj->verificarRegistro($datos);
    // mysqli_num_rows->devuelve un número entero que es cant de flas afectadas
    $comprobar2 = mysqli_num_rows($comprobar1);
    // $comprobar1 -> Devuelve un booleano si la ejecucion fue exitosa o no
    // $comprobar2 -> Si el valor de retorno es mayor que 0 indica encontró un registro),
    if(($comprobar1 )&& ($comprobar2>0))
    {
        // mysqli_fetch_assoc()->  Devuelve la consulta sql como un array asociativo .
        // array asociativo ->  Usa claves en lugar de números enteros como índices para acceder a los elementos almacenados.
        $fila = mysqli_fetch_assoc($comprobar1);
        // extraemos el id y el nombre
         $id = $fila['id'];
         $nombre = $fila['nombre'];

        // Limpieza y filtrado de los datos del usuario
        // filter_var() -> filtra y valida los datos del usuario obtenidos de la base de datos
        // En este caso, se filtra el id y el nombre del usuario.
        // FILTER_SANITIZE_NUMBER_INT -> elimina todos los caracteres no numéricos del valor
        // FILTER_SANITIZE_STRING -> elimina todos los caracteres no válidos de una cadena.
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        //  la variable de sesión 'nombre' y 'id' se utiliza para identificar al usuario 
        // en el sitio web y se puede acceder a ella en otras páginas a lo largo de su sesión
        $_SESSION['nombre'] = $nombre;
        $_SESSION['id'] = $id;
        header("location:../webs/inicio1.php");
        exit();  
    }else{
        header("location:../invalido/error.php");
       exit();
    }

?>