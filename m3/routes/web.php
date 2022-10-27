<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('baitap1',function(){
//     return view('baitap1');
// });
// Route::post('baitap1', function (Illuminate\Http\Request $request) {
//     $ProductDescription=$request->input('ProductDescription');
//     $ListPrice=$request->input('ListPrice');
//     $DiscountPercent=$request->input('DiscountPercent');
//     $DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
//     return view('show_discount_amount',compact(['ProductDescription', 'ListPrice','DiscountPercent','DiscountAmount']));
// });



// // -----------------------------------------------------------------------------
// // -------------------------------------------------------------------------------------------

// Route::get('translate',function(){
//     return view('translate');
// });
// Route::post('translate', function (Illuminate\Http\Request $request) {
//     $tucandich=$request->input('candich');
//     $theloai=$request->input('theloai');


//     $dictionary = [
//         "hello" => "xin chào",
//         "how" => "thế nào",
//         "book" => "quyển vở",
//         "computer" => "máy tính"
//     ];
//     $dictionary_tv = [
//         "xin chào" => "hello",
//         "tạm biệt" => "goodbye",
//         "sách" => "book",
//         "máy tính" => "computer",
//         "điện thoại" => "phone",
//         "con chuột" => "mouse",
//             ];
//     if($theloai =='tienganh'){
//         $flag = 0;
//         foreach ($dictionary as $word => $translate) {
//             if ($word == $tucandich) {
//                 echo "Từ " . $word . " có nghĩa là : " . $translate;
//                 echo "<br/>";
//                 $flag = 1;
//             }
//         }
//             if ($flag == 0) {
//                 echo "Không tìm thấy từ cần tra.";
//                 echo'<br>';
//             }
//     }elseif($theloai =='tiengviet'){
//         foreach ($dictionary_tv as $word => $translate) {
//             if ($word == $tucandich) {
//                 echo "Từ " . $word . " có nghĩa là : " . $translate;
//                 echo "<br/>";
//                 $flag = 1;
//             }
//         }
//         if ($flag == 0) {
//             echo "Không tìm thấy từ cần tra.";
//         }
//     }
// });
// ============================================================
Route::group([
    'prefix' => 'Products'
 ],function(){

    Route::get('',function(){
        echo 'trang danh sach';
    })->name('Products.index');

    Route::get('create',function(){
        echo 'trang them moi';
    })->name('Products.create');

    Route::post('',function(){
        echo 'xu li them moi';
    })->name('Products.store');

    Route::get('show/{id}',function($id){
        echo 'xem chi tiet'.$id;
    })->name('Products.show');

    Route::get('edit/{id}',function($id){
        echo 'trang cap nhat'.$id;
    })->name('Products.edit');

    Route::put('update/{id}',function($id){
        echo 'xu li cap nhat'.$id;
    })->name('Products.update');

    Route::delete('destroy/{id}',function($id){
        echo 'trang danh sach';
    })->name('Products.destroy');

 });
//  ==================================================================================


