<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
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

Route::resource('animal',AnimalController::class);
Auth::routes();

Route::get('/home', [AnimalController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [AnimalController::class, 'index'])->name('home');
});
