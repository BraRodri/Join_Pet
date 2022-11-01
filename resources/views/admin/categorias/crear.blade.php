<x-admin-layout>

    @section('pagina')Crear nueva Categoria @endsection

    <div class="container-fluid">

        <div class="mb-4 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categorias</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Nueva Categoria</li>
                </ol>
            </nav>
        </div>

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Nueva Categoria</h1>

        <form id="form_crear_categoria" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
            @csrf

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        Datos
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Configuración SEO
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <!-- Datos -->
                <div class="tab-pane fade show active border p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="mb-3">
                        <label class="form-label" for=""><small>CATEGORIA BASE</small></label>
                        <select class="form-select select2" name="parent_id" id="parent_id">
                            <option value="">- Seleccione -</option>
                            {!! $categories !!}
                        </select>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label" for=""><small>NOMBRE CATEGORIA</small></label>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><small>IMAGEN CATEGORIA</small></label>
                        <input class="form-control" type="file" id="main_image" name="main_image" accept="image/*">
                        <label class="formNote">* Se recomienda subir imagen de 500 x 500 px. En formato JPG o PNG.</label>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><small>IMAGEN BANNER</small></label>
                        <input class="form-control" type="file" id="secondary_image" name="secondary_image" accept="image/*">
                        <label class="formNote">* Se recomienda subir imagen de 1024 x 200 px. En formato JPG o PNG.</label>
                    </div>
                    <hr>
                    <div class="form-check form-switch ms-3">
                        <input class="form-check-input" type="checkbox" id="main" value="1" name="main">
                        <label class="form-check-label" for="">¿Contenido Principal?</label>
                        <div id="passwordHelpBlock" class="form-text">
                            Seleccionar solo si la categoria sea principal!!!
                        </div>
                    </div>
                    <hr>
                    <div class="form-check form-switch ms-3">
                        <input class="form-check-input" type="checkbox" id="featured" value="1" name="featured">
                        <label class="form-check-label" for="">¿Contenido Destacado?</label>
                    </div>
                    <hr>
                    <div class="form-check form-switch ms-3">
                        <input class="form-check-input" type="checkbox" id="activar" value="1" name="activar" checked>
                        <label class="form-check-label" for="">¿Activar?</label>
                    </div>
                </div>

                <!-- SEO -->
                <div class="tab-pane fade border p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="form-group">
                        <label class="control-label">Título</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title"
                            maxlength="255" />
                        <label class="formNote">
                            * Titulo de la página: es el título que deseamos que aparezca en el buscador.
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Autor</label>
                        <input type="text" class="form-control" name="meta_author" id="meta_author" value="Distribuciones AXA S.A.S" readonly
                            maxlength="100" />
                        <label class="formNote">
                            * Autor: El nombre del webmaster o de la empresa autora de la página web.
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Descripción</label>
                        <input type="text" class="form-control" name="meta_description"
                            id="meta_description" />
                        <label class="formNote">
                            * Explica con un par de frases el contenido de la web.
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Palabras Claves (Keywords)</label>
                        <textarea class="form-control" name="meta_keyword" id="meta_keyword"
                            rows="5"></textarea>
                        <label class="formNote">
                            * Palabras que expecifiquen el contenido de la web. Por ejemplo: juegos, juegos
                            online, etc. (max: 200 caracteres).
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Robots</label>
                        <select class="form-control" name="meta_robots" id="meta_robots">
                            <option value="">Seleccionar</option>
                            <option value="index,follow">Indexar la página y seguir los enlaces</option>
                            <option value="index,nofollow">Indexar la página y no seguir los enlaces
                            </option>
                            <option value="noindex,follow">No indexar la página y seguir los enlaces
                            </option>
                            <option value="noindex,nofollow">No indexar la página y no seguir los
                                enlaces</option>
                        </select>
                        <div class="clearfix"></div>
                        <label class="formNote">
                            * Acción del motor - Especifica la acción del motor de búsqueda.
                        </label>
                    </div>

                </div>

            </div>

            <input type="text" name="author" value="{{ Auth::user()->name }}" hidden>

            <div class="mt-4 mb-4">
                <a href="{{ route('categorias.index') }}" class="btn btn-dark rounded btn-sm">
                    Cancelar
                </a>
                <button type="submit" id="btn_guardar" class="btn btn-warning rounded btn-sm">
                    Guardar Cambios
                </button>
            </div>

        </form>

    </div>

    <x-slot name="js">
        <script>

            //proceso de guardar solamente
            $('#form_crear_categoria').on('submit', function(e) {
                event.preventDefault();
                $('#btn_guardar').prop('disabled', true);
                if ($('#form_crear_categoria')[0].checkValidity() === false) {
                    event.stopPropagation();
                    $('#btn_guardar').prop('disabled', false);
                } else {

                    var url = "{{ route('categorias.guardar') }}";
                    $('#btn_guardar').prop('disabled', true);

                    //agregar data
                    var $thisForm = $('#form_crear_categoria');
                    var formData = new FormData(this);

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        type: "POST",
                        encoding:"UTF-8",
                        url: url,
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        beforeSend:function(){
                            let timerInterval;
                            Swal.fire({
                                title: "Espera!",
                                text: "Guardando información, espera un momento por favor...",
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading();
                                },
                            });
                        }
                    }).done(function(respuesta){
                        //console.log(respuesta);
                        if (!respuesta.error) {
                            Swal.fire({
                                text: "Información Guardada",
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 3000
                            });
                            setTimeout(function(){
                                window.location.href = "{{ route('categorias.index') }} ";
                            }, 1500);
                        } else {
                            $('#btn_guardar').prop('disabled', false);
                            setTimeout(function(){
                                Swal.fire({
                                    title: "Se presento un error!",
                                    text: respuesta.mensaje,
                                    icon: 'error',
                                });
                            },2000);
                        }
                    }).fail(function(resp){
                        console.log(resp);
                        $('#btn_guardar').prop('disabled', false);
                        Swal.fire({
                            title: "Se presento un error!",
                            text: 'Intenta otra vez, si persiste el error, comunicate con el area encargada, gracias.',
                            icon: 'error',
                        });
                    });

                }
                $('#form_crear_categoria').addClass('was-validated');
            });
        </script>
    </x-slot>

</x-admin-layout>
