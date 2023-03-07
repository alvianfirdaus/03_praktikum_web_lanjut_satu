<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\WelcomeController;
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
     return view('home');
 });

//  Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//1. Menampilkan halaman awal website  dengan route biasah
Route::get('/home', [HomeController::class,'home']);

//2. Menampilkan produk website dengan route prefix
Route::prefix('product')->group(function(){
    Route::get('/', [ProductsController::class, 'product']);
    Route::get('/product-1', [ProductsController::class, 'product1']);
    Route::get('/product-2', [ProductsController::class, 'product2']);
    Route::get('/product-3', [ProductsController::class, 'product3']);
}); 

//3. menampilkan berita website dengan route param
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{id}', [NewsController::class, 'news1']);

//4. menampilkan program website dengan route prefix
Route::prefix('program')->group(function(){
    Route::get('/', [ProgramController::class, 'program']);
    Route::get('/program-1', [ProgramController::class, 'program1']);
    Route::get('/program-2', [ProgramController::class, 'program2']);
}); 

//5. menampilkan about-us website degan route biasah
Route::get('/about-us', [AboutController::class,'about']);

//6. menampilkan contact-us website dengan route resource only
route::resource('/contact-us', ContactController:: class,['only' => ['index', 'create', 'store']]);