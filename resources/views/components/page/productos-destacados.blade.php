<div data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="top-bottom">
    <div class="p-titulo">
        <h4> <img src="{{ asset('images/pata.png') }}" width="35" height="35"> Productos Destacados</h4>
    </div>

    <div class="row">

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto normal -->
            <div class="sv-producto-mod">
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-1.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>OdourLock Arena para Gatos 12 Kg</h3>
                    </a>
                    <p>CÓDIGO: 00256985</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h5>$75.000</h5>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-agregar">Agregar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto oferta -->
            <div class="sv-producto-mod">
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-2.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>Arena Para Gatos. Foficat. Lavanda. 5 Kg</h3>
                    </a>
                    <p>CÓDIGO: 00256985</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h4>$36.000 <strong>/ sin IVA</strong></h4>
                        <h4><span>$45.000</span></h4>
                        <div class="prod-oferta-ticket">
                            -15%
                        </div>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-agregar">Agregar </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto agotado -->
            <div class="sv-producto-mod">
                <div class="prod-agotado-ticket"> AGOTADO </div>
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-3.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>Arena Fresh Step Para Gatos Con Frebeze Por 20 Lb</h3>
                    </a>
                    <p>CÓDIGO: 00256985</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h5>$55.000</h5>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <a href="#" class="btn btn-avisame" data-toggle="modal" data-target="#Avisame">Avísame <i class="fa fa-bell"></i></a>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto oferta -->
            <div class="sv-producto-mod">
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-4.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>1st Choice Perros Cachorros de Razas Grandes 2.72 Kg</h3>
                    </a>
                    <p>CÓDIGO: 02354555</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h4>$72.742 <strong>/ sin IVA</strong></h4>
                        <h4><span>$75.000</span></h4>
                        <div class="prod-oferta-ticket">
                            -7%
                        </div>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-agregar">Agregar </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto normal -->
            <div class="sv-producto-mod">
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-1.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>OdourLock Arena para Gatos 12 Kg</h3>
                    </a>
                    <p>CÓDIGO: 00256985</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h5>$75.000</h5>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-agregar">Agregar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto oferta -->
            <div class="sv-producto-mod">
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-2.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>Arena Para Gatos. Foficat. Lavanda. 5 Kg</h3>
                    </a>
                    <p>CÓDIGO: 00256985</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h4>$36.000 <strong>/ sin IVA</strong></h4>
                        <h4><span>$45.000</span></h4>
                        <div class="prod-oferta-ticket">
                            -15%
                        </div>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-agregar">Agregar </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto agotado -->
            <div class="sv-producto-mod">
                <div class="prod-agotado-ticket"> AGOTADO </div>
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-3.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>Arena Fresh Step Para Gatos Con Frebeze Por 20 Lb</h3>
                    </a>
                    <p>CÓDIGO: 00256985</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h5>$55.000</h5>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <a href="#" class="btn btn-avisame" data-toggle="modal" data-target="#Avisame">Avísame <i class="fa fa-bell"></i></a>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <!-- producto oferta -->
            <div class="sv-producto-mod">
                <div class="sv-producto-mod-img">
                    <a href="#">
                        <img src="{{ asset('images/productos/producto-4.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                    </a>
                </div>
                <div class="sv-producto-titulo">
                    <a href="#">
                        <h3>1st Choice Perros Cachorros de Razas Grandes 2.72 Kg</h3>
                    </a>
                    <p>CÓDIGO: 02354555</p>
                </div>
                <div class="prod-mod-precio-carro">
                    <div>
                        <h4>$72.742 <strong>/ sin IVA</strong></h4>
                        <h4><span>$75.000</span></h4>
                        <div class="prod-oferta-ticket">
                            -7%
                        </div>
                    </div>
                </div>
                <div class="sv-btn-cant mb-2">
                    <form action="#" method="post" class="d-flex justify-content-between">
                        @csrf
                        <div class="handle-counter input-counter input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn-subtract  btn btn-primary">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control counter" name="quantity" id="quantity" data-min="1"  data-default="1">
                            <div class="input-group-append">
                                <button type="button" class="btn-add btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-agregar">Agregar </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
