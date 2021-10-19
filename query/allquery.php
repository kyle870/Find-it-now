<?php

//query de seleccion
$selectGeneric = 'SELECT * FROM accounts WHERE id = :sessionID';
$deleteGeneric = 'DELETE FROM accounts WHERE id = :sessionID';
//statement del login
$loginStatement = 'SELECT id, correo, contraseña FROM accounts WHERE correo = :email';
//statement del registro
$idSelect = 'SELECT id FROM accounts WHERE nombre_usuario = :usuario';
$emailSelect = 'SELECT * FROM accounts WHERE correo = :correo';

//query de actualizacion
//Evitar borrar la cuenta y cambiarla por un estado inactivo
$deleteAccount = 'UPDATE accounts SET estado = :estInactivo WHERE id = :sessionID';
$updatePassword = 'UPDATE accounts SET contraseña = :nuevaContrasena WHERE id = :sessionID';

//query de insert
//insert del registro de usuario
$insertNewUser = 'INSERT INTO accounts (nombre_usuario, contraseña, correo) VALUES (:usuario, :regpassword, :email)';