<?php

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
use App\Http\Controllers\EscolaControlle;


Route::get('/',[EscolaControlle::class,'index']);
Route::get('/CadastroAdm',[EscolaControlle::class,'cadastarAdm']);
Route::get('index',[EscolaControlle::class,'login']);


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/CadastroAlunos', function () {
    return view('CadastroAlunos');
});

Route::get('/CadastroFuncionarios', function () {
    return view('CadastroFuncionarios');
});

Route::get('/TelaAlunos/{id}', function ($id) {
    return view('TelaAlunos', ['id' => $id]);
});


