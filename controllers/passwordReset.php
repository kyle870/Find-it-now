<?php
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
require_once './../query/allquery.php';

error_reporting(E_ERROR | E_PARSE); //evitar el error de los warning en el mensaje

if (isset($_GET['i']) && isset($_GET['h'])) {
    
    // verificar si la petición es valida
    $stmt = $conn->prepare($selectMailReset);
    $stmt->bindParam(':userID', $_GET['i']);

    $stmt->execute();
    $request = $stmt->fetch(PDO::FETCH_ASSOC);
    if (is_array($request)) {
        if ($request['reset_hash'] != $_GET['h']) {
            $result = 'Petición no valida';
        }
    } else {
        $result = 'Petición no valida';
    }

    // verificar si expiró
    if ($result == '') {
        $now = strtotime("now");
        $expire = strtotime($request['reset_time']) + $prvalid;
        if ($now >= $expire) {
            $result = 'Expiró la petición de cambio de contraseña';
        }
    }

    // proceder al restablecimiento de contraseña
    if ($result == '') {
        // RANDOM PASSWORD
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-=+?";
        $passRandom = substr(str_shuffle($chars), 0, 8); // 8 caracterres al azar
        $password = md5($passRandom);

        // UPDATE DATABASE
        $stmt = $conn->prepare($updateRestorePass);
        $stmt->bindParam(':passwordUser', $password);
        $stmt->bindParam(':userID', $_GET['i']);
        $stmt->execute();
        
        $stmt = $conn->prepare($deleteRestoresPass);
        $stmt->bindParam(':userID', $_GET['i']);
        $stmt->execute();

        // mostrar resultados
        $result = "Contraseña aleatoria: $password .Por favor, inicia sesión y cámbiala por otra.";
    }
} else {
    $result = 'Petición no valida';
}

// Output de los resultados
echo "<div>$result</div>";
