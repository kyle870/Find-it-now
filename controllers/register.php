<?php
//requerimiento de la conexion a la DB
require_once './../config/connection.php';
require_once './../query/allquery.php';
//set variables de usuario como vacías
$nombreUsuario = $passwordUsuario = $repPassword = $emailUsuario = $nombreCompleto = $fechaNac = $departamento = $celularUser = $generoUser = "";
$usuarioError = $contrasenaError = $confContrasenaError = $emailError = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //varaibles del post
    $nombreUsuario = $_POST['regUsuario'];
    $emailUsuario = $_POST['regEmail'];
    $passwordUsuario = $_POST['regPassword'];
    $repPassword = $_POST['regPasswordAgain'];
    $nombreCompleto = $_POST['regNombreFull'];
    $fechaNac = $_POST['regFecha'];
    $celularUser = $_POST['regCelular'];
    $departamento = $_POST['regDepartamento'];
    $generoUser = $_POST['regGenero'];

    //variables de conexion SQL
    $selector_id =  $conn->prepare($idSelect);
    $selector_correo = $conn->prepare($emailSelect);

    //validar el usuario
    if (empty(trim($nombreUsuario))) {
        $usuarioError = 'Por favor ingresa un nombre de usuario';
    } else
        if (!preg_match('/^[a-zA-Z0-9_]+$/', trim($nombreUsuario))) {
        $usuarioError = 'El usuario sólo debe tener letras, números o guión bajo';
    } else {

        if ($selector_id) {
            // Bind variables to the prepared statement as parameters
            $selector_id->bindParam(":usuario", $nombreUsuario, PDO::PARAM_STR);

            // preparar la ejecución
            if ($selector_id->execute()) {
                if ($selector_id->rowCount() == 1) {
                    $usuarioError = 'Este nombre de usuario ya existe';
                } else {
                    $nombreUsuario = trim($nombreUsuario);
                }
            } else {
                $message = 'Algo salió mal, intenta nuevamente';
            }
            // Close statement
            unset($selector_id);
        }
    }

    //validar correo
    if (empty(trim($emailUsuario))) {
        $emailError = 'Por favor ingresa un correo';
    } else {
        if ($selector_correo) {
            $selector_correo->bindParam(":email", $emailUsuario, PDO::PARAM_STR);

            // preparar la ejecución
            if ($selector_correo->execute()) {
                //obtener filas
                $resultados = $selector_correo->fetch(PDO::FETCH_ASSOC);
                $total_resultados = $selector_correo->rowCount();

                //si en las filas hay una cuenta que contenga el mismo correo
                if ($total_resultados > 0 && $resultados['activo'] == 1) {
                    $emailError = 'Ya existe una cuenta usando este correo';
                } else {
                    $emailUsuario = trim($emailUsuario);
                }
            } else {
                $message = 'Algo salió mal, intenta nuevamente';
            }
            // Close statement
            unset($selector_correo);
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
        //ocupar una variable statement para enviar el sql a la conexion
        $stmt = $conn->prepare($insertNewUser);

        //parámetros
        $stmt->bindParam(':usuario', $nombreUsuario);
        //$password = password_hash($passwordUsuario, PASSWORD_BCRYPT);
        $password = md5($passwordUsuario);
        $stmt->bindParam(':regpassword', $password);
        $stmt->bindParam(':email', $emailUsuario);
        $stmt->bindParam(':nombreCompleto', $nombreCompleto);
        $stmt->bindParam(':fechaNacimiento', $fechaNac);
        $stmt->bindParam(':departamento', $departamento);
        $stmt->bindParam(':celular', $celularUser);
        $stmt->bindParam(':genero', $generoUser);


        if ($stmt->execute()) {
            $message = 'Usuario creado satisfactoriamente';
        } else {
            $message = 'Lo sentimos, hubo un error al crear tu usuario';
        }
        unset($stmt);
    }
    unset($pdo);
}
