<?php

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
//route pour le crud contrats
Route::resource('contrats', 'ContratController');
//route pour le crud zea
Route::resource('zeas', 'ZeaController');
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
//route pour les contrats miniers
Route::get('/contratsminiers', 'ContratController@contr')->name('contrats.contratsminiers');
//route pour les conventions miniers
Route::get('/conventionsminiers', 'ContratController@convent')->name('contrats.conventionsminiers');
//route pour les Bureaux d'Etudes Environnemental
Route::get('/Bureaux_Etudes_Environnemental','OperatController@bee')->name('operats.Bureaux_Etudes_Environnemental');
//route pour les cooperatives minieres
Route::get('/Cooperatives_Minieres','OperatController@cpmn')->name('operats.Cooperatives_Minieres');
//route pour les cooperatives produits carrieres 
Route::get('/Cooperatives_Produits_Carrieres','OperatController@cppc')->name('operats.Cooperatives_Produits_Carrieres');
//route pour les comptoires 
Route::get('/Comptoirs','OperatController@cmp')->name('operats.Comptoirs');
//route pour les detenteurs des produits explosifs
Route::get('/Detenteurs_Produits_Explosifs','OperatController@detpre')->name('operats.Detenteurs_Produits_Explosifs');
//route pour les entités des traitements
Route::get('/Entites_traitements','OperatController@ent')->name('operats.Entites_traitements');
//route pour les laboratoires
Route::get('/Laboratoires','OperatController@lb')->name('operats.Laboratoires');
//route pour les mandataires
Route::get('/Mandataires','OperatController@mdt')->name('operats.Mandataires');
//route pour les produits explosifs
Route::get('/Titulaires_droits_miniers','OperatController@tdm')->name('operats.Titulaires_droits_miniers');
//route pour les titulaires produits carrieres
Route::get('/Titulaires_Produits_Carrieres','OperatController@tpc')->name('operats.Titulaires_Produits_Carrieres');
//route pour les sous traitants
Route::get('/Sous_Traitants','OperatController@st')->name('operats.Sous_Traitants');
//route pour le forme juridique sa
Route::get('/Societes_Anonyme','OperatController@sa')->name('operats.Societes_Anonyme');
//route pour le forme juridique sarl
Route::get('/Societe_Responsabilite_Limitee','OperatController@sarl')->name('operats.Societe_Responsabilite_Limitee');
//route pour le forme juridique sarlu
Route::get('/Societe_Responsabilite_Limitée_Unipersonelle','OperatController@sarlu')->name('operats.Societe_Responsabilite_Limitée_Unipersonelle');
//route pour le forme juridique scs
Route::get('/Societe_Commandite_Simple','OperatController@scs')->name('operats.Societe_Commandite_Simple');
//route pour le forme juridique sep
Route::get('/Societe_Participation','OperatController@sep')->name('operats.Societe_Participation');
//route pour le forme juridique gie
Route::get('/Groupement_Interet_Economique','OperatController@gie')->name('operats.Groupement_Interet_Economique');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// route pour generer un fichier pdf pour les opérateurs
Route::get('/getPDF', 'PDFController@getPDF');
// route pour generer un fichier pdf pour les zeas
Route::get('/zeaPDF', 'PDFController@zeaPDF');
// route pour generer un fichier excel
Route::get('/export', 'CvsController@export');
