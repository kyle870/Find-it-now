<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/site.css">
    <link rel="stylesheet" href="./Style/margin-paddins.css">
    <link rel="stylesheet" href="./Style/colums.css">
    <link rel="stylesheet" href="./Style/component.css">
    <link rel="stylesheet" href="./Style/colors.css">
    <link rel="stylesheet" href="./Style/effects.css">
    <link rel="stylesheet" href="./Style/sizes.css">
    <link rel="stylesheet" href="./Style/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./Style/reloj.css"> -->
    <link rel="shortcut icon" href="Resources/icono.png" type="image/x-icon">
    <title>Inicio</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a href="./index.php" class="navbar-brand">
            <img src="./Resources/LogoGrande.png" height="40">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="./index.php" class="nav-item nav-link active text-primary">Inicio</a>
                <a href="./Views/Anuncios.php" class="nav-item nav-link text-white">Anuncios</a>
                <a href="./Views/Contactanos.php" class="nav-item nav-link text-white">Contáctanos</a>
            </div>
            <div class="navbar-nav ml-auto">
                <!-- Div del post del anuncio -->
                <div class="button-primary mr-3">
                    <a href="./Views/CrearAnuncio.php"
                        class="bg-transparent text-nowrap text-white text-decoration-none hover-none">Publicar
                        Anuncio</a>
                </div>
                <!-- div contenedor de los botones -->
                <div class="mr-3">
                    <div class="row button-secondary mx-auto w-100">
                        <a href="./Views/Login.php"
                            class=" bg-transparent text-white-90 cursor-pointer text-decoration-none hover-none">Iniciar
                            Sesión</a>
                        <!-- <hr class="divider-v mx-3 my-0" style="  background: #000;  border-right: 1px solid rgba(255, 255, 255);  "> -->
                        <!-- <a href="./Views/RegistrarseManual.php" class=" bg-transparent text-white-90 cursor-pointer text-decoration-none hover-none">Registrarse</a> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Esto es la portada de la pagina con el buscador de inicios-->

    <!-- The video -->

    <div class="video-container mt-5 d-flex mx-auto">
        <img id="coverInicio" src="Resources/ma5Iiq.jpg" alt="imagenCover" srcset="" class="w-100 h-auto img-fluid">
        <div class="overlay-desc row mx-0 ">
            <div class="overlay-lemma row mx-0 w-100 py-3">
                <h1 class="text-white text-center col-12">Encuentra todo lo que necesites.</h1>
                <!-- <h1 class="col-12 text-center text-white text-bold-600">Para tus pedidos llamar al 22222222</h1> -->
                <a href="./Views/Anuncios.php"
                    class="button-primary text-white-90 text-bold mx-auto text-decoration-none" type="button">Buscar
                    Anuncios</a>
            </div>
        </div>
    </div>
    <!--Esta es la seccion de categorias-->
    <!-- <div class="">
        
    </div> -->
    <div class="mt-5 mx-5">
        <!--Titulo-->
        <div class="title-section row text-center">
            <div class="row col-12 m-0 ">
                <div class="mx-auto w-50 row justify-content-center">
                    <span class="line my-auto col-extlarg-3 col-larg "></span>
                    <h2 class="title col-extlarg-6 col-larg-12 text-center mx-auto">
                        Categorías
                    </h2>
                    <span class="line my-auto col-extlarg-3 col-larg "></span>
                </div>
            </div>
            <span class="descripcion text-black-50 col-12 text-center mb-5 ">
                Encuentra lo que necesitas
            </span>
        </div>

        <!--Contenido-->
        <div class="row justify-content-center">
            <div id="cardElectronicos"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" my-auto col-12 ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tv"
                            class="icon svg-inline--fa fa-tv fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M592 0H48A48 48 0 0 0 0 48v320a48 48 0 0 0 48 48h240v32H112a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16H352v-32h240a48 48 0 0 0 48-48V48a48 48 0 0 0-48-48zm-16 352H64V64h512z">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Aparatos Electrónicos
                        </span>
                        <span class=" descripcion col-12 ">
                            230 Anuncios Activos
                        </span>
                    </div>
                </div>
            </div>

            <div id="cardEmpleos"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" my-auto col-12 ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden=" true " focusable=" false " data-prefix=" fas " data-icon=" briefcase "
                            class=" icon svg-inline--fa fa-briefcase fa-w-16 " role=" img "
                            xmlns=" http://www.w3.org/2000/svg " viewBox=" 0 0 512 512 ">
                            <path fill=" currentColor " d=" M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48
                    48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z ">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Empleos
                        </span>
                        <span class=" descripcion col-12 ">
                            350 Anuncios Activos
                        </span>
                    </div>
                </div>

            </div>
            <div id="cardBienesRaices"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden=" true " focusable=" false " data-prefix=" fas " data-icon=" home "
                            class=" icon svg-inline--fa fa-home fa-w-18 " role=" img "
                            xmlns=" http://www.w3.org/2000/svg " viewBox=" 0 0 576 512 ">
                            <path fill=" currentColor " d=" M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67
                    148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0
                    0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z ">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Bienes Raíces
                        </span>
                        <span class=" descripcion col-12 ">
                            122 Anuncios activos
                        </span>
                    </div>
                </div>
            </div>
            <div id="cardVehiculos"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">

                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden=" true " focusable=" false " data-prefix=" fas " data-icon=" car "
                            class=" icon svg-inline--fa fa-car fa-w-16 " role=" img "
                            xmlns=" http://www.w3.org/2000/svg " viewBox=" 0 0 512 512 ">
                            <path fill=" currentColor "
                                d=" M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65
                    235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51
                    0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71
                    48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z ">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Vehículos
                        </span>
                        <span class=" descripcion col-12 ">
                            580 Anuncios Activos
                        </span>
                    </div>
                </div>
            </div>

            <div id="cardInstrumentosMusica"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="music"
                            class="icon svg-inline--fa fa-music fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Instrumentos Musicales
                        </span>
                        <span class=" descripcion col-12 ">
                            98 Anuncios Activos
                        </span>
                    </div>
                </div>
            </div>

            <div id="cardServiciosProfesionales"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-tie"
                            class="icon svg-inline--fa fa-user-tie fa-w-14" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Servicios Profesionales
                        </span>
                        <span class=" descripcion col-12 ">
                            876 Anuncios Activos
                        </span>
                    </div>
                </div>
            </div>

            <div id="cardEducacion"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book"
                            class="icon svg-inline--fa fa-book fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Educación
                        </span>
                        <span class=" descripcion col-12 ">
                            234 Anuncios Activos
                        </span>
                    </div>
                </div>

            </div>
            <!-- <div class=" col-extlarg-3 col-mediu-4 col-peque-12 ">
            </div> -->
            <div id="cardMueblesHogar"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden=" true " focusable=" false " data-prefix=" fas " data-icon=" couch "
                            class=" icon svg-inline--fa fa-couch fa-w-20 " role=" img "
                            xmlns=" http://www.w3.org/2000/svg " viewBox=" 0 0 640 512 ">
                            <path fill=" currentColor "
                                d=" M160 224v64h320v-64c0-35.3 28.7-64 64-64h32c0-53-43-96-96-96H160c-53 0-96 43-96 96h32c35.3 0 64 28.7 64 64zm416-32h-32c-17.7 0-32 14.3-32 32v96H128v-96c0-17.7-14.3-32-32-32H64c-35.3 0-64 28.7-64 64 0 23.6
                    13 44 32 55.1V432c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-16h384v16c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16V311.1c19-11.1 32-31.5 32-55.1 0-35.3-28.7-64-64-64z ">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Muebles del Hogar
                        </span>
                        <span class=" descripcion col-12 ">
                            25 Anuncios Activos
                        </span>
                    </div>
                </div>
            </div>
            <!-- <div class=" col-extlarg-3 col-mediu-4 col-peque-12 ">
            </div> -->
            <div id="cardMueblesOficina"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="building"
                            class="icon svg-inline--fa fa-building fa-w-14" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Muebles de Oficina
                        </span>
                        <span class=" descripcion col-12 ">
                            102 Anuncios Activos
                        </span>
                    </div>
                </div>
            </div>
            <!-- <div id="cardElectrodomesticos"
                class="col-lg-3 col-md-4 col-sm-12 card-category m-3 px-3 py-5 row cursor-pointer shadow-primary ">
                <div class=" col-12 my-auto ">
                    <div class=" col-12 text-center text-white ">
                        <svg aria-hidden=" true " focusable=" false " data-prefix=" fas " data-icon=" blender "
                            class=" icon svg-inline--fa fa-blender fa-w-16 " role=" img "
                            xmlns=" http://www.w3.org/2000/svg " viewBox=" 0 0 512 512 ">
                            <path fill=" currentColor " d=" M416 384H160c-35.35 0-64 28.65-64 64v32c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-32c0-35.35-28.65-64-64-64zm-128 96c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33
                    32-32 32zm40-416h166.54L512 0H48C21.49 0 0 21.49 0 48v160c0 26.51 21.49 48 48 48h103.27l8.73 96h256l17.46-64H328c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h114.18l17.46-64H328c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h140.36l17.46-64H328c-4.42
                    0-8-3.58-8-8V72c0-4.42 3.58-8 8-8zM64 192V64h69.82l11.64 128H64z ">
                            </path>
                        </svg>
                    </div>
                    <div class=" row m-0 ">
                        <span class=" titulo col-12 ">
                            Electrodomesticos
                        </span>
                        <span class=" descripcion col-12 ">
                            342 Anuncios Activos
                        </span>
                    </div>
                </div>
            </div> -->
            <!-- <div class=" col-extlarg-3 col-mediu-4 col-peque-12 ">
            </div> -->
        </div>
    </div>
    <!--Esta es la seccion de anuncios destacados-->
    <div class="bg-default py-5 ">
        <div class="mx-5">
            <div class="title-section row ">
                <div class="row col-12 m-0 ">
                    <div class="mx-auto w-50 row justify-content-center">
                        <span class="line my-auto col-extlarg-3 col-larg "></span>
                        <h2 class="title col-extlarg-6 col-larg-12 text-center mx-auto px-1">
                            Anuncios destacados
                        </h2>
                        <span class="line my-auto col-extlarg-3 col-larg "></span>
                    </div>
                </div>
                <span class="descripcion text-black-50 col-12 text-center mb-5 ">
                    Anuncios marcados como favoritos por los usuarios
                </span>
            </div>
            <div>
                <!--Este es el div que contiene todos los anuncios-->
                <div class="row ">
                    <!--Este es el div de un anuncio-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">
                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_Laptop.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    $600
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                        Apple Macbook Pro
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Aparatos Eletrónicos
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mr-2 ">
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (15 valoraciones)
                                    </Span>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Managua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Este es el div de un anuncioLicuadora-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">

                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_Licuadora.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    $1000
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-truncate text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                        Licuadora Max Power Full Yes
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Aparatos Eletrónicos
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mr-2 ">
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (15 valoraciones)
                                    </Span>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Managua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Este es el div de un anuncioCasaLaGranSultana-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">

                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_Casa.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    $280
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                        Casa La Gran Sultana
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Bienes Raíces
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mr-2 ">
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (15 valoraciones)
                                    </Span>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Managua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Este es el div de un anuncioEmpleos-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">

                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_Empleo.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    10 Disponibles
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                        Vacantes de empleo
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Empleos
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mr-2 ">
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (15 valoraciones)
                                    </Span>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Managua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Este es el div de un anuncioGuitarra-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">

                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_Guitarra.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    $350
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-truncate text-bold col-10 mr-auto my-auto pl-0">
                                        Guitarra Electroacustica Fender
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Instrumentos Musicales
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mr-2 ">
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (15 valoraciones)
                                    </Span>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Managua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Este es el div de un anuncioHilux-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">

                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_Camioneta.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    $23,500
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                        Toyota Hilux 4x4 2014
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Vehiculos
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mr-2 ">
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (15 valoraciones)
                                    </Span>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Managua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Este es el div de un anuncioZapatos-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">

                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_ConverseStar.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    $80
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                        Converse Star
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Calzado
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mr-2 ">
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                                data-icon="star " class="star svg-inline--fa fa-star fa-w-18 "
                                                role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (15 valoraciones)
                                    </Span>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Managua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Este es el div de un anuncioCosmeticoKylie-->
                    <div class="col-extlarg-3 col-larg-4 col-mediu-6 col-peque-12 ">

                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 "
                                style="background-image: url( './Resources/AnunciosDestacados/Anuncio_Maquillaje.png'); ">
                                <span class="price mb-2 mt-auto px-3 py-1 ">
                                    $50
                                </span>
                            </div>
                            <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                            <div class="border-bottom p-3 ">
                                <div class="row m-0 mb-2 ">
                                    <span class="text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                        Sombras Koko Kylie
                                    </span>
                                    <span class="text-primary my-auto ">
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="bookmark " class="icon svg-inline--fa fa-bookmark fa-w-12 "
                                            role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor "
                                                d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                    Maquillaje
                                </span>
                            </div>
                            <!--Este es el div de valoracion y ubicacion del anuncio-->
                            <div class="p-3 row m-0 ">
                                <div class="mr-auto ml-0 valoracion row ">
                                    <div class="my-auto mx-auto">
                                        <!-- Container de estrellas de valoración -->
                                        <div class="container-star">
                                            <div class="rating d-flex flex-row-reverse">
                                                <input type="radio" name="rating" id="rating-5">
                                                <label for="rating-5" class="my-auto"></label>
                                                <input type="radio" name="rating" id="rating-4">
                                                <label for="rating-4" class="my-auto"></label>
                                                <input type="radio" name="rating" id="rating-3">
                                                <label for="rating-3" class="my-auto"></label>
                                                <input type="radio" name="rating" id="rating-2">
                                                <label for="rating-2" class="my-auto"></label>
                                                <input type="radio" name="rating" id="rating-1">
                                                <label for="rating-1" class="my-auto"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-auto my-auto">
                                        <Span class="text-black-50 puntuacion">
                                            (10 valoraciones)
                                        </Span>
                                    </div>
                                </div>
                                <div class="mr-0 ml-auto ubicacion ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas "
                                            data-icon="map-marker-alt "
                                            class="icon svg-inline--fa fa-map-marker-alt fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                            <path fill="currentColor " d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                            35.817-80 80 35.817 80 80 80z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-black-50 ">
                                        Granada
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Esta es la seccion de como funciona-->
    <div class="py-5 ">
        <div class="m-5 ">

            <div class="title-section row ">
                <div class="row col-12 m-0 ">
                    <div class="mx-auto w-50 row justify-content-center">
                        <span class="line my-auto col-extlarg-3 col-larg "></span>
                        <h2 class="title col-extlarg-6 col-larg-12 text-center mx-auto ">
                            Cómo Funciona
                        </h2>
                        <span class="line my-auto col-extlarg-3 col-larg "></span>
                    </div>
                </div>
                <span class="descripcion text-black-50 col-12 text-center mb-5 ">
                    Descubre o crea anuncios a nivel nacional
                </span>
            </div>

            <div class="row m-0">
                <div class="col-larg-4 col-mediu-6 col-peque-12 paso-paso row m-0">
                    <div class="circle mx-auto row shadow-black mt-3">
                        <span class="icon m-auto ">
                            <svg width="56 " height="64 " viewBox="0 0 56 64 " fill="none "
                                xmlns="http://www.w3.org/2000/svg ">
                                <path
                                    d="M28 32C36.8375 32 44 24.8375 44 16C44 7.1625 36.8375 0 28 0C19.1625 0 12 7.1625 12 16C12 24.8375 19.1625 32 28 32ZM39.2 36H37.1125C34.3375 37.275 31.25 38 28 38C24.75 38 21.675 37.275 18.8875 36H16.8C7.525 36 0
                            43.525 0 52.8V58C0 61.3125 2.6875 64 6 64H50C53.3125 64 56 61.3125 56 58V52.8C56 43.525 48.475 36 39.2 36Z "
                                    fill="#03A9F4 " />
                            </svg>

                        </span>
                    </div>

                    <span class="description w-100 text-center text-bold mt-3 ">
                        1. Crea una cuenta
                    </span>
                </div>
                <div class="col-larg-4 col-mediu-6 col-peque-12 paso-paso row m-0">
                    <div class="circle mx-auto row shadow-black mt-3">
                        <span class="icon m-auto ">
                            <svg width="61 " height="61 " viewBox="0 0 61 61 " fill="none "
                                xmlns="http://www.w3.org/2000/svg ">
                                <g clip-path="url(#clip0) ">
                                    <path
                                        d="M35.2656 45.7518H25.7344C24.1498 45.7518 22.875 44.477 22.875 42.8924V22.8768H12.4264C10.3057 22.8768 9.24531 20.3153 10.7465 18.8141L28.8678 0.680908C29.7613 -0.212647 31.2268 -0.212647 32.1203 0.680908L50.2535
                            18.8141C51.7547 20.3153 50.6943 22.8768 48.5736 22.8768H38.125V42.8924C38.125 44.477 36.8502 45.7518 35.2656 45.7518ZM61 44.7987V58.1424C61 59.727 59.7252 61.0018 58.1406 61.0018H2.85938C1.2748 61.0018 0 59.727 0 58.1424V44.7987C0
                            43.2141 1.2748 41.9393 2.85938 41.9393H19.0625V42.8924C19.0625 46.5739 22.0529 49.5643 25.7344 49.5643H35.2656C38.9471 49.5643 41.9375 46.5739 41.9375 42.8924V41.9393H58.1406C59.7252 41.9393 61 43.2141 61 44.7987ZM46.2266 55.2831C46.2266
                            53.9725 45.1543 52.9003 43.8438 52.9003C42.5332 52.9003 41.4609 53.9725 41.4609 55.2831C41.4609 56.5936 42.5332 57.6659 43.8438 57.6659C45.1543 57.6659 46.2266 56.5936 46.2266 55.2831ZM53.8516 55.2831C53.8516 53.9725 52.7793 52.9003
                            51.4688 52.9003C50.1582 52.9003 49.0859 53.9725 49.0859 55.2831C49.0859 56.5936 50.1582 57.6659 51.4688 57.6659C52.7793 57.6659 53.8516 56.5936 53.8516 55.2831Z "
                                        fill="#03A9F4 " />
                                </g>
                                <defs>
                                    <clipPath id="clip0 ">
                                        <rect width="61 " height="61 " fill="white " />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>
                    </div>

                    <span class="description w-100 text-center text-bold mt-3 ">
                        2. Publica tus anuncios
                    </span>
                </div>
                <div class="col-larg-4 col-mediu-6 col-peque-12 paso-paso row m-0">
                    <div class="circle mx-auto row shadow-black mt-3">
                        <span class="icon m-auto ">
                            <svg width="51 " height="51 " viewBox="0 0 51 51 " fill="none "
                                xmlns="http://www.w3.org/2000/svg ">
                                <path
                                    d="M10.3594 22.3125H2.39062C1.0703 22.3125 0 23.3828 0 24.7031V48.6094C0 49.9297 1.0703 51 2.39062 51H10.3594C11.6797 51 12.75 49.9297 12.75 48.6094V24.7031C12.75 23.3828 11.6797 22.3125 10.3594 22.3125ZM6.375 47.0156C5.05468
                            47.0156 3.98438 45.9453 3.98438 44.625C3.98438 43.3047 5.05468 42.2344 6.375 42.2344C7.69532 42.2344 8.76562 43.3047 8.76562 44.625C8.76562 45.9453 7.69532 47.0156 6.375 47.0156ZM38.25 8.11338C38.25 12.3384 35.6631 14.7083 34.9353
                            17.5312H45.0679C48.3945 17.5312 50.9844 20.295 50.9999 23.3184C51.0083 25.1051 50.2482 27.0287 49.0636 28.2188L49.0526 28.2298C50.0324 30.5544 49.8731 33.8116 48.1255 36.1457C48.9902 38.725 48.1186 41.8935 46.4937 43.5922C46.9218
                            45.3451 46.7172 46.8369 45.8813 48.0379C43.8482 50.9589 38.8094 51 34.5484 51L34.265 50.9999C29.4552 50.9982 25.5187 49.247 22.3557 47.8398C20.7663 47.1327 18.688 46.2573 17.1112 46.2283C16.4598 46.2164 15.9375 45.6847 15.9375
                            45.0332V23.7397C15.9375 23.421 16.0652 23.1151 16.2919 22.8909C20.2378 18.9918 21.9346 14.8637 25.1688 11.624C26.6434 10.1466 27.1797 7.91496 27.6982 5.75682C28.1411 3.91395 29.0677 0 31.0781 0C33.4688 0 38.25 0.796875 38.25 8.11338Z "
                                    fill="#03A9F4 " />
                            </svg>
                        </span>
                    </div>

                    <span class="description w-100 text-center text-bold mt-3 ">
                        3. Trato hecho
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--Esta es la seccion de plan de precios-->
    <!-- <div class="bg-default p-5 ">

        <div class="m-5 ">

            <div class="title-section row ">
                <div class="row col-12 m-0 ">
                    <div class="mx-auto w-50 row ">
                        <span class="line my-auto col-extlarg-3 col-larg "></span>
                        <h1 class="title col-extlarg-6 col-larg-12 text-center mx-auto ">
                            Plan de Precios
                        </h1>
                        <span class="line my-auto col-extlarg-3 col-larg "></span>
                    </div>
                </div>
                <span class="descripcion text-black-50 col-12 text-center mb-5 ">
                    Agrege exclusividad a sus anuncios con nuestros diferentes planesEncuentra lo que necesitas
                </span>
            </div>

            <div class="row m-0 ">
                <div class="price-plan col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">
                    <div class="row m-3 p-5 price-plan-default ">
                        <span class="col-12 text-center price mb-4 ">
                            $3
                        </span>
                        <span class="col-12 text-center item ">
                            Publicacion de hasta 30 anuncios gratis
                        </span>
                        <span class="col-12 text-center item ">
                            Disponibilidad de 5 anuncios destacados
                        </span>
                        <span class="col-12 text-center item ">
                            Acceso a funciones ilimitadas por 10 dias
                        </span>
                        <span class="col-12 text-center item ">
                            ¡100% seguro!
                        </span>
                        <span class="col-12 text-center item ">
                            PERFIL VERIFICADO
                        </span>
                        <div class="col-12 row m-0 mt-4 ">
                            <button class="mx-auto button-buy cursor-pointer ">
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="price-plan col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">
                    <div class="row m-3 p-5 price-plan-selected shadow-default jump ">
                        <span class="col-12 text-center price mb-4 ">
                            $8
                        </span>
                        <span class="col-12 text-center item ">
                            Publicacion de anuncios gratis ilimitado
                        </span>
                        <span class="col-12 text-center item ">
                            Disponibilidad de 20 anuncios destacados
                        </span>
                        <span class="col-12 text-center item ">
                            Acceso a funciones ilimitadas al mes
                        </span>
                        <span class="col-12 text-center item ">
                            ¡100% seguro!
                        </span>
                        <span class="col-12 text-center item ">
                            PERFIL VERIFICADO
                        </span>
                        <div class="col-12 row m-0 mt-4 ">
                            <button class="mx-auto button-buy cursor-pointer ">
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="price-plan col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">
                    <div class="row m-3 p-5 price-plan-default ">
                        <span class="col-12 text-center price mb-4 ">
                            $12
                        </span>
                        <span class="col-12 text-center item ">
                            Publicacion de anuncios gratis ilimitados
                        </span>
                        <span class="col-12 text-center item ">
                            Disponibilidad de 100 anuncios destacados
                        </span>
                        <span class="col-12 text-center item ">
                            Acceso a funciones ilimitadas al mes
                        </span>
                        <span class="col-12 text-center item ">
                            ¡100% seguro!
                        </span>
                        <span class="col-12 text-center item ">
                            PERFIL VERIFICADO
                        </span>
                        <div class="col-12 row m-0 mt-4 ">
                            <button class="mx-auto button-buy cursor-pointer ">
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--Este es el pie de pagina-->
    <div class="bg-tertiary mx-auto">
        <div class="p-5 mx-3 ">
            <div class="p-5 row footer ">
                <div class="col-extlarg-4 col-mediu-6 col-peque-12 row m-0 mb-3 ">
                    <div class="col-12 row m-0 ">
                        <img class="mx-0 logo " src="Resources/LogoGrande.png " />
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
                        <a href="./index.php">Inicio</a>
                    </span>
                    <span class="col-12 text-white-75">
                        <a href="./Views/Anuncios.php">Anuncios</a>
                    </span>
                    <span class="col-12 text-white-75 ">
                        <a href="./Views/Contactanos.php ">Contáctanos</a>
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
                            Correo: correo@finfitnow.com
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
    <!-- <script src="./Scripts/site.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="./Scripts/bootstrap.min.js"></script>

</body>

</html>