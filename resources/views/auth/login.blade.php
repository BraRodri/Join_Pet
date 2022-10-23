<x-login-layout>

    <!-- title -->
    @section('pagina')Login @endsection

    <div class="row no-gutter justify-content-md-center">

        <!-- The content half -->
        <div class="col-md-9 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xl-7 mx-auto">
                            <div class="text-center imagen mb-3">
                                <img src="{{ asset('images/logotipo.png') }}" class="img-fluid w-50">
                            </div>
                            <div class="card p-5">
                                <p class="text-muted text-center mb-4">
                                    Ingresar al Sistema
                                </p>
                                <form id="formulario_login" class="needs-validation" method="POST" novalidate>
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input id="email" name="email" type="email" placeholder="Correo Electronico" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="password" name="password" type="password" placeholder="Contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-danger">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Recordar contraseña</label>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-warning btn-small mb-2 rounded-pill shadow-sm">Iniciar Sesión</button>
                                    </div>
                                    <div class="text-center text-final">
                                        <p>
                                            Desarrollado por <a href="#" class="font-italic text-muted">
                                            <u>Brayan Rodriguez</u></a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>

</x-login-layout>
