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
        $records = $conn->prepare($loginStatement);

        //interpolación de datos
        $logEmail=$_POST['logMail'];
        $logContrasena=$_POST['logPassword'];

        //enviar datos y ejecutar
        $records->bindParam(':email', $logEmail);
        $records->execute();

        //obtener los datos de ese usuario
        $resultados = $records->fetch(PDO::FETCH_ASSOC);
        $total_records = $records->rowcount();

        if ($resultados['activo'] == 1) {
            if ($total_records > 0 && password_verify($logContrasena, $resultados['contraseña'])) {
                $_SESSION['user_id'] = $resultados['id'];
                header('location: ./../index.php');
            }else{
                $message = 'Los siento, los datos no coinciden';
            }
        }else{
            $message = 'Los datos no están asociados a una cuenta';
        }
    }

?>