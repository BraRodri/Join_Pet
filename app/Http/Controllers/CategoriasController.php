<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Services\GenerateCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoriasController extends Controller
{

    private $generate_categories;
    public function __construct(GenerateCategories $generate_categories)
    {
        $this->generate_categories = $generate_categories;
    }

    public function index()
    {
        return view('admin.categorias.index');
    }

    public function obtener()
    {
        $datos = array();

        $categorias = DB::select('SELECT
            categorias.id,
            categorias.parent_id,
            categorias.title,
            categorias.main_image,
            categorias.secondary_image,
            categorias.position,
            categorias.featured,
            categorias.active,
            categorias.created_at,
            categorias.updated_at,
            categorias.author,
            CASE
                WHEN parent_id > 0 THEN
                    CASE
                        WHEN (SELECT c.title FROM categorias AS c WHERE c.id = categorias.parent_id AND c.parent_id = 0) IS NULL THEN
                        (SELECT d.title FROM categorias AS d WHERE d.id = (SELECT c.parent_id FROM categorias AS c WHERE c.id = categorias.parent_id AND c.parent_id <> 0))
                        ELSE (SELECT c.title FROM categorias AS c WHERE c.id = categorias.parent_id AND c.parent_id = 0)
                    END
            END AS category_title_level_2,
            (SELECT c.title FROM categorias AS c WHERE c.id = categorias.parent_id AND c.parent_id <> 0) AS category_title_level_3
            FROM
            categorias
            ORDER BY categorias.id DESC'
        );

        if(count($categorias) > 0){
            foreach ($categorias as $key => $value) {
                $editar = route('categorias.editar', $value->id);

                //titulo
                $titulo = !empty($value->category_title_level_2) ? $value->category_title_level_2 . ' / ' : '';
                $titulo .= !empty($value->category_title_level_3) ? $value->category_title_level_3 . ' / ' : '';
                $titulo .= '<strong>' . $value->title . '</strong>';

                //estado
                $estado = '';
                switch ($value->active) {
                    case 0:
                        $estado = '<span class="badge bg-secondary">Inactivo</span>';
                        break;
                    case 1:
                        $estado = '<span class="badge bg-success">Activo</span>';
                        break;
                    default:
                        break;
                }

                //imagen
                $imagen = '';
                $img_url = asset($value->main_image);
                if(!empty($value->main_image)){
                    $imagen = '<a href="'.$img_url.'" data-fancybox="galeria'.$value->id.'">Ver Imagen</a>';
                }

                //principal
                $principal = $value->parent_id == 0 ? '<i class="fa fa-flag fa-lg text-info" aria-hidden="true" title="Categoría Principal"></i>' : '';

                $datos[] = array(
                    'id' => $value->id,
                    'boton' => '<a href="'.$editar.'" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>'.
                    '<button id="btn_eliminar" class="btn btn-danger btn-sm" onclick="funcionEliminar('.$value->id.');"><i class="fa-solid fa-xmark"></i></button>',
                    'fecha' => date("Y-m-d h:i:s a", strtotime($value->updated_at)),
                    'estado' => $estado,
                    'nombre' => $titulo,
                    'imagen' => $imagen,
                    'principal' => $principal,
                    'author' => $value->author
                );
            }
        }

        return json_encode([
            'data' => $datos,
        ]);
    }

    public function crear()
    {
        $content = '';
        $contentCategories = $this->generate_categories->generateCategories(0, 1, 3, 0, 0, $content);

        return view('admin.categorias.crear')->with([
            'categories' => $contentCategories
        ]);
    }

    public function guardar(Request $request)
    {

        $error = false;
        $mensaje = '';

        //opciones
        $parent_id = (isset($request->parent_id) && !empty($request->parent_id)) ? $request->parent_id : 0;
        $level = (!empty($parent_id)) ? $this->generate_categories->getCategoryLevel($parent_id) + 1 : 1;

        $categories = Categorias::where(['title' => $request->title])->where('parent_id', $parent_id)->get()->count();
        $author = (isset($request->author) && !empty($request->author)) ? $request->author : '';

        if ($categories > 0) {
            $error = true;
            $mensaje = 'Error!, Ya existe una categoria con este mismo nombre, intente con otro!';
        } else {

            //imagenes
            if ($request->file('main_image')) {
                $image_main_image = $request->file('main_image')->store('public/categorias/logos');
                $url_main_image = Storage::url($image_main_image);
            } else {
                $url_main_image = '';
            }

            //otra imagen
            if ($request->file('secondary_image')) {
                $image_secondary_image = $request->file('secondary_image')->store('public/categorias/banners');
                $url_secondary_image = Storage::url($image_secondary_image);
            } else {
                $url_secondary_image = '';
            }

            //posición
            $position = 0;
            $positions = DB::table('categorias')->max('position');
            $position = $positions + 1;

            //slug
            $slug_v = "";
            $titulo = Str::slug($request->title, '-');
            $valorAleatorio = rand(1, 500);
            $validar_slug = Categorias::where('slug', $titulo)->get()->count();
            if($validar_slug > 0){
                $slug_v = Str::slug($request->title, '-') . '-' . $valorAleatorio;
            } else {
                $slug_v = Str::slug($request->title, '-');
            }

            $categoria = array(
                'level' => $level,
                'slug' => $slug_v,
                'parent_id' => $parent_id,
                'title' => $request->title,
                'main_image' => $url_main_image,
                'secondary_image' => $url_secondary_image,
                'position' => $position,
                'main' => ($request->main == null) ? 0 : 1,
                'featured' => ($request->featured == null) ? 0 : 1,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keyword' => $request->meta_keyword,
                'meta_robots' => $request->meta_robots,
                'active' => ($request->activar == null) ? 0 : 1,
                'author' => $author
            );

            if (Categorias::create($categoria)) {
                $error = false;
                $mensaje = 'Funciono';
            } else {
                $error = true;
                $mensaje = 'Error!, Se presento un problema al crear la categoria, por favor intenta de nuevo!';
            }

        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));

    }

    public function eliminar($id)
    {
        $error = false;
        $mensaje = '';

        $category = Categorias::findOrFail($id);

        $position = $category->position;
        $categories = DB::select('SELECT id FROM categorias WHERE position >= :position', [':position' => $position]);
        if (count($categories) > 0) {
            foreach ($categories as $category) {
                DB::select('UPDATE categorias SET position = position - 1 WHERE id = :id', [':id' => $category->id]);
            }
        }

        if (Categorias::findOrFail($id)->delete()) {
            //DB::select('DELETE FROM categories_products WHERE categories_id = :categories_id', [':categories_id' => $id]);
            $error = false;
            $mensaje = 'Funciono';
        } else {
            $error = true;
            $mensaje = 'Error!, Se presento un problema al eliminar la categoria, por favor intenta de nuevo!';
        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));
    }

    public function editar($id)
    {
        $category = Categorias::findOrFail($id);

        $content = '';
        $contentCategories = $this->generate_categories->generateCategories(0, 1, 3, $category->parent_id, $category->id, $content);

        return view('admin.categorias.editar')->with([
            'categoria' => $category,
            'categories' => $contentCategories
        ]);
    }

    public function actualizar(Request $request)
    {

        $error = false;
        $mensaje = '';

        $id = $request->categoria_id;
        $parent_id = (isset($request->parent_id) && !empty($request->parent_id)) ? $request->parent_id : 0;
        $level = (!empty($parent_id)) ? $this->generate_categories->getCategoryLevel($parent_id) + 1 : 1;
        $author = (isset($request->author) && !empty($request->author)) ? $request->author : '';

        $categories = Categorias::where(['title' => $request->title])->where('parent_id', $parent_id)->where('id', '<>', $id)->get()->count();

        if ($categories > 0) {
            $error = true;
            $mensaje = 'Error!, Ya existe una categoria con este mismo nombre, intente con otro! ' . $categories;
        } else {

            $categoria = Categorias::findOrFail($id);


            //imagen 1
            if($request->hasFile('main_image')){
                // busco la imagen anterior y la elimino
                $url_anterior_main_image = str_replace('storage','public', $categoria->main_image);
                Storage::delete($url_anterior_main_image);

                //agrego la nueva imagen
                $image_main_image = $request->file('main_image')->store('public/categorias/logos');
                $url_main_image = Storage::url($image_main_image);
            }

            //imagen 2
            if($request->hasFile('secondary_image')){
                // busco la imagen anterior y la elimino
                $url_anterior_secondary_image = str_replace('storage','public', $categoria->secondary_image);
                Storage::delete($url_anterior_secondary_image);

                //agrego la nueva imagen
                $image_secondary_image = $request->file('secondary_image')->store('public/categorias/banners');
                $url_secondary_image = Storage::url($image_secondary_image);
            }

            $slug_v = Str::slug($request->title, '-');
            $validar_slug = Categorias::where('slug', $slug_v)->where('id', '<>', $id)->get()->count();
            if($validar_slug > 0){
                $slug_v = $slug_v . $id;
            }

            $categoria_actualizar = array(
                'level' => $level,
                'slug' => $slug_v,
                'parent_id' => $parent_id,
                'title' => $request->title,
                'main' => ($request->main == null) ? 0 : 1,
                'featured' => ($request->featured == null) ? 0 : 1,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keyword' => $request->meta_keyword,
                'meta_robots' => $request->meta_robots,
                'active' => ($request->activar == null) ? 0 : 1,
                'author' => $author
            );

            if (!empty($url_main_image)) {
                $categoria_actualizar['main_image'] = $url_main_image;
            }

            if (!empty($url_secondary_image)) {
                $categoria_actualizar['secondary_image'] = $url_secondary_image;
            }

            if (Categorias::findOrFail($id)->update($categoria_actualizar)) {
                $error = false;
                $mensaje = 'ok';
            } else {
                $error = true;
                $mensaje = 'Error!, Se presento un problema al actualizar la categoria, por favor intenta de nuevo!';
            }
        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));

    }

}
