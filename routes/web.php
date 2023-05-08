<?php

use App\Http\Controllers\Admin\CiudadController;
use App\Http\Controllers\Admin\DepartamentoController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PaisController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin',[PageController::class, 'index'])->name('admin.dashboard');
    Route::resource('/paises',PaisController::class);
    Route::resource('/departamentos',DepartamentoController::class);
    Route::resource('/ciudades',CiudadController::class);
    Route::resource('/documentos',DocumentoController::class);

});

require __DIR__.'/auth.php';
