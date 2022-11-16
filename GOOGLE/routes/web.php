<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/trang-chu', function () {
    return view('homes');
});
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::delete('/categories/{id}', [CategoryController::class,'destroy'])->name('category_destroy');
Route::get('/user/{id}', [CategoryController::class, 'edit'])->name('category_edit');
Route::put('/user/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

// products
Route::get('/product-index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');





// Route::get('/trangchu', [CategoryController::class, 'index'])->name('home');

// Route::get('/index', [CategoryController::class, 'index'])->name('login');
Auth::routes();



Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);




