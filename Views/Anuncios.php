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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <title>Anuncios</title>
</head>

<body class="pt-5">
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
                <a href="./Anuncios.php" class="nav-item nav-link active text-primary">Anuncios</a>
                <a href="./Contactanos.php" class="nav-item nav-link text-white">Contáctanos</a>
            </div>
            <div class="navbar-nav ml-auto">
                <!-- Div del post del anuncio -->
                <div class="button-primary mr-3">
                    <a href="./CrearAnuncio.php" class="bg-transparent text-nowrap text-white text-decoration-none hover-none">Publicar Anuncio</a>
                </div>
                <!-- div contenedor de los botones -->
                <div class="mr-3">
                    <div class="row button-secondary mx-auto w-100">
                        <a href="./Login.php" class="bg-transparent text-white-90 cursor-pointer text-decoration-none hover-none">Iniciar
                            Sesión</a>
                        <!-- <a href="./RegistrarseManual.php" class="bg-transparent text-white-90 cursor-pointer text-decoration-none hover-none">Registrarse</a> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Contenido de la pagina-->

    <div class="row m-0 mt-5">
        <div class="col-extlarg-4 col-lg-4 col-md-4 col-sm-12">
            <div class="px-2 py-3">
                <div class="w-100 card shadow-default">
                    <div class="card-title w-100 items-in-row py-3">
                        <label class="w-100 text-center text-bold">Todas las Categorías</label>
                    </div>
                    <div class="card-body row m-0 px-3">
                        <div class="col-12 pb-2">
                            <label class="category-element-list cursor-pointer text-primary text-bold"><i class="fas fa-star mr-2"></i>Anuncios destacados (300)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-briefcase mr-2"></i>Empleos (113)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-home mr-2"></i>Bienes raíces (95)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-car mr-2"></i>Vehículos (85)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-tv mr-2"></i>Aparatos Electrónicos (100)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-music mr-2"></i>Instrumentos musicales (64)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-user-tie mr-2"></i>Servicios profesionales (87)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-book mr-2"></i>Educación (85)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-couch mr-2"></i>Muebles del hogar (325)</label>
                        </div>
                        <div class="col-12 py-2">
                            <label class="category-element-list cursor-pointer text-black-50 text-bold"><i class="fas fa-building mr-2"></i>Muebles de oficina (155)</label>
                        </div>
                    </div>
                    <div class="card-divider w-100 items-in-row py-3">
                        <label class="w-100 text-center text-bold">Filtros</label>
                    </div>
                    <div class="card-body row m-0 px-3">
                        <div class="col-12 mb-3">
                            <label class="text-black-50 text-bold"><i class="fas fa-sort mr-2"></i>Orden</label>
                            <select id="select-Fechas" title="Seleccionar fecha" class="form-component-shadow w-100">
                                <option value="Fecha de anuncio">Fecha de anuncio</option>
                                <option value="Orden por nombre alfabetico">Orden por nombre alfabetico</option>
                            </select>

                            <select id="select-Orden" title="Seleccionar orden" class="form-component-shadow w-100">
                                <option value="Mayor a menor">Mayor a menor</option>
                                <option value="Menor a mayor">Menor a mayor</option>
                            </select>

                        </div>
                        <div class="col-12 mb-3">
                            <label for="select-Location" class="text-black-50 text-bold"><i class="fas fa-compass mr-2"></i>Ubicación</label>
                            <select id="select-Location" title="Seleccionar locacion" class="form-component-shadow w-100">
                                <option value="">Seleccione</option>
                                <option value="1">Boaco</option>
                                <option value="2">Carazo</option>
                                <option value="3">Chinandega</option>
                                <option value="4">Chontales</option>
                                <option value="5">Estelí</option>
                                <option value="6">Granada</option>
                                <option value="7">Jinotega</option>
                                <option value="8">León</option>
                                <option value="9">Madriz</option>
                                <option value="10">Managua</option>
                                <option value="11">Masaya</option>
                                <option value="12">Matagalpa</option>
                                <option value="13">Nueva Segovia</option>
                                <option value="14">RAAN</option>
                                <option value="15">RAAS</option>
                                <option value="16">Río San Juan</option>
                                <option value="17">Rivas</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="inpRangoPrecio" class="text-black-50 text-bold"><i class="fas fa-money-bill-wave-alt mr-2"></i>Precio (C$)</label>
                            <div class="form-component-shadow p-1">
                                <input id="inpRangoPrecio" type="range" class="form-control-range w-100 mb-0" min="0" max="10000" step="500" onInput="$('#rangeval').php($(this).val())">
                            </div>
                            <div class="col-12 row m-0 px-0">
                                <span class="text-black-50">C$ 0</span> 
                                <span id="rangeval" class="ml-auto mr-0">5000<!-- Default value --></span>
                                <span class="ml-auto mr-0 text-black-50">C$ 10,000</span>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="select-Estado" class="text-black-50 text-bold"><i class="fas fa-list-ul mr-2"></i>Condición</label>
                            <select id="select-Estado" title="Seleccionar estado" class="form-component-shadow w-100">
                                <option value="">Seleccione</option>
                                <option value="1">Nuevo</option>
                                <option value="2">Semi-nuevo</option>
                                <option value="3">En buenas condiciones</option>
                                <option value="4">Para repuesto</option>       
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-extlarg-8 col-lg-8 col-md-8 col-sm-12 row m-0 mb-5">
            <div class="my-3 col-12 px-0">
                <div class="border-radius-20 shadow-default px-4 py-2 mx-auto my-0 row">
                    <div class="row col-12 mx-auto">
                        <input class="form-component w-100" type="text" placeholder="Buscar anuncio...">
                    </div>
                    <div class="row justify-content-center align-items-center mx-auto">
                        <div class="mx-auto">
                            <select class="form-component mx-3">
                                <option value="1">1 Estrella</option>
                                <option value="2">2 Estrella</option>
                                <option value="3">3 Estrella</option>
                                <option value="4">4 Estrella</option>
                                <option value="5">5 Estrella</option>
                            </select>
                        </div>
                        <div class="mx-auto">
                            <select class="form-component mx-3">
                                <option value="10">10 Resultados</option>
                                <option value="15">15 Resultados</option>
                                <option value="20">20 Resultados</option>
                            </select>
                        </div>
                        <div class="mx-auto">
                            <button class="button-primary text-white text-bold mx-3" type="button">Buscar<i class="fas fa-search ml-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Seccion de Anuncios  -->
            <div class="col-12 row m-0 px-0">
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">
                    <a href="./VerAnuncio.php" class="text-decoration-none text-black">
                        <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                            <!--Este es la seccion de la foto del anuncio y precio-->
                            <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_Laptop.png'); ">
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
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                            class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
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
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                                class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                                xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                                class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                                xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                                class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                                xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                                class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                                xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                                class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                                xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                                <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                            150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <Span class="text-black-50 puntuacion my-auto ">
                                        (9 valoraciones)
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
                    </a>

                </div>
                <!--Este es el div de un anuncioLicuadora-->
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">

                    <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                        <!--Este es la seccion de la foto del anuncio y precio-->
                        <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_Licuadora.png'); ">
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
                                    <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                        class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                        xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
                                        <path fill="currentColor "
                                            d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z ">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <span class="text-text-bold-600 text-black-50 ml-auto mr-0 ">
                                Aparatos Electrónicos
                            </span>
                        </div>
                        <!--Este es el div de valoracion y ubicacion del anuncio-->
                        <div class="p-3 row m-0 ">
                            <div class="mr-auto ml-0 valoracion row ">
                                <div class="my-auto mr-2 ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <Span class="text-black-50 puntuacion my-auto ">
                                    (10 valoraciones)
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
                                    Masaya
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Este es el div de un anuncioCasaLaGranSultana-->
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">

                    <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                        <!--Este es la seccion de la foto del anuncio y precio-->
                        <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_Casa.png'); ">
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
                                    <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                        class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                        xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
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
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <Span class="text-black-50 puntuacion my-auto ">
                                    (8 valoraciones)
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
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">

                    <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                        <!--Este es la seccion de la foto del anuncio y precio-->
                        <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_Empleo.png'); ">
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
                                    <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                        class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                        xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
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
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <Span class="text-black-50 puntuacion my-auto ">
                                    (7 valoraciones)
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
                                    Granada
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Este es el div de un anuncioGuitarra-->
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">

                    <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                        <!--Este es la seccion de la foto del anuncio y precio-->
                        <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_Guitarra.png'); ">
                            <span class="price mb-2 mt-auto px-3 py-1 ">
                                $350
                            </span>
                        </div>
                        <!--Esta es la seccion del nombre del anuncio, categoria y icono de guardar-->
                        <div class="border-bottom p-3 ">
                            <div class="row m-0 mb-2 ">
                                <span class="text-truncate text-bold col-10 mr-auto ml-0 my-auto pl-0">
                                    Guitarra Electroacustica Fender
                                </span>
                                <span class="text-primary my-auto ">
                                    <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                        class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                        xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
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
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <Span class="text-black-50 puntuacion my-auto ">
                                    (3 valoraciones)
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
                                    León
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Este es el div de un anuncioHilux-->
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">

                    <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                        <!--Este es la seccion de la foto del anuncio y precio-->
                        <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_Camioneta.png'); ">
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
                                    <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                        class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                        xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
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
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <Span class="text-black-50 puntuacion my-auto ">
                                    (20 valoraciones)
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
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">

                    <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                        <!--Este es la seccion de la foto del anuncio y precio-->
                        <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_ConverseStar.png'); ">
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
                                    <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                        class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                        xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
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
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <Span class="text-black-50 puntuacion my-auto ">
                                    (16 valoraciones)
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
                <div class="col-extlarg-4 col-larg-4 col-mediu-6 col-peque-12 ">

                    <div class="card-advertisement shadow-black jump m-3 cursor-pointer ">
                        <!--Este es la seccion de la foto del anuncio y precio-->
                        <div class="photo row m-0 " style="background-image: url( './../Resources/AnunciosDestacados/Anuncio_Maquillaje.png'); ">
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
                                    <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="bookmark "
                                        class="icon svg-inline--fa fa-bookmark fa-w-12 " role="img "
                                        xmlns="http://www.w3.org/2000/svg " viewBox="0 0 384 512 ">
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
                                <div class="my-auto mr-2 ">
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg aria-hidden="true " focusable="false " data-prefix="fas " data-icon="star "
                                            class="star svg-inline--fa fa-star fa-w-18 " role="img "
                                            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 576 512 ">
                                            <path fill="currentColor " d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382
                        150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z ">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <Span class="text-black-50 puntuacion my-auto ">
                                    (4 valoraciones)
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
                                    Chinandega
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Este es el pie de pagina-->
    <footer>
        <div class="bg-tertiary mx-auto">
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
                            <a href="../index.php">
                                Inicio
                            </a>
                        </span>
                        <span class="col-12 text-white-75 ">
                            <a href="./Anuncios.php">
                                Anuncios
                            </a>
                        </span>
                        <span class="col-12 text-white-75 ">
                            <a href="./Contactanos.php">
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
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./../Scripts/bootstrap.min.js"></script>
</body>

</html>