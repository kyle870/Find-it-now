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

//query de insert
//insert del registro de usuario
$insertNewUser = 'INSERT INTO accounts (nombre_usuario, contrasena, correo) VALUES (:usuario, :regpassword, :email)';