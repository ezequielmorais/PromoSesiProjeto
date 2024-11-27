<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;

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
Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro_empresas', [EmpresasController::class, 'CadastrarEmpresa']);

Route::get('/cadastro_pessoa_fibra', function () {
    return view('cadastro_pessoa_fibra');
});