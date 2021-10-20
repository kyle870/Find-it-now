create database 'finditnow_db';
create table if not exists `accounts`(
    `id`int(11) primary key not null auto_increment,
    /*`id_usuario` int(11) not null,*/
    `nombre_usuario` varchar(30) not null,
    `contrasena` varchar(255) not null,
    `correo` varchar(50) not null,
    `activo` tinyint(1) not null
);
create table if not exists `password_reset`(
    `user_id` int(11) NOT NULL primary key,
    `reset_hash` varchar(255) NOT NULL,
    `reset_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);
/*insert into `accounts`(`id_usuario`,`nombre_usuario`, `contrasena`, `correo`, `activo`) values (UUID_SHORT(),'osmar87','programacion6','osmarquintero87@gmail.com',1);
*/