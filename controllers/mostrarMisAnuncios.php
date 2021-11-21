<?php
require_once './../config/connection.php';
require_once './../controllers/sesionActiva.php';
require_once './../query/allquery.php';

$idUsuario = $_SESSION['user_id'];

$stmt = $conn->prepare($selectMisAnuncios);
$stmt->bindParam(':userID',$idUsuario);

$stmt->execute();

$anunciosTotal = $stmt->fetchAll(PDO::FETCH_OBJ);
//print_r($anunciosTotal);
