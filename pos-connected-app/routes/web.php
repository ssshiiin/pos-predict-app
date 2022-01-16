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

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboard', "DashboardController@index");
Route::get('/dashboard/profit', "ProfitController@index");
Route::get('/dashboard/product', "CsvsController@showProductWeek");
Route::get('/dashboard/order', "CsvsController@showOrderProduct");

//csv upload test
Route::get('/dashboard/register', "CsvsController@index");
Route::get('/dashboard/product/predict', "CsvsController@productPredict");
Route::post('/csvs/register', "CsvsController@create");

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();
