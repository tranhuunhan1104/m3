<?php

use App\Http\Controllers\DanhmucController;
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


Route::get('/danhmuc-create', [DanhmucController::class, 'create'])->name('danhmuc.create');
Route::get('/danhmuc-index', [DanhmucController::class, 'index'])->name('danhmuc.index');
Route::post('/danhmuc-store', [DanhmucController::class, 'store'])->name('danhmuc.store');
Route::get('/danhmuc/{id}', [DanhmucController::class, 'edit'])->name('danhmuc.edit');
Route::put('/danhmuc/{id}', [DanhmucController::class, 'update'])->name('danhmuc.update');
Route::delete('/danhmuc/{id}', [DanhmucController::class,'destroy'])->name('danhmuc.destroy');
