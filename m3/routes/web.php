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

Route::get('baitap1',function(){
    return view('baitap1');
});
Route::post('baitap1', function (Illuminate\Http\Request $request) {
    $ProductDescription=$request->input('ProductDescription');
    $ListPrice=$request->input('ListPrice');
    $DiscountPercent=$request->input('DiscountPercent');
    $DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
    return view('show_discount_amount',compact(['ProductDescription', 'ListPrice','DiscountPercent','DiscountAmount']));
});
