<!-- MENÚ DERECHO DEL CARRO DE PRODUCTOS -->
<div id="modal_aside_left" class="modal fixed-left fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-aside" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="menu-categorias-productos">
                    <h2><img src="{{ asset('images/icons/icon-carro-2.png') }}" width="30" height="30" alt="."> MI CARRO</h2>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- lista de productos agregados -->
                <div class="agregados-carrito m-2">
                    <div class="row">
                        <div class="col-4">
                            <a href="#">
                                <img src="{{ asset('images/productos/producto-1.png') }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-8">
                            <div class="d-flex justify-content-between">
                                <p>Nombre del producto completo</p>
                                <h2>$30.990</h2>
                            </div>
                            <div class="d-flex justify-content-between">
                                <input type="text" class="form-control text-center" id="text" placeholder="1" lang="3" readonly>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agregados-carrito m-2 pt-3 ">
                    <div class="row">
                        <div class="col-4">
                            <a href="#">
                                <img src="{{ asset('images/productos/producto-2.png') }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-8">
                            <div class="d-flex justify-content-between">
                                <p>Nombre del producto completo</p>
                                <h2>$30.990</h2>
                            </div>
                            <div class="d-flex justify-content-between">
                                <input type="text" class="form-control text-center" id="text" placeholder="1" lang="3" readonly>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="ws-prod-subtotal">
                    <div>
                        <p>Productos agregados: <strong>(3)</strong> </p>
                    </div>
                    <div>
                        <h2>SUB-TOTAL: <strong>$60.900</strong></h2>
                    </div>
                </div>
                <a href="#" class="btn btn-dark">Ir a mi Carro <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->
