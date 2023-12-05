<?php
// Creacion de clase conectar 
// Encapsula los atributos para acceder solo con la clase ->protege la conexion a bd
// Para evitar que sean accedidos o modificados de manera no autorizada
class conectar{
    private $servidor="localhost";
    private $usuario="root";
    private $bd="bdplataforma";
    private $password="";
    // Se define el método público "conexion" que retorna un objeto de conexión a la base de datos.
    public function conexion(){
 // El this se utiliza  para hacer referencia a los atributos de la clase conectar.

        $conexion=mysqli_connect($this->servidor,
                                $this->usuario,
                                $this->password,
                                $this->bd);
        return $conexion;
    }
}
?>