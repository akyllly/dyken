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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
});
 
Route::get('/upload-file', [FileUpload::class, 'createForm']);

Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('index');
});

Route::get('/contact/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('contact');
});
Route::get('/about/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('about');
});
Route::get('/blog/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('blog');
});
Route::get('/mice/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('mice');
});
Route::get('/keyboard/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('keyboards');
});
Route::get('/multiuploads','App\Http\Controllers\UploadController@uploadForm');

Route::post('/multiuploads','App\Http\Controllers\UploadController@uploadSubmit');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');

Route::get('ajax',function(){
    return view('index');
});
Auth::routes(['verify' => true]);
  






