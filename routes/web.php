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
    return view('guest.trang-chu');
});

// Route::get('/chinh-quyen', function () {
//     return view('guest.trang-chu');
// });
//
// Route::get('/cong-dan', function () {
//     return view('guest.trang-chu');
// });
//
// Route::get('/doanh-nghiep', function () {
//     return view('guest.trang-chu');
// });

Route::get('/chi-tiet', function () {
    return view('guest.chi-tiet');
});


// Route::get('/{slug}', function () {
//     return view('guest.tin-theo-loai');
// });




Auth::routes();

Route::get('/home', 'HomeController@index')->name('admin');
