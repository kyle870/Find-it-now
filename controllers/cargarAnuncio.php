<?php
require_once './../config/connection.php';
require_once './../controllers/sesionActiva.php';
require_once './../query/allquery.php';

if (!isset($_GET['id'])) {
    print_r('Error');
}

//array para mostrar cada datos del anuncio
$idAnuncio = $_GET['id'];
$anuncio = $conn->prepare($selectAnuncioIndividual);
$anuncio->bindParam(':idanuncio',$idAnuncio);
$anuncio->execute();

$datosAnuncio = $anuncio->fetch(PDO::FETCH_OBJ);

//Array de datos del anunciante
$datosAnunciante = $datosAnuncio->id_user;

$anunciante = $conn->prepare($selectGeneric);
$anunciante->bindParam(':sessionID', $datosAnunciante);
$anunciante->execute();

$totalAnunciante = $anunciante->fetch(PDO::FETCH_OBJ);
//print_r($totalAnunciante);

//Array para mostrar todos los datos de cada anuncio del usuario
$stmt = $conn->prepare($selectMisAnuncios);
$stmt->bindParam(':userID',$datosAnunciante);

$stmt->execute();

$anunciosTotal = $stmt->fetchAll(PDO::FETCH_OBJ);
//print_r($anunciosTotal);