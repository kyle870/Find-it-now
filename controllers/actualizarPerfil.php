<?php
require_once './../config/connection.php';
require_once './../query/allquery.php';

$updateNombreUser = $updateFechaNac = $updateCelular = $updateDepartamento = $updateGenero = $updateImagenPerfil = "";
$message = "";
$messageSuccess = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $idUsuario = $_SESSION['user_id'];
    $updateNombreUser = $_POST['updateNombre'];
    $updateFechaNac = $_POST['updateFechaNac'];
    $updateDepartamento = $_POST['updateDepartamento'];
    $updateCelular = $_POST['updateCelular'];
    $updateGenero = $_POST['updateGenero'];
    //variables para la imagen de perfil
    $directorio = "./../Resources/uploads/";
    $updateImagenPerfil = $directorio . basename($_FILES["updateImagenPerfil"]["name"]);

    if (!empty($updateNombreUser) && !empty($updateFechaNac) && !empty($updateCelular) && $updateDepartamento != "" && $updateGenero != "" && move_uploaded_file($_FILES["updateImagenPerfil"]["tmp_name"], $updateImagenPerfil)) {

        $stmt = $conn->prepare($updateProfile);

        $stmt->bindParam(':nombreCompleto', $updateNombreUser);
        $stmt->bindParam(':fechaNac', $updateFechaNac);
        $stmt->bindParam(':departamento', $updateDepartamento);
        $stmt->bindParam(':celular', $updateCelular);
        $stmt->bindParam(':genero', $updateGenero);
        $stmt->bindParam(':imgPerfil', $updateImagenPerfil);
        $stmt->bindParam(':sessionID', $idUsuario);

        if ($stmt->execute()) {
            $messageSuccess = 'Perfil actualizado satisfactoriamente';
        } else {
            $message = 'Lo sentimos, hubo un error al actualizar tu perfil';
        }
    } else {
        $message = 'Por favor llena todos los campos y sube una imagen de perfil';
    }
}
