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

// use \App\Http\Controllers\CategoriesController;
// use \App\Http\Controllers\BrandsController;
// use \App\Http\Controllers\SizesController;
// use \App\Http\Controllers\ProductsController;

// use function App\Http\Controllers\getCategoriesJson;
// use function App\Http\Controllers\getBrandsJson;
// use function App\Http\Controllers\getSizesJson;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//User Logout
Route::get('/users/logout', ['\App\Http\Controllers\UsersController', 'logout'])->name('users.logout');

Route::middleware(['auth:sanctum'])->group(function(){
    //User Route
    Route::resource('users', '\App\Http\Controllers\UsersController');
    
    //Dashboard Route
    Route::get('/dashboard', ['\App\Http\Controllers\DashboardController', 'index'])->name('dashboard');

    //Category Route
    Route::resource('categories', '\App\Http\Controllers\CategoriesController');
    Route::get('/api/categories', ['\App\Http\Controllers\CategoriesController', 'getCategoriesJson']);

    //Brand Route
    Route::resource('brands', '\App\Http\Controllers\BrandsController');
    Route::get('/api/brands', ['\App\Http\Controllers\BrandsController', 'getBrandsJson']);

    //Size Route
    Route::resource('sizes', '\App\Http\Controllers\SizesController');
    Route::get('/api/sizes', ['\App\Http\Controllers\SizesController', 'getSizesJson']);

    //Product Route
    Route::resource('products', '\App\Http\Controllers\ProductsController');

  
});

