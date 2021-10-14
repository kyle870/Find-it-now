<?php
    //requerimiento de la conexion a la DB
    require_once './../config/connection.php';
    //set variables de usuario como vacías
    $nombreUsuario = $passwordUsuario = $repPassword = $emailUsuario = "";
    $message ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST['regUsuario']) && !empty($_POST['regPassword']) && !empty($_POST['regEmail'])) {
            # codigo para insert sql
            $sql = 'INSERT INTO accounts (nombre_usuario, contraseña, correo) VALUES (:usuario, :regpassword, :email)' ;
            
            //ocupar una variable statement para enviar el sql a la conexion
            $stmt = $conn->prepare($sql);
            
            //Intercambio de datos
            $nombreUsuario = $_POST['regUsuario'];
            $passwordUsuario = $_POST['regPassword'];
            $repPassword = $_POST['regPasswordAgain']; 
            $emailUsuario = $_POST['regEmail'];
    
            //parámetros
            $stmt->bindParam(':usuario', $nombreUsuario);
            $password = password_hash($passwordUsuario, PASSWORD_BCRYPT);
            $stmt->bindParam(':regpassword', $password);
            $stmt->bindParam(':email', $emailUsuario);
            
            if ($stmt->execute()) {
                $message = 'Usuario creado satisfactoriamente';
            }else{
                $message = 'Lo sentimos, hubo un error al crear tu usuario';
            }
        }
    }
?>