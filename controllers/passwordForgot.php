<?php
require_once './../config/connection.php';
require_once './../query/allquery.php';
require_once './../phpmailer/PHPMailerAutoload.php';
require_once './../config/mailerInstance.php';

$result;

if (isset($_POST['userEmail'])) {
    // Conectar a la base de datos

    //variable del correo
    $userEmail = $_POST['userEmail'];

    // Verificar usuario valido
    $stmt = $conn->prepare($emailSelect); //$emailSelect
    $stmt->bindParam(':email', $userEmail);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $result = is_array($user)
        ? ''
        : $userEmail . ' no está registrado.';

    // verificar peticiones anteriores (prevenir spam)
    if ($result == '') {
        $stmt = $conn->prepare($selectPassReset); //seleccionar id de la tabla temporal
        $stmt->bindParam(':userID', $user['id']);
        $stmt->execute();

        $request = $stmt->fetch(PDO::FETCH_ASSOC);
        $now = strtotime("now");
        if (is_array($request)) {
            $expire = strtotime($request['reset_time']) + $prvalid;
            if ($now < $expire) {
                $result = 'Por favor, intenta luego';
            }
        }
    }

    // Verifica que todo esté bien y crea una nueva petición de restablecer
    if ($result == '') {
        // RANDOM HASH
        //$password = password_hash($passwordUsuario, PASSWORD_BCRYPT);
        $hash = md5($user['correo'] . $now);
        $fechaHora = date('Y-m-d H:i:s');

        // Petición de la DB
        $stmt = $conn->prepare($replaceUserRequest);
        $stmt->bindParam(':userID', $user['id']);
        $stmt->bindParam(':hashpass', $hash);
        $stmt->bindParam(':timeReset', $fechaHora);
        $stmt->execute();

        $link = 'http://localhost/finditnow/controllers/passwordReset.php?i=' . $user['id'] . '&h=' . $hash;

        //Agregar destinatario
        $mail->AddAddress($user['correo']);
        $mail->Subject = 'Restablecimiento de contrasena';
        $mail->Body = "<a href='$link'>Enlace para restablecer contraseña</a>";;

        if (!$mail->send()) {
            $result = 'Error al enviar correo de restablecimiento';
        }else{
            $result = 'Correo enviado con exito';
        }
    }

    // (B5) messageS
    if ($result == '') {
        $result = 'Correo enviado, por favor, click en el link para confirmar';
    }
    //echo "<div>$result</div>";
}
