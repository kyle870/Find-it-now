<?php
    //iniciar sesion
    session_start();
    //verificar que la sesión esté iniciada
    if (isset($_SESSION['user_id'])) {
        header('location: ./../index.php');
    }
    //requerimiento de la conexion a la DB
    require_once './../config/connection.php';

    //set datos en blanco
    $logEmail = $logContrasena = '';
    $message = '';

    if (!empty($_POST['logMail']) && !empty($_POST['logPassword'])) {
        $records = $conn->prepare('SELECT id, correo, contraseña FROM accounts WHERE correo = :email');

        //interpolación de datos
        $logEmail=$_POST['logMail'];
        $logContrasena=$_POST['logPassword'];

        //enviar datos y ejecutar
        $records->bindParam(':email', $logEmail);
        $records->execute();

        //obtener los datos de ese usuario
        $resultados = $records->fetch(PDO::FETCH_ASSOC);
        $total_records = $records->rowcount();

        if ($total_records > 0) {
            $_SESSION['user_id'] = $resultados['id'];
            header('location: ./../index.php');
        }else{
            $message = 'Los siento, los datos no coinciden';
        }
    }

?>