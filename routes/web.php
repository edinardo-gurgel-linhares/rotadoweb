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

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();
Route::get('/home', 'Home\HomeController@index')->name('home.index');
Route::get('/painel', 'Painel\PainelController@index')->name('painel.index');

Route::get('/painel/user', 'User\UserController@user_lista')->name('user.lista');
