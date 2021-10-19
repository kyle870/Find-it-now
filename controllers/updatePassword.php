<?php
//verificar que la sesión esté iniciada
require_once './../controllers/sesionActiva.php';
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
//query
require_once './../query/allquery.php';

//instancias de mensajes
$inpContrasena = $inpNuevaContrasena = $inpConfirmContrasena = '';
$contrasenaError = $nuevaContrasenaError = $confContrasenaError = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //interpolación de inputs
    $idUsuario = $_SESSION['user_id'];
    $inpContrasena = $_POST['viejaContrasena'];
    $inpNuevaContrasena = $_POST['nuevaContrasena'];
    $inpConfirmContrasena = $_POST['confirmContrasena'];

    //preparar el sqlStatement
    $records = $conn->prepare($selectGeneric);

    //bind parameters
    $records->bindParam(':sessionID', $idUsuario);
    $records->execute();

    //obtener los datos
    $resultados = $records->fetch(PDO::FETCH_ASSOC);
    $total = $records->rowCount();


    //validar vieja contraseña
    if (empty(trim($inpContrasena))) {
        $contrasenaError = 'Por favor, ingresa tu actual contraseña';
    } elseif ($total > 0 && password_verify($inpContrasena, $resultados['contraseña'])) {
        $_SESSION['user_id'] = $resultados['id'];
    } else {
        $contrasenaError = 'La contraseña actual no coicide';
    }

    //validar nueva contraseña
    if (empty(trim($inpNuevaContrasena))) {
        $nuevaContrasenaError = 'Por favor, ingresa una contraseña';
    } elseif (strlen(trim($inpNuevaContrasena)) < 6) {
        $nuevaContrasenaError = 'La contraseña debe tener por lo menos 6 caracteres';
    } elseif($inpNuevaContrasena == $inpContrasena){
        $nuevaContrasenaError = 'La contraseña nueva no puede ser la misma que la actual';
    }else{
        $inpNuevaContrasena = trim($inpNuevaContrasena);        
    }

    // validar confirmación de la contraseña
    if (empty(trim($inpConfirmContrasena))) {
        $confContrasenaError = 'Por favor confirmar contraseña';
    } else {
        $confirmarContrasena = trim($inpConfirmContrasena);
        if (empty($confContrasenaError) && ($inpNuevaContrasena != $inpConfirmContrasena)) {
            $confContrasenaError = 'La Contraseña no coincide';
        }
    }

    if (empty($contrasenaError) && empty($nuevaContrasenaError) && empty($confContrasenaError)) {

        $stmt = $conn->prepare($updatePassword);

        //parámetros
        $stmt->bindParam(':sessionID',$idUsuario); //interpolacion del usuarioID
        $password = password_hash($inpNuevaContrasena, PASSWORD_BCRYPT);
        $stmt->bindParam(':nuevaContrasena', $password);

        if ($stmt->execute()) {
            $message = 'Contraseña cambiada satisfactoriamente';
        } else {
            $message = 'Lo sentimos, hubo un error al cambiar la contraseña';
        }
    }
}
