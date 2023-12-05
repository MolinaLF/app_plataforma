Create database bdplataforma;

use bdplataforma;

CREATE TABLE usuarios (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  dni VARCHAR(8),
  email VARCHAR(50),
  clave VARCHAR(20)
);
