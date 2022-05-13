<x-app-layout>

    @section('pagina')Home @endsection

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

    <x-modal-promociones></x-modal-promociones>

    <x-home-slider></x-home-slider>

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

    <x-slider-categorias></x-slider-categorias>

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

        <x-productos-ofertas></x-productos-ofertas>

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

        <x-productos-destacados></x-productos-destacados>

        <x-home-marcas></x-home-marcas>

    </div>

    <x-slot name="js">
        <script>
        </script>
    </x-slot>

</x-app-layout>
