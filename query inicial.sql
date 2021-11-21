create database 'finditnow_db' ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_general_ci;
/*-------------*/
create table if not exists `accounts`(
    `id`int(11) primary key not null auto_increment,
    `nombre_usuario` varchar(30) not null,
    `contrasena` varchar(255) not null,
    `correo` varchar(50) not null,
    `activo` tinyint(1) DEFAULT 1,
    `nombre` text DEFAULT 'Desconocido',
    `fechaNac` date,
    `departamento` varchar(25),
    `celular` int(8),
    `genero` varchar(10)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_general_ci;
/*-------------*/
create table if not exists `password_reset`(
    `user_id` int(11) NOT NULL primary key,
    `reset_hash` varchar(255) NOT NULL,
    `reset_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_general_ci;

create table if not exists `departamento`(
    `id_departamento` int(11) primary key NOT NULL,
    `nombre_dep` varchar(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_general_ci;
/*insert into `accounts`(`id_usuario`,`nombre_usuario`, `contrasena`, `correo`, `activo`) values (UUID_SHORT(),'osmar87','programacion6','osmarquintero87@gmail.com',1);
*/
create table if not exists `announcements`(
    `id_ad` int(11) NOT NULL primary key auto_increment,
    `titulo` varchar(50) NOT NULL, 
    `categoria` varchar(30) NOT NULL,
    `precio` float(8) NOT NULL,
    `cantidad` int(8) NOT NULL,
    `condicion` varchar(30) NOT NULL,
    `descricion` text NOT NULL,
    `ubicacion` varchar(50) NOT NULL,
    `horaPublicacion` datetime,
    `fotos` longblob,
    `id_user` int(11) NOT NULL,
    CONSTRAINT FOREIGN KEY fk_user_ad (id_user) REFERENCES `accounts` (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_general_ci;

/*INSERT INTO `announcements` (`titulo`, `categoria`, `precio`, `cantidad`, `condicion`, `descricion`, `fotos`, `id_user`) VALUES (':titulo', ':categoria', ':precio', ':cantidad', ':condicion', ':descripcion', ':idUsuario')*/
