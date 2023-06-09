<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\User\DashboardController;
use  App\Http\Controllers\User\LoginController;
use  App\Http\Controllers\Admin\PemberitahuanController;
use  App\Http\Controllers\Admin\RegisterController;
use  App\Http\Controllers\Pegawai\CutiController;
use  App\Http\Controllers\Pegawai\PemberitahuanPegawaiController;
use  App\Http\Controllers\Pegawai\UserPegawaiController;
use  App\Http\Controllers\Pegawai\ChangePasswordPegawaiController;
use  App\Http\Controllers\Staff\ListCutiController;
use  App\Http\Controllers\Staff\UserStaffController;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\ChangePasswordAdmin;
use  App\Http\Controllers\Staff\ChangePasswordStaffController;
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
Route::delete('/pegawai-pengajuan-cuti/hapus/{id}',[CutiController::class,'destroy']);
Route::get('/pegawai-pengajuan-cuti-diterima',[CutiController::class,'status']);
Route::get('/pegawai-pengajuan-cuti-ditolak',[CutiController::class,'tolak']);
Route::get('/pegawai-pengajuan-cuti/edit-cuti/{id}',[CutiController::class,'edit']);
Route::post('/pegawai-pengajuan-cuti/proses-edit-cuti/{id}',[CutiController::class,'update']);
//=====================PegawaiPemberitahuan======================================//
Route::get('/pegawai-announcement',[PemberitahuanPegawaiController::class,'index']);
Route::get('/pegawai-announcement/{slug}',[PemberitahuanPegawaiController::class,'more']);
//=====================ListStaffCuti======================================//
Route::get('/staff/list-cuti-pegawai',[ListCutiController::class,'index']);
Route::get('/staff/list-cuti-pegawai-ditolak',[ListCutiController::class,'tolak']);
Route::get('/staff/list-cuti-pegawai-diterima',[ListCutiController::class,'terima']);
Route::get('/staff/list-cuti-pegawai/jawab-pengajuan-cuti/{id}',[ListCutiController::class,'edit']);
Route::post('/staff/list-cuti-pegawai/proses-jawab-pengajuan-cuti/{id}',[ListCutiController::class,'up']);
//=====================UserPengaturan======================================//
Route::get('/admin/pengaturan',[UserController::class,'index']);
Route::get('/pengaturan/{username}/',[UserController::class,'edit']);
Route::post('/proses-ubah/pengaturan/admin/{id}/',[UserController::class,'update']);
//=====================UserPassword======================================//
Route::get('/admin/password',[ChangePasswordAdmin::class,'index']);
Route::post('/admin/password',[ChangePasswordAdmin::class,'update']);
//=====================UserPegawaiPengaturan======================================//
Route::get('/pegawai-pengaturan',[UserPegawaiController::class,'index']);
Route::get('/pegawai-pengaturan/{username}',[UserPegawaiController::class,'edit']);
Route::post('/proses-ubah/pengaturan/pegawai/{id}',[UserPegawaiController::class,'update']);
//=====================UserPasswordPegawai======================================//
Route::get('/pegawai-password',[ChangePasswordPegawaiController::class,'index']);
Route::post('/pegawai-password',[ChangePasswordPegawaiController::class,'update']);
//=====================UserStaffPengaturan======================================//
Route::get('/staff-pengaturan',[UserStaffController::class,'index']);
Route::get('/staff-pengaturan/{username}',[UserStaffController::class,'edit']);
Route::post('/proses-ubah/pengaturan/staff/{id}',[UserStaffController::class,'update']);
//=====================UserPasswordStaff======================================//
Route::get('/staff-password',[ChangePasswordStaffController::class,'index']);
Route::post('/staff-password',[ChangePasswordStaffController::class,'update']);

