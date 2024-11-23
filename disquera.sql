-- Validar si esta la DB
DROP SCHEMA IF EXISTS `Disquera`;
-- crear la DB
CREATE SCHEMA  IF NOT EXISTS `Disquera` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `Disquera`;

SHOW TABLES;
-- creamos una tabla
CREATE TABLE `usuario` (
    `nombre` TEXT NOT NULL,
    `nombre_artistico` TEXT NOT NULL,
    `tipoGrupo` ENUM('Solista', 'Banda', 'N/A') NOT NULL,
    `tipoPersona` ENUM('Artista', 'Manager') NOT NULL,
    `ciudad` TEXT NOT NULL,
    `telefono` VARCHAR(10) NOT NULL,
    `email` VARCHAR(50) NOT NULL, 
    `password` VARCHAR(10) NOT NULL,
    `fecha_registro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `permisos` VARCHAR(11) NOT NULL DEFAULT '2',
    PRIMARY KEY (`email`) 
);

DROP table usuario;    
    
SHOW TABLES;
SELECT * FROM `usuario`;

-- necesito un intermediario para poder conectar la base de datos a la pagina, en este caso es PHP el que nos va a ayudar a hacer esto
-- vamos a necesitar ciertas credencuales, que puerto tengo
INSERT INTO `usuario` (`nombre`, `nombre_artistico`, `tipoGrupo`, `tipoPersona`, `ciudad`, `telefono`, `email`, `password`, `permisos`)
VALUES
('Eduardo Hernández', 'Ed Maverick', 'Solista', 'Artista', 'Chihuahua', '1234567890', 'ed.maverick@gmail.com', 'pass1234', '2'),
('Zoé The Band', 'Zoé', 'Banda', 'Artista', 'Ciudad de México', '1234567891', 'zoe.banda@gmail.com', 'pass1234', '2'),
('Alan Otzar', 'AlN', 'Solista', 'Artista', 'Ciudad de México', '1234567893', 'aln@gmail.com', '1234', '1'),
('Kevin Eduardo Martínez', 'Kevin Kaarl', 'Solista', 'Artista', 'Chihuahua', '1234567894', 'kevin.karl@gmail.com', 'pass1234', '2'),
('Jenny Juárez', 'Bratty', 'Solista', 'Artista', 'Sinaloa', '1234567895', 'bratty@gmail.com', 'pass1234', '2'),
('Norma Monserrat Bustamante', 'Mon Laferte', 'Solista', 'Artista', 'Viña del Mar', '1234567897', 'mon.laferte@gmail.com', 'pass1234', '2'),
('León Larregui Marín', 'León Larregui', 'Solista', 'Artista', 'Cuernavaca', '1234567898', 'leon.larregui@gmail.com', 'pass1234', '2'),

('Rick Sanchez', 'N/A', 'N/A', 'Manager', 'Ciudad de México', '9876543210', 'carlos.garcia.manager@gmail.com', 'pass5678', '2'),
('Sergio Perez', 'N/A', 'N/A', 'Manager', 'Guadalajara', '9876543211', 'ana.lopez.manager@gmail.com', 'pass5678', '2'),
('Marcelo Medel', 'N/A', 'N/A', 'Manager', 'Monterrey', '9876543212', 'jose.martinez.manager@gmail.com', 'pass5678', '2'),
('María Torres', 'N/A', 'N/A', 'Manager', 'Puebla', '9876543213', 'maria.torres.manager@gmail.com', 'pass5678', '2'),
('Luis Hernández', 'N/A', 'N/A', 'Manager', 'Tijuana', '9876543214', 'luis.hernandez.manager@gmail.com', 'pass5678', '2');
