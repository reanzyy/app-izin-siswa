<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DispensasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JamPelajaranController;

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
Route::get('/dispensasi/show/{dispensasi:id}', [DispensasiController::class, 'show'])->name('dispensasi.store');
Route::delete('/dispensasi/delete/{dispensasi:id}', [DispensasiController::class, 'delete'])->name('dispensasi.delete');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::get('/kelas/create/store', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/edit/{kelas:id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/edit/update/{kelas:id}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/delete/{kelas:id}', [KelasController::class, 'delete'])->name('kelas.delete');


Route::get('/jampelajaran', [JamPelajaranController::class, 'index'])->name('jampelajaran.index');
Route::get('/jampelajaran/create', [JampelajaranController::class, 'create'])->name('jampelajaran.create');
Route::get('/jampelajaran/create/store', [JampelajaranController::class, 'store'])->name('jampelajaran.store');
Route::get('/jampelajaran/edit/{jam_pelajaran:id}', [JampelajaranController::class, 'edit'])->name('jampelajaran.edit');
Route::put('/jampelajaran/edit/update/{jam_pelajaran:id}', [JampelajaranController::class, 'update'])->name('jampelajaran.update');
Route::delete('/jampelajaran/edit/update/{jam_pelajaran:id}', [JampelajaranController::class, 'delete'])->name('jampelajaran.delete');

Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::get('/guru/create/store', [GuruController::class, 'store'])->name('guru.store');
