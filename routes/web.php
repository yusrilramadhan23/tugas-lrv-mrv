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
Route::get('/test', function(){
    return "OK";
});

Route::get('/halo/{nama}', function($nama){
    return "halo $nama";
});
/*
Route::get('/index',-'HomeController@index');

Route::get('/form',-'AuthController@form');

Route::post('/selamat',-'A')
*/
