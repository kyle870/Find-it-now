<?php
require_once './../config/connection.php';
require_once './../controllers/sesionActiva.php';
require_once './../query/allquery.php';


$anuncios = $conn->prepare($selectAnuncios);
$anuncios->execute();

$anunciosTotal = $anuncios->fetchAll(PDO::FETCH_OBJ);
//print_r($anunciosTotal);

//Inicio de la paginación de los anuncios
$limite = 2;

$total_results = $anuncios->rowCount();
$total_pages = ceil($total_results / $limite);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}


$start = ($page - 1) * $limite;

$stmt = $conn->prepare("SELECT * FROM announcements LIMIT $start, $limite");
//$stmt->bindParam(':start',$start);
//$stmt->bindParam(':limite',$limite);
$stmt->execute();

// Array de anuncios asociativo, es decir, de objetos
$stmt->setFetchMode(PDO::FETCH_OBJ);

$totalAnunciosLimitados = $stmt->fetchAll();

$conn = null;

// var_dump($results);
$no = $page > 1 ? $start + 1 : 1;
