<?php
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
require_once './../query/allquery.php';

if (!isset($_GET['id'])) {
    print_r('Error');
}

//array para mostrar cada datos del anuncio
$idAnuncio = $_GET['id'];
//preparar SQL
$stmt = $conn->prepare($eliminarAnuncioQuery);

//tomar parametros
$stmt->bindParam(':idAnuncio', $idAnuncio);

//ejecutar la declaracion
if ($stmt->execute()) {
    header('Location: ./../Views/MisAnuncios.php');
} else {
    $message = 'Hubo un error al eliminar el anuncio';
}