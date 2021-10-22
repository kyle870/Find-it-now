<?php
//iniciar sesion
session_start();
//verificar que la sesión esté iniciada
if (isset($_SESSION['user_id'])) {
    header('location: ./../index.php');
}
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
require_once './../query/allquery.php';

//set datos en blanco
$logEmail = $logContrasena = '';
$message = '';

if (!empty($_POST['logMail']) && !empty($_POST['logPassword'])) {
    //set del llamado al sql
    $records = $conn->prepare($emailSelect);

    //interpolación de datos
    $logEmail = $_POST['logMail'];
    $logContrasena = $_POST['logPassword'];

    //enviar datos y ejecutar
    $records->bindParam(':email', $logEmail);
    $records->execute();

    //obtener los datos de ese usuario
    $resultados = $records->fetch(PDO::FETCH_ASSOC);
    $total_records = $records->rowcount();

    //verificar si es un md5 válido
    function isValidMd5($md5 = '')
    {
        return preg_match('/^[a-f0-9]{32}$/', $md5);
    }

    if ($total_records > 0 && (md5($logContrasena) == $resultados['contrasena'] || $logContrasena == $resultados['contrasena'])) {
        if ($resultados['activo'] == 1) {
            $_SESSION['user_id'] = $resultados['id'];
            header('location: ./../index.php');
        } else {
            $message = 'Los datos no están asociados a una cuenta';
        }
    } else {
        $message = 'Los datos no coinciden';
    }
}
