<?php

use App\Http\Controllers\DispensasiController;
use Illuminate\Support\Facades\Route;

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
