<x-admin-layout>

    @section('pagina')Categorias @endsection

    <div class="container-fluid">

        <div class="mb-4 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                </ol>
            </nav>
        </div>

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 text-gray-800">Categorias</h1>
            </div>
            @can('Crear Categorias')
                <div class="col-lg-6 text-end">
                    <a href="{{ route('categorias.crear') }}" class="btn btn-warning btn-sm rounded">
                        Agregar Nueva Categoria
                    </a>
                </div>
            @endcan
        </div>

        <div class="card mt-4 mb-5">
            <div class="card-header" style="background-color: #f0eeee; color: #474747">
                Resultados
            </div>
            <div class="card-body">
                <table class="table table-striped" id="categorias">
                    <thead>
                        <th width="50">N°</th>
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th></th>
                        <th width="100">Estado</th>
                        <th>Fecha</th>
                        <th width="80"></th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <x-slot name="js">
        <script>

            var categorias = $("#categorias").DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
                },
                "order": [[ 0, "desc" ]],
                "pageLength" : 25,
                "responsive": true,
                "dom": 'Bfrtip',
                "buttons": [
                    'csv', 'excel'
                ],
                "columns": [
                    { "data": "id", "width": 30 },
                    { "data": "nombre" },
                    { "data": "imagen", "width": 100 },
                    { "data": "principal", "width": 50 },
                    { "data": "estado" },
                    { "data": "fecha", "width": 120 },
                    { "data": "boton", "width": 60 },
                ]
            });

            $(document).ready(function() {
                // cargar informacion de contacto
                cargarInformacion();
            });

            function cargarInformacion(){

                //url
                var url_ajax = route('categorias.obtener');

                //peticion
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    },
                    type: "GET",
                    encoding:"UTF-8",
                    url: url_ajax,
                    dataType:'json',
                    beforeSend:function(){
                        //mensaje de alerta
                        let timerInterval;
                        Swal.fire({
                            title: "Cargando",
                            text: "Procesando la información, espere...",
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                            },
                        });
                    }
                }).done(function(respuesta){
                    //console.log(respuesta);
                    if (respuesta.data.length > 0) {
                        respuesta.data.forEach(element => {

                            categorias.row.add({
                                "id": element["id"],
                                "boton": element["boton"],
                                "fecha": element["fecha"],
                                "estado": element["estado"],
                                "nombre": element["nombre"],
                                "imagen": element["imagen"],
                                "principal": element["principal"]
                            }).node().id = element['id'];
                            categorias.draw(false);

                        });
                    }
                    Swal.fire({
                        text: "Información Cargada",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }).fail(function(resp){
                    console.log(resp);
                    Swal.fire({
                        title: "Se presento un error!",
                        text: 'Intenta otra vez, si persiste el error, comunicate con el area encargada, gracias.',
                        icon: 'error',
                    });
                });

            };

            function funcionEliminar(id){
                Swal.fire({
                    title: 'Eliminar',
                    text: "¿Estas seguro de eliminar la dirección?",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        //url
                        var url_ajax = route('categorias.eliminar', id);

                        //peticion
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                            },
                            type: "GET",
                            encoding:"UTF-8",
                            url: url_ajax,
                            dataType:'json',
                            beforeSend:function(){
                                //mensaje de alerta
                                let timerInterval;
                                Swal.fire({
                                    title: "Eliminando",
                                    text: "Espere por favor...",
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        Swal.showLoading();
                                    },
                                });
                            }
                        }).done(function(respuesta){
                            console.log(respuesta);
                            if (!respuesta.error) {
                                Swal.fire({
                                    title: "Se presento un error!",
                                    text: respuesta.mensaje,
                                    icon: 'error',
                                });
                                categorias.clear().draw();
                                cargarInformacion();
                            } else {
                                setTimeout(function(){
                                    Swal.fire({
                                        text: 'La dirección fue eliminada correctamente!',
                                        icon: 'success',
                                        timer: 3000,
                                    });
                                },2000);
                            }
                        }).fail(function(resp){
                            console.log(resp);
                            Swal.fire({
                                title: "Se presento un error!",
                                text: 'Intenta otra vez, si persiste el error, comunicate con el area encargada, gracias.',
                                icon: 'error',
                            });
                        });

                    }
                });
            }

        </script>
    </x-slot>

</x-admin-layout>
