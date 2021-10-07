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
    <link rel="shortcut icon" href="Resources/LogoGrande - copia.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


    <title>Contáctanos</title>
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
            <div class="navbar-nav ml-auto">
                <a href="./CrearAnuncio.php" class="button-primary text-white mr-4 nav-item nav-link px-3">Publicar Anuncio</a>
                <div class="row button-secondary">
                    <!-- <a href="./Login.php" class="bg-transparent text-white-90 cursor-pointer text-decoration-none hover-none">Iniciar
                        Sesión</a>
                    <hr class="divider-v mx-3 my-0" style="  background: #000;  border: 1px solid rgba(255, 255, 255, 0.816);  "> -->
                    <a href="./RegistrarseOpciones.php" class="bg-transparent text-white-90 cursor-pointer text-decoration-none hover-none">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </nav>
    <!--Contenido de la página-->
    <div class="row mx-0 bg-responsive mt-5">
        <div class="col-extlarg-4 col-larg-4 col-mediu-8 col-peque-10 m-auto">
            <div class="w-100 card shadow-default">
                <div class="card-title w-100 items-in-row pt-3">
                    <!-- <label class="w-100 text-center m-auto text-primary font-18 text-bold">Registrate por medio de</label> -->
                    <ul class="nav nav-tabs w-100 m-auto justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active text-primary font-18 text-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-primary font-18 text-bold" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Regístrate</a>
                        </li>
                      </ul>
                </div>
                <div class="card-body row m-0">
                    <div class="tab-content w-100">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form>
                                <div class="card-body row m-0">
                                    <label for="inpUsuario" class="text-black-50 text-bold font-18"><i class="fas fa-user mx-2 fh-2"></i> Nombre de usuario</label>
                                    <input id="inpUsuario" class="form-component w-100 mb-4" type="text" required>
                                    <label for="inpPassword" class="text-black-50 text-bold font-18"><i class="fas fa-key mx-2"></i>Contraseña</label>
                                    <input id="inpPassword" class="form-component w-100" type="password" required>
                                </div>
                                <div class="w-100 items-in-row py-2">
                                    <button type="submit" class="button-primary text-white text-bold mx-auto">Ingresar<i class="fas fa-sign-in-alt ml-2"></i></button>
                                </div>
                            </form>                        
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form>
                                <div class="card-body row m-0">
                                    <label for="inpRegistroUsuario" class="text-black-50 text-bold font-18"><i class="fas fa-user mx-2"></i>Nombre de usuario</label>
                                    <input id="inpRegistroUsuario" class="form-component w-100 mb-4" type="text" required>
                                    <label for="inpRegistroEmail" class="text-black-50 text-bold font-18"><i class="fas fa-envelope mx-2"></i>Correo electrónico</label>
                                    <input id="inpRegistroEmail" class="form-component w-100 mb-4" type="email" required>
                                    <label for="inpRegistroPassword" class="text-black-50 text-bold font-18"><i class="fas fa-key mx-2"></i>Contraseña</label>
                                    <input id="inpRegistroPassword" class="form-component w-100 mb-4" type="password" required>
                                    <label for="inpPasswordAgain" class="text-black-50 text-bold font-18"><i class="fas fa-key mx-2"></i>Repetir contraseña</label>
                                    <input id="inpPasswordAgain" class="form-component w-100" type="password" required>
                                </div>
                                <div class="w-100 items-in-row py-2">
                                    <button type="submit" class="button-primary text-white text-bold mx-auto">Continuar<i class="fas fa-arrow-right ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Este es el pie de pagina-->
    <div class="bg-tertiary mx-auto ">
        <div class="p-5 mx-3 ">
            <div class="p-5 row footer ">
                <div class="col-extlarg-4 col-mediu-6 col-peque-12 row m-0 mb-3 ">
                    <div class="col-12 row m-0 ">
                        <img class="mx-0 logo " src="./../Resources/LogoGrande.png " />
                    </div>
                    <div class="col-12 pt-4 text-white-75 ">
                        <span class="mr-3 ">
                            Página de publicaciones y búsquedas de anuncios clasificados
                        </span>
                    </div>
                </div>
                <div class="col-extlarg-2 col-mediu-6 col-peque-12 row m-0 mb-3 ">
                    <span class="col-12 text-white text-bold ">
                        Redes sociales
                    </span>

                    <div class="col-12 text-white-75 row m-0 ">
                        <span class="my-auto ">
                            <svg class="icon " viewBox="0 0 45 45 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                <circle cx="22.5 " cy="22.5 " r="22.5 " fill="#03A9F4 " />
                                <path
                                    d="M29.2148 24.875L30.0592 19.4457H24.7801V15.9225C24.7801 14.4371 25.5176 12.9893 27.8819 12.9893H30.2818V8.3668C30.2818 8.3668 28.1039 8 26.0217 8C21.6742 8 18.8325 10.6004 18.8325 15.3078V19.4457H14V24.875H18.8325V38H24.7801V24.875H29.2148Z "
                                    fill="white " />
                            </svg>

                        </span>
                        <a class="my-auto ml-2 " href="https://www.facebook.com " target="_blank ">
                            Find It Now
                        </a>
                    </div>

                    <div class="col-12 text-white-75 row m-0 ">
                        <span class="my-auto ">
                            <svg class="icon " viewBox="0 0 45 45 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                <circle cx="22.5 " cy="22.5 " r="22.5 " fill="#03A9F4 " />
                                <path
                                    d="M22.0029 16.3339C18.3139 16.3339 15.3383 19.3102 15.3383 23C15.3383 26.6898 18.3139 29.6661 22.0029 29.6661C25.6919 29.6661 28.6675 26.6898 28.6675 23C28.6675 19.3102 25.6919 16.3339 22.0029 16.3339ZM22.0029 27.3338C19.619
                            27.3338 17.67 25.3903 17.67 23C17.67 20.6097 19.6132 18.6662 22.0029 18.6662C24.3926 18.6662 26.3358 20.6097 26.3358 23C26.3358 25.3903 24.3868 27.3338 22.0029 27.3338ZM30.4946 16.0613C30.4946 16.9257 29.7986 17.6161 28.9401 17.6161C28.0759
                            17.6161 27.3856 16.9199 27.3856 16.0613C27.3856 15.2026 28.0817 14.5064 28.9401 14.5064C29.7986 14.5064 30.4946 15.2026 30.4946 16.0613ZM34.9086 17.6393C34.81 15.5565 34.3344 13.7116 32.8089 12.1916C31.2892 10.6715 29.4447 10.1958
                            27.3624 10.0914C25.2163 9.96954 18.7837 9.96954 16.6376 10.0914C14.5611 10.19 12.7166 10.6657 11.1911 12.1858C9.66559 13.7058 9.19576 15.5507 9.09136 17.6335C8.96955 19.7801 8.96955 26.2141 9.09136 28.3607C9.18996 30.4435 9.66559
                            32.2884 11.1911 33.8084C12.7166 35.3285 14.5553 35.8042 16.6376 35.9086C18.7837 36.0305 25.2163 36.0305 27.3624 35.9086C29.4447 35.81 31.2892 35.3343 32.8089 33.8084C34.3286 32.2884 34.8042 30.4435 34.9086 28.3607C35.0305 26.2141
                            35.0305 19.7859 34.9086 17.6393ZM32.1361 30.664C31.6837 31.8011 30.8078 32.6771 29.6651 33.1354C27.954 33.8142 23.8938 33.6576 22.0029 33.6576C20.112 33.6576 16.046 33.8084 14.3407 33.1354C13.2038 32.6829 12.3279 31.8069 11.8697
                            30.664C11.1911 28.9525 11.3477 24.8913 11.3477 23C11.3477 21.1087 11.1969 17.0417 11.8697 15.336C12.3221 14.1989 13.198 13.3229 14.3407 12.8646C16.0518 12.1858 20.112 12.3424 22.0029 12.3424C23.8938 12.3424 27.9598 12.1916 29.6651
                            12.8646C30.802 13.3171 31.6779 14.1931 32.1361 15.336C32.8147 17.0475 32.6581 21.1087 32.6581 23C32.6581 24.8913 32.8147 28.9583 32.1361 30.664Z "
                                    fill="white " />
                            </svg>

                        </span>
                        <a class="my-auto ml-2 " href="https://www.instagram.com " target="_blank ">
                            Find It Now
                        </a>
                    </div>

                    <div class="col-12 text-white-75 row m-0 ">
                        <span class="my-auto ">
                            <svg class="icon my-auto " viewBox="0 0 45 45 " fill="none "
                                xmlns="http://www.w3.org/2000/svg ">
                                <circle cx="22.5 " cy="22.5 " r="22.5 " fill="#03A9F4 " />
                                <path d="M32.3274 16.705C32.3439 16.936 32.3439 17.167 32.3439 17.398C32.3439 24.4423 26.9823 32.5591 17.1827 32.5591C14.1637 32.5591 11.3591 31.6847 9 30.167C9.42895 30.2165 9.84134 30.233 10.2868 30.233C12.7779 30.233
                            15.0711 29.3916 16.9023 27.9563C14.5596 27.9068 12.5964 26.3726 11.92 24.2609C12.25 24.3104 12.5799 24.3434 12.9264 24.3434C13.4048 24.3434 13.8833 24.2773 14.3287 24.1619C11.8871 23.667 10.0558 21.5223 10.0558 18.9322V18.8662C10.7652
                            19.2622 11.5901 19.5096 12.4644 19.5426C11.0291 18.5857 10.0888 16.9525 10.0888 15.1048C10.0888 14.1149 10.3527 13.2076 10.8147 12.4157C13.4378 15.6492 17.3807 17.7608 21.802 17.9918C21.7195 17.5959 21.67 17.1835 21.67 16.7711C21.67
                            13.8345 24.0456 11.4424 26.9987 11.4424C28.5329 11.4424 29.9187 12.0858 30.8921 13.1251C32.0963 12.8942 33.2511 12.4487 34.274 11.8383C33.878 13.0757 33.0367 14.115 31.9314 14.7749C33.0037 14.6594 34.0431 14.3624 34.9999 13.95C34.2741
                            15.0058 33.3667 15.9461 32.3274 16.705Z " fill="white " />
                            </svg>

                        </span>
                        <a class="my-auto ml-2 " href="https://www.twitter.com " target="_blank ">
                            @Find It Now
                        </a>
                    </div>
                </div>
                <div class="col-extlarg-2 col-mediu-6 col-peque-12 row m-0 mb-3 ">
                    <span class="col-12 text-white text-bold ">
                        Enlaces rápidos
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="# ">
                            Inicio
                        </a>
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="./Views/Anuncios.php ">
                            Anuncios
                        </a>
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="./Views/Contactanos.php ">
                            Contáctanos
                        </a>
                    </span>
                </div>
                <div class="col-extlarg-4 col-mediu-6 col-peque-12 row m-0 mb-3 ">
                    <span class="col-12 text-white text-bold ">
                        Datos de contacto
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="tel:+50588888888 " target="_blank ">
                            Celular: +50588888888
                        </a>
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="tel:+50522222222 " target="_blank ">
                            Teléfono: +50522222222
                        </a>
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="mailto:correo@finfitnow.com " target="_blank ">
                            Correo: correo@finditnow.com
                        </a>
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="https://goo.gl/maps/4LGGEsh2sPZwaxyz8 " target="_blank ">
                            Dirección: Dirección ficticia de la empresa
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./../Scripts/bootstrap.min.js"></script>
    <script>
        $(function () {
          $('#myTab li:last-child a').tab('show')
        })
      </script>
</body>

</html>