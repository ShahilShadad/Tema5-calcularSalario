CREATE DATABASE IF NOT EXISTS empresa;
USE empresa;

DROP TABLE IF EXISTS empleados;

CREATE TABLE empleados (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  contraseña VARCHAR(255) NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  cargo VARCHAR(20) NOT NULL,
  salario_base DECIMAL(10,2) NOT NULL
);

-- Datos de ejemplo (contraseña = 1234)
INSERT INTO empleados (usuario, contraseña, nombre, apellido, cargo, salario_base)
VALUES
('pepita', '1234', 'Pepita', 'Pérez', 'Gerente', 18000),
('manuel', '1234', 'Manuel', 'López', 'Vendedor', 37000),
('luisa', '1234', 'Luisa', 'García', 'Gerente', 57400),
('carlos', '1234', 'Carlos', 'Ruiz', 'Vendedor', 22000);

