<?php
    class usuario{

        public function mostrarRegistro($sql){
            $c=new conectar();//instanciar un objeto de clase conectar
            $conexion=$c->conexion();//objeto accede a metodo  conexion
            // mysqli_query ->ejecuta la consulta y devuelve un booleano si la ejecucion fue exitosa o no
            // Toma dos parámetros: conexión a bd  y consulta SQL 
            $result=mysqli_query($conexion,$sql);
            // mysqli_fetch_all() -> devuelve la consultas en una matriz asociativa
            // devuelve la consulta en una matriz asociativa
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        } 
        

        public function insertarRegistro($datos){
            //  cada metodo es independiente
            $c=new conectar();//instanciar un objeto de clase conectar
            $conexion=$c->conexion();//objeto accede a metodo  conexion
            $sql="INSERT INTO usuarios(nombre,apellido,dni,email,clave) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            // mysql_query ->ejecuta la consulta y devuelve un booleano si la ejecucion fue exitosa o no
            // Toma dos parámetros:  conexión a bd  y consulta SQL 
            return $result=mysqli_query($conexion,$sql);
            //  Devuelve el resultado que se almacena en la variable $result.
        }

        

        public function verificarRegistro($datos){
            $c=new conectar();//creando objeto de clase conectar;
            $conexion=$c->conexion();//objeto accede a metodo  conexion
            $sql = "SELECT id, nombre FROM usuarios WHERE email='$datos[0]' AND clave='$datos[1]'";
            // mysqli_query ->ejecuta la consulta y devuelve un booleano si la ejecucion fue exitosa o no
            // Toma dos parámetros: conexión a bd  y consulta SQL 
            return $result = mysqli_query($conexion,$sql);
            //  Devuelve el resultado que se almacena en la variable $result.
        } 
       

        public function actualizarClave($datos){
            $c=new conectar();//se crea un objeto de la clase array
            $conexion=$c->conexion();//objeto accede a metodo  conexion
            //se inserta la base de datos la variable $datos que contiene los datos
            $sql="UPDATE usuarios set clave='$datos[0]' WHERE id='$datos[1]';";
            // mysql_query ->ejecuta la consulta y devuelve un booleano si la ejecucion fue exitosa o no
            // Toma dos parámetros: la conexión a la base de datos y la consulta SQL que se desea ejecutar. se guarda en $result
            return $result=mysqli_query($conexion,$sql);
            //  Devuelve el resultado de la consulta SQL, que se almacena en la variable $result.
        }



    }


?>