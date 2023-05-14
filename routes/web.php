<?php

use App\Http\Controllers\Admin\CiudadController;
use App\Http\Controllers\Admin\DepartamentoController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\Admin\EpsController;
use App\Http\Controllers\Admin\FondoPensionController;
use App\Http\Controllers\Admin\IdiomaController;
use App\Http\Controllers\Admin\InstitucionController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PaisController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpleadorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class, 'dashboard'])->name('public.dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard',[PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/empleador/dashboard',[PublicController::class, 'index'])->name('empleador.dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin',[PageController::class, 'index'])->name('admin.dashboard');

    Route::resource('/paises',PaisController::class);
    Route::resource('/departamentos',DepartamentoController::class);
    Route::resource('/ciudades',CiudadController::class);
    Route::resource('/documentos',DocumentoController::class);
    Route::resource('/epss',EpsController::class);
    Route::resource('/pensiones',FondoPensionController::class);
    Route::resource('/instituciones',InstitucionController::class);
    Route::resource('/idiomas',IdiomaController::class);

    Route::resource('/usuarios',UsuarioController::class);
    Route::resource('/empleador',EmpleadorController::class);
    Route::resource('/empleados',EmpleadoController::class);

    Route::resource('/publicaciones',PublicacionController::class);


});

require __DIR__.'/auth.php';
