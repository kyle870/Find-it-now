<?php
require_once './../config/connection.php';
require_once './../controllers/sesionActiva.php';
require_once './../query/allquery.php';

 $anuncios = $conn->prepare($selectAnuncios);
 $anuncios->execute();

 $anunciosTotal = $anuncios->fetchAll(PDO::FETCH_OBJ);
 //print_r($anunciosTotal);
