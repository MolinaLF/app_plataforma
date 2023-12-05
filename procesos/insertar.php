<?php
    require_once '../conBd/conexion.php';
    require_once '../metodo/MetodoPrincipal.php';
    // Obteniendo valores ingresados por el usuario en un formulario web
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellido'];
    $dni=$_POST['txtdni'];
    $email=$_POST['txtemail'];
    $clave=$_POST['txtclave'];
   
    $datos=array(  // Guardando datos recibidos en un array
        $nombre,//[0]
        $apellido,//[1]
        $dni,//[2]
        $email,//[3]
        $clave//[4]
    );
    
    $obj = new usuario(); // instanciando un objeto de clase usuario 
    // Si se inserta correctamente el registro, el método devuelve 1 = true; 
    // de lo contrario, devuelve 0 o un valor falso. 
    if($obj->insertarRegistro($datos)==1){
         // redirige al usuario a la página de inicio-logueo si sale correctamente
        header("location:../index.php");
        exit();
    }else{
        header("location:../invalido/error.php");// en caso que sea false redirige a error.php
        // Mostrando un mensaje de error en caso de que la operación falle
        exit();
    }
?>