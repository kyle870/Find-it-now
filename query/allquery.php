<?php

//query de seleccion
$selectGeneric = 'SELECT * FROM accounts WHERE id = :sessionID';
//$deleteGeneric = 'DELETE FROM accounts WHERE id = :sessionID';

//statement del registro
$idSelect = 'SELECT id FROM accounts WHERE nombre_usuario = :usuario';

//selector del registro y login para el correo
$emailSelect = 'SELECT * FROM accounts WHERE correo = :email';

//query de actualizacion
//Evitar borrar la cuenta y cambiarla por un estado inactivo
$deleteAccount = 'UPDATE accounts SET activo = 0 WHERE id = :sessionID';
$updatePassword = 'UPDATE accounts SET contrasena = :nuevaContrasena WHERE id = :sessionID';

/*query de insert*/
//insert del registro de usuario
$insertNewUser = 'INSERT INTO `accounts` (`nombre_usuario`, `contrasena`, `correo`, `activo`, `nombre`, `fechaNac`, `departamento`, `celular`, `genero`) VALUES (:usuario, :regpassword, :email, 1, :nombreCompleto, :fechaNacimiento, :departamento, :celular, :genero)';

//$insertNewUser = 'INSERT INTO accounts (nombre_usuario, contrasena, correo, activo) VALUES (:usuario, :regpassword, :email, 1)';
//INSERT INTO `accounts` (`nombre_usuario`, `contrasena`, `correo`, `activo`, `nombre`, `fechaNac`, `departamento`, `celular`, `genero`) VALUES (:usuario, :regoassword, :email, 1, :nombreCompleto, :fechaNacimiento, :departamento, :celular, :genero)


/*query del restablecimiento de contraseña*/
$selectPassReset ='SELECT * FROM password_reset WHERE `user_id` = :userID';
$replaceUserRequest = 'REPLACE INTO `password_reset` VALUES (:userID, :hashpass, :timeReset)';

/*query del mensaje del correo*/
$selectMailReset ="SELECT * FROM `password_reset` WHERE `user_id`= :userID";
//update de la contraseña restaurada por ID
$updateRestorePass = 'UPDATE accounts SET contrasena = :passwordUser WHERE id = :userID';
//Eliminar contraseña luego de ser visualizada en el correo
$deleteRestoresPass = 'DELETE FROM `password_reset` WHERE `user_id`= :userID';

//insert de los anuncios
//$insertAnuncio = 'INSERT INTO `announcements` (`titulo`, `categoria`, `precio`, `cantidad`, `condicion`, `descricion`, `ubicacion`, `horaPublicacion`, `id_user`) VALUES (:titulo, :categoria, :precio, :cantidad, :condicion, :descripcion, :ubicacion, :fechaHora, :idUsuario)';
$insertAnuncio = 'INSERT INTO `announcements` (`titulo`, `categoria`, `precio`, `cantidad`, `condicion`, `descricion`, `ubicacion`, `horaPublicacion`, `fotos`, `id_user`) VALUES (:titulo, :categoria, :precio, :cantidad, :condicion, :descripcion, :ubicacion, :fechaHora, :fotos, :idUsuario)';

//select de los anuncios
$selectAnuncios = 'SELECT * FROM `announcements`';
//select de mis anuncio
$selectMisAnuncios = 'SELECT * FROM `announcements` WHERE `id_user`=:userID';

//Actualizar el perfil
$updateProfile = "UPDATE `accounts` SET `nombre`=:nombreCompleto,`fechaNac`=:fechaNac,`departamento`=:departamento,`celular`=:celular,`genero`=:genero,`imgperfil`=:imgPerfil WHERE id = :sessionID";

//array de los anuncios
$selectAnuncioIndividual = "SELECT * FROM announcements WHERE id_ad = :idanuncio";

//$selectAnunciosLimitados = "SELECT * FROM announcements LIMIT $start, $limite";
$eliminarAnuncioQuery = "DELETE FROM announcements WHERE id_ad = :idAnuncio";

$updateAnuncio = "UPDATE `announcements` SET `titulo`=:titulo,`categoria`=:categoria,`precio`=:precio,`cantidad`=:cantidad,`condicion`=:condicion,`descricion`=:descripcion,`ubicacion`=:ubicacion,`horaPublicacion`=:fechaHora,`fotos`=:fotos WHERE id_ad = :idAnuncio";