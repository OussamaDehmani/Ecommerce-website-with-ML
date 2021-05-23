<?php



use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/','CarController@index')->name('index');
// Route::get('/hello','CarController@test')->name('test');
// //Route::get('/','CarController@index')->name('index');
// Route::get('shop/{id}','CarController@shop')->name('shop');
// Route::get('details/{id}','CarController@details')->name('details');
// Route::get('/sub/{id}','CarController@view')->name('view');
// Route::get('/cart','CarController@cart')->name('cart');

// //Route::get('/checkout','PayementController@checkout')->name('checkout');
// Route::get('/paiement','PayementController@index')->name('mycheckout');
// Route::get('/remerciement','PayementController@remerciement');
// Route::post('/paiement','PayementController@save')->name('checkoutstore');
// Route::get('/test','PayementController@test')->name('checkoutstore');



// Route::post('/rate','CarController@rate')->name('rate');
// // Route::post('/rate','CarController@rate2')->name('rate2');
// // Route::post('/rate','CarController@rate3')->name('rate3');
// // Route::post('/rate','CarController@rate4')->name('rate4');
// // Route::post('/rate','CarController@rate5')->name('rate5');






// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@gogo');

//Route::get('/pannier/getall', 'CartController@index')->name('cart.index');
Route::get('/test/{id}', 'CarController@test');
Route::get('/destroy/{id}', 'CartController@destroy');
Route::get('/destroy', 'CartController@destroycart');
Route::get('/destroyindex/{id}', 'CartController@destroyindex');

Route::group(['middleware' => ['auth']], function () { 

    Route::get('/details/{id}', 'CarController@details')->name('details');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/checkout','PayementController@index')->name('checkout');
    Route::post('/checkout','CheckoutController@store')->name('checkout.store');
    Route::get('/remerciement','CheckoutController@remerciement')->name('merci');
    //cart route
    Route::post('/pannier/add', 'CartController@store')->name('cart.store');
    Route::post('/pannier/addnoqte', 'CartController@storenoqte')->name('cart.storenoqte');
    Route::get('/mycart', 'CartController@index')->name('cart.index');
    Route::post('/addcomment', 'CarController@addcomment')->name('addcomment');
    Route::get('/subcategory/{id}', 'CarController@subcatgory')->name('subcategory');
});
Route::get('/','CarController@home')->name('index');
Route::patch('/pannier/{rowid}', 'CartController@update')->name('cart.update');
Route::get('/home', 'HomeController@index')->name('home');



