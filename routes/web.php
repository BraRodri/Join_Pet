<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
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

            #Inicio
            Route::get('/', 'index')->name('panel');
        });

});
