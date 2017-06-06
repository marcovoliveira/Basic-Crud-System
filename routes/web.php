<?php

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
// Rota LOgin
Auth::routes();
// pagina inicial Utente
Route::get('/utente/home', 'HomeController@index')->name('utenteHome');


// Pagina inicial admin, com lista de utilizadores
Route::get('/admin/home', 'AdminController@index')->name('adminHome');

//Admin criar utilizador
Route::get('/admin/user/create', 'AdminController@create');
Route::post('/admin/user/create/done', 'AdminController@store');

//Admin edita utilizador
Route::get('/admin/user/edit/{id}', 'AdminController@edit');
Route::post('/admin/user/update/done/{id}', 'AdminController@update');

// Prof de sáude ver utentes na pagina inicial
Route::get('/prof/home', 'ProfissionalController@index')->name('profHome');

//Prof de sáude ver pagina do utente e os exames que lhe estão atribuidos 
Route::get('/prof/utente/{id}', 'ProfissionalController@show');

//Prof de saúde ver exame de um utente 
Route::get('/prof/exame/view/{id}', 'ProfissionalController@showExame');

//Prof de sáude editar um exame de um utente update e 
Route::get('/prof/exame/edit/{id}', 'ProfissionalController@edit');
Route::post('/prof/exame/edit/update/{id}', 'ProfissionalController@update');


//Prof de saúde registar um exame de um utente create e store
Route::get('/prof/exame/create/{id}', 'ProfissionalController@create');
Route::post('/prof/exame/store/{id}', 'ProfissionalController@store');

//Listar exames utente
Route::get('/utente/exames', 'ExameController@index');
// Utente ver exame
Route::get('/utente/exame/{id}', 'ExameController@show');
// Utente ver dados pessoais 
Route::get('/utente/dados', 'HomeController@dados');