<?php
namespace App\Http\Controllers;

use App\Http\Controllers\OperatController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//route pour le crud opérateurs
Route::resource('operats', 'OperatController');
//route pour le crud arretes
Route::resource('arretes', 'ArreteController');
//route pour le secteur artisanal
Route::get('/artisanals', 'OperatController@artisana')->name('operats.artisanals');
//route pour le secteur industriel
Route::get('/industriel', 'OperatController@industrie')->name('operats.industriel');
//route pour le secteur service
Route::get('/service', 'OperatController@servi')->name('operats.service');
//route pour l'arrete interministeriels
Route::get('/interministeriels', 'ArreteController@interminister')->name('arretes.interministeriels');
//route pour l'arrete ministeriels
Route::get('/ministeriels', 'ArreteController@minister')->name('arretes.ministeriels');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// route pour generer un fichier pdf
Route::get('/getPDF', 'PDFController@getPDF');
// route pour generer un fichier excel
Route::get('/export', 'CvsController@export');
