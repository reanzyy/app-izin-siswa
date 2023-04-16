<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DispensasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JamPelajaranController;
use App\Http\Controllers\LaporanController;

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

Route::resource('dispensasi', DispensasiController::class)->shallow()->only([
    'index', 'create', 'store', 'show', 'destroy',
]);
Route::resource('kelas', KelasController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);
Route::resource('jam', JamPelajaranController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);
Route::resource('guru', GuruController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
