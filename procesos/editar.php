<?php 
	require_once '../conBd/conexion.php';

    session_start();
    // error_reporting(0);
    // creamos una variable para session:
    $var_ses= $_SESSION['nombre'];
    $var_id=$_SESSION['id'];

	 // Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
	 $var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
	 $var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);
   
	// verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
    if(($var_ses == null || $var_ses == '')||($var_id == null || $var_id == '')){
        header("location:../index.php");
        die();//con este die() se corta todo se detiene la ejecucion 
    }
// Se recibe el parámetro GET "id"enviado desde cuenta.php  del index  
	$id=$_GET['id'];

	$obj= new conectar();//crea un objeto de la clase conectar
	$conexion=$obj->conexion();//Objeto accede al metodo conexion() que contiene la conexion a base de datos
	
	$sql="SELECT * from usuarios where id='$id'";
			// mysql_query ->ejecuta la consulta y devuelve un booleano si la ejecucion fue exitosa o no
            // Toma dos parámetros: la conexión a la base de datos y la consulta SQL que se desea ejecutar. se guarda en $result
	$result=mysqli_query($conexion,$sql);
	//  mysqli_fetch_row() => fila de resultados como un array numérico y se guarda en la variable $ver.
	$ver=mysqli_fetch_row($result);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
      table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
      }
      th, input {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
      }
      input {
        background-color: #f2f2f2;
      }
      input.editar-clave {
        text-align: center;
      }
      input.editar-clave a {
        text-decoration: none;
        color: blue;
      }
      input.editar-clave a:hover {
        text-decoration: underline;
      }
    </style>
</head>
<body>

<form action="../procesos/actualizar.php" method="post">
  <!--campo de entrada oculto en form asignando el valor $id del Get ;
  recibido a través de la URL en la página anterior. -->
	<!-- $id identifica de forma única cada registro o fila de la tabla. 
    lo que permitira una correcta actualizacion de datos .-->
	<input type="text" hidden="" value="<?php echo $id ?>" name="id"> 
	<!-- se rrellena los inputs con valores obtenidos de del array $ver  
  y se imprime-->
<!-- id[0],nombre[1] ,apellido[2],dni[3],email[4],clave[5]-->
<table>
   
      <tr>
        <th>Nombre</th>
        <td><input type="text" name="txtnombre" value="<?php echo $ver[1]; ?>"readonly></td>
      </tr>
      <tr>
        <th>Apellido</th>
        <td><input type="text" name="txtapellido" value="<?php echo $ver[2]; ?>" readonly ></td>
      </tr>
      <tr>
        <th>DNI</th>
        <td><input type="text" name="txtdni" value="<?php echo $ver[3]; ?>"readonly ></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><input type="text" name="txtemail" value="<?php echo $ver[4]; ?>"readonly></td>
	</tr>
      <tr>
        <th>Clave</th>
        <td><input type="password" name="txtclave" value="<?php echo $ver[5]; ?>"></td>
      </tr>
	  <center><button>ACTUALIZAR CLAVE </button></center>
	  </form>
</body>
</html> 