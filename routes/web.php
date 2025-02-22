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

use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
    //Authentication Rotes
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    //Password Reset
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::get('/home', 'HomeController@index')->name('home');
});
/*------- Tela de Novo Veículo -------*/
Route::get('/create', [EventController::class, 'create'])->middleware('auth');
Route::post('/create', [EventController::class, 'store'])->middleware('auth');
/*----- Meus Veículos -----*/
Route::get('/meusVeiculos', [EventController::class, 'meusVeiculos'])->middleware('auth');
/*----- Administração: Tela listar todos os Veículos -------- */
Route::get('/administracao/edit/',[EventController::class, 'edit'])->middleware('auth','adminCheck');
/*----- Administração: excluir veículo ------------*/
Route::delete('/administracao/delete/{id}',[EventController::class, 'destroy'])->middleware('auth','adminCheck');
/*--------- Administração: atualizar veículo -------------*/
Route::get('/administracao/atualizar/{id}',[EventController::class, 'atualizar'])->middleware('auth','adminCheck');
Route::put('/update/{id}',[EventController::class, 'update'])->middleware('auth','adminCheck');
