<?php
session_start();
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
require_once './../query/allquery.php';
//preparar SQL
$stmt = $conn->prepare($deleteAccount);

//tomar parametros
$stmt->bindParam('sessionID', $_SESSION['user_id']);

//ejecutar la declaracion
if ($stmt->execute()) {
    session_unset();
    session_destroy();
    header('location: ./../index.php');
} else {
    $message = 'Hubo un error al eliminar la cuenta';
}
