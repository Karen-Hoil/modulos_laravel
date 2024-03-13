<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Estudiante_cardController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashPresi', function(){
    return view('dashPresi');
});

// Route::get('/asesudiante', function(){
//     return view('modulo4');
// });

Route::get('/modulo7', function(){
    return view('modulo7');
});

Route::resource('modulo4', Estudiante_cardController::class);

Route::get('/cartas', function () {
    $minimized = false; // Puedes definir el estado inicial aquí según tu lógica
    return view('cartas', compact('minimized'));
})->name('cartas');
