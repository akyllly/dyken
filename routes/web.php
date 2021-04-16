<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

use App\Http\Controllers\FileUpload;
 
Route::get('/upload-file', [FileUpload::class, 'createForm']);

Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

Route::get('/', function () {
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/mice', function () {
    return view('mice');
});
Route::get('/keyboard', function () {
    return view('keyboards');
});
Route::get('/headsets', function () {
    return view('headsets');
});
Route::get('/multiuploads','App\Http\Controllers\UploadController@uploadForm');

Route::post('/multiuploads','App\Http\Controllers\UploadController@uploadSubmit');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');

Route::get('/main/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('index');
});

Route::get('ajax',function(){
    return view('index');
});


