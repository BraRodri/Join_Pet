{{-- <div class="f-footer">
    <div class="container">
        <div class="f-newsletter">
            <div class="f-suscripcion">
                <div>
                    <p><img src="{{ asset('images/icons/icons-correo.png') }}" width="45" height="45" alt="."> <strong>SUSCRÍBETE</strong> y entérare de todas nuestras  Ofertas y Promociones</p>
                </div>
                <form action="#" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="f-form">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu Correo..." required>
                        <button type="submit" class="btn btn-danger">Suscribirme</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<footer id="footer">

    <div class="container">

        <div class="row f-footer2">

            <div class="col-lg-3">
                    <div class="f-logo animated">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logotipo_2.png') }}" alt="JoinPet" class="img-fluid" title="JoinPet">
                        </a>
                    </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 links-pag">
                <h2>INFORMACIÓN</h2>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Despacho</a></li>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                        <li><a href="#">Ubicación</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 links-pag">
                <h2>CATEGORÍAS</h2>
                    <ul>
                        <li>
                            <a href="#">Perros</a>
                        </li>
                        <li>
                            <a href="#">Gatos</a>
                        </li>
                        <li>
                            <a href="#">Accesorios</a>
                        </li>
                        <li>
                            <a href="#">Juguetes</a>
                        </li>
                        <li>
                            <a href="#">Alimento</a>
                        </li>
                    </ul>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <h2>CLIENTE</h2>
                    <ul>
                        <li><a href="#">Mi Carro</a></li>
                        <li><a href="#">Mi Cuenta</a></li>
                        <li><a href="#">Registrarme</a></li>
                        <li><a href="#">Recuperar Clave</a></li>
                    </ul>
            </div>

        </div>

        <div class="row f-footer2 f-footer3">
            <div class="col-lg-3">
                <div class="f-informacion">
                    <p> Carrera 20 #88-63, Puente Aranda, Bogota</p>
                    <p> <a href="tel:313 2365478}">313 2365478</a></p>
                    <p> <a href="tel:#">313 2365478</a> / <a href="tel:#">313 2365478</a></p>
                    <p> <a href="mailto:#">correo@gmail.com</a> </p>

                </div>
            </div>

            <div class="col-lg-3 f-redes">
                <h2>SÍGUENOS EN</h2>
                <a href="" target="_blank"><img src="{{ asset('images/icons/icon-twitter.png') }}" width ="30" height="30" alt="twitter"></a>
                <a href="" target="_blank"><img src="{{ asset('images/icons/icon-instagram.png') }}" width ="30" height="30" alt="instagram"></a>
                <a href="" target="_blank"><img src="{{ asset('images/icons/icon-facebook.png') }}" width ="30" height="30" alt="facebook"></a>
            </div>

            <div class="col-lg-3 f-pagos">
                <h2>MEDIOS DE PAGO</h2>
                <img src="{{ asset('images/medios-pago.png') }}" class="img-fluid" alt="webpay">
            </div>
        </div>

        <div class="visual">
            <a href="#" target="_blank">Brayan Rodriguez</a>
        </div>

    </div>

</footer> --}}

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Newsletter</h4>
                    <p>Suscribite y entérare de todas nuestras  Ofertas y Promociones</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Suscribete">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo align-items-center">
                        <img src="{{ asset('images/logotipo_2.png') }}" class="img-fluid" alt="">
                    </a>
                    <p>Colocamos información aqui sobre este proyecto, que se hace y el objetivo principal</p>
                    <div class="social-links mt-3">
                        <a href="#"><img src="{{ asset('images/icons/icon-facebook.png') }}"></a>
                        <a href="#"><img src="{{ asset('images/icons/icon-instagram.png') }}"></a>
                        <a href="#"><img src="{{ asset('images/icons/icon-twitter.png') }}"></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Información</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Sobre Nosotros</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Servicios</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Categorias</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Contacto</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terminos y Condiciones</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Politica de Privacidad</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Para el Cliente</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Iniciar Sesión</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Registrarme</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Mi Cuenta</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Seguimiento de Pedido</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Cambiar Contraseña</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contacto</h4>
                    <p>
                        Av 3 #4a-56, Puente Aranda <br>
                        Bogotá, Colombia
                        <strong>Celular:</strong> +57 314 5467890<br>
                        <strong>Email:</strong> contacto@joinpet.com.co<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright {{ date('Y') }} <strong><span>JoinPet</span></strong>. Todos los derechos Reservados.
        </div>
        <div class="credits">
            Diseñado por <a href="#">Brayan Rodriguez</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="cd-top">Top</a><!-- BackTop -->
