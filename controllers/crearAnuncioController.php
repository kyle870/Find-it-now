<?php
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
require_once './../query/allquery.php';
date_default_timezone_set("America/Managua");
//variables vacías
$titulo = $categoria = $precio = $cantidad = $condicion = $descripcion = $ubicacion = $fotos = "";
$messageError = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['inpPostAnuncioTitulo'];
    $categoria = $_POST['selPostAnuncioCategoria'];
    $precio = $_POST['inpPostAnuncioPrecio'];
    $cantidad = $_POST['inpPostAnuncioCantidad'];
    $condicion = $_POST['selPostAnuncioCondicion'];
    $descripcion = $_POST['inpPostAnuncioDesc'];
    //$fotos = $_POST[''];
    $ubicacion = $_POST['selPostAnuncioUbicacion'];
    //fecha y hora
    $fechaHora = date("Y/m/d h:i:sa");

    if (!empty($titulo) && !empty($categoria) && !empty($precio) && !empty($cantidad) && !empty($condicion) && !empty($descripcion)) {
        //conexion SQL
        $stmt = $conn->prepare($insertAnuncio);

        //preparar los elementos
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':condicion', $condicion);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':ubicacion',$ubicacion);
        $stmt->bindParam(':fechaHora',$fechaHora);
        $stmt->bindParam(':idUsuario', $_SESSION['user_id']);

        if ($stmt->execute()) {
            //$message = 'Anuncio creado satisfactoriamente';
            echo '<script>alert("Anuncio creado satisfactoriamente")</script>';
        } else {
            //$message = 'Lo sentimos, hubo un error al publicar tu anuncio';
            echo '<script>alert("Lo sentimos, hubo un error al publicar tu anuncio")</script>';
        }
    } else {
        //$message = 'Lo sentimos, hubo un error al publicar tu anuncio';
        echo '<script>alert("Lo sentimos, hubo un error al publicar tu anuncio")</script>';
    }
    unset($stmt);
}
