<div class="modal fade " id="modal_avisame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AVÍSAME CUANDO LLEGUE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sv-producto-mod">
                        <div class="sv-producto-mod-img">
                            <a href="#">
                                <img src="{{ asset('images/productos/producto-1.png') }}" class="img-fluid imagen-responsiva" alt="Sin imagen">
                            </a>
                        </div>
                        <div class="sv-producto-titulo">
                            <h3>Titulo del Producto</h3>
                            <p>CÓDIGO: 34567765</p>
                        </div>
                        <div class="prod-mod-precio-carro">
                            <!-- precio normal -->
                            <div>
                                <h5>$45.000</h5>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <p>Te avismos cuando el producto esté disponible. Completa los campos y listo.</p>
                        <form action="#" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="emailHelp" placeholder="ej: Juanito Perez" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Correo Elecrónico</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="ej:info@gmail.cl" required>
                            </div>
                            <input type="hidden" value="" name="idProducto">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-dark rounded" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
