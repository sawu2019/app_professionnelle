<?php

use App\Http\Controllers\OperatController;
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
    return view('welcome');
});

Route::resource('posts', 'PostController');
Route::resource('operats', 'OperatController');
//route pour le secteur artisanal
Route::get('artisanals', 'OperatController@artisana');
//route pour le secteur industriel
Route::get('industriel', 'OperatController@industrie');
//route pour le secteur service
Route::get('service', 'OperatController@servi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
