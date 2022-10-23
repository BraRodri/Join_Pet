<x-app-layout>

    @section('pagina')Inicio @endsection

    <!-- SEO -->
    <x-slot name="meta">
        <meta name="description" content="{{ Str::limit('Inicio', 160, '') }}" />
        <meta itemprop="name" content="Inicio">
        <meta itemprop="description" content="Inicio">
        <meta property="og:title" content="Inicio" />
        <meta property="og:description" content="Inicio" />
        <meta property="og:url" content="{{ Request::url() }}"/>
        <meta name="keywords" content="Inicio, demas palabras" />
    </x-slot>

    <x-page.inicio.modal-promociones/>

    <x-page.inicio.home-slider/>

    <div class="container">

        <!-- informativo -->
        <div class="row mt-4 mb-4">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-right" data-aos-easing="ease-in-sine">
                <div class="informativos">
                    <img src="{{ asset('images/icons/icon-despacho.png') }}" width="50" height="50" alt=".">
                    <p>Despacho Express 24hrs en Bogota</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-down" data-aos-easing="ease-in-sine">
                <div class="informativos">
                    <img src="{{ asset('images/icons/icon-pedido.png') }}" width="50" height="50" alt=".">
                    <p>Revisa el estado de tu Pedido</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-down" data-aos-easing="ease-in-sine">
                <div class="informativos">
                    <img src="{{ asset('images/icons/icon-productos.png') }}" width="50" height="50" alt=".">
                    <p>Productos 100% confiables</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-top" data-aos-easing="ease-in-sine">
                <div class="informativos">
                    <img src="{{ asset('images/icons/icon-seguro.png') }}" width="50" height="50" alt=".">
                    <p>Compra Confiable, Garantía y Seguridad</p>
                </div>
            </div>
        </div>

    </div>

    <x-page.inicio.slider-categorias/>

    <div class="container">

        <div class="row banner-portada">
            <div class="col-md-4 bn-movil" data-aos="fade-right" data-aos-easing="ease-in-sine">
                <a href="#" target="">
                    <img src="{{ asset('images/banners/banner-1.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                </a>
            </div>
            <div class="col-md-4 bn-movil" data-aos="fade-down" data-aos-easing="ease-in-sine">
                <a href="#" target="">
                    <img src="{{ asset('images/banners/banner-2.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                </a>
            </div>
            <div class="col-md-4 bn-movil" data-aos="fade-top" data-aos-easing="ease-in-sine">
                <a href="#" target="">
                    <img src="{{ asset('images/banners/banner-1.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                </a>
            </div>
        </div>

        <x-page.inicio.productos-ofertas/>

        <div class="row banner-portada-2">
            <div class="col-md-6 bn-movil" data-aos="fade-right" data-aos-easing="ease-in-sine">
                <a href="#" target="">
                    <img src="{{ asset('images/banners/banner-grande-1.jpg') }}" class="img-fluid hvr-shrink" alt="" title="">
                </a>
            </div>
            <div class="col-md-6 bn-movil" data-aos="fade-down" data-aos-easing="ease-in-sine">
                <a href="#" target="">
                    <img src="{{ asset('images/banners/banner-grande-2.jpg') }}" class="img-fluid hvr-shrink" alt="" title="">
                </a>
            </div>
        </div>

        <x-page.inicio.servicios/>

    </div>

    {{-- <div class="container-fluid banner-grande mb-5">
        <a href="#">
            <img src="{{ asset('images/banners/banner-promocion.jpg') }}" class="img-fluid" alt="" title="">
        </a>
    </div> --}}

    <div class="container">

        <x-page.inicio.productos-destacados/>

    </div>

    <div class="fondo-productos mt-4">
        <div class="container">
            <h4 class="text-white mb-4"> <img src="{{ asset('images/pata.png') }}" width="35" height="35"> Para tu perro</h4>
            <div class="row ver-mas-productos-1">
                <div class="col-lg-4 col-12 bn-movil">
                    <a href="#">
                        <img src="{{ asset('images/banners/banner-promo-perros.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                    </a>
                </div>
                <div class="col-lg-3 col-12 bn-movil">
                    <a href="#">
                        <img src="{{ asset('images/banners/banner-promo-perros-1.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                    </a>
                </div>
                <div class="col-lg-3 col-12 bn-movil">
                    <a href="#">
                        <img src="{{ asset('images/banners/banner-promo-perros-1.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                    </a>
                </div>
                <div class="col-lg-2 col-12 ver-mas-div bn-movil-oculto">
                    <div>
                        <a href="#">
                            Ver mas productos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fondo-productos-2">
        <div class="container">
            <h4 class="mb-4"> <img src="{{ asset('images/pata.png') }}" width="35" height="35"> Para tu gato</h4>
            <div class="row ver-mas-productos-1">
                <div class="col-lg-2 col-12 ver-mas-div-2 bn-movil-oculto">
                    <div>
                        <a href="#">
                            Ver mas productos
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-12 bn-movil">
                    <a href="#">
                        <img src="{{ asset('images/banners/banner-promo-gatos-1.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                    </a>
                </div>
                <div class="col-lg-3 col-12 bn-movil">
                    <a href="#">
                        <img src="{{ asset('images/banners/banner-promo-gatos-1.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                    </a>
                </div>
                <div class="col-lg-4 col-12 bn-movil">
                    <a href="#">
                        <img src="{{ asset('images/banners/banner-promo-gatos.png') }}" class="img-fluid hvr-shrink" alt="" title="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <x-page.inicio.marcas/>

    </div>

    <!-- Modal Avisame -->
    <x-page.productos.modal-avisame/>

    <x-slot name="js">
        <script>
        </script>
    </x-slot>

</x-app-layout>
