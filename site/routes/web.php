<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;


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

Route::get('/', [MainController::class,'home']);

Route::get('/class', function () {
    return view('Layout.classes');
});
Route::get('/privacy', function () {
    return view('Layout.privacy');
});
Route::get('/blog', function () {
    return view('Layout.blog');
});
Route::get('/message', function () {
    return view('Layout.message');
});

//Route::get('/login', function () {
//    return view('Layout.login');
//});
//Route::get('/registerStudent', function () {
//    return view('Layout.registerStudent');
//});
//
//Route::get('/registerTeacher', function () {
//    return view('Layout.registerTeacher');
//});
Route::get('/forgetPassword', function () {
    return view('Layout.forgetPassword');
});

Route::get('/login', [MainController::class,'login']);
Route::get('/registerStudent', [MainController::class,'registerStudent']);
Route::get('/registerTeacher', [MainController::class,'registerTeacher']);
Route::post('/save', [MainController::class,'save'])->name('Layout.save');
Route::post('/update', [MainController::class,'update'])->name('Layout.update');
Route::post('/forgetPassword', [MainController::class,'forgetPassword'])->name('Layout.forgetPassword');
Route::post('/check', [MainController::class,'check'])->name('Layout.check');

Route::get('/editProfile', [MainController::class,'editProfile']);
Route::get('/profile', [MainController::class,'profile']);
Route::get('/notice', [MainController::class,'notice']);
//Route::post('/resetPassword', [MainController::class,'resetPassword'])->name('Layout.resetPassword');
Route::post('/updatePassword', [MainController::class,'updatePassword'])->name('Layout.updatePassword');

Route::post('/insertPost', [PostController::class,'insertPost'])->name('Layout.insertPost');

Route::get('/classLink', [MainController::class,'classLink']);

//for admin panel------------>


Route::get('/dashboard', [\App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard');
Route::post('/login_check', [\App\Http\Controllers\AdminController::class,'login_check'])->name('Admin.login_check');
Route::get('/admin-login', [\App\Http\Controllers\AdminController::class,'admin']);
Route::get('/visitors', [\App\Http\Controllers\VisitorController::class,'visitorIndex']);
Route::get('/posts', [\App\Http\Controllers\AdminPostController::class,'postIndex']);
Route::get('/activeUser/{id}', [\App\Http\Controllers\VisitorController::class,'activeUser'])->name('activeUser');
Route::get('/userPost/{id}', [\App\Http\Controllers\AdminPostController::class,'userPost'])->name('userPost');
//
//Route::get('/visitors', function () {
//    return view('Admin.visitors');
//});
//




