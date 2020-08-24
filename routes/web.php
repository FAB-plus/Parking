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

Auth::routes();


Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/controlleur', 'ControlleurController@indexcontrol')->name('controlleur')->middleware('can:isControleur');
Route::resource('/admin/commandes', 'CommandeController', ['as'=> 'admin']);
Route::resource('/admin/vehicules', 'VehiculeController', ['as'=> 'admin']);
Route::get('/admin/calender', 'fullcalenderController@index')->name('index');
Route::get('/admin/Load-events', 'EventController@loadEvents')->name('routeLoadEvents');

Route::resource('/controlleur/commandes', 'CommandeController', ['as'=> 'controler']);
Route::resource('/controlleur/vehicules', 'VehiculeController', ['as'=> 'controler']);



Route::resource('/controlleur/clients', 'ClientsController', ['as' => 'controler']);

Route::resource('/controlleur/gerer', 'AssuranceController', ['as' => 'controler']);
Route::resource('/controlleur/visites', 'VisiteController', ['as' => 'controler']);
Route::resource('/controlleur/gestions', 'GestionController', ['as' => 'controler']);
Route::get('/controlleur/expired_date', 'ExpiredController@expired_date')->name('expired');

Route::resource('/controlleur/categories', 'CategoriesController', ['as' => 'controler']);
Route::resource('/controlleur/suppliers', 'SuppliersController', ['as' => 'controler']);
Route::resource('/controlleur/products', 'ProductsController', ['as' => 'controler']);
Route::resource('/controlleur/orders', 'OrdersController', ['as' => 'controler']);
Route::resource('/controlleur/ordersdet', 'OrdersdetController', ['as' => 'controler']);
Route::resource('/controlleur/ordersupplies', 'OrdersuppliesController', ['as' => 'controler']);
Route::resource('/controlleur/supplies', 'SuppliesController', ['as' => 'controler']);
Route::resource('/controlleur/ordrerep', 'OrdrerepController', ['as' => 'controler']);


Route::get('/controlleur/ordersdet/createById/{id}','OrdersdetController@orderdetailsById')->name('ajout');
Route::get('/controlleur/ordersdet/allOrderById/{id}','OrdersdetController@getAllById')->name('list');
Route::get('/controlleur/ordrerep/create/{id}','OrdrerepController@pdf')->name('pdf');


Route::get('/controlleur/ordersupplies/createById/{id}','OrdersuppliesController@ordersuppliesById')->name('ajouter');
Route::get('/controlleur/ordersupplies/allOrdersuppliesById/{id}','OrdersuppliesController@getAllById')->name('lister');