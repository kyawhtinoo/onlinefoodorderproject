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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontendController@index')->name('index');
Route::get('shoppingcart','FrontendController@shoppingcart')->name('shoppingcart');
Route::get('restaurantdetail/{id}','FrontendController@restaurantdetail')->name('restaurantdetail');
Route::resource('client', 'ClientController');
Route::get('customerlogin', 'FrontendController@customerlogin')->name('customerloginpage');
Route::get('customerregister', 'FrontendController@customerregister')->name('customerregisterpage');

Route::middleware('role:admin')->group(function(){
Route::get('dashboard','BackendController@dashboard')->name('dashboard');
Route::resource('restaurants','RestaurantController');
Route::resource('items','ItemController');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

