<div class="h-contenedor">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="h-contenedor-items">
                    <p>Atención Telefónica 60-1-2193099 I Atención Whatsapp +57-305-8182491</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-contenedor-items2">
                    <p>
                        <strong> Redes Sociales:</strong></span>
                        <a href="#"><img src="{{ asset('images/icons/icon-facebook.png') }}"></a>
                        <a href="#"><img src="{{ asset('images/icons/icon-instagram.png') }}"></a>
                        <a href="#"><img src="{{ asset('images/icons/icon-twitter.png') }}"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<header id="header">

    <article class="container">
        <div class="row align-items-center">

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="h-logo-menu">
                    <div class="h-logotipo">
                        <div class="sv-logo" data-aos="zoom-out" data-aos-delay="300">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/logotipo_2.png') }}" class="img-fluid animated" alt="JoinPet" title="JoinPet">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <form action="" method="GET" class="needs-validation form-buscador" novalidate>
                    @csrf
                    <div class="h-buscar">
                        <div class="input-group">
                            <input class="form-control" type="search" value="" name="dato" id="example-search-input" placeholder="Buscar Producto..." required>
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="h-redes-sesion">
                    <div class="datos-sesion-enlaces mt-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @guest
                                    <!-- si no está logeado que aparezca esto -->
                                    Iniciar Sesión / Registro

                                    @else
                                    <!--- si está logeado que aparezca el nombre del usuario -->
                                    {{ Auth::user()->name }}
                                @endguest
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                @guest
                                    <button class="dropdown-item" type="button"><a href=""> Iniciar Sesión</a></button>
                                    <button class="dropdown-item" type="button"><a href=""> Registro</a></button>
                                    @else
                                    <button class="dropdown-item" type="button"><a href=""> Mi Cuenta</a></button>
                                    <button class="dropdown-item" type="button"><a href="{{ route('logout') }}"> Cerrar Sesión</a></button>
                                @endguest
                            </div>
                        </div>
                        <img src="{{ asset('images/icons/icon-inicio.png') }}" width="30" height="30" alt=".">
                    </div>
                    <div class="contenedor-carro">
                        <div class="contenedor-carro-cantidad">
                            <div class="contenedor-carrito">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_aside_left">
                                    <img src="{{ asset('images/icons/icon-carro.png') }}" width="45" height="45" alt="Carrito JoinPet" title="Carrito JoinPet">
                                    <span>0</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-precio">$ 10.000</p>
                    </div>
                </div>
            </div>

        </div>
    </article>

</header>

<!-- menu en desktop -->
<div class="d-none d-lg-block">
    <div class="main-wrapper">
        <nav class="navbar-1">
            <div class="brand-and-icon">
                <button type="button" class="navbar-toggler">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav-1">
                    <li>
                        <a href="{{ route('home') }}" class="a-link">
                            <div class="d-flex">
                                <img src="{{ asset('images/icons/icon-inicio.png') }}">
                                <span class="h-title">Inicio</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-link a-link">
                            <div class="d-flex">
                                <img src="{{ asset('images/icons/icon-perro.png') }}">
                                <span class="h-title">Perro</span>
                                <span class="drop-icon">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                        </a>
                        <div class="sub-menu">
                            <!-- item -->
                            <div class="sub-menu-item">
                                <h4>Comidas</h4>
                                <ul>
                                    <li><a href="#">cell phones & accessories</a></li>
                                    <li><a href="#">smart tv</a></li>
                                    <li><a href="#">computer & laptops</a></li>
                                    <li><a href="#">digital cameras</a></li>
                                </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class="sub-menu-item">
                                <h4>Juguetes</h4>
                                <ul>
                                    <li><a href="#"><a href="https://www.jqueryscript.net/tags.php?/iphone/">iphone</a>s</a></li>
                                    <li><a href="#">speakers</a></li>
                                    <li><a href="#">samsung devices</a></li>
                                    <li><a href="#">audio & headphones</a></li>
                                    <li><a href="#">vehicles electronics & GPS</a></li>
                                </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class="sub-menu-item">
                                <h2>Todas nuestras promociones las encuentras aqui!!</h2>
                                <button type="button" class="btn">Ir a la sección</button>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class="sub-menu-item" style="background-image: url('../../images/banner-perro.jpg'); ">
                            </div>
                            <!-- end of item -->
                        </div>
                    </li>
                    <li>
                        <a href="#" class="menu-link a-link">
                            <div class="d-flex">
                                <img src="{{ asset('images/icons/icon-gato.png') }}">
                                <span class="h-title">Gato</span>
                                <span class="drop-icon">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                        </a>
                        <div class="sub-menu">
                            <!-- item -->
                            <div class="sub-menu-item">
                                <h4>Comidas</h4>
                                <ul>
                                    <li><a href="#">cell phones & accessories</a></li>
                                    <li><a href="#">smart tv</a></li>
                                    <li><a href="#">computer & laptops</a></li>
                                    <li><a href="#">digital cameras</a></li>
                                </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class="sub-menu-item">
                                <h4>Juguetes</h4>
                                <ul>
                                    <li><a href="#"><a href="https://www.jqueryscript.net/tags.php?/iphone/">iphone</a>s</a></li>
                                    <li><a href="#">speakers</a></li>
                                    <li><a href="#">samsung devices</a></li>
                                    <li><a href="#">audio & headphones</a></li>
                                    <li><a href="#">vehicles electronics & GPS</a></li>
                                </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class="sub-menu-item">
                                <h2>Todas nuestras promociones las encuentras aqui!!</h2>
                                <button type="button" class="btn">Ir a la sección</button>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class="sub-menu-item" style="background-image: url('../../images/banner-gato.jpg'); ">
                            </div>
                            <!-- end of item -->
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="a-link">
                            <div class="d-flex">
                                <img src="{{ asset('images/icons/icon-servicios.png') }}">
                                <span class="h-title">Servicios</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="a-link">
                            <div class="d-flex">
                                <img src="{{ asset('images/icons/icon-promocion.png') }}">
                                <span class="h-title">Promociones</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="a-link">
                            <div class="d-flex">
                                <img src="{{ asset('images/icons/icon-contacto.png') }}">
                                <span class="h-title">Contacto</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- menu en movil -->
<div class="d-block d-lg-none">
    <nav id="navigation" class="navigation">
        <div class="navigation-header">
            <div class="navigation-brand-text">
                <a href="#">Menú</a>
            </div>
            <div class="navigation-button-toggler">
                <i class="hamburger-icon"></i>
            </div>
        </div>
        <div class="navigation-body">
            <div class="navigation-body-header">
                <span class="navigation-body-close-button">&#10005;</span>
            </div>
            <ul class="navigation-menu">
                <li class="navigation-item">
                    <a class="navigation-link" href="{{ route('home') }}">INICIO</a>
                </li>
                <li class="navigation-item">
                    <a class="navigation-link" href="{{ route('home') }}">NOSOTROS</a>
                </li>
                <li class="navigation-item">
                    <a class="navigation-link" href="{{ route('home') }}">MAYORISTA</a>
                </li>
                <li class="navigation-item">
                    <a class="navigation-link" href="{{ route('home') }}">DESPACHO</a>
                </li>
                <li class="navigation-item">
                    <a class="navigation-link" href="{{ route('home') }}">PREGUNTAS FRECUENTES</a>
                </li>
                <li class="navigation-item">
                    <a class="navigation-link" href="{{ route('home') }}">UBICACIÓN</a>
                </li>
                <li class="navigation-item">
                    <a class="navigation-link" href="{{ route('home') }}">CONTACTO</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- INICIO Bootstrap Cookie Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>Éste sitio usa Cookies</b> &#x1F36A; Usamos Cookies para asegurarnos que tengas una mejor experiencia en nuestro sitio web.
    <button type="button" class="btn btn-warning btn-sm acceptcookies">
        Acepto
    </button>
</div>

<!-- modal del carrito -->
<x-page.carrito.modal-carrito/>
