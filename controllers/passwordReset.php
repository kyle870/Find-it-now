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
            $result = 'Petición no válida';
        }
    } else {
        $result = 'Petición no válida';
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

        $linkLogin = 'http://localhost/findItNow/Views/Login.php';
        // mostrar resultados
        $result = "Pass : $password";
        //http://localhost/finditnow/controllers/passwordReset.php
    }
} else {
    $result = 'Petición no válida';
}

// Output de los resultados
//echo "<div>$result</div>";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../Style/site.css">
    <link rel="stylesheet" href="./../Style/margin-paddins.css">
    <link rel="stylesheet" href="./../Style/colums.css">
    <link rel="stylesheet" href="./../Style/component.css">
    <link rel="stylesheet" href="./../Style/colors.css">
    <link rel="stylesheet" href="./../Style/effects.css">
    <link rel="stylesheet" href="./../Style/sizes.css">
    <link rel="stylesheet" href="./../Style/bootstrap.min.css">
    <link rel="shortcut icon" href="./../Resources/icono.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Nueva contraseña</title>
</head>

<body class="bg-default ">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a href="#" class="navbar-brand">
            <img src="../Resources/LogoGrande.png" height="40" alt="CoolBrand">
        </a>
    </nav>

    <div class="row mx-3 bg-responsive mt-5">
        <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
            <div class="w-100 card shadow-default ">
                <div class="card-title w-100 items-in-row py-3">
                    <label class="w-100 text-center m-auto text-primary font-18 text-bold">Nueva contraseña</label>
                </div>
                <div class="card-body row justify-content-center m-0 pt-0">
                    <div class="col-12">
                        <p class="text-center text-black-50 text-bold font-12 p-3">
                            Contraseña aleatoria:
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="text-center text-black">
                            <?= $result ?>
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="text-center text-black-50 text-bold font-12 p-3">
                            Por favor, <a href="http://localhost/findItNow/Views/Login.php" target="_blank" class="text-info">inicia sesión</a> y cámbiala por otra.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>