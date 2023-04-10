<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DispensasiController;

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
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});

Route::get('/dispensasi', [DispensasiController::class, 'index'])->name('dispensasi.index');
Route::get('/dispensasi/formulir', [DispensasiController::class, 'create'])->name('dispensasi.create');
Route::get('/dispensasi/formulir/create', [DispensasiController::class, 'store'])->name('dispensasi.store');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::get('/kelas/create/add', [KelasController::class, 'store'])->name('kelas.store');
