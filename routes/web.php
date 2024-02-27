<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RkpmdsController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\PoliController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    ['register' => false,]
);

Route::get('/home', [HomeController::class, 'index'])->name('home');


//Dokter
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
Route::post('/tdokter', [DokterController::class, 'store'])->name('tambahdokter');
Route::get('/editdokter/{id}', [DokterController::class, 'edit'])->name('editdokter');
Route::post('/updatedokter/{id}', [DokterController::class, 'update'])->name('updatedokter');
Route::get('/deletedokter/{id}', [DokterController::class, 'destroy'])->name('deletedokter');

//Ruangan
Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan');
Route::post('/truangan', [RuanganController::class, 'store'])->name('tambahruangan');
Route::post('/updateruangan{id}', [RuanganController::class, 'update'])->name('updateruangan');
Route::get('/editruangan/{id}', [RuanganController::class, 'edit'])->name('editruangan');
Route::get('/deleteruangan/{id}', [RuanganController::class, 'destroy'])->name('deleteruangan');

//Obat
Route::get('/obat', [ObatController::class, 'index'])->name('obat');
Route::post('/tobat', [ObatController::class, 'store'])->name('tobat');
Route::post('/updateobat/{id}', [ObatController::class, 'update'])->name('updateobat');
Route::get('/editobat/{id}', [ObatController::class, 'edit'])->name('editobat');
Route::get('/deleteobat/{id}', [ObatController::class, 'destroy'])->name('deleteobat');

//Pasien
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
Route::post('/tpasien', [PasienController::class, 'store'])->name('tpasien');
Route::post('/updatepasien/{id}', [PasienController::class, 'update'])->name('updatepasien');
Route::get('/editpasien/{id}', [PasienController::class, 'edit'])->name('editpasien');
Route::get('/deletepasien/{id}', [PasienController::class, 'destroy'])->name('deletepasien');

//Rekap Medis
Route::get('/rkpmds', [RkpmdsController::class, 'index'])->name('rkpmds');
Route::post('/trkpmds', [RkpmdsController::class, 'store'])->name('trkpmds');
Route::post('/updaterkpmds/{id}', [RkpmdsController::class, 'update'])->name('updaterkpmds');
Route::get('/editrkpmds/{id}', [RkpmdsController::class, 'edit'])->name('editrkpmds');
Route::get('/deleterkpmds/{id}', [RkpmdsController::class, 'destroy'])->name('deleterkpmds');


//Poli
Route::get('/poli', [PoliController::class, 'index'])->name('poli');
Route::get('/poli/show/{id}', [PoliController::class, 'show'])->name('showpoli');
Route::post('/tpoli', [PoliController::class, 'store'])->name('tpoli');
Route::post('/updatepoli/{id}', [PoliController::class, 'update'])->name('updatepoli');
Route::get('/editpoli/{id}', [PoliController::class, 'edit'])->name('editpoli');
Route::get('/deletepoli/{id}', [PoliController::class, 'destroy'])->name('deletepoli');
