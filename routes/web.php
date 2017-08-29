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

Route::get('/chinh-quyen', function () {
    return view('guest.trang-chu');
});

Route::get('/cong-dan', function () {
    return view('guest.trang-chu');
});

Route::get('/doanh-nghiep', function () {
    return view('guest.trang-chu');
});

Route::get('/chi-tiet', function () {
    return view('guest.chi-tiet');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'qtht'],function(){

  Route::resource('/', 'PostController');
  Route::get('/home', 'PostController@index');

  Route::get('/them-tin-bai', 'PostController@create');
  Route::post('/them-tin-bai', 'PostController@store');

  Route::get('/sua-tin-bai/{slug}', 'PostController@edit');
  Route::post('/sua-tin-bai','PostController@update');

  Route::get('/xoa-tin-bai/{id}', 'PostController@destroy');

  Route::get('/chi-tiet-tin/{slug}', 'PostController@show');

  Route::get('/doi-mat-khau', 'PostController@doiMatKhau');
  Route::post('/doi-mat-khau', 'PostController@postDoiMatKhau');


  Route::group(['prefix'=>'menu'],function(){

    Route::resource('/', 'MenuController');

    Route::get('/home', 'MenuController@index');

    Route::get('/them-loai-tin', 'MenuController@create');
    Route::post('/them-loai-tin', 'MenuController@store');

    Route::get('/sua-loai-tin/{slug}', 'MenuController@edit');
    Route::post('/sua-loai-tin','MenuController@update');

    Route::get('/xoa-loai-tin/{id}', 'MenuController@destroy');

  });


  Route::group(['prefix'=>'chuyen-muc'],function(){

    Route::resource('/', 'ChuyenMucController');

    Route::get('/home', 'ChuyenMucController@index');
    Route::get('/them-chuyen-muc', 'ChuyenMucController@create');
    Route::post('/them-chuyen-muc', 'ChuyenMucController@store');

    Route::get('/sua-chuyen-muc/{slug}', 'ChuyenMucController@edit');
    Route::post('/sua-chuyen-muc','ChuyenMucController@update');

    Route::get('/xoa-chuyen-muc/{id}', 'ChuyenMucController@destroy');


  });


  Route::group(['prefix'=>'hinh-slide'],function(){

    Route::resource('/', 'HinhSlideController');

    Route::get('/home', 'HinhSlideController@index');

    Route::get('/them-hinh-slide', 'HinhSlideController@create');

    Route::post('/them-hinh-slide', 'HinhSlideController@store');

    Route::get('/sua-hinh-slide/{id}', 'HinhSlideController@edit');
    Route::post('/sua-hinh-slide','HinhSlideController@update');

    Route::get('/xoa-hinh-slide/{id}', 'HinhSlideController@destroy');


  });

  Route::group(['prefix'=>'video-clip'],function(){

    Route::resource('/', 'VideoClipController');

    Route::get('/home', 'VideoClipController@index');

    Route::get('/them-video', 'VideoClipController@create');

    Route::post('/them-video', 'VideoClipController@store');

    Route::get('/sua-video/{id}', 'VideoClipController@edit');
    Route::post('/sua-video','VideoClipController@update');

    Route::get('/xoa-video/{id}', 'VideoClipController@destroy');


  });

  Route::group(['prefix'=>'lich-cong-tac'],function(){

    Route::resource('/', 'LichCongTacController');

    Route::get('/home', 'LichCongTacController@index');

    Route::get('/them-lich-cong-tac', 'LichCongTacController@create');

    Route::post('/them-lich-cong-tac', 'LichCongTacController@store');

    Route::get('/sua-lich-cong-tac/{id}', 'LichCongTacController@edit');

    Route::post('/sua-lich-cong-tac','LichCongTacController@update');

    Route::get('/xoa-lich-cong-tac/{id}', 'LichCongTacController@destroy');

  });

  Route::group(['prefix'=>'van-ban'],function(){

    Route::resource('/', 'VanBanController');

    Route::get('/home', 'VanBanController@index');

    Route::get('/them-van-ban', 'VanBanController@create');

    Route::post('/them-van-ban', 'VanBanController@store');

    Route::get('/sua-van-ban/{slug}', 'VanBanController@edit');

    Route::post('/sua-van-ban','VanBanController@update');

    Route::get('/xoa-van-ban/{id}', 'VanBanController@destroy');

  });


  Route::group(['prefix'=>'thu-vien-hinh-anh'],function(){
    Route::resource('/', 'UploadsController');
    Route::post('/files-upload', 'UploadsController@multiple_uploads');
    Route::get('/xoa-hinh-anh/{id}','UploadsController@destroy');
  });

  Route::group(['prefix'=>'gop-y'],function(){
    Route::resource('/', 'GopYController');

    Route::get('/', 'GopYController@index');

    Route::post('/', 'GopYController@update');

    Route::get('/xoa/{id}', 'GopYController@destroy');

  });

  Route::group(['prefix'=>'hoi-dap'],function(){
    Route::resource('/', 'DatCauHoiController');
    Route::get('/', 'DatCauHoiController@index');
    Route::post('/', 'DatCauHoiController@update');
    Route::get('/xoa/{id}', 'DatCauHoiController@destroy');
  });


});
