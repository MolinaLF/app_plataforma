<?php
 require_once '../conBd/conexion.php';
 require_once '../metodo/MetodoPrincipal.php';

// Se obtienen los valores de las variables desde el formulario enviado por POST
$clave=$_POST['txtclave'];
$id=$_POST['id'];

// Se almacenan los valores en un array
$datos=array(
    $clave,//[0]
    $id//[1]
);

$obj=new usuario();// se crea un objeto de la clase ,metodos


   // Este método actualizará si actualizarClave devuelve un true = 1;
    if($obj->actualizarClave($datos)==1){
    //    si la condicion si es verdadera retirna a cuenta
        header("location:../webs/cuenta1.php");
    }else{
        echo "Error en la actualizacion......";
    }

?>