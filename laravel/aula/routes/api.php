<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('class', 'AulaController@index');
Route::post('aula', 'AulaController@novaAula');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('debt', 'DebtController@create');
    Route::get('debt', 'DebtController@readAll');
    Route::get('debt/{cpf}', 'DebtController@readAllByCPF');
    Route::delete('debt/{id}', 'DebtController@delete');
    Route::put('debt/{id}', 'DebtController@update');

    Route::get('aula', 'AulaController@index');
});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
