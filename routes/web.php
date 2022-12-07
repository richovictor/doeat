<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\RestoController;
// use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\FileUploadController;

Route::get('/', [CollectionController::class,'poto']);
Route::get('/welcome ', [CollectionController::class,'poto']);
Route::get('/login',[RestoController::class,'login']);
Route::get('/menu',[RestoController::class,'menu'])->name('index.menu');
Route::get('/register',[RestoController::class,'register'])->name('register.awal');
Route::post('/register',[UserController::class,'store'])->name('proses.register');
Route::get('/email/need-verification',[VerificationController::class, 'notice'])->middleware('auth')->
name('verification.notice');
Route::get('/email/verify/{id}/{hash}',[VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->
name('verification.verify');

Route::get('/forgot',[RestoController::class,'forgot']);
Route::get('/tentang',[RestoController::class,'tentang']);

//signup
Route::post('/proses-form',[RestoController::class,'prosesFormValidator'])
    ->name('proses.form');

//login
Route::get('/login',[loginController::class,'index']);
Route::post('/login',[loginController::class,'auth'])
    ->name('proses.login');

//logout
Route::get('/logout',[LoginController::class,'logout']);

//File Upload
Route::get('/file-upload',[BosController::class,'fileUpload']);


//admin
Route::get('/login-admin',[BosController::class,'loginAdmin']);
Route::get('/admin-dashboard',[BosController::class,'dashboard']);
Route::get('/admin-daftar',[BosController::class,'daftar']);
Route::get('/admin-daftar/create',[BosController::class,'daftar_create']);
Route::get('/admin-kategori',[BosController::class,'kategori']);
Route::get('/admin-kategori/create',[BosController::class,'create_kategori']);
Route::get('/admin-user',[BosController::class,'user']);

//update
Route::get('/admin/pages/makanan/update/{id}',[BosController::class,'update']);
Route::patch('/admin/pages/makanan/update/{id}',[BosController::class,'proses_update']);

//delete
Route::delete('/admin/pages/makanan/delete/{id}',[BosController::class,'destroy']);

//mengarahkan ke insert
Route::POST('/admin-insert-menu',[BosController::class, 'insert'])->name('admin.insert');




//dashboard
// Route::group(["prefix" => "admin","namespace" => "Admin"],function(){
//     Route::get('/dashboard',[DashboardController::class,'index']);
//     Route::get('/makanan',[DashboardController::class,'index']);
//     Route::get('/makanan', function () {
//         return view('admin.pages.makanan.index');
//     });
//     Route::get('/kategori', function () {
//         return view('admin.pages.kategori.index');
//     });
//     Route::get('/user', function () {
//         return view('admin.pages.user.index');
//     });
// });
