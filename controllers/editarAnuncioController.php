<?php
require_once './../config/connection.php';
require_once './../query/allquery.php';

date_default_timezone_set("America/Managua");


$titulo = $categoria = $precio = $cantidad = $condicion = $descripcion = $ubicacion = $updateImagenAnuncio = "";
$message = "";
$messageSuccess = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = $_POST['inpPostAnuncioTitulo'];
    $categoria = $_POST['selPostAnuncioCategoria'];
    $precio = $_POST['inpPostAnuncioPrecio'];
    $cantidad = $_POST['inpPostAnuncioCantidad'];
    $condicion = $_POST['selPostAnuncioCondicion'];
    $descripcion = $_POST['inpPostAnuncioDesc'];
    $ubicacion = $_POST['selPostAnuncioUbicacion'];
    $idAnuncio = $_POST['inpIdAnuncio'];
    //fecha y hora
    $fechaHora = date("Y-m-d H:i:s");
    //variables para la imagen del anuncio
    $directory = "./../Resources/AnunciosDestacados/";
    $updateImagenAnuncio = $directory . basename($_FILES["updateImagenAnuncio"]["name"]);

    if (!empty($titulo) && !empty($categoria) && !empty($precio) && !empty($cantidad) && !empty($condicion) && !empty($descripcion) && move_uploaded_file($_FILES["updateImagenAnuncio"]["tmp_name"], $updateImagenAnuncio)) {
        //conexion SQL
        $stmt = $conn->prepare($updateAnuncio);

        //preparar los elementos
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':condicion', $condicion);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->bindParam(':fechaHora', $fechaHora);
        $stmt->bindParam(':fotos', $updateImagenAnuncio);
        $stmt->bindParam(':idAnuncio', $idAnuncio);

        if ($stmt->execute()) {
            $messageSuccess = 'Anuncio actualizado satisfactoriamente';
            //header('Location: ./../Views/MisAnuncios.php');
        } else {
            $message = 'Lo sentimos, hubo un error al publicar tu anuncio';
        }
    } else {
        $message = 'Por favor llena todos los campos';
    }
    unset($stmt);
}

