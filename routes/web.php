<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\User\DashboardController;
use  App\Http\Controllers\User\LoginController;
use  App\Http\Controllers\Admin\PemberitahuanController;
use  App\Http\Controllers\Admin\RegisterController;
use  App\Http\Controllers\Pegawai\CutiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'post']);
Route::get('/logout',[LoginController::class,'logout']);
//=====================Login======================================//
Route::get('/dashboard',[DashboardController::class,'index']);
//=====================AdminPemberitahuan======================================//
Route::get('/pemberitahuan',[PemberitahuanController::class,'index']);
Route::post('/pemberitahuan',[PemberitahuanController::class,'store']);
Route::delete('/pemberitahuan/hapus/{id}',[PemberitahuanController::class,'hapus']);
Route::get('/pemberitahuan/edit/{slug}',[PemberitahuanController::class,'edit']);
Route::get('/pemberitahuan/{slug}',[PemberitahuanController::class,'more']);
Route::post('/pemberitahuan/proses_edit/{id}',[PemberitahuanController::class,'update']);
//=====================AdminRegister======================================//
Route::get('/register-akun',[RegisterController::class,'index']);
Route::post('/register-akun',[RegisterController::class,'store']);
Route::delete('/register-akun/hapus-akun/{id}',[RegisterController::class,'destroy']);
//=====================PegawaiCuti======================================//
Route::get('/pegawai-pengajuan-cuti',[CutiController::class,'index']);
Route::get('/pegawai/buat-pengajuan-cuti',[CutiController::class,'create']);
Route::post('/pegawai/buat-pengajuan-cuti',[CutiController::class,'store']);

