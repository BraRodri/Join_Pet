<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

#Auth
Route::post('/validar-login', [LoginController::class, 'login'])->name('validar_login');

#Para el administrador
Route::group(['middleware' => 'auth', 'prefix' => '/panel'], function () {

    #Principal
    Route::controller(PanelController::class)
        ->group(function () {
        Route::get('/', 'index')->name('panel');
    });

    #Categorias
    Route::controller(CategoriasController::class)
        ->group(function () {
        Route::get('/categorias', 'index')->name('categorias.index');
        Route::get('/categorias/obtener', 'obtener')->name('categorias.obtener');
        Route::get('/categorias/crear', 'crear')->name('categorias.crear');
        Route::post('/categorias/guardar', 'guardar')->name('categorias.guardar');
        Route::get('/categorias/eliminar/{id}', 'eliminar')->name('categorias.eliminar');
        Route::get('/categorias/editar/{id}', 'editar')->name('categorias.editar');
        Route::post('/categorias/actualizar', 'actualizar')->name('categorias.actualizar');
    });

    #Roles y Permisos
    Route::controller(RolesController::class)
        ->prefix('configuracion/roles')->group(function () {
        Route::get('/', 'index')->name('roles.index');
        Route::post('/create', 'create')->name('roles.create');
        Route::get('/all', 'all')->name('roles.all');
        Route::get('edit/{id}', 'edit')->name('roles.edit');
        Route::post('/update', 'update')->name('roles.update');
    });

});
