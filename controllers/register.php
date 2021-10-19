<?php
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
require_once './../query/allquery.php';
//set variables de usuario como vacías
$nombreUsuario = $passwordUsuario = $repPassword = $emailUsuario = "";
$usuarioError = $contrasenaError = $confContrasenaError = $emailError ="";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //varaibles globales
    $nombreUsuario = $_POST['regUsuario'];
    $passwordUsuario = $_POST['regPassword'];
    $repPassword = $_POST['regPasswordAgain'];
    $emailUsuario = $_POST['regEmail'];

    //validar el usuario
    if (empty(trim($nombreUsuario))) {
        $usuarioError = 'Por favor ingresa un nombre de usuario';
    } else
        if (!preg_match('/^[a-zA-Z0-9_]+$/', trim($nombreUsuario))) {
        $usuarioError = 'El usuario sólo debe tener letras, números o guión bajo';
    } else {
        // Prepare a select statement
        //$sql = $idSelect;

        if ($stmt = $conn->prepare($idSelect)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":usuario", $nombreUsuario, PDO::PARAM_STR);

            // set parametros
            $nombreUsuario = trim($nombreUsuario);

            // preparar la ejecución
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $usuarioError = 'Este nombre de usuario ya existe';
                } else {
                    $nombreUsuario = trim($nombreUsuario);
                }
            } else {
                $message = 'Algo salió mal, intenta nuevamente';
            }
            // Close statement
            unset($stmt);
        }
    }

    //validar correo
    if (empty(trim($emailUsuario))) {
        $emailError = 'Por favor ingresa un correo';
    } else {
        // Prepare a select statement about email
        //$sql = $emailSelect;

        if ($stmt = $conn->prepare($emailSelect)) {
            $stmt->bindParam(":correo", $emailUsuario, PDO::PARAM_STR);

            // set parametros
            $emailUsuario = trim($emailUsuario);

            // preparar la ejecución
            if ($stmt->execute()) {
                //si en las filas hay un correo que tenga ese misom del input
                if ($stmt->rowCount() > 0) {
                    $emailError = 'Este correo ya tiene una cuenta creada';
                } else {
                    $emailUsuario = trim($emailUsuario);
                }
            } else {
                $message = 'Algo salió mal, intenta nuevamente';
            }
            // Close statement
            unset($stmt);
        }
    }

    // validar contraseña
    if (empty(trim($passwordUsuario))) {
        $contrasenaError = 'Por favor, ingresa una contraseña';
    } elseif (strlen(trim($passwordUsuario)) < 6) {
        $contrasenaError = 'La contraseña debe tener por lo menos 6 caracteres';
    } else {
        $passwordUsuario = trim($passwordUsuario);
    }

    // validar confirmación de la contraseña
    if (empty(trim($repPassword))) {
        $confContrasenaError = 'Por favor confirmar contraseña';
    } else {
        $confirmarContrasena = trim($repPassword);
        if (empty($confContrasenaError) && ($passwordUsuario != $confirmarContrasena)) {
            $confContrasenaError = 'La Contraseña no coincide';
        }
    }

    if (empty($usuarioError) && empty($contrasenaError) && empty($confContrasenaError) && empty($emailError)) {
        # codigo para insert sql
        //$sql = $insertNewUser;

        //ocupar una variable statement para enviar el sql a la conexion
        $stmt = $conn->prepare($insertNewUser);

        //parámetros
        $stmt->bindParam(':usuario', $nombreUsuario);
        $password = password_hash($passwordUsuario, PASSWORD_BCRYPT);
        $stmt->bindParam(':regpassword', $password);
        $stmt->bindParam(':email', $emailUsuario);

        if ($stmt->execute()) {
            $message = 'Usuario creado satisfactoriamente';
        } else {
            $message = 'Lo sentimos, hubo un error al crear tu usuario';
        }
        unset($stmt);
    }
    unset($pdo);
}
?>