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
   // return view('chefs/menuscar2');
    // 
     return view('welcome');
   // return view('chefs/profile');
});

Route::get('/dishes', 'ChefController@index');
Route::get('/chefs/{id}', 'ChefController@show');

Route::post('/cart', 'CartController@store');
Route::get('/cart', 'CartController@index');

Route::post('/checkout', 'CheckOutController@store');

Route::get('/checkout', 'CheckOutController@index');

Route::get('/check', 'CheckOutController@create');

// Route::get('/checkout', function () {
//   // return view('chefs/menuscar2');
//    // 
//    return 123;
//     // return view('chefs/checkout');
//   // return view('chefs/profile');
// });


// Route::get('/menus', function () {
//      return view('chefs/menuscar');
     
//     // return view('welcome');
//     // return view('chefs/profile');
//  });

// Route::get('/chefs/chefslist', function () {
//     return view('chefs/chefslist');
// });

Auth::routes();

// Route::get('/chefs/profile/{pro}', 'ProfileController@test($id)');
// Route::get('/chefs/profile/{pro}', 'ProfileController@show');
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/chefs/{id}', 'ChefsController@test');
// Route::get('/chefs', 'ChefsController@show');
// //Route::get('/chefs/checkout', 'CheckoutController@show1');

// Route::get('/checkout','CheckoutController@check');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');