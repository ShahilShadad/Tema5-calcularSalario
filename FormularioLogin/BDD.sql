CREATE DATABASE bd_usuarios;
USE bd_usuarios;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(100) NOT NULL
);

INSERT INTO usuarios (username, password) VALUES
('juan', '1234'),
('ana', 'abcd'),
('pepe', 'pass');

