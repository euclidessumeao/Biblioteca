<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
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

Route::get('/', [LibraryController::class,'index'])->name('library.list');
Route::get('library/nova', 'LibraryController@create')->name('novo_livro');
Route::post('/library/novo','LibraryController@store')->name('salvar_livro');
Route::get('/library/del/{id}','LibraryController@destroy')->name('excluir_lista');
Route::get('/library/edit/{id}','LibraryController@edit')->name('editar_lista');
Route::post('/library/edit/{id}','LibraryController@update')->name('atualizar_lista');

//Route::get('/home/index', HomeController::class,'index');

Route::get('/library',[LibraryController::class, 'index']);


