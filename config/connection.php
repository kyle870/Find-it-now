<?php
    $db_server = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'finditnow_db';

    //reestablecimiento de contraseña, valido por 300 segundos
    $prvalid = 1800;

    try {
        $conn = new PDO('mysql:host='.$db_server.';dbname='.$db_name,$db_username,$db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: No se pudo conectar a la DB" . $e->getMessage());
    }

?>