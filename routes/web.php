<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\UsuarioController;
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
    return view('auth.login');
});

/*
Route::get('/animal', function () {
    return view('animal.index');
});

Route::get('/animal/create', [AnimalController::class,'create']);
*/

Route::resource('animal',AnimalController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [AnimalController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [AnimalController::class, 'index'])->name('home');
});

Route::resource('tratamiento',TratamientoController::class)->middleware('auth');

Route::get('/home', [Tratamiento::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [TratamientoController::class, 'index'])->name('home');
});

Route::resource('adopcion',AdopcionController::class)->middleware('auth');

Route::get('/home', [Adopcion::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [AdopcionController::class, 'index'])->name('home');
});

Route::resource('usuario',UsuarioController::class)->middleware('auth');

Route::get('/home', [Usuario::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [UsuarioController::class, 'index'])->name('home');
});
