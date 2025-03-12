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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vidu1','App\Http\Controllers\ViDuController@vidu1');
Route::get('/vidu1a','App\Http\Controllers\ViDuController@vidu1a');
Route::get('/vidu2','App\Http\Controllers\ViDuController@vidu2');
Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

Route::get("/qlsach/nhaptheloai","App\Http\Controllers\BookController@nhaptheloai");
Route::post("/qlsach/themtheloai","App\Http\Controllers\BookController@themtheloai");

Route::get("/qlsach/nhap2theloai","App\Http\Controllers\BookController@nhap2theloai");
Route::post("/qlsach/them2theloai","App\Http\Controllers\BookController@them2theloai");


//Thực hành 1
Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');


//web sách
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');

Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');