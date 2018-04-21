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
   // return view('chefs/profile');
});

Route::get('/chefs/chefslist', function () {
    return view('chefs/chefslist');
});

Auth::routes();

// Route::get('/chefs/profile/{pro}', 'ProfileController@test($id)');
Route::get('/chefs/profile/{pro}', 'ProfileController@show');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chefs/{id}', 'ChefsController@test');
Route::get('/chefs', 'ChefsController@show');
//Route::get('/chefs/checkout', 'CheckoutController@show1');

Route::get('/checkout','CheckoutController@check');
// Route::get('/checkout', function () {
    
//     return 123;
// });


// Route::get('/chefs/profile/{id}', function ($id) {
//      'ChefsController@profile';
// });



