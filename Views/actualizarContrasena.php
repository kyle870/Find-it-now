<?php
    require_once './../config/connection.php';
    require_once './../controllers/sesionActiva.php';
    require_once './../controllers/updatePassword.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Cambiar contraseña</title>
</head>

<body class="bg-default">
    <!--Esto es la barra de navegacion de la pagina-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a href="./../index.php" class="navbar-brand">
            <img src="../Resources/LogoGrande.png" height="40" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="./../index.php" class="nav-item nav-link text-white">Inicio</a>
                <a href="./Anuncios.php" class="nav-item nav-link text-white">Anuncios</a>
                <a href="./Contactanos.php" class="nav-item nav-link text-white">Contáctanos</a>
            </div>
        </div>
    </nav>

    <!--Contenido de la página-->
    <div id="fondo-contrasena" class="row mx-3 bg-responsive mt-5">
        <div class="col-lg-4 col-md-8 col-sm-10 m-auto">
            <div class="w-100 card shadow-default">
                <div class="card-title w-100 items-in-row py-3">
                    <label class="w-100 text-center m-auto text-dark font-18 text-bold">Cambiar contraseña</label>
                </div>
                <?php if (!empty($message)) : ?>
                    <label class="text-success text-bold text-center font-18 w-100 pt-3 m-0"><i class="fas fa-check mx-2"></i><?= $message ?></label>
                <?php endif; ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="card-body row m-0">
                        <label for="inpContrasena" class="text-black-50 text-bold"><i class="fas fa-key mr-2"></i>Contraseña actual</label>
                        <input id="inpContrasena" name="viejaContrasena" type="password" class="form-component w-100 mb-4" >
                        <?php if (!empty($contrasenaError)) : ?>
                            <label class="text-danger text-bold text-center font-12 w-100 pb-3 my-0"><i class="fas fa-exclamation mx-2"></i><?= $contrasenaError ?></label>
                        <?php endif; ?>
    
                        <label for="inpNuevaContrasena" class="text-black-50 text-bold"><i class="fas fa-key mr-2"></i>Nueva Contraseña</label>
                        <input id="inpNuevaContrasena" name="nuevaContrasena"  type="password" class="form-component w-100 mb-4">
                        <?php if (!empty($nuevaContrasenaError)) : ?>
                            <label class="text-danger text-bold text-center font-12 w-100 pb-3 my-0"><i class="fas fa-exclamation mx-2"></i><?= $nuevaContrasenaError ?></label>
                        <?php endif; ?>
    
                        <label for="inpConfirmContrasena" class="text-black-50 text-bold"><i class="fas fa-key mr-2"></i>Confirmar Contraseña</label>
                        <input id="inpConfirmContrasena" name="confirmContrasena" type="password" class="form-component w-100 mb-4">
                        <?php if (!empty($confContrasenaError)) : ?>
                            <label class="text-danger text-bold text-center font-12 w-100 pb-3 my-0"><i class="fas fa-exclamation mx-2"></i><?= $confContrasenaError ?></label>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer w-100 items-in-row justify-content-center py-2">
                        <button id="btnUpdatePassword" value="Submit" type="Submit" class="btn btn-success text-white cursor-pointer  font-weight-bold m-2"><i class="fas fa-sync-alt mx-2"></i>Cambiar</button>
                        <!-- <button id="btnResetPassword" value="Submit" class=" btn btn-link cursor-pointer  font-weight-bold m-2">Olvidé mi contraseña</button> -->
                        <a href="./reestablecerContrasena.php" class="btn btn-link cursor-pointer font-weight-bold m-2" role="button">Olvidé mi contraseña</a>
                    </div>
                </form>
                <a href="./editarPerfil.php" class="btn btn-outline-secondary font-weight-bold m-2" role="button"><i class="fas fa-arrow-left mx-2"></i>Regresar</a>
                <!-- <button class="btn btn-secondary cursor-pointer  font-weight-bold m-2"><a href="./editarPerfil.php" class="text-white text-decoration-none"><i class="fas fa-arrow-left mx-2"></i>Regresar</a></button> -->
            </div>
        </div>

    </div>
    <!--Este es el pie de pagina-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./../Scripts/bootstrap.min.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>