<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\AbjadController;
use App\Http\Controllers\JurusanController;

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
    return view('auth.login');
});

Auth::routes();

// Mahasiswa
Route::get('/indexMahasiswa', [MahasiswaController::class, 'index'])->name('indexMahasiswa');
Route::get('/createMahasiswa', [MahasiswaController::class, 'create'])->name('createMahasiswa');
Route::post('/storeMahasiswa', [MahasiswaController::class, 'store'])->name('storeMahasiswa');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('editMahasiswa');
Route::put('/mahasiswa/{id}/update', [MahasiswaController::class, 'update'])->name('updateMahasiswa');
Route::delete('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy'])->name('deleteMahasiswa');

// Kalkulator
Route::get('/indexCalculator', [CalculatorController::class, 'index'])->name('indexCalculator');
Route::post('/hitung', [CalculatorController::class, 'hitung'])->name('hitungCalculator');

// Cek Huruf
Route::get('/indexHuruf', [AbjadController::class, 'index'])->name('indexHuruf');
Route::post('/cekHuruf', [AbjadController::class, 'cek'])->name('cekHuruf');

// Jurusan
Route::get('/indexJurusan', [JurusanController::class, 'index'])->name('indexJurusan');
Route::get('/createJurusan', [JurusanController::class, 'create'])->name('createJurusan');
Route::post('/storeJurusan', [JurusanController::class, 'store'])->name('storeJurusan');
Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('editJurusan');
Route::put('/jurusan/{id}/update', [JurusanController::class, 'update'])->name('updateJurusan');
Route::delete('/jurusan/{id}/delete', [JurusanController::class, 'destroy'])->name('deleteJurusan');
