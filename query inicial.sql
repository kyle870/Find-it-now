create database 'finditnow_db';
create table if not exists `accounts`(
    `id`int(11) primary key not null auto_increment,
    `id_usuario` (select left (UUID(),8)) unique not null,
    `nombre_usuario` varchar(30) not null,
    `contraseña` varchar(255) not null,
    `correo` varchar(50) not null,
    `activo` tinyint(1) not null
);
